<div class="pb-6 h-full">
    <input type="file" id="picker" name="file" class="hidden" accept="{{ implode(',', array_map(fn ($ext) => '.'.$ext, $_group->configs->get(\App\Enums\GroupConfigKey::AcceptedFileSuffixes))) }}" multiple>

    <div class="mb-4 p-4 bg-white rounded-md shadow-custom">
        <h1 class="tracking-wider text-2xl text-gray-700 mb-2" style="text-shadow: -4px 4px 0 rgb(0 0 0 / 10%);">Image Upload</h1>
        <p class="text-gray-500 text-sm">
            最大可上传 {{ \App\Utils::formatSize($_group->configs->get(\App\Enums\GroupConfigKey::MaximumFileSize) * 1024) }} 的图片，上传队列最多
            {{ $_group->configs->get(\App\Enums\GroupConfigKey::ConcurrentUploadNum) }}
            张。本站已托管 {{ \App\Models\Image::query()->count() }} 张图片。
        </p>
        <div class="mt-3 rounded-md border-2 border-dotted border-stone-300 w-full h-full" id="picker-dnd" onclick="$('#picker').click()">
            <div id="upload-container" class="relative group flex flex-col justify-center items-center p-2 w-full h-full min-h-[150px] sm:min-h-[340px] space-y-4 text-gray-500 cursor-pointer">
                <i id="clear" class="fas fa-times absolute top-1 right-1 w-8 h-8 flex justify-center items-center cursor-pointer text-xl text-center hidden group-hover:block text-gray-400 hover:text-gray-500"></i>
                <p id="upload-all" title="点我上传全部"><i class="fas fa-cloud-upload-alt text-6xl hover:text-indigo-400"></i></p>
                <p class="text-md text-center">拖拽文件到这里，支持多文件同时上传<br/>点击上面的图标上传全部已选择文件</p>
            </div>
            <div id="upload-preview" class="flex m-2 hidden"></div>
        </div>
    </div>

    <div id="links-container" class="hidden mb-4 p-4 bg-white rounded-md relative group shadow-custom">
        <div class="absolute top-2 right-2 flex">
            <span id="copy-all" class="px-2 py-1 rounded-md text-xs text-gray-800 bg-gray-100 cursor-pointer hidden group-hover:block">复制全部</span>
            <span id="clear-all" class="ml-1 px-2 py-1 rounded-md text-xs text-gray-800 bg-gray-100 cursor-pointer hidden group-hover:block">清除</span>
        </div>
        <div id="link-tabs" class="flex flex-nowrap overflow-scroll scrollbar-none text-sm">
            <a href="javascript:void(0)" data-tab-name="url" class="hover:bg-gray-100 flex justify-center items-center px-8 py-2 border-b-2 border-indigo-500 active">URL</a>
            <a href="javascript:void(0)" data-tab-name="html" class="hover:bg-gray-100 flex justify-center items-center px-8 py-2 border-b-2 border-transparent">HTML</a>
            <a href="javascript:void(0)" data-tab-name="bbcode" class="hover:bg-gray-100 flex justify-center items-center px-8 py-2 border-b-2 border-transparent">BBCode</a>
            <a href="javascript:void(0)" data-tab-name="markdown" class="hover:bg-gray-100 flex justify-center items-center px-8 py-2 border-b-2 border-transparent">Markdown</a>
            <a href="javascript:void(0)" data-tab-name="markdown_with_link" class="hover:bg-gray-100 flex justify-center items-center px-8 py-2 border-b-2 border-transparent whitespace-nowrap">Markdown with link</a>
            <a href="javascript:void(0)" data-tab-name="thumbnail_url" class="hover:bg-gray-100 flex justify-center items-center px-8 py-2 border-b-2 border-transparent whitespace-nowrap">Thumbnail url</a>
        </div>
        <div id="links" class="mt-2">
            <div data-tab="url" class="space-y-2"></div>
            <div data-tab="html" class="hidden space-y-2"></div>
            <div data-tab="bbcode" class="hidden space-y-2"></div>
            <div data-tab="markdown" class="hidden space-y-2"></div>
            <div data-tab="markdown_with_link" class="hidden space-y-2"></div>
            <div data-tab="thumbnail_url" class="hidden space-y-2"></div>
        </div>
    </div>
