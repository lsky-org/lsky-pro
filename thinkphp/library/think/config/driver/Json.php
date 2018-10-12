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

namespace think\config\driver;

class Json
{
    protected $config;

    public function __construct($config)
    {
        if (is_file($config)) {
            $config = file_get_contents($config);
        }

        $this->config = $config;
    }

    public function parse()
    {
        return json_decode($this->config, true);
    }
}
