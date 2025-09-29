<x-app-layout>
    <x-slot name="header">
        <x-header.title title="{{ __('Editar Proposta') }}" />
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-6 py-6">
                <form method="POST" action="{{ route('proposeds.update', $proposed->id) }}" class="space-y-6">
                    @csrf
                    @method('PUT')
                    @include('admin.proposed._partials.proposed_form')

                    <div>
                        <x-button.btn-primary type="submit" class="w-full">
                            Atualizar Proposta
                        </x-button.btn-primary>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
