<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $task_id
 * @property string $status
 * @property int|null $user_id
 * @property int|null $image_id
 * @property string|null $request_ip
 * @property int|null $strategy_id
 * @property string $temp_path
 * @property string $origin_name
 * @property string|null $mime_type
 * @property array|null $payload
 * @property array|null $result
 * @property string|null $error_message
 */
class UploadTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_id',
        'status',
        'user_id',
        'image_id',
        'request_ip',
        'strategy_id',
        'temp_path',
        'origin_name',
        'mime_type',
        'payload',
        'result',
        'error_message',
        'started_at',
        'finished_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'image_id' => 'integer',
        'strategy_id' => 'integer',
        'payload' => 'array',
        'result' => 'array',
        'started_at' => 'datetime',
        'finished_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }
}
