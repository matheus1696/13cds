<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Student\PresentialActivityStoreRequest;
use App\Http\Requests\Admin\Student\PresentialActivityUpdateRequest;
use App\Models\Students\PresentialActivity;

class PresentialActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Busca os encontros presenciais ordenados pela data de início
        $presentialActivities = PresentialActivity::orderBy('start_date')->get();

        return view('portal.admin.presential-activity.index', compact('presentialActivities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('portal.admin.presential-activity.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PresentialActivityStoreRequest $request)
    {
        //Registra o encontro presencial
        PresentialActivity::create($request->all());

        return redirect()->route('admin_presential_activities.index')->with('success','Atividade prática criada com sucesso');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PresentialActivity $presentialActivity)
    {
        //
        //Verifica se o encontro presencial é anterior à data atual
        if ($presentialActivity->start_date < now()) {

            return redirect()->back()->with('error','Não é possível alterar o encontro presencial com data anterior a de hoje');

        } else {

            return view('portal.admin.presential-activity.form', compact('presentialActivity'));
        }  
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PresentialActivityUpdateRequest $request, PresentialActivity $presentialActivity)
    {
        //Atualiza os dados do encontro presencial
        $presentialActivity->update($request->all());

        return redirect()->route('admin_presential_activities.index')->with('success','Atividade prática alterada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PresentialActivity $presentialActivity)
    {
        //Verifica se o encontro presencial é anterior à data atual
        if ($presentialActivity->start_date < now()) {

            return redirect()->back()->with('error','Não é possível excluir o encontro presencial com data anterior a de hoje');

        } else {
            //Realiza a exclusão da atividade prática
            $presentialActivity->delete();

            return redirect()->back()->with('success','Atividade Prática excluída com sucesso');  
        }        
    }
}
