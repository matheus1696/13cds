<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <x-header.title title="{{ __('Gestão de Fichamentos') }}" />
            <x-button.link-primary href="{{ route('admin_reflections.create') }}">Nova Atividade</x-button.link-primary>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-table.table>
                <x-slot name="thead">
                    <tr>
                        <x-table.th class="py-3">Título</x-table.th>
                        <x-table.th class="py-3">C.H.</x-table.th>
                        <x-table.th class="py-3">Data Inicial</x-table.th>
                        <x-table.th class="py-3">Data Fim</x-table.th>
                        <x-table.th></x-table.th>
                    </tr>
                </x-slot>

                <x-slot name="tbody">
                    @foreach ($reflections as $reflection)
                        <tr class="hover:bg-gray-100">
                            <x-table.td class="py-4 px-6 text-center text-sm text-gray-800">{{ $reflection->title }}</x-table.td>
                            <x-table.td class="py-4 px-6 text-center text-sm text-gray-700">{{ $reflection->workload }} Hrs</x-table.td>
                            <x-table.td class="py-4 px-6 text-center text-sm text-gray-700">{{ date('d/m/Y', strtotime($reflection->start_date)) }}</x-table.td>
                            <x-table.td class="py-4 px-6 text-center text-sm text-gray-700">{{ date('d/m/Y', strtotime($reflection->end_date)) }}</x-table.td>
                            <x-table.td>
                                <div class="flex justify-center items-center gap-2">
                                    <x-button.table.btn-edit href="{{ route('admin_reflections.edit', $reflection->id) }}">Editar</x-button.table.btn-edit>
                                    <x-button.table.btn-trash href="{{ route('admin_reflections.destroy', $reflection->id) }}">Editar</x-button.table.btn-trash>
                                </div>
                            </x-table.td>
                        </tr>
                    @endforeach
                </x-slot>
            </x-table.table>
            
        </div>
    </div>

</x-app-layout>
