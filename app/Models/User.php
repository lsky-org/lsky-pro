<?php

namespace App\Models;

use App\Enums\ConfigKey;
use App\Utils;
use Illuminate\Support\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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
 * @property float $use_capacity
 * @property string $url
 * @property Collection $configs
 * @property int $image_num
 * @property int $album_num
 * @property string $registered_ip
 * @property int $status
 * @property Carbon $email_verified_at
 * @property Carbon $updated_at
 * @property Carbon $created_at
 * @property-read string $avatar
 * @property-read Group $group
 * @property-read \Illuminate\Database\Eloquent\Collection $albums
 * @property-read \Illuminate\Database\Eloquent\Collection $images
 * @property-read \Illuminate\Database\Eloquent\Collection $processTemplates
 */
class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    public const CONFIG_PASSWORD_LOGIN_READY = 'auth_password_login_ready';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'uuid',
        'name',
        'email',
        'password',
        'url',
        'capacity',
        'configs',
        'configs->default_strategy',
        'configs->header_pinned_tabs',
        'registered_ip',
        'status',
        'provider',
        'provider_id',
        'provider_avatar',
        'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'configs',
        'group_id',
        'is_adminer',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'id' => 'integer',
        'group_id' => 'integer',
        'image_num' => 'integer',
        'album_num' => 'integer',
        'status' => 'integer',
        'capacity' => 'float',
        'is_adminer' => 'bool',
        'configs' => 'collection',
        'email_verified_at' => 'datetime',
    ];

    protected $appends = ['avatar'];

    protected static function booted()
    {
        static::creating(function (self $user) {
            // 自动生成 UUID
            if (empty($user->uuid)) {
                $user->uuid = (string) \Illuminate\Support\Str::uuid();
            }
            // 默认组
            $user->group_id = Group::query()->where('is_default', true)->value('id');
            // 初始容量
            $capacity = Utils::config(ConfigKey::UserInitialCapacity);
            if ($capacity === null || $capacity === '') {
                $capacity = data_get(config('convention.app'), ConfigKey::UserInitialCapacity, 512000);
            }
            $user->capacity = (float) $capacity;
            $user->configs = collect(config('convention.user'))
                ->merge([
                    self::CONFIG_PASSWORD_LOGIN_READY => true,
                ])
                ->merge($user->configs ?: []);
        });

        static::created(function (self $user) {
            $space = TeamSpace::query()->create([
                'owner_user_id' => $user->id,
                'name' => $user->name.' 的个人空间',
                'is_personal' => true,
            ]);

            TeamMembership::query()->create([
                'team_space_id' => $space->id,
                'user_id' => $user->id,
                'role' => TeamMembership::ROLE_OWNER,
                'permissions' => TeamMembership::rolePermissions(TeamMembership::ROLE_OWNER),
            ]);
        });
    }

    public function avatar(): Attribute
    {
        return new Attribute(fn () => Utils::getAvatar($this->email));
    }

    public function useCapacity(): Attribute
    {
        return new Attribute(fn () => $this->images()->sum('size'));
    }

    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }

    public function albums(): HasMany
    {
        return $this->hasMany(Album::class, 'user_id', 'id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class, 'user_id', 'id');
    }

    public function processTemplates(): HasMany
    {
        return $this->hasMany(ImageProcessTemplate::class, 'user_id', 'id');
    }

    public function teamMemberships(): HasMany
    {
        return $this->hasMany(TeamMembership::class, 'user_id', 'id');
    }

    public function teamSpaces(): BelongsToMany
    {
        return $this->belongsToMany(TeamSpace::class, 'team_memberships', 'user_id', 'team_space_id')
            ->withPivot('role', 'permissions')
            ->withTimestamps();
    }

    public function authIdentities(): HasMany
    {
        return $this->hasMany(AuthIdentity::class, 'user_id', 'id');
    }

    public function webauthnCredentials(): HasMany
    {
        return $this->hasMany(WebauthnCredential::class, 'user_id', 'id');
    }

    public function hasPasswordLoginReady(): bool
    {
        if (blank($this->password ?? null)) {
            return false;
        }

        return (bool) $this->configs->get(self::CONFIG_PASSWORD_LOGIN_READY, false);
    }

    public function sharedAlbums(): BelongsToMany
    {
        return $this->belongsToMany(Album::class, 'album_shares')
            ->withPivot('permission', 'shared_by')
            ->withTimestamps();
    }

}
