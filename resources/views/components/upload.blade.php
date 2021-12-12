@push('styles')
    <link rel="stylesheet" href="{{ asset('css/upload.css') }}">
@endpush

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/webuploader@0.1.8/dist/webuploader.min.js"></script>
@endpush

<div class="pb-6 h-full">
    <input type="file" id="picker" name="file" class="hidden" accept="image/*" multiple>

    <div class="mb-4 p-4 bg-white rounded-md">
        <h1 class="tracking-wider text-2xl text-gray-700 mb-2" style="text-shadow: -4px 4px 0 rgb(0 0 0 / 10%);">Image Upload</h1>
        <p class="text-gray-500 text-sm">最大可上传 1.00 MB 的图片，单次同时可选择 3 张。本站已托管 3267 张图片。</p>
        <div class="mt-3 rounded-md border-2 border-dotted border-stone-300 w-full h-full" id="picker-dnd" onclick="$('#picker input').click()">
            <div id="upload-preview" class="flex m-2">
                <div class="w-full group flex items-center p-2 rounded-md relative bg-gray-300 overflow-hidden">
                    <div class="absolute inset-0">
                        <div class="w-[25%] h-full bg-sky-600 opacity-70"></div>
                        <span class="absolute inset-0 flex justify-center items-center text-white hidden sm:flex">25%</span>
                    </div>
                    <div class="relative flex w-full">
                        <div class="w-10 h-10 bg-gray-200 rounded-lg cursor-pointer overflow-hidden">
                            <img class="w-full h-full" src="https://pic.iqy.ink/2021/12/12/dafb5853dcdfb.png">
                        </div>
                        <div class="flex justify-end flex-col ml-2 w-[80%]">
                            <p class="text-sm text-slate-100 truncate">哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈.jpeg</p>
                            <span class="text-xs text-slate-200">文件大小：7mb</span>
                        </div>
                    </div>
                    <div class="absolute right-2 flex space-x-2">
                        <a href="" class="flex justify-center items-center block shadow-sm w-10 h-10 rounded-full bg-gray-50 hover:bg-gray-200 aspect-w-1 aspect-h-1"><i class="fas fa-times"></i></a>
                        <a href="" class="flex justify-center items-center block shadow-sm w-10 h-10 rounded-full bg-gray-50 hover:bg-gray-200 aspect-w-1 aspect-h-1"><i class="fas fa-upload"></i></a>
                    </div>
                </div>
            </div>
            {{--<div id="upload-container" class="flex flex-col justify-center items-center w-full h-full min-h-[150px] sm:min-h-[240px] space-y-4 text-gray-500">
                <p><i class="fas fa-cloud-upload-alt text-6xl"></i></p>
                <p class="text-md">拖拽文件到这里，支持多文件同时上传</p>
            </div>--}}
        </div>
    </div>

    <div class="mb-4 p-4 bg-white rounded-md relative group">
        <span id="copy-all" class="absolute top-2 right-2 px-2 py-1 rounded-md text-xs text-gray-800 bg-gray-100 cursor-pointer hidden group-hover:block">复制全部</span>
        <div id="link-tabs" class="flex flex-nowrap overflow-scroll scrollbar-none text-sm">
            <a href="javascript:void(0)" class="flex justify-center items-center px-8 py-2 border-b-2 border-indigo-500">URL</a>
            <a href="javascript:void(0)" class="flex justify-center items-center px-8 py-2 border-indigo-500">HTML</a>
            <a href="javascript:void(0)" class="flex justify-center items-center px-8 py-2 border-indigo-500">BBCode</a>
            <a href="javascript:void(0)" class="flex justify-center items-center px-8 py-2 border-indigo-500">Markdown</a>
            <a href="javascript:void(0)" class="flex justify-center items-center px-8 py-2 border-indigo-500" style="white-space: nowrap">Markdown with link</a>
        </div>
        <div id="links" class="mt-2 space-y-2">
            <p class="select-all hover:bg-gray-100 text-gray-600 rounded px-2 py-1 cursor-pointer overflow-scroll scrollbar-none">https://www.baidu.com/asdqwfdvergfweqwfwefw4gtwdvweqwd.jpg</p>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        var uploader = WebUploader.create({
            server: '/upload',
            dnd: '#picker-dnd',
            disableGlobalDnd: true,
            pick: {
                id: '#picker',
                multiple: true,
            },
            accept: {
                title: 'Images',
                extensions: 'gif,jpg,jpeg,bmp,png',
                mimeTypes: 'image/*'
            }
        });
        uploader.on('fileQueued', function(file) {
            console.log(file)
        });
        uploader.on('uploadAccept', (object, ret) => {
        });
        uploader.on('uploadProgress', (file, percentage) => {
        });
        uploader.on('uploadError', (file, reason) => {
        });
        uploader.on('uploadSuccess', (file, response) => {
        });
        uploader.on('uploadComplete', (file) => {
        });
        uploader.on('error', (type) => {
        });

        $('#upload-preview').click(function (e) {
            e.stopPropagation();
        })

    </script>
@endpush
