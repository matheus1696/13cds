<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <x-header.title title="{{ __('Lista de Profissões') }}" />
            <x-button.link-primary href="{{ route('admin_professions.create') }}">Cadastrar Profissão</x-button.link-primary>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-table.table>
                <x-slot name="thead">
                    <tr>
                        <x-table.th>Código</x-table.th>
                        <x-table.th>Titulo</x-table.th>
                        <x-table.th>Categoria</x-table.th>
                        <x-table.th>Subcategoria</x-table.th>
                        <x-table.th></x-table.th>
                    </tr>
                </x-slot>

                <x-slot name="tbody">
                    @foreach ($professions as $profession)
                        <tr class="hover:bg-gray-100">
                            <x-table.td>{{ $profession->code }}</x-table.td>
                            <x-table.td>{{ $profession->title }}</x-table.td>
                            <x-table.td>{{ $profession->category }}</x-table.td>
                            <x-table.td>{{ $profession->subcategory }}</x-table.td>
                            <x-table.td>
                                <div class="flex justify-center items-center gap-2">
                                    <x-button.table.btn-edit href="{{ route('admin_professions.edit', $profession->id) }}" />
                                    <x-button.table.btn-trash href="{{ route('admin_professions.destroy', $profession->id) }}" />
                                </div>
                            </x-table.td>
                        </tr>
                    @endforeach
                </x-slot>
            </x-table.table>
        </div>
    </div>

</x-app-layout>
