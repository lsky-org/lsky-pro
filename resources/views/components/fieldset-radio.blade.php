<div class="flex items-center mr-4">
    <input type="radio" {{ $attributes->merge(['id' => $id, 'name' => $name, 'class' => 'focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300', 'value' => $value ?? 0]) }}>
    <label for="{{ $id }}" class="ml-3 block text-sm font-medium text-gray-700">{{ $slot }}</label>
</div>
