<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property string $name
 * @property mixed $value
 */
class Config extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $keyType = 'string';
}
