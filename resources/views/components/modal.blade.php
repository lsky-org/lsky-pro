@props(['id' => 'modal'])

<div {{ $attributes->merge(['id' => $id, 'class' => "fixed z-10 inset-0 overflow-y-auto"]) }} role="dialog" aria-modal="true" x-data x-cloak x-show="$store.modal.isOpen('{{ $id }}')">
    <div class="flex min-h-screen text-center md:block md:px-2 lg:px-4" style="font-size: 0">
        <div x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="transform opacity-0"
             x-transition:enter-end="transform opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="transform opacity-100"
             x-transition:leave-end="transform opacity-0"
             x-show="$store.modal.isOpen('{{ $id }}')"
             @click="$store.modal.close('{{ $id }}')"
             class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity md:block"
             aria-hidden="true"
        >
        </div>
        <span class="hidden md:inline-block md:align-middle md:h-screen" aria-hidden="true">&#8203;</span>

        <div x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="transform opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
             x-transition:enter-end="transform opacity-100 translate-y-0 md:scale-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="transform opacity-100 translate-y-0 md:scale-100"
             x-transition:leave-end="transform opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
             x-show="$store.modal.isOpen('{{ $id }}')"
             class="flex text-base text-left transform transition w-full md:inline-block md:max-w-2xl md:px-4 md:my-8 md:align-middle lg:max-w-4xl"
        >
            <div class="w-full relative flex bg-white px-4 pt-14 pb-8 overflow-hidden shadow-lg sm:px-6 sm:pt-8 md:p-6 lg:p-8 md:rounded-sm">
                <button type="button" class="absolute top-2 right-2 text-gray-400 hover:text-gray-500 sm:top-4 sm:right-4 md:top-3 md:right-3 lg:top-4 lg:right-4" @click="$store.modal.close('{{ $id }}')">
                    <span class="sr-only">Close</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <div class="flex items-center justify-center h-24 w-full" x-show="$store.modal.isLoading('{{ $id }}')">
                    <x-loading-spin />
                </div>

                <div class="w-full" x-show="! $store.modal.isLoading('{{ $id }}')">
                    {{ $slot ?? '' }}
                </div>
            </div>
        </div>
    </div>
</div>
