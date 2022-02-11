@section('title', '画廊')

<x-app-layout>
    <div class="max-w-2xl p-4 lg:max-w-7xl">
        <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 md:grid-cols-4 xl:grid-cols-6 lg:grid-cols-8 xl:gap-x-8">
            @foreach(\App\Models\Image::all() as $image)
                <div class="flex flex-col bg-white rounded-md h-56 overflow-hidden">
                    <div class="flex justify-center items-center grow p-2 bg-auto bg-no-repeat bg-center bg-cover">
                        <img class="block object-cover" src="{{ $image->thumb_url }}">
                    </div>
                    <div class="flex">
                        11
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @push('scripts')
        <script>

        </script>
    @endpush
</x-app-layout>
