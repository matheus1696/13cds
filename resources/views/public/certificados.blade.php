<x-guest-layout>
    
    @include('public._partials.navigation')

    <!-- Programação -->
    <section id="programacao" class="py-20 bg-white" aria-labelledby="programacao-title">
        <div class="mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-green-600 font-semibold uppercase tracking-wider text-sm mb-2 block">Certificados</span>
                <h1 id="programacao-title" class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Emissão de Certificados
                </h1>
                <div class="w-24 h-1 bg-green-600 mx-auto"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto mt-4">
                    Emissão do certificado de participação na 13ª Conferência Municipal de Saúde de Caruaru.
                </p>
            </div>

            <div class="max-w-2xl mx-auto mt-12">

                <div class="flex justify-center mx-auto">
                    <form action="{{ route('certificados') }}" method="GET" class="flex gap-2">                    
                        <!-- CPF -->
                        <div class="mb-4 w-80">
                            <x-form.input-label for="cpf" :value="__('CPF')"/>
                            <x-form.input type="text" id="cpf" name="cpf" value="{{ old('cpf', $cpf) }}" :placeholder="__('Your CPF')" required onkeyup="handleCPF(event)" maxlength="14" minlength="14"/>
                            <x-form.input-error :messages="$errors->get('cpf')" class="mt-2" />
                        </div>
                    
                        <!-- Botão de Envio -->
                        <div class="mt-6 w-40">
                            <x-button.btn-primary type="submit" class="w-full">
                                <i class="fa-solid fa-magnifying-glass"></i>
                                <span>Buscar</span>
                            </x-button.btn-primary>
                        </div>
                    </form>
                </div>

                <!-- Resultados -->
                <div class="mt-10 space-y-6">

                    <!-- CPF Não Localizado -->
                    @if ($empty)
                        <div class="bg-red-50 border-l-4 border-red-600 rounded-lg shadow-sm p-6">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-exclamation-circle text-red-600 text-xl mt-0.5"></i>
                                </div>
                                <div class="ml-3 flex-1">
                                    <h3 class="text-red-800 font-semibold text-lg mb-2">
                                        CPF não localizado
                                    </h3>
                                    <div class="text-red-700">
                                        <p class="mb-2">Não foi encontrado nenhum certificado para o CPF:</p>
                                        <div class="mt-3 text-sm">
                                            <p>Verifique se:</p>
                                            <ul class="list-disc list-inside ml-4 mt-1 space-y-1">
                                                <li>O CPF foi digitado corretamente</li>
                                                <li>Você participou como delegado, comissão ou ouvinte</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="mt-4 pt-3 border-t border-red-200">
                                        <p class="text-red-600 text-sm">
                                            <i class="fas fa-info-circle mr-1"></i>
                                            Em caso de dúvidas, entre em contato pelo email conselhosaudecaruaru@gmail.com.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Delegados -->
                    @if ($delegates->isNotEmpty())
                        <div class="bg-green-50 border-l-4 border-green-600 rounded-r-lg shadow-sm p-6">
                            <h2 class="text-green-700 font-bold text-lg mb-4">Delegado(a)</h2>
                            <ul class="list-disc list-inside space-y-2 text-gray-800">
                                @foreach ($delegates as $item)
                                    <li class="flex flex-col md:flex-row md:items-center md:justify-between gap-2">
                                        <span>{{ $item->name }} - {{ $item->cpf }} - {{ $item->Segment->name ?? '' }}</span>
                                        @if ($item->participated)
                                            <a href="{{ route('certificado.print.delegado', $item->id) }}" 
                                            target="_blank"
                                            class="inline-flex items-center px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-md text-sm font-medium transition-colors">
                                                <i class="fas fa-print mr-2"></i>
                                                Imprimir Certificado
                                            </a>
                                        @else
                                            <div class="relative group">
                                                <button 
                                                    disabled
                                                    class="inline-flex items-center px-4 py-2 bg-gray-300 text-gray-600 rounded-md text-sm font-medium cursor-not-allowed">
                                                    <i class="fas fa-times-circle mr-2"></i>
                                                    Certificado Indisponível
                                                </button>
                                                <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 px-3 py-2 bg-gray-800 text-white text-xs rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200 whitespace-nowrap z-10">
                                                    Delegado não participou da conferência
                                                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 border-4 border-transparent border-t-gray-800"></div>
                                                </div>
                                            </div>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Comissão Organizadora -->
                    @if ($commissions->isNotEmpty())
                        <div class="bg-green-50 border-l-4 border-green-600 rounded-r-lg shadow-sm p-6">
                            <h2 class="text-green-700 font-bold text-lg mb-4">Comissão Organizadora</h2>
                            <ul class="list-disc list-inside space-y-2 text-gray-800">
                                @foreach ($commissions as $item)
                                    <li class="flex flex-col md:flex-row md:items-center md:justify-between gap-2">
                                        <span>{{ $item->name }} - {{ $item->cpf }}</span>
                                        <a href="{{ route('certificado.print.comissao', $item->id) }}" 
                                        target="_blank"
                                        class="inline-flex items-center px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-md text-sm font-medium transition-colors">
                                            <i class="fas fa-print mr-2"></i>
                                            Imprimir Certificado
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Ouvintes -->
                    @if ($listerner->isNotEmpty())
                        <div class="bg-green-50 border-l-4 border-green-600 rounded-r-lg shadow-sm p-6">
                            <h2 class="text-green-700 font-bold text-lg mb-4">Ouvinte</h2>
                            <ul class="list-disc list-inside space-y-2 text-gray-800">
                                @foreach ($listerner as $item)
                                    <li class="flex flex-col md:flex-row md:items-center md:justify-between gap-2">
                                        <span>{{ $item->name }} - {{ $item->cpf }}</span>
                                        <a href="{{ route('certificado.print.ouvinte', $item->id) }}" 
                                        target="_blank"
                                        class="inline-flex items-center px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-md text-sm font-medium transition-colors">
                                            <i class="fas fa-print mr-2"></i>
                                            Imprimir Certificado
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                </div>

            </div>
        </div>
    </section>

    @include('public._partials.footer')
</x-guest-layout>