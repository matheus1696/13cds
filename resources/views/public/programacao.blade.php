<x-guest-layout>
    
    @include('public._partials.navigation')

    <!-- Regimento -->
    <section id="regimento" class="py-16 bg-white" aria-labelledby="regimento-title">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <span class="text-green-600 font-semibold uppercase tracking-wider text-sm mb-2 block">Regimento Interno</span>
                <h1 id="regimento-title" class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Regimento XIII Conferência Municipal de Saúde</h1>
                <div class="w-24 h-1 bg-green-600 mx-auto mb-4"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Caruaru pelo SUS que acolhe, integra e cuida</p>
            </div>

            <!-- Regimento Content -->
            <div class="max-w-7xl mx-auto overflow-hidden">
                
                <!-- Document Header -->
                <div class="bg-green-50 border-l-4 border-r border-y border-green-600 p-6 rounded-r-lg">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div>
                            <h2 class="text-2xl font-bold text-green-800">XIII CONFERÊNCIA MUNICIPAL DE SAÚDE DE CARUARU</h2>
                            <p class="text-green-700">Documento aprovado pela Comissão Organizadora</p>
                        </div>
                        <div class="mt-4 md:mt-0">
                            <a href="{{ asset('assets/docs/regimento.pdf') }}" 
                            download="Regimento_XIII_Conferencia_Saude_Caruaru.pdf"
                            class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-medium transition-colors inline-flex items-center">
                                <i class="fas fa-download mr-2"></i>
                                Baixar PDF
                            </a>
                        </div>
                    </div>
                </div>

                <div class="p-8 space-y-12">
                    
                    <!-- Capítulo I -->
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-lg mr-3">I</span>
                            Da Natureza e Finalidade
                        </h2>
                        
                        <div class="prose prose-lg max-w-none text-gray-700">
                            <p class="mb-6">
                                <strong>Art. 1º</strong> - A XIII CONFERÊNCIA MUNICIPAL DE SAÚDE DE CARUARU, convocada pelo Conselho Municipal de Saúde de Caruaru, através da Resolução CMSC nº 007 de 05 de junho de 2025, evento aberto à participação de todos os segmentos sociais, tem por finalidade deliberar sobre as diretrizes da Política de Saúde do Município e sobre proposições para o Plano Municipal de Saúde 2026 – 2029, tendo como objetivos:
                            </p>

                            <div class="space-y-4 ml-6">
                                <div class="flex items-start">
                                    <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mt-1 mr-3 flex-shrink-0">I</span>
                                    <p>Reafirmar, impulsionar e efetivar os princípios e diretrizes do Sistema Único de Saúde - SUS, para garantir a saúde como direito humano, tendo como norte os princípios de universalidade, integralidade e equidade;</p>
                                </div>
                                <div class="flex items-start">
                                    <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mt-1 mr-3 flex-shrink-0">II</span>
                                    <p>Mobilizar e estabelecer diálogos com a sociedade caruaruense acerca do direito à saúde e em defesa do SUS;</p>
                                </div>
                                <div class="flex items-start">
                                    <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mt-1 mr-3 flex-shrink-0">III</span>
                                    <p>Fortalecer a participação e o controle social no SUS, com ampla representação da sociedade em todas as etapas da XIII Conferência Municipal de Saúde de Caruaru;</p>
                                </div>
                                <div class="flex items-start">
                                    <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mt-1 mr-3 flex-shrink-0">IV</span>
                                    <p>Avaliar a situação de saúde, elaborar propostas a partir das necessidades de saúde e participar da construção das diretrizes do Plano Plurianual - PPA e do Plano Municipal de Saúde de Caruaru;</p>
                                </div>
                                <div class="flex items-start">
                                    <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mt-1 mr-3 flex-shrink-0">V</span>
                                    <p>Aprofundar o debate sobre as propostas necessárias à Saúde de Caruaru e ao fortalecimento do SUS;</p>
                                </div>
                                <div class="flex items-start">
                                    <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mt-1 mr-3 flex-shrink-0">VI</span>
                                    <p>Estabelecer diretrizes para auxiliar na recuperação da rede municipal de saúde no cenário da pós-pandemia.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Capítulo II -->
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-lg mr-3">II</span>
                            Da Temática
                        </h2>
                        
                        <div class="prose prose-lg max-w-none text-gray-700 space-y-6">
                            <p>
                                <strong>Art. 2º</strong> - A XIII Conferência Municipal de Saúde de Caruaru terá como tema central <strong>"Caruaru pelo SUS que acolhe, integra e cuida"</strong> com a apreciação das propostas oriundas das Pré-Conferências de Saúde que serão disponibilizadas à Plenária Final, composta por delegados, convidados e ouvintes.
                            </p>
                            
                            <p>
                                <strong>Art. 3º</strong> - A Comissão Organizadora disponibilizará a todos os delegados a Programação do evento, cópia do Regimento Interno e as Propostas advindas das Pré-Conferências que irão subsidiar as discussões da Plenária Final da XIII Conferência de Saúde.
                            </p>
                        </div>
                    </div>

                    <!-- Capítulo III -->
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-lg mr-3">III</span>
                            Das Etapas
                        </h2>
                        
                        <div class="prose prose-lg max-w-none text-gray-700 space-y-6">
                            <p>
                                <strong>Art. 4º</strong> - A XIII Conferência Municipal de Saúde de Caruaru conta com duas (02) etapas:
                            </p>

                            <div class="bg-blue-50 p-6 rounded-lg border-l-4 border-blue-500">
                                <h4 class="font-bold text-blue-800 mb-3">Etapa I:</h4>
                                <p class="text-blue-700">Realização de Pré-Conferências nas comunidades onde se encontram instaladas as Unidades Básicas de Saúde/Centros de Saúde, Pré-Conferências Territoriais nos 9 (nove) Territórios de Gestão Sustentáveis (TGS) e 3 (três) Pré-Conferências temáticas com discussões específicas sobre:</p>
                                <ul class="list-disc list-inside text-blue-700 mt-2 space-y-1">
                                    <li>Saúde da População Negra, Quilombola e de Terreiro</li>
                                    <li>População LGBTQIAPN+</li>
                                    <li>Saúde Mental</li>
                                    <li>Pessoas com Deficiência e Pessoa Idosa</li>
                                </ul>
                                <p class="text-blue-700 mt-2"><strong>Período:</strong> 18 de agosto a 26 de setembro de 2025</p>
                            </div>

                            <div class="bg-green-50 p-6 rounded-lg border-l-4 border-green-500">
                                <h4 class="font-bold text-green-800 mb-3">Etapa II:</h4>
                                <p class="text-green-700">Realização do Evento Magno com Abertura Solene, leitura e aprovação das propostas e Plenária Final.</p>
                                <p class="text-green-700 mt-2"><strong>Data:</strong> 8 de outubro de 2025</p>
                            </div>

                            <p>
                                <strong>Art. 5º</strong> - Na XIII Conferência Municipal de Saúde de Caruaru serão observadas as recomendações da Resolução nº 453/2012 do Conselho Nacional de Saúde – CNS, e da Lei nº 8.142/90.
                            </p>
                            
                            <p>
                                <strong>Art. 6º</strong> - As deliberações da XIII Conferência Municipal de Saúde de Caruaru serão objeto de monitoramento pelas instâncias de Controle Social.
                            </p>
                        </div>
                    </div>

                    <!-- Capítulo IV -->
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-lg mr-3">IV</span>
                            Das Instâncias de Decisão
                        </h2>
                        
                        <div class="prose prose-lg max-w-none text-gray-700 space-y-6">
                            <p>
                                <strong>Art. 7º</strong> - São instâncias de decisão na XIII Conferência Municipal de Saúde de Caruaru:
                            </p>

                            <div class="space-y-4 ml-6">
                                <div class="flex items-start">
                                    <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mt-1 mr-3 flex-shrink-0">I</span>
                                    <p>As Pré-Conferências de Saúde;</p>
                                </div>
                                <div class="flex items-start">
                                    <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mt-1 mr-3 flex-shrink-0">II</span>
                                    <p>A Plenária Final.</p>
                                </div>
                            </div>

                            <div class="bg-yellow-50 p-4 rounded-lg border-l-4 border-yellow-500 mt-4">
                                <p class="text-yellow-800 text-sm"><strong>§ 1º</strong> - As Propostas advindas das Pré-conferências Territoriais e Temáticas serão lidas em plenário e, após a leitura, cada delegado deverá votar na proposta apresentada.</p>
                                <p class="text-yellow-800 text-sm mt-2"><strong>§ 2º</strong> - A Plenária Final terá a prerrogativa de debater, rejeitar ou aprovar as propostas provenientes do Relatório Consolidado das Pré-Conferências de Saúde, bem como as moções propostas.</p>
                                <p class="text-yellow-800 text-sm mt-2"><strong>§ 3º</strong> - Caso exista concordância entre os delegados durante a plenária da XIII Conferência Municipal de Saúde, poderão ser incluídas mais 5 novas propostas, além das propostas advindas das pré-conferências.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Capítulo V -->
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-lg mr-3">V</span>
                            Da Estrutura e Composição da Comissão Organizadora
                        </h2>
                        
                        <div class="prose prose-lg max-w-none text-gray-700 space-y-6">
                            <p>
                                <strong>Art. 8º</strong> - A Comissão Organizadora da XIII Conferência Municipal de Saúde de Caruaru terá a responsabilidade de coordenação dos trabalhos, facilitando as discussões, participação dos delegados e encaminhamentos necessários ao êxito do evento.
                            </p>

                            <div class="bg-gray-50 p-4 rounded-lg">
                                <p class="text-gray-700"><strong>Parágrafo Único:</strong> A XIII Conferência Municipal de Saúde de Caruaru será presidida pela Secretária Municipal de Saúde e pela Presidente do Conselho Municipal de Saúde.</p>
                            </div>

                            <p>
                                <strong>Art. 9º</strong> - A Mesa da Plenária Final será constituída por Coordenação Técnica, Comissão de Relatoria e Presidente do Conselho.
                            </p>
                            
                            <p>
                                <strong>Art. 10</strong> - Cabe à Secretaria Municipal de Saúde assegurar o suporte técnico, administrativo e financeiro para a realização da XIII CMSC.
                            </p>
                        </div>
                    </div>

                    <!-- Capítulo VI -->
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-lg mr-3">VI</span>
                            Dos Participantes
                        </h2>
                        
                        <div class="prose prose-lg max-w-none text-gray-700 space-y-6">
                            <p>
                                <strong>Art. 11</strong> - São participantes da XIII CMSC: Delegados Natos e Delegados Eleitos nas Pré-Conferências Territoriais e Pré-Conferências Temáticas e os convidados.
                            </p>

                            <div class="space-y-4 ml-6">
                                <div class="bg-green-50 p-4 rounded-lg">
                                    <p class="text-green-800"><strong>§1º</strong> - São Delegados Natos os conselheiros titulares do Conselho Municipal de Saúde.</p>
                                </div>
                                <div class="bg-blue-50 p-4 rounded-lg">
                                    <p class="text-blue-800"><strong>§2º</strong> - Durante a Plenária Final os delegados terão direito a voz e a voto; os convidados terão direito apenas a voz.</p>
                                </div>
                                <div class="bg-purple-50 p-4 rounded-lg">
                                    <p class="text-purple-800"><strong>§3º</strong> - Com vistas à comprovação da legalidade, legitimidade e funcionamento da XIII CMSC, os delegados deverão se credenciar junto à Secretaria do Evento das 8h até as 9h do dia 8 de outubro de 2025.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Capítulo VII -->
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-lg mr-3">VII</span>
                            Da Sessão Plenária Final
                        </h2>
                        
                        <div class="prose prose-lg max-w-none text-gray-700 space-y-6">
                            <p>
                                <strong>Art. 12</strong> - A Plenária Final da XIII Conferência Municipal de Saúde de Caruaru terá como objetivos:
                            </p>

                            <div class="space-y-4 ml-6">
                                <div class="flex items-start">
                                    <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mt-1 mr-3 flex-shrink-0">I</span>
                                    <p>Apreciar e aprovar as propostas, indicações e recomendações, referendando o Relatório Final;</p>
                                </div>
                                <div class="flex items-start">
                                    <span class="bg-green-500 text-white rounded-full w-6 h-6 flex items-center justify-center text-sm mt-1 mr-3 flex-shrink-0">II</span>
                                    <p>Apreciar as moções apresentadas à Plenária Final.</p>
                                </div>
                            </div>

                            <p>
                                <strong>Art. 13</strong> – A metodologia da Plenária Final seguirá os passos definidos abaixo:
                            </p>

                            <div class="bg-gray-50 p-6 rounded-lg space-y-4">
                                <p class="text-gray-700"><strong>§1º</strong> - As propostas advindas das pré-conferências serão lidas na Plenária Final e os destaques deverão ser apresentados oralmente ou por escrito à Mesa da Plenária Final.</p>
                                <p class="text-gray-700"><strong>§2º</strong> - Os destaques feitos pelos delegados deverão ser para supressão ou alteração da proposta.</p>
                                <p class="text-gray-700"><strong>§3º</strong> - Não será permitido transformar destaque em nova proposta.</p>
                                <p class="text-gray-700"><strong>§4º</strong> - As propostas que não tiverem destaque, entende-se que foram aprovadas para composição do Relatório Final.</p>
                                <p class="text-gray-700"><strong>§5º</strong> - O participante propositor do destaque terá 02 (dois) minutos para expor sua proposição, obedecendo-se à ordem de inscrição na Mesa da Plenária Final.</p>
                                <p class="text-gray-700"><strong>§6º</strong> - Para cada proposição haverá direito a outro participante com argumentação contrária, com igual tempo de intervenção.</p>
                                <p class="text-gray-700"><strong>§7º</strong> - Após o período de proposição e de contestação, o coordenador da Mesa da Plenária Final levará a proposição à votação, sendo vencedora a que tiver maioria simples dos votos.</p>
                                <p class="text-gray-700"><strong>§8º</strong> - Serão contados os votos CONTRA, A FAVOR e as ABSTENÇÕES, com direito a defesa CONTRA e A FAVOR das propostas que serão apresentadas uma a uma para a referida análise.</p>
                            </div>

                            <p>
                                <strong>Art. 14</strong> - Durante o período de votação não serão considerados os levantamentos de questão de ordem e de encaminhamento.
                            </p>

                            <p>
                                <strong>Art. 15</strong> - As moções deverão ser encaminhadas à Mesa da Plenária Final até as 14 horas do dia 8 de outubro de 2025.
                            </p>

                            <div class="bg-yellow-50 p-4 rounded-lg space-y-2">
                                <p class="text-yellow-800 text-sm"><strong>§1º</strong> - As moções encaminhadas deverão ser redigidas em 20 (vinte) linhas no máximo.</p>
                                <p class="text-yellow-800 text-sm"><strong>§2º</strong> - Para que seja apreciada na Plenária Final a moção deverá ser assinada no mínimo por 50% (cinquenta por cento) dos delegados credenciados.</p>
                                <p class="text-yellow-800 text-sm"><strong>§3º</strong> - As moções apresentadas serão submetidas à Plenária Final.</p>
                                <p class="text-yellow-800 text-sm"><strong>§4º</strong> - O delegado proponente da moção terá 02 (dois) minutos para fazer a apresentação desta.</p>
                                <p class="text-yellow-800 text-sm"><strong>§5º</strong> - Os componentes da Mesa da Plenária Final submeterão as moções à discussão e votação.</p>
                                <p class="text-yellow-800 text-sm"><strong>§6º</strong> - As moções serão aprovadas por maioria simples dos votos dos delegados.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Capítulo VIII -->
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-lg mr-3">VIII</span>
                            Disposições Gerais
                        </h2>
                        
                        <div class="prose prose-lg max-w-none text-gray-700 space-y-6">
                            <p>
                                <strong>Art. 16</strong> - O Regimento Interno da XIII Conferência Municipal de Saúde de Caruaru será aprovado pela Plenária desta Conferência.
                            </p>
                            
                            <p>
                                <strong>Art. 17</strong> - Os delegados da XIII Conferência Municipal de Saúde de Caruaru terão crachás de identificação que facilitarão a votação nos trabalhos da Plenária Final.
                            </p>
                            
                            <p>
                                <strong>Art. 18</strong> - Os casos omissos serão resolvidos pela Comissão Organizadora do evento.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('public._partials.footer')
</x-guest-layout>