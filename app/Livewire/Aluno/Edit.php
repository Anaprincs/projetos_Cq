<?php

namespace App\Livewire\Aluno;

use App\Models\Aluno;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Edit extends Component
{
    public $alunoId;
    public $nome;
    public $data_nascimento;
    public $email;
    public $rm;
    public $password;
    public $confirmar_senha;


    protected $listeners =
    [
        'editarCadastro',
        'closeEditModal' => 'fecharModal'
    ];

    public function fecharModal()
    {
        $this->dispatch('hideModal');
    }

    public function render()
    {
        return view('livewire.aluno.edit');
    }

    public function mount(){
        $aluno = Aluno::find(Auth::user()->aluno->id);
   
        $this->alunoId = $aluno->id;
        $this->nome = $aluno->nome;
        $this->data_nascimento = $aluno->data_nascimento;
        $this->email = $aluno->user->email;
        $this->rm = $aluno->rm;
        $this->password = $aluno->user->password;
        $this->confirmar_senha = $aluno->confirmar_senha;

    
       }

    public function salvar()
    {
        $aluno = Aluno::find($this->alunoId);

        $aluno->nome = $this->nome;
        $aluno->nome = $this->email;
        $aluno->nome = $this->senha;
        $aluno->save();
        $aluno->user->save();
        session()->flash('succes', 'Tarefa Atualizada');

    }
}
