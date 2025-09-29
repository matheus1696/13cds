<!-- Barra de Navegação Revisada -->
<nav class="bg-green-700 text-white shadow-lg sticky top-0 z-50" 
     aria-label="Navegação principal" role="navigation">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center">
            
            <!-- Logo -->
            <a href="{{ url('/') }}" 
               class="flex items-center focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-green-800 rounded">
                  <img src="{{ asset('assets/img/logo_full_white.png') }}" alt="" class="w-24">
            </a>
            
            <!-- Menu desktop -->
            <div class="hidden lg:flex space-x-1">
                <a href="{{ route('regimento') }}" 
                   class="px-4 py-2 rounded-md transition duration-200 hover:bg-green-600 {{ request()->routeIs('regimento') ? 'bg-green-900 font-semibold' : '' }}">
                   Regimento
                </a>
                <a href="{{ route('decreto') }}" 
                   class="px-4 py-2 rounded-md transition duration-200 hover:bg-green-600 {{ request()->routeIs('decreto') ? 'bg-green-900 font-semibold' : '' }}">
                   Decreto
                </a>
                <a href="{{ route('convocatoria') }}" 
                   class="px-4 py-2 rounded-md transition duration-200 hover:bg-green-600 {{ request()->routeIs('convocatoria') ? 'bg-green-900 font-semibold' : '' }}">
                   Convocatória
                </a>
                <a href="#" 
                   class="px-4 py-2 rounded-md transition duration-200 hover:bg-green-600">
                   Programação
                </a>
                <a href="#" 
                   class="px-4 py-2 rounded-md transition duration-200 hover:bg-green-600">
                   Delegados
                </a>
                <a href="#" 
                   class="px-4 py-2 rounded-md transition duration-200 hover:bg-green-600">
                   Propostas
                </a>
                <a href="#" 
                   class="px-4 py-2 rounded-md transition duration-200 bg-gray-600 text-white" title="Desabilidado">
                   Certificados
                </a>
            </div>

            <!-- Menu mobile -->
            <div x-data="{ open: false }" class="lg:hidden">
                <!-- Botão hamburguer -->
                <button @click="open = !open" 
                        class="p-2 rounded-lg hover:bg-green-600 transition-colors 
                               focus:outline-none focus:ring-2 focus:ring-white" 
                        :aria-expanded="open.toString()" aria-label="Abrir menu mobile">
                    <i class="fas fa-bars text-xl" x-show="!open" aria-hidden="true"></i>
                    <i class="fas fa-times text-xl" x-show="open" aria-hidden="true"></i>
                </button>
                
                <!-- Overlay mobile -->
                <div x-show="open"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-100"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0"
                     class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden"
                     @click="open = false">
                </div>

                <!-- Menu lateral mobile -->
                <div x-show="open"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="transform translate-x-full"
                     x-transition:enter-end="transform translate-x-0"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="transform translate-x-0"
                     x-transition:leave-end="transform translate-x-full"
                     class="fixed top-0 right-0 h-full w-80 bg-green-800 shadow-2xl z-50 p-6">
                    
                    <!-- Cabeçalho -->
                    <div class="flex justify-between items-center mb-8">
                        <h2 class="text-xl font-bold">Menu</h2>
                        <button @click="open = false" 
                                class="p-2 text-white hover:bg-green-600 rounded" 
                                aria-label="Fechar menu">
                            <i class="fas fa-times text-lg"></i>
                        </button>
                    </div>
                    
                    <!-- Links mobile -->
                    <nav class="space-y-4" aria-label="Navegação mobile">
                        <a href="{{ route('regimento') }}" 
                           class="block px-4 py-2 rounded-md transition duration-200 hover:bg-green-600 {{ request()->routeIs('regimento') ? 'bg-green-900 font-semibold' : '' }}">
                           Regimento
                        </a>
                        <a href="{{ route('decreto') }}" 
                           class="block px-4 py-2 rounded-md transition duration-200 hover:bg-green-600 {{ request()->routeIs('decreto') ? 'bg-green-900 font-semibold' : '' }}">
                           Decreto
                        </a>
                        <a href="{{ route('convocatoria') }}" 
                           class="block px-4 py-2 rounded-md transition duration-200 hover:bg-green-600 {{ request()->routeIs('convocatoria') ? 'bg-green-900 font-semibold' : '' }}">
                           Convocatória
                        </a>
                        <a href="#" 
                           class="block px-4 py-2 rounded-md transition duration-200 hover:bg-green-600">
                           Programação
                        </a>
                        <a href="#" 
                           class="block px-4 py-2 rounded-md transition duration-200 hover:bg-green-600">
                           Delegados
                        </a>
                        <a href="#" 
                           class="block px-4 py-2 rounded-md transition duration-200 hover:bg-green-600">
                           Propostas
                        </a>
                        <a href="#" 
                           class="block px-4 py-2 rounded-md transition duration-200 bg-gray-600 text-white" title="Desabilidado">
                           Certificados
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</nav>
