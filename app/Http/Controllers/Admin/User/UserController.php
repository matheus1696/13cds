<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UserStoreRequest;
use App\Mail\FirstAccessMail;
use App\Models\User;
use App\Models\User\Permission;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //
        $users = User::orderBy('name')->get();
        $dbPermissions = Permission::all();

        return view('admin.users.index', compact('users', 'dbPermissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request): RedirectResponse
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
    public function permission(Request $request, User $user): RedirectResponse
    {
        // Valida as permissões enviadas
        $validated = $request->validate([
            'permissions'   => 'array',
            'permissions.*' => 'string|exists:permissions,name',
        ]);

        // Sincroniza direto com as permissões validadas
        $user->syncPermissions($validated['permissions'] ?? []);

        return back()->with('success', 'Permissões atualizadas com sucesso!');
    }
}
