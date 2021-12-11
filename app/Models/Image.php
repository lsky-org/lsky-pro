<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $user_id
 * @property int $album_id
 * @property int $strategy_id
 * @property string $path
 * @property string $name
 * @property string $origin_name
 * @property string $alias_name
 * @property float $size
 * @property string $mimetype
 * @property string $md5
 * @property string $sha1
 * @property boolean $is_unhealthy
 * @property string $uploaded_ip
 * @property Carbon $updated_at
 * @property Carbon $created_at
 * @property-read User $user
 * @property-read Album $album
 * @property-read Strategy $strategy
 */
class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'album_id',
        'strategy_id',
        'path',
        'name',
        'origin_name',
        'alias_name',
        'size',
        'mimetype',
        'md5',
        'sha1',
        'is_unhealthy',
        'uploaded_ip',
    ];

    protected $hidden = [
        'user_id',
        'album_id',
        'strategy_id',
        'uploaded_ip',
        'is_unhealthy',
    ];

    protected $casts = [
        'size' => 'float',
        'is_unhealthy' => 'bool',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function album(): BelongsTo
    {
        return $this->belongsTo(Album::class, 'album_id', 'id');
    }

    public function strategy(): BelongsTo
    {
        return $this->belongsTo(Strategy::class, 'strategy_id', 'id');
    }
}
