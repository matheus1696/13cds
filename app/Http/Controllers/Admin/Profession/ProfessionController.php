<?php

namespace App\Http\Controllers\Admin\Profession;

use App\Http\Controllers\Controller;
use App\Models\Professions\Profession;
use App\Http\Requests\Admin\Profession\ProfessionStoreRequest;
use App\Http\Requests\Admin\Profession\ProfessionUpdateRequest;
use App\Models\User;

class ProfessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Busca todas as profissões cadastradas e ordena por nome
        $professions = Profession::orderBy('title')->get();

        return view('portal.admin.professions.index', compact('professions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('portal.admin.professions.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProfessionStoreRequest $request)
    {
        //Registra uma nova profissão no banco de dados
        Profession::create($request->all());

        return redirect()->route('admin_professions.index')->with('success','Profissão cadastrada com sucesso');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profession $profession)
    {
        //
        return view('portal.admin.professions.form', compact('profession'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfessionUpdateRequest $request, Profession $profession)
    {
        //Atualiza os dados da profissão selecionada
        $profession->update($request->all());

        return redirect()->route('admin_professions.index')->with('success','Profisão alterada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profession $profession)
    {
        //Busca se a profissão possui usuários vinculados
        $professionUser = User::where('profession_id', $profession->id)->count();

        //Verifica se não há usuários vinculados à profissão
        if ($professionUser === 0) {
            
            //Se não houver usuários vinculados, exclui a profissão
            $profession->delete();

            return redirect()->back()->with('success','Profissão excluída com sucesso');
            
        } else {

            return redirect()->back()->with('error','Não foi possível realizar a exclusão da profissão por conter usuários vinculados');

        } 
    }
}
