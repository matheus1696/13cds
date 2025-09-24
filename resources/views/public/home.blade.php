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
                        
                        <div class="bg-green-50 border-l-4 border-green-600 p-6 rounded-r-lg">
                            <p class="text-green-800 font-medium">
                                Participe desta importante discussão e ajude a construir um SUS que realmente acolhe, integra e cuida da população de Caruaru.
                            </p>
                        </div>
                    </div>
                    
                    <div class="mt-8 grid grid-cols-2 gap-4">
                        <div class="text-center p-4 bg-green-50 rounded-lg">
                            <i class="fas fa-users text-3xl text-green-600 mb-2" aria-hidden="true"></i>
                            <h4 class="font-bold text-gray-900">Participação Popular</h4>
                            <p class="text-sm text-gray-600">Envolvimento da comunidade</p>
                        </div>
                        <div class="text-center p-4 bg-green-50 rounded-lg">
                            <i class="fas fa-heartbeat text-3xl text-green-600 mb-2" aria-hidden="true"></i>
                            <h4 class="font-bold text-gray-900">Saúde Pública</h4>
                            <p class="text-sm text-gray-600">Fortalecimento do SUS</p>
                        </div>
                    </div>
                </div>
                
                <div class="relative hidden md:block">
                    <div class="bg-green-100 p-8 rounded-2xl shadow-xl">
                        <img src="{{ asset('assets/img/logo.png') }}" 
                             alt="Logo da 13ª Conferência Municipal de Saúde de Caruaru" 
                             class="w-2/3 m-auto h-auto rounded-lg">
                    </div>
                    <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-green-600 rounded-full opacity-20"></div>
                    <div class="absolute -top-6 -right-6 w-32 h-32 bg-green-400 rounded-full opacity-10"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pré-Conferências Melhorado -->
    <section id="pre-conferencias" class="py-20 bg-green-50" aria-labelledby="pre-conferencias-title">
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
                            discutir e propor melhorias para o SUS no município.
                        </p>
                    </div>
                    
                    <!-- Mural de fotos -->
                    <div class="mb-8">
                        <h4 class="text-2xl font-bold text-gray-900 mb-6 text-center">Registro das Pré-Conferências</h4>
                        
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <!-- Placeholder para fotos -->
                            <div class="aspect-square bg-gray-200 rounded-lg flex items-center justify-center">
                                <i class="fas fa-image text-3xl text-gray-400" aria-hidden="true"></i>
                            </div>
                            <div class="aspect-square bg-gray-200 rounded-lg flex items-center justify-center">
                                <i class="fas fa-image text-3xl text-gray-400" aria-hidden="true"></i>
                            </div>
                            <div class="aspect-square bg-gray-200 rounded-lg flex items-center justify-center">
                                <i class="fas fa-image text-3xl text-gray-400" aria-hidden="true"></i>
                            </div>
                            <div class="aspect-square bg-gray-200 rounded-lg flex items-center justify-center">
                                <i class="fas fa-image text-3xl text-gray-400" aria-hidden="true"></i>
                            </div>
                        </div>
                        
                        <div class="text-center mt-6">
                            <button class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-lg font-medium transition-colors focus:outline-none focus:ring-2 focus:ring-green-300">
                                Ver Mais Fotos
                            </button>
                        </div>
                    </div>
                    
                    <!-- Estatísticas -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-8">
                        <div class="text-center p-4">
                            <div class="text-3xl font-bold text-green-600 mb-2">25+</div>
                            <div class="text-sm text-gray-600">UBS Participantes</div>
                        </div>
                        <div class="text-center p-4">
                            <div class="text-3xl font-bold text-green-600 mb-2">1.200+</div>
                            <div class="text-sm text-gray-600">Participantes</div>
                        </div>
                        <div class="text-center p-4">
                            <div class="text-3xl font-bold text-green-600 mb-2">150+</div>
                            <div class="text-sm text-gray-600">Propostas</div>
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
                        <div class="flex-1 bg-green-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow group-hover:bg-green-100">
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
                        <div class="flex-1 bg-green-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow group-hover:bg-green-100">
                            <h4 class="font-bold text-xl text-green-900 mb-3">9h - Abertura Oficial</h4>
                            <p class="text-gray-700">Cerimônia de abertura com falas das autoridades e apresentação cultural</p>
                        </div>
                    </div>
                    
                    <div class="flex gap-6 group">
                        <div class="flex flex-col items-center">
                            <div class="w-4 h-4 bg-green-600 rounded-full mt-2 group-hover:scale-125 transition-transform" aria-hidden="true"></div>
                            <div class="w-0.5 h-full bg-green-300 mt-2" aria-hidden="true"></div>
                        </div>
                        <div class="flex-1 bg-green-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow group-hover:bg-green-100">
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
                        <div class="flex-1 bg-green-50 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow group-hover:bg-green-100">
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
    <section id="localizacao" class="py-20 bg-green-50" aria-labelledby="localizacao-title">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-green-600 font-semibold uppercase tracking-wider text-sm mb-2 block">Onde Será</span>
                <h2 id="localizacao-title" class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Localização</h2>
                <div class="w-24 h-1 bg-green-600 mx-auto"></div>
            </div>
            
            <div class="grid lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <!-- Informações -->
                <div>
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
                        <div class="bg-green-50 rounded-lg p-6 mb-6">
                            <h4 class="font-bold text-lg text-green-900 mb-4 flex items-center">
                                <i class="fas fa-directions text-green-600 mr-2" aria-hidden="true"></i>
                                Como chegar:
                            </h4>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start">
                                    <i class="fas fa-bus text-green-600 mt-1 mr-3" aria-hidden="true"></i>
                                    <span><strong>Ônibus:</strong> Linhas 101, 205 e 305 - Ponto em frente ao local</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-car text-green-600 mt-1 mr-3" aria-hidden="true"></i>
                                    <span><strong>Estacionamento:</strong> Amplo estacionamento gratuito disponível no local</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-wheelchair text-green-600 mt-1 mr-3" aria-hidden="true"></i>
                                    <span><strong>Acessibilidade:</strong> Totalmente acessível para pessoas com deficiência</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <!-- Mapa -->
                <div class="bg-white rounded-2xl shadow-xl p-8">
                    <div id="map" class="h-96 bg-gradient-to-br from-green-100 to-green-200 rounded-lg flex items-center justify-center relative overflow-hidden">
                        <!-- Placeholder do mapa com estilo moderno -->
                        <div class="text-center z-10">
                            <i class="fas fa-map-marked-alt text-6xl text-green-600 mb-4" aria-hidden="true"></i>
                            <p class="text-green-800 font-medium">Mapa interativo da localização</p>
                            <p class="text-green-700 text-sm">Secretaria de Educação de Caruaru</p>
                        </div>
                        
                        <!-- Elementos decorativos do mapa -->
                        <div class="absolute top-4 left-4 w-8 h-8 bg-green-500 rounded-full opacity-20"></div>
                        <div class="absolute bottom-8 right-8 w-12 h-12 bg-green-400 rounded-full opacity-30"></div>
                        <div class="absolute top-1/2 left-1/4 w-6 h-6 bg-green-600 rounded-full opacity-40"></div>
                    </div>
                    
                    <!-- Legenda do mapa -->
                    <div class="mt-5">
                        <a href="#" target="_blank" rel="noopener noreferrer" 
                            class="w-full bg-green-600 hover:bg-green-700 text-white py-3 px-4 rounded-lg font-medium transition-colors flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-green-300">
                            <i class="fas fa-external-link-alt mr-2" aria-hidden="true"></i>
                            Abrir no Google Maps
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Melhorado -->
    <footer class="bg-green-900 text-white pt-16 pb-8" aria-labelledby="footer-heading">
        <div class="container mx-auto px-4">
            <h2 id="footer-heading" class="sr-only">Rodapé</h2>
            
            <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8 mb-12">
                <!-- Logo e descrição -->
                <div class="col-span-2">
                    <img src=" {{ asset('assets/img/logo_full_white.png')}} " alt="">
                </div>

                <!-- Links rápidos -->
                <div>
                    <h3 class="text-xl font-bold mb-6 relative pb-2">
                        Links Rápidos
                        <div class="absolute bottom-0 left-0 w-12 h-0.5 bg-green-600"></div>
                    </h3>
                    <ul class="space-y-3">
                        <li><a href="#inicio" class="text-green-200 hover:text-white transition-colors block py-1 focus:outline-none focus:text-white">Início</a></li>
                        <li><a href="#sobre" class="text-green-200 hover:text-white transition-colors block py-1 focus:outline-none focus:text-white">Sobre</a></li>
                        <li><a href="#pre-conferencias" class="text-green-200 hover:text-white transition-colors block py-1 focus:outline-none focus:text-white">Pré-Conferências</a></li>
                        <li><a href="#programacao" class="text-green-200 hover:text-white transition-colors block py-1 focus:outline-none focus:text-white">Programação</a></li>
                        <li><a href="#localizacao" class="text-green-200 hover:text-white transition-colors block py-1 focus:outline-none focus:text-white">Localização</a></li>
                    </ul>
                </div>
                
                <!-- Contato -->
                <div>
                    <h3 class="text-xl font-bold mb-6 relative pb-2">
                        Contato
                        <div class="absolute bottom-0 left-0 w-12 h-0.5 bg-green-600"></div>
                    </h3>
                    <ul class="space-y-4">
                        <li class="flex items-start">
                            <i class="fas fa-envelope text-green-400 mt-1 mr-3" aria-hidden="true"></i>
                            <div>
                                <span class="block text-green-200 font-medium">E-mail</span>
                                <a href="mailto:conferenciasaude@caruaru.pe.gov.br" class="text-green-100 hover:text-white transition-colors">
                                    conferenciasaude@caruaru.pe.gov.br
                                </a>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone text-green-400 mt-1 mr-3" aria-hidden="true"></i>
                            <div>
                                <span class="block text-green-200 font-medium">Telefone</span>
                                <a href="tel:+558112345678" class="text-green-100 hover:text-white transition-colors">
                                    (81) 1234-5678
                                </a>
                            </div>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-green-400 mt-1 mr-3" aria-hidden="true"></i>
                            <div>
                                <span class="block text-green-200 font-medium">Endereço</span>
                                <span class="text-green-100">Secretaria Municipal de Saúde<br>Caruaru - PE</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Rodapé inferior -->
            <div class="border-t border-green-800 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p class="text-green-400 text-sm mb-4 md:mb-0">
                        &copy; 2025 Prefeitura Municipal de Caruaru - Secretaria de Saúde. Todos os direitos reservados.
                    </p>
                    <div class="flex space-x-6 text-sm text-green-400">
                        <a href="#" class="hover:text-white transition-colors focus:outline-none focus:text-white">Política de Privacidade</a>
                        <a href="#" class="hover:text-white transition-colors focus:outline-none focus:text-white">Termos de Uso</a>
                        <a href="#" class="hover:text-white transition-colors focus:outline-none focus:text-white">Acessibilidade</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Botão de voltar ao topo -->
    <button id="back-to-top" 
            class="fixed bottom-8 right-8 bg-green-600 hover:bg-green-700 text-white w-12 h-12 rounded-full shadow-lg transition-all duration-300 opacity-0 invisible focus:outline-none focus:ring-2 focus:ring-green-300 z-40"
            aria-label="Voltar ao topo">
        <i class="fas fa-chevron-up" aria-hidden="true"></i>
    </button>

    <!-- Script para o botão voltar ao topo -->
    <script>
        // Botão voltar ao topo
        const backToTopButton = document.getElementById('back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.remove('opacity-100', 'visible');
                backToTopButton.classList.add('opacity-0', 'invisible');
            }
        });

        backToTopButton.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>

</x-guest-layout>