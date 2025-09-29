<x-app-layout>
    <x-slot name="header">
        <x-header.title title="{{ __('Cadastrar Proposta') }}" />
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-6 py-6">
                <form method="POST" action="{{ route('proposeds.store') }}" class="space-y-6">
                    @csrf
                    @include('admin.proposed._partials.proposed_form')

                    <div>
                        <x-button.btn-primary type="submit" class="w-full">
                            Salvar Proposta
                        </x-button.btn-primary>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
