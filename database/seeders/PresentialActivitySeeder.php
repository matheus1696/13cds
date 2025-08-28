<?php

namespace Database\Seeders;

use App\Models\Students\PresentialActivity;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PresentialActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        PresentialActivity::create([
            'title' => 'Atendimento Individual',
            'description' => 'Encontro presencial sobre atendimento individual.',
            'workload' => 8,
            'start_date' => Carbon::parse('2025-03-18'),
        ]);

        PresentialActivity::create([
            'title' => 'Atendimento Compartilhado',
            'description' => 'Encontro presencial sobre atendimento compartilhado.',
            'workload' => 8,
            'start_date' => Carbon::parse('2025-04-29'),
        ]);

        PresentialActivity::create([
            'title' => 'Discussão de Casos',
            'description' => 'Encontro presencial sobre discussão de casos.',
            'workload' => 8,
            'start_date' => Carbon::parse('2025-05-27'),
        ]);

        PresentialActivity::create([
            'title' => 'Plano Terapêutico Singular',
            'description' => 'Encontro presencial sobre plano terapêutico singular.',
            'workload' => 8,
            'start_date' => Carbon::parse('2025-06-26'),
        ]);

        PresentialActivity::create([
            'title' => 'Atividade Coletiva',
            'description' => 'Encontro presencial sobre plano atividade coletiva.',
            'workload' => 8,
            'start_date' => Carbon::parse('2025-07-22'),
        ]);
    }
}
