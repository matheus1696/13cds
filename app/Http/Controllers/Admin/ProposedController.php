<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProposedStoreRequest;
use App\Http\Requests\Admin\ProposedUpdateRequest;
use App\Models\Admin\Proposed;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProposedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //
        $proposeds = Proposed::orderBy('title')->get();

        return view('admin.proposed.proposed_index', compact('proposeds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
        return view('admin.proposed.proposed_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProposedStoreRequest $request): RedirectResponse
    {
        //
        Proposed::create($request->validated());

        return redirect()
            ->route('proposeds.index')
            ->with('success', 'Proposta criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(): RedirectResponse
    {
        //
        return redirect()
            ->route('proposeds.index')
            ->with('error', 'Página não Encontrada');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proposed $proposed): View
    {
        //
        return view('admin.proposed.proposed_edit', compact('proposed'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProposedUpdateRequest $request, Proposed $proposed): RedirectResponse
    {
        //
        $proposed->update($request->validated());

        return redirect()
            ->route('proposeds.index')
            ->with('success', 'Proposta atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(): RedirectResponse
    {
        //
        return redirect()
            ->route('proposeds.index')
            ->with('error', 'Página não Encontrada');
    }
}
