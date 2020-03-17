<?php
/**
 * Created by WispX.
 * User: WispX
 * Date: 2019/5/8
 * Time: 21:33
 */

return [
    // 违规图片是否直接拦截
    'intercept_salacity' => env('system.intercept_salacity', false),
    // 图片链接额外参数(例: ?test=123)
    'url_query' => env('system.url_query', '')
];
