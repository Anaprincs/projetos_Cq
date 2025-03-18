<?php

namespace App\Livewire\Professor;

use App\Models\Professor;
use Livewire\Component;

class Index extends Component
{

    public $nome;
    public $email;
    public $cpf;
    public $senha;
    public $confirmar_senha;
    public $professorId;

    protected $listeners = [
        'abrirModalEdicao',
        'cadastroAtualizada' => 'render'
    ];

    public function render()
    {
        $professor = Professor::all();
        return view('livewire.professor.index', compact('professor'));
    }

public function abrirModalVisualizar ($professorId){
        $professor = Professor::find($professorId);

        if($professor){
            $this->nome = $professor->nome;
            $this->email = $professor->email;
            $this->cpf = $professor->cpf;
            $this->senha = $professor->senha;
            $this->confirmar_senha = $professor->confirmar_senha;
        

        }
    }
    public function abrirModalExclusao($professorId){
        $this->professorId = $professorId; 
    }
    
    public function abrirModalEdicao($professorId){
        $this->dispatch('editarProfessor', professorId: $professorId);
    }

    public function excluir(){
        if($this->professorId){
            Professor::find($this->professorId)->delete(); 
        }
    }

}
