@section('title', '仪表盘')

<x-app-layout>
    <div class="my-6 md:my-9">
        <div class="space-y-6 md:space-y-0 md:grid md:grid-cols-2 xl:grid-cols-4 md:gap-x-4 xl:gap-x-8 md:gap-y-4 xl:gap-y-8">
            <div class="flex bg-white rounded p-4 space-x-4 shadow-custom">
                <i class="fas fa-images text-amber-500 text-5xl"></i>
                <div class="flex flex-col">
                    <p class="text-gray-700 text-sm">图片数量</p>
                    <p class="text-gray-800 font-semibold text-xl">{{ $user->image_num }}</p>
                </div>
            </div>
            <div class="flex bg-white rounded p-4 space-x-4 shadow-custom">
                <i class="fas fa-hdd text-red-500 text-5xl"></i>
                <div class="flex flex-col">
                    <p class="text-gray-700 text-sm">可用储存</p>
                    <p class="text-gray-800 font-semibold text-xl">{{ \App\Utils::formatSize(($user->capacity - $user->use_capacity) * 1024) }}</p>
                </div>
            </div>
            <div class="flex bg-white rounded p-4 space-x-4 shadow-custom">
                <i class="fas fa-hdd text-green-500 text-5xl"></i>
                <div class="flex flex-col">
                    <p class="text-gray-700 text-sm">使用储存</p>
                    <p class="text-gray-800 font-semibold text-xl">{{ \App\Utils::formatSize($user->use_capacity * 1024) }}</p>
                </div>
            </div>
            <div class="flex bg-white rounded p-4 space-x-4 shadow-custom">
                <i class="fas fa-hdd text-emerald-500 text-5xl"></i>
                <div class="flex flex-col">
                    <p class="text-gray-700 text-sm">总储存</p>
                    <p class="text-gray-800 font-semibold text-xl">{{ \App\Utils::formatSize($user->capacity * 1024) }}</p>
                </div>
            </div>
        </div>

        <div class="flex md:mt-8 flex-col-reverse md:flex-row space-y-6 md:space-y-0 md:space-x-4">
            <div class="w-full mt-4 md:mt-0">
                <x-box>
                    <x-slot name="title">可使用的策略</x-slot>
                    <x-slot name="content">
                        @if($strategies->isEmpty())
                            <x-no-data message="您所在的组还没有可用的储存策略，请联系管理员。" />
                        @else
                            <div class="divide-y divide-solid">
                                @foreach ($strategies as $strategy)
                                    <div class="w-full px-4 py-3">
                                        <p>{{ $strategy->name }}</p>
                                        <span class="text-gray-700 text-sm">{{ $strategy->intro }}</span>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </x-slot>
                </x-box>
            </div>
            <div class="flex flex-col md:w-[70%] xl:w-[40%] space-y-8">
                <x-box>
                    <x-slot name="title">我的信息</x-slot>
                    <x-slot name="content">
                        <div class="px-4 py-3 space-y-3">
                            <div class="flex">
                                <p class="basis-1/3">姓名</p>
                                <p class="basis-2/3 truncate text-gray-800">{{ $user->name }}</p>
                            </div>
                            <div class="flex">
                                <p class="basis-1/3">邮箱</p>
                                <p class="basis-2/3 truncate text-gray-800">{{ $user->email }}</p>
                            </div>
                            <div class="flex">
                                <p class="basis-1/3">注册时间</p>
                                <p class="basis-2/3 truncate text-gray-800">{{ $user->created_at }}</p>
                            </div>
                            <div class="flex">
                                <p class="basis-1/3">注册 IP</p>
                                <p class="basis-2/3 truncate text-gray-800">{{ $user->registered_ip }}</p>
                            </div>
                            @if(\App\Utils::config(\App\Enums\ConfigKey::IsUserNeedVerify) && !$user->email_verified_at)
                                <p class="p-2 text-sm rounded bg-red-400 text-white">
                                    你的账号尚未激活，功能受限，请根据激活邮件指引激活账号，如果你没有收到邮件，请点击
                                    <a id="send-verify-email" href="javascript:void(0)" class="text-green-400">这里</a>
                                    重新发送。
                                </p>
                            @endif
                        </div>
                    </x-slot>
                </x-box>
                <x-box>
                    <x-slot name="title">角色组信息</x-slot>
                    <x-slot name="content">
                        <div class="px-4 py-3 space-y-3">
                            <div class="flex">
                                <p class="basis-1/2">组名</p>
                                <p class="basis-1/2 truncate text-gray-800">{{ $user->group ? $user->group->name : '系统默认组' }}</p>
                            </div>
                            <div class="flex">
                                <p class="basis-1/2">最大文件大小</p>
                                <p class="basis-1/2 truncate text-gray-800">{{ \App\Utils::formatSize($configs->get(\App\Enums\GroupConfigKey::MaximumFileSize) * 1024) }}</p>
                            </div>
                            <div class="flex">
                                <p class="basis-1/2">并发上传数量</p>
                                <p class="basis-1/2 truncate text-gray-800">{{ $configs->get(\App\Enums\GroupConfigKey::ConcurrentUploadNum) }} 张</p>
                            </div>
                            <div class="flex">
                                <p class="basis-1/2">每分钟上传限制</p>
                                <p class="basis-1/2 truncate text-gray-800">{{ $configs->get(\App\Enums\GroupConfigKey::LimitPerMinute) }} 张</p>
                            </div>
                            <div class="flex">
                                <p class="basis-1/2">每小时上传限制</p>
                                <p class="basis-1/2 truncate text-gray-800">{{ $configs->get(\App\Enums\GroupConfigKey::LimitPerHour) }} 张</p>
                            </div>
                            <div class="flex">
                                <p class="basis-1/2">每天上传限制</p>
                                <p class="basis-1/2 truncate text-gray-800">{{ $configs->get(\App\Enums\GroupConfigKey::LimitPerDay) }} 张</p>
                            </div>
                            <div class="flex">
                                <p class="basis-1/2">每周上传限制</p>
                                <p class="basis-1/2 truncate text-gray-800">{{ $configs->get(\App\Enums\GroupConfigKey::LimitPerWeek) }} 张</p>
                            </div>
                            <div class="flex">
                                <p class="basis-1/2">每月上传限制</p>
                                <p class="basis-1/2 truncate text-gray-800">{{ $configs->get(\App\Enums\GroupConfigKey::LimitPerMonth) }} 张</p>
                            </div>
                        </div>
                    </x-slot>
                </x-box>
            </div>
        </div>
    </div>

    @if(\App\Utils::config(\App\Enums\ConfigKey::IsUserNeedVerify) && !$user->email_verified_at)
        @push('scripts')
            <script>
                $('#send-verify-email').click(function () {
                    if (! $(this).attr('disabled')) {
                        $(this).text('发送中...').attr('disabled');
                        axios.post('{{ route('verification.send') }}').then(response => {
                            toastr.success('发送成功，请注意查收。');
                        }).catch(error => {
                            if (error.response.status === 429) {
                                toastr.error('操作频繁，请稍后再试');
                            }
                        }).finally(_ => {
                            $(this).text('这里').attr('disabled');
                        });
                    }
                });
            </script>
        @endpush
    @endif
</x-app-layout>
