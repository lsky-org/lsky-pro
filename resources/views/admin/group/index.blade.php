@section('title', '角色组管理')

<x-app-layout>
    <div class="my-6 md:my-10">
        <div class="mb-3 flex justify-between w-full">
            <x-button type="button" onclick="window.location.href = '{{ route('admin.group.create') }}'">创建角色组</x-button>
            <form class="h-9.5" action="{{ route('admin.groups') }}" method="get">
                <x-input class="text-sm h-full px-2" name="keywords" placeholder="输入名称回车搜索..." value="{{ request('keywords') }}" />
            </form>
        </div>

        <x-table :columns="['ID', '名称', '是否默认', '图片审核', '原图保护', '水印' ,'用户数量', '策略数量', '操作']">
            <tr data-id="0">
                <td class="px-6 py-4 whitespace-nowrap">-</td>
                <td class="px-6 py-4 whitespace-nowrap name">系统默认组</td>
                <td class="px-6 py-4 whitespace-nowrap">-</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $default['is_enable_scan'] ? 'text-green-800' : 'text-red-800' }}">
                        <i class="text-lg fas fa-{{ $default['is_enable_scan'] ? 'check-circle' : 'times-circle' }}"></i>
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $default['is_enable_original_protection'] ? 'text-green-800' : 'text-red-800' }}">
                        <i class="text-lg fas fa-{{ $default['is_enable_original_protection'] ? 'check-circle' : 'times-circle' }}"></i>
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $default['is_enable_watermark'] ? 'text-green-800' : 'text-red-800' }}">
                        <i class="text-lg fas fa-{{ $default['is_enable_watermark'] ? 'check-circle' : 'times-circle' }}"></i>
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">-</td>
                <td class="px-6 py-4 whitespace-nowrap">-</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                    <a href="{{ route('admin.group.edit', ['id' => 0]) }}" class="text-indigo-600 hover:text-indigo-900">编辑</a>
                </td>
            </tr>
            @foreach($groups as $group)
            <tr data-id="{{ $group->id }}">
                <td class="px-6 py-4 whitespace-nowrap">{{ $group->id }}</td>
                <td class="px-6 py-4 whitespace-nowrap name">{{ $group->name }}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $group->is_default ? 'text-green-800' : 'text-red-800' }}">
                        <i class="text-lg fas fa-{{ $group->is_default ? 'check-circle' : 'times-circle' }}"></i>
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $group->configs['is_enable_scan'] ? 'text-green-800' : 'text-red-800' }}">
                        <i class="text-lg fas fa-{{ $group->configs['is_enable_scan'] ? 'check-circle' : 'times-circle' }}"></i>
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $group->configs['is_enable_original_protection'] ? 'text-green-800' : 'text-red-800' }}">
                        <i class="text-lg fas fa-{{ $group->configs['is_enable_original_protection'] ? 'check-circle' : 'times-circle' }}"></i>
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $group->configs['is_enable_watermark'] ? 'text-green-800' : 'text-red-800' }}">
                        <i class="text-lg fas fa-{{ $group->configs['is_enable_watermark'] ? 'check-circle' : 'times-circle' }}"></i>
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $group->users_count }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $group->strategies_count }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                    <a href="{{ route('admin.group.edit', ['id' => $group->id]) }}" class="text-indigo-600 hover:text-indigo-900">编辑</a>
                    <a href="javascript:void(0)" data-operate="delete" class="text-red-600 hover:text-red-900">删除</a>
                </td>
            </tr>
            @endforeach
        </x-table>
        @if($groups->isEmpty())
            <x-no-data message="没有找到任何角色组"/>
        @else
            <div class="mt-4">
                {{ $groups->links() }}
            </div>
        @endif
    </div>

    @push('scripts')
        <script>
            $('[data-operate="delete"]').click(function () {
                Swal.fire({
                    title: `确认删除角色组【${$(this).closest('tr').find('td.name').text()}】吗?`,
                    text: "⚠️注意，删除该角色组后，该角色组下属的用户会被重置为系统默认组。",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '确认删除',
                }).then((result) => {
                    if (result.isConfirmed) {
                        let id = $(this).closest('tr').data('id');
                        axios.delete(`/admin/groups/${id}`).then(response => {
                            if (response.data.status) {
                                history.go(0);
                            } else {
                                toastr.error(response.data.message);
                            }
                        });
                    }
                })
            });
        </script>
    @endpush

</x-app-layout>
