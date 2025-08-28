<x-guest-layout>
    <div class="bg-blue-50 min-h-screen flex flex-col items-center justify-center px-5">

        <!-- Logo -->
        <div class="mb-8">
            <x-logo.application-logo />
        </div>

        <!-- Card Login -->
        <div class="w-full md:w-[400px] bg-white p-10 rounded-lg shadow-xl">
    
            <form method="POST" action="{{ route('login') }}">
                @csrf
    
                <!-- Email Address -->
                <div>
                    <x-form.input-label for="email" :value="__('Email')" />
                    <x-form.input id="email" type="email" name="email" :value="old('email')" required autofocus placeholder="seuemail@qmulti.com.br"/>
                    <x-form.input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
    
                <!-- Password -->
                <div class="mt-4">
                    <x-form.input-label for="password" :value="__('Password')" />
                    <x-form.input id="password" type="password" name="password" required autocomplete="current-password" placeholder="*********" />
                    <x-form.input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
    
                <div class="flex flex-col items-center justify-end gap-2 mt-4">
                    <x-button.btn-primary class="w-full">Acessar</x-button.btn-primary>
                    @if (Route::has('password.request'))
                        <x-button.link-secondary class="w-full text-center" href="{{ route('password.request') }}">Esqueceu sua senha?</x-button.link-secondary>
                    @endif    
                </div>
            </form>
        </div>
        
        <p class=" pt-3 text-center text-[10px] text-gray-400 uppercase tracking-wider">
            <span>{{ config('app.name', 'Laravel') }} © {{ now()->year }} - V {{ config('app.version') }}</span> - 
            <span>Desenvolvido por <a href="https://webxperts.com.br" target="_blank" class="hover:text-blue-500">WebXperts</a></span>
        </p>
    </div>
</x-guest-layout>
