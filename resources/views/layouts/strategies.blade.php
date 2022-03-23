<!-- Strategies dropdown -->
<x-dropdown>
    <x-slot name="trigger">
        <button type="button" class="bg-gray-800 flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
            <span class="sr-only">Open strategies menu</span>
            <div class="h-8 w-8 rounded-full flex items-center justify-center bg-white">
                <i class="fas fa-server text-gray-900"></i>
            </div>
            <span class="px-2 sm:block hidden" id="strategy-selected" data-id="0">获取中...</span>
        </button>
    </x-slot>

        <x-slot name="content">
            <div id="strategies">
            @foreach($_group->strategies as $strategy)
                <x-dropdown-link data-id="{{ $strategy->id }}" href="javascript:void(0)" @click="open = false">{{ $strategy->name }}</x-dropdown-link>
            @endforeach
            </div>
        </x-slot>
</x-dropdown>

@push('scripts')
    <script>
        let defaultStrategy = {{ Auth::check() ? Auth::user()->configs->get('default_strategy') : 0 }} || (localStorage.getItem('strategy') || 0);
        let setStrategy = function (id) {
            let isSelected = false;
            $('#strategies a').each(function () {
                if (parseInt($(this).data('id')) === parseInt(id)) {
                    localStorage.setItem('strategy', id)
                    $('#strategy-selected').text($(this).text()).data('id', id);
                    isSelected = true;

                    @if(Auth::check())
                        if (defaultStrategy != id) {
                            axios.put('{{ route('settings.strategy.set') }}', {id: id}).then(response => {
                                if (! response.data.status) {
                                    toastr.error(response.data.message);
                                }
                            });
                        }
                    @endif
                }
            });
            if (! isSelected) {
                let $first = $('#strategies a:first-child');
                localStorage.setItem('strategy', $first.data('id'))
                $('#strategy-selected').text($first.text()).data('id', $first.data('id'));
            }
        };

        setStrategy(defaultStrategy);

        $('#strategies a').click(function () {
            setStrategy($(this).data('id'))
        });
    </script>
@endpush
