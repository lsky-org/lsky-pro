<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::post('/upload', function () {
    $data = [
        'url' => 'https://pic.iqy.ink/2021/12/12/e8cfd03eb787f.png',
        'html' => '&lt;img src="https://pic.iqy.ink/2021/12/12/e8cfd03eb787f.png" alt="e212bc43771ad6d391952732a1713e31.png" title="e212bc43771ad6d391952732a1713e31.png" /&gt;',
        'bbcode' => '[img]https://pic.iqy.ink/2021/12/12/e8cfd03eb787f.png[/img]',
        'markdown' => '![e212bc43771ad6d391952732a1713e31.png](https://pic.iqy.ink/2021/12/12/e8cfd03eb787f.png)',
        'markdown_with_link' => '[![e212bc43771ad6d391952732a1713e31.png](https://pic.iqy.ink/2021/12/12/e8cfd03eb787f.png)](https://pic.iqy.ink/2021/12/12/e8cfd03eb787f.png)',
    ];
    $status = true;
    $message = '上传失败，储存空间不足';
    return compact('status', 'data', 'message');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
