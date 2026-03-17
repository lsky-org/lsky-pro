<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $id
 * @property string $batch_id
 * @property int $user_id
 * @property string $operation
 * @property string $status
 * @property int $total_count
 * @property array|null $image_ids
 * @property array|null $image_keys
 * @property array|null $meta
 */
class ImageBatchOperation extends Model
{
    use HasFactory;

    protected $fillable = [
        'batch_id',
        'user_id',
        'operation',
        'status',
        'total_count',
        'image_ids',
        'image_keys',
        'executed_at',
        'rolled_back_at',
        'meta',
    ];

    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'total_count' => 'integer',
        'image_ids' => 'array',
        'image_keys' => 'array',
        'meta' => 'array',
        'executed_at' => 'datetime',
        'rolled_back_at' => 'datetime',
    ];
}
