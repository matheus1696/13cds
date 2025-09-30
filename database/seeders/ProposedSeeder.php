<?php

namespace Database\Seeders;

use App\Models\Admin\Proposed;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProposedSeeder extends Seeder
{
    public function run()
    {
        $proposals = [
            // PRÉ-CONFERÊNCIAS TERRITORIAIS PROPOSTAS
            [
                'title' => 'Ampliação da frota de transporte sanitário',
                'description' => 'Aumentar a frota do transporte sanitário para comunidade e equipe, de uso exclusivo e aquisição de ambulância para os que necessitem de atendimento de urgência.',
                'origin' => 'Pré Conferência Territoriais - P1TGS1',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],
            [
                'title' => 'Melhoria no acolhimento para TFD',
                'description' => 'Melhorar o acolhimento da população que faz uso do TFD com rota para Recife, através da garantia de uma casa de apoio aos munícipes de Caruaru com espaço para alimentação, banho, descanso e espera para retorno ao domicílio.',
                'origin' => 'Pré Conferência Territoriais - P2TGS1',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],
            [
                'title' => 'Consultórios itinerantes para áreas de difícil acesso',
                'description' => 'Aquisição de consultórios itinerantes destinado aos atendimentos em microáreas de difícil acesso e que não possuam ponto de apoio.',
                'origin' => 'Pré Conferência Territoriais - P3TGS2',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],
            [
                'title' => 'Descentralização do SAMU',
                'description' => 'Descentralização do SAMU, através da construção de um anexo na zona rural e ampliação imediata da oferta de serviços.',
                'origin' => 'Pré Conferência Territoriais - P4TGS2',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],
            [
                'title' => 'Ampliação da equipe multiprofissional',
                'description' => 'Ampliar a Equipe Multiprofissional no Município para oferta de mais acesso a psicólogos, nutricionistas e fisioterapeutas.',
                'origin' => 'Pré Conferência Territoriais - P5TGS3',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],
            [
                'title' => 'Academias da saúde na zona rural',
                'description' => 'Construir academia da saúde nas comunidades da zona rural proporcionando melhor qualidade de vida à população.',
                'origin' => 'Pré Conferência Territoriais - P6TGS3',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],
            [
                'title' => 'Humanização da Rede de Atenção Psicossocial',
                'description' => 'Humanizar a Rede de Atenção Psicossocial (RAPS) (Ambulatório, CAPS e UPA 24h) para melhor definir e/ou obter espaços adequados, fluxos de acolhimento, classificação e segmento para os usuários em surto ou crise.',
                'origin' => 'Pré Conferência Territoriais - P7TGS4',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],
            [
                'title' => 'Segurança nas UBS',
                'description' => 'Contratar porteiro/vigilante para as UBS, a fim de garantir a segurança estrutural das unidades e dos profissionais em áreas de vulnerabilidade e grande fluxo de usuários.',
                'origin' => 'Pré Conferência Territoriais - P8TGS4',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],
            [
                'title' => 'Abastecimento de medicamentos da REMUME',
                'description' => 'Garantir o abastecimento contínuo, suficiente e adequado de medicamentos que compõe a REMUME.',
                'origin' => 'Pré Conferência Territoriais - P9TGS5',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],
            [
                'title' => 'Ampliação de critérios para laqueadura',
                'description' => 'Ampliar critérios de laqueadura para atender mulheres/gestantes com interesse, vulnerabilidade social e/ou indicação da equipe.',
                'origin' => 'Pré Conferência Territoriais - P10TGS5',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],
            [
                'title' => 'Cirurgia eletiva em tempo hábil',
                'description' => 'Garantir a realização de cirurgia eletiva em tempo hábil com a efetivação de todo o fluxo (exames e consultas pré-operatórias).',
                'origin' => 'Pré Conferência Territoriais - P11TGS6',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],
            [
                'title' => 'Descentralização de ambulatórios de saúde mental',
                'description' => 'Descentralizar ambulatórios avançados e multiprofissionais de saúde mental nos territórios do Município.',
                'origin' => 'Pré Conferência Territoriais - P12TGS6',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],
            [
                'title' => 'Ampliação de consultas e exames de média e alta complexidade',
                'description' => 'Aumentar oferta de consultas, procedimentos multiprofissionais e exames de média e alta complexidade em tempo oportuno no Município.',
                'origin' => 'Pré Conferência Territoriais - P13TGS7',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],
            [
                'title' => 'Espaços para atividade física',
                'description' => 'Ampliar o espaço físico para favorecer espaços de atividade física e convivência próximas as unidades de saúde.',
                'origin' => 'Pré Conferência Territoriais - P14TGS7',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],
            [
                'title' => 'Implantação e reestruturação de UBS',
                'description' => 'Implantar novas Unidades Básicas de Saúde em áreas descobertas, reestruturação e ampliação das já existentes, conforme parâmetro do Ministério da Saúde, para garantir melhores condições de atendimento e acessibilidade além da ampliação das equipes de Saúde da Família, Saúde Bucal e equipe multiprofissional, assegurando 100% de cobertura da população SUS dependente pela APS.',
                'origin' => 'Pré Conferência Territoriais - P15TGS8',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],
            [
                'title' => 'Concurso público para Agentes Comunitários de Saúde',
                'description' => 'Abertura de concurso público para a contratação de Agente Comunitário de Saúde visando a cobertura das áreas descobertas, proporcionando a territorialização de todas as unidades.',
                'origin' => 'Pré Conferência Territoriais - P16TGS8',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],
            [
                'title' => 'Albergue municipal para idosos',
                'description' => 'Construir um albergue municipal para cuidado continuado em saúde aos usuários idosos em vulnerabilidade social.',
                'origin' => 'Pré Conferência Territoriais - P17TGS9',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],
            [
                'title' => 'Unidade de oftalmologia 24 horas',
                'description' => 'Construir uma unidade de atendimento 24 horas com serviços especializados em oftalmologia.',
                'origin' => 'Pré Conferência Territoriais - P18TGS9',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],

            // PRÉ-CONFERÊNCIA TEMÁTICA PESSOA COM DEFICIÊNCIA
            [
                'title' => 'Ampliação de terapias para PCD',
                'description' => 'Ampliar a oferta de terapias para Pessoa com Deficiência em todos os ciclos de vida, com ênfase na juventude.',
                'origin' => 'Pré Conferência Pessoa com Deficiência - P19RPCD',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],
            [
                'title' => 'Garantia de medicamentos especiais para PCD',
                'description' => 'Garantir os medicamentos especiais que compõe a RANAME de uso da Pessoa com Deficiência.',
                'origin' => 'Pré Conferência Pessoa com Deficiência - P20RPCD',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],

            // PRÉ-CONFERÊNCIA TEMÁTICA SAÚDE MENTAL
            [
                'title' => 'Fortalecimento do cuidado em saúde mental',
                'description' => 'Ampliar e fortalecer as ofertas do cuidado em saúde mental nas unidades de saúde para população em todos os ciclos de vida.',
                'origin' => 'Pré Conferência Saúde Mental - P21RAPS',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],
            [
                'title' => 'Educação permanente em saúde mental',
                'description' => 'Implantar educação permanente em saúde mental para os profissionais da rede de saúde, considerando os ciclos da vida, na perspectiva da interseccionalidade.',
                'origin' => 'Pré Conferência Saúde Mental - P22RAPS',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],

            // PRÉ-CONFERÊNCIA TEMÁTICA PESSOA IDOSA
            [
                'title' => 'Espaço geriátrico no hospital municipal',
                'description' => 'Implantar espaço geriátrico dentro do hospital municipal.',
                'origin' => 'Pré Conferência Pessoa Idosa - P23IDOSO',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],
            [
                'title' => 'Comunicação clara sobre transferência de idosos',
                'description' => 'Regulamentar a obrigatoriedade da comunicação clara a respeito da condição de saúde e necessidade de transferência da população idosa em serviços da atenção especializada.',
                'origin' => 'Pré Conferência Pessoa Idosa - P24IDOSO',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],

            // PRÉ-CONFERÊNCIA TEMÁTICA POPULAÇÃO NEGRA E QUILOMBOLA
            [
                'title' => 'Implementação da Política de Saúde da População Negra',
                'description' => 'Garantir a efetivação da Política Nacional de Saúde Integral da População Negra e da saúde quilombola e de terreiros em Caruaru, assegurando financiamento específico no PPA e no orçamento municipal.',
                'origin' => 'Pré Conferência População Negra e Quilombola - P25PNEQ',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],
            [
                'title' => 'Comitê municipal de saúde quilombola',
                'description' => 'Criar comitê municipal de saúde quilombola e de terreiro para fortalecer o controle social e a participação popular.',
                'origin' => 'Pré Conferência População Negra e Quilombola - P26PNEQ',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],

            // PRÉ-CONFERÊNCIA TEMÁTICA LGBTQIAP+
            [
                'title' => 'Centro de Referência para população LGBTQIAP+',
                'description' => 'Implantar Centro de Referência à saúde da população LGBTQIAPN+.',
                'origin' => 'Pré Conferência LGBTQIAP+ - P27LGBTQIAP+',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],
            [
                'title' => 'Grupo condutor para política LGBTQIAP+',
                'description' => 'Implantar Grupo condutor de discussão e implementação da Política LGBTQIAPN+.',
                'origin' => 'Pré Conferência LGBTQIAP+ - P28LGBTQIAP+',
                'votes_count' => 0,
                'type' => 'Não Eleita'
            ],
        ];

        foreach ($proposals as $proposal) {
            Proposed::create($proposal);
        }
    }
}