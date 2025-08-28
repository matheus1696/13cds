@props([
    'id',
    'name',
    'value',
    'label',
    'checked' => false,
])

<div class="flex items-center gap-3">
    <input
        type="radio"
        id="{{ $id }}"
        name="{{ $name }}"
        value="{{ $value }}"
        class="hidden peer"
        @checked($checked)
    />

    <label
        for="{{ $id }}"
        {{ $attributes->merge([
            'class' =>
                'flex items-center justify-center w-full px-3 py-1 text-sm font-medium text-gray-700 border rounded-lg cursor-pointer ' .
                'peer-checked:bg-blue-600 peer-checked:text-white peer-checked:border-blue-600 hover:border-blue-600'
        ]) }}
    >
        {{ $label }}
    </label>
</div>

