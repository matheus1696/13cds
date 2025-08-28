<a {{ $attributes->merge([
    'class' => 'px-5 py-2 rounded-md bg-gray-600 text-white text-xs font-medium hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-300 transition duration-200 active:scale-95'
]) }}>
    {{ $slot }}
</a>