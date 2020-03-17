<?php
/**
 * User: Wisp X
 * Date: 2018/9/29
 * Time: 下午3:14
 * Link: https://github.com/wisp-x
 */

namespace app\common\model;

use think\Model;

class Images extends Model
{
    protected $updateTime = false;

    protected $insert = ['ip'];

    protected $append = ['url'];

    public function getUrlAttr($url, $data)
    {
        // 图片链接
        $cdnDomain = Config::where([
            'key' => $data['strategy'],
            'name' => $data['strategy'] . '_cdn_domain',
        ])->value('value');
        $domain = $cdnDomain ? $cdnDomain : request()->domain();
        return make_url($domain, $data['pathname']);
    }

    public function setIpAttr()
    {
        return request()->ip();
    }

    public function getDateAttr($date, $data)
    {
        return format_time($data['create_time']);
    }
}
