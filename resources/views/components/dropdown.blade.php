@props(['classes' => ['left' => 'origin-top-right right-0', 'right' => 'origin-top-left left-0'], 'direction' => 'left'])

<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false" x-cloak>
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="transform opacity-0 scale-95"
         x-transition:enter-end="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95"
         class="absolute z-[9] {{ $classes[$direction] }} mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
         role="menu"
         aria-orientation="vertical"
         aria-labelledby="user-menu-button"
         tabindex="-1"
         style="display: none"
    >
        {{ $content }}
    </div>
</div>
