<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\facade\Route;

Route::view('compatibility', 'index@tpl/compatibility');

// [Api Route]
Route::group('api', function () {
    Route::any('token', 'api/Token/index');
    Route::any('upload', 'api/Upload/index');
    Route::any('image', 'api/Image/find');
    Route::any('images', 'api/Image/items');
    Route::any('delete', 'api/Image/delete');
})->middleware(app\http\middleware\ApiAuthenticate::class)
    ->header('Access-Control-Allow-Headers', 'Authorization, Content-Type, If-Match, If-Modified-Since, If-None-Match, If-Unmodified-Since, X-Requested-With, Token')
    ->allowCrossDomain();

return [];
