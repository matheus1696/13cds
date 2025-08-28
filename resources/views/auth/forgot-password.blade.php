<x-guest-layout>
    <div class="bg-blue-50 min-h-screen flex flex-col items-center justify-center px-5">

        <!-- Logo -->
        <div class="mb-8">
            <x-logo.application-logo />
        </div>

        <!-- Card Login -->
        <div class="w-full md:w-1/2 xl:w-1/3 bg-white p-10 rounded-lg shadow-xl">
            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>
        
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
        
                <!-- Email Address -->
                <div>
                    <x-form.input-label for="email" :value="__('Email')" />
                    <x-form.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="seuemail@qualimulti.com.br"/>
                    <x-form.input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
        
                <div class="mt-4">
                    <x-button.btn-primary class="w-full text-center">{{ __('Email Password Reset Link') }}</x-button.btn-primary>
                </div>
            </form>
        </div>
        
        <p class=" pt-3 text-center text-[10px] text-gray-400 uppercase tracking-wider">
            <span>{{ config('app.name', 'Laravel') }} © {{ now()->year }} - V {{ config('app.version') }}</span> - 
            <span>Desenvolvido por <a href="https://webxperts.com.br" target="_blank" class="hover:text-blue-500">WebXperts</a></span>
        </p>
    </div>
</x-guest-layout>
