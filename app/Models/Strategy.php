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
            $strategy->configs['root'] = $strategy->configs->get('root', '');
            $strategy->configs['domain'] = rtrim($strategy->configs->get('domain', env('APP_URL')), '/');

            // TODO 本地储存，创建/修改符号链接
            /*if ($strategy->key == StrategyKey::Local && $strategy->configs['root']) {
                $link = ($strategy->getOriginal('configs')['symlink'] ?? '');
                if ($link && $link !== $strategy->configs['symlink']) {
                    // 删除已存在的符号链接
                    @unlink($link);
                }
                $link = public_path($strategy->configs['symlink']);
                if (! realpath($link)) {
                    (new Filesystem())->link($strategy->configs['root'], $link);
                }
            }*/
        });
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
