<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Enums\GroupConfigKey;
use App\Enums\ConfigKey;

$extensions = config('convention.app.'.ConfigKey::Group)[GroupConfigKey::AcceptedFileSuffixes];
Route::middleware('cache.headers:public;max_age=2628000;etag')->group(function () use ($extensions) {
    Route::any('{key}.{extension}', [
        Controller::class, 'output',
    ])->where('extension', implode('|', $extensions));
    Route::any('{key}.{extension}!thumbnail', [
        Controller::class, 'thumbnail',
    ])->where('extension', implode('|', $extensions));
});
