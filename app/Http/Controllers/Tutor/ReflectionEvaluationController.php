<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\ReflectionAnswerStoreRequest;
use App\Http\Requests\Tutor\ReflectionEvaluationUpdateRequest;
use App\Mail\ReflectionSubmissionForTutorConfirmationMail;
use App\Mail\WorkEvaluatedNotification;
use App\Models\Students\Reflection;
use App\Models\Students\ReflectionAnswer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ReflectionEvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {        
        $reflections = Reflection::withCount([
            'ReflectionAnswer',
            'ReflectionAnswer as awaiting_evaluation_count' => function ($query) {
                $query->where('evaluation_user_id', '<>' ,null);
            }
        ])->orderBy('start_date')->get();

        return view('portal.tutor.evaluation.reflections.reflections_index', compact('reflections'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function allAnswer(string $id)
    {
        //
        $users = User::select(
            'users.id as id',
            'users.name as name',
            'reflection_answers.id as answer_id',
            'reflection_answers.status',
            'reflection_answers.title',
            'reflection_answers.subject',
            'reflection_answers.quote',
            'reflection_answers.description',
            'reflection_answers.evaluation',
            'reflection_answers.evaluation_feedback',
            'reflection_answers.evaluation_user_id'
        )
        ->whereHas('permissions', function ($query) {
            $query->where('name', 'user_students');
        })
        ->leftJoin('reflection_answers', function ($join) use ($id) {
            $join->on('users.id', 'reflection_answers.user_id')
                 ->where('reflection_answers.reflection_id', $id);
        })
        ->orderBy('users.name')
        ->get();

        $reflection = Reflection::find($id);

        return view('portal.tutor.evaluation.reflections.reflections_allAnswer', compact('reflection', 'users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function answer(string $id)
    {
        //
        $reflectionAnswer = ReflectionAnswer::find($id);

        return view('portal.tutor.evaluation.reflections.reflections_answer', compact('reflectionAnswer'));
        
    }

    public function update(ReflectionEvaluationUpdateRequest $request, string $id)
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

        $reflectionAnswer = ReflectionAnswer::find($id);
        $reflectionAnswer->update($request->all());

        // === Envio de e-mail ===
        $user = $reflectionAnswer->User;
        $workTitle = $reflectionAnswer->title ?? 'Atividade Avaliativa';
        $evaluation = $reflectionAnswer->evaluation;
        $evaluatorName = Auth::user()->name ?? 'Avaliador';

        Mail::to($user->email)->send(new WorkEvaluatedNotification( $user->name, $workTitle, $evaluation, $evaluatorName ));

        return redirect()->route('tutor_evaluation_reflections.allAnswer', $reflectionAnswer->reflection_id)
            ->with('success', 'Avaliação atualizada com sucesso e notificação enviada ao aluno!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function send(Reflection $reflection, User $user)
    {
        //
        $reflectionAnswer = ReflectionAnswer::where('reflection_id', $reflection->id)
            ->where('user_id', $user->id)
            ->first();

        if ($reflectionAnswer) {
            return redirect()->route('tutor_evaluation_reflections.allAnswer', $reflection->id)
                ->with('error', 'O aluno já possui uma resposta para esta reflexão.');
        }

        return view('portal.tutor.evaluation.reflections.reflections_send', compact('reflection', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function sendStore(ReflectionAnswerStoreRequest $request, Reflection $reflection, User $user)
    {
        //
        $reflectionAnswer = ReflectionAnswer::where('reflection_id', $reflection->id)
            ->where('user_id', $user->id)
            ->first();

        if ($reflectionAnswer) {
            return redirect()->route('tutor_evaluation_reflections.allAnswer', $reflection->id)
                ->with('error', 'O aluno já possui uma resposta para esta reflexão.');
        }

        //
        $request['reflection_id'] = $reflection->id;
        $request['user_id'] = $user->id;
        $request['status'] = 'Concluído';
        $reflectionSubmission = ReflectionAnswer::create($request->all());

        Mail::to($user->email)->send(new ReflectionSubmissionForTutorConfirmationMail($user, $reflectionSubmission));

        $reflection->update(['works_received' => $reflection->works_received + 1,]);

        return redirect()->route('tutor_evaluation_reflections.allAnswer', $reflection->id)
            ->with('success', 'Reflexão enviada com sucesso!');
    }
}
