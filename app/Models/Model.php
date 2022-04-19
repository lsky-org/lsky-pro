<?php

namespace App\Models;

use Carbon\CarbonInterface;

abstract class Model extends \Illuminate\Database\Eloquent\Model
{
    protected function serializeDate(\DateTimeInterface $date): string
    {
        return $date->format(CarbonInterface::DEFAULT_TO_STRING_FORMAT);
    }
}
