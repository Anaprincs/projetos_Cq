<?php

namespace App\Livewire\Aluno;

use App\Models\Aluno;
use Livewire\Component;

class Index extends Component
{
    public $alunoId;
    public $nome;
    public $data_nascimento;
    public $email;
    public $rm;
    public $senha;
    public $confirmar_senha;

    protected $listeners = [
        'abrirModalEdicao',
        'tarefaAtualizada' => 'render'
    ];

    public function render()
    {
        $alunos = Aluno::all();
        return view('livewire.aluno.index', compact('alunos'));
    }

    public function abrirModalVisualizar ($alunoId){
        $alunos = Aluno::find($alunoId);

        if($alunos){
            $this->nome = $alunos->nome;
            $this->email = $alunos->email;
            $this->data_nascimento = $alunos->data_nascimento;
            $this->senha = $alunos->senha;
            $this->confirmar_senha = $alunos->confirmar_senha;
            $this->rm = $alunos->rm;

        }
    }
    public function abrirModalExclusao($alunoId){
        $this->alunoId = $alunoId; 
    }
    
    public function abrirModalEdicao($alunoId){
        $this->dispatch('editarAluno', alunoId: $alunoId);
    }

    public function excluir(){
        if($this->alunoId){
            Aluno::find($this->alunoId)->delete(); 
        }
    }
}
