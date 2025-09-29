<x-guest-layout>
    <div class="bg-green-50 min-h-screen flex flex-col items-center justify-center px-10 py-16">
        
        <!-- Cabeçalho estilo documentos -->
        <div class="text-center">
            <img src="{{ asset('assets/img/logo_full.png') }}" alt="" class="w-40">
        </div>

        <!-- Card Login -->
        <div class="w-full md:w-[400px] bg-white p-10 rounded-lg shadow-xl border border-gray-200">

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-6">
                    <x-form.input-label for="email" :value="__('Email')" />
                    <x-form.input id="email" type="email" name="email" :value="old('email')" required autofocus placeholder="seuemail@saudecaruaru.pe.gov.br"/>
                    <x-form.input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <x-form.input-label for="password" :value="__('Senha')" />
                    <x-form.input id="password" type="password" name="password" required autocomplete="current-password" placeholder="*********" />
                    <x-form.input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Submit & Forgot Password -->
                <div class="flex flex-col items-center justify-end gap-3 mt-4">
                    <x-button.btn-primary class="w-full">Acessar</x-button.btn-primary>
                    @if (Route::has('password.request'))
                        <x-button.link-secondary class="w-full text-center" href="{{ route('password.request') }}">
                            Esqueceu sua senha?
                        </x-button.link-secondary>
                    @endif
                </div>
            </form>
        </div>
        
        <!-- Footer / Créditos -->
        <p class="pt-4 text-center text-[10px] text-gray-400 uppercase tracking-wider">
            <span>{{ config('app.name', 'Laravel') }} © {{ now()->year }} - V {{ config('app.version') }}</span> - 
            <span>Desenvolvido por <a href="https://webxperts.com.br" target="_blank" class="hover:text-blue-500">Webxperts</a></span>
        </p>

    </div>
</x-guest-layout>
