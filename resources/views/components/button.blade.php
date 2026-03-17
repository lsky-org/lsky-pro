<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex justify-center py-2 px-4 text-sm font-medium rounded-md text-gray-600 bg-black/10 hover:bg-black/20 hover:text-gray-700']) }}>
    {{ $slot }}
</button>
