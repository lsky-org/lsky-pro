<?php

namespace App\Http\Controllers\Admin;

use App\Enums\ImagePermission;
use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Services\UserService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ImageController extends Controller
{
    public function index(Request $request): View
    {
        $keywords = $request->query('keywords');

        $images = Image::query()->with(['user' => function (BelongsTo $belongsTo) {
            $belongsTo->withSum('images', 'size');
        }, 'album', 'group', 'strategy'])
        ->when($keywords, function (Builder $builder, $keywords) {
            $words = [];
            $qualifiers = [
                'name:', 'album:', 'group:', 'strategy:', 'email:', 'extension:', 'md5:', 'sha1:', 'ip:', 'is:', 'order:', 'updated:',
            ];
            collect(array_filter(explode(' ', $keywords)))->filter(function ($keyword) use ($qualifiers, &$words) {
                if (Str::startsWith($keyword, $qualifiers)) {
                    return true;
                }
                $words[] = $keyword;
                return false;
            })->each(function ($filter) use ($builder) {
                [$qualifier, $value] = explode(':', $filter);

                if ($value) {
                    match ($qualifier) {
                        'is' => match ($value) {
                            'public' => $builder->where('permission', ImagePermission::Public),
                            'private' => $builder->where('permission', ImagePermission::Private),
                            'unhealthy' => $builder->where('is_unhealthy', 1),
                            'guest' => $builder->whereNull('user_id'),
                            'adminer' => $builder->whereHas('user', fn (Builder $builder) => $builder->where('is_adminer', 1)),
                            default => 0,
                        },
                        'order' => match ($value) {
                            'earliest' => $builder->orderBy('created_at'),
                            'utmost' => $builder->orderByDesc('size'),
                            'least' => $builder->orderBy('size'),
                            default => 0,
                        },
                        'updated' => $this->applyUpdatedFilter($builder, $value),
                        'name' => $builder->whereHas('user', fn (Builder $builder) => $builder->where('name', $value)),
                        'album' => $builder->whereHas('album', fn (Builder $builder) => $builder->where('name', $value)),
                        'group' => $builder->whereHas('group', fn (Builder $builder) => $builder->where('name', $value)),
                        'strategy' => $builder->whereHas('strategy', fn (Builder $builder) => $builder->where('name', $value)),
                        'email' => $builder->whereHas('user', fn (Builder $builder) => $builder->where('email', $value)),
                        'extension' => $builder->where('extension', $value),
                        'md5' => $builder->where('md5', $value),
                        'sha1' => $builder->where('sha1', $value),
                        'ip' => $builder->where('ip', $value),
                        default => 0
                    };
                }
            });

            foreach ($words as $word) {
                $builder->where('name', 'like', "%{$word}%")
                    ->orWhere('origin_name', 'like', "%{$word}%")
                    ->orWhere('alias_name', 'like', "%{$word}%");
            }
        })
        ->latest()
        ->paginate(40);

        $images->getCollection()->each(function (Image $image) {
            $image->append('url', 'pathname', 'thumb_url');
            $image->album?->setVisible(['name']);
            $image->group?->setVisible(['name']);
            $image->strategy?->setVisible(['name']);
        });

        $images->appends(compact('keywords'));

        return view('admin.image.index', compact('images'));
    }

    public function update(): Response
    {
        return $this->success();
    }

    public function delete(Request $request): Response
    {
        /** @var Image $image */
        $image = Image::with('user', 'strategy', 'album')->find($request->route('id'));
        (new UserService())->deleteImages([$image->id]);
        return $this->success('删除成功');
    }

    private function applyUpdatedFilter(Builder $builder, string $value): void
    {
        if (Str::contains($value, '~')) {
            [$startDate, $endDate] = explode('~', $value);
            $builder->whereBetween('created_at', [$startDate, $endDate]);
        } else {
            $builder->whereDate('created_at', $value);
        }
    }
}
