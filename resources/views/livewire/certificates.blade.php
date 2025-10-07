<div class="max-w-3xl mx-auto py-12 px-4">

    <!-- Campo de Busca -->
    <div class="mb-6 flex gap-3 items-center">
        <x-form.input type="text" wire:model.live="cpf" placeholder="Digite seu CPF (000.000.000-00)" onkeyup="handleCPF(event)" maxlength="14" minlength="14" class="flex-1" />
        <button type="button" wire:click.prevent="search('{{ $cpf }}')" class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg font-medium transition-colors">Buscar</button>
    </div>

    <!-- Mensagem -->
    @if ($message)
        <div class="mb-6 text-center text-gray-700 font-semibold">
            {{ $message }}
        </div>
    @endif

    <!-- Resultados -->
    <div class="space-y-6" wire:loading.remove>

        <!-- Delegados -->
        @if (!empty($delegates) && $delegates->isNotEmpty())
            <div class="bg-green-50 border-l-4 border-green-600 rounded-r-lg shadow-sm p-6">
                <h2 class="text-green-700 font-bold text-lg mb-4">Delegado(a)</h2>
                <ul class="list-disc list-inside space-y-1 text-gray-800">
                    @foreach ($delegates as $item)
                        <li>{{ $item->name }} - {{ $item->cpf }} - {{ $item->Segment->name ?? '' }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Comissão Organizadora -->
        @if (!empty($commissions) && $commissions->isNotEmpty())
            <div class="bg-green-50 border-l-4 border-green-600 rounded-r-lg shadow-sm p-6">
                <h2 class="text-green-700 font-bold text-lg mb-4">Comissão Organizadora</h2>
                <ul class="list-disc list-inside space-y-1 text-gray-800">
                    @foreach ($commissions as $item)
                        <li>{{ $item->name }} - {{ $item->cpf }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Ouvintes -->
        @if (!empty($listerner) && $listerner->isNotEmpty())
            <div class="bg-green-50 border-l-4 border-green-600 rounded-r-lg shadow-sm p-6">
                <h2 class="text-green-700 font-bold text-lg mb-4">Ouvinte</h2>
                <ul class="list-disc list-inside space-y-1 text-gray-800">
                    @foreach ($listerner as $item)
                        <li>{{ $item->name }} - {{ $item->cpf }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>

    <!-- Loading State -->
    <div wire:loading class="text-center py-8">
        <div class="inline-flex items-center">
            <i class="fas fa-spinner fa-spin text-green-600 text-xl mr-3"></i>
            <span class="text-gray-600 font-medium">Buscando certificados...</span>
        </div>
    </div>

    <!-- Estado Vazio -->
    @if ($cpf && empty($delegates) && empty($commissions) && empty($listerner) && !$message)
        <div class="text-center py-8 bg-yellow-50 rounded-lg border border-yellow-200">
            <i class="fas fa-exclamation-triangle text-yellow-500 text-2xl mb-3"></i>
            <p class="text-yellow-800 font-medium">Nenhum certificado encontrado</p>
            <p class="text-yellow-600 text-sm mt-1">Verifique se o CPF está correto</p>
        </div>
    @endif

</div>