<?php

namespace Database\Seeders;

use App\Models\Admin\Delegate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DelegateSeeder extends Seeder
{
    public function run()
    {
        $delegates = [
            // DELEGADOS NATOS - GESTOR
            [
                'cpf' => '849.344.844-34',
                'name' => 'Nadja Kelly Martins de Menezes Farias',
                'contact' => null,
                'origin' => 'Delegado Nato',
                'segment_id' => 2,
                'type' => 'Titular'
            ],
            [
                'cpf' => '031.880.174-48',
                'name' => 'Karla Maciel Gomes Coelho',
                'contact' => null,
                'origin' => 'Delegado Nato',
                'segment_id' => 2,
                'type' => 'Titular'
            ],
            [
                'cpf' => '490.806.104-10',
                'name' => 'Giancarla de Santana Couto Rangel Pessoa e Melo',
                'contact' => null,
                'origin' => 'Delegado Nato',
                'segment_id' => 2,
                'type' => 'Titular'
            ],
            [
                'cpf' => '010.410.554-20',
                'name' => 'Samira Maria Santana Silva',
                'contact' => null,
                'origin' => 'Delegado Nato',
                'segment_id' => 2,
                'type' => 'Titular'
            ],
            [
                'cpf' => '120.545.114-55',
                'name' => 'Aline Silva Florêncio de Lima',
                'contact' => null,
                'origin' => 'Delegado Nato',
                'segment_id' => 2,
                'type' => 'Titular'
            ],
            [
                'cpf' => '098.070.094-99',
                'name' => 'Walex Nickyson Cavalcante Caju',
                'contact' => null,
                'origin' => 'Delegado Nato',
                'segment_id' => 2,
                'type' => 'Titular'
            ],

            // DELEGADOS NATOS - TRABALHADORES DA SAÚDE
            [
                'cpf' => '825.936.634-72',
                'name' => 'Djair de Lima Ferreira Júnior',
                'contact' => null,
                'origin' => 'Delegado Nato',
                'segment_id' => 3,
                'type' => 'Titular'
            ],
            [
                'cpf' => '070.586.854-01',
                'name' => 'Raquel Brito de Almeida Couto',
                'contact' => null,
                'origin' => 'Delegado Nato',
                'segment_id' => 3,
                'type' => 'Titular'
            ],
            [
                'cpf' => '119.284.574-95',
                'name' => 'Thayane Cavalcante Mendes da Silva',
                'contact' => null,
                'origin' => 'Delegado Nato',
                'segment_id' => 3,
                'type' => 'Titular'
            ],
            [
                'cpf' => '061.186.784-21',
                'name' => 'Emanuela Silva Monteiro',
                'contact' => null,
                'origin' => 'Delegado Nato',
                'segment_id' => 3,
                'type' => 'Titular'
            ],
            [
                'cpf' => '434.437.334-72',
                'name' => 'Maria Angélica Pires Raposo de Oliveira Gomes',
                'contact' => null,
                'origin' => 'Delegado Nato',
                'segment_id' => 3,
                'type' => 'Titular'
            ],
            [
                'cpf' => '501.876.354-04',
                'name' => 'Carlos Roberto Pereira da Silva',
                'contact' => null,
                'origin' => 'Delegado Nato',
                'segment_id' => 3,
                'type' => 'Titular'
            ],

            // DELEGADOS NATOS - USUÁRIOS DO SUS
            [
                'cpf' => '844.689.634-68',
                'name' => 'Lucy Tertulina Alves Lima',
                'contact' => null,
                'origin' => 'Delegado Nato',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '944.438.234-68',
                'name' => 'José de Arimateia Nunes de Medeiros',
                'contact' => null,
                'origin' => 'Delegado Nato',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '077.982.064-93',
                'name' => 'Romário dos Santos Silva',
                'contact' => null,
                'origin' => 'Delegado Nato',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '108.525.234-59',
                'name' => 'Walyson Oliveira da Costa',
                'contact' => null,
                'origin' => 'Delegado Nato',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '072.134.884-06',
                'name' => 'Paulo Augusto Matias da Silva',
                'contact' => null,
                'origin' => 'Delegado Nato',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '039.612.674-05',
                'name' => 'Sara Virgínia Rocha de Queiroz Leite',
                'contact' => null,
                'origin' => 'Delegado Nato',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '811.772.594-00',
                'name' => 'Hermínia Liduína Maria Boudens',
                'contact' => null,
                'origin' => 'Delegado Nato',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '064.722.164-01',
                'name' => 'Thaís Dominique Batista Beserra',
                'contact' => null,
                'origin' => 'Delegado Nato',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '215.274.586-87',
                'name' => 'Itamar Souza de Oliveira',
                'contact' => null,
                'origin' => 'Delegado Nato',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '562.140.574-91',
                'name' => 'Wilka Moura de Souza Brandão',
                'contact' => null,
                'origin' => 'Delegado Nato',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '310.697.544-04',
                'name' => 'Maria José de Carvalho',
                'contact' => null,
                'origin' => 'Delegado Nato',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '025.484.274-71',
                'name' => 'Elisângela Maria e Souza Silva Donato',
                'contact' => null,
                'origin' => 'Delegado Nato',
                'segment_id' => 1,
                'type' => 'Titular'
            ],

            // DELEGADOS TEMÁTICOS - USUÁRIOS
            [
                'cpf' => '073.774.554-11',
                'name' => 'Louiziane Hadassa Ferreira de Lima Delgado',
                'contact' => '(81) 98806-3102',
                'origin' => 'Temática Pessoa com Deficiência',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '070.566.114-86',
                'name' => 'Valdjane Ana da Silva',
                'contact' => '(81) 99116-7572',
                'origin' => 'Temática Pessoa com Deficiência',
                'segment_id' => 1,
                'type' => 'Suplente'
            ],
            [
                'cpf' => '080.618.724-71',
                'name' => 'Mirelly Lethycia de Lira Barros Ribeiro',
                'contact' => '(81) 98902-9374',
                'origin' => 'Temática Saúde Mental',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '221.080.414-00',
                'name' => 'Maria Lenilda de Brito',
                'contact' => '(81) 99256-1705',
                'origin' => 'Temática Idoso',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '012.878.068-13',
                'name' => 'Luzia Rodrigues da Costa',
                'contact' => '(81) 3721-4325',
                'origin' => 'Temática Idoso',
                'segment_id' => 1,
                'type' => 'Suplente'
            ],
            [
                'cpf' => '095.215.274-63',
                'name' => 'Irinaldo José da Silva',
                'contact' => '(81) 99470-5661',
                'origin' => 'Temática População Negra e Quilombola',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '849.571.664-04',
                'name' => 'Maria das Neves dos S. Nogueira',
                'contact' => '(81) 99183-4260',
                'origin' => 'Temática População Negra e Quilombola',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '065.332.514-22',
                'name' => 'Stephane Fechine da Silva',
                'contact' => '(81) 99247-5197',
                'origin' => 'Temática LGBTQIAP+',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '584.454.124-34',
                'name' => 'Paulo Roberto Ferreira dos Santos',
                'contact' => '(81) 99478-9058',
                'origin' => 'Temática LGBTQIAP+',
                'segment_id' => 1,
                'type' => 'Suplente'
            ],

            // DELEGADOS TEMÁTICOS - TRABALHADORES
            [
                'cpf' => '667.928.784-72',
                'name' => 'José Edson dos Santos',
                'contact' => '(81) 9928-2537',
                'origin' => 'Temática',
                'segment_id' => 3,
                'type' => 'Titular'
            ],
            [
                'cpf' => '564.691.607-00',
                'name' => 'Alcyr Freitas de Oliveira',
                'contact' => '(81) 99189-5365',
                'origin' => 'Temática',
                'segment_id' => 3,
                'type' => 'Titular'
            ],
            [
                'cpf' => '047.077.224-74',
                'name' => 'Alda Lúcia Calado Lopes',
                'contact' => '(81) 98680-2670',
                'origin' => 'Temática',
                'segment_id' => 3,
                'type' => 'Titular'
            ],

            // DELEGADOS TEMÁTICOS - GESTÃO
            [
                'cpf' => '009.132.134-46',
                'name' => 'Daniela Mascarenhas Gabriel dos Santos',
                'contact' => '(81) 99143-9220',
                'origin' => 'Temática',
                'segment_id' => 2,
                'type' => 'Titular'
            ],
            [
                'cpf' => '083.730.824-09',
                'name' => 'Jonatas Teotonio Sales Alves',
                'contact' => '(81) 99155-1701',
                'origin' => 'Temática',
                'segment_id' => 2,
                'type' => 'Titular'
            ],
            [
                'cpf' => '901.103.314-00',
                'name' => 'Kelly Cristina Gomes Costa Clementino',
                'contact' => '(81) 99650-8773',
                'origin' => 'Temática',
                'segment_id' => 2,
                'type' => 'Titular'
            ],

            // TGS 1 - USUÁRIOS
            [
                'cpf' => '708.731.034-05',
                'name' => 'Lucas Tomaz da Costa',
                'contact' => null,
                'origin' => 'TGS 1',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '011.683.404-89',
                'name' => 'Daniele Cristina de S. Lira',
                'contact' => null,
                'origin' => 'TGS 1',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '113.738.464-61',
                'name' => 'Luana Maria da Silva Araújo',
                'contact' => null,
                'origin' => 'TGS 1',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '286.510.224-68',
                'name' => 'Maria das Graças Ferreira Nogueira',
                'contact' => null,
                'origin' => 'TGS 1',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '009.131.534-43',
                'name' => 'Rosangela Teixeira de Andrade',
                'contact' => null,
                'origin' => 'TGS 1',
                'segment_id' => 1,
                'type' => 'Suplente'
            ],
            [
                'cpf' => '089.083.004-57',
                'name' => 'Cindy Emanuelly R. dos Santos',
                'contact' => null,
                'origin' => 'TGS 1',
                'segment_id' => 1,
                'type' => 'Suplente'
            ],

            // TGS 1 - PROFISSIONAIS
            [
                'cpf' => '811.252.834-91',
                'name' => 'Avany da Silva Nery',
                'contact' => null,
                'origin' => 'TGS 1',
                'segment_id' => 3,
                'type' => 'Titular'
            ],
            [
                'cpf' => '046.611.654-38',
                'name' => 'Cleidjani Torres Silva',
                'contact' => null,
                'origin' => 'TGS 1',
                'segment_id' => 3,
                'type' => 'Titular'
            ],

            // TGS 1 - GESTÃO
            [
                'cpf' => '845.479.954-00',
                'name' => 'Fabio Eduardo Rodrigues de Lima',
                'contact' => '(81) 9914-9892',
                'origin' => 'TGS 1',
                'segment_id' => 2,
                'type' => 'Titular'
            ],
            [
                'cpf' => '075.019.794-30',
                'name' => 'Maria Cecília Silva Borba',
                'contact' => '(81) 99940-0000',
                'origin' => 'TGS 1',
                'segment_id' => 2,
                'type' => 'Titular'
            ],

            // TGS 2 - USUÁRIOS
            [
                'cpf' => '679.740.612-68',
                'name' => 'Sueli da Silva',
                'contact' => '(81) 99221-9343',
                'origin' => 'TGS 2',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '628.009.814-15',
                'name' => 'Maria Betânia de Arruda',
                'contact' => '(81) 99207-0441',
                'origin' => 'TGS 2',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '883.542.614-68',
                'name' => 'Evandro Ferreira Candido',
                'contact' => '(81) 97401-3434',
                'origin' => 'TGS 2',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '076.622.644-76',
                'name' => 'Adriana Cabral de Melo',
                'contact' => '(81) 99108-1599',
                'origin' => 'TGS 2',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '117.392.894-47',
                'name' => 'Yasmin Oliveira de Almeida',
                'contact' => '(81) 98990-95',
                'origin' => 'TGS 2',
                'segment_id' => 1,
                'type' => 'Suplente'
            ],

            // TGS 2 - PROFISSIONAIS
            [
                'cpf' => '044.506.234-10',
                'name' => 'Pedro Ursilino',
                'contact' => '(87) 98167-5012',
                'origin' => 'TGS 2',
                'segment_id' => 3,
                'type' => 'Titular'
            ],
            [
                'cpf' => '110.954.864-89',
                'name' => 'Janiclecio Ribeiro dos Santos',
                'contact' => '(81) 98997-7066',
                'origin' => 'TGS 2',
                'segment_id' => 3,
                'type' => 'Titular'
            ],
            [
                'cpf' => '477.970.534-72',
                'name' => 'Josefa Rosenilda da Silva',
                'contact' => '(81) 99399-4420',
                'origin' => 'TGS 2',
                'segment_id' => 3,
                'type' => 'Suplente'
            ],
            [
                'cpf' => '844.684.164-97',
                'name' => 'Ivan Inacio de Lima',
                'contact' => '(81) 99927-6926',
                'origin' => 'TGS 2',
                'segment_id' => 3,
                'type' => 'Suplente'
            ],

            // TGS 2 - GESTÃO
            [
                'cpf' => '107.453.814-56',
                'name' => 'Italo Ramon da Silva',
                'contact' => '(81) 99130-3765',
                'origin' => 'TGS 2',
                'segment_id' => 2,
                'type' => 'Titular'
            ],
            [
                'cpf' => '097.236.184-78',
                'name' => 'Bianca Rayanne Borba Amorim Brito',
                'contact' => '(81) 98167-1558',
                'origin' => 'TGS 2',
                'segment_id' => 2,
                'type' => 'Titular'
            ],

            // TGS 3 - USUÁRIOS
            [
                'cpf' => '113.309.214-49',
                'name' => 'Suzana Bezerra de Oliveira',
                'contact' => '(81) 99536-9401',
                'origin' => 'TGS 3',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '070.301.894-93',
                'name' => 'Josineide Maria da Silva',
                'contact' => '(81) 99119-2029',
                'origin' => 'TGS 3',
                'segment_id' => 1,
                'type' => 'Titular'
            ],

            // TGS 3 - PROFISSIONAIS
            [
                'cpf' => '123.723.494-81',
                'name' => 'Nelita Mikaela dos Santos',
                'contact' => '(81) 99745-4728',
                'origin' => 'TGS 3',
                'segment_id' => 3,
                'type' => 'Titular'
            ],
            [
                'cpf' => '701.776.614-88',
                'name' => 'Victoria Eduarda dos Santos',
                'contact' => '(81) 99808-2428',
                'origin' => 'TGS 3',
                'segment_id' => 3,
                'type' => 'Titular'
            ],

            // TGS 3 - GESTÃO
            [
                'cpf' => '011.827.544-57',
                'name' => 'Amanda Danielle Honorato da Silva Tavares',
                'contact' => '(81) 99400-9311',
                'origin' => 'TGS 3',
                'segment_id' => 2,
                'type' => 'Titular'
            ],
            [
                'cpf' => '013.530.594-21',
                'name' => 'Nathana Yngreti Marques Magalhães',
                'contact' => '(81) 99747-5498',
                'origin' => 'TGS 3',
                'segment_id' => 2,
                'type' => 'Titular'
            ],

            // TGS 4 - USUÁRIOS
            [
                'cpf' => '410.559.304-04',
                'name' => 'José João dos Santos',
                'contact' => '(81) 98975-6283',
                'origin' => 'TGS 4',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '074.873.504-60',
                'name' => 'Clécio Manoel da Silva',
                'contact' => '(81) 99285-1243',
                'origin' => 'TGS 4',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '835.610.644-34',
                'name' => 'Edilene Felix da Silva',
                'contact' => '(81) 98961-4526',
                'origin' => 'TGS 4',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '858.178.241-00',
                'name' => 'Marivânia Mara dos Santos',
                'contact' => '(81) 98215-1585',
                'origin' => 'TGS 4',
                'segment_id' => 1,
                'type' => 'Titular'
            ],

            // TGS 4 - PROFISSIONAIS
            [
                'cpf' => '036.388.664-83',
                'name' => 'Renata Nunes Lima',
                'contact' => '(81) 99292-0881',
                'origin' => 'TGS 4',
                'segment_id' => 3,
                'type' => 'Titular'
            ],
            [
                'cpf' => '009.566.764-48',
                'name' => 'Marcos João de Lima',
                'contact' => '(81) 98144-5807',
                'origin' => 'TGS 4',
                'segment_id' => 3,
                'type' => 'Titular'
            ],

            // TGS 4 - GESTÃO
            [
                'cpf' => '029.801.724-56',
                'name' => 'Efraim Naftali Lopes Soares',
                'contact' => '(81) 99718-2265',
                'origin' => 'TGS 4',
                'segment_id' => 2,
                'type' => 'Titular'
            ],
            [
                'cpf' => '706.120.014-66',
                'name' => 'William Matheus Bernardino Silva Motta',
                'contact' => '(81) 99104-3289',
                'origin' => 'TGS 4',
                'segment_id' => 2,
                'type' => 'Titular'
            ],

            // TGS 5 - USUÁRIOS
            [
                'cpf' => '044.481.354-38',
                'name' => 'Andreia de Jesus Silva',
                'contact' => '(81) 99163-7939',
                'origin' => 'TGS 5',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '031.010.454-09',
                'name' => 'Edna Maria da Silva',
                'contact' => '(81) 98954-9887',
                'origin' => 'TGS 5',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '681.710.214-68',
                'name' => 'Josefa Maria da Silva de Lima',
                'contact' => '(81) 98983-5591',
                'origin' => 'TGS 5',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '153.059.098-82',
                'name' => 'Sueli Aparecida Almeida da Silva',
                'contact' => '(81) 99844-2034',
                'origin' => 'TGS 5',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '066.499.124-68',
                'name' => 'Nilce Xavier de Lima Azevedo',
                'contact' => '(81) 99448-1848',
                'origin' => 'TGS 5',
                'segment_id' => 1,
                'type' => 'Suplente'
            ],
            [
                'cpf' => '546.541.734-49',
                'name' => 'Virgiliana Teodoro da Silva',
                'contact' => '(81) 99150-5005',
                'origin' => 'TGS 5',
                'segment_id' => 1,
                'type' => 'Suplente'
            ],
            [
                'cpf' => '497.318.404-78',
                'name' => 'Maria José Pereira Barbosa',
                'contact' => '(81) 99239-4563',
                'origin' => 'TGS 5',
                'segment_id' => 1,
                'type' => 'Suplente'
            ],
            [
                'cpf' => '704.448.114-00',
                'name' => 'Adriana Karla da Silva',
                'contact' => '(81) 98213-1582',
                'origin' => 'TGS 5',
                'segment_id' => 1,
                'type' => 'Suplente'
            ],

            // TGS 5 - PROFISSIONAIS
            [
                'cpf' => '094.228.944-76',
                'name' => 'Jessyca Larissa Oliveira da Silva',
                'contact' => '(81) 99888-1593',
                'origin' => 'TGS 5',
                'segment_id' => 3,
                'type' => 'Titular'
            ],
            [
                'cpf' => '064.643.874-30',
                'name' => 'Karine Cristiane dos Santos Rodrigues',
                'contact' => '(81) 99302-5009',
                'origin' => 'TGS 5',
                'segment_id' => 3,
                'type' => 'Titular'
            ],
            [
                'cpf' => '728.577.494-49',
                'name' => 'Maria José da Silva Bezerra',
                'contact' => '(81) 99455-2537',
                'origin' => 'TGS 5',
                'segment_id' => 3,
                'type' => 'Suplente'
            ],

            // TGS 5 - GESTÃO
            [
                'cpf' => '012.875.144-48',
                'name' => 'Pollyane Costa Siqueira',
                'contact' => '(81) 99986-39381',
                'origin' => 'TGS 5',
                'segment_id' => 2,
                'type' => 'Titular'
            ],
            [
                'cpf' => '106.879.454-29',
                'name' => 'Matheus Eduardo de Lima Neves',
                'contact' => '(81) 99605-6827',
                'origin' => 'TGS 5',
                'segment_id' => 2,
                'type' => 'Titular'
            ],

            // TGS 6 - USUÁRIOS
            [
                'cpf' => '506.506.534-91',
                'name' => 'Jacira M. da Silva Araujo',
                'contact' => '(81) 99104-952',
                'origin' => 'TGS 6',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '044.068.194-44',
                'name' => 'Marileide Gomes de Almeida',
                'contact' => '(81) 99399-3655',
                'origin' => 'TGS 6',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '440.098.954-20',
                'name' => 'Marcos Antonio de Almeida Silva',
                'contact' => '(81) 99399-3655',
                'origin' => 'TGS 6',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '262.355.858-29',
                'name' => 'Marinalva H. Nuniz',
                'contact' => '(81) 98530-5565',
                'origin' => 'TGS 6',
                'segment_id' => 1,
                'type' => 'Titular'
            ],

            // TGS 6 - PROFISSIONAIS
            [
                'cpf' => '107.034.744-21',
                'name' => 'Aliny Sinara R. da Silva',
                'contact' => '(81) 99721-7708',
                'origin' => 'TGS 6',
                'segment_id' => 3,
                'type' => 'Titular'
            ],
            [
                'cpf' => '661.054.044-68',
                'name' => 'Sergio José M. da Rocha',
                'contact' => '(81) 99815-17974',
                'origin' => 'TGS 6',
                'segment_id' => 3,
                'type' => 'Titular'
            ],

            // TGS 6 - GESTÃO
            [
                'cpf' => '067.859.634-43',
                'name' => 'Elane Francisca da Silva',
                'contact' => '(81) 99349-3266',
                'origin' => 'TGS 6',
                'segment_id' => 2,
                'type' => 'Titular'
            ],
            [
                'cpf' => '103.526.754-38',
                'name' => 'Dayane Priscila da Silva',
                'contact' => '(81) 99973-8140',
                'origin' => 'TGS 6',
                'segment_id' => 2,
                'type' => 'Titular'
            ],

            // TGS 7 - USUÁRIOS
            [
                'cpf' => '274.808.518-39',
                'name' => 'Janaildo da Silva',
                'contact' => '(81) 99525-1214',
                'origin' => 'TGS 7',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '111.911.203-68',
                'name' => 'José Itamar da Silva',
                'contact' => '(81) 99952-9770',
                'origin' => 'TGS 7',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '056.897.794-74',
                'name' => 'Leandro Fávio de Torres',
                'contact' => '(81) 99447-5687',
                'origin' => 'TGS 7',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '386.280.074-15',
                'name' => 'Marilene Gomes da Silva',
                'contact' => '(81) 99480-4721',
                'origin' => 'TGS 7',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '817.886.144-53',
                'name' => 'Graciete Ferreira da Silva',
                'contact' => '(81) 98941-6234',
                'origin' => 'TGS 7',
                'segment_id' => 1,
                'type' => 'Suplente'
            ],
            [
                'cpf' => '823.361.644-34',
                'name' => 'Madriara Silvana Santo Pereira',
                'contact' => '(81) 99421-2806',
                'origin' => 'TGS 7',
                'segment_id' => 1,
                'type' => 'Suplente'
            ],

            // TGS 7 - PROFISSIONAIS
            [
                'cpf' => '072.239.534-54',
                'name' => 'Vinícius Almeida Ferreira de Souza Lucena',
                'contact' => '(81) 98137-2023',
                'origin' => 'TGS 7',
                'segment_id' => 3,
                'type' => 'Titular'
            ],
            [
                'cpf' => '032.353.674-38',
                'name' => 'Carmem Lúcia Almeida Feliciano',
                'contact' => '(81) 99998-6060',
                'origin' => 'TGS 7',
                'segment_id' => 3,
                'type' => 'Titular'
            ],
            [
                'cpf' => '080.081.654-48',
                'name' => 'Kaio Gaudencio de Farias Ribeiro',
                'contact' => '(81) 99683-7366',
                'origin' => 'TGS 7',
                'segment_id' => 3,
                'type' => 'Suplente'
            ],
            [
                'cpf' => '068.106.794-53',
                'name' => 'Jeane Andrade da Silva',
                'contact' => '(81) 99236-0140',
                'origin' => 'TGS 7',
                'segment_id' => 3,
                'type' => 'Suplente'
            ],

            // TGS 7 - GESTÃO
            [
                'cpf' => '079.624.964-44',
                'name' => 'David dos Santos Oliveira',
                'contact' => '(81) 99923-02357',
                'origin' => 'TGS 7',
                'segment_id' => 2,
                'type' => 'Titular'
            ],
            [
                'cpf' => '096.424.944-85',
                'name' => 'Anierika Pereira Dos Santos',
                'contact' => '(81) 99699-1318',
                'origin' => 'TGS 7',
                'segment_id' => 2,
                'type' => 'Titular'
            ],

            // TGS 8 - USUÁRIOS
            [
                'cpf' => '710.969.144-68',
                'name' => 'Madalena Silva',
                'contact' => '(81) 99490-9292',
                'origin' => 'TGS 8',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '077.191.794-55',
                'name' => 'Helica Janaina de O Silva Moraes',
                'contact' => '(81) 99188-8381',
                'origin' => 'TGS 8',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '303.971.464-34',
                'name' => 'Maria das Graças Monte Costa',
                'contact' => '(81) 99881-8656',
                'origin' => 'TGS 8',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '701.828.214-47',
                'name' => 'Jessyca Ellen Silva',
                'contact' => '(81) 98923-8875',
                'origin' => 'TGS 8',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '749.371.544-00',
                'name' => 'Francisco José da Rocha',
                'contact' => '(81) 99412-5545',
                'origin' => 'TGS 8',
                'segment_id' => 1,
                'type' => 'Suplente'
            ],
            [
                'cpf' => '883.732.074-49',
                'name' => 'Neisa Gomes do Nascimento da Silva',
                'contact' => '(81) 99233-9178',
                'origin' => 'TGS 8',
                'segment_id' => 1,
                'type' => 'Suplente'
            ],

            // TGS 8 - PROFISSIONAIS
            [
                'cpf' => '010.714.094-25',
                'name' => 'Lidiane Maria de Oliveira Silva',
                'contact' => '(81) 99151-0355',
                'origin' => 'TGS 8',
                'segment_id' => 3,
                'type' => 'Titular'
            ],
            [
                'cpf' => '028.579.944-43',
                'name' => 'Cleide Calado de Araújo',
                'contact' => '(81) 99308-4965',
                'origin' => 'TGS 8',
                'segment_id' => 3,
                'type' => 'Titular'
            ],
            [
                'cpf' => '094.339.714-69',
                'name' => 'Tamires Raquel de A. Ramos',
                'contact' => '(81) 98137-1495',
                'origin' => 'TGS 8',
                'segment_id' => 3,
                'type' => 'Suplente'
            ],
            [
                'cpf' => '052.747.074-08',
                'name' => 'Claudia Maria de O. Silva',
                'contact' => '(81) 99200-26442',
                'origin' => 'TGS 8',
                'segment_id' => 3,
                'type' => 'Suplente'
            ],

            // TGS 8 - GESTÃO
            [
                'cpf' => '100.049.954-57',
                'name' => 'Aléxia Gyovanna Rodrigues Menezes de Moura',
                'contact' => '(81) 99953-6802',
                'origin' => 'TGS 8',
                'segment_id' => 2,
                'type' => 'Titular'
            ],
            [
                'cpf' => '902.404.564-91',
                'name' => 'Virgínia Silva Bezerra',
                'contact' => '(81) 99672-0333',
                'origin' => 'TGS 8',
                'segment_id' => 2,
                'type' => 'Titular'
            ],

            // TGS 9 - USUÁRIOS
            [
                'cpf' => '033.894.144-44',
                'name' => 'Hozana Alves Ferreira da Silva',
                'contact' => '(81) 97327-5034',
                'origin' => 'TGS 9',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '340.841.504-87',
                'name' => 'Orlando Ramos Filho',
                'contact' => '(81) 99220-2531',
                'origin' => 'TGS 9',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '901.129.034-87',
                'name' => 'Madelon Pereira de Lima',
                'contact' => '(81) 98350-6157',
                'origin' => 'TGS 9',
                'segment_id' => 1,
                'type' => 'Titular'
            ],
            [
                'cpf' => '029.798.834-41',
                'name' => 'Clovis Comes Queiroz dos Santos',
                'contact' => '(81) 99409-6789',
                'origin' => 'TGS 9',
                'segment_id' => 1,
                'type' => 'Titular'
            ],

            // TGS 9 - PROFISSIONAIS
            [
                'cpf' => '076.819.434-20',
                'name' => 'Ricardo Caetano Honorio Barbosa',
                'contact' => '(81) 99411-6911',
                'origin' => 'TGS 9',
                'segment_id' => 3,
                'type' => 'Titular'
            ],
            [
                'cpf' => '031.276.524-02',
                'name' => 'Adriana Ferreira de A. Silva',
                'contact' => '(81) 99143-4636',
                'origin' => 'TGS 9',
                'segment_id' => 3,
                'type' => 'Titular'
            ],
            [
                'cpf' => '053.185.844-89',
                'name' => 'Augusto Cesar Medeiros Guimarães',
                'contact' => '(81) 98184-0888',
                'origin' => 'TGS 9',
                'segment_id' => 3,
                'type' => 'Suplente'
            ],
            [
                'cpf' => '358.632.775-72',
                'name' => 'Jose Adeilton Bispo de Magalhães',
                'contact' => '(81) 99826-2858',
                'origin' => 'TGS 9',
                'segment_id' => 3,
                'type' => 'Suplente'
            ],

            // TGS 9 - GESTÃO
            [
                'cpf' => '012.855.754-07',
                'name' => 'Helison Cleiton Dos Santos Ferreira',
                'contact' => '(81) 99696-4866',
                'origin' => 'TGS 9',
                'segment_id' => 2,
                'type' => 'Titular'
            ],
            [
                'cpf' => '043.136.984-42',
                'name' => 'Antônio Gonçalves da Silva Neto',
                'contact' => '(81) 99454-8257',
                'origin' => 'TGS 9',
                'segment_id' => 2,
                'type' => 'Titular'
            ],
        ];

        foreach ($delegates as $delegate) {
            Delegate::create($delegate);
        }
    }
}