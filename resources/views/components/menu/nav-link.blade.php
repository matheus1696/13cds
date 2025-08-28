@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex text-sm font-normal leading-5 text-[#0E406B] transition-all duration-300 ease-in-out pl-2'
            : 'inline-flex text-sm font-normal leading-5 text-gray-400 hover:text-blue-500 transition-all duration-300 ease-in-out hover:pl-2';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
