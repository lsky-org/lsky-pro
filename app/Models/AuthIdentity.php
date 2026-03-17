<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AuthIdentity extends Model
{
    protected $fillable = [
        'user_id',
        'provider',
        'provider_subject',
        'provider_email',
        'avatar_url',
        'meta',
        'last_used_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'meta' => 'array',
        'last_used_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
