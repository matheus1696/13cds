<?php

namespace Database\Seeders;

use App\Models\Students\Reflection;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReflectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Reflection::create([
            'title' => 'Abordagem Centrada na Pessoa',
            'description' => 'Submeta aqui o seu fichamento do Curso de aperfeiçoamento em Apoio Matricial para Equipe Multiprofissional da Atenção Primária à Saúde de Caruaru-PE.',
            'workload' => 4,
            'start_date' => Carbon::parse('2025-03-19'),
            'end_date' => Carbon::parse('2025-03-31'),
        ]);

        Reflection::create([
            'title' => 'Autocuidado Apoiado',
            'description' => 'Submeta aqui o seu fichamento do Curso de aperfeiçoamento em Apoio Matricial para Equipe Multiprofissional da Atenção Primária à Saúde de Caruaru-PE.',
            'workload' => 4,
            'start_date' => Carbon::parse('2025-04-30'),
            'end_date' => Carbon::parse('2025-05-06'),
        ]);

        Reflection::create([
            'title' => 'Cuidados paliativos',
            'description' => 'Submeta aqui o seu fichamento do Curso de aperfeiçoamento em Apoio Matricial para Equipe Multiprofissional da Atenção Primária à Saúde de Caruaru-PE.',
            'workload' => 4,
            'start_date' => Carbon::parse('2025-05-28'),
            'end_date' => Carbon::parse('2025-06-03'),
        ]);

        Reflection::create([
            'title' => 'Abordagem multidimensional a Pessoa idosa',
            'description' => 'Submeta aqui o seu fichamento do Curso de aperfeiçoamento em Apoio Matricial para Equipe Multiprofissional da Atenção Primária à Saúde de Caruaru-PE.',
            'workload' => 4,
            'start_date' => Carbon::parse('2025-06-27'),
            'end_date' => Carbon::parse('2025-07-02'),
        ]);

        Reflection::create([
            'title' => 'PTS e Saúde mental',
            'description' => 'Submeta aqui o seu fichamento do Curso de aperfeiçoamento em Apoio Matricial para Equipe Multiprofissional da Atenção Primária à Saúde de Caruaru-PE.',
            'workload' => 4,
            'start_date' => Carbon::parse('2025-07-23'),
            'end_date' => Carbon::parse('2025-07-29'),
        ]);

        Reflection::create([
            'title' => 'Educação Popular em Saúde',
            'description' => 'Submeta aqui o seu fichamento do Curso de aperfeiçoamento em Apoio Matricial para Equipe Multiprofissional da Atenção Primária à Saúde de Caruaru-PE.',
            'workload' => 4,
            'start_date' => Carbon::parse('2025-08-27'),
            'end_date' => Carbon::parse('2025-09-02'),
        ]);

        Reflection::create([
            'title' => 'Espiritualidade e Saúde',
            'description' => 'Submeta aqui o seu fichamento do Curso de aperfeiçoamento em Apoio Matricial para Equipe Multiprofissional da Atenção Primária à Saúde de Caruaru-PE.',
            'workload' => 4,
            'start_date' => Carbon::parse('2025-09-24'),
            'end_date' => Carbon::parse('2025-09-30'),
        ]);

        Reflection::create([
            'title' => 'Comitê Gestor Local',
            'description' => 'Submeta aqui o seu fichamento do Curso de aperfeiçoamento em Apoio Matricial para Equipe Multiprofissional da Atenção Primária à Saúde de Caruaru-PE.',
            'workload' => 4,
            'start_date' => Carbon::parse('2025-10-29'),
            'end_date' => Carbon::parse('2025-11-04'),
        ]);

        Reflection::create([
            'title' => 'Planejamento Estratégico',
            'description' => 'Submeta aqui o seu fichamento do Curso de aperfeiçoamento em Apoio Matricial para Equipe Multiprofissional da Atenção Primária à Saúde de Caruaru-PE.',
            'workload' => 4,
            'start_date' => Carbon::parse('2025-11-12'),
            'end_date' => Carbon::parse('2025-11-18'),
        ]);

        Reflection::create([
            'title' => 'Gestão da Clínica',
            'description' => 'Submeta aqui o seu fichamento do Curso de aperfeiçoamento em Apoio Matricial para Equipe Multiprofissional da Atenção Primária à Saúde de Caruaru-PE.',
            'workload' => 4,
            'start_date' => Carbon::parse('2025-12-03'),
            'end_date' => Carbon::parse('2025-12-09'),
        ]);
    }
}
