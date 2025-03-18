<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 45)->nullable(false);
            $table->date('data_nascimento')->nullable(false);
            $table->string('email', 45)->nullable(false)->unique();
            $table->string('rm', 4)->nullable(false)->unique();
            $table->string('serie', 10)->nullable(false)->unique();
            $table->string('senha', 8)->nullable(false);
            $table->string('confirmar_senha', 8)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
