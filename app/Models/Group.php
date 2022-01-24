<?php

namespace App\Models;

use App\Enums\ConfigKey;
use App\Utils;
use Barryvdh\Debugbar\Facades\Debugbar;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

/**
 * @property int $id
 * @property string $name
 * @property boolean $is_default
 * @property Collection $configs
 * @property Carbon $updated_at
 * @property Carbon $created_at
 * @property-read \Illuminate\Database\Eloquent\Collection $users
 * @property-read \Illuminate\Database\Eloquent\Collection $strategies
 */
class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'is_default',
        'configs',
    ];

    protected $casts = [
        'is_default' => 'bool',
        'configs' => 'collection'
    ];

    const POSITIONS = [
        'top-left' => '左上角',
        'top' => '上中',
        'top-right' => '右上角',
        'left' => '左边',
        'center' => '中间',
        'right' => '右边',
        'bottom-left' => '左下角',
        'bottom' => '下中',
        'bottom-right' => '右下角',
        'tiled' => '平铺',
    ];

    const SCENES = [
        'porn' => '智能鉴黄',
        'terrorism' => '暴恐涉政',
        'ad' => '图文违规',
        'qrcode' => '二维码',
        'live' => '不良场景',
        'logo' => 'Logo',
    ];

    protected static function booted()
    {
        static::saving(function (self $group) {
            $group->configs = Utils::parseConfigs(self::getDefaultConfigs()->toArray(), $group->configs->toArray());
        });
    }

    /**
     * 获取组默认配置
     *
     * @return Collection
     */
    public static function getDefaultConfigs(): Collection
    {
        return collect(config('convention.app.'.ConfigKey::GroupConfigs));
    }

    /**
     * 获取访客组默认配置
     *
     * @return Collection
     */
    public static function getGuestConfigs(): Collection
    {
        return Utils::config(ConfigKey::GroupConfigs);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'group_id', 'id');
    }

    public function strategies(): BelongsToMany
    {
        return $this->belongsToMany(Strategy::class, 'group_strategy', 'group_id', 'strategy_id');
    }
}
