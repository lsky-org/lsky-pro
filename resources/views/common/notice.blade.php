@if(\App\Utils::config(\App\Enums\ConfigKey::SiteNotice))
    <x-modal>
        <div class="markdown-body">
            {!! (new Parsedown())->parse(\App\Utils::config(\App\Enums\ConfigKey::SiteNotice)) !!}
        </div>
    </x-modal>

    @push('scripts')
        <script>
            if (! sessionStorage.getItem('noticed')) {
                Alpine.store('modal').open = true;
                sessionStorage.setItem('noticed', '1');
            }
        </script>
    @endpush
@endif
