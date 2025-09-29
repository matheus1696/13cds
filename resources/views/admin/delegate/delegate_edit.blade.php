<x-app-layout>
    <x-slot name="header">        
        <x-header.title title="{{ __('Editar Delegado') }}" />
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-6 py-8">

                <!-- Formulário de Edição de Delegado -->
                <section>
                    <form method="POST" action="{{ route('delegates.update', $delegate->id) }}" class="space-y-6">
                        @csrf
                        @method('PUT')

                        @include('admin.delegate._partials.delegate_form')

                        <!-- Botão de Atualização -->
                        <div>
                            <x-button.btn-primary type="submit" class="w-full">
                                {{ __('Atualizar Delegado') }}
                            </x-button.btn-primary>
                        </div>
                    </form>
                </section>
            </div>

        </div>
    </div>
</x-app-layout>
