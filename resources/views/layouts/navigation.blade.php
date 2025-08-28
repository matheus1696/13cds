<nav x-data="{ openMain: false, openSub: null }" class="bg-white border-b rounded-b-lg shadow-md border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 lg:px-6">
        <div class="flex justify-between h-20">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center">
                    <x-logo.application-logo />
                </div>

                <!-- Navigation Links Desktop -->
                <div class="hidden lg:-my-px lg:ms-8 lg:flex">
                    @can('user_students')
                        <x-menu.nav-dropdown title="Área do Estudante">
                            <div class="border-r border-gray-200">
                                <h2 class="font-semibold text-blue-600">Informações</h2>
                                <div class="py-2 flex flex-col gap-2">
                                    <x-menu.nav-link :href="route('schedule')" :active="request()->routeIs('schedule')">Cronograma</x-menu.nav-link>
                                    <x-menu.nav-link :href="route('about')" :active="request()->routeIs('about')">Sobre o Projeto</x-menu.nav-link>
                                    <x-menu.nav-link :href="route('notifications')" :active="request()->routeIs('notifications')">Avisos</x-menu.nav-link>
                                </div>
                            </div>
                            <div class="border-r border-gray-200">
                                <h2 class="font-semibold text-blue-600">Atividades</h2>
                                <div class="py-2 flex flex-col gap-2">
                                    <x-menu.nav-link :href="route('book-recommendations')" :active="request()->routeIs('book-recommendations')">Indicação de Leitura</x-menu.nav-link>
                                    <x-menu.nav-link :href="route('reflections.index')" :active="request()->routeIs('reflections.index')">Fichamento</x-menu.nav-link>
                                    <x-menu.nav-link :href="route('exercises.index')" :active="request()->routeIs('exercises.index')">Atividade Prática</x-menu.nav-link>
                                </div>
                            </div>
                        </x-menu.nav-dropdown>
                    @endcan                    

                    @can('tutor_evaluate')
                        <x-menu.nav-dropdown title="Área dos Tutores">
                            <div class="border-r border-gray-200">
                                <h2 class="font-semibold text-blue-600">Área de Avaliação</h2>
                                <div class="py-2 flex flex-col gap-2">
                                    <x-menu.nav-link :href="route('tutor_evaluation_reflections.index')" :active="request()->routeIs('tutor_evaluation_reflections.index')">Avaliação do Fichamento</x-menu.nav-link>
                                    <x-menu.nav-link :href="route('tutor_evaluation_exercises.index')" :active="request()->routeIs('tutor_evaluation_exercises.index')">Avaliação do Atividades Prática</x-menu.nav-link>
                                </div>
                            </div>

                            <div class="border-r border-gray-200">
                                <h2 class="font-semibold text-blue-600">Gráficos de Avaliação</h2>
                                <div class="py-2 flex flex-col gap-2">
                                    <x-menu.nav-link :href="route('tutor_evaluation_course.index')" :active="request()->routeIs('tutor_evaluation_course.index')">Gráfico de Avaliação do Curso</x-menu.nav-link>
                                </div>
                            </div>
                        </x-menu.nav-dropdown>
                    @endcan
                    
                    @canany(['configuration_users', 'configuration_exercises', 'configuration_reflections','configuration_professions','configuration_evaluations'])
                        <x-menu.nav-dropdown title="Configurações">
                            @can('configuration_users')
                                <div class="border-r border-gray-200">
                                    <h2 class="font-semibold text-blue-600">Gestão de Usuários</h2>
                                    <div class="py-2 flex flex-col gap-2">
                                        <x-menu.nav-link :href="route('users.index')" :active="request()->routeIs('users.index')">Lista de Usuário</x-menu.nav-link>
                                    </div>
                                </div>
                            @endcan
                            @canany(['configuration_exercises', 'configuration_reflections','configuration_evaluations','configuration_presential_activity'])                            
                                <div class="border-r border-gray-200">
                                    <h2 class="font-semibold text-blue-600">Gestão de Atividades</h2>
                                    <div class="py-2 flex flex-col gap-2">
                                        @can('configuration_presential_activity')
                                            <x-menu.nav-link :href="route('admin_presential_activities.index')" :active="request()->routeIs('admin_presential_activities.index')">Gestão de Encontros</x-menu.nav-link>
                                        @endcan
                                        @can('configuration_reflections')
                                            <x-menu.nav-link :href="route('admin_reflections.index')" :active="request()->routeIs('admin_reflections.index')">Gestão de Fichamentos</x-menu.nav-link>
                                        @endcan
                                        @can('configuration_exercises')
                                            <x-menu.nav-link :href="route('admin_exercises.index')" :active="request()->routeIs('admin_exercises.index')">Gestão de Atividades Práticas</x-menu.nav-link>
                                        @endcan
                                        @can('configuration_evaluations')
                                            <x-menu.nav-link :href="route('evaluations.index')" :active="request()->routeIs('evaluations.index')">Gestão de Avaliações do Curso</x-menu.nav-link>
                                        @endcan
                                    </div>
                                </div>                            
                            @endcanany
                            @can('configuration_professions')
                                <div class="border-r border-gray-200">
                                    <h2 class="font-semibold text-blue-600">Configuração do Sistema</h2>
                                    <div class="py-2 flex flex-col gap-2">
                                        <x-menu.nav-link :href="route('admin_professions.index')" :active="request()->routeIs('admin_professions.index')">Lista de Profissões</x-menu.nav-link>
                                    </div>
                                </div>
                            @endcan
                        </x-menu.nav-dropdown> 
                    @endcanany
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden lg:flex lg:items-center lg:ms-6">

                <div x-data="{ open: false }" class="relative inline-block text-left">

                    <button @click="open = !open" class="text-gray-700 px-4 py-2 rounded-lg flex justify-between items-center space-x-2 w-48">

                        @php
                            $nameParts = explode(' ', trim(Auth::user()->name));
                            $firstName = $nameParts[0];
                            $lastName = count($nameParts) > 1 ? end($nameParts) : $firstName;
                        @endphp

                        <span class="max-w-40 text-sm text-gray-500 hover:text-gray-700 hover:border-gray-300 font-medium leading-5 line-clamp-1">
                            {{ $firstName }} {{ $lastName }}
                        </span>

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transition-all duration-300" viewBox="0 0 20 20" fill="currentColor" x-bind:class="{ 'rotate-180': open }">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                        </svg>                        

                    </button>
                
                    <div x-show="open" @click.away="open = false" class="absolute left-0 mt-2 bg-white border border-gray-200 rounded-lg shadow-lg z-50 w-40">
                        
                        <a href="{{ route('profile.editProfile') }}" class="block px-4 py-2 text-sm hover:font-medium text-gray-500 hover:bg-gray-200">Perfil</a>
                        <a href="{{ route('profile.editPassword') }}" class="block px-4 py-2 text-sm hover:font-medium text-gray-500 hover:bg-gray-200">Alterar Senha</a>
                        
                        <!-- Authentication -->
                       <form method="POST" action="{{ route('logout') }}" class="cursor-pointer">
                            @csrf
                            <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm hover:font-medium text-blue-600 hover:bg-blue-100" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                        </form>
                    </div>
                </div>
                
            </div>

            
            <!-- Botão do Menu Hamburguer -->
            <div class="flex lg:hidden items-center ms-6">
                <button @click="openMain = true" class="size-8 bg-blue-500 text-white rounded-md">
                    ☰
                </button>
            </div>
        </div>
    </div>

    <!-- Menu Mobile com Dropdowns -->
    <div class="block lg:hidden">
        <div x-show="openMain" class="fixed inset-0 bg-gray-900 bg-opacity-75 z-40" @click="openMain = false">
            <div class="fixed left-0 top-0 w-64 h-full bg-white shadow-lg z-50 transition-transform" @click.stop>
                
                <!-- Logo -->
                <div class="flex justify-between items-center border-b border-gray-200 p-4">
                    <x-logo.application-logo />
                    <button @click="openMain = false" class="text-gray-600 font-semibold">✕</button>
                </div>

                <!-- Navigation Links Mobile -->
                <div class="mt-5 space-y-5 text-sm px-4" x-data="{ openStudent: false, openTutor: false, openConfig: false }">

                    @can('user_students')
                        <div>
                            <button @click="openStudent = !openStudent" class="w-full text-left font-semibold text-blue-600">
                                Área do Estudante
                            </button>
                            <div x-show="openStudent" x-transition class="mt-2 space-y-4">
                                <div>
                                    <h3 class="font-semibold text-gray-700 mb-2 border-t border-gray-100 pt-3">Informações</h3>
                                    <div class="mt-1 flex flex-col gap-2">
                                        <x-menu.nav-link :href="route('schedule')" :active="request()->routeIs('schedule')">Cronograma</x-menu.nav-link>
                                        <x-menu.nav-link :href="route('about')" :active="request()->routeIs('about')">Sobre o Projeto</x-menu.nav-link>
                                        <x-menu.nav-link :href="route('notifications')" :active="request()->routeIs('notifications')">Avisos</x-menu.nav-link>
                                    </div>
                                </div>

                                <div>
                                    <h3 class="font-semibold text-gray-700 mb-2 border-t border-gray-100 pt-3">Atividades</h3>
                                    <div class="mt-1 flex flex-col gap-2">
                                        <x-menu.nav-link :href="route('book-recommendations')" :active="request()->routeIs('book-recommendations')">Indicação de Leitura</x-menu.nav-link>
                                        <x-menu.nav-link :href="route('reflections.index')" :active="request()->routeIs('reflections.index')">Fichamento</x-menu.nav-link>
                                        <x-menu.nav-link :href="route('exercises.index')" :active="request()->routeIs('exercises.index')">Atividade Prática</x-menu.nav-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endcan

                    @can('tutor_evaluate')
                        <div>
                            <button @click="openTutor = !openTutor" class="w-full text-left font-semibold text-blue-600">
                                Área dos Tutores
                            </button>
                            <div x-show="openTutor" x-transition class="mt-2 space-y-4">
                                <div>
                                    <h3 class="font-semibold text-gray-700 mb-2 border-t border-gray-100 pt-3">Área de Avaliação</h3>
                                    <div class="mt-1 flex flex-col gap-2">
                                        <x-menu.nav-link :href="route('tutor_evaluation_reflections.index')" :active="request()->routeIs('tutor_evaluation_reflections.index')">Avaliação do Fichamento</x-menu.nav-link>
                                        <x-menu.nav-link :href="route('tutor_evaluation_exercises.index')" :active="request()->routeIs('tutor_evaluation_exercises.index')">Avaliação do Atividades Prática</x-menu.nav-link>
                                    </div>
                                </div>

                                <div>
                                    <h3 class="font-semibold text-gray-700 mb-2 border-t border-gray-100 pt-3">Gráficos de Avaliações</h3>
                                    <div class="mt-1 flex flex-col gap-2">
                                        <x-menu.nav-link :href="route('tutor_evaluation_course.index')" :active="request()->routeIs('tutor_evaluation_course.index')">Avaliação do Curso</x-menu.nav-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endcan

                    @canany(['configuration_users', 'configuration_exercises', 'configuration_reflections','configuration_professions'])
                        <div>
                            <button @click="openConfig = !openConfig" class="w-full text-left font-semibold text-blue-600">
                                Configurações
                            </button>
                            <div x-show="openConfig" x-transition class="mt-2 space-y-4">
                                @can('configuration_users')
                                    <div>
                                        <h3 class="font-semibold text-gray-700 mb-2 border-t border-gray-100 pt-3">Gestão de Usuários</h3>
                                        <x-menu.nav-link :href="route('users.index')" :active="request()->routeIs('users.index')">Lista de Usuário</x-menu.nav-link>
                                    </div>
                                @endcan
                                @canany(['configuration_exercises', 'configuration_reflections'])
                                    <div>
                                        <h3 class="font-semibold text-gray-700 mb-2 border-t border-gray-100 pt-3">Gestão de Atividades</h3>
                                        <div class="mt-1 flex flex-col gap-2">
                                            @can('configuration_reflections')
                                                <x-menu.nav-link :href="route('admin_reflections.index')" :active="request()->routeIs('admin_reflections.index')">Gestão de Fichamentos</x-menu.nav-link>
                                            @endcan
                                            @can('configuration_exercises')
                                                <x-menu.nav-link :href="route('admin_exercises.index')" :active="request()->routeIs('admin_exercises.index')">Gestão de Atividades Práticas</x-menu.nav-link>
                                            @endcan
                                        </div>
                                    </div>
                                @endcanany
                                
                                @can('configuration_professions')
                                    <div>
                                        <h3 class="font-semibold text-gray-700 mb-2 border-t border-gray-100 pt-3">Configuração do Sistema</h3>
                                        <x-menu.nav-link :href="route('admin_professions.index')" :active="request()->routeIs('admin_professions.index')">Lista de Profissões</x-menu.nav-link>
                                    </div>
                                @endcan
                            </div>
                        </div>
                    @endcanany
                </div>
            </div>
        </div>


    </div>   
</nav>