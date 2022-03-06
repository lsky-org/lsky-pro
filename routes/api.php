<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ImageController;
use App\Http\Controllers\Api\V1\AlbumController;
use App\Http\Controllers\Api\V1\TokenController;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\StrategyController;
use App\Http\Middleware\CheckIsEnableApi;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([
    'prefix' => 'v1',
    'middleware' => CheckIsEnableApi::class,
], function () {
    Route::get('strategies', [StrategyController::class, 'index']);
    Route::post('upload', [ImageController::class, 'upload']);
    Route::post('tokens', [TokenController::class, 'store'])->middleware('throttle:3,1');

    Route::group([
        'middleware' => 'auth:sanctum',
    ], function () {
        Route::get('images', [ImageController::class, 'images']);
        Route::delete('images/{key}', [ImageController::class, 'destroy']);
        Route::get('albums', [AlbumController::class, 'index']);
        Route::delete('albums/{id}', [AlbumController::class, 'destroy']);
        Route::delete('tokens', [TokenController::class, 'clear']);
        Route::get('profile', [UserController::class, 'index']);
    });
});
