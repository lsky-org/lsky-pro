@section('title', '系统设置')

<x-app-layout>
    <div class="my-6 md:my-9">
        <p class="mb-3 font-semibold text-lg text-gray-700">通用</p>
        <form action="{{ route('admin.settings.save') }}">
            <div class="relative p-4 rounded-md bg-white mb-8 space-y-4">
                <div>
                    <label for="site_name" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>网站名称</label>
                    <x-input type="text" name="site_name" id="site_name" value="" placeholder="请输入网站名称"/>
                </div>
                <div>
                    <label for="site_keywords" class="block text-sm font-medium text-gray-700">网站关键字</label>
                    <x-textarea type="text" name="site_keywords" id="site_keywords" value="" placeholder="请输入网站关键字"></x-textarea>
                </div>
                <div>
                    <label for="site_description" class="block text-sm font-medium text-gray-700">网站描述</label>
                    <x-textarea type="text" name="site_description" id="site_description" value="" placeholder="请输入网站描述"></x-textarea>
                </div>
                <div>
                    <label for="icp_no" class="block text-sm font-medium text-gray-700">备案号</label>
                    <x-input type="text" name="icp_no" id="icp_no" value="" placeholder="请输入备案号"/>
                </div>

                <div class="text-right">
                    <x-button type="submit">保存更改</x-button>
                </div>
            </div>
        </form>


        <p class="mb-3 font-semibold text-lg text-gray-700">控制</p>
        <form action="{{ route('admin.settings.save') }}">
            <div class="relative p-4 rounded-md bg-white mb-8 space-y-4">
                <x-fieldset title="是否启用注册" faq="启用或关闭系统注册功能">
                    <x-switch name="is_enable_registration" />
                </x-fieldset>
                <x-fieldset title="是否启用画廊" faq="启用或关闭画廊功能，画廊只有已登录的用户可见，画廊中的图片均为所有用户公开的图片。">
                    <x-switch name="is_enable_gallery" />
                </x-fieldset>
                <x-fieldset title="是否允许游客上传" faq="启用或关闭游客上传功能，游客上传受「系统默认组」控制。">
                    <x-switch name="is_allow_guest_upload" />
                </x-fieldset>
                <x-fieldset title="账号验证" faq="是否强制用户验证邮箱，开启后用户必须经过验证邮箱后才能上传图片，请确保邮件配置正常。">
                    <x-switch name="is_user_need_verify" />
                </x-fieldset>

                <div class="text-right">
                    <x-button type="submit">保存更改</x-button>
                </div>
            </div>
        </form>

        <p class="mb-3 font-semibold text-lg text-gray-700">用户</p>
        <form action="{{ route('admin.settings.save') }}">
            <div class="relative p-4 rounded-md bg-white mb-8 space-y-4">
                <div>
                    <label for="user_initial_capacity" class="block text-sm font-medium text-gray-700">用户初始容量(kb)</label>
                    <x-input type="number" name="user_initial_capacity" id="user_initial_capacity" step="0.01" value="" placeholder="请输入用户初始容量(kb)"/>
                </div>

                <div class="text-right">
                    <x-button type="submit">保存更改</x-button>
                </div>
            </div>
        </form>

        <p class="mb-3 font-semibold text-lg text-gray-700">邮件配置</p>
        <form action="{{ route('admin.settings.save') }}">
            <div class="relative p-4 rounded-md bg-white mb-8 space-y-4">
                <x-fieldset title="发信驱动">
                    <x-fieldset-radio id="mail_configs[default]" name="mail_configs[default]" data-select="mailer" value="smtp" checked>SMTP</x-fieldset-radio>
                </x-fieldset>

                <div class="mb-4 hidden space-y-4" data-mailer-driver="smtp">
                    <div>
                        <label for="mail_configs[mailers][smtp][host]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>主机地址</label>
                        <x-input type="text" name="mail_configs[mailers][smtp][transport][host]" id="mail_configs[mailers][smtp][host]" value="" placeholder="请输入 SMTP 主机地址"/>
                    </div>
                    <div>
                        <label for="mail_configs[mailers][smtp][port]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>连接端口</label>
                        <x-input type="number" name="mail_configs[mailers][smtp][port]" id="mail_configs[mailers][smtp][port]" value="" placeholder="请输入 SMTP 主机连接端口"/>
                    </div>
                    <div>
                        <label for="mail_configs[mailers][smtp][encryption]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>加密方式</label>
                        <x-input type="number" name="mail_configs[mailers][smtp][port]" id="mail_configs[mailers][smtp][encryption]" value="" placeholder="请输入加密方式(ssl, tls)"/>
                    </div>
                    <div>
                        <label for="mail_configs[mailers][smtp][username]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>用户名</label>
                        <x-input type="text" name="mail_configs[mailers][smtp][username]" id="mail_configs[mailers][smtp][username]" value="" placeholder="请输入用户名"/>
                    </div>
                    <div>
                        <label for="mail_configs[mailers][smtp][password]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>密码</label>
                        <x-input type="text" name="mail_configs[mailers][smtp][username]" id="mail_configs[mailers][smtp][password]" value="" placeholder="请输入密码"/>
                    </div>
                    <div>
                        <label for="mail_configs[mailers][smtp][timeout]" class="block text-sm font-medium text-gray-700">连接超时时间(秒)</label>
                        <x-input type="number" name="mail_configs[mailers][smtp][timeout]" id="mail_configs[mailers][smtp][timeout]" value="" placeholder="请输入连接超时时间(秒)"/>
                    </div>

                    <input type="hidden" name="mail_configs[mailers][smtp][transport]" value="smtp">

                    <div class="text-right">
                        <x-button type="submit">保存更改</x-button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    @push('scripts')
        <script>
            // 设置选中驱动
            let setSelected = function () {
                $('[data-select]').each(function () {
                    $(`[data-${$(this).data('select')}-driver=${$(this).val()}]`)[this.checked ? 'show' : 'hide']();
                });
            };

            setSelected();

            $('[data-select]').click(function () {
                setSelected();
            });
        </script>
    @endpush

</x-app-layout>
