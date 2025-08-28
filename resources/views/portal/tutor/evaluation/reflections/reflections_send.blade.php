<x-app-layout>
    <x-slot name="header">        
        <x-header.title title="Fichamento - {{ $reflection->title }}" />
        <p class="text-[10px] text-gray-400 uppercase font-semibold tracking-wider">Submeta aqui o seu fichamento do
            Curso de aperfeiçoamento em Apoio Matricial para Equipe Multiprofissional da Atenção Primária à Saúde de
            Caruaru-PE</p>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-6">

                <!-- Formulário para Envio do Texto -->
                <section class="mb-10">
                    <form action="{{ route('tutor_send_reflections.store', ['reflection'=>$reflection->id, 'user'=>$user->id]) }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">

                            <!-- Nome -->
                            <div class="lg:col-span-2">
                                <x-form.input-label>Nome</x-form.input-label>
                                <x-form.input value="{{ $user->name }}" disabled />
                            </div>

                            <!-- CPF -->
                            <div>
                                <x-form.input-label>CPF</x-form.input-label>
                                <x-form.input value="{{ $user->cpf }}" disabled />
                            </div>
                        </div>

                        <!-- Título do Texto -->
                        <div class="mb-4">
                            <x-form.input-label for="title">Título do Fichamento</x-form.input-label>
                            <x-form.input type="text" id="title" name="title" value="{{ old('title') }}" placeholder="Informe o título do texto" required autofocus />
                            <x-form.input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <!-- Assunto -->
                        <div class="mb-4">
                            <x-form.input-label for="subject">Assunto</x-form.input-label>
                            <x-form.input type="text" id="subject" name="subject" value="{{ old('subject') }}" placeholder="Informe o assunto do texto em uma frase" required />
                            <x-form.input-error :messages="$errors->get('subject')" class="mt-2" />
                        </div>

                        <!-- Citações -->
                        <div class="mb-4">
                            <x-form.input-label for="quote">Citações</x-form.input-label>
                            <x-form.textarea id="quote" name="quote" value="{{ old('quote') }}" placeholder="Informe as citações relevantes do texto." required></x-form.textarea>
                            <x-form.input-error :messages="$errors->get('quote')" class="mt-2" />
                        </div>

                        <!-- Comentário Geral sobre o Texto -->
                        <div class="mb-4">
                            <x-form.input-label for="description">Comentário Geral sobre o Texto</x-form.input-label>
                            <x-form.textarea id="description" name="description" value="{{ old('description') }}" placeholder="Compartilhe um comentário geral sobre o texto." required></x-form.textarea>
                            <x-form.input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <!-- Botão de Envio -->
                        <div class="mb-4">
                            <x-button.btn-primary type="submit" class="w-full">Enviar Fichamento pelo Tutor</x-button.btn-primary>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
