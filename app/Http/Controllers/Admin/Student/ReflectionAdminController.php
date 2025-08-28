<?php

namespace App\Http\Controllers\Admin\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Student\ReflectionStoreRequest;
use App\Http\Requests\Admin\Student\ReflectionUpdateRequest;
use App\Models\Students\Reflection;
use App\Models\Students\ReflectionAnswer;

class ReflectionAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $reflections = Reflection::orderBy('start_date')->get();

        return view('portal.admin.reflections.index', compact('reflections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('portal.admin.reflections.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReflectionStoreRequest $request)
    {
        //
        Reflection::create($request->all());

        return redirect()->route('admin_reflections.index')->with('success','Fichamento criado com sucesso');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reflection $reflection)
    {
        //
        return view('portal.admin.reflections.form', compact('reflection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReflectionUpdateRequest $request, Reflection $reflection)
    {
        //
        $reflection->update($request->all());

        return redirect()->route('admin_reflections.index')->with('success','Fichamento alterada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reflection $reflection)
    {
        //
        $reflectionAnswer = ReflectionAnswer::where('reflection_id', $reflection->id)->count();

        if ($reflectionAnswer === 0) {
            $reflection->delete();
            return redirect()->back()->with('success','Fichamento excluída com sucesso');
        } else {
            return redirect()->back()->with('error','Não foi possível realizar a exclusão fichamento contém relatórios vinculados');
        }        
    }
}
