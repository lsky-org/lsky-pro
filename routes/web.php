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

use App\Http\Middleware\CheckIsEnableApi;
use App\Http\Middleware\CheckIsEnableGallery;
use App\Http\Middleware\CheckIsEnableGuestUpload;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckIsInstalled;
use App\Http\Controllers\Controller;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\ImageController;
use App\Http\Controllers\User\AlbumController;
use App\Http\Controllers\Common\GalleryController;
use App\Http\Controllers\Common\ApiController;

use App\Http\Controllers\Admin\ConsoleController as AdminConsoleController;
use App\Http\Controllers\Admin\GroupController as AdminGroupController;
use App\Http\Controllers\Admin\StrategyController as AdminStrategyController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\SettingController as AdminSettingController;
use App\Http\Controllers\Admin\ImageController as AdminImageController;

Route::get('/', fn () => view('welcome'))
    ->name('/')
    ->middleware(CheckIsInstalled::class)
    ->middleware(CheckIsEnableGuestUpload::class);

Route::any('install', [Controller::class, 'install'])->name('install');
Route::post('upload', [Controller::class, 'upload']);
Route::group(['middleware' => ['auth']], function () {
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('gallery', [GalleryController::class, 'index'])->middleware(CheckIsEnableGallery::class)->name('gallery');

    Route::prefix('settings')->group(function () {
        Route::get('', [UserController::class, 'settings'])->name('settings');
        Route::put('', [UserController::class, 'update'])->name('settings.update');
        Route::put('set-strategy', [UserController::class, 'setStrategy'])->name('settings.strategy.set');
    });

    Route::group([
        'prefix' => 'api',
        'middleware' => CheckIsEnableApi::class
    ], function () {
        Route::get('', [ApiController::class, 'index'])->name('api');
    });

    Route::get('upload', fn () => view('user.upload'))->name('upload');
    Route::get('images', [ImageController::class, 'index'])->name('images');
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

Route::group(['prefix' => 'admin', 'middleware' => ['auth.admin']], function () {
    Route::get('console', [AdminConsoleController::class, 'index'])->name('admin.console');

    Route::group(['prefix' => 'users'], function () {
        Route::get('', [AdminUserController::class, 'index'])->name('admin.users');
        Route::get('{id}', [AdminUserController::class, 'edit'])->name('admin.user.edit');
        Route::put('{id}', [AdminUserController::class, 'update'])->name('admin.user.update');
        Route::delete('{id}', [AdminUserController::class, 'delete'])->name('admin.user.delete');
    });

    Route::group(['prefix' => 'images'], function () {
        Route::get('', [AdminImageController::class, 'index'])->name('admin.images');
        Route::put('{id}', [AdminImageController::class, 'update'])->name('admin.image.update');
        Route::delete('{id}', [AdminImageController::class, 'delete'])->name('admin.image.delete');
    });

    Route::group(['prefix' => 'groups'], function () {
        Route::get('', [AdminGroupController::class, 'index'])->name('admin.groups');
        Route::get('create', [AdminGroupController::class, 'add'])->name('admin.group.add');
        Route::post('create', [AdminGroupController::class, 'create'])->name('admin.group.create');
        Route::get('{id}', [AdminGroupController::class, 'edit'])->name('admin.group.edit');
        Route::put('{id}', [AdminGroupController::class, 'update'])->name('admin.group.update');
        Route::delete('{id}', [AdminGroupController::class, 'delete'])->name('admin.group.delete');
        Route::delete('{id}/clear-cache', [AdminGroupController::class, 'clearCache'])->name('admin.group.cache.clear');
    });

    Route::group(['prefix' => 'strategies'], function () {
        Route::get('', [AdminStrategyController::class, 'index'])->name('admin.strategies');
        Route::get('create', [AdminStrategyController::class, 'add'])->name('admin.strategy.add');
        Route::post('create', [AdminStrategyController::class, 'create'])->name('admin.strategy.create');
        Route::get('{id}', [AdminStrategyController::class, 'edit'])->name('admin.strategy.edit');
        Route::put('{id}', [AdminStrategyController::class, 'update'])->name('admin.strategy.update');
        Route::delete('{id}', [AdminStrategyController::class, 'delete'])->name('admin.strategy.delete');
    });

    Route::group(['prefix' => 'settings'], function () {
        Route::get('', [AdminSettingController::class, 'index'])->name('admin.settings');
        Route::put('save', [AdminSettingController::class, 'save'])->name('admin.settings.save');
        Route::post('mail-test', [AdminSettingController::class, 'mailTest'])->name('admin.settings.mail.test');
        Route::get('check-update', [AdminSettingController::class, 'checkUpdate'])->name('admin.settings.check.update');
        Route::post('upgrade', [AdminSettingController::class, 'upgrade'])->name('admin.settings.upgrade');
        Route::get('upgrade/progress', [AdminSettingController::class, 'upgradeProgress'])->name('admin.settings.upgrade.progress');
    });
});

require __DIR__.'/image.php';
require __DIR__.'/auth.php';
