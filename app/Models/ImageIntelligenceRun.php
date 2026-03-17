<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $mode
 * @property string $status
 * @property int|null $initiator_user_id
 * @property string $trigger_source
 * @property array|null $options
 * @property int|null $retry_of_run_id
 * @property int $matched
 * @property int $processed
 * @property int $dispatched
 * @property int $skipped
 * @property int $succeeded
 * @property int $failed
 * @property int|null $last_image_id
 * @property string|null $request_id
 * @property string|null $trace_id
 * @property string|null $ip
 * @property string|null $error_message
 */
class ImageIntelligenceRun extends Model
{
    use HasFactory;

    protected $fillable = [
        'mode',
        'status',
        'initiator_user_id',
        'trigger_source',
        'options',
        'retry_of_run_id',
        'matched',
        'processed',
        'dispatched',
        'skipped',
        'succeeded',
        'failed',
        'last_image_id',
        'request_id',
        'trace_id',
        'ip',
        'error_message',
        'started_at',
        'finished_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'initiator_user_id' => 'integer',
        'retry_of_run_id' => 'integer',
        'matched' => 'integer',
        'processed' => 'integer',
        'dispatched' => 'integer',
        'skipped' => 'integer',
        'succeeded' => 'integer',
        'failed' => 'integer',
        'last_image_id' => 'integer',
        'options' => 'array',
        'started_at' => 'datetime',
        'finished_at' => 'datetime',
    ];

    public function initiator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'initiator_user_id', 'id');
    }
}
