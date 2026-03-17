<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TeamMembership extends Model
{
    use HasFactory;

    public const ROLE_OWNER = 'owner';
    public const ROLE_ADMIN = 'admin';
    public const ROLE_MEMBER = 'member';

    protected $fillable = [
        'team_space_id',
        'user_id',
        'role',
        'permissions',
    ];

    protected $casts = [
        'team_space_id' => 'integer',
        'user_id' => 'integer',
        'permissions' => 'array',
    ];

    public static function rolePermissions(string $role): array
    {
        switch ($role) {
            case self::ROLE_OWNER:
                return [
                    'space.manage',
                    'member.read',
                    'member.update_role',
                    'audit.read',
                    'batch-template.manage',
                ];
            case self::ROLE_ADMIN:
                return [
                    'member.read',
                    'member.update_role',
                    'audit.read',
                    'batch-template.manage',
                ];
            default:
                return [
                    'member.read',
                    'audit.read',
                ];
        }
    }

    public function resolvedPermissions(): array
    {
        $rolePerms = self::rolePermissions((string) $this->role);
        $custom = is_array($this->permissions) ? array_values(array_filter($this->permissions, 'is_string')) : [];
        if (! empty($custom)) {
            // FIX-12: 自定义权限必须是角色允许范围的子集，防止越权
            return array_values(array_intersect($custom, $rolePerms));
        }

        return $rolePerms;
    }

    public function can(string $ability): bool
    {
        return in_array($ability, $this->resolvedPermissions(), true);
    }

    public function space(): BelongsTo
    {
        return $this->belongsTo(TeamSpace::class, 'team_space_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
