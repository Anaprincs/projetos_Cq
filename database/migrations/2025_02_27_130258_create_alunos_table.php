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
            $table->bigInteger('user_id')->unsigned()->nullable(false); // campo relacionado a tabela user - chave estrangeira
            $table->string('nome', 45)->nullable(false);
            $table->date('data_nascimento')->nullable(false);
            $table->string('rm', 4)->nullable(false)->unique();
            $table->string('serie', 10)->nullable(false)->unique();
            $table->foreign('user_id')->references('id')->on('users'); // conexão com a tabela user
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