</div>

<x-modal id="preview-modal">
    <div class="rounded-lg overflow-hidden">
        <img class="w-full h-full object-cover" src="">
    </div>
</x-modal>

<script type="text/html" id="image-preview-tpl">
    <div data-id="__id__" class="w-full flex items-center p-2 mb-2 rounded-md relative bg-gray-50 overflow-hidden">
        <div class="absolute inset-0">
            <div class="w-[0%] h-full bg-gray-200 opacity-70 upload-progress"></div>
        </div>
        <div class="relative flex w-full">
            <div class="w-10 h-10 bg-gray-200 rounded-lg cursor-pointer overflow-hidden">
                <img class="w-full h-full object-cover" data-operate="preview" src="__src__">
            </div>
            <div class="flex justify-end flex-col ml-2 w-[80%] opacity-70">
                <p class="text-sm truncate">__name__</p>
                <p class="text-xs truncate">
                    <span>__info__</span>, <span class="upload-info">等待上传</span>
                </p>
            </div>
        </div>
        <div class="absolute right-2 flex space-x-2">
            <a href="javascript:void(0)" data-operate="remove" class="flex justify-center items-center block shadow-sm w-10 h-10 rounded-full text-gray-600 bg-gray-100 hover:bg-gray-200 aspect-w-1 aspect-h-1"><i class="fas fa-times"></i></a>
            <a href="javascript:void(0)" data-operate="upload" class="flex justify-center items-center block shadow-sm w-10 h-10 rounded-full text-gray-600 bg-gray-100 hover:bg-gray-200 aspect-w-1 aspect-h-1"><i class="fas fa-upload"></i></a>
        </div>
    </div>
</script>
@push('scripts')
    <script src="{{ asset('js/blueimp-file-upload/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('js/blueimp-file-upload/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('js/blueimp-file-upload/jquery.fileupload.js') }}"></script>
    <script src="{{ asset('js/blueimp-load-image/load-image.all.min.js') }}"></script>
    <script src="{{ asset('js/clipboard/clipboard.min.js') }}"></script>
