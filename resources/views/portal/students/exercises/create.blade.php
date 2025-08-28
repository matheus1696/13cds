<x-app-layout>
    <x-slot name="header">
        <x-header.title title="Modelo de Relatório de Atividade Prática - {{ $exercise->title }}" />
        <p class="text-[10px] text-gray-400 uppercase font-semibold tracking-wider">Submeta aqui o relatório da atividade prática do grupo</p>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-6">

                <!-- Formulário para Envio do Texto -->
                <section class="mb-10">
                    <form action="{{ route('exercises.store', $exercise->id) }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">
                            <!-- Nome do Usuário Logado -->
                            <div class="lg:col-span-2">
                                <x-form.input-label>Responsável</x-form.input-label>
                                <x-form.input value="{{ auth()->user()->name }}" disabled />
                            </div>

                            <!-- CPF -->
                            <div>
                                <x-form.input-label>CPF</x-form.input-label>
                                <x-form.input value="{{ auth()->user()->cpf }}" disabled />
                            </div>
                        </div>

                        <!-- Participantes -->
                        <div class="mb-4">
                            <x-form.input-label>Selecione os Demais Participantes</x-form.input-label>
                            <x-form.select-multiple name="participants">
                                @foreach ($users as $user)
                                    @if ($user->id != auth()->user()->id)
                                        <option value="{{ $user->id }}" 
                                            @if(in_array($user->id, old('participants', []))) selected @endif>
                                            {{ $user->name }}
                                        </option>
                                    @endif
                                @endforeach
                            </x-form.select-multiple>
                            <x-form.input-error :messages="$errors->get('participants')" class="mt-2" />
                        </div>

                        <!-- Título da Atividade -->
                        <div class="mb-4">
                            <x-form.input-label for="title">Título da Atividade</x-form.input-label>
                            <x-form.input type="text" id="title" name="title"
                                placeholder="Informe o título da atividade" required autofocus
                                value="{{ old('title') }}" />
                            <x-form.input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <!-- Reflexão sobre a atividade prática realizada -->
                        <div class="mb-4">
                            <x-form.input-label for="description">Reflexão sobre a atividade prática realizada</x-form.input-label>
                            <x-form.textarea id="description" name="description" placeholder="Compartilhe a reflexão do grupo sobre a atividade prática realizada." required>{{ old('description') }}</x-form.textarea>
                            <x-form.input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <!-- Botão de Envio -->
                        <div class="mb-4">
                            <x-button.btn-primary type="submit" class="w-full">Enviar Relátorio</x-button.btn-primary>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
