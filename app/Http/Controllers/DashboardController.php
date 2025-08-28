<?php

namespace App\Http\Controllers;

use App\Models\Evaluation\Evaluation;
use App\Models\Evaluation\EvaluationAnswer;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Verifica as avaliações
        $allEvaluations = Evaluation::whereDate('end_date', '>=', now())
            ->whereDate('start_date', '<=', now())
            ->orderBy('title')
            ->orderBy('start_date')
            ->get();

        // Busca as respostas do usuário autenticado
        $userAnswers = EvaluationAnswer::where('user_id', auth()->id())->get();

        // Verifica das perguntas que o usuário respondeu
        $answeredIds = $userAnswers->pluck('evaluation_id')->toArray();

        // Perguntas não respondidas
        $unansweredEvaluations = $allEvaluations->whereNotIn('id', $answeredIds);

        return view('portal.dashboard', compact('unansweredEvaluations'));
    }
}
