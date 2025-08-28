<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use App\Models\Evaluation\EvaluationAnswer;
use Illuminate\Http\Request;

class EvaluationCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // --- Grupo 1: Experiência ---
        $experience = EvaluationAnswer::selectRaw("
            COUNT(*) FILTER (WHERE network_experience = '0-2') as experience_0_2,
            COUNT(*) FILTER (WHERE network_experience = '3-5') as experience_3_5,
            COUNT(*) FILTER (WHERE network_experience = '+5') as experience_plus_5
        ")->first();

        // --- Grupo 2: Quantidade que participou ---
        $attendance = EvaluationAnswer::selectRaw("
            COUNT(*) FILTER (WHERE attended_meeting = 'sim') as participated,
            COUNT(*) FILTER (WHERE attended_meeting = 'nao') as not_participated
        ")->first();

        // --- Grupo 3: Avaliação dos facilitadores ---
        $facilitators = EvaluationAnswer::selectRaw("
            COALESCE(AVG(facilitators_participation::int), 0) as facilitators,
            COALESCE(AVG(content_relevance::int), 0) as content_relevance,
            COALESCE(AVG(competence_contribution::int), 0) as competence,
            COALESCE(AVG(methodology_exchange::int), 0) as methodology,
            COALESCE(AVG(facilitators_mastery::int), 0) as mastery,
            COALESCE(AVG(matricial_support_comprehension::int), 0) as matricial,
            COALESCE(AVG(welcoming_experience::int), 0) as welcoming_experience
        ")->first();

        // --- Grupo 4: Envio de reflexões ---
        $reflectionSent = EvaluationAnswer::selectRaw("
            COUNT(*) FILTER (WHERE sending_reflection = 'sim') as sent,
            COUNT(*) FILTER (WHERE sending_reflection = 'nao') as not_sent
        ")->first();

        // --- Grupo 5: Avaliação da participação na reflexão ---
        $reflectionParticipation = EvaluationAnswer::selectRaw('
            AVG(reflection_participation::int) as avg_reflection')
        ->first()
        ->avg_reflection;

        // --- Grupo 6: Exercícios enviados ---
        $exerciseSent = EvaluationAnswer::selectRaw("
            COUNT(*) FILTER (WHERE sending_exercises = 'sim') as sent,
            COUNT(*) FILTER (WHERE sending_exercises = 'nao') as not_sent
        ")->first();

        // --- Grupo 7: Avaliação dos exercícios ---
        $exerciseParticipation = EvaluationAnswer::selectRaw('
            AVG(exercises_participation::int) as avg_exercises')
        ->first()
        ->avg_exercises;

        return view('portal.tutor.evaluation.course.course_index', compact(
            'experience',
            'attendance',
            'facilitators',
            'reflectionSent',
            'reflectionParticipation',
            'exerciseSent',
            'exerciseParticipation'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
