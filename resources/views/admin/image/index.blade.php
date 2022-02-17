@section('title', '图片管理')

<x-app-layout>
    <div>
        @if($images->isNotEmpty())
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-8 2xl:grid-cols-10">
                @foreach($images as $image)
                <div class="relative flex items-center justify-center overflow-hidden">
                    <img class="h-20 object-cover" src="{{ $image->thumb_url }}">
                </div>
                @endforeach
            </div>
            {{ $images->links() }}
        @else
            <x-no-data message="这里还是空的～" />
        @endif
    </div>

    @push('scripts')
        <script>

        </script>
    @endpush
</x-app-layout>
