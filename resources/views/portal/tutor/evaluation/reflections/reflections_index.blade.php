<x-app-layout>
    <x-slot name="header">
        <x-header.title title="{{ __('Fichamentos') }}" />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach ($reflections as $reflection)
                <div class="flex bg-white overflow-hidden shadow-sm sm:rounded-lg p-5 mb-5">
                    <div class="flex-1 text-gray-900">
                        <h2>{{ $reflection->title }}<h2>                            
                        <p class="text-[10px] text-gray-400 uppercase font-semibold tracking-wider">
                            {{ $reflection->awaiting_evaluation_count }} Trabalhos Avaliados de {{ $reflection->reflection_answer_count }} Recebidos
                        </p>
                        <p class="text-[10px] text-gray-400 uppercase font-semibold tracking-wider">
                            Prazo: {{ date('d/m/Y', strtotime($reflection->start_date)) }} até {{ date('d/m/Y', strtotime($reflection->end_date)) }}
                        </p>
                    </div>

                     <!-- Botão de Envio -->
                     <div class="flex items-center">
                        @if (now() >= $reflection->start_date )
                            @if (time() >= strtotime($reflection->end_date . ' +1 day'))
                                <x-button.link-primary href="{{ route('tutor_evaluation_reflections.allAnswer', $reflection->id) }}">Avaliar Trabalhos</x-button.link-primary>
                            @endif
                        @else
                            <x-button.btn-secondary class="opacity-75">Aguardando Conclusão</x-button.btn-secondary>
                        @endif
                    </div>
                </div>
            @endforeach           
        </div>
    </div>
</x-app-layout>
