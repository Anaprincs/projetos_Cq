<?php

namespace App\Livewire\Aluno;

use App\Models\Aluno;
use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $data_nascimento;
    public $email;
    public $rm;
    public $serie;
    public $senha;
    public $confirmar_senha;

    public function render()
    {
        return view('livewire.aluno.create');
    }

    public function store()
    {
        Aluno::create([
            'nome' => $this->nome,
            'data_nascimento' => $this->data_nascimento,
            'email' => $this->email,
            'rm' => $this->rm,
            'senha' => $this->senha,
            'serie' => $this->serie,
            'confirmar_senha' => $this->confirmar_senha
        ]);

        session()->flash('success', 'Cadastro Realizado');

    }

    
}


