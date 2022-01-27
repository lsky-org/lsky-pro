@section('title', '编辑储存策略')

<x-app-layout>
    <div class="my-6 md:my-10">
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
                            <x-input type="text" name="name" id="name" placeholder="请输入策略名称" autocomplete="name" value="{{ $strategy->name }}" />
                        </div>

                        <div class="col-span-6">
                            <label for="intro" class="block text-sm font-medium text-gray-700">简介</label>
                            <x-textarea id="intro" name="intro" rows="3" placeholder="请输入简介，可为空">{{ $strategy->intro }}</x-textarea>
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="key" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>储存策略</label>
                            <x-select id="key" name="key" autocomplete="key">
                                @foreach(\App\Models\Strategy::DRIVERS as $key => $driver)
                                    <option value="{{ $key }}" {{ $key === $strategy->key ? 'selected' : '' }}>{{ $driver }}</option>
                                @endforeach
                            </x-select>
                        </div>

                        <div class="col-span-6">
                            <div class="col-span-6 sm:col-span-3 mb-4">
                                <label for="configs[root]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>储存路径</label>
                                <x-input type="text" name="configs[root]" id="configs[root]" autocomplete="text" placeholder="图片保存位置，可为空" value="{{ $strategy->configs['root'] }}" />
                                <small class="text-orange-500"><i class="fas fa-exclamation"></i> 储存路径为绝对路径，设置错误或没有读写权限可能会导致图片保存失败。如果储存路径与其他策略相同，那么请注意使用角色组的路径命名规则、文件命名规则来区分不同文件夹，否则可能会因为名称重复而导致图片物理文件被覆盖。</small>
                            </div>
                        </div>

                        <div class="col-span-6 mb-4 hidden" data-driver="{{ \App\Enums\StrategyKey::Local }}">
                            <div class="col-span-3 sm:col-span-2 mb-4">
                                <label for="configs[domain]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>访问域名</label>
                                <x-input type="text" name="configs[domain]" id="configs[domain]" class="mt-1 block w-full rounded-l-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="请输入图片访问域名，需要加 http(s)://" value="{{ $strategy->configs['domain'] }}" />
                                <small class="text-orange-500"><i class="fas fa-exclamation"></i>
                                    注意：本地储存访问域名必须有一个后缀，例如 https://www.lsky.pro/<span class="text-red-600">uploads</span>/20220104/1.jpg 中的 uploads 就是后缀，系统会根据这个后缀生成符号链接。 符号链接相对 public 目录，不能与其他策略重复。
                                </small>
                            </div>
                        </div>
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
            // 设置选中驱动
            let setSelected = function () {
                $('[data-driver]').each(function () {
                    $(this)[$('#key').val() == $(this).data('driver') ? 'show' : 'hide']();
                });
            };

            setSelected();

            $('#key').change(function () {
                setSelected();
            });

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
