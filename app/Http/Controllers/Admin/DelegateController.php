<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DelegateStoreRequest;
use App\Http\Requests\Admin\DelegateUpdateRequest;
use App\Models\Admin\Delegate;
use App\Models\Admin\Segment;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DelegateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //
        $delegates = Delegate::orderBy('name')->get();

        return view('admin.delegate.delegate_index', compact('delegates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
        $segments = Segment::orderBy('name')->get();

        return view('admin.delegate.delegate_create', compact('segments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DelegateStoreRequest $request): RedirectResponse
    {
        //
        Delegate::create($request->validated());

        return redirect()
            ->route('delegates.index')
            ->with('success','Criação realizada com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(): RedirectResponse
    {
        //
        return redirect()
            ->route('delegates.index')
            ->with('error', 'Página não encontrada');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Delegate $delegate): View
    {
        //
        $segments = Segment::orderBy('name')->get();

        return view('admin.delegate.delegate_edit', compact('delegate', 'segments'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DelegateUpdateRequest $request, Delegate $delegate): RedirectResponse
    {
        // Atualiza o delegate atual com os dados validados
        $delegate->update($request->validated());

        return redirect()
            ->route('delegates.index')
            ->with('success', 'Atualização realizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(): RedirectResponse
    {
        //
        return redirect()
            ->route('delegates.index')
            ->with('error', 'Página não encontrada');
    }
}
