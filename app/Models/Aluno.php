<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'rm',
        'serie',
        'data_nascimento', 
        'user_id'
    ];
    // não pode ter email e senha pq ja tem na tabela user 

    public function user()
    {
        return $this->belongsTo(User::class); // referencia
    }
}
