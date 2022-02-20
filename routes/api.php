<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\Api\V1\TokenController;

Route::group(['prefix' => 'v1'], function () {
    Route::group([
        'middleware' => 'auth:sanctum',
    ], function () {
        Route::resource('tokens', TokenController::class);
    });
});
