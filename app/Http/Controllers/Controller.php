<?php

namespace App\Http\Controllers;

use App\Enums\GroupConfigKey;
use App\Exceptions\UploadException;
use App\Http\Api;
use App\Models\Image;
use App\Models\User;
use App\Services\ImageService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use League\Flysystem\FilesystemException;
use Symfony\Component\Console\Output\StreamOutput;
use Symfony\Component\HttpFoundation\StreamedResponse;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, Api;

    public function install(Request $request): View|Response
    {
        if (file_exists(base_path('installed.lock'))) {
            if ($request->expectsJson()) {
                return $this->error('Already installed. if you want to reinstall, please remove installed.lock file.');
            }
            abort(404);
        }

        $extensions = collect([
            ['name' => 'BCMath', 'intro' => '数学精度处理拓展'],
            ['name' => 'Ctype', 'intro' => '字符类型检测拓展'],
            ['name' => 'DOM', 'intro' => 'DOM 对象模型，用于处理文档元素'],
            ['name' => 'Fileinfo', 'intro' => '获取文件信息拓展'],
            ['name' => 'JSON', 'intro' => 'JavaScript 对象符号（JSON）'],
            ['name' => 'Mbstring', 'intro' => '多字节字符串处理拓展'],
            ['name' => 'OpenSSL', 'intro' => '加密拓展'],
            ['name' => 'PCRE', 'intro' => '正则表达式拓展'],
            ['name' => 'PDO', 'intro' => '数据库拓展'],
            ['name' => 'Tokenizer', 'intro' => '令牌处理拓展'],
            ['name' => 'XML', 'intro' => 'Xml 解析器'],
            ['name' => 'Imagick', 'intro' => '高性能图片处理拓展'],
        ])->transform(function ($item) {
            $item['result'] = extension_loaded(strtolower($item['name']));
            return $item;
        })->push([
            'name' => 'PHP >= 8.0.2',
            'intro' => '最低要求 PHP 8.0.2 版本',
            'result' => phpversion() >= 8,
        ]);

        $status = ! $extensions->where('result', false)->isNotEmpty();

        if ($request->method() === 'POST') {
            try {
                $request->validate([
                    'account.email' => 'required|email',
                    'account.password' => 'required|between:6,32'
                ], [], [
                    'account.email' => '管理员账号邮箱',
                    'account.password' => '管理员账号密码'
                ]);

                $data = collect($request->except('account'))->transform(fn($item, $key) => ['--'.$key => $item])->collapse();
                $stream = fopen('php://output', 'w');
                $exitCode = Artisan::call('lsky:install', $data->toArray(), new StreamOutput($stream));
                $response = str_replace(PHP_EOL, '<br/>', ob_get_clean());
                $user = new User([
                    'name' => '超级管理员',
                    'email' => $request->input('account.email'),
                    'password' => Hash::make($request->input('account.password')),
                    'is_adminer' => true,
                ]);
                $user->email_verified_at = date('Y-m-d H:i:s');
                $user->save();
            } catch (\Throwable $e) {
                @unlink(base_path('installed.lock'));
                return $this->error($e->getMessage());
            }
            if (! $exitCode) {
                return $this->error('安装失败', compact('response'));
            }
            return $this->success();
        }

        return view('install', compact('extensions', 'status'));
    }

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
