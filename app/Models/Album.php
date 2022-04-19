<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

/**
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $intro
 * @property int $image_num
 * @property-read User $user
 * @property-read Collection $images
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

    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'image_num' => 'integer',
    ];

    public function scopeFilter(Builder $builder, Request $request)
    {
        return $builder->when($request->query('order') ?: 'newest', function (Builder $builder, $order) {
            switch ($order) {
                case 'earliest':
                    $builder->orderBy('created_at');
                    break;
                case 'most':
                    $builder->orderByDesc('image_num');
                    break;
                case 'least':
                    $builder->orderBy('image_num');
                    break;
                default:
                    $builder->latest();
            }
        })->when($request->query('keyword'), function (Builder $builder, $keyword) {
            $builder->where('name', 'like', "%{$keyword}%")->orWhere('intro', 'like', "%{$keyword}%");
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class, 'album_id', 'id');
    }
}
