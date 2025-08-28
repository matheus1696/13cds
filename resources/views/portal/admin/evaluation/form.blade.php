<x-app-layout>
    <x-slot name="header">
        @if (isset($evaluation))
            <x-header.title title="{{ __('Cadastro de Avaliação do Curso') }}" />
        @else
            <x-header.title title="{{ __('Alteração de Avaliação do Curso') }}" />
        @endif
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg px-6">

                <form method="POST" action="{{ isset($evaluation) ? route('evaluations.update', $evaluation->id) : route('evaluations.store') }}" class="space-y-6 mb-8">
                    @isset($evaluation) @method('PUT') @endisset
                    @csrf
                    <!-- Title -->
                    <div class="mt-4">
                        <x-form.input-label for="title" :value="__('Title')" />
                        <x-form.input id="title" type="text" name="title" :value="old('title', $evaluation->title ?? '')" required autofocus placeholder="Título da Atividade"/>
                        <x-form.input-error :messages="$errors->get('title')"/>
                    </div>
                    
                    <!-- Description -->
                    <div class="mt-4">
                        <x-form.input-label for="description" :value="__('Description')" />
                        <x-form.textarea id="description" name="description" required placeholder="Descrição da Atividade">
                            {{ old('description', $evaluation->description ?? '') }}
                        </x-form.textarea>
                        <x-form.input-error :messages="$errors->get('description')"/>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <!-- Atividade Presencial -->
                        <div class="mb-4">
                            <x-form.input-label for="presential_activity_id" :value="__('Presential Activity')" />
                            <x-form.select name="presential_activity_id">                                
                                @foreach ($presentialActivities as $presentialActivity)
                                    <option value="{{ $presentialActivity->id }}" @isset($evaluation) {{ $evaluation->presential_activity_id === $presentialActivity->id ? 'selected' : '' }} @endisset>
                                        {{ $presentialActivity->title }}
                                    </option>
                                @endforeach
                            </x-form.select>
                            <x-form.input-error :messages="$errors->get('presential_activity_id')" class="mt-2" />
                        </div>

                        <!-- Fichamento -->
                        <div class="mb-4">
                            <x-form.input-label for="reflection_id" :value="__('Reflection')" />
                            <x-form.select name="reflection_id">                                
                                @foreach ($reflections as $reflection)
                                    <option value="{{ $reflection->id }}" @isset($evaluation) {{ $evaluation->reflection_id === $reflection->id ? 'selected' : '' }} @endisset>
                                        {{ $reflection->title }}
                                    </option>
                                @endforeach
                            </x-form.select>
                            <x-form.input-error :messages="$errors->get('reflection_id')" class="mt-2" />
                        </div>

                        <!-- Atividade Pratica -->
                        <div class="mb-4">
                            <x-form.input-label for="exercise_id" :value="__('Exercise')" />
                            <x-form.select name="exercise_id">                                
                                @foreach ($exercises as $exercise)
                                    <option value="{{ $exercise->id }}" @isset($evaluation) {{ $evaluation->exercise_id === $exercise->id ? 'selected' : '' }} @endisset>
                                        {{ $exercise->title }}
                                    </option>
                                @endforeach
                            </x-form.select>
                            <x-form.input-error :messages="$errors->get('exercise_id')" class="mt-2" />
                        </div>
                    </div>

                    @isset($evaluation)
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <!-- Data de Início -->
                            <div class="mb-4">
                                <x-form.input-label for="start_date" :value="__('Start Date')" />
                                <x-form.input id="start_date" type="date" name="start_date" :value="old('start_date', $evaluation->start_date ?? '')" required />
                                <x-form.input-error :messages="$errors->get('start_date')" class="mt-2" />
                            </div>

                            <!-- Data de Fim -->
                            <div class="mb-4">
                                <x-form.input-label for="end_date" :value="__('End Date')" />
                                <x-form.input id="end_date" type="date" name="end_date" :value="old('end_date', $evaluation->end_date ?? '')" required />
                                <x-form.input-error :messages="$errors->get('end_date')" class="mt-2" />
                            </div>
                        </div>
                    @endisset

                    <!-- Botão de Envio -->
                    <div>
                        @if (isset($evaluation))
                            <x-button.btn-primary type="submit" class="w-full">Atualiza Avaliação</x-button.btn-primary>
                        @else
                            <x-button.btn-primary type="submit" class="w-full">Cadastra Nova Avaliação</x-button.btn-primary>
                        @endif
                    </div>

                </form>

            </div>
        </div>
    </div>
    
</x-app-layout>
