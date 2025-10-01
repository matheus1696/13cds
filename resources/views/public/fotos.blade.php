<x-guest-layout>
    @include('public._partials.navigation')

    <!-- Fotos -->
    <section id="fotos" class="py-16 bg-white" aria-labelledby="fotos-title">
        <div class="container mx-auto px-4">
            
            <!-- Cabeçalho -->
            <div class="text-center mb-12">
                <span class="text-green-600 font-semibold uppercase tracking-wider text-sm mb-2 block">Galeria</span>
                <h1 id="fotos-title" class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Galeria da XIII Conferência Municipal de Saúde
                </h1>
                <div class="w-24 h-1 bg-green-600 mx-auto mb-4"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Confira os principais registros fotográficos da pré-conferência e da conferência.
                </p>
            </div>

            <!-- Grid de Fotos -->
            <div x-data="{ open: false, image: '' }" class="max-w-7xl mx-auto">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    
                    @for($i = 1; $i <= 168; $i++)
                        <div class="aspect-square rounded-lg overflow-hidden shadow-md cursor-pointer"
                             @click="open = true; image = '{{ asset('assets/img/pre_conferencia/pre_conferencia(' . $i . ').png') }}'">
                            <img src="{{ asset('assets/img/pre_conferencia/pre_conferencia(' . $i . ').png') }}"
                                 alt="Foto Conferência {{ $i }}"
                                 class="w-full h-full object-cover hover:scale-110 transition-transform">
                        </div>
                    @endfor

                </div>

                <!-- Modal -->
                <div x-show="open" x-transition class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50" @click="open = false">
                    <div class="relative">
                        <button @click="open = false" class="absolute top-2 right-2 bg-white rounded-full px-3 py-1.5 shadow-md hover:bg-green-700 hover:text-white"> ✕ </button>
                        <img :src="image" alt="Imagem Ampliada" class="max-h-[90vh] max-w-[90vw] rounded-lg shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('public._partials.footer')
</x-guest-layout>
