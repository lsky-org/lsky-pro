<?php

namespace App\Models;

use App\Enums\ConfigKey;
use App\Utils;
use Carbon\Carbon;
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

    /**
     * 获取访客组默认配置
     *
     * @return Collection
     */
    public static function getGuestConfigs(): Collection
    {
        return Utils::config(ConfigKey::GroupConfigs);
    }

    /**
     * 格式化配置，设置默认配置以及将字符串数字转换为数字
     *
     * @param $configs
     * @return array
     */
    public static function parseConfigs($configs): array
    {
        if ($configs instanceof Collection) {
            $configs = $configs->toArray();
        }

        $array = array_replace_recursive(config('convention.app.'.ConfigKey::GroupConfigs), Utils::filter($configs));
        array_walk_recursive($array, function (&$item) {
            if (ctype_digit($item)) {
                $item += 0;
            }
            if (is_null($item)) {
                unset($item);
            }
        });
        return $array;
    }

    public function setConfigsAttribute($value)
    {
        $this->attributes['configs'] = json_encode(self::parseConfigs($value), JSON_UNESCAPED_UNICODE);
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