@endpush
@push('scripts')
    <script>
        let allowSuffixes = @json($_group->configs->get(\App\Enums\GroupConfigKey::AcceptedFileSuffixes));
        let maxSize = {{ $_group->configs->get(\App\Enums\GroupConfigKey::MaximumFileSize) * 1024 }};
        let pastedAction = '{{ Auth::check() ? Auth::user()->configs->get(\App\Enums\UserConfigKey::PastedAction) : \App\Enums\PastedAction::Waiting }}';
    </script>
    <script>
        (new ClipboardJS('#copy-all', {
            text: function(trigger) {
                let text = '';
                $('[data-tab="' + $('#link-tabs a.active').data('tab-name') + '"] p').each(function (i) {
                    if (i !== 0) {
                        text += '\r\n';
                    }
                    text += $(this).text();
                });
                return text;
            }
        })).on('success', function(e) {
            if (! $(e.trigger).attr('disabled')) {
                let text = $(e.trigger).text();
                $(e.trigger).attr('disabled', true).text('复制成功');
                setTimeout(function () {
                    $(e.trigger).attr('disabled', false).text(text);
                }, 1000);
            }
        }).on('error', function(e) {
            toastr.warning('复制失败')
        });
    </script>
    <script>
        const UPLOAD_WAITING = 0; // 等待上传
        const UPLOAD_SUCCESS = 1; // 上传成功
        const UPLOAD_ERROR = 2; // 上传失败
        let $previews = $('#upload-preview');
        let $links = $('#links-container');
        let $picker = $('#picker');
        let queue = []; // 文件队列
        let excludes = ['psd', 'tif']; // 排除支持预览的格式
        /**
         * 设置状态
         * @param data
         * @param status
         * @param message
         */
        const setStatus = (data, status, message) => {
            queue[data.guid].status = data.status = status;
            let $info = data.$preview.find('.upload-info');
            $info.removeClass('text-green-500 text-red-500')
            let msg = '';
            switch (status) {
                case UPLOAD_WAITING:
                    msg = '等待上传';
                    break;
                case UPLOAD_SUCCESS:
                    msg = '上传成功';
                    $info.addClass('text-green-800');
                    break;
                case UPLOAD_ERROR:
                    msg = '上传失败';
                    $info.addClass('text-red-500')
                    break;
            }
            $info.text(message ? message : msg);
        }
        $picker.fileupload({
            url: '{{ route('upload') }}',
            autoUpload: false,
            dataType: 'json',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            limitMultiFileUploads: 1,
            limitConcurrentUploads: {{ $_group->configs->get(\App\Enums\GroupConfigKey::ConcurrentUploadNum, 3) }},
            pasteZone: $(document),
            dropZone: $('#picker-dnd'),
            formData: (form) => {
                return [{name: 'strategy_id', value: $('#strategy-selected').data('id')}];
            },
            paste: (e, data) => {
                let files = [];
                $.each(data.files, function (index, file) {
                    let name = new Date().getTime().toString();
                    files[index] = new File([file], name + "." + file.name.substr(file.name.lastIndexOf('.') + 1), {
                        type: file.type,
                        lastModified: file.lastModified,
                    });
                });
                data.files = files;
                data.from = 'paste';
            },
            add: (e, data) => { // Return true to continue adding, otherwise terminate
                let file = data.files[0];
                let ext = file.name.substr(file.name.lastIndexOf('.') + 1);
                if (allowSuffixes.indexOf(ext.toLowerCase()) === -1) {
                    toastr.warning(`不支持的图片格式 ${file.name}`);
                    return true;
                }
                if (file.size > maxSize) {
                    toastr.warning(`图片 ${file.name} 超出大小限制`);
                    return true;
                }
                let guid = utils.guid();
                data.guid = guid;

                // 推送到队列
                let push = function (blob) {
                    let html = $('#image-preview-tpl')
                        .html()
                        .replace(/__id__/g, guid)
                        .replace(/__src__/g, blob)
                        .replace(/__name__/g, file.name.replace(/\$/g, '$$$$'))
                        .replace(/__info__/g, utils.formatSize(file.size));
                    data.$preview = $previews.append(html).show().find(`[data-id="${guid}"]`);
                    queue[guid] = data;
                    setStatus(data, UPLOAD_WAITING);

                    // 如果来源是否为粘贴，判断是否需要直接上传
                    if (data.from === 'paste' && pastedAction === '{{ \App\Enums\PastedAction::Upload }}') {
                        queue[guid].submit();
                    }
                };

                if (excludes.indexOf(file.name.substring(file.name.lastIndexOf(".") + 1).toLowerCase()) !== -1) {
                    push('data:image/png;base64,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');
                } else {
                    loadImage(file, function (img) {
                            if (img.type === 'error') {
                                toastr.error(`文件 ${file.name} 缩略图生成失败`);
                                console.error('Error loading image file')
                            }
                            push(img.toDataURL())
                        }, {
                            maxWidth: 200,
                            maxHeight: 200,
                            meta: true,
                            orientation: true,
                            canvas: true
                        },
                    )
                }
            },
            send: (e, data) => {
                data.$preview.find('[data-operate="upload"]').hide();
            },
            progress: (e, data) => {
                let progress = parseInt(data.loaded / data.total * 100, 10);
                let $uploadInfo = data.$preview.find('.upload-info');
                let $uploadProgress = data.$preview.find('.upload-progress');
                let rate = progress + '%';
                $uploadInfo.text('上传中...' + rate);
                $uploadProgress.css('width', rate);
            },
            done: (e, data) => {
                let response = data.result;
                if (response.status) {
                    // 如果开启了自动清除缩略图功能
                    if ({{ (Auth::check() && Auth::user()->configs->get(\App\Enums\UserConfigKey::IsAutoClearPreview)) ? 1 : 0 }}) {
                        delete queue[data.$preview.data('id')];
                        data.$preview.remove();
                    } else {
                        setStatus(data, UPLOAD_SUCCESS)
                        data.$preview.attr('uploaded', true);
                    }

                    // 追加链接
                    let links = response.data.links;
                    for (let key in links) {
                        $('#links [data-tab="' + key + '"]').append('<p class="whitespace-nowrap select-all mt-1 bg-gray-50 hover:bg-gray-200 text-gray-600 rounded px-2 py-1 cursor-pointer overflow-scroll scrollbar-none">' + links[key].toString() + '</p>')
                    }
                    $links.show();
                    utils.setCapacityProgress(response.data.size);
                } else {
                    setStatus(data, UPLOAD_ERROR, "上传失败, " + response.message);
                    // 重新显示上传按钮
                    data.$preview.find('[data-operate="upload"]').show();
                }
            },
            fail: (e, data) => {
                if (data.errorThrown !== 'abort') {
                    // 重新显示上传按钮
                    data.$preview.find('[data-operate="upload"]').show();
                    if (data.jqXHR.status === 419) {
                        return setStatus(data, UPLOAD_ERROR, '令牌错误，请刷新网页重试');
                    }
                    return setStatus(data, UPLOAD_ERROR, '服务端异常，请稍后重试');
                }
            },
            // 等同于jq的complete
            always: (e, data) => {

            }
        });

        $(document).on('drop dragover', (e) => e.preventDefault());
        $previews.click((e) => e.stopPropagation());

        $('#upload-all').click((e) => {
            // 队列中没有文件，选择则继续冒泡，选择文件
            if (Object.values(queue).filter((item) => item.status !== UPLOAD_SUCCESS).length) {
                e.stopPropagation();
                for (const key in queue) {
                    if (queue[key].status !== UPLOAD_SUCCESS) {
                        queue[key].submit();
                    }
                }
            }
        });

        $previews.on('click', '[data-operate]', function (e) {
            e.stopPropagation();
            let $preview = $(this).closest('[data-id]');
            let method = $(this).data('operate');
            let id = $preview.data('id');
            if (method === 'remove') {
                queue[id].abort();
                delete queue[id];
                $preview.remove();
            }
            if (method === 'upload' && queue[id].status !== UPLOAD_SUCCESS) {
                queue[id].submit();
            }
            if (method === 'preview') {
                let file = queue[id].files[0];
                if (excludes.indexOf(file.name.substring(file.name.lastIndexOf(".") + 1).toLowerCase()) === -1) {
                    let reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onloadend = function (e) {
                        $('#preview-modal img').attr('src', e.target.result);
                        Alpine.store('modal').open('preview-modal')
                    }
                }
            }
        });

        $('#clear').click(function (e) {
            e.stopPropagation();
            queue = [];
            $previews.html('');
        });

        $('[data-tab-name]').click(function () {
            $(this).removeClass('active border-transparent')
                .addClass('active border-indigo-500')
                .siblings()
                .removeClass('active border-indigo-500')
                .addClass('border-transparent');
            $('[data-tab]').hide();
            $('[data-tab="' + $(this).data('tab-name') + '"]').show()
        });

        $('#clear-all').click(function () {
            $('[data-tab]').html('')
            $links.hide();
        });
    </script>
@endpush
