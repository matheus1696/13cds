@props(['active', 'title'])

@php
$classes = ($active ?? false)
            ? 'inline-flex pt-1 border-b-2 border-green-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-green-700 transition duration-150 ease-in-out'
            : 'inline-flex pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<div x-data="{ show: false, timeout: null }" {{ $attributes->merge(['class' => $classes]) }}>
    <button class="px-4" @mouseenter="timeout = setTimeout(() => show = true, 150)" @mouseleave="clearTimeout(timeout); timeout = setTimeout(() => show = false, 150)">
        {{ $title }}
    </button>

    <div x-show="show" x-transition:enter="transition ease-out duration-300" x-transition:leave="transition ease-in duration-200"
         class="min-h-60 bg-white absolute top-20 left-0 w-full px-6 py-4 mt-2 rounded-lg shadow-lg z-50"
         @mouseenter="clearTimeout(timeout)" @mouseleave="timeout = setTimeout(() => show = false, 150)">
        <div class="max-w-7xl grid grid-cols-5 gap-5">
            {{ $slot }}
        </div>
    </div>
</div>
