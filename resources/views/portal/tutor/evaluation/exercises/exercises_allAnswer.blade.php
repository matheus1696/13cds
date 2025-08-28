<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <x-header.title title="{{ __('Avaliação') }} {{ __('Trabalho em Grupo') }} - {{ __('Tema') }}: {{ $exerciseAnswers->first()->Exercise->title ?? '' }}" />
            <x-button.link-primary class="text-center" href="{{ route('tutor_send_exercises.create', $exerciseAnswers->first()->Exercise->id) }}">Encaminhar Trabalho do Grupo</x-button.link-primary>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach ($exerciseAnswers as $exerciseAnswer)
                <div class="flex items-center bg-white overflow-hidden shadow-sm sm:rounded-lg p-5 mb-5">
                    <div class="flex-1 text-gray-900">
                        <p><span class="font-semibold">Título:</span> {{ $exerciseAnswer->title }}</p>
                        <p class="text-sm"><span class="font-semibold ">Responsável: </span>{{ $exerciseAnswer->User->name }}</p>
                        <p class="text-sm"><span class="font-semibold">Data do Envio: </span> {{ date('d/m/Y H:i', strtotime($exerciseAnswer->created_at)) }}</p>
                        <p class="text-sm"><span class="font-semibold">Desempenho: </span> {{ $exerciseAnswer->evaluation }}</p>
                        @if (isset($exerciseAnswer->EvaluationUser->name))
                            <p class="text-sm"><span class="font-semibold">Avaliador: </span> {{ $exerciseAnswer->EvaluationUser->name }}</p>
                        @endif
                    </div>
                    <div>
                        @if ($exerciseAnswer->evaluation === "Aguardando Avaliação")
                            <x-button.link-primary href="{{ route('tutor_evaluation_exercises.answer', $exerciseAnswer->id)}}">Avaliar Trabalho</x-button.link-primary>
                        @else
                            
                        <x-modal.modal title="Avaliação">
                            <x-slot name="button">
                                <x-button.btn-secondary>Avaliado</x-button.btn-secondary>
                            </x-slot>

                            <div class="space-y-2">
                                <p><span class="font-semibold">Título:</span> {{ $exerciseAnswer->title }}</p>
                                <p class="text-sm"><span class="font-semibold">Nome: </span>{{ $exerciseAnswer->User->name }}</p>
                                <p class="text-sm"><span class="font-semibold">Data do Envio: </span> {{ date('d/m/Y H:i', strtotime($exerciseAnswer->created_at)) }}</p>
                                <hr>
                                <p class="text-sm"><span class="font-semibold">Desempenho: </span>{{ $exerciseAnswer->evaluation }}</p>
                                <p class="text-sm"><span class="font-semibold">Observações: </span>{{ $exerciseAnswer->evaluation_feedback }}</p>
                                @if (isset($exerciseAnswer->EvaluationUser->name))
                                    <p class="text-sm"><span class="font-semibold">Avaliador: </span> {{ $exerciseAnswer->EvaluationUser->name }}</p>
                                @endif
                            </div>                            
                        </x-modal.modal>
                        @endif
                    </div>
                </div>
            @endforeach           
        </div>
    </div>
</x-app-layout>
