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
    Route::post('token', 'api/Token/index');
    Route::post('upload', 'api/Upload/index');
})->allowCrossDomain();

return [];
