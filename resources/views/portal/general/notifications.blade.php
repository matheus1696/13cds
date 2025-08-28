<x-app-layout>
    <x-slot name="header">
        <x-header.title title="{{ __('Quadro de Avisos') }}" />
    </x-slot>

    <div class="py-40">
        <!-- Seção em Construção -->
        <section class="flex items-center justify-center">
            <div class="text-center bg-white p-8 rounded-lg shadow-xl border border-gray-300 max-w-lg">
                <h2 class="text-3xl font-bold text-amber-500 mb-4">Página em Construção</h2>
                <p class="text-lg text-gray-700 mb-4">Esta seção está em desenvolvimento. Em breve, mais informações
                    estarão disponíveis.</p>
                <div class="mt-6">
                    <div class="flex justify-center animate-pulse text-9xl text-gray-500">
                        <span class="block">🚧</span>
                        <span class="block">👷‍♂️</span>
                    </div>
                </div>
            </div>
        </section>

    </div>
</x-app-layout>
