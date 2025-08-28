<div x-data="{ openModal: false }" x-on:keydown.escape="openModal = false" x-cloak>
    <!-- Botão para Abrir o Modal -->
    <div @click="openModal = true">
        {{ $button }}
    </div>

    <!-- Modal -->
    <div x-show="openModal" 
        x-transition:enter="transition transform ease-out duration-500 opacity-0"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition transform ease-in duration-500 opacity-100"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="min-h-screen fixed inset-0 z-50 flex items-center justify-center bg-gray-800 bg-opacity-75"
        @click="openModal = false">

        <div class="bg-white rounded-lg shadow-lg w-full md:w-2/3 p-6 mt-10" 
            @click.stop  
            x-show="openModal" 
            x-transition:enter="transition transform ease-out duration-500 scale-50 opacity-0"
            x-transition:enter-start="scale-50 opacity-0"
            x-transition:enter-end="scale-100 opacity-100"
            x-transition:leave="transition transform ease-in duration-500 scale-100 opacity-100"
            x-transition:leave-start="scale-100 opacity-100"
            x-transition:leave-end="scale-50 opacity-0">
            
            <!-- Título do Modal -->
            <div class="flex justify-between items-center">
                <x-header.title title="{{ $title }}" />
                <button @click="openModal = false" class="text-gray-600 hover:text-gray-900 focus:outline-none text-3xl">
                    &times;
                </button>
            </div>

            <hr class="my-4">

            <!-- Corpo do Modal -->
            <div>
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
