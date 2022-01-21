<x-app-layout>
    <div class="my-6 md:my-10">
        <div class="mt-5 md:mt-0 md:col-span-2">
            <ul id="tabs" class="flex space-x-2 text-sm">
                <li class="group">
                    <a data-target="basic" href="javascript:void(0)" class="block rounded-t-lg px-3 py-2 bg-white group-hover:bg-white">常规配置</a>
                </li>
                <li class="group">
                    <a data-target="review" href="javascript:void(0)" class="block rounded-t-lg px-3 py-2 bg-gray-200 group-hover:bg-white">图片审核</a>
                </li>
                <li class="group">
                    <a data-target="protection" href="javascript:void(0)" class="block rounded-t-lg px-3 py-2 bg-gray-200 group-hover:bg-white">原图保护</a>
                </li>
                <li class="group">
                    <a data-target="watermark" href="javascript:void(0)" class="block rounded-t-lg px-3 py-2 bg-gray-200 group-hover:bg-white">水印配置</a>
                </li>
            </ul>
            <form action="#" method="POST">
                <div class="overflow-hidden rounded-md rounded-l-none">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div data-tab="basic" class="grid grid-cols-6 gap-6">
                            <div class="col-span-6">
                                <label for="name" class="block text-sm font-medium text-gray-700">组名称</label>
                                <input type="text" name="name" id="name" autocomplete="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入组名称">
                            </div>

                            <div class="col-span-6">
                                <label for="maximum_file_size" class="block text-sm font-medium text-gray-700">最大文件大小(KB)</label>
                                <input type="number" name="configs[maximum_file_size]" id="maximum_file_size" autocomplete="maximum_file_size" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入上传文件的最大限制，单位kb">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="concurrent_upload_num" class="block text-sm font-medium text-gray-700">并发上传数量</label>
                                <input type="number" name="configs[concurrent_upload_num]" id="concurrent_upload_num" autocomplete="concurrent_upload_num" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入并发上传数量">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="limit_per_minute" class="block text-sm font-medium text-gray-700">每分钟上传限制</label>
                                <input type="number" name="configs[limit_per_minute]" id="limit_per_minute" autocomplete="limit_per_minute" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入每分钟可以上传的图片数量">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="limit_per_hour" class="block text-sm font-medium text-gray-700">每小时上传限制</label>
                                <input type="number" name="configs[limit_per_hour]" id="limit_per_hour" autocomplete="limit_per_hour" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入每小时可以上传的图片数量">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="limit_per_day" class="block text-sm font-medium text-gray-700">每天上传限制</label>
                                <input type="number" name="configs[limit_per_day]" id="limit_per_day" autocomplete="limit_per_day" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入每天可以上传的图片数量">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="limit_per_week" class="block text-sm font-medium text-gray-700">每周上传限制</label>
                                <input type="number" name="configs[limit_per_week]" id="limit_per_week" autocomplete="limit_per_week" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入每周可以上传的图片数量">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="limit_per_month" class="block text-sm font-medium text-gray-700">每月上传限制</label>
                                <input type="number" name="configs[limit_per_month]" id="limit_per_month" autocomplete="limit_per_month" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入每月可以上传的图片数量">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="path_naming_rule" class="block text-sm font-medium text-gray-700">路径命名规则</label>
                                <input type="number" name="configs[path_naming_rule]" id="path_naming_rule" autocomplete="path_naming_rule" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入路径命名规则">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="file_naming_rule" class="block text-sm font-medium text-gray-700">文件命名规则</label>
                                <input type="number" name="configs[file_naming_rule]" id="file_naming_rule" autocomplete="file_naming_rule" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入文件命名规则">
                            </div>

                            <div class="col-span-6">
                                <x-fieldset title="是否默认" faq="设置默认后，新用户注册以后将会属于该默认角色组。">
                                    <x-switch id="is_default_yes" name="configs[is_default]" value="1"></x-switch>
                                </x-fieldset>
                            </div>

                            <div class="col-span-6">
                                <x-fieldset title="允许上传的图片类型">
                                    @foreach($extensions as $extension)
                                        <x-fieldset-checkbox id="{{ $extension }}" name="{{ $extension }}" checked>
                                            {{ strtoupper($extension) }}
                                        </x-fieldset-checkbox>
                                    @endforeach
                                </x-fieldset>
                            </div>
                        </div>
                        <div data-tab="review" class="hidden grid grid-cols-6 gap-6">
                            <div class="col-span-6 mb-4">
                                <x-fieldset title="图片审核" faq="设置上传是否需要通过鉴黄功能审查，违规的图片会被标记为不健康的图片，或直接被删除。">
                                    <x-switch id="is_enable_review_no" name="configs[is_enable_review]" value="0"></x-switch>
                                </x-fieldset>
                            </div>
                            <div class="col-span-6 mb-4">
                                <x-fieldset title="审核动作">
                                    <x-fieldset-radio id="test" name="test" checked>标记为不健康</x-fieldset-radio>
                                    <x-fieldset-radio id="test" name="test">直接删除</x-fieldset-radio>
                                </x-fieldset>
                            </div>
                            <div class="col-span-6 mb-4">
                                <x-fieldset title="审核驱动">
                                    <x-fieldset-radio id="aliyun" name="aliyun" checked>阿里云</x-fieldset-radio>
                                </x-fieldset>
                            </div>
                            <div class="mb-4">
                                <div class="col-span-6 sm:col-span-3 mb-4">
                                    <label for="configs[scan_configs][access_key_id]" class="block text-sm font-medium text-gray-700">AccessKeyId</label>
                                    <input type="text" name="configs[scan_configs][access_key_id]" id="configs[scan_configs][access_key_id]" autocomplete="access_key_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入 AccessKeyId">
                                </div>
                                <div class="col-span-6 sm:col-span-3 mb-4">
                                    <label for="configs[scan_configs][access_key_secret]" class="block text-sm font-medium text-gray-700">AccessKeySecret</label>
                                    <input type="text" name="configs[scan_configs][access_key_secret]" id="configs[scan_configs][access_key_secret]" autocomplete="access_key_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入 AccessKeySecret">
                                </div>
                                <div class="col-span-6 sm:col-span-3 mb-4">
                                    <label for="configs[scan_configs][biz_type]" class="block text-sm font-medium text-gray-700">场景名称</label>
                                    <input type="text" name="configs[scan_configs][biz_type]" id="configs[scan_configs][biz_type]" autocomplete="biz_type" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入业务场景名称">
                                </div>
                                <div class="col-span-6 sm:col-span-3 mb-4">
                                    <label for="configs[scan_configs][region_id]" class="block text-sm font-medium text-gray-700">地域节点</label>
                                    <input type="text" name="configs[scan_configs][region_id]" id="configs[scan_configs][region_id]" autocomplete="region_id" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入地域节点，例如：cn-shanghai">
                                </div>
                                <div class="col-span-6 sm:col-span-3 mb-4">
                                    <x-fieldset title="场景">
                                        <x-fieldset-checkbox name="configs[scan_configs][scenes][]" value="porn" checked>智能鉴黄</x-fieldset-checkbox>
                                        <x-fieldset-checkbox name="configs[scan_configs][scenes][]" value="terrorism" checked>暴恐涉政</x-fieldset-checkbox>
                                        <x-fieldset-checkbox name="configs[scan_configs][scenes][]" value="ad" checked>图文违规</x-fieldset-checkbox>
                                        <x-fieldset-checkbox name="configs[scan_configs][scenes][]" value="qrcode" checked>二维码</x-fieldset-checkbox>
                                        <x-fieldset-checkbox name="configs[scan_configs][scenes][]" value="live" checked>不良场景</x-fieldset-checkbox>
                                        <x-fieldset-checkbox name="configs[scan_configs][scenes][]" value="logo" checked>Logo</x-fieldset-checkbox>
                                    </x-fieldset>
                                </div>
                            </div>
                        </div>
                        <div data-tab="protection" class="hidden grid grid-cols-6 gap-6">
                            <div class="col-span-6 mb-4">
                                <x-fieldset title="原图保护" faq="设置该角色组下的用户上传的图片是否应用原图保护功能，开启后图片<b>不返回直链</b>">
                                    <x-switch id="is_enable_original_protection_yes" name="configs[is_enable_original_protection]" value="1"></x-switch>
                                </x-fieldset>
                            </div>

                            <div class="col-span-6 mb-4">
                                <label for="cache_ttl" class="block text-sm font-medium text-gray-700">图片缓存时间(秒)</label>
                                <input type="number" name="configs[cache_ttl]" id="cache_ttl" autocomplete="cache_ttl" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="请输入受保护图片的缓存时间，0 为不缓存">
                            </div>
                        </div>
                        <div data-tab="watermark" class="hidden grid grid-cols-6 gap-6">
                            <p class="mb-3 text-red-600 text-sm"><i class="fas fa-exclamation"></i> 开启水印功能前请注意考虑图片版权问题。</p>
                            <div class="col-span-6 mb-4">
                                <x-fieldset title="开启水印" faq="请注意，水印功能仅在开启了「原图保护」功能的情况下生效。">
                                    <x-switch id="is_enable_watermark_yes" name="configs[is_enable_watermark]" value="1"></x-switch>
                                </x-fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <x-button type="button" class="bg-gray-500" onclick="history.go(-1)">取消</x-button>
                        <x-button>确认创建</x-button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
        <script>
            $('[data-target]').click(function () {
                $('[data-tab]').hide();
                $('[data-target]').removeClass('bg-white').addClass('bg-gray-200');
                $(`[data-tab=${$(this).data('target')}]`).show();
                $(this).removeClass('bg-gray-200').addClass('bg-white');
            });
        </script>
    @endpush

</x-app-layout>
