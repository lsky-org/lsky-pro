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
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, Api;

    public function upload(Request $request, UploadService $service): Response
    {
        try {
            /** @var User $user */
            $user = Auth::user();
            $image = $service->store($request, $user);
        } catch (UploadException $e) {
            return $this->error($e->getMessage());
        } catch (\Throwable $e) {
            Log::error("Web 上传文件时发生异常，", ['message' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            return $this->error('服务异常，请稍后再试');
        }
        return $this->success('上传成功', $image->setAppends(['url', 'pathname', 'links'])->only(
            'id', 'url', 'pathname', 'origin_name', 'size', 'mimetype', 'md5', 'sha1', 'links'
        ));
    }
}
