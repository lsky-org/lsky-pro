<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property array $definition
 * @property bool $is_shared
 */
class ImageProcessTemplate extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'definition',
        'is_shared',
    ];

    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'definition' => 'array',
        'is_shared' => 'bool',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
