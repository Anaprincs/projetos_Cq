<?php

namespace App\Livewire\Professor;

use App\Models\Professor;
use Livewire\Component;

class Edit extends Component
{
    public $nome;
    public $email;
    public $cpf;
    public $senha;
    public $confirmar_senha;
    public $professorId;

    protected $listeners =
    [
        'editarProfessor',
        'closeEditModal' => 'fecharModal'
    ];

    public function fecharModal(){
        $this->dispatch('hideModal');
    }

    public function render()
    {
        return view('livewire.professor.edit');
    }

    public function editarProfessor($professorId)
    {
        $professor = Professor::find($professorId);

        if ($professor) {
            $this->professorId=$professor->id;
            $this->nome = $professor->nome;
            $this->email = $professor->email;
            $this->cpf = $professor->cpf;
            $this->senha = $professor->senha;
            $this->confirmar_senha = $professor->confirmar_senha;

            $this->dispatch('openEditModal');
        }
    }

    public function salvar()
    {
        $professor = Professor::find($this->professorId);

        if ($professor) {
            $professor->update([
                'nome' => $this->nome,
                'email' => $this->email,
                'cpf' => $this->cpf,
                'senha' => $this->senha,
                'confirmar_senha' => $this->confirmar_senha
            ]);

            $this->dispatch('CadastroAtualizado');
            $this->dispatch('fecharModalEdicao');
            session()->flash('message', 'Cadastro Atualizado');
        }
    }
}
