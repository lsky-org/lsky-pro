@section('title', '接口')

<x-app-layout>
    <div class="my-6 md:my-9">
        {{ Auth::user()->tokens }}
    </div>

    @push('scripts')

    @endpush
</x-app-layout>
