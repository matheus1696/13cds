@props(['name'])

<div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
    <div class="flex items-center gap-3">
        <input type="radio" id="{{ $name }}_elevado" name="{{ $name }}" value="2" class="hidden peer" @checked(old($name) == '2')/>
        <label for="{{ $name }}_elevado"
            class="flex items-center justify-center w-full px-3 py-1 text-sm font-medium text-gray-700 border rounded-lg cursor-pointer
                   peer-checked:bg-blue-600 peer-checked:text-white peer-checked:border-blue-600 hover:border-blue-600">
            Elevado
        </label>
    </div>

    <div class="flex items-center gap-3">
        <input
            type="radio" id="{{ $name }}_satisfatorio"name="{{ $name }}" value="1" class="hidden peer" @checked(old($name) == '1')/>
        <label for="{{ $name }}_satisfatorio"
            class="flex items-center justify-center w-full px-3 py-1 text-sm font-medium text-gray-700 border rounded-lg cursor-pointer
                   peer-checked:bg-blue-600 peer-checked:text-white peer-checked:border-blue-600 hover:border-blue-600">
            Satisfatório
        </label>
    </div>

    <div class="flex items-center gap-3">
        <input type="radio" id="{{ $name }}_evolucao" name="{{ $name }}" value="0" class="hidden peer" @checked(old($name) == '0')/>
        <label for="{{ $name }}_evolucao"
            class="flex items-center justify-center w-full px-3 py-1 text-sm font-medium text-gray-700 border rounded-lg cursor-pointer
                   peer-checked:bg-blue-600 peer-checked:text-white peer-checked:border-blue-600 hover:border-blue-600">
            Em Evolução
        </label>
    </div>
</div>

@error($name)
    <span class="pl-1 text-xs text-blue-600">{{ $message }}</span>
@enderror
