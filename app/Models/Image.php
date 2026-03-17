<?php

namespace App\Models;

use App\Enums\GroupConfigKey;
use App\Enums\ImagePermission;
use App\Enums\ImageReviewStatus;
use App\Jobs\DeleteImagePhysicalFileJob;
use App\Services\HookManager;
use App\Services\ImagePlaceholderService;
use App\Services\ImageService;
use App\Services\SignedUrlService;
use App\Services\WebhookEventService;
use App\Utils;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use League\Flysystem\Filesystem;

/**
 * @property int $id
 * @property int $user_id
 * @property int $album_id
 * @property int $group_id
 * @property int $strategy_id
 * @property int|null $space_id
 * @property string $key
 * @property string $path
 * @property string $name
 * @property string $pathname
 * @property string $origin_name
 * @property string $alias_name
 * @property string $filename
 * @property float $size
 * @property string $mimetype
 * @property string $extension
 * @property string $md5
 * @property string $sha1
 * @property integer $width
 * @property integer $height
 * @property string $url
 * @property string $thumb_url
 * @property Collection $links
 * @property int $permission
 * @property boolean $is_unhealthy
 * @property string $review_status
 * @property string|null $review_reason
 * @property Carbon|null $reviewed_at
 * @property int|null $reviewed_by
 * @property string $uploaded_ip
 * @property Carbon $updated_at
 * @property Carbon $created_at
 * @property-read User $user
 * @property-read Album $album
 * @property-read Group $group
 * @property-read Strategy $strategy
 * @property-read TeamSpace|null $space
 */
class Image extends Model
{
    use HasFactory, SoftDeletes;

    private ?bool $sourceExistsCache = null;

    protected $fillable = [
        'key',
        'path',
        'name',
        'origin_name',
        'alias_name',
        'size',
        'mimetype',
        'extension',
        'md5',
        'sha1',
        'width',
        'height',
        'permission',
        'is_unhealthy',
        'review_status',
        'review_reason',
        'reviewed_at',
        'reviewed_by',
        'uploaded_ip',
        'expire_at',
        'ocr_text',
        'space_id',
    ];

    protected $hidden = [
        'user_id',
        'album_id',
        'group_id',
        'strategy_id',
        'space_id',
    ];

    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'album_id' => 'integer',
        'group_id' => 'integer',
        'strategy_id' => 'integer',
        'space_id' => 'integer',
        'width' => 'integer',
        'height' => 'integer',
        'size' => 'float',
        'is_unhealthy' => 'bool',
        'permission' => 'integer',
        'reviewed_by' => 'integer',
        'expire_at' => 'datetime',
        'reviewed_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];

    protected ?Filesystem $filesystem = null;

    protected static function booted()
    {
        static::creating(function (self $image) {
            $image->key = $image->generateKey();
        });

        static::created(function (self $image) {
            app(HookManager::class)->dispatch('image.uploaded', $image->toWebhookPayload());
            app(WebhookEventService::class)->dispatch('image.uploaded', $image->toWebhookPayload());
        });

        static::deleting(function (self $image) {
            app(HookManager::class)->dispatch('image.deleting', $image->toWebhookPayload());

            if (! $image->isForceDeleting()) {
                Cache::forget("image_{$image->key}");
                return;
            }

            if (config('queue.image_delete.async', false)) {
                Cache::forget("image_{$image->key}");
                return;
            }

            $image->deletePhysicalFileSync();
        });

        static::deleted(function (self $image) {
            if ($image->isForceDeleting() && ! is_null($image->getOriginal('deleted_at'))) {
                // Soft-deleted records may be force-deleted later by cleanup,
                // avoid duplicate "image.deleted" events for the same business delete.
                return;
            }

            app(HookManager::class)->dispatch('image.deleted', $image->toWebhookPayload());
            app(WebhookEventService::class)->dispatch('image.deleted', $image->toWebhookPayload());

            if (! $image->isForceDeleting()) {
                return;
            }

            if (! config('queue.image_delete.async', false)) {
                return;
            }

            if (! $image->strategy_id) {
                Cache::forget("image_{$image->key}");
                return;
            }

            DeleteImagePhysicalFileJob::dispatch(
                strategyId: (int) $image->strategy_id,
                pathname: $image->pathname,
                md5: $image->md5,
                sha1: $image->sha1,
                key: $image->key,
                thumbnailPathname: $image->getThumbnailPathname(),
            )
                ->onConnection(config('queue.image_delete.connection'))
                ->onQueue(config('queue.image_delete.queue', 'image-delete'))
                ->afterCommit();
        });
    }

