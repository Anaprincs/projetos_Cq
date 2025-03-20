<?php

namespace App\Livewire\Aluno;

use App\Models\Aluno;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public $nome;
    public $data_nascimento;
    public $email;
    public $rm;
    public $serie;
    public $password;
    
    public function render()
    {
        return view('livewire.aluno.create');
    }

    public function store() // fizemos um create duplo para facilitar a conexão das tabelas
    {
   
        $user = User::create([
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => 'aluno'
        ]);

        Aluno::create([
            'nome' => $this->nome,
            'data_nascimento' => $this->data_nascimento,
            'rm' => $this->rm,
            'serie' => $this->serie,
            'user_id' => $user->id // campo na tabela que faz referencia a tabela user
        ]);

        session()->flash('success', 'Cadastro Realizado');
    }
}
