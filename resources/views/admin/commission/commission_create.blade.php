<x-app-layout>
    <x-slot name="header">        
        <x-header.title title="{{ __('Cadastro de Organizador') }}" />
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-6 py-8">

                <!-- Formulário de Cadastro de Organizador -->
                <section>
                    <form method="POST" action="{{ route('commissions.store') }}" class="space-y-6">
                        @csrf

                        @include('admin.commission._partials.commission_form')

                        <!-- Botão de Envio -->
                        <div>
                            <x-button.btn-primary type="submit" class="w-full">
                                {{ __('Cadastrar Organizador') }}
                            </x-button.btn-primary>
                        </div>
                    </form>
                </section>
            </div>

        </div>
    </div>
</x-app-layout>
