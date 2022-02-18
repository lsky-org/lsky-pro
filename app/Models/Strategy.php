<?php

namespace App\Models;

use App\Enums\StrategyKey;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Filesystem\Filesystem;

/**
 * @property int $id
 * @property int $key
 * @property string $name
 * @property string $intro
 * @property \Illuminate\Support\Collection $configs
 * @property Carbon $updated_at
 * @property Carbon $created_at
 * @property-read Collection $groups
 * @property-read Collection $images
 */
class Strategy extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'name',
        'intro',
        'configs',
    ];

    protected $attributes = [
        'intro' => '',
    ];

    protected $casts = [
        'configs' => 'collection',
    ];

    const DRIVERS = [
        StrategyKey::Local => '本地',
        StrategyKey::S3 => 'Amazon S3',
        StrategyKey::Oss => '阿里云 OSS',
        StrategyKey::Cos => '腾讯云 COS',
        StrategyKey::Kodo => '七牛云 Kodo',
        StrategyKey::Uss => '又拍云 USS',
        StrategyKey::Sftp => 'SFTP',
        StrategyKey::Ftp => 'FTP',
        StrategyKey::Webdav => 'WebDav',
    ];

    protected static function booted()
    {
        static::saving(function (self $strategy) {
            $strategy->configs['root'] = $strategy->configs->get('root');
            $strategy->configs['url'] = rtrim($strategy->configs->get('url'), '/');
            if ($strategy->key == StrategyKey::Local) {
                $symlink = self::getRootPath($strategy->configs['url']);
                $target = $strategy->configs['root'] ?: config('filesystems.disks.uploads.root');
                if (! realpath(public_path($symlink))) {
                    (new Filesystem())->link($target, $symlink);
                }
                // 是否需要移除旧的符号链接
                $url = $strategy->getOriginal('configs')['url'] ?? '';
                if ($url) {
                    $oldSymlink = self::getRootPath($url);
                    if ($oldSymlink != $symlink) {
                        @unlink($oldSymlink);
                    }
                }
            }
        });
    }

    public static function getRootPath($url): string
    {
        $path = (parse_url($url)['path'] ?? '');
        return current(array_filter(explode('/', $path)));
    }

    public function intro(): Attribute
    {
        return new Attribute(
            set: fn ($value) => $value ?: '',
        );
    }

    public function groups(): BelongsToMany
    {
        return $this->belongsToMany(Group::class, 'group_strategy', 'strategy_id', 'group_id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class, 'strategy_id', 'id');
    }
}
