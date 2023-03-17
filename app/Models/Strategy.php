<?php

namespace App\Models;

use App\Enums\StrategyKey;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Carbon;
use Sabre\DAV\Client;

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
        'id' => 'integer',
        'key' => 'integer',
        'configs' => 'collection',
    ];

    const DRIVERS = [
        StrategyKey::Local => '本地',
        StrategyKey::S3 => 'AWS S3',
        StrategyKey::Oss => '阿里云 OSS',
        StrategyKey::Cos => '腾讯云 COS',
        StrategyKey::Kodo => '七牛云 Kodo',
        StrategyKey::Uss => '又拍云 USS',
        StrategyKey::Sftp => 'SFTP',
        StrategyKey::Ftp => 'FTP',
        StrategyKey::Webdav => 'WebDav',
        StrategyKey::Minio => 'Minio',
    ];

    const WEBDAV_AUTH_TYPES = [
        '' => 'Auto',
        Client::AUTH_BASIC => 'Basic',
        Client::AUTH_DIGEST => 'Digest',
        Client::AUTH_NTLM => 'Ntlm',
    ];

    protected static function booted()
    {
        static::saving(function (self $strategy) {
            $strategy->configs['root'] = $strategy->configs->get('root');
            $strategy->configs['url'] = rtrim($strategy->configs->get('url'), '/');
            if ($strategy->key == StrategyKey::Local) {
                $symlink = self::getRootPath($strategy->configs['url']);
                $target = $strategy->configs['root'] ?: config('filesystems.disks.uploads.root');
                if (! is_dir(public_path($symlink))) {
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

        static::deleted(function (self $strategy) {
            // 如果是本地策略，删除的时候同时删除符号连接
            if ($strategy->key === StrategyKey::Local) {
                $symlink = self::getRootPath($strategy->configs['url']);
                @unlink(public_path($symlink));
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
