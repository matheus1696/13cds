<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <x-header.title title="{{ __('Gestão de Encontros Presenciais') }}" />
            <x-button.link-primary href="{{ route('admin_presential_activities.create') }}">Novo Encontro</x-button.link-primary>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <x-table.table>
                <x-slot name="thead">
                    <tr>
                        <x-table.th class="py-3">Título</x-table.th>
                        <x-table.th class="py-3">Descrição</x-table.th>
                        <x-table.th class="py-3">C.H.</x-table.th>
                        <x-table.th class="py-3">Data</x-table.th>
                        <x-table.th></x-table.th>
                    </tr>
                </x-slot>

                <x-slot name="tbody">
                    @foreach ($presentialActivities as $presentialActivity)
                        <tr class="hover:bg-gray-100">
                            <x-table.td class="py-4 px-6 text-center text-sm text-gray-800">{{ $presentialActivity->title }}</x-table.td>
                            <x-table.td class="py-4 px-6 text-center text-sm text-gray-800">{{ $presentialActivity->description }}</x-table.td>
                            <x-table.td class="py-4 px-6 text-center text-sm text-gray-700">{{ $presentialActivity->workload }} Hrs</x-table.td>
                            <x-table.td class="py-4 px-6 text-center text-sm text-gray-700">{{ date('d/m/Y', strtotime($presentialActivity->start_date)) }}</x-table.td>
                            <x-table.td>
                                <div class="flex justify-center items-center gap-2">
                                    <x-button.table.btn-edit href="{{ route('admin_presential_activities.edit', $presentialActivity->id) }}" />
                                    <x-button.table.btn-trash href="{{ route('admin_presential_activities.destroy', $presentialActivity->id) }}" />
                                </div>
                            </x-table.td>
                        </tr>
                    @endforeach
                </x-slot>
            </x-table.table>
            
        </div>
    </div>

</x-app-layout>
