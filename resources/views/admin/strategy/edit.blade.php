@section('title', '编辑储存策略')

<x-app-layout>
    <div class="my-6 md:my-9">
        @include('admin.strategy.tips')

        <div class="md:mt-0 md:col-span-2">
            <form action="{{ route('admin.strategy.update', ['id' => $strategy->id]) }}" method="POST">
                <div class="overflow-hidden rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6 space-y-4">

                        <div class="col-span-6">
                            <label class="block">
                                <span class="text-gray-700">选择角色组</span>
                                <x-select name="groups[]" class="block w-full mt-1 form-multiselect" multiple>
                                    @foreach(\App\Models\Group::query()->get() as $group)
                                        <option value="{{ $group->id }}" {{ $strategy->groups->where('id', $group->id)->isNotEmpty() ? 'selected' : '' }}>{{ $group->name }}</option>
                                    @endforeach
                                </x-select>
                            </label>
                        </div>

                        <div class="col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>名称</label>
                            <x-input type="text" name="name" id="name" placeholder="请输入策略名称" autocomplete="name" value="{{ $strategy->name }}"  />
                        </div>

                        <div class="col-span-6">
                            <label for="intro" class="block text-sm font-medium text-gray-700">简介</label>
                            <x-textarea id="intro" name="intro" rows="3" placeholder="请输入简介，可为空">{{ $strategy->intro }}</x-textarea>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="key" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>储存策略</label>
                            <x-select autocomplete="key" disabled>
                                @foreach(\App\Models\Strategy::DRIVERS as $key => $driver)
                                    <option value="{{ $key }}" {{ $key === $strategy->key ? 'selected' : '' }}>{{ $driver }}</option>
                                @endforeach
                            </x-select>
                            <small class="text-gray-500"><i class="fas fa-exclamation-circle"></i> 为了确保已存在于该储存上的图片能够在平台正常预览，已创建的策略无法继续更改储存方式。</small>
                        </div>

                        @if($strategy->key === \App\Enums\StrategyKey::Local)
                        <div class="col-span-6 mb-4" data-driver="{{ \App\Enums\StrategyKey::Local }}">
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[url]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>访问网址</label>
                                <x-input type="text" name="configs[url]" id="configs[url]" placeholder="请输入图片访问域名，需要加 http(s)://" value="{{ $strategy->configs['url'] }}" />
                                <small class="text-orange-500"><i class="fas fa-exclamation"></i>
                                    本地储存的访问网址必须有根路径，例如：https://www.lsky.pro/uploads 中的 uploads 就是根路径，且根路径不能和其他策略重复。修改根路径直接影响已经上传并已使用的链接的访问。
                                </small>
                            </div>
                            <div class="col-span-6">
                                <div class="col-span-6 sm:col-span-3 mb-4">
                                    <label for="configs[root]" class="block text-sm font-medium text-gray-700">储存路径</label>
                                    <x-input type="text" name="configs[root]" id="configs[root]" autocomplete="text" placeholder="图片保存位置，默认：{{ config('filesystems.disks.uploads.root') }}" value="{{ $strategy->configs['root'] }}" />
                                    <small class="text-orange-500"><i class="fas fa-exclamation"></i> 储存路径为绝对路径，设置错误或没有读写权限可能会导致图片保存失败。如果储存路径与其他策略相同，那么请注意使用角色组的路径命名规则、文件命名规则来区分不同文件夹，否则可能会因为名称重复而导致图片物理文件被覆盖。</small>
                                </div>
                            </div>
                        </div>
                        @endif

                        @if($strategy->key === \App\Enums\StrategyKey::Cos)
                        <div class="col-span-6 mb-4" data-driver="{{ \App\Enums\StrategyKey::Cos }}">
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[url]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>访问域名</label>
                                <x-input type="url" name="configs[url]" id="configs[url]" placeholder="请输入图片访问域名 http(s)://" value="{{ $strategy->configs['url'] }}" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[app_id]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>AppId</label>
                                <x-input type="text" name="configs[app_id]" id="configs[app_id]" placeholder="请输入 AppId" value="{{ $strategy->configs['app_id'] }}" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[secret_id]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>SecretId</label>
                                <x-input type="text" name="configs[secret_id]" id="configs[secret_id]" placeholder="请输入 SecretKey" value="{{ $strategy->configs['secret_id'] }}" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[secret_key]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>SecretKey</label>
                                <x-input type="password" name="configs[secret_key]" id="configs[secret_key]" placeholder="请输入 SecretKey" value="{{ $strategy->configs['secret_key'] }}" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[region]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>所属地域</label>
                                <x-input type="text" name="configs[region]" id="configs[region]" placeholder="请输入所属地域，例如：ap-chengdu" value="{{ $strategy->configs['region'] }}" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[bucket]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>储存桶名称</label>
                                <x-input type="text" name="configs[bucket]" id="configs[bucket]" placeholder="请输入储存桶名称" value="{{ $strategy->configs['bucket'] }}" />
                            </div>
                        </div>
                        @endif

                        @if($strategy->key === \App\Enums\StrategyKey::Kodo)
                        <div class="col-span-6 mb-4" data-driver="{{ \App\Enums\StrategyKey::Kodo }}">
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[url]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>访问域名</label>
                                <x-input type="url" name="configs[url]" id="configs[url]" placeholder="请输入图片访问域名 http(s)://" value="{{ $strategy->configs['url'] }}" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[access_key]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>AccessKey</label>
                                <x-input type="text" name="configs[access_key]" id="configs[access_key]" placeholder="请输入 AccessKey" value="{{ $strategy->configs['access_key'] }}" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[secret_key]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>SecretKey</label>
                                <x-input type="password" name="configs[secret_key]" id="configs[secret_key]" placeholder="请输入 SecretKey" value="{{ $strategy->configs['secret_key'] }}" />
                            </div>
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[bucket]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>Bucket</label>
                                <x-input type="text" name="configs[bucket]" id="configs[bucket]" placeholder="请输入 Bucket" value="{{ $strategy->configs['bucket'] }}" />
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <x-button type="button" class="bg-gray-500" onclick="history.go(-1)">取消</x-button>
                        <x-button>确认修改</x-button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
        <script>
            $('form').submit(function (e) {
                e.preventDefault();
                axios.put(this.action, $(this).serialize()).then(response => {
                    if (response.data.status) {
                        toastr.success(response.data.message);
                    } else {
                        toastr.error(response.data.message);
                    }
                });
            });
        </script>
    @endpush

</x-app-layout>
