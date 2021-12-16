<?php

namespace App\Http\Controllers;

use App\Exceptions\UploadException;
use App\Http\Api;
use App\Models\User;
use App\Service\UploadService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, Api;

    public function upload(Request $request, UploadService $service): array
    {
        try {
            /** @var User $user */
            $user = Auth::user();
            $service->store($request, $user);
        } catch (UploadException $e) {
            return $this->error($e->getMessage());
        } catch (\Throwable $e) {
            Log::error("Web 上传文件时发生异常，", ['message' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            return $this->error('上传失败，请稍后再试');
        }
        $data = [
            'url' => 'https://pic.iqy.ink/2021/12/12/e8cfd03eb787f.png',
            'html' => '&lt;img src="https://pic.iqy.ink/2021/12/12/e8cfd03eb787f.png" alt="e212bc43771ad6d391952732a1713e31.png" title="e212bc43771ad6d391952732a1713e31.png" /&gt;',
            'bbcode' => '[img]https://pic.iqy.ink/2021/12/12/e8cfd03eb787f.png[/img]',
            'markdown' => '![e212bc43771ad6d391952732a1713e31.png](https://pic.iqy.ink/2021/12/12/e8cfd03eb787f.png)',
            'markdown_with_link' => '[![e212bc43771ad6d391952732a1713e31.png](https://pic.iqy.ink/2021/12/12/e8cfd03eb787f.png)](https://pic.iqy.ink/2021/12/12/e8cfd03eb787f.png)',
        ];
        $status = true;
        $message = '上传成功';
        return compact('status', 'data', 'message');
    }
}
