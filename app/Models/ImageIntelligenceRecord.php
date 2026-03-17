<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ImageIntelligenceRecord extends Model
{
    protected $fillable = [
        'image_id',
        'user_id',
        'status',
        'source',
        'source_version',
        'ocr_text',
        'caption',
        'summary',
        'prompt_hint',
        'labels',
        'keywords',
        'metadata',
        'analyzed_at',
        'last_error',
    ];

    protected $casts = [
        'id' => 'integer',
        'image_id' => 'integer',
        'user_id' => 'integer',
        'source_version' => 'integer',
        'labels' => 'array',
        'keywords' => 'array',
        'metadata' => 'array',
        'analyzed_at' => 'datetime',
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
