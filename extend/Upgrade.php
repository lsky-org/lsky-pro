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
     * 工作区目录
     *
     * @var
     */
    private $workspace;

    /**
     * 当前系统版本号
     *
     * @var
     */
    private $version;

    /**
     * @var
     */
    private $error;

    /**
     * Upgrade constructor.
     * @param string $path 系统根目录绝对路径
     * @param string $version 当前系统版本号
     * @throws \Exception
     */
    public function __construct($path, $version)
    {
        $this->path = rtrim(str_replace('\\', '/', $path), '/') . '/';
        $this->workspace = $this->path . 'runtime/.tmp/';
        $this->version = $version;

        if (!class_exists('ZipArchive')) {
            throw new \Exception('无法继续执行, 请确保 ZipArchive 正确安装');
        }
    }

    /**
     * 下载安装包
     *
     * @param string $url
     * @return string
     * @throws Exception
     */
    public function download($url)
    {
        set_time_limit(0);
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '256M');

        $headers = [
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36'
        ];

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
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

        $this->rmdir($this->workspace);
        @mkdir($this->workspace, 0777, true); // 创建工作目录

        $pathname = $this->workspace . 'upgrade.zip';
        if (!@file_put_contents($pathname, $contents)) {
            throw new \Exception('安装包保存失败, 请检查 runtime 目录是否有写入权限');
        }

        return $pathname;
    }

    /**
     * 解压
     *
     * @param string $file 文件
     * @param string $dir 解压到文件夹
     * @return mixed
     * @throws Exception
     */
    public function unzip($file, $dir)
    {
        $this->rmdir($dir);
        @mkdir($dir, 0777, true);

        $zip = new \ZipArchive;
        if ($zip->open($file) !== true) {
            throw new \Exception('无法打开安装包文件');
        }
        if (!$zip->extractTo($dir)) {
            $zip->close();
            throw new \Exception('无法解压安装包文件');
        }

        $zip->close();
        @unlink($file); // 解压成功后删除临时文件

        return $dir;
    }

    /**
     * 获取发行包列表
     *
     * @return mixed|array
     * @throws Exception
     */
    public function releases()
    {
        if (!$releases = @file_get_contents(self::RELEASES_URL)) {
            throw new \Exception('更新服务器异常, 请稍后重试!');
        }

        $releases = json_decode($releases, true);

        // 排序
        $weights = array_column($releases, 'weigh');
        array_multisort($weights, SORT_DESC, $releases);

        return array_map(function (&$item) {
            return (object)$item;
        }, $releases);
    }

    /**
     * 判断版本号是否相同
     *
     * @param string $version 要与当前系统版本比对的版本号
     * @return bool
     */
    public function check($version)
    {
        return version_compare($this->version, $version) === 0;
    }

    /**
     * 获取错误信息
     *
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * 删除文件夹
     *
     * @param $dir
     * @return bool
     */
    private function rmdir($dir)
    {
        if (!$handle = @opendir($dir)) return false;

        while (false !== ($file = readdir($handle))) {
            if ($file !== "." && $file !== "..") { // 排除当前目录与父级目录
                $file = $dir . '/' . $file;
                if (is_dir($file)) {
                    $this->rmdir($file);
                } else {
                    @unlink($file);
                }
            }
        }

        return @rmdir($dir);
    }

    /**
     * 备份系统
     *
     * @param string $pathname 备份后的文件名称
     * @return bool
     */
    public function backup($pathname)
    {
        $pathname = $this->path . $pathname;
        $zip = new \ZipArchive;
        $zip->open($pathname, \ZipArchive::CREATE);
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($this->path,
                RecursiveDirectoryIterator::SKIP_DOTS),
            RecursiveIteratorIterator::CHILD_FIRST
        );
        foreach ($files as $file) {
            $filePath = $file->getPathName();
            $localName = str_replace($this->path, '', $filePath);
            if ($file->isFile()) {
                $zip->addFile($filePath, $localName);
            } elseif ($file->isDir()) {
                $zip->addEmptyDir($localName);
            }
        }
        $zip->close();
        return true;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return mixed
     */
    public function getWorkspace()
    {
        return $this->workspace;
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }

    public function __destruct()
    {
        is_dir($this->workspace) && $this->rmdir($this->workspace); // 清除临时工作目录
    }
}
