<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Student\ExerciseStoreRequest;
use App\Http\Requests\Admin\Student\ExerciseUpdateRequest;
use App\Models\Students\Exercise;
use App\Models\Students\ExerciseAnswer;

class ExerciseAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $exercises = Exercise::orderBy('start_date')->get();

        return view('portal.admin.exercises.index', compact('exercises'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('portal.admin.exercises.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExerciseStoreRequest $request)
    {
        //
        Exercise::create($request->all());

        return redirect()->route('admin_exercises.index')->with('success','Atividade prática criada com sucesso');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exercise $exercise)
    {
        //
        return view('portal.admin.exercises.form', compact('exercise'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ExerciseUpdateRequest $request, Exercise $exercise)
    {
        //
        $exercise->update($request->all());

        return redirect()->route('admin_exercises.index')->with('success','Atividade prática alterada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exercise $exercise)
    {
        //
        $exerciseAnswer = ExerciseAnswer::where('exercise_id', $exercise->id)->count();

        if ($exerciseAnswer === 0) {
            $exercise->delete();
            return redirect()->back()->with('success','Atividade Prática excluída com sucesso');
        } else {
            return redirect()->back()->with('error','Não foi possível realizar a exclusão atividade prática contém relatórios vinculados');
        }   
    }
}
