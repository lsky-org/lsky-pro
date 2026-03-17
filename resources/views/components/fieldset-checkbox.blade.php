<div class="flex items-center h-5 space-x-2 mr-4">
    <input type="checkbox" {{ $attributes->merge(['name' => $name, 'class' => 'focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded']) }}/>
    <label {{ isset($id) ? "for={$id}" : '' }} class="font-medium text-sm text-gray-700">{{ $slot }}</label>
</div>
