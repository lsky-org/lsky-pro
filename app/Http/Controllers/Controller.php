<?php

namespace App\Http\Controllers;

use App\Enums\GroupConfigKey;
use App\Exceptions\UploadException;
use App\Http\Api;
use App\Models\Image;
use App\Models\User;
use App\Service\ImageService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use League\Flysystem\FilesystemException;
use Symfony\Component\HttpFoundation\StreamedResponse;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, Api;

    public function upload(Request $request, ImageService $service): Response
    {
        try {
            /** @var User $user */
            $user = Auth::user();
            $image = $service->store($request, $user);
        } catch (UploadException $e) {
            return $this->error($e->getMessage());
        } catch (\Throwable $e) {
            Log::error("Web 上传文件时发生异常，", ['message' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            if (config('app.debug')) {
                return $this->error($e->getMessage());
            }
            return $this->error('服务异常，请稍后再试');
        }
        return $this->success('上传成功', $image->setAppends(['pathname', 'links'])->only(
            'id', 'pathname', 'origin_name', 'size', 'mimetype', 'md5', 'sha1', 'links'
        ));
    }

    public function output(Request $request, ImageService $service): StreamedResponse
    {
        /** @var Image $image */
        $image = Image::query()
            ->with('group')
            ->where('key', $request->route('key'))
            ->where('extension', $request->route('extension'))
            ->firstOr(fn() => abort(404));
        if (! $image->group->configs->get(GroupConfigKey::IsEnableOriginalProtection)) {
            abort(404);
        }
        try {
            $cacheKey = "image_{$image->key}";

            if (Cache::has($cacheKey)) {
                $contents = Cache::get($cacheKey);
            } else {
                $contents = $image->filesystem()->read($image->pathname);
                // 是否启用了水印功能，跳过gif图片
                if ($image->group->configs->get(GroupConfigKey::IsEnableWatermark) && $image->mimetype !== 'image/gif') {
                    $configs = $image->group->configs->get(GroupConfigKey::WatermarkConfigs);
                    $contents = (string)$service->stickWatermark($contents, collect($configs))->encode();
                }
                $cacheTtl = (int)$image->group->configs->get(GroupConfigKey::ImageCacheTtl, 0);
                // 是否启用了缓存
                if ($cacheTtl) {
                    Cache::remember($cacheKey, $cacheTtl, fn () => $contents);
                } else {
                    if (Cache::has($cacheKey)) Cache::forget($cacheKey);
                }
            }
        } catch (FilesystemException $e) {
            abort(404);
        }

        return \response()->stream(function () use ($contents) {
            echo $contents;
        }, headers: ['Content-type' => $image->mimetype]);
    }

    public function thumbnail(Request $request): StreamedResponse
    {
        /** @var Image $image */
        $image = Image::query()
            ->where('key', $request->route('key'))
            ->where('extension', $request->route('extension'))
            ->firstOr(fn() => abort(404));

        try {
            $cacheKey = "image_thumb_{$image->key}";

            if (Cache::has($cacheKey)) {
                $contents = Cache::get($cacheKey);
            } else {
                $stream = $image->filesystem()->readStream($image->pathname);
                $img = \Intervention\Image\Facades\Image::make($stream);

                $width = $w = $image->width;
                $height = $h = $image->height;

                $max = 400; // 最大宽高

                if ($w > $max && $h > $max) {
                    $scale = min($max / $w, $max / $h);
                    $width  = (int)($w * $scale);
                    $height = (int)($h * $scale);
                }

                $contents = $img->fit($width, $height, fn($constraint) => $constraint->upsize())->encode();
                Cache::rememberForever($cacheKey, fn () => (string)$contents);
            }
        } catch (FilesystemException $e) {
            abort(404);
        }

        return \response()->stream(function () use ($contents) {
            echo $contents;
        }, headers: ['Content-type' => $image->mimetype]);
    }
}
