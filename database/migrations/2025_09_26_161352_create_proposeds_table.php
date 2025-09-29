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
        Schema::create('proposeds', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Resumo da proposta
            $table->text('description'); // Conteúdo completo da proposta
            $table->string('origin')->nullable();
            $table->unsignedInteger('votes_count')->default(0); // Quantidade de Votos
            $table->enum('type', ['Eleita', 'Não Eleita'])->default('Não Eleita');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proposeds');
    }
};
