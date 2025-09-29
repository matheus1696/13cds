<div class="grid grid-cols-1 lg:grid-cols-6 gap-5 mt-4">
    <!-- CPF -->
    <div>
        <x-form.input-label for="cpf" :value="__('CPF')" />
        <x-form.input id="cpf" name="cpf" type="text" :value="old('cpf', $delegate->cpf ?? '')" autocomplete="off" onkeyup="handleCPF(event)" maxlength="14" minlength="14" placeholder="XXX.XXX.XXX-XX"
        />
        <x-form.input-error :messages="$errors->get('cpf')"/>
    </div>

    <!-- Nome -->
    <div class="lg:col-span-3">
        <x-form.input-label for="name" :value="__('Nome')" />
        <x-form.input id="name" type="text" name="name" :value="old('name', $delegate->name ?? '')" required autofocus placeholder="Fulano da Silva Mota"/>
        <x-form.input-error :messages="$errors->get('name')"/>
    </div>

    <!-- Contact -->
    <div>
        <x-form.input-label for="contact" :value="__('Contato')" />
        <x-form.input type="text" id="contact" name="contact" :value="old('contact', $delegate->contact ?? '')" placeholder="(81) 99999-9999" required onkeyup="handlePhone(event)" maxlength="15" minlength="15" />
        <x-form.input-error :messages="$errors->get('contact')" class="mt-2" />
    </div>
    
    <!-- É Whatsapp -->
    <div>
        <x-form.input-label for="is_whatsapp" :value="__('É WhatsApp?')" />
        <div class="flex items-center gap-4 mt-2">
            <label class="flex items-center gap-2">
                <input type="radio" name="is_whatsapp" value="1"
                    {{ old('is_whatsapp', $delegate->is_whatsapp ?? '') == 1 ? 'checked' : '' }}>
                <span>Sim</span>
            </label>
            <label class="flex items-center gap-2">
                <input type="radio" name="is_whatsapp" value="0"
                    {{ old('is_whatsapp', $delegate->is_whatsapp ?? '') == 0 ? 'checked' : '' }}>
                <span>Não</span>
            </label>
        </div>
        <x-form.input-error :messages="$errors->get('is_whatsapp')"/>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-5 gap-5 mt-4">

    <!-- Segments -->
    <div>
        <x-form.input-label for="segment_id" :value="__('Segmento')" default="Selecione o segmento"/>
        <x-form.select id="segment_id" name="segment_id" :value="old('segment_id', $delegate->segment_id ?? '')" required>
            @foreach($segments as $segment)
                <option value="{{ $segment->id }}" {{ (old('segment_id', $delegate->segment_id ?? '') == $segment->id) ? 'selected' : '' }}>
                    {{ $segment->name }}
                </option>
            @endforeach
        </x-form.select>
        <x-form.input-error :messages="$errors->get('segment_id')" class="mt-2" />
    </div>

    <!-- Origem -->
    <div>
        <x-form.input-label for="origin" :value="__('Origem')" />
        <x-form.input id="origin" type="text" name="origin" :value="old('origin', $delegate->origin ?? '')"  placeholder="TGS1"/>
        <x-form.input-error :messages="$errors->get('origin')" />
    </div>

    <!-- Votes Count -->
    <div>
        <x-form.input-label for="votes_count" :value="__('Votos')" />
        <x-form.input id="votes_count" name="votes_count" type="number" min="0" :value="old('votes_count', $delegate->votes_count ?? 0)" placeholder="0"/>
        <x-form.input-error :messages="$errors->get('votes_count')" class="mt-2"/>
    </div>

    <!-- Type -->
    <div>
        <x-form.input-label for="type" :value="__('Tipo')" />
        <x-form.select id="type" name="type" required>
            <option value="Não Eleito" {{ old('type', $delegate->type ?? '') == 'Não Eleito' ? 'selected' : 'selected' }}>Não Eleito</option>
            <option value="Eleito" {{ old('type', $delegate->type ?? '') == 'Eleito' ? 'selected' : '' }}>Eleito</option>
            <option value="Suplente" {{ old('type', $delegate->type ?? '') == 'Suplente' ? 'selected' : '' }}>Suplente</option>
        </x-form.select>
        <x-form.input-error :messages="$errors->get('type')" class="mt-2"/>
    </div>    

    <!-- Participou da Conferência -->
    <div>
        <x-form.input-label :value="__('Participou da Conferência?')" />
        <div class="flex items-center gap-6 mt-2">
            <label class="flex items-center gap-2">
                <input type="radio" name="participated" value="1" 
                    {{ old('participated', $delegate->participated ?? '') == 1 ? 'checked' : '' }} />
                <span>Sim</span>
            </label>
            <label class="flex items-center gap-2">
                <input type="radio" name="participated" value="0" 
                    {{ old('participated', $delegate->participated ?? '') == 0 ? 'checked' : '' }} />
                <span>Não</span>
            </label>
        </div>
        <x-form.input-error :messages="$errors->get('participated')" class="mt-1" />
    </div>
</div>
