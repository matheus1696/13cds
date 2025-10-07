<?php

namespace App\Livewire;

use App\Models\Admin\Delegate;
use App\Models\Admin\Commission;
use App\Models\Admin\Listerner;
use Livewire\Component;

class Certificates extends Component
{
    public $cpf;
    public $message = '';
    public $delegates;
    public $commissions;
    public $listerner;

    public function mount()
    {
        // inicializa vazios
        $this->delegates = collect();
        $this->commissions = collect();
        $this->listerner = collect();
    }

    public function search()
    {
        $this->message = '';
        $this->delegates = collect();
        $this->commissions = collect();
        $this->listerner = collect();

        $this->delegates = Delegate::where('cpf', $this->cpf)->get();
        $this->commissions = Commission::where('cpf', $this->cpf)->get();
        $this->listerner = Listerner::where('cpf', $this->cpf)->get();

        if (
            $this->delegates->isEmpty() &&
            $this->commissions->isEmpty() &&
            $this->listerner->isEmpty()
        ) {
            $this->message = "CPF não encontrado. Nenhum cadastro localizado.";
        }
    }

    public function render()
    {
        return view('livewire.certificates');
    }
}

