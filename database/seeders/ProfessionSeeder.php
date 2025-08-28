<?php

namespace Database\Seeders;

use App\Models\Professions\Profession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $professions = [
            [
                'code' => 'ART_EDU',
                'title' => 'Arte Educação',
                'description' => 'Profissional de arte educação.',
                'category' => 'Educação',
                'subcategory' => 'Saúde',
            ],
            [
                'code' => 'BIOMED',
                'title' => 'Biomedicina',
                'description' => 'Profissional de biomedicina.',
                'category' => 'Saúde',
                'subcategory' => 'Saúde',
            ],
            [
                'code' => 'ED_FIS',
                'title' => 'Educação Física',
                'description' => 'Profissional de educação física.',
                'category' => 'Educação',
                'subcategory' => 'Saúde',
            ],
            [
                'code' => 'FARM',
                'title' => 'Farmácia',
                'description' => 'Profissional de farmácia.',
                'category' => 'Saúde',
                'subcategory' => 'Saúde',
            ],
            [
                'code' => 'FISIOT',
                'title' => 'Fisioterapia',
                'description' => 'Profissional de fisioterapia.',
                'category' => 'Saúde',
                'subcategory' => 'Saúde',
            ],
            [
                'code' => 'FONOAUD',
                'title' => 'Fonoaudiologia',
                'description' => 'Profissional de fonoaudiologia.',
                'category' => 'Saúde',
                'subcategory' => 'Saúde',
            ],
            [
                'code' => 'PSICO',
                'title' => 'Psicologia',
                'description' => 'Profissional de psicologia.',
                'category' => 'Saúde',
                'subcategory' => 'Saúde',
            ],
            [
                'code' => 'NUTRI',
                'title' => 'Nutrição',
                'description' => 'Profissional de nutrição.',
                'category' => 'Saúde',
                'subcategory' => 'Saúde',
            ],
            [
                'code' => 'SANIT',
                'title' => 'Sanitarista',
                'description' => 'Profissional sanitarista.',
                'category' => 'Saúde Pública',
                'subcategory' => 'Saúde',
            ],
            [
                'code' => 'SERV_SOC',
                'title' => 'Serviço Social',
                'description' => 'Profissional de serviço social.',
                'category' => 'Assistência Social',
                'subcategory' => 'Saúde',
            ],
            [
                'code' => 'TER_OCU',
                'title' => 'Terapia Ocupacional',
                'description' => 'Profissional de terapia ocupacional.',
                'category' => 'Saúde',
                'subcategory' => 'Saúde',
            ],
        ];

        foreach ($professions as $data) {
            Profession::create($data);
        }
    }
}
