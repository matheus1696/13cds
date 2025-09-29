<a {{ $attributes->merge([
    'class' => 'px-5 py-2 rounded-md bg-green-700 text-white text-xs font-medium hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-green-300 transition duration-200 active:scale-95'
]) }}>
    {{ $slot }}
</a>