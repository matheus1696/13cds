<x-app-layout>
    <x-slot name="header"> 
        <x-header.title title="{{ __('Profile')}} - {{ __('Reset Password') }}" />
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-6">

                <!-- Formulário para Envio do Texto -->
                <section class="mb-8">
                    <form action="{{ route('password.update') }}" method="POST" class="space-y-6">
                        @csrf @method('PUT')
                    
                        <!-- Nome -->
                        <div class="mb-4">
                            <x-form.input-label :value="__('Name')"/>
                            <x-form.input value="{{ Auth::user()->name }}" disabled />
                        </div>
                    
                        <!-- Email -->
                        <div class="mb-4">
                            <x-form.input-label :value="__('Email')"/>
                            <x-form.input value="{{ Auth::user()->email }}" disabled />
                        </div>
                    
                        <div class="mb-4">
                            <x-form.input-label for="update_password_current_password" :value="__('Current Password')" />
                            <x-form.input id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" placeholder="**********" autocomplete="current-password" />
                            <x-form.input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                        </div>
                        
                        <div class="mb-4">
                            <x-form.input-label for="update_password_password" :value="__('New Password')" />
                            <x-form.input id="update_password_password" name="password" type="password" class="mt-1 block w-full" placeholder="**********" autocomplete="new-password" />
                            <x-form.input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                        </div>
                        
                        <div class="mb-4">
                            <x-form.input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
                            <x-form.input id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" placeholder="**********" autocomplete="new-password" />
                            <x-form.input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                        </div>                        
                    
                        <!-- Botão de Envio -->
                        <div class="mb-4">
                            <x-button.btn-primary type="submit" class="w-full">{{ __('Reset Password') }}</x-button.btn-primary>
                        </div>
                    </form>
                    
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
