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
        Schema::create('evaluation_answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evaluation_id')->constrained();

            // Bloco: Identificação
            $table->foreignId('user_id')->nullable()->constrained();

            $table->enum('network_experience', ['0-2', '3-5', '+5']);

            // Bloco: Encontro Presencial
            $table->enum('attended_meeting', ['sim', 'nao']);

            $table->string('facilitators_participation')->nullable();
            $table->text('facilitators_participation_note')->nullable();

            $table->string('content_relevance')->nullable();
            $table->text('content_relevance_note')->nullable();

            $table->string('competence_contribution')->nullable();
            $table->text('competence_contribution_note')->nullable(); 

            $table->string('methodology_exchange')->nullable();
            $table->text('methodology_exchange_note')->nullable(); 

            $table->string('facilitators_mastery')->nullable();
            $table->text('facilitators_mastery_note')->nullable();   

            $table->string('matricial_support_comprehension')->nullable();
            $table->text('matricial_support_comprehension_note')->nullable();   

            $table->string('welcoming_experience')->nullable();
            $table->text('welcoming_experience_note')->nullable();   

            // Bloco: Fichamento
            $table->enum('sending_reflection', ['sim', 'nao']);

            $table->string('reflection_participation')->nullable();
            $table->text('reflection_participation_note')->nullable();

            // Bloco: Atividade Prática
            $table->enum('sending_exercises', ['sim', 'nao']);

            $table->string('exercises_participation')->nullable();
            $table->text('exercises_participation_note')->nullable();
       
            // Perguntas abertas finais
            $table->text('course_highlight')->nullable(); // O que mais te marcou no curso?
            $table->text('expected_changes')->nullable(); // Que mudanças você já percebe (ou espera perceber) na sua atuação após o curso?
            $table->text('improvements')->nullable(); // Sugestões para melhorar o curso?
            $table->text('course_impact')->nullable(); // Representatividade para a prática?
            $table->text('additional_comments')->nullable(); // Sugestões para aprimoramento do curso?

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluation_answers');
    }
};
