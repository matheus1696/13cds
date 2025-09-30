<!-- Footer Melhorado e Compacto -->
<footer class="bg-green-900 text-white" aria-labelledby="footer-heading">
    <div class="container mx-auto px-4">
        <h2 id="footer-heading" class="sr-only">Rodapé</h2>
        
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 text-center lg:text-start py-10">
            <!-- Logo e descrição -->
            <div class="lg:col-span-2 flex items-center justify-center text-center">
                <img src="{{ asset('assets/img/logotipo_full_white.png')}}" alt="Logomarca da 13ª Conferência Municipal de Saúde" class="mb-4 w-52">
            </div>

            <!-- Acessos rápidos -->
            <div>
                <h3 class="text-lg font-bold mb-2">Acessos Rápidos</h3>
                <ul class="space-y-1 text-sm">
                    <li><a href="#sobre" class="text-green-200 hover:text-white transition-colors block py-1 focus:outline-none focus:text-white">Sobre</a></li>
                    <li><a href="#pre-conferencias" class="text-green-200 hover:text-white transition-colors block py-1 focus:outline-none focus:text-white">Pré-Conferências</a></li>
                    <li><a href="#programacao" class="text-green-200 hover:text-white transition-colors block py-1 focus:outline-none focus:text-white">Programação</a></li>
                    <li><a href="#localizacao" class="text-green-200 hover:text-white transition-colors block py-1 focus:outline-none focus:text-white">Localização</a></li>
                    <li><a href="{{ route('login') }}" class="text-green-200 hover:text-white transition-colors block py-1 focus:outline-none focus:text-white"></a></li>
                </ul>
            </div>

            <!-- Informações / Documentos -->
            <div>
                <h3 class="text-lg font-bold mb-2">Documentos</h3>
                <ul class="space-y-1 text-sm">
                    <li><a href="{{ route('regimento') }}" class="text-green-200 hover:text-white transition-colors block py-1 focus:outline-none focus:text-white">Regimento</a></li>
                    <li><a href="{{ route('decreto') }}" class="text-green-200 hover:text-white transition-colors block py-1 focus:outline-none focus:text-white">Decreto</a></li>
                    <li><a href="{{ route('convocatoria') }}" class="text-green-200 hover:text-white transition-colors block py-1 focus:outline-none focus:text-white">Convocatória</a></li>
                    <li><a href="#" class="text-green-200 hover:text-white transition-colors block py-1 focus:outline-none focus:text-white">Programação</a></li>
                </ul>
            </div>

            <!-- Comissão Organizadora -->
            <div>
                <h3 class="text-lg font-bold mb-2">Comissão Organizadora</h3>
                <ul class="space-y-1 text-sm">
                    <li><a href="{{ route('login') }}" class="text-green-200 hover:text-white transition-colors block py-1 focus:outline-none focus:text-white">Área da Comissão</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Rodapé inferior -->
        <div class="py-4 text-center lg:text-start border-t border-green-800">
            <div class="flex flex-col sm:flex-row justify-between items-center text-sm space-y-4">
                <p class="text-xs text-green-100">
                    &copy; 2025 Prefeitura Municipal de Caruaru - Secretaria de Saúde. Todos os direitos reservados.
                </p>
                <ul class="flex flex-wrap gap-4 text-green-100 text-xs">
                    <li><a href="#" class="hover:text-white transition-colors focus:outline-none focus:text-white">Política de Privacidade</a></li>
                    <li><a href="#" class="hover:text-white transition-colors focus:outline-none focus:text-white">Termos de Uso</a></li>
                    <li><a href="#" class="hover:text-white transition-colors focus:outline-none focus:text-white">Acessibilidade</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
