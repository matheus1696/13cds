<x-app-layout>
    <x-slot name="header">
        <x-header.title title="Fichamento - {{ $reflectionAnswer->Reflection->title }}" />
        <p class="text-[10px] text-gray-400 uppercase font-semibold tracking-wider">Submeta aqui o relatório da atividade prática do grupo</p>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-6 mb-6">
                <section class="py-8 mb-6">
                    <div class="flex justify-between text-xs text-gray-400 mb-6">
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

            <div class="bg-red-50 border border-red-300 overflow-hidden shadow-sm sm:rounded-lg px-6">
                <section class="py-6 mb-6">
                    <div class="space-y-5">
                        <h2 class="text-center text-xl font-medium">Avaliação</h2>

                        <div class="flex gap-1">
                            <h2 class="font-medium">Desempenho:</h2>
                            <p class="text-gray-600 text-justify">{{ $reflectionAnswer->evaluation }}</p>
                        </div>

                        <div>
                            <h2 class="font-medium">Comentário Sobre a Avaliação:</h2>
                            <p class="text-gray-600 text-justify">{{ $reflectionAnswer->evaluation_feedback }}</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
