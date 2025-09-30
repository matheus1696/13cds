<x-guest-layout>
    @include('public._partials.navigation')

    <!-- Propostas -->
    <section id="propostas" class="py-16 bg-white" aria-labelledby="propostas-title">
        <div class="container mx-auto px-4">

            <!-- Cabeçalho -->
            <div class="text-center mb-12">
                <span class="text-green-600 font-semibold uppercase tracking-wider text-sm mb-2 block">Propostas</span>
                <h1 id="propostas-title" class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Propostas da XIII Conferência Municipal de Saúde
                </h1>
                <div class="w-24 h-1 bg-green-600 mx-auto mb-4"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Lista das propostas apresentadas pelos delegados e grupos de trabalho.
                </p>
            </div>

            <!-- Lista de Propostas -->
            <div class="max-w-6xl mx-auto">
                <div class="bg-green-50 border-l-4 border-r border-y border-green-600 rounded-r-lg shadow-sm">
                    <div class="p-8 grid grid-cols-1 gap-6">
                        @foreach($propostas as $proposta)
                            <div class="bg-white border border-green-200 rounded-lg px-5 py-4 shadow hover:shadow-md transition">
                                <h2 class="text-lg font-bold text-green-800 mb-2">{{ $proposta->title }}</h2>
                                <p class="text-gray-700 mb-1"><strong>Descrição:</strong> {{ $proposta->description }}</p>
                                <p class="text-gray-700 mb-1"><strong>Origem:</strong> {{ $proposta->origin }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('public._partials.footer')
</x-guest-layout>
