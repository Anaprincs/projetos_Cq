<?php

namespace App\Livewire\Administracao;

use App\Models\Administracao;
use Livewire\Component;

class Index extends Component
{

    public $nome;
    public $email;
    public $cpf;
    public $senha;
    public $confirmar_senha;
    public $adminId;

    protected $listeners = [
        'abrirModalEdicao',
        'cadastroAtualizada' => 'render'
    ];

    public function render()
    { 
        $admin = Administracao::all();
        return view('livewire.administracao.index', compact('admin'));
    }

    public function abrirModalVisualizar ($adminId){
        $admin = Administracao::find($adminId);

        if($admin){
            $this->nome = $admin->nome;
            $this->email = $admin->email;
            $this->cpf = $admin->cpf;
            $this->senha = $admin->senha;
            $this->confirmar_senha = $admin->confirmar_senha;
        

        }
    }
    public function abrirModalExclusao($adminId){
        $this-> adminId= $adminId; 
    }
    
    public function abrirModalEdicao($adminId){
        $this->dispatch('editarAdministracao', adminId: $adminId);
    }

    public function excluir(){
        if($this->adminId){
            Administracao::find($this->adminId)->delete(); 
        }
    }
}
