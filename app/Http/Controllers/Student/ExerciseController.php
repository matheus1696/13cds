<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\ExerciseAnswerStoreRequest;
use App\Mail\ExerciseSubmissionConfirmationMail;
use App\Models\Students\Exercise;
use App\Models\Students\ExerciseAnswer;
use App\Models\Students\ExerciseUser;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Busca todas as reflexões e carrega as respostas do usuário logado
        $exercises = Exercise::orderBy('start_date')->get();
        $exerciseUsers = ExerciseUser::where('user_id', Auth::user()->id)->get();

        return view('portal.students.exercises.index', compact('exercises', 'exerciseUsers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Exercise $exercise)
    {
        //
        if (now()->lt($exercise->start_date) || now()->gt(Carbon::parse($exercise->end_date)->addDay())) {
            return redirect()->route('reflections.index')->with('error', 'O fichamento não está disponível no momento.');
        }

        // Pega IDs das respostas já vinculadas ao exercício
        $linkedExerciseAnswerIds = ExerciseAnswer::where('exercise_id', $exercise->id)->pluck('id');

        // Pega IDs dos usuários que já estão vinculados à atividade
        $linkedUserIds = ExerciseUser::whereIn('exercise_answer_id', $linkedExerciseAnswerIds)->pluck('user_id');

        // Agora pega só os alunos que ainda NÃO estão vinculados
        $users = User::whereHas('permissions', function ($query) {
                $query->where('name', 'user_students');
            })
            ->whereNotIn('id', $linkedUserIds)
            ->orderBy('name')
            ->get();

        return view('portal.students.exercises.create', compact('exercise', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExerciseAnswerStoreRequest $request, Exercise $exercise)
    {
        // Definindo os dados necessários
        $data = $request->validated();
        $data['exercise_id'] = $exercise->id;
        $data['user_id'] = Auth::id();
        $data['status'] = 'Concluído';

        // Criando o registro
        $exerciseSubmission = ExerciseAnswer::create($data);

        // Garante que o usuário responsável pelo envio seja adicionado como participante
        $participants = $request->has('participants') ? $request->participants : [];
        $participants[] = Auth::id();

        // Associa os participantes com sync
        $exerciseSubmission->ExerciseUsers()->sync(array_unique($participants)); // Remove duplicados

        //Envia e-mail de confirmação
        $exerciseAnswerUsers = ExerciseUser::where('exercise_answer_id', $exerciseSubmission->id)->get();

        $exercise->update(['works_received' => $exercise->works_received + 1,]);

        foreach ($exerciseAnswerUsers as $key => $exerciseAnswerUser) {
            Mail::to($exerciseAnswerUser->User->email)->send(new ExerciseSubmissionConfirmationMail($exerciseAnswerUser->User, $exerciseSubmission));
        }        

        return redirect()->route('exercises.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Exercise $exercise)
    {
        //
        // Pega IDs das respostas já vinculadas ao exercício
        $linkedExerciseAnswerIds = ExerciseAnswer::where('exercise_id', $exercise->id)->pluck('id');

        $exerciseUserId = ExerciseUser::whereIn('exercise_answer_id', $linkedExerciseAnswerIds)
        ->where('user_id', Auth::user()->id)
        ->first();

        $exerciseAnswer = ExerciseAnswer::find($exerciseUserId->exercise_answer_id);

        return view('portal.students.exercises.show', compact('exerciseAnswer'));
    }
}
