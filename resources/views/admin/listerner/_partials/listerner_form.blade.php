<div class="grid grid-cols-1 lg:grid-cols-6 gap-5 mt-4">
    <!-- CPF -->
    <div>
        <x-form.input-label for="cpf" :value="__('CPF')" />
        <x-form.input id="cpf" name="cpf" type="text" :value="old('cpf', $listerner->cpf ?? '')" autocomplete="off" onkeyup="handleCPF(event)" maxlength="14" minlength="14" placeholder="XXX.XXX.XXX-XX"
        />
        <x-form.input-error :messages="$errors->get('cpf')"/>
    </div>

    <!-- Nome -->
    <div class="lg:col-span-3">
        <x-form.input-label for="name" :value="__('Nome')" />
        <x-form.input id="name" type="text" name="name" :value="old('name', $listerner->name ?? '')" required autofocus placeholder="Fulano da Silva Mota"/>
        <x-form.input-error :messages="$errors->get('name')"/>
    </div>

    <!-- Contact -->
    <div>
        <x-form.input-label for="contact" :value="__('Contato')" />
        <x-form.input type="text" id="contact" name="contact" :value="old('contact', $listerner->contact ?? '')" placeholder="(81) 99999-9999" required onkeyup="handlePhone(event)" maxlength="15" minlength="15" />
        <x-form.input-error :messages="$errors->get('contact')" class="mt-2" />
    </div>
    
    <!-- É Whatsapp -->
    <div>
        <x-form.input-label for="is_whatsapp" :value="__('É WhatsApp?')" />
        <div class="flex items-center gap-4 mt-2">
            <label class="flex items-center gap-2">
                <input type="radio" name="is_whatsapp" value="1"
                    {{ old('is_whatsapp', $listerner->is_whatsapp ?? '') == 1 ? 'checked' : '' }}>
                <span>Sim</span>
            </label>
            <label class="flex items-center gap-2">
                <input type="radio" name="is_whatsapp" value="0"
                    {{ old('is_whatsapp', $listerner->is_whatsapp ?? '') == 0 ? 'checked' : '' }}>
                <span>Não</span>
            </label>
        </div>
        <x-form.input-error :messages="$errors->get('is_whatsapp')"/>
    </div>
</div>