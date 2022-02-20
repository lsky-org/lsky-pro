<?php

namespace App\Http\Controllers\Api\V1;

use App\Enums\ImagePermission;
use App\Exceptions\UploadException;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\User;
use App\Services\ImageService;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ImageController extends Controller
{
    /**
     * @throws AuthenticationException
     */
    public function upload(Request $request, ImageService $service): Response
    {
        if ($request->hasHeader('Authorization')) {
            $guards = array_keys(config('auth.guards'));

            if (empty($guards)) {
                $guards = [null];
            }

            foreach ($guards as $guard) {
                if (Auth::guard($guard)->check()) {
                    Auth::shouldUse($guard);
                    break;
                }
            }

            if (! Auth::check()) {
                throw new AuthenticationException('Authentication failed.');
            }
        }

        try {
            /** @var User $user */
            $user = Auth::user();
            $image = $service->store($request, $user);
        } catch (UploadException $e) {
            return $this->error($e->getMessage());
        } catch (\Throwable $e) {
            Log::error("Api 上传文件时发生异常，", ['message' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            if (config('app.debug')) {
                return $this->error($e->getMessage());
            }
            return $this->error('服务异常，请稍后再试');
        }
        return $this->success('上传成功', $image->setAppends(['pathname', 'links'])->only(
            'key', 'name', 'pathname', 'origin_name', 'size', 'mimetype', 'extension', 'md5', 'sha1', 'links'
        ));
    }

    public function images(Request $request): Response
    {
        /** @var User $user */
        $user = Auth::user();

        $images = $user->images()->filter($request)->with('group', 'strategy')->paginate(40)->withQueryString();
        $images->getCollection()->each(function (Image $image) {
            $image->human_date = $image->created_at->diffForHumans();
            $image->date = $image->created_at->format('Y-m-d H:i:s');
            $image->append(['pathname', 'links'])->setVisible([
                'key', 'name', 'pathname', 'origin_name', 'size', 'mimetype', 'extension', 'md5', 'sha1',
                'width', 'height', 'links', 'human_date', 'date',
            ]);
        });
        return $this->success('success', $images);
    }
}
