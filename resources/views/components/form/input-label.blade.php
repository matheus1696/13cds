@props(['value'])

<label {{ $attributes->merge(['class' => 'pl-1 pb-1 block font-semibold text-sm text-gray-600']) }}>
    {{ $value ?? $slot }}
</label>
