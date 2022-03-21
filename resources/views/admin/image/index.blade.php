@section('title', '图片管理')

<x-app-layout>
    <div class="p-2">
        <form class="w-full flex items-center justify-center py-3 md:py-5 lg:py-7" action="{{ route('admin.images') }}" method="get">
            <div class="w-full md:w-[70%] lg:w-[60%] flex flex-col">
                <input class="px-4 py-2 text-md rounded-md bg-white" name="keywords" placeholder="输入关键字回车搜索..." value="{{ request('keywords') }}" />
                <div class="w-full flex justify-end">
                    <a href="javascript:void(0)" id="grammar" class="inline-block mt-2 text-xs text-gray-600">高级搜索语法</a>
                </div>
            </div>
        </form>

        @if($images->isNotEmpty())
            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-6 2xl:grid-cols-8 gap-2">
                @foreach($images as $image)
                <div data-json='{{ $image->toJson() }}' class="item relative flex flex-col items-center justify-center overflow-hidden rounded-md cursor-pointer group">
                    <div class="flex absolute top-1 left-1 z-[1] space-x-1">
                        @if($image->is_unhealthy)
                            <span class="bg-red-500 text-white rounded-md text-sm px-1 py-0">违规</span>
                        @endif
                        @if($image->extension === 'gif')
                            <span class="bg-white rounded-md text-sm px-1 py-0">Gif</span>
                        @endif
                        @if($image->extension === 'mp4')
                            <span class="bg-white rounded-md text-sm px-1 py-0">mp4</span>
                        @endif
                        @if($image->extension === 'webm')
                            <span class="bg-white rounded-md text-sm px-1 py-0">webm</span>
                        @endif
                        @if($image->extension === 'psd')
                            <span class="bg-white rounded-md text-sm px-1 py-0">psd</span>
                        @endif
                        @if($image->extension === 'tif')
                            <span class="bg-white rounded-md text-sm px-1 py-0">tif</span>
                        @endif
                    </div>
                    @if($image->extension === 'mp4')
                    <video class="w-full h-36 object-cover transition-all group-hover:brightness-50" src="{{ $image->thumb_url }} " controls/>
                    @endif
                    @if($image->extension === 'webm')
                    <video class="w-full h-36 object-cover transition-all group-hover:brightness-50" src="{{ $image->thumb_url }} " controls/>
                    @endif
                    <img class="w-full h-36 object-cover transition-all group-hover:brightness-50" 
                    @if($image->extension === 'tif')
                    src='data:image/png;base64,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'
                    @elseif($image->extension === 'psd')
                    src='data:image/png;base64,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'
                    @else
                    src="{{ $image->thumb_url }}"
                    @endif
                    >

                    <div class="absolute top-2 right-2 space-x-1 hidden group-hover:flex">
                        <i data-id="{{ $image->id }}" class="delete fas fa-trash text-red-500 w-4 h-4"></i>
                    </div>

                    <div class="p-2 bg-white w-full flex items-center">
                        @if($image->user)
                            <div class="item-user flex items-center">
                                <img src="{{ $image->user->avatar }}" class="w-6 h-6 rounded-full">
                                <span class="ml-2 truncate group-hover:text-blue-500">{{ $image->user->name }}</span>
                            </div>
                        @else
                            <div class="w-6 h-6 rounded-full overflow-hidden">
                                <x-default-avatar/>
                            </div>
                            <span class="ml-2">游客</span>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            <div class="mt-2">
                {{ $images->links() }}
            </div>
        @else
            <x-no-data message="这里还是空的～" />
        @endif
    </div>

    <x-modal id="content-modal">
        <div id="modal-content"></div>
    </x-modal>

    <script type="text/html" id="image-tpl">
        <div class="w-full mt-4">
            <div class="w-full mb-4 rounded-sm overflow-hidden flex items-center justify-center">
                <a class="w-full" href="__url__" target="_blank">
                    <img src="__url__" alt="__name__" class="w-full object-center object-cover">
                </a>
            </div>
            <div class="relative rounded-md bg-white mb-8 overflow-hidden">
                <dl>
                    <div class="bg-gray-50 px-2 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">上传用户</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 truncate">__user_name__</dd>
                    </div>
                </dl>
                <dl>
                    <div class="bg-white px-2 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">相册</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 truncate">__album_name__</dd>
                    </div>
                </dl>
                <dl>
                    <div class="bg-gray-50 px-2 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">角色组</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 truncate">__group_name__</dd>
                    </div>
                </dl>
                <dl>
                    <div class="bg-white px-2 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">储存策略</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 truncate">__strategy_name__</dd>
                    </div>
                </dl>
                <dl>
                    <div class="bg-gray-50 px-2 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">图片名称</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 truncate">__name__</dd>
                    </div>
                </dl>
                <dl>
                    <div class="bg-white px-2 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">原始名称</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 truncate">__origin_name__</dd>
                    </div>
                </dl>
                <dl>
                    <div class="bg-gray-50 px-2 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">物理路径</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 truncate">__pathname__</dd>
                    </div>
                </dl>
                <dl>
                    <div class="bg-white px-2 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">图片大小</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 truncate">__size__</dd>
                    </div>
                </dl>
                <dl>
                    <div class="bg-gray-50 px-2 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">图片类型</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 truncate">__mimetype__</dd>
                    </div>
                </dl>
                <dl>
                    <div class="bg-white px-2 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">MD5</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 truncate">__md5__</dd>
                    </div>
                </dl>
                <dl>
                    <div class="bg-gray-50 px-2 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">SHA1</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 truncate">__sha1__</dd>
                    </div>
                </dl>
                <dl>
                    <div class="bg-white px-2 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">尺寸</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 truncate">__width__*__height__</dd>
                    </div>
                </dl>
                <dl>
                    <div class="bg-gray-50 px-2 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">权限</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 truncate">__permission__</dd>
                    </div>
                </dl>
                <dl>
                    <div class="bg-white px-2 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">不健康的</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 truncate">__is_unhealthy__</dd>
                    </div>
                </dl>
                <dl>
                    <div class="bg-gray-50 px-2 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">上传 IP</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 truncate">__uploaded_ip__</dd>
                    </div>
                </dl>
                <dl>
                    <div class="bg-white px-2 py-3 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">上传时间</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 truncate">__created_at__</dd>
                    </div>
                </dl>
            </div>

            <a href="javascript:void(0)" data-id="__id__" class="delete inline-flex justify-center py-1 px-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 float-right bg-red-500">
                删除
            </a>
        </div>
    </script>

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

    <script type="text/html" id="search-grammar-tpl">
        <p class="text-gray-600">默认输入关键字搜索会根据图片的别名、原始名称进行匹配，你也可以使用下面的搜索语法进行高级搜索，并可以以任意组合使用这些搜索限定符来缩小结果范围。例如查找用户名为张三，邮箱为 a@qq.com 且图片拓展名为 jpg 的所有图片：</p>
        <p class="text-gray-600 mb-2"><b>name:张三 email:a@qq.com extension:jpg</b></p>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                    限定符
                </th>
                <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider whitespace-nowrap">
                    示例
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">name:<span class="italic">USERNAME</span></td>
                <td class="px-3 py-2 text-sm">匹配用户名为 USERNAME 的图片</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">album:<span class="italic">ALBUM_NAME</span></td>
                <td class="px-3 py-2 text-sm">匹配所在相册名称为 ALBUM_NAME 的图片</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">group:<span class="italic">GROUP_NAME</span></td>
                <td class="px-3 py-2 text-sm">匹配图片所属组名称为 GROUP_NAME 的图片</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">strategy:<span class="italic">STRATEGY_NAME</span></td>
                <td class="px-3 py-2 text-sm">匹配图片所属策略名称为 STRATEGY_NAME 的图片</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">email:<span class="italic">EMAIL</span></td>
                <td class="px-3 py-2 text-sm">匹配用户邮箱为 EMAIL 的图片</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">extension:<span class="italic">EXTENSION</span></td>
                <td class="px-3 py-2 text-sm">匹配图片拓展名为 EXTENSION 的图片</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">md5:<span class="italic">FILE_MD5</span></td>
                <td class="px-3 py-2 text-sm">匹配图片文件 md5 值名为 FILE_MD5 的图片</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">sha1:<span class="italic">FILE_SHA1</span></td>
                <td class="px-3 py-2 text-sm">匹配图片文件 sha1 值名为 FILE_SHA1 的图片</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">ip:<span class="italic">UPLOAD_IP</span></td>
                <td class="px-3 py-2 text-sm">匹配上传 IP 为 UPLOAD_IP 的图片</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">is:public</td>
                <td class="px-3 py-2 text-sm">匹配公开的图片</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">is:private</td>
                <td class="px-3 py-2 text-sm">匹配私有的图片</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">is:unhealthy</td>
                <td class="px-3 py-2 text-sm">匹配不健康的图片</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">is:guest</td>
                <td class="px-3 py-2 text-sm">匹配游客上传的图片</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">is:adminer</td>
                <td class="px-3 py-2 text-sm">匹配管理员上传的图片</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">order:earliest</td>
                <td class="px-3 py-2 text-sm">按最早上传的进行排序</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">order:utmost</td>
                <td class="px-3 py-2 text-sm">按图片大小，从大到小进行排序</td>
            </tr>
            <tr>
                <td class="px-3 py-2 text-gray-600 text-sm">order:least</td>
                <td class="px-3 py-2 text-sm">按图片大小，从小到大进行排序</td>
            </tr>
            </tbody>
        </table>
    </script>

