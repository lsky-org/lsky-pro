<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\ImageController;
use App\Http\Controllers\User\AlbumController;

Route::get('/', fn () => view('welcome'))->name('/');
Route::post('/upload', [Controller::class, 'upload']);
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/upload', fn () => view('upload'))->name('upload');
    Route::get('/images', [ImageController::class, 'index'])->name('images');
    Route::group(['prefix' => 'user'], function () {
        Route::get('images', [ImageController::class, 'images'])->name('user.images');
        Route::get('images/{id}', [ImageController::class, 'image'])->name('user.image');
        Route::delete('images', [ImageController::class, 'delete'])->name('user.images.delete');
        Route::put('images/permission', [ImageController::class, 'permission'])->name('user.images.permission');
        Route::put('images/rename', [ImageController::class, 'rename'])->name('user.images.rename');
        Route::put('images/movement', [ImageController::class, 'movement'])->name('user.images.movement');
        Route::get('albums', [AlbumController::class, 'albums'])->name('user.albums');
        Route::post('albums', [AlbumController::class, 'create'])->name('user.album.create');
        Route::put('albums/{id}', [AlbumController::class, 'update'])->name('user.album.update');
        Route::delete('albums/{id}', [AlbumController::class, 'delete'])->name('user.album.delete');
    });
});

Route::any('{key}.{extension}', [ImageController::class, 'output'])->where('extension', implode('|', [
    'jpg', 'jpeg', 'gif', 'png', 'apng', 'bmp', 'ico',
]));

require __DIR__.'/auth.php';
