<?php

namespace Database\Seeders;

use App\Models\Students\Exercise;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Exercise::create([
            'title' => 'Aplicação em território (em grupo) e a entrega de relatório com o tema Abordagem Centrada na Pessoa',
            'description' => 'Submeta aqui o seu fichamento do Curso de aperfeiçoamento em Apoio Matricial para Equipe Multiprofissional da Atenção Primária à Saúde de Caruaru-PE.',
            'workload' => 4,
            'start_date' => Carbon::parse('2025-03-20'),
            'end_date' => Carbon::parse('2025-04-28'),
        ]);
    }
}
