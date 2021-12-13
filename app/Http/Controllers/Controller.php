<?php

namespace App\Http\Controllers;

use App\Service\UploadService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function upload(Request $request, UploadService $service): array
    {
        // TODO 如果关闭了游客上传，返回404
        // TODO 检测IP是否超出上传限制
        // TODO 获取用户组
        // TODO 判断储存容量
        // TODO 获取策略列表，根据用户所选的策略上传
        // TODO 检测是否存在该图片，有则直接返回
        // TODO 图片保存至默认相册(若有)
        $data = [
            'url' => 'https://pic.iqy.ink/2021/12/12/e8cfd03eb787f.png',
            'html' => '&lt;img src="https://pic.iqy.ink/2021/12/12/e8cfd03eb787f.png" alt="e212bc43771ad6d391952732a1713e31.png" title="e212bc43771ad6d391952732a1713e31.png" /&gt;',
            'bbcode' => '[img]https://pic.iqy.ink/2021/12/12/e8cfd03eb787f.png[/img]',
            'markdown' => '![e212bc43771ad6d391952732a1713e31.png](https://pic.iqy.ink/2021/12/12/e8cfd03eb787f.png)',
            'markdown_with_link' => '[![e212bc43771ad6d391952732a1713e31.png](https://pic.iqy.ink/2021/12/12/e8cfd03eb787f.png)](https://pic.iqy.ink/2021/12/12/e8cfd03eb787f.png)',
        ];
        $status = true;
        $message = '上传失败，储存空间不足';
        return compact('status', 'data', 'message');
    }
}
