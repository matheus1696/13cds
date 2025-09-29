<x-app-layout>    
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <x-header.title title="{{ __('Propostas') }}" />
            <x-button.link-primary href="{{ route('proposeds.create') }}">
                {{ __('Cadastrar Proposta') }}
            </x-button.link-primary>
        </div>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto">

            <x-table.table>
                <x-slot name="thead">
                    <tr>
                        <x-table.th>Título</x-table.th>
                        <x-table.th>Origem</x-table.th>
                        <x-table.th>Votos</x-table.th>
                        <x-table.th>Resultado</x-table.th>
                        <x-table.th>Ações</x-table.th>
                    </tr>
                </x-slot>

                <x-slot name="tbody">
                    @forelse ($proposeds as $proposed)
                        <tr class="hover:bg-gray-100">
                            <!-- Título -->
                            <x-table.td class="py-3.5 text-sm text-gray-800">
                                {{ $proposed->title }}
                            </x-table.td>

                            <!-- Origem -->
                            <x-table.td class="py-3.5 text-sm text-gray-800">
                                {{ $proposed->origin }}
                            </x-table.td>

                            <!-- Votos -->
                            <x-table.td class="py-3.5 text-center text-sm text-gray-700">
                                {{ $proposed->votes_count }}
                            </x-table.td>

                            <!-- Resultado -->
                            <x-table.td class="py-3.5 text-center text-sm text-gray-700">
                                <p class="rounded-full py-1 text-xs {{ $proposed->type === 'Eleita' ? 'bg-green-700 text-green-100' : 'bg-red-700 text-red-100' }}">
                                    {{ $proposed->type }}
                                </p>
                            </x-table.td>

                            <!-- Ações -->
                            <x-table.td class="py-3.5 text-center">
                                <a href="{{ route('proposeds.edit', $proposed->id) }}" class="text-green-700 hover:text-green-600 px-2.5 py-1.5 rounded-full text-sm">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </x-table.td>
                        </tr>
                    @empty
                        <tr>
                            <x-table.td colspan="5" class="py-4 text-center text-gray-500">
                                Nenhuma proposta encontrada.
                            </x-table.td>
                        </tr>
                    @endforelse
                </x-slot>
            </x-table.table>
                
        </div>
    </div>

</x-app-layout>
