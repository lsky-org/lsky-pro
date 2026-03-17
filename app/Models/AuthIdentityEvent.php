<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AuthIdentityEvent extends Model
{
    protected $fillable = [
        'user_id',
        'actor_user_id',
        'provider',
        'event_type',
        'status',
        'summary',
        'context',
        'ip_address',
        'user_agent',
    ];

    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'actor_user_id' => 'integer',
        'context' => 'array',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function actor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'actor_user_id', 'id');
    }
}
