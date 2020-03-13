<?php
/**
 * Created by Wisp X
 * User: Wisp X
 * Date: 2020/3/13
 * Time: 16:44
 */

class Upgrade
{
    const RELEASES_URL = 'https://releases.lsky.pro';

    /**
     * 程序根目录路径
     *
     * @var
     */
    private $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    private function getNewest()
    {
        // TODO 获取最新版本号
        return '1.5.8';
    }

    private function getPackage()
    {
        // TODO 获取增量包下载链接
        return 'https://api.github.com/repos/wisp-x/lsky-pro/zipball/v1.5.8';
    }

    private function download()
    {
        set_time_limit(180);
        ini_set('max_execution_time', 180);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->getPackage());
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120);
        $img = curl_exec($ch);
        curl_close($ch);

        file_put_contents($filename, $img);

        unset($img, $url);
        return true;
    }

    public function exec()
    {
        dump($this->download());exit;
    }
}
