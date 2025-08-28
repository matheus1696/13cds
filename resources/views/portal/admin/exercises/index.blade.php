<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <x-header.title title="{{ __('Gestão de Atividades Práticas') }}" />
            <x-button.link-primary href="{{ route('admin_exercises.create') }}">Nova Atividade</x-button.link-primary>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-table.table>
                <x-slot name="thead">
                    <tr>
                        <x-table.th>Título</x-table.th>
                        <x-table.th>C.H.</x-table.th>
                        <x-table.th>Data Inicial</x-table.th>
                        <x-table.th>Data Fim</x-table.th>
                        <x-table.th></x-table.th>
                    </tr>
                </x-slot>

                <x-slot name="tbody">
                    @foreach ($exercises as $exercise)
                        <tr class="hover:bg-gray-100">
                            <x-table.td>{{ $exercise->title }}</x-table.td>
                            <x-table.td>{{ $exercise->workload }} Hrs</x-table.td>
                            <x-table.td>{{ date('d/m/Y', strtotime($exercise->start_date)) }}</x-table.td>
                            <x-table.td>{{ date('d/m/Y', strtotime($exercise->end_date)) }}</x-table.td>
                            <x-table.td>
                                <div class="flex justify-center items-center gap-2">
                                    <x-button.table.btn-edit href="{{ route('admin_exercises.edit', $exercise->id) }}">Editar</x-button.table.btn-edit>
                                    <x-button.table.btn-trash href="{{ route('admin_exercises.destroy', $exercise->id) }}">Editar</x-button.table.btn-trash>
                                </div>
                            </x-table.td>
                        </tr>
                    @endforeach
                </x-slot>
            </x-table.table>
        </div>
    </div>

</x-app-layout>
