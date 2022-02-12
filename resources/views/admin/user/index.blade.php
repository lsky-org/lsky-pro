@section('title', '用户管理')

<x-app-layout>
    <div class="my-6 md:my-9">
        <form id="search-form" action="{{ route('admin.users') }}" method="get">
            <div class="mb-3 flex justify-between">
                <select name="status" class="text-sm rounded-md bg-white border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" onchange="$('#search-form').submit()">
                    @foreach($statuses as $key => $status)
                        <option value="{{ $key }}" {{ request('status', -1) == $key ? 'selected' : '' }}>{{ $status }}</option>
                    @endforeach
                </select>
                <input class="px-2 text-sm rounded-md bg-white border-transparent focus:border-gray-500 focus:bg-white focus:ring-0" name="keywords" placeholder="输入关键字回车搜索..." value="{{ request('keywords') }}" />
            </div>
        </form>

        <x-table :columns="['ID', '邮箱', '名称', '角色组', '总容量', '剩余容量', '图片数量', '相册数量', '状态', '操作']">
            @foreach($users as $user)
            <tr data-id="{{ $user->id }}">
                <td class="px-6 py-4 whitespace-nowrap">{{ $user->id }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="rounded-md bg-sky-500 text-sm text-white py-1 px-4">
                        {{ $user->group->name ?? '-' }}
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">{{ \App\Utils::formatSize($user->capacity * 1024) }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ \App\Utils::formatSize(($user->capacity - $user->images_sum_size) * 1024) }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $user->image_num }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $user->album_num }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $user->status ? '正常' : '冻结' }}</td>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium space-x-2">
                    <a href="{{ route('admin.user.edit', ['id' => $user->id]) }}" class="text-indigo-600 hover:text-indigo-900">编辑</a>
                    @if(Auth::user()->id != $user->id)
                        <a href="javascript:void(0)" data-operate="delete" class="text-red-600 hover:text-red-900">删除</a>
                    @endif
                </td>
            </tr>
            @endforeach
        </x-table>
        @if($users->isEmpty())
            <x-no-data message="没有找到任何用户"/>
        @else
            <div class="mt-4">
                {{ $users->links() }}
            </div>
        @endif
    </div>

    @push('scripts')
        <script>
            $('[data-operate="delete"]').click(function () {
                Swal.fire({
                    title: `确认删除用户【${$(this).closest('tr').find('td.name').text()}】吗?`,
                    text: "⚠️注意，删除后不可恢复，且该用户的图片将会变成游客身份！",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: '确认删除',
                }).then((result) => {
                    if (result.isConfirmed) {
                        let id = $(this).closest('tr').data('id');
                        axios.delete(`/admin/users/${id}`).then(response => {
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
