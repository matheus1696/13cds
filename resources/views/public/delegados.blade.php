<x-guest-layout>
    @include('public._partials.navigation')

    <!-- Delegados -->
    <section id="delegados" class="py-16 bg-white" aria-labelledby="delegados-title">
        <div class="container mx-auto px-4">
            
            <!-- Cabeçalho -->
            <div class="text-center mb-12">
                <span class="text-green-600 font-semibold uppercase tracking-wider text-sm mb-2 block">Delegados</span>
                <h1 id="delegados-title" class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Delegados da XIII Conferência Municipal de Saúde
                </h1>
                <div class="w-24 h-1 bg-green-600 mx-auto mb-4"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Lista oficial dos {{ $delegados->count() }} delegados participantes da conferência.
                </p>
            </div>

            <!-- Lista de Delegados -->
            <div class="max-w-6xl mx-auto">
                <div class="bg-green-50 border-l-4 border-r border-y border-green-600 rounded-r-lg shadow-sm">
                    <div class="p-8">
                        @foreach($delegados as $delegado)
                            <ul class="list-disc ml-8">
                                <li class="text-lg font-bold text-green-800">
                                    {{ $delegado->name }} - {{ $delegado->Segment->name }}
                                </li>
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('public._partials.footer')
</x-guest-layout>
