<?php

namespace App\Models;

use App\Enums\UserConfigKey;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property int $id
 * @property int $group_id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property boolean $is_adminer
 * @property float $capacity
 * @property Collection $configs
 * @property int $image_num
 * @property int $album_num
 * @property string $registered_ip
 * @property string $status
 * @property Carbon $email_verified_at
 * @property Carbon $updated_at
 * @property Carbon $created_at
 * @property-read Group $group
 * @property-read \Illuminate\Database\Eloquent\Collection $albums
 * @property-read \Illuminate\Database\Eloquent\Collection $images
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'configs',
        'registered_ip',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'registered_ip',
        'configs',
        'status',
        'group_id',
        'is_adminer',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'capacity' => 'float',
        'is_adminer' => 'bool',
        'configs' => 'collection',
        'email_verified_at' => 'datetime',
    ];

    protected static function booted()
    {
        static::creating(function (self $user) {
            $user->configs = collect([
                UserConfigKey::DefaultAlbum => 0,
                UserConfigKey::DefaultStrategy => 0,
                UserConfigKey::IsAutoClearPreview,
            ])->merge($user->configs ?: []);
        });
    }

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }

    public function album(): HasMany
    {
        return $this->hasMany(Album::class, 'user_id', 'id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class, 'user_id', 'id');
    }
}
