<?php

namespace App\Models;

use App\Enums\Strategy\LocalOption;
use App\Service\ImageService;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use League\Flysystem\Filesystem;

/**
 * @property int $id
 * @property int $user_id
 * @property int $album_id
 * @property int $strategy_id
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
 * @property Collection $links
 * @property int $permission
 * @property boolean $is_unhealthy
 * @property string $uploaded_ip
 * @property Carbon $updated_at
 * @property Carbon $created_at
 * @property-read User $user
 * @property-read Album $album
 * @property-read Strategy $strategy
 */
class Image extends Model
{
    use HasFactory;

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
        'uploaded_ip',
    ];

    protected $hidden = [
        'user_id',
        'album_id',
        'strategy_id',
        'is_unhealthy',
        'permission',
    ];

    protected $casts = [
        'width' => 'integer',
        'height' => 'integer',
        'size' => 'float',
        'is_unhealthy' => 'bool',
    ];

    protected static function booted()
    {
        static::creating(function (self $image) {
            $image->key = $image->generateKey();
        });

        static::deleting(function (self $image) {
            // TODO 检测是否启用了队列，放置队列中异步删除
            // 在当前图片所属的策略中是否存在其他相同 md5 和 sha1 的记录，没有则可以删除物理文件
            if (!static::query()
                ->where('strategy_id', $image->strategy_id)
                ->where('id', '<>', $image->id)
                ->where('md5', $image->md5)
                ->where('sha1', $image->sha1)
                ->exists()
            ) {
                $image->filesystem()->delete($image->pathname);
            }
        });
    }

    public function filename(): Attribute
    {
        return new Attribute(fn() => $this->alias_name ?: $this->origin_name);
    }

    public function pathname(): Attribute
    {
        return new Attribute(fn() => "{$this->path}/{$this->name}");
    }

    public function url(): Attribute
    {
        return new Attribute(function () {
            if (!$this->strategy) {
                return Storage::disk('uploads')->url($this->pathname);
            }
            // 是否启用了获取图片直链功能
            if ($this->strategy->configs->get(LocalOption::IsEnableOriginUrl)) {
                return rtrim($this->strategy->configs->get(LocalOption::Domain), '/').'/'.$this->pathname;
            } else {
                // 原图保护
                return asset("{$this->key}.{$this->extension}");
            }
        });
    }

    public function links(): Attribute
    {
        return new Attribute(fn() => collect([
            'url' => $this->url,
            'html' => "&lt;img src=\"{$this->url}\" alt=\"{$this->origin_name}\" title=\"{$this->origin_name}\" /&gt;",
            'bbcode' => "[img]{$this->url}[/img]",
            'markdown' => "![{$this->origin_name}]({$this->url})",
            'markdown_with_link' => "[![{$this->origin_name}]({$this->url})]({$this->url})",
        ]));
    }

    public function filesystem(): Filesystem
    {
        return new Filesystem((new ImageService())->getAdapter($this->strategy->key, $this->strategy->configs));
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function album(): BelongsTo
    {
        return $this->belongsTo(Album::class, 'album_id', 'id');
    }

    public function strategy(): BelongsTo
    {
        return $this->belongsTo(Strategy::class, 'strategy_id', 'id');
    }

    private function generateKey($length = 6): string
    {
        $key = Str::random($length);
        if (self::query()->where('key', $key)->exists()) {
            return $this->generateKey(++$length);
        }
        return $key;
    }
}
