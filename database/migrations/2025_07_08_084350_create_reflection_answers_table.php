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
        Schema::create('reflection_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reflection_id')->constrained('reflections');
            $table->foreignId('user_id')->constrained('users');
            $table->string('status')->default('Não Iniciado');
            $table->text('title')->nullable();
            $table->text('subject')->nullable();
            $table->text('quote')->nullable();
            $table->text('description')->nullable();
            $table->string('evaluation')->default('Aguardando Avaliação');
            $table->text('evaluation_feedback')->nullable();
            $table->foreignId('evaluation_user_id')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reflection_answers');
    }
};
