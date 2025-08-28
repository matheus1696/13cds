<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UserStoreRequest;
use App\Mail\FirstAccessMail;
use App\Models\User;
use App\Models\User\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::orderBy('name')->get();
        $dbPermissions = Permission::all();

        return view('portal.admin.users.index', compact('users', 'dbPermissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('portal.admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        //
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'cpf' => $request->cpf,
            'password' => Hash::make($request->cpf),
            'profession' => $request->profession,
        ])->givePermissionTo('user');

        // Enviar o e-mail de primeiro acesso
        Mail::to($user->email)->send(new FirstAccessMail($user));

        return redirect()->route('users.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function permission(Request $request, User $user)
    {
        // Obtém as permissões enviadas no formulário e garante que os IDs sejam inteiros
        $permissions = array_map('intval', $request->input('permissions', []));
            
        // Verifica se todas as permissões enviadas existem no banco de dados
        foreach ($permissions as $permissionId) {
            if (!\Spatie\Permission\Models\Permission::find($permissionId)) {
                return redirect()->back()->withErrors("Permissão com ID $permissionId não encontrada.");
            }
        }

        // Sincroniza as permissões com o usuário
        $user->syncPermissions($permissions);

        return redirect()->back()->with('success', 'Permissões atualizadas com sucesso!');
    }
}
