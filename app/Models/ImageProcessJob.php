<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $job_id
 * @property int $user_id
 * @property int $template_id
 * @property string $status
 * @property int $total
 * @property int $processed
 * @property int $success
 * @property int $failed
 * @property array|null $result
 * @property string|null $error_message
 */
class ImageProcessJob extends Model
{
    use HasFactory;

    public const STATUS_PENDING = 'pending';
    public const STATUS_RETRYING = 'retrying';
    public const STATUS_PROCESSING = 'processing';
    public const STATUS_SUCCESS = 'success';
    public const STATUS_FAILED = 'failed';
    public const STATUS_PARTIAL_SUCCESS = 'partial_success';
    public const STATUS_CANCELLED = 'cancelled';

    protected $fillable = [
        'job_id',
        'user_id',
        'template_id',
        'status',
        'total',
        'processed',
        'success',
        'failed',
        'result',
        'error_message',
        'started_at',
        'finished_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'template_id' => 'integer',
        'total' => 'integer',
        'processed' => 'integer',
        'success' => 'integer',
        'failed' => 'integer',
        'result' => 'array',
        'started_at' => 'datetime',
        'finished_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function template(): BelongsTo
    {
        return $this->belongsTo(ImageProcessTemplate::class, 'template_id', 'id');
    }
}
