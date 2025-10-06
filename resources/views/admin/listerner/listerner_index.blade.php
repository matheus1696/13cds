<x-app-layout>    
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <x-header.title title="{{ __('Ouvintes') }}" />
            <x-button.link-primary href="{{ route('listerners.create') }}">
                {{ __('Cadastrar Ouvinte') }}
            </x-button.link-primary>
        </div>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto">

            <x-table.table>
                <x-slot name="thead">
                    <tr>
                        <x-table.th>CPF</x-table.th>
                        <x-table.th>Nome</x-table.th>
                        <x-table.th>Contato</x-table.th>
                        <x-table.th>Whatsapp?</x-table.th>
                        <x-table.th>Ações</x-table.th>
                    </tr>
                </x-slot>

                <x-slot name="tbody">
                    @forelse ($listerners as $listerner)
                        <tr class="hover:bg-gray-100">
                            <!-- CPF -->
                            <x-table.td class="py-3.5 text-sm text-gray-800">
                                {{ $listerner->cpf }}
                            </x-table.td>

                            <!-- Nome -->
                            <x-table.td class="py-3.5 text-sm text-gray-800">
                                {{ $listerner->name }}
                            </x-table.td>

                            <!-- Contato -->
                            <x-table.td class="py-3.5 text-center text-sm text-gray-700">
                                {{ $listerner->contact }}
                            </x-table.td>

                            <!-- Whatsapp -->
                            <x-table.td class="py-3.5 text-center text-sm text-gray-700">
                                <p class=" rounded-full py-1 text-xs {{ $listerner->is_whatsapp ? 'bg-green-700 text-green-100' : 'bg-red-700 text-red-100' }}">{{ $listerner->is_whatsapp ? 'Sim' : 'Não' }}</p>
                            </x-table.td>

                            <!-- Ações -->
                            <x-table.td class="py-3.5 text-center">
                                <a href="{{ route('listerners.edit', $listerner->id) }}" class="text-green-700 hover:text-green-60 px-2.5 py-1.5 rounded-full text-sm">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </x-table.td>
                        </tr>
                    @empty
                        <tr>
                            <x-table.td colspan="4" class="py-4 text-center text-gray-500">
                                Nenhum ouvinte encontrado.
                            </x-table.td>
                        </tr>
                    @endforelse
                </x-slot>
            </x-table.table>
                
        </div>
    </div>

</x-app-layout>
