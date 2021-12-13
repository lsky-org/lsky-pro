<?php

namespace App\Models;

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
 * @property-read User[] $users
 * @property-read Strategy[] $strategies
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

    protected static function booted()
    {
        static::creating(function (self $group) {
            $group->configs = collect([
                'upload_max_size' => 5120, // 最大上传大小
                'upload_single_num' => 3, // 单次同时上传数量
                'is_need_review' => false, // 上传是否需要审查
                'limit_per_day' => 0, // 每天可以上传数量，0 为不限制
                'upload_allowed_types' => ['jpg', 'jpeg', 'gif', 'png', 'ico'], // 允许上传的文件类型
                'path_naming_rule' => '{Y}/{m}/{d}', // 路径命名规则
                'file_naming_rule' => '{uniqid}', // 文件命名规则
                'user_initial_capacity' => 1048576, // 用户初始容量
            ])->merge($group->configs ?: []);
        });
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'user_id', 'id');
    }

    public function strategies(): HasMany
    {
        return $this->hasMany(Strategy::class, 'group_id', 'id');
    }
}
