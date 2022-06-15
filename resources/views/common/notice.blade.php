@if(strip_tags(\App\Utils::config(\App\Enums\ConfigKey::SiteNotice)))

    <x-modal id="notice-modal">
        <div class="markdown-body">
            {!! (new Parsedown())->parse(\App\Utils::config(\App\Enums\ConfigKey::SiteNotice)) !!}
        </div>
        <div class="mt-4 w-full text-right">
            <x-button type="button" @click="$store.modal.close('notice-modal');">OK</x-button>
        </div>
    </x-modal>

    @push('scripts')
        <script>
            let noticeHash = "{{ md5(\App\Utils::config(\App\Enums\ConfigKey::SiteNotice)) }}";
            if (localStorage.getItem('notice-hash') !== noticeHash) {
                setTimeout(function () {
                    Alpine.store('modal').open('notice-modal');
                    localStorage.setItem('notice-hash', noticeHash);
                }, 1000)
            }
        </script>
    @endpush
@endif
