<x-app-layout>
    <x-slot name="header">
        <x-header.title title="Atividade Prática - {{ $exerciseAnswer->Exercise->title }}" />
        <p class="text-[10px] text-gray-400 uppercase font-semibold tracking-wider">Submeta aqui o seu fichamento do Curso de aperfeiçoamento em Apoio Matricial para Equipe Multiprofissional da Atenção Primária à Saúde de Caruaru-PE</p>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-6">

                <section class="py-6">
                    <div class="flex justify-end text-xs text-gray-400 pb-4">
                        <div class="flex-1 flex items-center gap-1">
                            Enviado por: <p>{{ $exerciseAnswer->User->name }}</p>
                        </div>
                        <p>Data de Envio: {{ date('d/m/Y', strtotime($exerciseAnswer->created_at)) }}</p>
                    </div>
                    <div class="space-y-5">
                        <h2 class="text-center text-xl font-medium">{{ $exerciseAnswer->title }}</h2>

                        <div>
                            <h2 class="font-medium">Reflexão sobre a atividade prática realizada:</h2>
                            <p class="text-gray-600">{{ $exerciseAnswer->description }}</p>
                        </div>

                        <div>
                            <h2 class="font-medium">Participantes:</h2>
                            @foreach ($exerciseAnswer->ExerciseUsers as $item)
                                <p class="text-gray-600">{{$item->name}}</p>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
