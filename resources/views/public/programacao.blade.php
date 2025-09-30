<x-guest-layout>
    
    @include('public._partials.navigation')

    <!-- Programação -->
    <section id="programacao" class="py-20 bg-white" aria-labelledby="programacao-title">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-green-600 font-semibold uppercase tracking-wider text-sm mb-2 block">Cronograma</span>
                <h1 id="programacao-title" class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Programação da XIII Conferência Municipal de Saúde
                </h1>
                <div class="w-24 h-1 bg-green-600 mx-auto"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto mt-4">
                    Caruaru pelo SUS que acolhe, integra e cuida
                </p>
            </div>
            
            <div class="max-w-6xl mx-auto">
                <!-- Cabeçalho da data -->
                <div class="bg-gradient-to-r from-green-700 to-green-600 text-white p-6 rounded-t-2xl mb-8 shadow-lg">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-bold">08 de Outubro de 2025</h3>
                            <p class="text-green-100">Conferência Municipal de Saúde</p>
                        </div>
                        <div class="bg-white/20 p-3 rounded-lg">
                            <i class="fas fa-calendar-day text-2xl" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Timeline -->
                <div class="space-y-6">
                    <div class="flex gap-6 group">
                        <div class="flex flex-col items-center">
                            <div class="w-4 h-4 bg-green-600 rounded-full mt-2 group-hover:scale-125 transition-transform"></div>
                            <div class="w-0.5 h-full bg-green-300 mt-2"></div>
                        </div>
                        <div class="flex-1 bg-green-100 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-3">
                                <h4 class="font-bold text-xl text-green-900">8h - Credenciamento e Café de Boas-Vindas</h4>
                                <span class="bg-green-600 text-white px-3 py-1 rounded-full text-sm font-medium">Início</span>
                            </div>
                            <p class="text-gray-700">Recepção dos participantes, entrega de materiais e coffee break de boas-vindas</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-6 group">
                        <div class="flex flex-col items-center">
                            <div class="w-4 h-4 bg-green-600 rounded-full mt-2"></div>
                            <div class="w-0.5 h-full bg-green-300 mt-2"></div>
                        </div>
                        <div class="flex-1 bg-green-100 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                            <h4 class="font-bold text-xl text-green-900 mb-3">9h - Abertura Oficial</h4>
                            <p class="text-gray-700">Cerimônia de abertura com falas das autoridades e apresentação cultural</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-6 group">
                        <div class="flex flex-col items-center">
                            <div class="w-4 h-4 bg-green-600 rounded-full mt-2"></div>
                            <div class="w-0.5 h-full bg-green-300 mt-2"></div>
                        </div>
                        <div class="flex-1 bg-green-100 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                            <h4 class="font-bold text-xl text-green-900 mb-3">10h - Painel: "O SUS que acolhe, integra e cuida"</h4>
                            <p class="text-gray-700">Discussão sobre os desafios e avanços do SUS em Caruaru com especialistas e gestores</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-6 group">
                        <div class="flex flex-col items-center">
                            <div class="w-4 h-4 bg-yellow-500 rounded-full mt-2"></div>
                            <div class="w-0.5 h-full bg-yellow-300 mt-2"></div>
                        </div>
                        <div class="flex-1 bg-yellow-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                            <h4 class="font-bold text-xl text-yellow-900 mb-3">12h - Intervalo para Almoço</h4>
                            <p class="text-yellow-800">Horário livre para almoço e networking</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-6 group">
                        <div class="flex flex-col items-center">
                            <div class="w-4 h-4 bg-green-600 rounded-full mt-2"></div>
                            <div class="w-0.5 h-full bg-green-300 mt-2"></div>
                        </div>
                        <div class="flex-1 bg-green-100 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                            <h4 class="font-bold text-xl text-green-900 mb-3">14h - Grupos de Trabalho Temáticos</h4>
                            <p class="text-gray-700">Discussão em grupos sobre eixos temáticos específicos da saúde pública</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-6 group">
                        <div class="flex flex-col items-center">
                            <div class="w-4 h-4 bg-green-700 rounded-full mt-2"></div>
                        </div>
                        <div class="flex-1 bg-green-100 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-3">
                                <h4 class="font-bold text-xl text-green-900">16h - Plenária Final e Encerramento</h4>
                                <span class="bg-green-700 text-white px-3 py-1 rounded-full text-sm font-medium">Encerramento</span>
                            </div>
                            <p class="text-gray-700">Apresentação e votação das propostas elaboradas nos grupos de trabalho</p>
                        </div>
                    </div>
                </div>
                
                <!-- Document Header -->
                <div class="bg-green-50 border-l-4 border-r border-y border-green-600 p-6 rounded-r-lg mt-14">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div>
                            <h2 class="text-2xl font-bold text-green-800">Programação - XIII CONFERÊNCIA MUNICIPAL DE SAÚDE DE CARUARU</h2>
                            <p class="text-green-700">Documento aprovado pela Comissão Organizadora</p>
                        </div>
                        <div class="mt-4 md:mt-0">
                            <a href="{{ asset('assets/docs/programacao.pdf') }}" 
                            download="Programacao_XIII_Conferencia_Municipal_Saude_Caruaru.pdf"
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
