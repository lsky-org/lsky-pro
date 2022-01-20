@section('title', '角色组管理')

<x-app-layout>
    <div class="my-6 md:my-10">
        <div class="mb-3 flex justify-between w-full">
            <x-button type="button" onclick="window.location.href = '{{ route('admin.group.create') }}'">创建角色组</x-button>
            <form class="h-9.5" action="{{ route('admin.groups') }}" method="get">
                <x-input class="text-sm h-full px-2" name="keywords" placeholder="输入名称回车搜索..." value="{{ request('keywords') }}" />
            </form>
        </div>

        <x-table :columns="['ID', '名称', '是否默认', '用户数量', '策略数量', '操作']">
            @foreach($groups as $group)
            <tr data-id="{{ $group->id }}">
                <td class="px-6 py-4 whitespace-nowrap">{{ $group->id }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $group->name }}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $group->is_default ? 'text-green-800' : 'text-red-800' }}">
                        <i class="text-lg fas fa-{{ $group->is_default ? 'check-circle' : 'times-circle' }}"></i>
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
        @endif
        <div class="mt-4">
            {{ $groups->links() }}
        </div>
    </div>

    @push('scripts')
        <script>
            $('[data-operate="del"]').click(function () {
            });
        </script>
    @endpush

</x-app-layout>
