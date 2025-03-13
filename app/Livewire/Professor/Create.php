<?php

namespace App\Livewire\Professor;

use App\Models\Professor;
use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $email;
    public $cpf;
    public $senha;
    public $confirmar_senha;

    public function render()
    {
        return view('livewire.professor.create');
    }

    public function store()
    {
        Professor::create([
            'nome' => $this->nome,
            'email' => $this->email,
            'cpf' => $this->cpf,
            'senha' => $this->senha,
            'confirmar_senha' => $this->confirmar_senha
        ]);

        session()->flash('success', 'Cadastro Realizado');

    }
}
