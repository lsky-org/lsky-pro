@push('scripts')
    <script src="{{ asset('js/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('js/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('js/jquery.fileupload.js') }}"></script>
    <script src="{{ asset('js/load-image.all.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.8/dist/clipboard.min.js"></script>
@endpush

<div class="pb-6 h-full">
    <input type="file" id="picker" name="file" class="hidden" accept="image/*" multiple>

    <div class="mb-4 p-4 bg-white rounded-md">
        <h1 class="tracking-wider text-2xl text-gray-700 mb-2" style="text-shadow: -4px 4px 0 rgb(0 0 0 / 10%);">Image Upload</h1>
        <p class="text-gray-500 text-sm">最大可上传 1.00 MB 的图片，单次同时可选择 3 张。本站已托管 3267 张图片。</p>
        <div class="mt-3 rounded-md border-2 border-dotted border-stone-300 w-full h-full" id="picker-dnd" onclick="$('#picker').click()">
            <div id="upload-container" class="relative group flex flex-col justify-center items-center p-2 w-full h-full min-h-[150px] sm:min-h-[340px] space-y-4 text-gray-500 cursor-pointer">
                <i id="clear" class="fas fa-times absolute top-1 right-1 w-8 h-8 flex justify-center items-center cursor-pointer text-xl text-center hidden group-hover:block text-gray-400 hover:text-gray-500"></i>
                <p id="upload-all" title="点我上传全部"><i class="fas fa-cloud-upload-alt text-6xl hover:text-indigo-400"></i></p>
                <p class="text-md text-center">拖拽文件到这里，支持多文件同时上传<br/>点击上面的图标上传全部已选择文件</p>
            </div>
            <div id="upload-preview" class="flex m-2 hidden"></div>
        </div>
    </div>

    <div id="links-container" class="hidden mb-4 p-4 bg-white rounded-md relative group">
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
        </div>
        <div id="links" class="mt-2">
            <div data-tab="url" class="space-y-2"></div>
            <div data-tab="html" class="hidden space-y-2"></div>
            <div data-tab="bbcode" class="hidden space-y-2"></div>
            <div data-tab="markdown" class="hidden space-y-2"></div>
            <div data-tab="markdown_with_link" class="hidden space-y-2"></div>
        </div>
    </div>
</div>

<script type="text/html" id="image-preview-tpl">
    <div data-id="__id__" class="w-full flex items-center p-2 mb-2 rounded-md relative bg-gray-50 overflow-hidden">
        <div class="absolute inset-0">
            <div class="w-[0%] h-full bg-gray-200 opacity-70 upload-progress"></div>
        </div>
        <div class="relative flex w-full">
            <div class="w-10 h-10 bg-gray-200 rounded-lg cursor-pointer overflow-hidden">
                <img class="w-full h-full" src="__src__">
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
        }).on('error', function(e) {});
    </script>
    <script>
        const UPLOAD_WAITING = 0; // 等待上传
        const UPLOAD_SUCCESS = 1; // 上传成功
        const UPLOAD_ERROR = 2; // 上传失败
        let $previews = $('#upload-preview');
        let $links = $('#links-container');
        let $picker = $('#picker');
        let queue = []; // 文件队列
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
            limitMultiFileUploads: 1,
            limitConcurrentUploads: 3,
            pasteZone: $(document),
            dropZone: $('#picker-dnd'),
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            formData: (form) => {

            },
            add: (e, data) => {
                let file = data.files[0];
                let ext = file.name.substr(file.name.lastIndexOf('.') + 1);
                let allowSuffixes = ['png', 'jpg', 'jpeg', 'bmp', 'gif', 'webp', 'psd', 'svg', 'tiff', 'ico'];
                if (allowSuffixes.indexOf(ext.toLowerCase()) === -1) {
                    toastr.warning(`不支持的文件格式 ${file.name}`);
                    return false;
                }
                if (file.size > 5242880) {
                    toastr.warning(`文件 ${file.name} 超出大小限制(最大5MB)`);
                    return false;
                }
                let guid = utils.guid();
                data.guid = guid;
                loadImage(file, function (img) {
                        if (img.type === 'error') {
                            toastr.error(`文件 ${file.name} 缩略图生成失败`);
                            console.error('Error loading image file')
                        }
                        let html = $('#image-preview-tpl')
                            .html()
                            .replace(/__id__/g, guid)
                            .replace(/__src__/g, img.toDataURL())
                            .replace(/__name__/g, file.name)
                            .replace(/__info__/g, utils.formatSize(file.size));
                        data.$preview = $previews.append(html).show().find(`[data-id="${guid}"]`);
                        queue[guid] = data;
                        setStatus(data, UPLOAD_WAITING);
                    }, {
                        maxWidth: 200,
                        maxHeight: 200,
                        meta: true,
                        orientation: true,
                        canvas: true
                    },
                )
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
                    setStatus(data, UPLOAD_SUCCESS)
                    data.$preview.attr('uploaded', true);
                    // 追加链接
                    let links = response.data.links;
                    for (let key in links) {
                        $('#links [data-tab="' + key + '"]').append('<p class="whitespace-nowrap select-all mt-1 bg-gray-50 hover:bg-gray-200 text-gray-600 rounded px-2 py-1 cursor-pointer overflow-scroll scrollbar-none">' + links[key].toString() + '</p>')
                    }
                    $links.show();
                } else {
                    setStatus(data, UPLOAD_ERROR, "上传失败, " + response.message);
                    // 重新显示上传按钮
                    data.$preview.find('[data-operate="upload"]').show();
                }
            },
            fail: (e, data) => {
                // 重新显示上传按钮
                data.$preview.find('[data-operate="upload"]').show();
                if (data.jqXHR.status === 419) {
                    return setStatus(data, UPLOAD_ERROR, '令牌错误，请刷新网页重试');
                }
                return setStatus(data, UPLOAD_ERROR, '服务端异常，请稍后重试');
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

        $previews.on('click', '[data-operate]', function () {
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
