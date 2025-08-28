<x-app-layout>
    <x-slot name="header">
        <x-header.title title="{{ __('Avaliação') }} {{ __('Fichamentos') }} - {{ __('Tema') }}: {{ $reflection->title ?? '' }}" />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach ($users as $user)
                <div class="flex items-center bg-white overflow-hidden shadow-sm sm:rounded-lg p-5 mb-5">
                    <div class="flex-1 text-gray-900">
                        <p><span class="font-semibold">Título:</span> {{ $user->title }}</p>
                        <p class="text-sm"><span class="font-semibold ">Nome: </span>{{ $user->name }}</p>
                        <p class="text-sm"><span class="font-semibold">Desempenho: </span> {{ $user->evaluation }}</p>
                        @if (isset($user->EvaluationUser->name))
                            <p class="text-sm"><span class="font-semibold">Avaliador: </span> {{ $user->evaluetion_name }}</p>
                        @endif
                    </div>
                    <div>
                        @if ($user->evaluation === "Aguardando Avaliação")
                            <x-button.link-primary href="{{ route('tutor_evaluation_reflections.answer', $user->answer_id)}}">Avaliar Trabalho</x-button.link-primary>

                        @elseif ($user->evaluation === NULL)
                            <x-button.link-tertiary href="{{ route('tutor_send_reflections.create', ['reflection'=>$reflection->id, 'user'=>$user->id])}}">Encaminhar Fichamento</x-button.link-tertiary>
                            
                        @else 
                        <x-modal.modal title="Avaliação">
                            <x-slot name="button">
                                <x-button.btn-secondary>Avaliado</x-button.btn-secondary>
                            </x-slot>

                            <div class="space-y-2">
                                <p><span class="font-semibold">Título:</span> {{ $user->title }}</p>
                                <p class="text-sm"><span class="font-semibold">Nome: </span>{{ $user->name }}</p>
                                <hr>
                                <p class="text-sm"><span class="font-semibold">Desempenho: </span>{{ $user->evaluation }}</p>
                                <p class="text-sm"><span class="font-semibold">Observações: </span>{{ $user->evaluation_feedback }}</p>
                                @if (isset($user->EvaluationUser->name))
                                    <p class="text-sm"><span class="font-semibold">Avaliador: </span> {{ $user->EvaluationUser->name }}</p>
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
