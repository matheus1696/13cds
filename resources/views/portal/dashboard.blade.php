<x-app-layout>

    <section class="grid lg:grid-cols-12 gap-6 mt-10 px-8">
        <!-- Conteúdo Principal -->
        <section class="col-span-12 lg:col-span-9 space-y-6">

            <!-- Boas-vindas -->
            @can('user_students')
                <div class="bg-white shadow-xl rounded-2xl p-6">
                    <h2 class="text-xl font-semibold mb-2">Olá, {{ Auth::user()->name }} 👋</h2>
                    <p class="text-sm font-medium leading-5 text-gray-500">Que bom ter você por aqui no QMulti! Veja abaixo algumas informações importantes e ações rápidas para facilitar sua jornada.</p>                

                    <!-- Ações Rápidas -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-8">
                        <a href="{{ route('schedule') }}" class="block bg-blue-100 hover:bg-blue-200 text-blue-800 font-semibold p-4 rounded-xl shadow-md text-sm">
                            ⏱️ Cronograma
                        </a>
                        <a href="{{ route('book-recommendations') }}" class="block bg-blue-100 hover:bg-blue-200 text-blue-800 font-semibold p-4 rounded-xl shadow-md text-sm">
                            📘 Indicação de Leituras
                        </a>
                        <a href="{{ route('reflections.index') }}" class="block bg-blue-100 hover:bg-blue-200 text-blue-800 font-semibold p-4 rounded-xl shadow-md text-sm">
                            📘 Fichamentos
                        </a>
                        <a href="{{ route('exercises.index') }}" class="block bg-blue-100 hover:bg-blue-200 text-blue-800 font-semibold p-4 rounded-xl shadow-md text-sm">
                            📘 Atividade Prática
                        </a>
                    </div>
                </div>                
            @endcan

            <!-- Outras seções futuras -->
        </section>

        <!-- Quadro de Avisos -->
        <section class="col-span-12 lg:col-span-3 space-y-4">
            
            <!-- Avaliação dos Participantes -->
            @can('user_students')
                <div class="bg-white shadow-xl rounded-2xl p-6">
                    <h2 class="text-lg font-semibold mb-4 text-gray-800 flex items-center gap-2">
                        🧠 Compartilhe sua Experiência
                    </h2>
                    
                    @if($unansweredEvaluations->isEmpty())
                        <p class="text-gray-500 text-sm">Nenhuma avaliação pendente no momento.</p>
                    @else
                        <ul class="space-y-4">
                            @foreach($unansweredEvaluations as $question)
                                <li class="border border-l-8 border-blue-500 px-4 py-2 bg-gray-50 rounded-md shadow-sm">
                                    <p class="text-sm font-medium leading-5 text-gray-500">{{ $question->title }} <a href="{{ route('evaluation_answers.create', $question->id) }}" class="text-blue-500 underline">Clique aqui para responder</a></p>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>                
            @endcan
        </section>

    </section>
</x-app-layout>

