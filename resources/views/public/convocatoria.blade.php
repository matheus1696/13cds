<x-guest-layout>
    
    @include('public._partials.navigation')

    <!-- Convocatória -->
    <section id="convocatoria" class="py-16 bg-white" aria-labelledby="convocatoria-title">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <span class="text-green-600 font-semibold uppercase tracking-wider text-sm mb-2 block">Documento Oficial</span>
                <h1 id="convocatoria-title" class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Convocatória 13ª Conferência Municipal de Saúde</h1>
                <div class="w-24 h-1 bg-green-600 mx-auto mb-4"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">"Caruaru pelo SUS que acolhe, integra e cuida."</p>
            </div>

            <!-- Convocatória Content -->
            <div class="max-w-7xl mx-auto overflow-hidden">

                <!-- Texto da Convocatória -->
                <div class="prose prose-lg max-w-none text-gray-700 space-y-6 mb-12">
                    <p>
                        A Presidente do Conselho Municipal de Saúde de Caruaru-PE, no uso de suas atribuições legais conferidas pela Lei Federal nº 8.006, de 19 de setembro de 1990, pela Lei Federal nº 8.142, de 20 de dezembro de 1990, e conforme a Lei Municipal nº 5.961, de 16 de dezembro de 2022, que altera a Lei Municipal nº 5.220, de 11 de junho de 2012, e ainda pelo Regimento Interno deste colegiado, convoca a realização da 13ª Conferência Municipal de Saúde de Caruaru - 13ª CMSC, com o tema <strong>"Caruaru pelo SUS que acolhe, integra e cuida"</strong>, a realizar-se no dia 6 de outubro de 2025, com início às 8 horas e encerramento às 17 horas, no Auditório da Secretaria Municipal de Educação de Caruaru - SEDUC, localizado na Avenida Cícero José Dutra, SN, Bairro Petrópolis, Caruaru-PE, tendo entre os seus objetivos estabelecer diretrizes para a construção do Plano Plurianual - PPA.
                    </p>

                    <div class="bg-blue-50 p-6 rounded-lg border-l-4 border-blue-500">
                        <h3 class="font-bold text-blue-800 mb-4">Atividades Preparatórias</h3>
                        <p class="text-blue-700">
                            As atividades preparatórias tiveram início com as Pré-Conferências Temáticas, nos dias 1 e 2 de agosto de 2025, seguindo com as Pré-Conferências Regionais (UBS - Unidades Básicas de Saúde e Centro de Saúde, entre os dias 01 e 19) e se concluindo com as Pré-Conferências Territoriais, dos dias 22 a 28 de setembro, que reunirão 09 grupos formados nas etapas anteriores, correspondendo aos 08 Territórios de Gestão do Sistema de Saúde (TGS), momento em que serão eleitos de forma amplamente participativa as delegadas e os delegados que irão representar os segmentos Usuários do SUS e Trabalhadores da Saúde na 13ª Conferência Municipal de Saúde de Caruaru-PE.
                        </p>
                    </div>
                </div>

                <!-- Document Header -->
                <div class="bg-green-50 border-l-4 border-r border-y border-green-600 p-6 rounded-r-lg mb-12">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div>
                            <h2 class="text-2xl font-bold text-green-800">CONVOCATÓRIA 13ª Conferencia Municipal de Saúde de Caruaru</h2>
                            <p class="text-green-700">Consenho Municipal de Seude de Caruaru - Estado de Pernambuco</p>
                        </div>
                        <div class="mt-4 md:mt-0">
                            <a href="{{ asset('assets/docs/convocatoria.pdf') }}" 
                               download="convocatoria_XIII_Conferencia_Municipal_Saude_Caruaru.pdf"
                               class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-medium transition-colors inline-flex items-center">
                                <i class="fas fa-download mr-2"></i>
                                Baixar PDF
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('public._partials.footer')
</x-guest-layout>
