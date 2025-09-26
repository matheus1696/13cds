<!-- Banner Hero Revisado -->
<section class="relative bg-cover bg-center text-white py-24 md:py-32 lg:py-40 border-b-8 border-green-800" aria-labelledby="hero-title">
    <!-- Marca d’água -->
    <div class="absolute flex justify-center items-center inset-0 bg-gradient-to-b from-green-100/40 via-green-100/50 to-green-100/60">
        <img src="{{ asset('assets/img/logo.png' )}}" alt="Logo 13º Conferência" class="w-2/3 lg:w-1/3 opacity-30 blur-sm">
    </div>
    
    <!-- Conteúdo principal -->
    <div class="container mx-auto px-4 text-center relative z-10">
        <div class="max-w-4xl mx-auto">
            
            <!-- Título -->
            <h1 id="hero-title" 
                class="flex flex-col gap-1 text-4xl md:text-6xl lg:text-7xl font-bold mb-3 leading-tight">
                <span class="text-gray-800">13ª Conferência</span>
                <span class="text-green-800">Municipal de Saúde</span>
            </h1>
            
            <!-- Subtítulo -->
            <p class="text-xl lg:text-2xl mb-8 font-light text-gray-800">
                "Caruaru pelo SUS que acolhe, integra e cuida"
            </p>
            
            <!-- Data e Hora -->
            <div class="space-y-4 md:space-y-0 md:flex md:items-center md:justify-center md:space-x-6">
                <div class="bg-green-100/10 backdrop-blur-sm border border-green-900/20 rounded-xl px-6 py-4 inline-block">
                    <div class="flex items-center justify-center space-x-3">
                        <i class="fas fa-calendar-alt text-green-800" aria-hidden="true"></i>
                        <span class="font-semibold text-lg text-green-800">08 de Outubro de 2025</span>
                    </div>
                </div>
                <div class="bg-green-100/10 backdrop-blur-sm border border-green-900/20 rounded-xl px-6 py-4 inline-block">
                    <div class="flex items-center justify-center space-x-3">
                        <i class="fas fa-clock text-green-800" aria-hidden="true"></i>
                        <span class="font-semibold text-lg text-green-800">8h às 17h</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
