<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

class WebhookSubscription extends Model
{
    protected $fillable = [
        'url',
        'secret',
        'events',
        'enabled',
    ];

    protected $hidden = [
        'secret',
    ];

    protected $casts = [
        'events' => 'array',
        'enabled' => 'bool',
    ];

    public function scopeEnabled(Builder $builder): Builder
    {
        return $builder->where('enabled', true);
    }
}
