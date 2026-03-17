<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

/**
 * @property int $id
 * @property int $user_id
 * @property int|null $parent_id
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
        'image_num',
        'parent_id'
    ];

    protected $hidden = [
        'user_id',
        'parent_id',
    ];

    protected $attributes = [
        'intro' => '',
    ];

    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'parent_id' => 'integer',
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
            $builder->where(function (Builder $q) use ($keyword) {
                $q->where('name', 'like', "%{$keyword}%")->orWhere('intro', 'like', "%{$keyword}%");
            });
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

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Album::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(Album::class, 'parent_id');
    }

    public function childrenRecursive(): HasMany
    {
        return $this->children()->with('childrenRecursive');
    }

    public function shares(): HasMany
    {
        return $this->hasMany(AlbumShare::class);
    }

    public function sharedUsers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'album_shares')
            ->withPivot('permission', 'shared_by')
            ->withTimestamps();
    }

}
