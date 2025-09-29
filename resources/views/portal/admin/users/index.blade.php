<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <x-header.title title="{{ __('Lista de Usuários') }}" />
            <x-button.link-primary href="{{ route('users.create') }}">Cadastrar Usuário</x-button.link-primary>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto py-6">
        <x-table.table>
            <x-slot name="thead">
                <tr>
                    <x-table.th class="py-2.5">Nome</x-table.th>
                    <x-table.th>Email</x-table.th>
                    <x-table.th>CPF</x-table.th>
                    <x-table.th></x-table.th>
                </tr>
            </x-slot>

            <x-slot name="tbody">
                @foreach ($users as $user)
                    <tr class="hover:bg-gray-100">
                        <x-table.td class="py-3.5 text-center text-sm text-gray-800">{{ $user->name }}</x-table.td>
                        <x-table.td class="py-3.5 text-center text-sm text-gray-700">{{ $user->email }}</x-table.td>
                        <x-table.td class="py-3.5 text-center text-sm text-gray-700">{{ $user->cpf }}</x-table.td>
                        <x-table.td>
                            <x-modal.modal title="Alterar Permissões">
                                <x-slot name="button">
                                    <x-button.table.btn-permission />
                                </x-slot>

                                <!-- Formulário -->
                                <form action="{{ route('users.permission', ['user' => $user->id]) }}" method="post">
                                    @csrf @method('PUT')

                                    <div class="space-y-2">
                                        @foreach ($dbPermissions as $permission)
                                            <div class="flex items-center gap-5">
                                                <input type="checkbox" id="permission_{{ $permission->id }}_{{ $user->id }}"
                                                    name="permissions[]" value="{{ $permission->name }}" class="hidden peer"
                                                    {{ $user->hasPermissionTo($permission->name) ? 'checked' : '' }}>
                                                <label for="permission_{{ $permission->id }}_{{ $user->id }}"
                                                    class="flex items-center justify-center w-full px-3 py-1 text-sm font-medium text-gray-700 border rounded-lg cursor-pointer peer-checked:bg-blue-600 peer-checked:text-white peer-checked:border-blue-600 hover:border-blue-600">
                                                    {{ $permission->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                    </div>

                                    <div class="mt-4 flex justify-end gap-4">
                                        <!-- Botões de Cancelar e Submeter -->
                                        <x-button.btn-primary>Alterar Permissões</x-button.btn-primary>
                                    </div>
                                </form>
                            </x-modal.modal>                                   
                        </x-table.td>
                    </tr>
                @endforeach
            </x-slot>
        </x-table.table>
    </div>

</x-app-layout>
