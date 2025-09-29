<x-app-layout>    
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <x-header.title title="{{ __('Delegados') }}" />
            <x-button.link-primary href="{{ route('delegates.create') }}">
                {{ __('Cadastrar Delegado') }}
            </x-button.link-primary>
        </div>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto">

            <x-table.table>
                <x-slot name="thead">
                    <tr>
                        <x-table.th>Nome</x-table.th>
                        <x-table.th>Segmento</x-table.th>
                        <x-table.th>Origem</x-table.th>
                        <x-table.th>Contato</x-table.th>
                        <x-table.th>Whatsapp?</x-table.th>
                        <x-table.th>Votos</x-table.th>
                        <x-table.th>Resultado</x-table.th>
                        <x-table.th>Participou</x-table.th>
                        <x-table.th>Ações</x-table.th>
                    </tr>
                </x-slot>

                <x-slot name="tbody">
                    @forelse ($delegates as $delegate)
                        <tr class="hover:bg-gray-100">
                            <!-- Nome -->
                            <x-table.td class="py-3.5 text-sm text-gray-800">
                                {{ $delegate->name }}
                            </x-table.td>

                            <!-- Whatsapp -->
                            <x-table.td class="py-3.5 text-center text-sm text-gray-700">
                                {{ $delegate->Segment->name ?? '' }}
                            </x-table.td>

                            <!-- Origin -->
                            <x-table.td class="py-3.5 text-sm text-gray-800">
                                {{ $delegate->origin }}
                            </x-table.td>

                            <!-- Contato -->
                            <x-table.td class="py-3.5 text-center text-sm text-gray-700">
                                {{ $delegate->contact }}
                            </x-table.td>

                            <!-- Whatsapp -->
                            <x-table.td class="py-3.5 text-center text-sm text-gray-700">
                                <p class=" rounded-full py-1 text-xs {{ $delegate->is_whatsapp ? 'bg-green-700 text-green-100' : 'bg-red-700 text-red-100' }}">{{ $delegate->is_whatsapp ? 'Sim' : 'Não' }}</p>
                            </x-table.td>

                            <!-- Votos -->
                            <x-table.td class="py-3.5 text-center text-sm text-gray-700">
                                {{ $delegate->votes_count }}
                            </x-table.td>

                            <!-- Resultado -->
                            <x-table.td class="py-3.5 text-center text-sm text-gray-700">
                                {{ $delegate->type }}
                            </x-table.td>

                            <!-- Participated -->
                            <x-table.td class="py-3.5 text-center text-sm text-gray-700">
                                <p class=" rounded-full py-1 text-xs {{ $delegate->participated ? 'bg-green-700 text-green-100' : 'bg-red-700 text-red-100' }}">{{ $delegate->participated ? 'Sim' : 'Não' }}</p>
                            </x-table.td>

                            <!-- Ações -->
                            <x-table.td class="py-3.5 text-center">
                                <a href="{{ route('delegates.edit', $delegate->id) }}" class="text-green-700 hover:text-green-60 px-2.5 py-1.5 rounded-full text-sm">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </x-table.td>
                        </tr>
                    @empty
                        <tr>
                            <x-table.td colspan="4" class="py-4 text-center text-gray-500">
                                Nenhum delegado encontrado.
                            </x-table.td>
                        </tr>
                    @endforelse
                </x-slot>
            </x-table.table>
                
        </div>
    </div>

</x-app-layout>
