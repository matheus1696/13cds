<?php

namespace App\Http\Controllers;

use App\Models\Admin\Commission;
use App\Models\Admin\Delegate;
use App\Models\Admin\Listerner;
use App\Models\Admin\Proposed;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
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
        $delegados = Delegate::where('type', 'Titular')->orderBy('origin')->orderBy('segment_id')->orderBy('name')->with('Segment')->get();

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

    /**
     * Exibe a página de certificados e realiza a busca por CPF.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function certificados(Request $request): View
    {
        // Inicializa as coleções vazias
        $cpf = '';
        $delegates = [];
        $commissions = [];
        $listerner = [];

        // Se houver CPF no GET, realiza a validação e busca
        if ($request->has('cpf')) {

            $cpf = $request->input('cpf');

            $delegates = Delegate::where('cpf', $cpf)->get();
            $commissions = Commission::where('cpf', $cpf)->get();
            $listerner = Listerner::where('cpf', $cpf)->get();
        }

        return view('public.certificados', compact('cpf', 'delegates', 'commissions', 'listerner'));
    }

    public function printDelegate(int $id): \Illuminate\Http\Response
    {
        $delegate = Delegate::findOrFail($id);

        $pdf = PDF::loadView('certificates.delegate', compact('delegate'));

        return $pdf->stream("Certificado_Delegado_{$delegate->name}.pdf");
    }

    public function printCommission(int $id): \Illuminate\Http\Response
    {
        $commission = Commission::findOrFail($id);

        $pdf = Pdf::loadView('certificates.commission', compact('commission'));

        return $pdf->stream("Certificado_Comissao_{$commission->name}.pdf");
    }

    public function printListener(int $id): \Illuminate\Http\Response
    {
        $listener = Listerner::findOrFail($id);

        $pdf = PDF::loadView('certificates.listener', compact('listener'));

        return $pdf->stream("Certificado_Ouvinte_{$listener->name}.pdf");
    }
}
