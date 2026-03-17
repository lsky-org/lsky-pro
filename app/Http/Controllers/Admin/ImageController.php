<?php

namespace App\Http\Controllers\Admin;

use App\Enums\ImagePermission;
use App\Enums\ImageReviewStatus;
use App\Http\Controllers\Concerns\AuditsOperations;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ImageController extends Controller
{
    use AuditsOperations;

    public function index(Request $request)
    {
        $keywords = $request->query('keywords');
        $reviewStatus = (string) $request->query('review_status', '');
        $perPage = (int) $request->query('per_page', 50);
        if (! in_array($perPage, [50, 100, 150, 200], true)) {
            $perPage = 50;
        }
        $images = Image::query()->with(['user' => function (BelongsTo $belongsTo) {
            $belongsTo->withSum('images', 'size');
        }, 'album', 'group', 'strategy', 'tags:id,name'])->when($keywords, function (Builder $builder, $keywords) {
            $words = [];
            $qualifiers = [
                'name:', 'uid:', 'album:', 'group:', 'strategy:', 'email:', 'extension:', 'md5:', 'sha1:', 'ip:', 'is:', 'order:',
            ];
            collect(array_filter(explode(' ', $keywords)))->filter(function ($keyword) use ($qualifiers, &$words) {
                if (Str::startsWith($keyword, $qualifiers)) {
                    return true;
                }
                $words[] = $keyword;

                return false;
            })->each(function ($filter) use ($builder) {
                switch ($filter) {
                    case 'is:public':
                        $builder->where('permission', ImagePermission::Public);
                        break;
                    case 'is:private':
                        $builder->where('permission', ImagePermission::Private);
                        break;
                    case 'is:unhealthy':
                        $builder->where('is_unhealthy', 1);
                        break;
                    case 'is:guest':
                        $builder->whereNull('user_id');
                        break;
                    case 'is:adminer':
                        $builder->whereHas('user', fn (Builder $builder) => $builder->where('is_adminer', 1));
                        break;
                    case 'order:earliest':
                        $builder->orderBy('created_at');
                        break;
                    case 'order:utmost':
                        $builder->orderByDesc('size');
                        break;
                    case 'order:least':
                        $builder->orderBy('size');
                        break;
                }

                [$qualifier, $value] = explode(':', $filter);

                if ($value) {
                    $callback = fn (Builder $builder) => $builder->where('name', $value);
                    switch ($qualifier) {
                        case 'name':
                            $builder->whereHas('user', $callback);
                            break;
                        case 'album':
                            $builder->whereHas('album', $callback);
                            break;
                        case 'group':
                            $builder->whereHas('group', $callback);
                            break;
                        case 'strategy':
                            $builder->whereHas('strategy', $callback);
                            break;
                        case 'email':
                            $builder->whereHas('user', fn (Builder $builder) => $builder->where('email', $value));
                            break;
                        case 'uid':
                            $builder->where('user_id', (int) $value);
                            break;
                        case 'extension':
                            $builder->where('extension', $value);
                            break;
                        case 'md5':
                            $builder->where('md5', $value);
                            break;
                        case 'sha1':
                            $builder->where('sha1', $value);
                            break;
                        case 'ip':
                            $builder->where('ip', $value);
                            break;
                    }
                }
            });

            foreach ($words as $word) {
                $builder->where('name', 'like', "%{$word}%")
                    ->orWhere('origin_name', 'like', "%{$word}%")
                    ->orWhere('alias_name', 'like', "%{$word}%");
            }
        })->when(in_array($reviewStatus, ImageReviewStatus::values(), true), function (Builder $builder) use ($reviewStatus) {
            $builder->where('review_status', $reviewStatus);
        })->latest()->paginate($perPage);
        $images->getCollection()->each(function (Image $image) {
            $image->append('url', 'pathname', 'thumb_url', 'preview_url', 'filename');
            if ($image->album) {
                $image->album->setVisible(['name']);
            }
            if ($image->group) {
                $image->group->setVisible(['name']);
            }
            if ($image->strategy) {
                $image->strategy->setVisible(['name']);
            }
            if ($image->relationLoaded('tags')) {
                $image->tags->makeVisible(['name']);
            }
        });

        $images->appends([
            'keywords' => $keywords,
            'review_status' => $reviewStatus,
            'per_page' => $perPage,
        ]);

        if ($request->boolean('json')) {
            return $this->success('获取图片列表成功', [
                'images' => $images->items(),
                'pagination' => [
                    'current_page' => $images->currentPage(),
                    'last_page' => $images->lastPage(),
                    'per_page' => $images->perPage(),
                    'total' => $images->total(),
                ],
            ]);
        }

        $users = User::query()
            ->withCount('images')
            ->orderByDesc('images_count')
            ->limit(120)
            ->get(['id', 'name']);

        return view('admin.image.index', compact('images', 'users', 'perPage'));
    }

    public function update(Request $request): Response
    {
        $validated = $request->validate([
            'alias_name' => 'required|string|max:80',
        ]);

        /** @var Image|null $image */
        $image = Image::query()->find($request->route('id'));
        if (! $image) {
            $this->auditOperation($request, 'admin.image.update', 'image', 'failed', [
                'target' => $request->route('id'),
                'reason' => 'not_found',
            ], 'warning');

            return $this->fail('图片不存在');
        }

        $image->alias_name = trim((string) $validated['alias_name']);
        $image->save();

        $this->auditOperation($request, 'admin.image.update', 'image', 'success', [
            'target' => $request->route('id'),
            'alias_name' => $image->alias_name,
        ]);

        return $this->success('重命名成功', [
            'image' => [
                'id' => (int) $image->id,
                'alias_name' => (string) $image->alias_name,
                'filename' => (string) $image->filename,
            ],
        ]);
    }

    public function batchDelete(Request $request): Response
    {
        $ids = array_values(array_filter(array_map('intval', (array) $request->input('ids', []))));
        if (empty($ids)) {
            $this->auditOperation($request, 'admin.image.batch_delete', 'image', 'failed', [
                'target' => null,
                'reason' => 'empty_ids',
            ], 'warning');

            return $this->fail('未选择图片');
        }

        (new UserService())->deleteImages($ids);

        $this->auditOperation($request, 'admin.image.batch_delete', 'image', 'success', [
            'target' => $ids,
            'deleted_count' => count($ids),
        ]);

        return $this->success('批量删除成功');
    }

    public function delete(Request $request): Response
    {
        $imageId = $request->route('id');

        /** @var Image|null $image */
        $image = Image::with('user', 'strategy', 'album')->find($imageId);
        if (! $image) {
            $this->auditOperation($request, 'admin.image.delete', 'image', 'failed', [
                'target' => $imageId,
                'reason' => 'not_found',
            ], 'warning');

            return $this->fail('图片不存在');
        }

        (new UserService())->deleteImages([$image->id]);

        $this->auditOperation($request, 'admin.image.delete', 'image', 'success', [
            'target' => $image->id,
        ]);

        return $this->success('删除成功');
    }
}