@push('scripts')
        <script>
            let modal = Alpine.store('modal');

            function del(id) {
                Swal.fire({
                    title: `确认删除该图片吗?`,
                    text: "记录与物理文件将会一起删除。",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: '确认删除',
                }).then((result) => {
                    if (result.isConfirmed) {
                        axios.delete(`/admin/images/${id}`).then(response => {
                            if (response.data.status) {
                                modal.close('content-modal')
                                toastr.success(response.data.message);
                                setTimeout(function () {
                                    history.go(0);
                                }, 1000);
                            } else {
                                toastr.error(response.data.message);
                            }
                        });
                    }
                });
            }

            $('#grammar').click(function () {
                $('#modal-content').html($('#search-grammar-tpl').html());
                modal.open('content-modal')
            });

            $('.item').click(function () {
                let image = $(this).data('json');
                let html = $('#image-tpl').html()
                    .replace(/__id__/g, image.id)
                    .replace(/__url__/g, image.url)
                    .replace(/__user_name__/g, image.user ? image.user.name+'('+image.user.email+')' : '游客')
                    .replace(/__user_email__/g, image.user ? image.user.email : '-')
                    .replace(/__album_name__/g, image.album ? image.album.name : '-')
                    .replace(/__group_name__/g, image.group ? image.group.name : '-')
                    .replace(/__strategy_name__/g, image.strategy ? image.strategy.name : '-')
                    .replace(/__name__/g, image.name)
                    .replace(/__origin_name__/g, image.origin_name)
                    .replace(/__pathname__/g, image.pathname)
                    .replace(/__size__/g, utils.formatSize(image.size * 1024))
                    .replace(/__mimetype__/g, image.mimetype)
                    .replace(/__md5__/g, image.md5)
                    .replace(/__sha1__/g, image.sha1)
                    .replace(/__width__/g, image.width)
                    .replace(/__height__/g, image.height)
                    .replace(/__permission__/g, image.permission === {{ \App\Enums\ImagePermission::Public }} ? '<i class="fas fa-eye text-red-500"></i> 公开' : '<i class="fas fa-eye-slash text-green-500"></i> 私有')
                    .replace(/__is_unhealthy__/g, image.is_unhealthy ? '<span class="text-red-500"><i class="fas fa-exclamation-triangle"></i> 是</span>' : '否')
                    .replace(/__uploaded_ip__/g, image.uploaded_ip)
                    .replace(/__created_at__/g, image.created_at);

                $('#modal-content').html(html);

                modal.open('content-modal')
            });

            $('.item-user').click(function (e) {
                e.stopPropagation();
                let user = $(this).closest('.item').data('json').user || {};
                let html = $('#user-tpl').html()
                    .replace(/__avatar__/g, user.avatar)
                    .replace(/__name__/g, user.name)
                    .replace(/__email__/g, user.email)
                    .replace(/__capacity__/g, utils.formatSize(user.capacity * 1024))
                    .replace(/__surplus_capacity__/g, utils.formatSize(user.images_sum_size * 1024))
                    .replace(/__image_num__/g, user.image_num)
                    .replace(/__album_num__/g, user.album_num)
                    .replace(/__registered_ip__/g, user.registered_ip || '-')
                    .replace(/__status__/g, user.status === 1 ? '<span class="text-green-500">正常</span>' : '<span class="text-red-500">冻结</span>')
                    .replace(/__email_verified_at__/g, user.email_verified_at || '-')
                    .replace(/__created_at__/g, user.created_at);

                $('#modal-content').html(html);

                modal.open('content-modal')
            });

            $('.item .delete').click(function (e) {
                e.stopPropagation();
                del($(this).data('id'));
            });

            $('#modal-content').on('click', '.delete', function (e) {
                del($(this).data('id'));
            });

        </script>
    @endpush
</x-app-layout>
