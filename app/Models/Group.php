<?php

namespace App\Models;

use App\Enums\ConfigKey;
use App\Enums\GroupConfigKey;
use App\Utils;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
        'configs' => 'collection',
    ];

    /**
     * 默认组配置，同时也属于访客组默认配置
     *
     * @return Collection
     */
    public static function getDefaultConfigs(): Collection
    {
        return Utils::config(ConfigKey::GuestGroupConfigs);
    }

    protected static function booted()
    {
        static::creating(function (self $group) {
            $group->configs = self::getDefaultConfigs()->merge($group->configs ?: []);
        });
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'group_id', 'id');
    }

    public function strategies(): HasMany
    {
        return $this->hasMany(Strategy::class, 'group_id', 'id');
    }
}
