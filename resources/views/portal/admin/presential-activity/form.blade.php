<x-app-layout>
    <x-slot name="header">
        @if (isset($exercise))
            <x-header.title title="{{ __('Cadastro de Encontro Presencial') }}" />
        @else
            <x-header.title title="{{ __('Alteração de Encontro Presencial') }}" />
        @endif
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-6">

                <form method="POST" action="{{ isset($presentialActivity) ? route('admin_presential_activities.update', $presentialActivity->id) : route('admin_presential_activities.store') }}" class="space-y-6 mb-8">
                    @isset($presentialActivity) @method('PUT') @endisset
                    @csrf
                    <!-- Title -->
                    <div class="mt-4">
                        <x-form.input-label for="title" :value="__('Title')" />
                        <x-form.input id="title" type="text" name="title" :value="old('title', $presentialActivity->title ?? '')" required autofocus placeholder="Título do encontro"/>
                        <x-form.input-error :messages="$errors->get('title')"/>
                    </div>

                    <!-- Description -->
                    <div class="mt-4">
                        <x-form.input-label for="description" :value="__('Description')" />
                        <x-form.textarea id="description" name="description" required placeholder="Descrição do encontro">
                            {{ old('description', $presentialActivity->description ?? '') }}
                        </x-form.textarea>
                        <x-form.input-error :messages="$errors->get('description')"/>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-4">
                        <!-- Workload -->
                        <div>
                            <x-form.input-label for="workload" :value="__('Workload')" />
                            <x-form.input id="workload" type="number" name="workload" :value="old('workload', $presentialActivity->workload ?? '')" min="1" placeholder="Carga Horária" required />
                            <x-form.input-error :messages="$errors->get('workload')" class="mt-2"/>
                        </div>

                        <!-- Start Date -->
                        <div>
                            <x-form.input-label for="start_date" :value="__('Start Date')" />
                            <x-form.input type="date" id="start_date" name="start_date" :value="old('start_date', $presentialActivity->start_date ?? '')" :min="now()->toDateString()" max="2099-12-31" required />
                            <x-form.input-error :messages="$errors->get('start_date')" class="mt-2"/>
                        </div>
                    </div>

                    <!-- Botão de Envio -->
                    <div>
                        @if (isset($presentialActivity))
                            <x-button.btn-primary type="submit" class="w-full">Atualiza Encontro</x-button.btn-primary>                            
                        @else
                            <x-button.btn-primary type="submit" class="w-full">Cadastra Novo Encontro</x-button.btn-primary>
                        @endif
                    </div>

                </form>

            </div>
        </div>
    </div>
    
</x-app-layout>
