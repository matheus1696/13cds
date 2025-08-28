<?php

namespace App\Models\Evaluation;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationAnswer extends Model
{
    /** @use HasFactory<\Database\Factories\Evaluation\EvaluationAnswersFactory> */
    //use HasFactory;

    protected $fillable = [
        'user_id',
        'evaluation_id',
        'network_experience',

        // Reunião
        'attended_meeting',
        'facilitators_participation',
        'facilitators_participation_note',
        'content_relevance',
        'content_relevance_note',
        'competence_contribution',
        'competence_contribution_note',
        'methodology_exchange',
        'methodology_exchange_note',
        'facilitators_mastery',
        'facilitators_mastery_note',
        'matricial_support_comprehension',
        'matricial_support_comprehension_note',
        'welcoming_experience',
        'welcoming_experience_note',

        // Reflexão
        'sending_reflection',
        'reflection_participation',
        'reflection_participation_note',

        // Exercícios
        'sending_exercises',
        'exercises_participation',
        'exercises_participation_note',

        // Gerais
        'course_highlight',
        'expected_changes',
        'improvements',
        'course_impact',
        'additional_comments',
    ];

    /**
     * Usuário que respondeu a avaliação
     */
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
