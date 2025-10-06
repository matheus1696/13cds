<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ListernerStoreRequest;
use App\Http\Requests\Admin\ListernerUpdateRequest;
use App\Models\Admin\Listerner;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ListernerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //
        $listerners = Listerner::orderBy('name')->get();

        return view('admin.listerner.listerner_index', compact('listerners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
        return view('admin.listerner.listerner_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ListernerStoreRequest $request): RedirectResponse
    {
        //
        Listerner::create($request->validated());

        return redirect()
            ->route('listerners.index')
            ->with('success','Criação realizada com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(): RedirectResponse
    {
        //
        return redirect()
            ->route('listerners.index')
            ->with('error', 'Página não encontrada');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listerner $listerner): View
    {
        //
        return view('admin.listerner.listerner_edit', compact('listerner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ListernerUpdateRequest $request, Listerner $listerner): RedirectResponse
    {
        // Atualiza o delegate atual com os dados validados
        $listerner->update($request->validated());

        return redirect()
            ->route('listerners.index')
            ->with('success', 'Atualização realizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(): RedirectResponse
    {
        //
        return redirect()
            ->route('listerners.index')
            ->with('error', 'Página não encontrada');
    }
}
