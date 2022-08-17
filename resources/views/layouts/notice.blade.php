@if($_is_notice)
    <button type="button" class="bg-gray-800 flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="open-notice" aria-expanded="false" aria-haspopup="true">
        <div class="h-8 w-8 rounded-full flex items-center justify-center bg-white">
            <i class="fas fa-envelope text-gray-900"></i>
        </div>
        <span class="px-2 sm:block hidden">公告</span>
    </button>
    @push('scripts')
        <script>
            $('#open-notice').click(function () {
                openNotice();
            });
        </script>
    @endpush
@endif
