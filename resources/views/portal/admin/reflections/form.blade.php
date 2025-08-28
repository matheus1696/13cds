<x-app-layout>
    <x-slot name="header">
        @if (isset($exercise))
            <x-header.title title="{{ __('Cadastro de Fichamento') }}" />
        @else
            <x-header.title title="{{ __('Alteração de Fichamento') }}" />
        @endif
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-6">

                <form method="POST" action="{{ isset($reflection) ? route('admin_reflections.update', $reflection->id) : route('admin_reflections.store') }}" class="space-y-6 mb-8">
                    @isset($reflection) @method('PUT') @endisset
                    @csrf
                    <!-- Title -->
                    <div class="mt-4">
                        <x-form.input-label for="title" :value="__('Title')" />
                        <x-form.input id="title" type="text" name="title" :value="old('title', $reflection->title ?? '')" required autofocus placeholder="Título da Atividade"/>
                        <x-form.input-error :messages="$errors->get('title')"/>
                    </div>

                    <!-- Description -->
                    <div class="mt-4">
                        <x-form.input-label for="description" :value="__('Description')" />
                        <x-form.textarea id="description" name="description" required placeholder="Descrição da Atividade">
                            {{ old('description', $reflection->description ?? '') }}
                        </x-form.textarea>
                        <x-form.input-error :messages="$errors->get('description')"/>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mt-4">
                        <!-- Workload -->
                        <div>
                            <x-form.input-label for="workload" :value="__('Workload')" />
                            <x-form.input id="workload" type="number" name="workload" :value="old('workload', $reflection->workload ?? '')" min="1" placeholder="Carga Horária" required />
                            <x-form.input-error :messages="$errors->get('workload')"/>
                        </div>

                        <!-- Start Date -->
                        <div>
                            <x-form.input-label for="start_date" :value="__('Start Date')" />
                            <x-form.input type="date" id="start_date" name="start_date" :value="old('start_date', $reflection->start_date ?? '')" required />
                            <x-form.input-error :messages="$errors->get('start_date')"/>
                        </div>

                        
                        <!-- End Date -->
                        <div>
                            <x-form.input-label for="end_date" :value="__('End Date')" />
                            <x-form.input type="date" id="end_date" name="end_date" :value="old('end_date', $reflection->end_date ?? '')" required />
                            <x-form.input-error :messages="$errors->get('end_date')"/>
                        </div>
                    </div>

                    <!-- Botão de Envio -->
                    <div>
                        @if (isset($reflection))
                            <x-button.btn-primary type="submit" class="w-full">Atualiza Atividade</x-button.btn-primary>                            
                        @else
                            <x-button.btn-primary type="submit" class="w-full">Cadastra Nova Atividade</x-button.btn-primary>
                        @endif
                    </div>

                </form>

            </div>
        </div>
    </div>
    
</x-app-layout>
