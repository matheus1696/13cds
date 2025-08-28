<x-app-layout>
    <x-slot name="header">
        <x-header.title title="{{ __('Avaliação') }} {{ __('Fichamentos') }} - {{ __('Tema') }}: {{ $reflectionAnswer->Reflection->title ?? '' }}" />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-6 mb-6">

                <section class="py-6">
                    <div class="flex justify-between text-xs text-gray-400 pb-4">
                        <div class="flex-1 flex items-center gap-1">
                            <p>{{ $reflectionAnswer->User->name }}</p> - 
                            <p>{{ $reflectionAnswer->User->formatted_cpf }}</p>
                        </div>
                        <div>
                            <p>Data de Envio: {{ date('d/m/Y', strtotime($reflectionAnswer->created_at)) }}</p>
                        </div>
                    </div>
                    <div class="space-y-5">
                        <h2 class="text-center text-xl font-medium">{{ $reflectionAnswer->title }}</h2>

                        <div>
                            <h2 class="font-medium">Assunto:</h2>
                            <p class="text-gray-600 text-justify">{{ $reflectionAnswer->subject }}</p>
                        </div>

                        <div>
                            <h2 class="font-medium">Comentário Geral Sobre o Texto:</h2>
                            <p class="text-gray-600 text-justify">{{ $reflectionAnswer->description }}</p>
                        </div>

                        <div>
                            <h2 class="font-medium">Citações:</h2>
                            <p class="text-gray-600 text-justify">{{ $reflectionAnswer->quote }}</p>
                        </div>
                    </div>
                </section>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <form action="{{ route('tutor_evaluation_reflections.update', $reflectionAnswer->id) }}" method="POST" class="space-y-6">
                    @csrf @method('PUT')

                    <!-- Domínio do Conteúdo -->
                    <div class="border-b border-gray-200 pb-8">
                        <p class="font-semibold">Domínio do Conteúdo</p>
                        <p class="text-sm text-gray-600 mb-2">Avalia o nível de conhecimento demonstrado pelo aluno sobre o tema proposto.</p>
                        @include('portal.tutor.evaluation._partials.evaluation_options', ['name' => 'dominio_conteudo'])
                    </div>

                    <!-- Organização e Estrutura -->
                    <div class=" border-b border-gray-200 pb-8">
                        <p class="font-semibold">Organização e Estrutura</p>
                        <p class="text-sm text-gray-600 mb-2">Verifica a coerência e clareza na estrutura do texto: introdução, desenvolvimento e conclusão.</p>
                        @include('portal.tutor.evaluation._partials.evaluation_options', ['name' => 'organizacao_estrutura'])
                    </div>

                    <!-- Pensamento Crítico e Reflexão -->
                    <div class=" border-b border-gray-200 pb-8">
                        <p class="font-semibold">Pensamento Crítico e Reflexão</p>
                        <p class="text-sm text-gray-600 mb-2">Observa a capacidade de análise crítica, originalidade e aprofundamento nas ideias apresentadas.</p>
                        @include('portal.tutor.evaluation._partials.evaluation_options', ['name' => 'pensamento_critico'])
                    </div>

                    <!-- Uso de Referências -->
                    <div class=" border-b border-gray-200 pb-8">
                        <p class="font-semibold">Uso de Referências</p>
                        <p class="text-sm text-gray-600 mb-2">Avalia o uso adequado de fontes confiáveis e a aplicação correta das citações.</p>
                        @include('portal.tutor.evaluation._partials.evaluation_options', ['name' => 'uso_referencias'])
                    </div>

                    <!-- Compartilhe um comentário Sobre a Avaliação. -->
                    <div class="mb-8">
                        <x-form.input-label for="evaluation_feedback">Compartilhe um comentário Sobre a Avaliação.</x-form.input-label>
                        <x-form.textarea id="evaluation_feedback" name="evaluation_feedback" placeholder="Compartilhe um comentário Sobre a Avaliação." required>{{ old('evaluation_feedback') ?? ''}}</x-form.textarea>
                        <x-form.input-error :messages="$errors->get('evaluation_feedback')" class="mt-2" />
                    </div>
                    
                    <!-- Botão de Envio -->
                    <div class="mb-4">
                        <x-button.btn-primary type="submit" class="w-full">Enviar Fichamento</x-button.btn-primary>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
