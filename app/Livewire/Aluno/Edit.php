<?php

namespace App\Livewire\Aluno;

use App\Models\Aluno;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Edit extends Component
{
    public $alunoId;
    public $nome;
    public $data_nascimento;
    public $email;
    public $rm;
    public $senha;
    public $confirmar_senha;


    protected $listeners =
    [
        'editarCadastro',
        'closeEditModal' => 'fecharModal'
    ];

    public function fecharModal(){
        $this->dispatch('hideModal');
    }

    public function render()
    {
        return view('livewire.aluno.edit');
    }

    public function editarCadastro($alunosId)
    {
        $alunos = Aluno::find($alunosId);

        if ($alunos) {
            $this->alunoId=$alunos->alunoId;
            $this->nome = $alunos->nome;
            $this->email = $alunos->email;
            $this->data_nascimento = $alunos->data_nascimento;
            $this->senha = $alunos->senha;
            $this->confirmar_senha = $alunos->confirmar_senha;
            $this->rm = $alunos->rm;

            $this->dispatch('openEditModal');
        }
    }

    public function salvar()
    {
        $aluno = Aluno::find($this->alunoId);

        if ($aluno) {
            $aluno->update([
                'nome' => $this->nome,
                'data_nascimento' => $this->data_nascimento,
                'rm' => $this->rm,
                'email' => $this->email,
                'senha' => $this->senha,
                'confirmar_senha' => $this->confirmar_senha
            ]);

            $this->dispatch('CadastroAtualizado');
            $this->dispatch('fecharModalEdicao');
            session()->flash('message', 'Cadastro Atualizado');
        }
    
        if (Auth::check() && Auth::user()->$this == $user-> id);
    }

}
