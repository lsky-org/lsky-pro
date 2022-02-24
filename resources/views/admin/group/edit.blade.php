@section('title', '编辑角色组')

<x-app-layout>
    <div class="my-6 md:my-9">
        @include('admin.group.tips')

        @if($group->id == 0)
        <p class="bg-blue-500 p-2 mb-2 rounded text-sm text-white">
            <i class="fas fa-exclamation-circle"></i> 当前编辑的是系统默认组，所有访客、以及未被设置角色组的用户上传的图片将会受这个角色组控制。
        </p>
        @endif

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
            <form action="{{ route('admin.group.update', ['id' => $group->id ?: '0']) }}" method="POST">
                <div class="overflow-hidden rounded-md rounded-l-none">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div data-tab="basic" class="grid grid-cols-6 gap-6">
                            <div class="col-span-6">
                                <label for="name" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>组名称</label>
                                @if($group->id == 0)
                                    <x-input type="text" value="{{ $group->name }}" disabled readonly />
                                    <input type="hidden" name="name" id="name" value="{{ $group->name }}">
                                @else
                                    <x-input type="text" name="name" id="name" autocomplete="name" placeholder="请输入组名称" value="{{ $group->name }}" />
                                @endif
                            </div>

                            <div class="col-span-6">
                                <label for="maximum_file_size" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>最大文件大小(KB)</label>
                                <x-input type="number" name="configs[maximum_file_size]" id="maximum_file_size" autocomplete="maximum_file_size" placeholder="请输入上传文件的最大限制，单位kb" value="{{ $group->configs['maximum_file_size'] }}" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="concurrent_upload_num" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>并发上传限制</label>
                                <x-input type="number" name="configs[concurrent_upload_num]" id="concurrent_upload_num" autocomplete="concurrent_upload_num" placeholder="请输入并发上传数量" value="{{ $group->configs['concurrent_upload_num'] }}" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="limit_per_minute" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>每分钟上传限制</label>
                                <x-input type="number" name="configs[limit_per_minute]" id="limit_per_minute" autocomplete="limit_per_minute" placeholder="请输入每分钟可以上传的图片数量" value="{{ $group->configs['limit_per_minute'] }}" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="limit_per_hour" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>每小时上传限制</label>
                                <x-input type="number" name="configs[limit_per_hour]" id="limit_per_hour" autocomplete="limit_per_hour" placeholder="请输入每小时可以上传的图片数量" value="{{ $group->configs['limit_per_hour'] }}" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="limit_per_day" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>每天上传限制</label>
                                <x-input type="number" name="configs[limit_per_day]" id="limit_per_day" autocomplete="limit_per_day" placeholder="请输入每天可以上传的图片数量" value="{{ $group->configs['limit_per_day'] }}" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="limit_per_week" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>每周上传限制</label>
                                <x-input type="number" name="configs[limit_per_week]" id="limit_per_week" autocomplete="limit_per_week" placeholder="请输入每周可以上传的图片数量" value="{{ $group->configs['limit_per_week'] }}" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="limit_per_month" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>每月上传限制</label>
                                <x-input type="number" name="configs[limit_per_month]" id="limit_per_month" autocomplete="limit_per_month" placeholder="请输入每月可以上传的图片数量" value="{{ $group->configs['limit_per_month'] }}" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="path_naming_rule" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>路径命名规则</label>
                                <x-input type="text" name="configs[path_naming_rule]" id="path_naming_rule" autocomplete="path_naming_rule" placeholder="请输入路径命名规则" value="{{ $group->configs['path_naming_rule'] }}" />
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="file_naming_rule" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>文件命名规则</label>
                                <x-input type="text" name="configs[file_naming_rule]" id="file_naming_rule" autocomplete="file_naming_rule" placeholder="请输入文件命名规则" value="{{ $group->configs['file_naming_rule'] }}" />
                            </div>

                            @if($group->id)
                            <div class="col-span-6">
                                <x-fieldset title="是否默认" faq="设置默认后，新用户注册以后将会属于该默认角色组。">
                                    <x-switch id="is_default" name="is_default" value="1" :checked="(bool)$group->is_default"></x-switch>
                                </x-fieldset>
                            </div>
                            @endif

                            <div class="col-span-6">
                                <x-fieldset title="允许上传的图片类型">
                                    @foreach($default['accepted_file_suffixes'] as $extension)
                                        <x-fieldset-checkbox id="configs[accepted_file_suffixes]_{{ $extension }}" name="configs[accepted_file_suffixes][]" value="{{ $extension }}" :checked="in_array($extension, $group->configs['accepted_file_suffixes'])">
                                            {{ strtoupper($extension) }}
                                        </x-fieldset-checkbox>
                                    @endforeach
                                </x-fieldset>
                            </div>
                        </div>

                        <div data-tab="review" class="hidden grid grid-cols-6 gap-6">
                            <div class="col-span-6 mb-4">
                                <x-fieldset title="图片审核" faq="设置上传是否需要应用第三方审查，违规的图片会被标记为不健康的图片，或直接被删除。">
                                    <x-switch id="configs[is_enable_scan]" name="configs[is_enable_scan]" value="1" :checked="(bool)$group->configs['is_enable_scan']"></x-switch>
                                </x-fieldset>
                            </div>
                            <div class="col-span-6 mb-4">
                                <x-fieldset title="审核动作">
                                    <x-fieldset-radio id="configs[scanned_action]_mark" name="configs[scanned_action]" value="mark" :checked="$group->configs['scanned_action'] === 'mark'">标记为不健康</x-fieldset-radio>
                                    <x-fieldset-radio id="configs[scanned_action]_delete" name="configs[scanned_action]" value="delete" :checked="$group->configs['scanned_action'] === 'delete'">直接删除</x-fieldset-radio>
                                </x-fieldset>
                            </div>
                            <div class="col-span-6 mb-4">
                                <x-fieldset title="审核驱动">
                                    <x-fieldset-radio id="configs[scan_configs][driver]" name="configs[scan_configs][driver]" data-select="scan" value="aliyun" :checked="$group->configs['scan_configs']['driver'] === 'aliyun'">阿里云</x-fieldset-radio>
                                </x-fieldset>
                            </div>
                            <div class="hidden mb-4" data-scan-driver="aliyun">
                                <div class="col-span-6 sm:col-span-3 mb-4">
                                    <label for="configs[scan_configs][drivers][aliyun][access_key_id]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>AccessKeyId</label>
                                    <x-input type="text" name="configs[scan_configs][drivers][aliyun][access_key_id]" id="configs[scan_configs][drivers][aliyun][access_key_id]" autocomplete="access_key_id" placeholder="请输入 AccessKeyId" value="{{ $group->configs['scan_configs']['drivers']['aliyun']['access_key_id'] }}" />
                                </div>
                                <div class="col-span-6 sm:col-span-3 mb-4">
                                    <label for="configs[scan_configs][drivers][aliyun][access_key_secret]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>AccessKeySecret</label>
                                    <x-input type="password" name="configs[scan_configs][drivers][aliyun][access_key_secret]" id="configs[scan_configs][drivers][aliyun][access_key_secret]" autocomplete="access_key_id" placeholder="请输入 AccessKeySecret" value="{{ $group->configs['scan_configs']['drivers']['aliyun']['access_key_secret'] }}" />
                                </div>
                                <div class="col-span-6 sm:col-span-3 mb-4">
                                    <label for="configs[scan_configs][drivers][aliyun][biz_type]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>场景名称</label>
                                    <x-input type="text" name="configs[scan_configs][drivers][aliyun][biz_type]" id="configs[scan_configs][drivers][aliyun][biz_type]" autocomplete="biz_type" placeholder="请输入业务场景名称" value="{{ $group->configs['scan_configs']['drivers']['aliyun']['biz_type'] }}" />
                                </div>
                                <div class="col-span-6 sm:col-span-3 mb-4">
                                    <label for="configs[scan_configs][drivers][aliyun][region_id]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>地域节点</label>
                                    <x-input type="text" name="configs[scan_configs][drivers][aliyun][region_id]" id="configs[scan_configs][drivers][aliyun][region_id]" autocomplete="region_id" placeholder="请输入地域节点，例如：cn-shanghai" value="{{ $group->configs['scan_configs']['drivers']['aliyun']['region_id'] }}" />
                                </div>
                                <div class="col-span-6 sm:col-span-3 mb-4">
                                    <x-fieldset title="审核场景">
                                        @foreach($scenes as $key => $scene)
                                            <x-fieldset-checkbox id="configs[scan_configs][drivers][aliyun][scenes][]_{{ $key }}" name="configs[scan_configs][drivers][aliyun][scenes][]" value="{{ $key }}" :checked="in_array($key, $group->configs['scan_configs']['drivers']['aliyun']['scenes'])">{{ $scene }}</x-fieldset-checkbox>
                                        @endforeach
                                    </x-fieldset>
                                </div>
                            </div>
                        </div>

                        <div data-tab="protection" class="hidden grid grid-cols-6 gap-6">
                            <div class="col-span-6 mb-4">
                                <x-fieldset title="原图保护" faq="设置该角色组下的用户上传的图片是否应用原图保护功能，开启后图片<b>不返回直链</b>">
                                    <x-switch id="configs[is_enable_original_protection]" name="configs[is_enable_original_protection]" value="1" :checked="(bool)$group->configs['is_enable_original_protection']"></x-switch>
                                </x-fieldset>
                            </div>

                            <div class="col-span-6 mb-4">
                                <label for="configs[image_cache_ttl]" class="block text-sm font-medium text-gray-700">图片缓存时间(秒)</label>
                                <x-input type="number" name="configs[image_cache_ttl]" id="configs[image_cache_ttl]" autocomplete="image_cache_ttl" placeholder="请输入受保护图片的缓存时间，不填或填0表示不缓存" value="{{ $group->configs['image_cache_ttl'] }}" />
                            </div>
                        </div>

                        <div data-tab="watermark" class="hidden grid grid-cols-6 gap-6">
                            <p class="mb-3 text-red-600 text-sm"><i class="fas fa-exclamation"></i> 开启水印功能前请注意考虑图片版权问题。</p>
                            <div class="col-span-6 mb-4">
                                <x-fieldset title="开启水印" faq="请注意，水印功能仅在开启了「原图保护」功能的情况下生效。">
                                    <x-switch id="configs[is_enable_watermark]" name="configs[is_enable_watermark]" value="1" :checked="(bool)$group->configs['is_enable_watermark']"></x-switch>
                                </x-fieldset>
                                <div class="col-span-6 mt-4 mb-4">
                                    <x-fieldset title="水印类型">
                                        <x-fieldset-radio id="configs[watermark_configs][driver]_font" name="configs[watermark_configs][driver]" data-select="watermark" value="font" :checked="$group->configs['watermark_configs']['driver'] === 'font'">文字水印</x-fieldset-radio>
                                        <x-fieldset-radio id="configs[watermark_configs][driver]_image" name="configs[watermark_configs][driver]" data-select="watermark" value="image" :checked="$group->configs['watermark_configs']['driver'] === 'image'">图片水印</x-fieldset-radio>
                                    </x-fieldset>
                                </div>
                                <div class="mb-4 hidden" data-watermark-driver="font">
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][drivers][font][font]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>字体文件</label>
                                        <x-input type="text" name="configs[watermark_configs][drivers][font][font]" id="configs[watermark_configs][drivers][font][font]" autocomplete="text" placeholder="请输入字体文件路径，例如：fonts/lsky.ttf" value="{{ $group->configs['watermark_configs']['drivers']['font']['font'] }}" />
                                        <small class="text-yellow-500">请将字体文件放置 {{ public_path() }} 目录下</small>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][drivers][font][position]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>水印位置</label>
                                        <x-select id="configs[watermark_configs][drivers][font][position]" name="configs[watermark_configs][drivers][font][position]" autocomplete="position">
                                            @foreach($positions as $key => $position)
                                                <option value="{{ $key }}" {{ $group->configs['watermark_configs']['drivers']['font']['position'] === $key ? 'selected' : '' }}>{{ $position }}</option>
                                            @endforeach
                                        </x-select>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][drivers][font][text]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>水印文字</label>
                                        <x-input type="text" name="configs[watermark_configs][drivers][font][text]" id="configs[watermark_configs][drivers][font][text]" autocomplete="text" placeholder="请输入水印文字" value="{{ $group->configs['watermark_configs']['drivers']['font']['text'] }}" />
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][drivers][font][color]" class="block text-sm font-medium text-gray-700">字体颜色</label>
                                        <x-input type="text" name="configs[watermark_configs][drivers][font][color]" id="configs[watermark_configs][drivers][font][color]" autocomplete="color" placeholder="请输入字体颜色，例如：#ffffff" value="{{ $group->configs['watermark_configs']['drivers']['font']['color'] }}" />
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][drivers][font][size]" class="block text-sm font-medium text-gray-700">字体大小</label>
                                        <x-input type="number" name="configs[watermark_configs][drivers][font][size]" id="configs[watermark_configs][drivers][font][size]" autocomplete="size" placeholder="请输入字体大小，默认 14" value="{{ $group->configs['watermark_configs']['drivers']['font']['size'] }}" />
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][drivers][font][angle]" class="block text-sm font-medium text-gray-700">旋转角度</label>
                                        <x-input type="number" name="configs[watermark_configs][drivers][font][angle]" id="configs[watermark_configs][drivers][font][angle]" autocomplete="angle" placeholder="请输入旋转角度，默认 0，可以为" value="{{ $group->configs['watermark_configs']['drivers']['font']['angle'] }}" />
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][drivers][font][x]" class="block text-sm font-medium text-gray-700">X轴偏移量</label>
                                        <x-input type="number" name="configs[watermark_configs][drivers][font][x]" id="configs[watermark_configs][drivers][font][x]" autocomplete="x" placeholder="X轴偏移量" value="{{ $group->configs['watermark_configs']['drivers']['font']['x'] }}" />
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][drivers][font][y]" class="block text-sm font-medium text-gray-700">Y轴偏移量</label>
                                        <x-input type="number" name="configs[watermark_configs][drivers][font][y]" id="configs[watermark_configs][drivers][font][y]" autocomplete="y" placeholder="Y轴偏移量" value="{{ $group->configs['watermark_configs']['drivers']['font']['y'] }}" />
                                    </div>
                                </div>
                                <div class="mb-4 hidden" data-watermark-driver="image">
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][drivers][image][image]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>水印图片</label>
                                        <x-input type="text" name="configs[watermark_configs][drivers][image][image]" id="configs[watermark_configs][drivers][image][image]" autocomplete="image" placeholder="请输入水印路径，例如：images/lsky.png" value="{{ $group->configs['watermark_configs']['drivers']['image']['image'] }}" />
                                        <small class="text-yellow-500">请将水印图片放置 {{ public_path() }} 目录下</small>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][drivers][image][position]" class="block text-sm font-medium text-gray-700"><span class="text-red-600">*</span>水印位置</label>
                                        <x-select id="configs[watermark_configs][drivers][image][position]" name="configs[watermark_configs][drivers][image][position]" autocomplete="position">
                                            @foreach($positions as $key => $position)
                                                <option value="{{ $key }}" {{ $group->configs['watermark_configs']['drivers']['image']['position'] === $key ? 'selected' : '' }}>{{ $position }}</option>
                                            @endforeach
                                        </x-select>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][drivers][image][width]" class="block text-sm font-medium text-gray-700">图片宽度</label>
                                        <x-input type="number" name="configs[watermark_configs][drivers][image][width]" id="configs[watermark_configs][drivers][image][width]" autocomplete="width" placeholder="请输入水印图片宽度" value="{{ $group->configs['watermark_configs']['drivers']['image']['width'] }}" />
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][drivers][image][height]" class="block text-sm font-medium text-gray-700">图片高度</label>
                                        <x-input type="number" name="configs[watermark_configs][drivers][image][height]" id="configs[watermark_configs][drivers][image][height]" autocomplete="height" placeholder="请输入水印图片高度" value="{{ $group->configs['watermark_configs']['drivers']['image']['height'] }}" />
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][drivers][image][opacity]" class="block text-sm font-medium text-gray-700">不透明度</label>
                                        <x-input type="number" name="configs[watermark_configs][drivers][image][opacity]" id="configs[watermark_configs][drivers][image][opacity]" autocomplete="opacity" placeholder="请输入不透明度，取值 0 - 100" value="{{ $group->configs['watermark_configs']['drivers']['image']['opacity'] }}" />
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][drivers][image][rotate]" class="block text-sm font-medium text-gray-700">旋转角度</label>
                                        <x-input type="number" name="configs[watermark_configs][drivers][image][rotate]" id="configs[watermark_configs][drivers][image][rotate]" autocomplete="rotate" placeholder="请输入旋转角度，默认 0" value="{{ $group->configs['watermark_configs']['drivers']['image']['rotate'] }}" />
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][drivers][image][x]" class="block text-sm font-medium text-gray-700">X轴偏移量</label>
                                        <x-input type="number" name="configs[watermark_configs][drivers][image][x]" id="configs[watermark_configs][drivers][image][x]" autocomplete="x" placeholder="X轴偏移量" value="{{ $group->configs['watermark_configs']['drivers']['image']['x'] }}" />
                                    </div>
                                    <div class="col-span-6 sm:col-span-3 mb-4">
                                        <label for="configs[watermark_configs][drivers][image][y]" class="block text-sm font-medium text-gray-700">Y轴偏移量</label>
                                        <x-input type="number" name="configs[watermark_configs][drivers][image][y]" id="configs[watermark_configs][drivers][image][y]" autocomplete="y" placeholder="Y轴偏移量" value="{{ $group->configs['watermark_configs']['drivers']['image']['y'] }}" />
                                    </div>
                                </div>
                            </div>
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
            // tabs select
            $('[data-target]').click(function () {
                $('[data-tab]').hide();
                $('[data-target]').removeClass('bg-white').addClass('bg-gray-200');
                $(`[data-tab=${$(this).data('target')}]`).show();
                $(this).removeClass('bg-gray-200').addClass('bg-white');
            });

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
