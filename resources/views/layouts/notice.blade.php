@if(filled($_is_notice ?? null))
    <button type="button" class="header-action focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="open-notice" aria-expanded="false" aria-haspopup="true">
        <span class="header-action-icon"><i class="fas fa-envelope"></i></span>
        <span class="header-action-text">公告</span>
    </button>
    @push('scripts')
        <script>
            $('#open-notice').click(function () {
                openNotice();
            });
        </script>
    @endpush
@endif
