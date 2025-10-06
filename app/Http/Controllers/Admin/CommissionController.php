<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CommissionStoreRequest;
use App\Http\Requests\Admin\CommissionUpdateRequest;
use App\Models\Admin\Commission;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CommissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //
        $commissions = Commission::orderBy('name')->get();

        return view('admin.commission.commission_index', compact('commissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
        return view('admin.commission.commission_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommissionStoreRequest $request): RedirectResponse
    {
        //
        Commission::create($request->validated());

        return redirect()
            ->route('commissions.index')
            ->with('success','Criação realizada com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(): RedirectResponse
    {
        //
        return redirect()
            ->route('commissions.index')
            ->with('error', 'Página não encontrada');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commission $commission): View
    {
        //
        return view('admin.commission.commission_edit', compact('commission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CommissionUpdateRequest $request, Commission $commission): RedirectResponse
    {
        // Atualiza o delegate atual com os dados validados
        $commission->update($request->validated());

        return redirect()
            ->route('commissions.index')
            ->with('success', 'Atualização realizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(): RedirectResponse
    {
        //
        return redirect()
            ->route('commissions.index')
            ->with('error', 'Página não encontrada');
    }
}
