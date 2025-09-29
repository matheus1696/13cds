<div class="grid grid-cols-1 lg:grid-cols-2 gap-5 mt-4">
    <!-- Título -->
    <div class="col-span-2">
        <x-form.input-label for="title" :value="__('Título da Proposta')" />
        <x-form.input id="title" type="text" name="title"
            :value="old('title', $proposed->title ?? '')"
            required autofocus placeholder="Resumo da proposta" />
        <x-form.input-error :messages="$errors->get('title')" />
    </div>

    <!-- Origem -->
    <div>
        <x-form.input-label for="origin" :value="__('Origem')" />
        <x-form.input id="origin" type="text" name="origin"
            :value="old('origin', $proposed->origin ?? '')"
            placeholder="Pré-conferência, Oficina, etc." />
        <x-form.input-error :messages="$errors->get('origin')" />
    </div>

    <!-- Votos -->
    <div>
        <x-form.input-label for="votes_count" :value="__('Qtd. de Votos')" />
        <x-form.input id="votes_count" type="number" min="0" name="votes_count"
            :value="old('votes_count', $proposed->votes_count ?? 0)" />
        <x-form.input-error :messages="$errors->get('votes_count')" />
    </div>

    <!-- Tipo -->
    <div class="col-span-2">
        <x-form.input-label for="type" :value="__('Status da Proposta')" />
        <select id="type" name="type"
            class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm">
            <option value="Não Eleita" {{ old('type', $proposed->type ?? '') == 'Não Eleita' ? 'selected' : '' }}>Não Eleita</option>
            <option value="Eleita" {{ old('type', $proposed->type ?? '') == 'Eleita' ? 'selected' : '' }}>Eleita</option>
        </select>
        <x-form.input-error :messages="$errors->get('type')" />
    </div>

    <!-- Descrição -->
    <div class="col-span-2">
        <x-form.input-label for="description" :value="__('Descrição Completa')" />
        <textarea id="description" name="description" rows="6"
            class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm"
            required>{{ old('description', $proposed->description ?? '') }}</textarea>
        <x-form.input-error :messages="$errors->get('description')" />
    </div>
</div>
