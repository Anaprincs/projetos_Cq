<?php

namespace App\Livewire\Aluno;

use App\Models\Aluno;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Perfil extends Component
{
    public $alunoId;
    public $nome;
    public $email;
    public $rm;
    public $serie;
    public $senha;
    public $confirmar_senha;

    public function mount($id)
    {
        $aluno = Perfil::find($id);

        $this->alunoId = $aluno->id;
        $this->nome = $aluno->nome;
        $this->email = $aluno->email;
        $this->rm = $aluno->rm;
        $this->serie = $aluno->serie;
        $this->senha = $aluno->senha;
        $this->serie = $aluno->confirmar_senha;
    }

    // editar essa parte para o aluno só editar o perfil dele, e conferir a serie no cadsastro


    public function salvar()
    {
        $aluno = Aluno::find($this->alunoId);
        $aluno->nome = $this->nome;
        $aluno->email = $this->email;
        $aluno->rm = $this->rm;
        $aluno->senha = $this->senha;
        $aluno->confirmar_senha = $this->confirmar_senha;

        $aluno->save();
        session()->flash('success', 'Aluno Atualizado');

        if (Auth::check() && Auth::user()->$this == $aluno->id);
    }
    

    public function render()
    {
        return view('livewire.aluno.perfil');
    }
}

//migration//model//criação da conexao
//for eachs