    protected function deletePhysicalFileSync(): void
    {
        if (! $this->strategy_id) {
            Cache::forget("image_{$this->key}");
            return;
        }

        // 在当前图片所属的策略中是否存在其他相同 md5 和 sha1 的记录（含软删除），没有则可以删除物理文件
        if (! static::withTrashed()
            ->where('strategy_id', $this->strategy_id)
            ->where('id', '<>', $this->id)
            ->where('md5', $this->md5)
            ->where('sha1', $this->sha1)
            ->exists()
        ) {
            try {
                $this->filesystem()->delete($this->pathname);
                @unlink(public_path($this->getThumbnailPathname()));
            } catch (\Throwable $e) {
                Utils::e($e, '删除物理文件时发生异常');
            }
        }

        Cache::forget("image_{$this->key}");
    }

    public function toWebhookPayload(): array
    {
        return [
            'id' => (int) $this->id,
            'key' => (string) $this->key,
            'url' => (string) $this->url,
            'thumb_url' => (string) $this->thumb_url,
            'size' => (float) $this->size,
            'mimetype' => (string) $this->mimetype,
            'extension' => (string) $this->extension,
            'width' => (int) $this->width,
            'height' => (int) $this->height,
            'permission' => (int) $this->permission,
            'is_unhealthy' => (bool) $this->is_unhealthy,
            'user_id' => $this->user_id ? (int) $this->user_id : null,
            'album_id' => $this->album_id ? (int) $this->album_id : null,
            'group_id' => $this->group_id ? (int) $this->group_id : null,
            'strategy_id' => $this->strategy_id ? (int) $this->strategy_id : null,
            'space_id' => $this->space_id ? (int) $this->space_id : null,
            'uploaded_ip' => (string) $this->uploaded_ip,
            'created_at' => optional($this->created_at)->toIso8601String(),
            'deleted_at' => optional($this->deleted_at)->toIso8601String(),
        ];
    }

    public function scopeFilter(Builder $builder, Request $request)
    {
        return $builder->when($request->query('order') ?: 'newest', function (Builder $builder, $order) {
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
        })->when($request->query('permission') ?: 'all', function (Builder $builder, $permission) {
            switch ($permission) {
                case 'public':
                    $builder->where('permission', ImagePermission::Public);
                    break;
                case 'private':
                    $builder->where('permission', ImagePermission::Private);
                    break;
            }
        })->when($request->query('keyword'), function (Builder $builder, $keyword) {
            $builder->where(function (Builder $query) use ($keyword) {
                $query->where('origin_name', 'like', "%{$keyword}%")
                    ->orWhere('alias_name', 'like', "%{$keyword}%");
            });
        })->when($request->query('tag_keyword'), function (Builder $builder, $tagKeyword) {
            $builder->whereHas('tags', function (Builder $query) use ($tagKeyword) {
                $query->where('name', 'like', "%{$tagKeyword}%");
            });
        })->when($request->query('ocr_keyword'), function (Builder $builder, $ocrKeyword) {
            $builder->where('ocr_text', 'like', "%{$ocrKeyword}%");
        })->when($request->query('q'), function (Builder $builder, $q) {
            $builder->where(function (Builder $query) use ($q) {
                $query->where('origin_name', 'like', "%{$q}%")
                    ->orWhere('alias_name', 'like', "%{$q}%")
                    ->orWhere('ocr_text', 'like', "%{$q}%")
                    ->orWhereHas('tags', function (Builder $tagQuery) use ($q) {
                        $tagQuery->where('name', 'like', "%{$q}%");
                    });
            });
        })->when((int) $request->query('album_id'), function (Builder $builder, $albumId) {
            $builder->where('album_id', $albumId);
        }, function (Builder $builder) {
            $builder->whereNull('album_id');
        })->when($request->query('review_status'), function (Builder $builder, $reviewStatus) {
            if (in_array($reviewStatus, ImageReviewStatus::values(), true)) {
                $builder->where('review_status', $reviewStatus);
            }
        });
    }

    public function filename(): Attribute
    {
        return new Attribute(fn() => $this->alias_name ?: $this->origin_name);
    }

    public function pathname(): Attribute
    {
        $path = $this->path ? "{$this->path}/" : '';
        return new Attribute(fn() => "{$path}{$this->name}");
    }

