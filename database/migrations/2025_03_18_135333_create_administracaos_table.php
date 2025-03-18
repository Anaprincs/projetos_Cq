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
        Schema::create('administracaos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50)->nullable(false);
            $table->string('email',20)->nullable(false)->unique();
            $table->string('cpf',11)->nullable(false)->unique();
            $table->string('senha',6)->nullable(false)->unique();
            $table->string('confirmar_senha',6)->nullable(false)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administracaos');
    }
};
