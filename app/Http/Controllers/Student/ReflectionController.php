<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\ReflectionAnswerStoreRequest;
use App\Mail\ReflectionSubmissionConfirmationMail;
use App\Models\Students\Reflection;
use App\Models\Students\ReflectionAnswer;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ReflectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Busca todas as reflexões e carrega as respostas do usuário logado
        $reflections = Reflection::orderBy('start_date')->get();
        $reflectionAnswers = ReflectionAnswer::where('user_id', Auth::user()->id)->get();

        return view('portal.students.reflections.index', compact('reflections', 'reflectionAnswers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Reflection $reflection)
    {
        //
        if (now()->lt($reflection->start_date) || now()->gt(Carbon::parse($reflection->end_date)->addDay())) {
            return redirect()->route('reflections.index')->with('error', 'O fichamento não está disponível no momento.');
        }

        return view('portal.students.reflections.create', compact('reflection'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReflectionAnswerStoreRequest $request, Reflection $reflection)
    {
        //
        $request['reflection_id'] = $reflection->id;
        $request['user_id'] = Auth::user()->id;
        $request['status'] = 'Concluído';
        $reflectionSubmission = ReflectionAnswer::create($request->all());

        $user = Auth::user();
        Mail::to($user->email)->send(new ReflectionSubmissionConfirmationMail($user, $reflectionSubmission));

        $reflection->update(['works_received' => $reflection->works_received + 1,]);

        return redirect()->route('reflections.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reflection $reflection)
    {
        //
        $reflectionAnswer = ReflectionAnswer::where('reflection_id', $reflection->id)
            ->where('user_id', Auth::user()->id)
            ->first();

        return view('portal.students.reflections.show', compact('reflectionAnswer'));
    }
}
