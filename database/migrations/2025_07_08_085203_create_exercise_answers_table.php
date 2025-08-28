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
        Schema::create('exercise_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exercise_id')->constrained('exercises')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->text('title');
            $table->text('description');
            $table->string('status');
            $table->string('evaluation')->default('Aguardando Avaliação');
            $table->text('evaluation_feedback')->nullable();
            $table->foreignId('evaluation_user_id')->nullable()->constrained('users');
            $table->timestamps();
        });

        // Migration para a tabela pivot (atividade - participante)
        Schema::create('exercise_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('exercise_answer_id')->constrained('exercise_answers')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        });
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercise_answers');
        Schema::dropIfExists('exercise_users');
    }
};