    public function url(): Attribute
    {
        return new Attribute(function () {
            if (! $this->sourceExists()) {
                return app(ImagePlaceholderService::class)->urlForMissingSource($this);
            }

            // 是否启用原图保护功能
            if ($this->group?->configs->get(GroupConfigKey::IsEnableOriginalProtection)) {
                $url = asset("{$this->key}.{$this->extension}");
                $url .= ($this->strategy?->configs->get('queries') ?: '');

                return app(SignedUrlService::class)->signImageUrl($this, $url);
            } else {
                $url = rtrim($this->strategy?->configs->get('url'), '/').'/'.ltrim($this->pathname, '/');
            }

            // 拼接图片 url
            return $url.($this->strategy?->configs->get('queries') ?: '');
        });
    }

    public function thumbUrl(): Attribute
    {
        return new Attribute(function () {
            $pathname = $this->getThumbnailPathname();

            if (file_exists(public_path($pathname))) {
                return asset($pathname);
            }

            if (! $this->sourceExists()) {
                return app(ImagePlaceholderService::class)->urlForMissingSource($this);
            }

            return $this->url;
        });
    }

    public function previewUrl(): Attribute
    {
        return new Attribute(function () {
            $ext = strtolower((string) $this->extension);
            $needPreviewPipeline = in_array($ext, ['pdf', 'doc', 'docx', 'xls', 'xlsx', 'csv', 'ppt', 'pptx', 'raw', 'psd', 'tif', 'bmp', 'zip', 'rar'], true);
            if (! $needPreviewPipeline) {
                return $this->thumb_url;
            }
            return route('user.image.preview', ['id' => $this->id]);
        });
    }

    public function links(): Attribute
    {
        return new Attribute(function () {
            // FIX-22: 转义 origin_name 防止 XSS
            $safeName = htmlspecialchars((string) $this->origin_name, ENT_QUOTES, 'UTF-8');
            return collect([
                'url' => $this->url,
                'html' => "&lt;img src=\"{$this->url}\" alt=\"{$safeName}\" title=\"{$safeName}\" /&gt;",
                'bbcode' => "[img]{$this->url}[/img]",
                'markdown' => "![{$safeName}]({$this->url})",
                'markdown_with_link' => "[![{$safeName}]({$this->url})]({$this->url})",
                'thumbnail_url' => $this->thumb_url,
            ]);
        });
    }

    public function filesystem(): Filesystem
    {
        if (is_null($this->filesystem)) {
            $this->filesystem = new Filesystem((new ImageService())->getAdapter($this->strategy));
        }
        return $this->filesystem;
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function album(): BelongsTo
    {
        return $this->belongsTo(Album::class, 'album_id', 'id');
    }

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }

    public function strategy(): BelongsTo
    {
        return $this->belongsTo(Strategy::class, 'strategy_id', 'id');
    }

    public function space(): BelongsTo
    {
        return $this->belongsTo(TeamSpace::class, 'space_id', 'id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'image_tag', 'image_id', 'tag_id');
    }

    public function intelligenceRecord(): HasOne
    {
        return $this->hasOne(ImageIntelligenceRecord::class, 'image_id', 'id');
    }

    public function intelligenceTerms(): HasMany
    {
        return $this->hasMany(ImageIntelligenceTerm::class, 'image_id', 'id');
    }

    public function getThumbnailPathname(): string
    {
        return trim(config('app.thumbnail_path'), '/')."/{$this->md5}.png";
    }

    public function sourceExists(): bool
    {
        if (! is_null($this->sourceExistsCache)) {
            return $this->sourceExistsCache;
        }

        try {
            $this->sourceExistsCache = $this->filesystem()->fileExists($this->pathname);
        } catch (\Throwable $e) {
            Utils::e($e, '检测图片源文件是否存在时出现异常');
            $this->sourceExistsCache = false;
        }

        return $this->sourceExistsCache;
    }

    private function generateKey($length = 6): string
    {
        $key = Str::random($length);
        if (self::query()->where('key', $key)->exists()) {
            return $this->generateKey(++$length);
        }
        return $key;
    }

    public function getDocumentViewerUrlAttribute(): ?string
    {
        $ext = strtolower($this->extension ?? '');
        if (in_array($ext, ['pdf','doc','docx','xls','xlsx','csv','ppt','pptx','svg'])) {
            return route('document.viewer', ['id' => $this->id]);
        }
        return null;
    }

}
