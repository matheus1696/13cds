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

            <div class="max-w-xl mx-auto mt-12">

                <div class="mx-auto">
                    <form action="{{ route('certificados') }}" method="GET" class="flex gap-2">                    
                        <!-- CPF -->
                        <div class="mb-4 w-full">
                            <x-form.input-label for="cpf" :value="__('CPF')"/>
                            <x-form.input type="text" id="cpf" name="cpf" value="{{ old('cpf', $cpf) }}" :placeholder="__('Your CPF')" required onkeyup="handleCPF(event)" maxlength="14" minlength="14"/>
                            <x-form.input-error :messages="$errors->get('cpf')" class="mt-2" />
                        </div>
                    
                        <!-- Botão de Envio -->
                        <div class="mt-7">
                            <x-button.btn-primary type="submit" class="w-full">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </x-button.btn-primary>
                        </div>
                    </form>
                </div>

                <!-- Resultados -->
                <div class="mt-10 space-y-6">

                    <!-- Delegados -->
                    @if ($delegates->isNotEmpty())
                        <div class="bg-green-50 border-l-4 border-green-600 rounded-r-lg shadow-sm p-6">
                            <h2 class="text-green-700 font-bold text-lg mb-4">Delegado(a)</h2>
                            <ul class="list-disc list-inside space-y-2 text-gray-800">
                                @foreach ($delegates as $item)
                                    <li class="flex flex-col md:flex-row md:items-center md:justify-between gap-2">
                                        <span>{{ $item->name }} - {{ $item->cpf }} - {{ $item->Segment->name ?? '' }}</span>
                                        <a href="{{ route('certificado.print.delegado', $item->id) }}" 
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