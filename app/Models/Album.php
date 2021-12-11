<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $intro
 * @property int $image_num
 * @property-read User $user
 * @property-read Image[] $images
 */
class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'intro',
        'image_num'
    ];

    protected $hidden = [
        'user_id',
    ];

    protected $attributes = [
        'intro' => '',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class, 'album_id', 'id');
    }
}
