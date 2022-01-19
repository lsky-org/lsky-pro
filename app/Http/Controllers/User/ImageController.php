<?php

namespace App\Http\Controllers\User;

use App\Enums\ImagePermission;
use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRenameRequest;
use App\Models\Album;
use App\Models\Image;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class ImageController extends Controller
{
    public function index(): View
    {
        return view('images');
    }

    public function images(Request $request): Response
    {
        /** @var User $user */
        $user = Auth::user();

        $images = Image::with('group', 'strategy')
            ->where('user_id', $user->id)
            ->when($request->query('order') ?: 'newest', function (Builder $builder, $order) {
                switch ($order) {
                    case 'earliest':
                        $builder->orderBy('created_at');
                        break;
                    case 'utmost':
                        $builder->orderByDesc('size');
                        break;
                    case 'least':
                        $builder->orderBy('size');
                        break;
                    default:
                        $builder->latest();
                }
            })->when($request->query('visibility') ?: 'all', function (Builder $builder, $visibility) {
                switch ($visibility) {
                    case 'public':
                        $builder->where('permission', ImagePermission::Public);
                        break;
                    case 'private':
                        $builder->where('permission', ImagePermission::Private);
                        break;
                }
            })->when($request->query('keyword'), function (Builder $builder, $keyword) {
                $builder->whereRaw("concat(IFNULL(origin_name,''),IFNULL(alias_name,'')) like ?", ["%{$keyword}%"]);
            })->when((int) $request->query('album_id'), function (Builder $builder, $albumId) {
                $builder->where('album_id', $albumId);
            }, function (Builder $builder) {
                $builder->whereNull('album_id');
            })->paginate(40);
        $images->getCollection()->each(function (Image $image) {
            $image->human_date = $image->created_at->diffForHumans();
            $image->date = $image->created_at->format('Y-m-d H:i:s');
            $image->append(['url', 'thumb_url', 'filename', 'links'])->setVisible([
                'id', 'filename', 'url', 'thumb_url', 'human_date', 'date', 'size', 'width', 'height', 'links'
            ]);
        });
        return $this->success('success', compact('images'));
    }

    public function image(Request $request): Response
    {
        /** @var User $user */
        $user = Auth::user();
        /** @var Image $image */
        if (!$image = $user->images()->find($request->route('id'))) {
            return $this->error('未找到该图片');
        }
        $image->strategy->setVisible(['name']);
        $image->album?->setVisible(['name']);
        $image->append(['url', 'thumb_url', 'filename', 'links'])->setVisible([
            'id', 'filename', 'origin_name', 'url', 'thumb_url', 'width', 'height', 'size', 'mimetype', 'md5', 'sha1',
            'permission', 'strategy', 'album', 'uploaded_ip', 'links', 'created_at'
        ]);
        return $this->success('success', compact('image'));
    }

    public function permission(Request $request): Response
    {
        /** @var User $user */
        $user = Auth::user();
        $permission = $request->input('permission');
        $permissions = ['public' => ImagePermission::Public, 'private' => ImagePermission::Private];
        if (!in_array($permission, array_keys($permissions))) {
            return $this->error('设置失败');
        }
        $user->images()->whereIn('id', (array) $request->input('ids'))->update([
            'permission' => $permissions[$permission],
        ]);
        return $this->success('设置成功');
    }

    public function rename(ImageRenameRequest $request): Response
    {
        /** @var User $user */
        $user = Auth::user();
        /** @var Image $image */
        if ($image = $user->images()->find($request->input('id'))) {
            $image->alias_name = $request->input('name');
            $image->save();
        }

        return $this->success('重命名成功', $image->only('id', 'filename'));
    }

    public function movement(Request $request): Response
    {
        /** @var User $user */
        $user = Auth::user();
        DB::transaction(function () use ($user, $request) {
            /** @var null|Album $album */
            $album = $user->albums()->find((int) $request->input('id'));
            $user->images()->whereIn('id', $request->input('selected'))->update([
                'album_id' => $album->id ?? null,
            ]);
            if ($album) {
                $album->image_num = $album->images()->count();
                $album->save();
            }
            if ($albumId = (int) $request->input('album_id')) {
                /** @var Album $originAlbum */
                $originAlbum = $user->albums()->find($albumId);
                $originAlbum->image_num = $originAlbum->images()->count();
                $originAlbum->save();
            }
        });
        return $this->success('移动成功');
    }

    public function delete(Request $request): Response
    {
        /** @var User $user */
        $user = Auth::user();
        $model = Image::with('strategy')->where('user_id', $user->id)->whereIn('id', $request->all() ?: []);
        DB::transaction(function () use ($model, $user) {
            /** @var Image $image */
            foreach ($model->cursor() as $image) {
                $image->delete();
            }
            // 更新数量
            $user->image_num = $user->images()->count();
            $user->save();
        });
        return $this->success('删除成功');
    }
}
