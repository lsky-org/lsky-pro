<?php
/**
 * Created by Wisp X
 * User: Wisp X
 * Date: 2020/3/13
 * Time: 16:44
 */

class Upgrade
{
    const RELEASES_URL = 'https://api.lsky.pro/releases.php';

    /**
     * 程序根目录路径
     *
     * @var
     */
    private $path;

    /**
     * Upgrade constructor.
     * @param $path 系统根目录绝对路径
     */
    public function __construct($path)
    {
        $this->path = rtrim(str_replace('\\', '/', $path), '/') . '/';
    }

    private function getNewest()
    {
        // TODO 获取最新版本号
        return '1.5.8';
    }

    private function getPackage()
    {
        // TODO 获取增量包下载链接
//        return 'https://github.com/wisp-x/lsky-pro/archive/v1.5.8.zip';
        return 'https://wispx.coding.net/p/lsky-pro-releases/d/lsky-pro-releases/git/raw/master/releases/lsky-pro-1.5.8.zip';
    }

    /**
     * 下载更新包
     *
     * @return string
     * @throws Exception
     */
    private function download()
    {
        set_time_limit(0);
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '256M');

        $headers = [
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'
        ];

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->getPackage());
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 180);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 180);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        $contents = curl_exec($curl);
        $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        if ($statusCode !== 200) {
            throw new \Exception('增量包下载失败, 请稍后重试!');
        }

        if (!is_dir($this->path . 'runtime')) @mkdir($this->path . 'runtime', 0777, true);

        $pathname = $this->path . 'runtime/upgrade.zip';
        if (!@file_put_contents($pathname, $contents)) {
            throw new \Exception('更新包保存失败, 请检查 runtime 目录是否有写入权限');
        }

        // TODO 校验 MD5, 校验失败则删除文件并抛出异常

        return $pathname;
    }

    /**
     * 解压
     *
     * @param string $file 文件
     * @param string $dir  解压到文件夹
     * @return mixed
     * @throws Exception
     */
    private function unzip($file, $dir)
    {
        if (!class_exists('ZipArchive')) {
            throw new \Exception('无法解压更新包, 请确保 ZipArchive 正确安装');
        }

        @unlink($dir) && @mkdir($dir, 0777, true);

        $zip = new ZipArchive;
        if ($zip->open($file) !== true) {
            throw new \Exception('无法打开更新包文件');
        }
        if (!$zip->extractTo($dir)) {
            $zip->close();
            throw new \Exception('无法解压更新包文件');
        }

        $zip->close();
        @unlink($file); // 解压成功后删除临时文件

        return $dir;
    }

    public function exec()
    {
        try {
            $file = $this->download();

            // 解压文件
            $this->unzip($file, $this->path . 'runtime/.tmp');

        } catch (\Exception $e) {
            dump($e->getMessage());exit;
        }
    }
}
