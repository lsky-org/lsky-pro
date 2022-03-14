@if(! ini_get('file_uploads'))
    <p class="bg-red-500 p-2 mb-2 rounded text-sm text-white">
        <i class="fas fa-exclamation-circle"></i> 当前系统监测到运行环境关闭了 HTTP 上传文件权限(file_uploads=off)，请更改 PHP 此项配置，否则无法上传文件。
    </p>
@endif
<p class="bg-yellow-500 p-2 mb-2 rounded text-sm text-white">
    <i class="fas fa-exclamation-circle"></i> 系统运行环境允许上传大小的最大值为 {{ ini_get('upload_max_filesize') }}，最大 POST 数据大小为 {{ ini_get('post_max_size') }}，上传文件大小不得超过这两项配置值。
</p>
<p class="bg-yellow-500 p-2 mb-2 rounded text-sm text-white">
    <i class="fas fa-exclamation-circle"></i> 原图保护以及水印功能，原理是使用 PHP 接管图片请求，动态处理后缓存之后通过载入缓存到内存中输出图片，对服务器有着较高的要求，请谨慎使用。如果你使用第三方储存，兰空图床更推荐你使用第三方储存的图片处理规则。
</p>
