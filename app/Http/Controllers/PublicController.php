<?php

namespace App\Http\Controllers;

use App\Models\Admin\Delegate;
use App\Models\Admin\Proposed;
use Illuminate\View\View;

class PublicController extends Controller
{
    /**
     * Página inicial pública.
     *
     * @return View
     */
    public function home(): View
    {
        return view('public.home');
    }

    /**
     * Página com galeria de fotos.
     *
     * @return View
     */
    public function fotos(): View
    {
        return view('public.fotos');
    }

    /**
     * Página do regimento.
     *
     * @return View
     */
    public function regimento(): View
    {
        return view('public.regimento');
    }

    /**
     * Página do decreto.
     *
     * @return View
     */
    public function decreto(): View
    {
        return view('public.decreto');
    }

    /**
     * Página da convocatória.
     *
     * @return View
     */
    public function convocatoria(): View
    {
        return view('public.convocatoria');
    }

    /**
     * Página da programação.
     *
     * @return View
     */
    public function programacao(): View
    {
        return view('public.programacao');
    }

    /**
     * Lista todos os delegados para exibição pública.
     *
     * @return View
     */
    public function delegados(): View
    {
        // Carrega também o segmento do delegado (se existir)
        $delegados = Delegate::with('Segment')->orderBy('name')->get();

        return view('public.delegados', compact('delegados'));
    }

    /**
     * Lista todas as propostas para exibição pública.
     *
     * @return View
     */
    public function propostas(): View
    {
        $propostas = Proposed::orderBy('title')->get();

        return view('public.propostas', compact('propostas'));
    }
}
