<?php

namespace App\Livewire\Aluno;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Perfil extends Component
{
public $nome;
public $email;
public $rm;
public $senha;
public $confirmar_senha;

public function mount($id){ 
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

if(Auth::check() && Auth::user->$this == $user->id);

public function salvar(){
    $tarefa = Tarefa::find($this->tarefaId);
$tarefa->nome = $this->nome;
$tarefa->data_hora = $this->data_hora;
$tarefa->descricao = $this->descricao;

$tarefa->save();
session()->flash('success', 'Tarefa Atualizada');

}


    public function render()
    {
        return view('livewire.tarefa.editar');
    }
}
    public function render()
    {
        return view('livewire.aluno.perfil');
    }
}
