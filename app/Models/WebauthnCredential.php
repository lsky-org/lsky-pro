<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WebauthnCredential extends Model
{
    protected $fillable = [
        'user_id',
        'credential_id',
        'label',
        'public_key',
        'transports',
        'aaguid',
        'sign_count',
        'type',
        'last_used_at',
        'meta',
    ];

    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'transports' => 'array',
        'meta' => 'array',
        'sign_count' => 'integer',
        'last_used_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
