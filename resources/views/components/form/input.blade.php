@props(['disabled' => false])

<input 
    @disabled($disabled)
    {{ $attributes->merge([
        'class' => 'w-full text-sm border border-gray-300 rounded-md shadow-sm transition-all duration-500 text-gray-900 placeholder-gray-400 ' . ($disabled ? 'opacity-75 bg-slate-300 cursor-not-allowed' : '')
    ]) }}
>