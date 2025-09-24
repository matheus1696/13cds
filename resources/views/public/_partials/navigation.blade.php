<!-- Barra de Navegação Melhorada -->
<nav class="bg-green-800 text-white shadow-lg sticky top-0 z-50" aria-label="Navegação principal">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <!-- Logo com melhor semântica -->
            <a href="{{ url('/') }}" class="flex items-center focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-green-800 rounded">
                <i class="fas fa-stethoscope text-2xl mr-3" aria-hidden="true"></i>
                <span class="font-bold text-xl">13º Conferência de Saúde</span>
            </a>
            
            <!-- Menu desktop aprimorado -->
            <div class="hidden lg:flex space-x-1">
                <x-public.nav-link href="#" title="Regimento" />
                <x-public.nav-link href="#" title="Decreto" />
                <x-public.nav-link href="#" title="Convocatória" />
                <x-public.nav-link href="#" title="Programação" />
                <x-public.nav-link href="#" title="Delegados" />
                <x-public.nav-link href="#" title="Propostas" />
                <x-public.nav-link href="#" title="Certificados" />
            </div>

            <!-- Menu mobile melhorado -->
            <div x-data="{ open: false }" class="lg:hidden">
                <button @click="open = !open" class="p-2 rounded-lg hover:bg-green-700 transition-colors focus:outline-none focus:ring-2 focus:ring-white" :aria-expanded="open" aria-label="Menu mobile">
                    <i class="fas fa-bars text-xl" x-show="!open" aria-hidden="true"></i>
                    <i class="fas fa-times text-xl" x-show="open" aria-hidden="true"></i>
                </button>
                
                <!-- Overlay para mobile -->
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

                <!-- Menu mobile -->
                <div x-show="open"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="transform translate-x-full"
                        x-transition:enter-end="transform translate-x-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="transform translate-x-0"
                        x-transition:leave-end="transform translate-x-full"
                        class="fixed top-0 right-0 h-full w-80 bg-green-800 shadow-2xl z-50 p-6">
                        
                    <div class="flex justify-between items-center mb-8">
                        <h2 class="text-xl font-bold">Menu</h2>
                        <button @click="open = false" class="p-2 text-white hover:bg-green-700 rounded" aria-label="Fechar menu">
                            <i class="fas fa-times text-lg"></i>
                        </button>
                    </div>
                    
                    <nav class="space-y-4" aria-label="Navegação mobile">
                        <x-public.nav-link href="#" title="Regimento" />
                        <x-public.nav-link href="#" title="Decreto" />
                        <x-public.nav-link href="#" title="Convocatória" />
                        <x-public.nav-link href="#" title="Programação" />
                        <x-public.nav-link href="#" title="Delegados" />
                        <x-public.nav-link href="#" title="Propostas" />
                        <x-public.nav-link href="#" title="Certificados" />
                    </nav>
                </div>
            </div>
        </div>
    </div>
</nav>

