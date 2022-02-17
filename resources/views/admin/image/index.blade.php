@section('title', '图片管理')

<x-app-layout>
    <x-modal>
        test
    </x-modal>

    <div class="p-2">
        @if($images->isNotEmpty())
            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-6 2xl:grid-cols-8 gap-2">
                @foreach($images as $image)
                <div class="relative flex items-center justify-center overflow-hidden rounded-md cursor-pointer">
                    <img class="w-full h-36 object-cover" src="{{ $image->thumb_url }}">
                </div>
                @endforeach
            </div>
            <div class="mt-2">
                {{ $images->links() }}
            </div>
        @else
            <x-no-data message="这里还是空的～" />
        @endif
    </div>

    @push('scripts')
        <script>
            let modal = Alpine.store('modal');
            $('img').click(function () {
                modal.loading = true
                modal.open = true;
                setTimeout(() => {
                    modal.loading = false
                }, 2000)
            });
        </script>
    @endpush
</x-app-layout>
