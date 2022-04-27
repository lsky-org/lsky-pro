@section('title', '编辑用户')

<x-app-layout>
    <div class="my-6 md:my-9">

        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="{{ route('admin.user.update', ['id' => $user->id ?: '0']) }}" method="POST">
                <div class="overflow-hidden rounded-md shadow-custom">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6">
                                <label class="block">
                                    <span class="text-gray-700">选择角色组</span>
                                    <x-select name="group_id" class="block w-full mt-1 form-multiselect">
                                        @foreach(\App\Models\Group::query()->get() as $group)
                                            <option value="{{ $group->id }}" {{ $user->group_id == $group->id ? 'selected' : '' }}>{{ $group->name }}</option>
                                        @endforeach
                                    </x-select>
                                </label>
                            </div>
                            <div class="col-span-6">
                                <label for="email" class="block text-sm font-medium text-gray-700">邮箱</label>
                                <x-input type="email" id="email" value="{{ $user->email }}" disabled />
                            </div>
                            <div class="col-span-6">
                                <label for="name" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>用户名</label>
                                <x-input type="text" id="name" name="name" value="{{ $user->name }}" placeholder="请输入用户名" />
                            </div>
                            <div class="col-span-6">
                                <label for="capacity" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>总容量(kb)</label>
                                <x-input type="number" id="capacity" name="capacity" step="0.01" value="{{ $user->capacity }}" placeholder="请输入总容量(kb)" />
                            </div>
                            <div class="col-span-6">
                                <label for="password" class="block text-sm font-medium text-gray-700">新密码</label>
                                <x-input type="password" id="password" name="password" value="" placeholder="不修改请留空" />
                            </div>
                            @if($user->id != Auth::user()->id)
                            <div class="col-span-6">
                                <x-fieldset title="账号状态" faq="冻结账号后将无法登录系统">
                                    <x-fieldset-radio id="normal" name="status" value="1" :checked="$user->status == 1">正常</x-fieldset-radio>
                                    <x-fieldset-radio id="frozen" name="status" value="0" :checked="$user->status == 0">冻结</x-fieldset-radio>
                                </x-fieldset>
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <x-button type="button" class="bg-gray-500" onclick="history.go(-1)">取消</x-button>
                        <x-button>确认保存</x-button>
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
