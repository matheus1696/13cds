<x-guest-layout>
    <header class="flex flex-col gap-2 min-h-screen py-14 px-10 md:px-20 lg:px-32 xl:px-52">
        <div class="flex justify-between items-center md:pb-10">
            <div>
                <x-logo.application-logo />
            </div>
            <div>
                <a href="{{ route('login') }}" class="hover:bg-[#1E88E5] text-sm text-[#1E88E5] hover:text-white border border-[#1E88E5] px-4 py-2 rounded-md transition duration-500">Área do Participante</a>
            </div>
        </div>

        <div class="flex-1 grid grid-cols-1 lg:grid-cols-2 gap-10 justify-center items-center py-32 md:py-40">
            <div class="lg:hidden inline-block">
                <img src="assets/img/illustration_01.png" alt="Illustration Banner 01" class="w-full md:w-96 m-auto">
            </div>

            <div class="space-y-5">
                <h1 class="text-3xl sm:text-4xl lg:text-4xl font-bold text-center lg:text-start space-y-1">
                    <p>Apoio Matricial para</p>
                    <p>Equipe e-Multi da</p>
                    <p>Atenção Primária</p>
                </h1>
                <p class="font-light text-gray-500 text-center lg:text-start text-sm tracking-wide xl:w-3/4">
                    O curso de aperfeiçoamento é o fortalecimento das capacidades técnicas, colaborativas e de gestão dentro de uma equipe multiprofissional, com foco na ampliação da resolutividade e qualidade do atendimento no contexto da Atenção Primária à Saúde de Caruaru-PE.
                </p>
            </div>

            <div class="my-5 hidden lg:inline-block">
                <img src="assets/img/illustration_01.png" alt="Illustration Banner 01" class="w-full">
            </div>
        </div>
    </header>

    <section id="objetivo" class="grid grid-cols-1 lg:grid-cols-2 gap-10 justify-center py-32 md:py-40 px-10 md:px-20 lg:px-32 xl:px-52">
        <div class="text-center">
            <img src="assets/img/illustration_02.png" alt="Illustration Banner 01" class="w-full md:w-96 m-auto">
        </div>
        <div class="space-y-5">
            <h2 class="text-3xl font-medium uppercase text-center lg:text-start">Nossos objetivos</h2>
            <div class="text-sm tracking-wide text-justify leading-[1.6] text-gray-600">
                <ul class="list-disc list-inside space-y-3">
                    <li>Capacitar os profissionais para atuar de forma integrada, promovendo a colaboração entre as diferentes categorias profissionais da equipe multiprofissional da Atenção Básica.</li>
                    <li>Entender o papel do apoio matricial na Atenção Primária à Saúde, especialmente na organização e gestão do cuidado.</li>
                    <li>Estimular o planejamento, monitoramento e avaliação do cuidado de forma compartilhada.</li>
                    <li>Promover reflexões sobre desafios e potencialidades da Atenção Primária com foco em soluções colaborativas.</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="galeria" class="bg-white py-20 px-10 md:px-20 lg:px-32 xl:px-52">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-medium uppercase text-gray-800">Galeria de Fotos</h2>
            <p class="text-sm text-gray-500">Momentos registrados durante as atividades do curso.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <img src="assets/img/galeria/01.jpg" alt="Foto 1" class="rounded-xl shadow-lg object-cover w-full h-60 hover:scale-105 transition-transform duration-500">
            <img src="assets/img/galeria/11.jpg" alt="Foto 2" class="rounded-xl shadow-lg object-cover w-full h-60 hover:scale-105 transition-transform duration-500">
            <img src="assets/img/galeria/09.jpg" alt="Foto 3" class="rounded-xl shadow-lg object-cover w-full h-60 hover:scale-105 transition-transform duration-500">
            <img src="assets/img/galeria/17.jpg" alt="Foto 4" class="rounded-xl shadow-lg object-cover w-full h-60 hover:scale-105 transition-transform duration-500">
            <img src="assets/img/galeria/05.jpg" alt="Foto 5" class="rounded-xl shadow-lg object-cover w-full h-60 hover:scale-105 transition-transform duration-500">
            <img src="assets/img/galeria/12.jpg" alt="Foto 6" class="rounded-xl shadow-lg object-cover w-full h-60 hover:scale-105 transition-transform duration-500">
            <img src="assets/img/galeria/10.jpg" alt="Foto 7" class="hidden md:block rounded-xl shadow-lg object-cover w-full h-60 hover:scale-105 transition-transform duration-500">
            <img src="assets/img/galeria/08.jpg" alt="Foto 8" class="hidden md:block rounded-xl shadow-lg object-cover w-full h-60 hover:scale-105 transition-transform duration-500">
            <img src="assets/img/galeria/15.jpg" alt="Foto 9" class="hidden lg:block rounded-xl shadow-lg object-cover w-full h-60 hover:scale-105 transition-transform duration-500">
        </div>
    </section>

    <footer class="bg-blue-50 mt-20 px-10 md:px-20 lg:px-32 xl:px-52 border-t-8 border-[#0E406B]">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-10 py-14">
            <div class="col-span-2 space-y-3">
                <x-logo.application-logo />
                <p class="text-sm text-gray-500 leading-relaxed">
                    O sistema QMulti é uma plataforma desenvolvida para apoiar as atividades formativas do curso e-Multi, promovendo uma experiência digital prática, intuitiva e colaborativa.
                </p>
            </div>
            <div>
                <h3 class="font-semibold text-blue-600 uppercase text-sm mb-3">Links úteis</h3>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li><a href="#objetivo" class="hover:text-blue-500">Objetivos</a></li>
                    <li><a href="#galeria" class="hover:text-blue-500">Galeria</a></li>
                    <li><a href="{{ route('login') }}" class="hover:text-blue-500">Área do Participante</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold text-blue-600 uppercase text-sm mb-3">Contato</h3>
                <p class="flex items-center gap-1.5 text-sm text-gray-600">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4">
                            <path fill-rule="evenodd" d="M6.912 3a3 3 0 0 0-2.868 2.118l-2.411 7.838a3 3 0 0 0-.133.882V18a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3v-4.162c0-.299-.045-.596-.133-.882l-2.412-7.838A3 3 0 0 0 17.088 3H6.912Zm13.823 9.75-2.213-7.191A1.5 1.5 0 0 0 17.088 4.5H6.912a1.5 1.5 0 0 0-1.434 1.059L3.265 12.75H6.11a3 3 0 0 1 2.684 1.658l.256.513a1.5 1.5 0 0 0 1.342.829h3.218a1.5 1.5 0 0 0 1.342-.83l.256-.512a3 3 0 0 1 2.684-1.658h2.844Z" clip-rule="evenodd" />
                        </svg>                          
                    </span>
                    <span>
                        suporte@webxperts.com.br
                    </span>
                </p>
            </div>
        </div>
        <div class="py-5 text-center text-[10px] text-gray-400 uppercase tracking-wider border-t border-gray-200">
            <span>{{ config('app.name', 'Laravel') }} © {{ now()->year }} - V {{ config('app.version') }} – Todos os direitos reservados</span> 
            |            
            <span>Desenvolvido por <a href="https://webxperts.com.br" target="_blank" class="hover:text-blue-500">WebXperts</a></span>
        </div>
    </footer>
    
</x-guest-layout>