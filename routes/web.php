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

Route::get('/', fn () => view('welcome'))->name('/');
Route::post('/upload', [Controller::class, 'upload']);
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/upload', fn () => view('upload'))->name('upload');
    Route::any('/images', [ImageController::class, 'index'])->name('images');
});

require __DIR__.'/auth.php';
