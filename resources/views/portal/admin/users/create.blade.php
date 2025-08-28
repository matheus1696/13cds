<x-app-layout>
    <x-slot name="header">        
        <x-header.title title="{{ __('Cadastro de Usuário') }}" />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-6">

                <!-- Formulário para Envio do Texto -->
                <section class="mb-2">

                    <form method="POST" action="{{ route('users.store') }}" class="space-y-6 mb-8">
                        @csrf
                        <!-- Name -->
                        <div>
                            <x-form.input-label for="name" :value="__('Name')" />
                            <x-form.input id="name" type="text" name="name" :value="old('name')" required autofocus placeholder="Fulano da Silva Mota"/>
                            <x-form.input-error :messages="$errors->get('name')"/>
                        </div>

                        <!-- Email Address -->
                        <div>
                            <x-form.input-label for="email" :value="__('Email')" />
                            <x-form.input id="email" type="email" name="email" :value="old('email')" required placeholder="fulano.silva@example.com" />
                            <x-form.input-error :messages="$errors->get('email')"/>
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mt-4">
                            <!-- CPF -->
                            <div>
                                <x-form.input-label for="cpf" :value="__('CPF')" />
                                <x-form.input id="cpf" name="cpf" type="text" :value="old('cpf')" required autocomplete="off" onkeyup="handleCPF(event)" maxlength="14" minlength="14" placeholder="XXX.XXX.XXX-XX"/>
                                <x-form.input-error :messages="$errors->get('cpf')"/>
                            </div>

                            <!-- Profession -->
                            <div>
                                <x-form.input-label for="profession" :value="__('Profession')" />
                                <x-form.input id="profession" name="profession" :value="old('profession')" placeholder="Enfermeiro" />
                                <x-form.input-error :messages="$errors->get('profession')"/>
                            </div>
                        </div>

                        <!-- Botão de Envio -->
                        <div>
                            <x-button.btn-primary type="submit" class="w-full">Cadastra Usuário</x-button.btn-primary>
                        </div>

                    </form>
                </section>
            </div>
        </div>
    </div>
    
</x-app-layout>
