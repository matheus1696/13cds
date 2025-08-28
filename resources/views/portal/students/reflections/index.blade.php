<x-app-layout>
    <x-slot name="header">
        <x-header.title title="{{ __('Fichamentos') }}" />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach ($reflections as $reflection)
                <div class="flex bg-white overflow-hidden shadow-sm sm:rounded-lg p-5 mb-5">
                    <div class="flex-1 text-gray-900">
                        <h2>{{ $reflection->title }}</h2>
                        <p class="text-[10px] text-gray-400 uppercase font-semibold tracking-wider">
                            Prazo: {{ date('d/m/Y', strtotime($reflection->start_date)) }} até {{ date('d/m/Y', strtotime($reflection->end_date)) }}
                        </p>
                    </div>

                    <!-- Botão de Envio -->
                    <div class="flex items-center">

                        @if ($reflectionAnswers->firstWhere('reflection_id', $reflection->id)?->status === 'Concluído')
                            <x-button.link-alternative href="{{ route('reflections.show', $reflection->id) }}">Enviado</x-button.link-alternative>

                        @elseif (now()->lt($reflection->start_date))
                            <x-button.link-secondary>Aguardando</x-button.link-secondary>

                        @elseif (now()->between($reflection->start_date, Carbon\Carbon::parse($reflection->end_date)->addDay()))
                            <x-button.link-primary href="{{ route('reflections.create', $reflection->id) }}">Liberado</x-button.link-primary>

                        {{-- 4. Passou do prazo --}}
                        @elseif (now()->gt(Carbon\Carbon::parse($reflection->end_date)->addDay()))
                            <x-button.link-tertiary>Fora do Prazo</x-button.link-tertiary>
                        @endif

                    </div>

                </div>
            @endforeach           
        </div>
    </div>
</x-app-layout>
