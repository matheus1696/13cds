<?php

namespace App\Http\Controllers\Evaluation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Evaluation\EvaluationAnswerStoreRequest;
use App\Models\Evaluation\Evaluation;
use App\Models\Evaluation\EvaluationAnswer;
use Illuminate\Support\Facades\Auth;

class EvaluationAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Buscar todas as avaliações ordenadas pela data
        $evaluation = Evaluation::orderBy('start_date')->get();

        return view('portal.evaluation.index', compact('evaluation'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Evaluation $evaluation)
    {
        //
        return view('portal.evaluation.create', compact('evaluation'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EvaluationAnswerStoreRequest $request, Evaluation $evaluation)
    {
        //Associando o usuário e a avaliação ao request
        $request['user_id'] = Auth::user()->id;
        $request['evaluation_id'] = $evaluation->id;

        // Registrando a resposta da avaliação
        EvaluationAnswer::create($request->all());

        return redirect()->route('dashboard')->with('success', 'Avaliação enviada com sucesso!');
    }
}
