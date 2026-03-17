<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TeamSpace extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner_user_id',
        'name',
        'is_personal',
    ];

    protected $casts = [
        'owner_user_id' => 'integer',
        'is_personal' => 'bool',
    ];

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_user_id', 'id');
    }

    public function memberships(): HasMany
    {
        return $this->hasMany(TeamMembership::class, 'team_space_id', 'id');
    }

    public function members(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'team_memberships', 'team_space_id', 'user_id')
            ->withPivot('role', 'permissions')
            ->withTimestamps();
    }
}
