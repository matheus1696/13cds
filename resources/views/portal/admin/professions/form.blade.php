<x-app-layout>
    <x-slot name="header">
        @if (isset($profession))
            <x-header.title title="{{ __('Cadastro de Profissão') }}" />
        @else
            <x-header.title title="{{ __('Alteração de Profissão') }}" />
        @endif
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-6">

                <form method="POST" action="{{ isset($profession) ? route('admin_professions.update', $profession->id) : route('admin_professions.store') }}" class="space-y-6 mb-8">
                    @isset($profession) @method('PUT') @endisset
                    @csrf
                    <!-- Código -->
                    <div class="mt-4">
                        <x-form.input-label for="code" :value="__('Código')" />
                        <x-form.input id="code" type="text" name="code" :value="old('code', $profession->code ?? '')" required autofocus placeholder="Código"/>
                        <x-form.input-error :messages="$errors->get('code')"/>
                    </div>

                    <!-- Profissão -->
                    <div class="mt-4">
                        <x-form.input-label for="title" :value="__('Profissão')" />
                        <x-form.input id="title" type="text" name="title" :value="old('title', $profession->title ?? '')" required autofocus placeholder="Profissão"/>
                        <x-form.input-error :messages="$errors->get('title')"/>
                    </div>

                    <!-- Categoria -->
                    <div class="mt-4">
                        <x-form.input-label for="category" :value="__('Categoria')" />
                        <x-form.input id="category" type="text" name="category" :value="old('category', $profession->category ?? '')" required autofocus placeholder="Categoria"/>
                        <x-form.input-error :messages="$errors->get('category')"/>
                    </div>

                    <!-- Subcategoria -->
                    <div class="mt-4">
                        <x-form.input-label for="subcategory" :value="__('Subcategoria')" />
                        <x-form.input id="subcategory" type="text" name="subcategory" :value="old('subcategory', $profession->subcategory ?? '')" required autofocus placeholder="Subcategoria"/>
                        <x-form.input-error :messages="$errors->get('subcategory')"/>
                    </div>
                    
                    <!-- Description -->
                    <div class="mt-4">
                        <x-form.input-label for="description" :value="__('Description')" />
                        <x-form.textarea id="description" name="description" required placeholder="Descrição da Profissão">
                            {{ old('description', $profession->description ?? '') }}
                        </x-form.textarea>
                        <x-form.input-error :messages="$errors->get('description')"/>
                    </div>

                    <!-- Botão de Envio -->
                    <div>
                        @if (isset($profession))
                            <x-button.btn-primary type="submit" class="w-full">Atualiza Profissão</x-button.btn-primary>
                        @else
                            <x-button.btn-primary type="submit" class="w-full">Cadastra Profissão</x-button.btn-primary>
                        @endif
                    </div>

                </form>

            </div>
        </div>
    </div>
    
</x-app-layout>
