<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\ExerciseAnswerStoreRequest;
use App\Http\Requests\Tutor\ExerciseEvaluationUpdateRequest;
use App\Mail\ExerciseSubmissionForTutorConfirmationMail;
use App\Mail\WorkEvaluatedNotification;
use App\Models\Students\Exercise;
use App\Models\Students\ExerciseAnswer;
use App\Models\Students\ExerciseUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ExerciseEvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $exercises = Exercise::withCount([
            'ExerciseAnswer',
            'ExerciseAnswer as awaiting_evaluation_count' => function ($query) {
                $query->where('evaluation_user_id', '<>' ,null);
            }
        ])->orderBy('start_date')->get();

        return view('portal.tutor.evaluation.exercises.exercises_index', compact('exercises'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function allAnswer(string $id)
    {
        //
        $exerciseAnswers = ExerciseAnswer::join('users', 'users.id', '=', 'exercise_answers.user_id')
            ->where('exercise_answers.exercise_id', $id)
            ->orderBy('users.name')
            ->select('exercise_answers.*') // Garante que os dados da model estejam corretos
            ->get();

        return view('portal.tutor.evaluation.exercises.exercises_allAnswer', compact('exerciseAnswers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function answer(string $id)
    {
        //
        $exerciseAnswer = ExerciseAnswer::find($id);
        $exerciseAnswerUsers = ExerciseUser::where('exercise_answer_id', $exerciseAnswer->id)->get();

        return view('portal.tutor.evaluation.exercises.exercises_answer', compact('exerciseAnswer', 'exerciseAnswerUsers'));
    }

    public function update(ExerciseEvaluationUpdateRequest $request, string $id)
    {
        $request['evaluation_user_id'] = Auth::user()->id; 
        $request['score'] = $request['dominio_conteudo'] + $request['organizacao_estrutura'] + $request['pensamento_critico'] + $request['uso_referencias'];

        if ($request['score'] >= 6) {
            $request['evaluation'] = 'Elevado';
        } elseif ($request['score'] === 5 || $request['score'] === 4) {
            $request['evaluation'] = 'Satisfatório';
        } else {
            $request['evaluation'] = 'Em Evolução';
        }

        $exerciseAnswer = ExerciseAnswer::find($id);
        $exerciseAnswer->update($request->all());


        $exerciseAnswerUsers = ExerciseUser::where('exercise_answer_id', $exerciseAnswer->id)->get();

        foreach ($exerciseAnswerUsers as $key => $value) {
            
            // === Envio de e-mail ===
            $user = $value->User;
            $workTitle = $exerciseAnswer->title ?? 'Atividade Avaliativa';
            $evaluation = $exerciseAnswer->evaluation;
            $evaluatorName = Auth::user()->name ?? 'Avaliador';

            Mail::to($user->email)->send(new WorkEvaluatedNotification( $user->name, $workTitle, $evaluation, $evaluatorName ));

        }

        return redirect()->route('tutor_evaluation_exercises.allAnswer', $exerciseAnswer->exercise_id)
            ->with('success', 'Avaliação atualizada com sucesso e notificação enviada ao aluno!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function send(Exercise $exercise)
    {
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

        return view('portal.tutor.evaluation.exercises.exercises_send', compact('exercise', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function sendStore(ExerciseAnswerStoreRequest $request, Exercise $exercise)
    {
        // Definindo os dados necessários
        $data = $request->all();

        $data['exercise_id'] = $exercise->id;
        $data['status'] = 'Concluído';

        // Criando o registro
        $exerciseSubmission = ExerciseAnswer::create($data);

        // Garante que o usuário responsável pelo envio seja adicionado como participante
        $participants = $request->has('participants') ? $request->participants : [];

        // Associa os participantes com sync
        $exerciseSubmission->ExerciseUsers()->sync(array_unique($participants)); // Remove duplicados

        //Envia e-mail de confirmação
        $exerciseAnswerUsers = ExerciseUser::where('exercise_answer_id', $exerciseSubmission->id)->get();

        $exercise->update(['works_received' => $exercise->works_received + 1,]);

        foreach ($exerciseAnswerUsers as $exerciseAnswerUser) {
            Mail::to($exerciseAnswerUser->User->email)->send(new ExerciseSubmissionForTutorConfirmationMail($exerciseAnswerUser->User, $exerciseSubmission));
        }

        return redirect()->route('tutor_evaluation_exercises.allAnswer', $exercise->id)
            ->with('success', 'Atividade enviada com sucesso!');
    }
}
