<?php

use App\Http\Controllers\User\ImageController;
use Illuminate\Support\Facades\Route;
use App\Models\Group;
use App\Enums\GroupConfigKey;

$extensions = Group::getDefaultConfigs()->get(GroupConfigKey::AcceptedFileSuffixes);
Route::middleware('cache.headers:public;max_age=2628000;etag')->group(function () use ($extensions) {
    Route::any('{key}.{extension}', [
        ImageController::class, 'output',
    ])->where('extension', implode('|', $extensions));
    Route::any('{key}.{extension}!thumbnail', [
        ImageController::class, 'thumbnail',
    ])->where('extension', implode('|', $extensions));
});
