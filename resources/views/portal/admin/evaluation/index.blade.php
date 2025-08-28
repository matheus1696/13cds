<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <x-header.title title="{{ __('Gestão das Avaliações do Curso') }}" />
            <x-button.link-primary href="{{ route('evaluations.create') }}">Nova Atividade</x-button.link-primary>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-table.table>
                <x-slot name="thead">
                    <tr>
                        <x-table.th>Título</x-table.th>
                        <x-table.th>Atividade Presencial</x-table.th>
                        <x-table.th>Fichamento</x-table.th>
                        <x-table.th>Atividade Prática</x-table.th>
                        <x-table.th>Data de Inicio</x-table.th>
                        <x-table.th>Data Fim</x-table.th>
                        <x-table.th></x-table.th>
                    </tr>
                </x-slot>

                <x-slot name="tbody">
                    @foreach ($evaluations as $evaluation)
                        <tr class="hover:bg-gray-100">
                            <x-table.td><p class="line-clamp-1">{{ $evaluation->title }}</p></x-table.td>
                            <x-table.td>{{ $evaluation->presential_activity_id }}</x-table.td>
                            <x-table.td>{{ $evaluation->reflection_id }}</x-table.td>
                            <x-table.td>{{ $evaluation->exercise_id }}</x-table.td>
                            <x-table.td>{{ date('d/m/Y', strtotime($evaluation->start_date)) }}</x-table.td>
                            <x-table.td>{{ date('d/m/Y', strtotime($evaluation->end_date)) }}</x-table.td>
                            <x-table.td>
                                <div class="flex justify-center items-center gap-2">
                                    <x-button.table.btn-edit href="{{ route('evaluations.edit', $evaluation->id) }}" />
                                    <x-button.table.btn-trash href="{{ route('evaluations.destroy', $evaluation->id) }}" />
                                </div>
                            </x-table.td>
                        </tr>
                    @endforeach
                </x-slot>
            </x-table.table>
        </div>
    </div>

</x-app-layout>
