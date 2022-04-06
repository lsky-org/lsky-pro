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

        <x-table :columns="['ID', '用户名', '邮箱', '角色组', '总容量', '剩余容量', '图片数量', '相册数量', '状态', '操作']">
            @foreach($users as $user)
            <tr data-id="{{ $user->id }}" data-json='{{ $user->toJson() }}'>
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
                    <a href="javascript:void(0)" data-operate="detail" class="text-teal-600 hover:text-teal-900">详细</a>
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

    <x-modal id="user-modal">
        <div id="modal-content"></div>
    </x-modal>

    <script type="text/html" id="user-tpl">
        <div class="flex w-full items-center justify-center py-4">
            <img class="rounded-full h-24 w-24" src="__avatar__">
        </div>
        <div class="relative rounded-md bg-white mb-8 overflow-hidden">
            <dl>
                <div class="bg-white px-2 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">用户名</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 truncate">__name__</dd>
                </div>
            </dl>
            <dl>
                <div class="bg-gray-50 px-2 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">邮箱</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 truncate">__email__</dd>
                </div>
            </dl>
            <dl>
                <div class="bg-white px-2 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">总容量</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 truncate">__capacity__</dd>
                </div>
            </dl>
            <dl>
                <div class="bg-gray-50 px-2 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">剩余容量</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 truncate">__surplus_capacity__</dd>
                </div>
            </dl>
            <dl>
                <div class="bg-white px-2 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">图片数量</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 truncate">__image_num__</dd>
                </div>
            </dl>
            <dl>
                <div class="bg-gray-50 px-2 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">相册数量</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 truncate">__album_num__</dd>
                </div>
            </dl>
            <dl>
                <div class="bg-white px-2 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">注册 IP</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 truncate">__registered_ip__</dd>
                </div>
            </dl>
            <dl>
                <div class="bg-gray-50 px-2 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">邮箱验证时间</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 truncate">__email_verified_at__</dd>
                </div>
            </dl>
            <dl>
                <div class="bg-white px-2 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">注册时间</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 truncate">__created_at__</dd>
                </div>
            </dl>
        </div>
    </script>

    @push('scripts')
        <script>
            let modal = Alpine.store('modal');

            $('[data-operate="detail"]').click(function () {
                let user = $(this).closest('tr').data('json');
                let html = $('#user-tpl').html()
                    .replace(/__avatar__/g, user.avatar)
                    .replace(/__name__/g, user.name)
                    .replace(/__email__/g, user.email)
                    .replace(/__capacity__/g, utils.formatSize(user.capacity * 1024))
                    .replace(/__surplus_capacity__/g, utils.formatSize((user.capacity - user.images_sum_size) * 1024))
                    .replace(/__image_num__/g, user.image_num)
                    .replace(/__album_num__/g, user.album_num)
                    .replace(/__registered_ip__/g, user.registered_ip || '-')
                    .replace(/__status__/g, user.status === 1 ? '<span class="text-green-500">正常</span>' : '<span class="text-red-500">冻结</span>')
                    .replace(/__email_verified_at__/g, user.email_verified_at || '-')
                    .replace(/__created_at__/g, user.created_at);

                $('#modal-content').html(html);

                modal.open('user-modal')
            });
            $('[data-operate="delete"]').click(function () {
                Swal.fire({
                    title: `确认删除用户【${$(this).closest('tr').data('json').name}】吗?`,
                    text: "⚠️注意，删除后不可恢复，且该用户的图片将会变成游客身份！",
                    icon: 'warning',
                    showCancelButton: true,
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
