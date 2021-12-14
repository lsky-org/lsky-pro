@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/webuploader@0.1.8/dist/webuploader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.8/dist/clipboard.min.js"></script>
@endpush

<div class="pb-6 h-full">
    <input type="file" id="picker" name="file" class="hidden" accept="image/*" multiple>

    <div class="mb-4 p-4 bg-white rounded-md">
        <h1 class="tracking-wider text-2xl text-gray-700 mb-2" style="text-shadow: -4px 4px 0 rgb(0 0 0 / 10%);">Image Upload</h1>
        <p class="text-gray-500 text-sm">最大可上传 1.00 MB 的图片，单次同时可选择 3 张。本站已托管 3267 张图片。</p>
        <div class="mt-3 rounded-md border-2 border-dotted border-stone-300 w-full h-full" id="picker-dnd" onclick="$('#picker input').click()">
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
                var text = '';
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
                var text = $(e.trigger).text();
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
        var uploader = WebUploader.create({
            server: '/upload',
            dnd: '#picker-dnd',
            disableGlobalDnd: true,
            pick: {
                id: '#picker',
                multiple: true,
            },
            threads: 3,
            fileSingleSizeLimit: 5242880,
            formData: {},
            accept: {
                title: 'Images',
                extensions: 'gif,jpg,jpeg,bmp,png',
                mimeTypes: 'image/*'
            }
        });
        var $previews = $('#upload-preview');
        var $links = $('#links-container');
        // 获取某个预览图片dom
        var $getPreview = function (id) {
            return $previews.find('[data-id="' + id + '"]');
        }
        // 设置某个预览片上传状态
        var $setPreviewStatus = function ($preview, status, msg) {
            var $info = $preview.find('.upload-info');
            $info.removeClass('text-green-800 text-red-500');
            switch (status) {
                case UPLOAD_WAITING:
                    $info.text('等待上传');
                    break;
                case UPLOAD_SUCCESS:
                    $info.addClass('text-green-800').text('上传成功');
                    break;
                case UPLOAD_ERROR:
                    $info.addClass('text-red-500').text('上传失败');
                    break;
            }
            if (msg) $info.text(msg);
        };
        uploader.on('uploadBeforeSend', function (object, data, headers) {
            headers['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');
        });
        uploader.on('fileQueued', function(file) {
            // 创建缩略图
            uploader.makeThumb(file, function(error, src) {
                if (error) {
                    // 创建失败
                }
                var html = $('#image-preview-tpl')
                    .html()
                    .replace(/__id__/g, file.id)
                    .replace(/__src__/g, src)
                    .replace(/__name__/g, file.name)
                    .replace(/__info__/g, utils.formatSize(file.size));
                $previews.append(html).show();
            }, 100, 100);
        });
        uploader.on('uploadStart', function (file) {
            $getPreview(file.id).find('[data-operate="upload"]').hide();
        });
        uploader.on('uploadAccept', function (object, ret) {
        });
        uploader.on('uploadProgress', function (file, percentage) {
            var $preview = $getPreview(file.id);
            var $uploadInfo = $preview.find('.upload-info');
            var $uploadProgress = $preview.find('.upload-progress');
            var rate = (percentage * 100).toFixed(2) + '%';
            $uploadInfo.text('上传中...' + rate);
            $uploadProgress.css('width', rate);
        });
        uploader.on('uploadError', function (file, reason) {
            // Status Code: 400 ~ 400
            if (reason === 'http') {
            }
            if (reason === 'server') {
            }
            $setPreviewStatus($getPreview(file.id), UPLOAD_ERROR, '服务异常，请刷新重试')
        });
        uploader.on('uploadSuccess', function (file, response) {
            var $preview = $getPreview(file.id);
            if (response.status) {
                $preview.attr('uploaded', true);
                $setPreviewStatus($preview, UPLOAD_SUCCESS);
                // 追加链接
                for (var key in response.data) {
                    $('#links [data-tab="' + key + '"]').append('<p class="whitespace-nowrap select-all mt-1 bg-gray-50 hover:bg-gray-200 text-gray-600 rounded px-2 py-1 cursor-pointer overflow-scroll scrollbar-none">' + response.data[key].toString() + '</p>')
                }
                $links.show();
            } else {
                $setPreviewStatus($preview, UPLOAD_ERROR, response.message);
                // 重新显示上传按钮
                $preview.find('[data-operate="upload"]').show();
            }
        });
        uploader.on('uploadComplete', function (file) {
            console.log('uploadComplete', file)
        });
        uploader.on('error', function (type, max, file) {
            // 不同类型的错误，第二个和第三个参数会有不同，坑😢
            if (type === 'F_EXCEED_SIZE') {
                toastr.warning('文件大小超出限制(max: ' + utils.formatSize(max) + '), ' + file.name);
            }
        });

        $('#upload-all').click(function (e) {
           e.stopPropagation();
            // 没有任何未上传的文件，选择文件
            if ($previews.find('[data-id]').length === $previews.find('[data-id][uploaded]').length) {
                $('#picker input').click();
            }
            // 组件正在上传，不进行任何操作
            if (uploader.isInProgress()) {
                return false;
            }
            // 上传队列中状态正常的文件，上传失败的需要传指定文件重新上传
            uploader.upload();
        });

        $previews.click(function (e) {
            e.stopPropagation();
        });

        $('#clear').click(function (e) {
            e.stopPropagation();
            uploader.reset();
            $previews.html('');
        });

        $previews.on('click', '[data-operate]', function () {
            var $getPreview = $(this).closest('[data-id]');
            var method = $(this).data('operate');
            var id = $getPreview.data('id');
            if (method === 'remove') {
                uploader.cancelFile(id);
                uploader.removeFile(id, true);
                $getPreview.remove();
            }
            if (method === 'upload') {
                uploader.upload(id);
            }
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
