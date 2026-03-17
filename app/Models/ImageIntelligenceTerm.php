<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ImageIntelligenceTerm extends Model
{
    protected $fillable = [
        'image_id',
        'user_id',
        'source',
        'term',
        'normalized_term',
    ];

    protected $casts = [
        'id' => 'integer',
        'image_id' => 'integer',
        'user_id' => 'integer',
    ];

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class, 'image_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
