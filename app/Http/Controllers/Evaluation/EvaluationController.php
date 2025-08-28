<?php

namespace App\Http\Controllers\Evaluation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Evaluation\EvaluationStoreRequest;
use App\Http\Requests\Evaluation\EvaluationUpdateRequest;
use App\Models\Evaluation\Evaluation;
use App\Models\Evaluation\EvaluationAnswer;
use App\Models\Students\Exercise;
use App\Models\Students\PresentialActivity;
use App\Models\Students\Reflection;
use Carbon\Carbon;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Buscar todas as avaliações ordenadas pela data
        $evaluations = Evaluation::orderBy('start_date')->get();

        return view('portal.admin.evaluation.index', compact('evaluations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Busca as atividades presenciais, reflexões e exercícios ordenados pela data de início
        $presentialActivities = PresentialActivity::orderBy('start_date')->get();
        $reflections = Reflection::orderBy('start_date')->get();
        $exercises = Exercise::orderBy('start_date')->get();

        return view('portal.admin.evaluation.form', compact('presentialActivities','reflections','exercises'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EvaluationStoreRequest $request)
    {
        //Busca as atividades presenciais para definir as datas de início e fim da avaliação
        $exercises = Exercise::find($request->exercise_id);

        // Associa a data de início e fim da avaliação com base na data de término do exercício
        $request['start_date'] = Carbon::parse($exercises->end_date)->addDay(1)->format('Y-m-d');
        $request['end_date'] = Carbon::parse($exercises->end_date)->addDay(30)->format('Y-m-d');

        // Cadsatra a avaliação com os dados do request
        Evaluation::create($request->all());

        return redirect()->route('evaluations.index')->with('success','Avaliação do curso cadastrada com sucesso');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evaluation $evaluation)
    {
        //Busca as atividades presenciais, reflexões e exercícios ordenados pela data de início
        $presentialActivities = PresentialActivity::orderBy('start_date')->get();
        $reflections = Reflection::orderBy('start_date')->get();
        $exercises = Exercise::orderBy('start_date')->get();

        return view('portal.admin.evaluation.form', compact('evaluation', 'presentialActivities', 'reflections', 'exercises'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EvaluationUpdateRequest $request, Evaluation $evaluation)
    {
        //Atualiza a avaliação com os dados do request
        $evaluation->update($request->all());

        return redirect()->route('evaluations.index')->with('success','Avaliação alterada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evaluation $evaluation)
    {
        //Busca as respostas vinculadas à avaliação
        $evaluationResponse = EvaluationAnswer::where('evaluation_id', $evaluation->id)->count();

        //Verifica se existem respostas vinculadas à avaliação
        if ($evaluationResponse === 0) {
            
            //Se não houver respostas vinculadas, exclui a avaliação
            $evaluation->delete();

            return redirect()->back()->with('success','Avaliação excluída com sucesso');
        } else {

            return redirect()->back()->with('error','Não foi possível realizar a exclusão da avaliação por conter repostas vinculadas');
        } 
    }
}
