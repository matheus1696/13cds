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
                            <p class="text-green-100">13ª Conferência Municipal de Saúde de Caruaru</p>
                        </div>
                        <div class="bg-white/20 p-3 rounded-lg" aria-hidden="true">
                            <i class="fas fa-calendar-day text-2xl"></i>
                        </div>
                    </div>
                </div>
                
                <!-- Timeline -->
                <div class="space-y-6" role="list" aria-label="Cronograma da conferência">
                    <!-- Item 1 - Credenciamento -->
                    <div class="flex gap-6 group" role="listitem">
                        <div class="flex flex-col items-center">
                            <div class="w-4 h-4 bg-green-600 rounded-full mt-2 group-hover:scale-125 transition-transform" 
                                aria-hidden="true"></div>
                            <div class="w-0.5 h-full bg-green-300 mt-2" aria-hidden="true"></div>
                        </div>
                        <div class="flex-1 bg-green-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group-hover:bg-green-100 border border-green-200">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-3">
                                <div>
                                    <h4 class="font-bold text-xl text-green-900 mb-1">8h - Credenciamento</h4>
                                </div>
                                <span class="bg-green-600 text-white px-4 py-2 rounded-full text-sm font-medium mt-2 md:mt-0 inline-flex items-center">
                                    <i class="fas fa-coffee mr-2" aria-hidden="true"></i>
                                    Início
                                </span>
                            </div>
                            <p class="text-gray-700 leading-relaxed">Recepção dos participantes, entrega de materiais.</p>
                        </div>
                    </div>

                    <!-- Item 2 - Café -->
                    <div class="flex gap-6 group" role="listitem">
                        <div class="flex flex-col items-center">
                            <div class="w-4 h-4 bg-yellow-500 rounded-full mt-2 group-hover:scale-125 transition-transform" 
                                aria-hidden="true"></div>
                            <div class="w-0.5 h-full bg-yellow-300 mt-2" aria-hidden="true"></div>
                        </div>
                        <div class="flex-1 bg-yellow-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group-hover:bg-yellow-100 border border-yellow-200">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-3">
                                <div>
                                    <h4 class="font-bold text-xl text-yellow-900 mb-1">8h30 - Café da Manhã com Safona para Elas</h4>
                                </div>
                            </div>
                            <p class="text-yellow-800 leading-relaxed">Acolhimento e integração entre participantes.</p>
                        </div>
                    </div>
                    
                    <!-- Item 3 - Apresentação Cultural -->
                    <div class="flex gap-6 group" role="listitem">
                        <div class="flex flex-col items-center">
                            <div class="w-4 h-4 bg-green-600 rounded-full mt-2 group-hover:scale-125 transition-transform" 
                                aria-hidden="true"></div>
                            <div class="w-0.5 h-full bg-green-300 mt-2" aria-hidden="true"></div>
                        </div>
                        <div class="flex-1 bg-green-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group-hover:bg-green-100 border border-green-200">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-3">
                                <div>
                                    <h4 class="font-bold text-xl text-green-900 mb-1">9h30 - Apresentação Cultural</h4>
                                </div>
                                <span class="bg-green-700 text-white px-4 py-2 rounded-full text-sm font-medium mt-2 md:mt-0 inline-flex items-center">
                                    <i class="fas fa-microphone mr-2" aria-hidden="true"></i>
                                    Apresentação Cultural
                                </span>
                            </div>
                            <p class="text-gray-700 leading-relaxed">Apresentação Cultural com Onildo Almeida e o Vereador Thiago Macaco.</p>
                        </div>
                    </div>
                    
                    <!-- Item 4 - Abertura -->
                    <div class="flex gap-6 group" role="listitem">
                        <div class="flex flex-col items-center">
                            <div class="w-4 h-4 bg-green-600 rounded-full mt-2 group-hover:scale-125 transition-transform" 
                                aria-hidden="true"></div>
                            <div class="w-0.5 h-full bg-green-300 mt-2" aria-hidden="true"></div>
                        </div>
                        <div class="flex-1 bg-green-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group-hover:bg-green-100 border border-green-200">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-3">
                                <div>
                                    <h4 class="font-bold text-xl text-green-900 mb-1">10h - Abertura Oficial</h4>
                                </div>
                                <span class="bg-green-700 text-white px-4 py-2 rounded-full text-sm font-medium mt-2 md:mt-0 inline-flex items-center">
                                    <i class="fas fa-microphone mr-2" aria-hidden="true"></i>
                                    Principal
                                </span>
                            </div>
                            <p class="text-gray-700 leading-relaxed">Cerimônia de abertura com falas das autoridades.</p>
                        </div>
                    </div>
                    
                    <!-- Item 5 - Palestra Magna -->
                    <div class="flex gap-6 group" role="listitem">
                        <div class="flex flex-col items-center">
                            <div class="w-4 h-4 bg-blue-600 rounded-full mt-2 group-hover:scale-125 transition-transform" 
                                aria-hidden="true"></div>
                            <div class="w-0.5 h-full bg-blue-300 mt-2" aria-hidden="true"></div>
                        </div>
                        <div class="flex-1 bg-blue-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group-hover:bg-blue-100 border border-blue-200">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-3">
                                <div>
                                    <h4 class="font-bold text-xl text-blue-900 mb-1">11h25 - Palestra Magna</h4>
                                </div>
                                <span class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-medium mt-2 md:mt-0 inline-flex items-center">
                                    <i class="fas fa-chalkboard-teacher mr-2" aria-hidden="true"></i>
                                    Palestra
                                </span>
                            </div>
                            <p class="text-gray-700 leading-relaxed mb-3">
                                <strong>Convidada:</strong> Sra. Inês Costa, Assessora do COSEMS/PE; Odontóloga, Mestre em Saúde Coletica e Doutora em Inovação Terapêutica;
                            </p>
                        </div>
                    </div>
                    
                    <!-- Item 6 - Perguntas -->
                    <div class="flex gap-6 group" role="listitem">
                        <div class="flex flex-col items-center">
                            <div class="w-4 h-4 bg-green-600 rounded-full mt-2 group-hover:scale-125 transition-transform" aria-hidden="true"></div>
                            <div class="w-0.5 h-full bg-green-300 mt-2" aria-hidden="true"></div>
                        </div>
                        <div class="flex-1 bg-green-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group-hover:bg-green-100 border border-green-200">
                            <h4 class="font-bold text-xl text-green-900 mb-3">12h — Perguntas e interação com a palestrante</h4>
                            <p class="text-gray-700 leading-relaxed">
                            Espaço dedicado à participação do público. Um momento para esclarecer dúvidas, trocar experiências e aprofundar os temas apresentados durante a palestra.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Item 7 - Regimento -->
                    <div class="flex gap-6 group" role="listitem">
                        <div class="flex flex-col items-center">
                            <div class="w-4 h-4 bg-green-600 rounded-full mt-2 group-hover:scale-125 transition-transform" 
                                aria-hidden="true"></div>
                            <div class="w-0.5 h-full bg-green-300 mt-2" aria-hidden="true"></div>
                        </div>
                        <div class="flex-1 bg-green-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group-hover:bg-green-100 border border-green-200">
                            <h4 class="font-bold text-xl text-green-900 mb-3">12h10 - Leitura do Regimento</h4>
                            <p class="text-gray-700 leading-relaxed">Apresentação do regimento interno da conferência, estabelecendo as regras e procedimentos.</p>
                        </div>
                    </div>
                    
                    <!-- Item 8 - Almoço -->
                    <div class="flex gap-6 group" role="listitem">
                        <div class="flex flex-col items-center">
                            <div class="w-4 h-4 bg-yellow-500 rounded-full mt-2 group-hover:scale-125 transition-transform" 
                                aria-hidden="true"></div>
                            <div class="w-0.5 h-full bg-yellow-300 mt-2" aria-hidden="true"></div>
                        </div>
                        <div class="flex-1 bg-yellow-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group-hover:bg-yellow-100 border border-yellow-200">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-3">
                                <div>
                                    <h4 class="font-bold text-xl text-yellow-900 mb-1">13h - Intervalo para Almoço</h4>
                                </div>
                                <span class="bg-yellow-500 text-white px-4 py-2 rounded-full text-sm font-medium mt-2 md:mt-0 inline-flex items-center">
                                    <i class="fas fa-utensils mr-2" aria-hidden="true"></i>
                                    Intervalo
                                </span>
                            </div>
                            <p class="text-yellow-800 leading-relaxed">Horário para o almoço e integração entre participantes.</p>
                        </div>
                    </div>
                    
                    <!-- Item 9 - Discussão das Propostas -->
                    <div class="flex gap-6 group" role="listitem">
                        <div class="flex flex-col items-center">
                            <div class="w-4 h-4 bg-purple-600 rounded-full mt-2 group-hover:scale-125 transition-transform" 
                                aria-hidden="true"></div>
                            <div class="w-0.5 h-full bg-purple-300 mt-2" aria-hidden="true"></div>
                        </div>
                        <div class="flex-1 bg-purple-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group-hover:bg-purple-100 border border-purple-200">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-3">
                                <div>
                                    <h4 class="font-bold text-xl text-purple-900 mb-1">14h - Leitura e Apreciação das Propostas em Plenária</h4>
                                </div>
                                <span class="bg-purple-600 text-white px-4 py-2 rounded-full text-sm font-medium mt-2 md:mt-0 inline-flex items-center">
                                    <i class="fas fa-comments mr-2" aria-hidden="true"></i>
                                    Discussão
                                </span>
                            </div>
                            <p class="text-gray-700 leading-relaxed">Debate em plenária sobre todas as sugestões para o fortalecimento do SUS municipal.</p>
                        </div>
                    </div>
                    
                    <!-- Item 10 - Plenária Final -->
                    <div class="flex gap-6 group" role="listitem">
                        <div class="flex flex-col items-center">
                            <div class="w-4 h-4 bg-green-600 rounded-full mt-2 group-hover:scale-125 transition-transform" 
                                aria-hidden="true"></div>
                            <div class="w-0.5 h-full bg-green-300 mt-2" aria-hidden="true"></div>
                        </div>
                        <div class="flex-1 bg-green-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group-hover:bg-green-100 border border-green-200">
                            <h4 class="font-bold text-xl text-green-900 mb-3">15h40 - Plenária Final</h4>
                            <p class="text-gray-700 leading-relaxed">Composição da mesa para plenária final.</p>
                        </div>
                    </div>

                    <!-- Item 11 - Encerramento -->
                    <div class="flex gap-6 group" role="listitem">
                        <div class="flex flex-col items-center">
                            <div class="w-4 h-4 bg-green-700 rounded-full mt-2 group-hover:scale-125 transition-transform" 
                                aria-hidden="true"></div>
                        </div>
                        <div class="flex-1 bg-green-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-all duration-300 group-hover:bg-green-100 border border-green-200">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-3">
                                <div>
                                    <h4 class="font-bold text-xl text-green-900 mb-1">16h - Encerramento</h4>
                                </div>
                                <span class="bg-green-700 text-white px-4 py-2 rounded-full text-sm font-medium mt-2 md:mt-0 inline-flex items-center">
                                    <i class="fas fa-flag-checkered mr-2" aria-hidden="true"></i>
                                    Encerramento
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('public._partials.footer')
</x-guest-layout>