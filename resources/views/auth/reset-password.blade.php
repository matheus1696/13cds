<x-guest-layout>
    <div class="bg-blue-50 min-h-screen flex flex-col items-center justify-center px-5">

        <!-- Logo -->
        <div class="mb-8">
            <x-logo.application-logo />
        </div>

        <!-- Card Login -->
        <div class="w-full md:w-[400px] bg-white px-10 pt-4 pb-8 rounded-lg shadow-xl">
            
            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                Digite sua nova senha para redefinir seu acesso.
            </div>
    
            <form method="POST" action="{{ route('password.store') }}">
                @csrf
        
                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
        
                <!-- Email Address -->
                <div class="hidden">
                    <x-form.input-label for="email" :value="__('Email')" />
                    <x-form.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                    <x-form.input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
        
                <!-- Password -->
                <div class="mt-4">
                    <x-form.input-label for="password" :value="__('New Password')" />
                    <x-form.input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    <x-form.input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
        
                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-form.input-label for="password_confirmation" :value="__('Confirm Password')" />
        
                    <x-form.input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />
        
                    <x-form.input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
        
                <div class="flex items-center justify-center mt-4">
                    <x-button.btn-primary class="w-full"> {{ __('Reset Password') }} </x-button.btn-primary>
                </div>
            </form>
        </div>
        
        <p class=" pt-3 text-center text-[10px] text-gray-400 uppercase tracking-wider">
            <span>{{ config('app.name', 'Laravel') }} © {{ now()->year }} - V {{ config('app.version') }}</span> - 
            <span>Desenvolvido por <a href="https://webxperts.com.br" target="_blank" class="hover:text-blue-500">WebXperts</a></span>
        </p>
    </div>
</x-guest-layout>
