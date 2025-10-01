<x-guest-layout>
    
    @include('public._partials.navigation')

    @include('public._partials.banner')

    <!-- Sobre a Conferência Melhorado -->
    <section id="sobre" class="py-20 bg-white" aria-labelledby="sobre-title">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-green-600 font-semibold uppercase tracking-wider text-sm mb-2 block">Sobre o Evento</span>
                <h2 id="sobre-title" class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Sobre a Conferência</h2>
                <div class="w-24 h-1 bg-green-600 mx-auto"></div>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="space-y-6">
                        <p class="text-lg text-gray-700 leading-relaxed">
                            A <strong class="text-green-700">13ª Conferência Municipal de Saúde de Caruaru</strong> tem como tema 
                            "Caruaru pelo SUS que acolhe, integra e cuida". Este evento é um espaço democrático de discussão 
                            e construção de propostas para o fortalecimento do Sistema Único de Saúde (SUS) em nosso município.
                        </p>
                        
                        <p class="text-lg text-gray-700 leading-relaxed">
                            A conferência tem como objetivo principal avaliar a situação da saúde em Caruaru e definir diretrizes 
                            para a formulação da política de saúde nos próximos anos, garantindo a participação social na gestão do SUS.
                        </p>
                        
                        <div class="bg-green-100 border-l-4 border-green-600 p-6 rounded-r-lg">
                            <p class="text-green-800 font-medium">
                                Participe desta importante discussão e ajude a construir um SUS que realmente acolhe, integra e cuida da população de Caruaru.
                            </p>
                        </div>
                    </div>
                    
                    <div class="mt-8 grid grid-cols-2 gap-4">
                        <div class="text-center p-4 bg-green-100 rounded-lg">
                            <i class="fas fa-users text-3xl text-green-600 mb-2" aria-hidden="true"></i>
                            <h4 class="font-bold text-gray-900">Participação Popular</h4>
                            <p class="text-sm text-gray-600">Envolvimento da comunidade</p>
                        </div>
                        <div class="text-center p-4 bg-green-100 rounded-lg">
                            <i class="fas fa-heartbeat text-3xl text-green-600 mb-2" aria-hidden="true"></i>
                            <h4 class="font-bold text-gray-900">Saúde Pública</h4>
                            <p class="text-sm text-gray-600">Fortalecimento do SUS</p>
                        </div>
                    </div>
                </div>
                
                <div class="relative hidden md:block">
                    <div class="bg-green-100 p-8 rounded-2xl shadow-xl">
                        <img src="{{ asset('assets/img/logotipo.png') }}" alt="Logo da 13ª Conferência Municipal de Saúde de Caruaru" class="w-2/3 m-auto h-auto rounded-lg">
                    </div>
                    <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-green-600 rounded-full opacity-20"></div>
                    <div class="absolute -top-6 -right-6 w-32 h-32 bg-green-400 rounded-full opacity-10"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pré-Conferências Melhorado -->
    <section id="pre-conferencias" class="py-20 bg-green-100" aria-labelledby="pre-conferencias-title">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-green-600 font-semibold uppercase tracking-wider text-sm mb-2 block">Etapas Preparatórias</span>
                <h2 id="pre-conferencias-title" class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Pré-Conferências de Saúde</h2>
                <div class="w-24 h-1 bg-green-600 mx-auto"></div>
            </div>
            
            <div class="max-w-6xl mx-auto">
                <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
                    <!-- Cabeçalho informativo -->
                    <div class="flex flex-col md:flex-row items-center gap-6 mb-8 p-6 bg-green-100 rounded-xl">
                        <div class="flex-shrink-0">
                            <div class="bg-green-600 p-4 rounded-full">
                                <i class="fas fa-clipboard-list text-white text-2xl" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="text-center md:text-left">
                            <h3 class="text-2xl font-bold text-green-900 mb-2">De 22 de agosto a 26 de setembro de 2025</h3>
                            <p class="text-green-800 font-medium">Cada Unidade Básica de Saúde de Caruaru realizou sua pré-conferência local</p>
                        </div>
                    </div>
                    
                    <!-- Descrição -->
                    <div class="prose prose-lg max-w-none text-gray-700 mb-8">
                        <p class="text-lg leading-relaxed">
                            As pré-conferências são etapas preparatórias fundamentais para a Conferência Municipal de Saúde. 
                            Elas aconteceram em todas as Unidades Básicas de Saúde (UBS) de Caruaru, onde a população pôde 
                            discutir, propor melhorias e selecionar as melhores propostas para o SUS no município.
                        </p>
                    </div>
                    
                    <!-- Mural de fotos -->
                    <div class="mb-8">
                        <h4 class="text-2xl font-bold text-gray-900 mb-6 text-center">Registro das Pré-Conferências</h4>
                        
                        <div x-data="{ openPhoto: false, image: '' }">
                            <!-- Grid de Imagens -->
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                                @for ($i = 0; $i < 8; $i++)
                                    @php $img = rand(1,168) @endphp
                                    <div class="aspect-square rounded-lg overflow-hidden shadow-md cursor-pointer"
                                        @click="openPhoto = true; image = '{{ asset('assets/img/pre_conferencia/pre_conferencia(' . $img . ').png') }}'">
                                        <img src="{{ asset('assets/img/pre_conferencia/pre_conferencia(' . $img . ').png') }}"
                                            alt="Foto Pré-Conferência"
                                            class="w-full h-full object-cover">
                                    </div>                                    
                                @endfor
                            </div>

                            <!-- Modal -->
                            <div x-show="openPhoto" x-transition class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50" @click="openPhoto = false">
                                <div class="relative">
                                    <button @click="openPhoto = false" class="absolute top-2 right-2 bg-white rounded-full px-3 py-1.5 shadow-md hover:bg-green-700 hover:text-white font-semibold"> ✕ </button>
                                    <img :src="image" alt="Imagem Ampliada" class="max-h-[90vh] max-w-[90vw] rounded-lg shadow-lg">
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center mt-6">
                            <a href="{{ route('fotos') }}" class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-green-300">Ver todas as fotos</a>
                        </div>
                    </div>
                    
                    <!-- Estatísticas -->
                    <div class="grid grid-cols-4 gap-6 mt-8">
                        <div class="text-center p-4">
                            <div class="text-3xl font-bold text-green-600 mb-2">65+</div>
                            <div class="text-sm text-gray-600">UBS Participantes</div>
                        </div>
                        <div class="text-center p-4">
                            <div class="text-3xl font-bold text-green-600 mb-2">150+</div>
                            <div class="text-sm text-gray-600">Propostas Debatidas</div>
                        </div>
                        <div class="text-center p-4">
                            <div class="text-3xl font-bold text-green-600 mb-2">28</div>
                            <div class="text-sm text-gray-600">Propostas Selecionadas</div>
                        </div>
                        <div class="text-center p-4">
                            <div class="text-3xl font-bold text-green-600 mb-2">100%</div>
                            <div class="text-sm text-gray-600">Cobertura Municipal</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programação Melhorada -->
    <section id="programacao" class="py-20 bg-white" aria-labelledby="programacao-title">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-green-600 font-semibold uppercase tracking-wider text-sm mb-2 block">Cronograma</span>
                <h2 id="programacao-title" class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Programação do Evento</h2>
                <div class="w-24 h-1 bg-green-600 mx-auto"></div>
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
                            <div class="w-4 h-4 bg-green-600 rounded-full mt-2 group-hover:scale-125 transition-transform" aria-hidden="true"></div>
                            <div class="w-0.5 h-full bg-green-300 mt-2" aria-hidden="true"></div>
                        </div>
                        <div class="flex-1 bg-green-100 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow group-hover:bg-green-100">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-3">
                                <h4 class="font-bold text-xl text-green-900">8h - Credenciamento e Café de Boas-Vindas</h4>
                                <span class="bg-green-600 text-white px-3 py-1 rounded-full text-sm font-medium mt-2 md:mt-0">Início</span>
                            </div>
                            <p class="text-gray-700">Recepção dos participantes, entrega de materiais e coffee break de boas-vindas</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-6 group">
                        <div class="flex flex-col items-center">
                            <div class="w-4 h-4 bg-green-600 rounded-full mt-2 group-hover:scale-125 transition-transform" aria-hidden="true"></div>
                            <div class="w-0.5 h-full bg-green-300 mt-2" aria-hidden="true"></div>
                        </div>
                        <div class="flex-1 bg-green-100 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow group-hover:bg-green-100">
                            <h4 class="font-bold text-xl text-green-900 mb-3">9h - Abertura Oficial</h4>
                            <p class="text-gray-700">Cerimônia de abertura com falas das autoridades e apresentação cultural</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-6 group">
                        <div class="flex flex-col items-center">
                            <div class="w-4 h-4 bg-green-600 rounded-full mt-2 group-hover:scale-125 transition-transform" aria-hidden="true"></div>
                            <div class="w-0.5 h-full bg-green-300 mt-2" aria-hidden="true"></div>
                        </div>
                        <div class="flex-1 bg-green-100 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow group-hover:bg-green-100">
                            <h4 class="font-bold text-xl text-green-900 mb-3">10h - Painel: "O SUS que acolhe, integra e cuida"</h4>
                            <p class="text-gray-700">Discussão sobre os desafios e avanços do SUS em Caruaru com especialistas e gestores</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-6 group">
                        <div class="flex flex-col items-center">
                            <div class="w-4 h-4 bg-yellow-500 rounded-full mt-2 group-hover:scale-125 transition-transform" aria-hidden="true"></div>
                            <div class="w-0.5 h-full bg-yellow-300 mt-2" aria-hidden="true"></div>
                        </div>
                        <div class="flex-1 bg-yellow-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow group-hover:bg-yellow-100">
                            <h4 class="font-bold text-xl text-yellow-900 mb-3">12h - Intervalo para Almoço</h4>
                            <p class="text-yellow-800">Horário livre para almoço e networking</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-6 group">
                        <div class="flex flex-col items-center">
                            <div class="w-4 h-4 bg-green-600 rounded-full mt-2 group-hover:scale-125 transition-transform" aria-hidden="true"></div>
                            <div class="w-0.5 h-full bg-green-300 mt-2" aria-hidden="true"></div>
                        </div>
                        <div class="flex-1 bg-green-100 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow group-hover:bg-green-100">
                            <h4 class="font-bold text-xl text-green-900 mb-3">14h - Grupos de Trabalho Temáticos</h4>
                            <p class="text-gray-700">Discussão em grupos sobre eixos temáticos específicos da saúde pública</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-6 group">
                        <div class="flex flex-col items-center">
                            <div class="w-4 h-4 bg-green-700 rounded-full mt-2 group-hover:scale-125 transition-transform" aria-hidden="true"></div>
                        </div>
                        <div class="flex-1 bg-green-100 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow group-hover:bg-green-200">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-3">
                                <h4 class="font-bold text-xl text-green-900">16h - Plenária Final e Encerramento</h4>
                                <span class="bg-green-700 text-white px-3 py-1 rounded-full text-sm font-medium mt-2 md:mt-0">Encerramento</span>
                            </div>
                            <p class="text-gray-700">Apresentação e votação das propostas elaboradas nos grupos de trabalho</p>
                        </div>
                    </div>
                </div>
                
                <!-- Download da programação -->
                <div class="text-center mt-12">
                    <a href="#" class="inline-flex items-center bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-green-300">
                        <i class="fas fa-download mr-2" aria-hidden="true"></i>
                        Baixar Programação Completa (PDF)
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Localização Melhorada -->
    <section id="localizacao" class="py-20 bg-green-100" aria-labelledby="localizacao-title">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-green-600 font-semibold uppercase tracking-wider text-sm mb-2 block">Onde Será</span>
                <h2 id="localizacao-title" class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Localização</h2>
                <div class="w-24 h-1 bg-green-600 mx-auto"></div>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <!-- Informações -->
                <div class="bg-white rounded-2xl shadow-xl p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                        <i class="fas fa-map-marker-alt text-green-600 mr-3" aria-hidden="true"></i>
                        Secretaria de Educação de Caruaru
                    </h3>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex items-start">
                            <i class="fas fa-map-pin text-green-600 mt-1 mr-3" aria-hidden="true"></i>
                            <div>
                                <p class="font-medium text-gray-900">Endereço:</p>
                                <p class="text-gray-700">Av. Cícero José Dutra, S/N - Petrópolis, Caruaru - PE</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start">
                            <i class="fas fa-clock text-green-600 mt-1 mr-3" aria-hidden="true"></i>
                            <div>
                                <p class="font-medium text-gray-900">Horário:</p>
                                <p class="text-gray-700">08 de Outubro de 2025, das 8h às 17h</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Como chegar -->
                    <div class="bg-green-100 rounded-lg p-6 mb-6">
                        <h4 class="font-bold text-lg text-green-900 mb-4 flex items-center">
                            <i class="fas fa-directions text-green-600 mr-2" aria-hidden="true"></i>
                            Como chegar:
                        </h4>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <i class="fas fa-bus text-green-600 mt-1 mr-3" aria-hidden="true"></i>
                                <span><strong>Ônibus:</strong> Linhas 104 - Ponto em frente ao local.</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-wheelchair text-green-600 mt-1 mr-3" aria-hidden="true"></i>
                                <span><strong>Acessibilidade:</strong> Totalmente acessível para pessoas com deficiência.</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Mapa -->
                <div class="bg-white rounded-2xl shadow-xl p-8">
                    <div id="map" class="h-96 bg-gradient-to-br from-green-100 to-green-200 rounded-lg flex items-center justify-center relative overflow-hidden">
                        <!-- Placeholder do mapa com estilo moderno -->
                        <div class="text-center z-10 w-full">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.917139413125!2d-35.974366265361226!3d-8.298333301251482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7a98bdeaffffff9%3A0xb1a174b1d297c0cb!2sSECRETARIA%20DE%20EDUCA%C3%87%C3%83O%20E%20ESPORTES%20DE%20CARUARU!5e1!3m2!1spt-BR!2sbr!4v1758899525477!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-96"></iframe>
                        </div>
                    </div>
                    
                    <!-- Legenda do mapa -->
                    <div class="mt-5">
                        <a href="https://www.google.com/maps?ll=-8.298593,-35.973686&z=20&t=h&hl=pt-BR&gl=BR&mapclient=embed&cid=12799639923054854347" target="_blank" rel="noopener noreferrer" 
                            class="w-full bg-green-600 hover:bg-green-700 text-white py-3 px-4 rounded-lg font-medium transition-colors flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-green-300">
                            <i class="fas fa-external-link-alt mr-2" aria-hidden="true"></i>
                            Abrir no Google Maps
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('public._partials.footer')

</x-guest-layout>