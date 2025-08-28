<x-app-layout>
    <x-slot name="header">
        <x-header.title title="{{ __('Profile') }} - {{ __('Modify Data') }}" />
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-6">

                <!-- Formulário para Envio do Texto -->
                <section class="mb-8">
                    <form action="{{ route('profile.updateProfile') }}" method="POST" class="space-y-6">
                        @csrf @method('PATCH')
                    
                        <!-- Nome -->
                        <div class="mb-4">
                            <x-form.input-label for="name" :value="__('Name')"/>
                            <x-form.input type="text" id="name" name="name" value="{{ old('name', Auth::user()->name) }}" :placeholder="__('Your name')" required autofocus />
                            <x-form.input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                    
                        <!-- Email -->
                        <div class="mb-4">
                            <x-form.input-label :value="__('Email')"/>
                            <x-form.input value="{{ Auth::user()->email }}" disabled />
                        </div>

                        <!-- Contact -->
                        <div class="mb-4">
                            <x-form.input-label for="contact" :value="__('Contact')"/>
                            <x-form.input type="text" id="contact" name="contact" value="{{ old('contact', Auth::user()->contact) }}" :placeholder="__('Your phone contact')" required onkeyup="handlePhone(event)" maxlength="15" minlength="15" />
                            <x-form.input-error :messages="$errors->get('contact')" class="mt-2" />
                        </div>
                    
                        <!-- CPF -->
                        <div class="mb-4">
                            <x-form.input-label for="cpf" :value="__('CPF')"/>
                            <x-form.input type="text" id="cpf" name="cpf" value="{{ old('cpf', Auth::user()->cpf) }}" :placeholder="__('Your CPF')" required onkeyup="handleCPF(event)" maxlength="14" minlength="14" />
                            <x-form.input-error :messages="$errors->get('cpf')" class="mt-2" />
                        </div>
                    
                        <!-- Profissão -->
                        <div class="mb-4">
                            <x-form.input-label for="profession_id" :value="__('Profession')" />
                            <x-form.select name="profession_id">                                
                                @foreach ($professions as $profession)
                                    <option value="{{ $profession->id }}" {{ Auth::user()->profession_id === $profession->id ? 'selected' : '' }}>
                                        {{ $profession->title }}
                                    </option>
                                @endforeach
                            </x-form.select>
                            <x-form.input-error :messages="$errors->get('profession_id')" class="mt-2" />
                        </div>
                    
                        <!-- Botão de Envio -->
                        <div class="mb-4">
                            <x-button.btn-primary type="submit" class="w-full">{{ __("Modify Data") }}</x-button.btn-primary>
                        </div>
                    </form>
                    
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
