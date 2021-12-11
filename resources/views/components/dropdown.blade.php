<div class="ml-3 relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false" x-cloak>
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <div x-show="open"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="transform opacity-0 scale-95"
             x-transition:enter-end="transform opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-75"
             x-transition:leave-start="transform opacity-100 scale-100"
             x-transition:leave-end="transform opacity-0 scale-95"
             class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
             role="menu"
             aria-orientation="vertical"
             aria-labelledby="user-menu-button"
             tabindex="-1"
             style="display: none"
        >
            {{ $content }}
        </div>
    </form>
</div>
