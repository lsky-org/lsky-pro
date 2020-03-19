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
    private $rootPath;

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
        $this->rootPath = rtrim(str_replace('\\', '/', $path), '/') . '/';
        $this->workspace = $this->rootPath . 'runtime/.tmp/';
        $this->version = ltrim('v', strtolower($version));

        if (!class_exists('ZipArchive')) {
            throw new \Exception('无法继续执行, 请确保 ZipArchive 正确安装');
        }

        ob_clean();
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
        $ip = $this->getRandIp();
        $headers = [
            'Accept-Encoding: gzip, deflate',
            'User-Agent: ' . $this->getRandUserAgent(),
            'X-FORWARDED-FOR: ' . $ip,
            'CLIENT-IP: ' . $ip,
        ];

        !is_dir($this->workspace) && @mkdir($this->workspace, 0777, true);
        if (!is_dir($this->workspace)) throw new \Exception('工作区目录不存在, 请检查是否有写入权限');
        $pathname = $this->workspace . 'upgrade.zip';

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_ENCODING, 'gzip, delete');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT, 180);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 180);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        $contents = curl_exec($curl);
        $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        /*$headerSize = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
        $header = substr($contents, 0, $headerSize);*/

        curl_close($curl);

        if ($statusCode !== 200) {
            throw new \Exception('安装包下载失败, 请稍后重试!');
        }

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

        if (!$releases = json_decode($releases, true)) {
            throw new \Exception('更新包获取失败, 请稍后重试');
        }

        // 排序
        $weights = array_column($releases, 'weigh');
        array_multisort($weights, SORT_DESC, $releases);

        return array_map(function (&$item) {
            return (object)$item;
        }, $releases);
    }

    /**
     * 获取最新版
     *
     * @return mixed
     * @throws Exception
     */
    public function release()
    {
        if (!$release = @file_get_contents(self::RELEASES_URL . '?version=last')) {
            throw new \Exception('更新服务器异常, 请稍后重试!');
        }

        return json_decode($release);
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
    public function rmdir($dir)
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
        $pathname = $this->rootPath . $pathname;
        $dirname = dirname($pathname);
        if (!is_dir($dirname)) mkdir($dirname);
        $zip = new \ZipArchive;
        $zip->open($pathname, \ZipArchive::CREATE);
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($this->rootPath,
                RecursiveDirectoryIterator::SKIP_DOTS),
            RecursiveIteratorIterator::CHILD_FIRST
        );
        foreach ($files as $file) {
            $filePath = $file->getPathName();
            $localName = str_replace($this->rootPath, '', $filePath);
            // 跳过不需要备份的目录
            $path = trim(str_replace('\\', '/', $filePath), '/');
            if (
                strpos($path, trim($this->getRootPath(), '/') . '/runtime') !== false ||
                strpos($path, trim($this->getRootPath(), '/') . '/backups') !== false ||
                strpos($path, trim($this->getRootPath(), '/') . '/public') !== false
            ) {
                continue;
            }

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
     * 复制文件夹
     * @param string $source 源文件夹
     * @param string $dest 目标文件夹
     */
    public function copyDirs($source, $dest)
    {
        if (!is_dir($dest)) {
            mkdir($dest, 0755, true);
        }
        foreach (
            $iterator = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($source, RecursiveDirectoryIterator::SKIP_DOTS),
                RecursiveIteratorIterator::SELF_FIRST
            ) as $item
        ) {
            if ($item->isDir()) {
                $sontDir = $dest . '/' . $iterator->getSubPathName();
                if (!is_dir($sontDir)) {
                    mkdir($sontDir, 0755, true);
                }
            } else {
                copy($item, $dest . '/' . $iterator->getSubPathName());
            }
        }
    }

    /**
     *  获取随机 UserAgent
     *
     * @return mixed
     */
    private function getRandUserAgent()
    {
        $array = [
            "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/22.0.1207.1 Safari/537.1",
            "Mozilla/5.0 (X11; CrOS i686 2268.111.0) AppleWebKit/536.11 (KHTML, like Gecko) Chrome/20.0.1132.57 Safari/536.11",
            "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.6 (KHTML, like Gecko) Chrome/20.0.1092.0 Safari/536.6",
            "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/536.6 (KHTML, like Gecko) Chrome/20.0.1090.0 Safari/536.6",
            "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/19.77.34.5 Safari/537.1",
            "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.9 Safari/536.5",
            "Mozilla/5.0 (Windows NT 6.0) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.36 Safari/536.5",
            "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1063.0 Safari/536.3",
            "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1063.0 Safari/536.3",
            "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_0) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1063.0 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1062.0 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1062.0 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1061.1 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1061.1 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1061.1 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1061.0 Safari/536.3",
            "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.24 (KHTML, like Gecko) Chrome/19.0.1055.1 Safari/535.24",
            "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/535.24 (KHTML, like Gecko) Chrome/19.0.1055.1 Safari/535.24",
            "Mozilla/5.0 (Macintosh; U; Mac OS X Mach-O; en-US; rv:2.0a) Gecko/20040614 Firefox/3.0.0 ",
            "Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10.5; en-US; rv:1.9.0.3) Gecko/2008092414 Firefox/3.0.3",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.5; en-US; rv:1.9.1) Gecko/20090624 Firefox/3.5",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.2.14) Gecko/20110218 AlexaToolbar/alxf-2.0 Firefox/3.6.14",
            "Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10.5; en-US; rv:1.9.2.15) Gecko/20110303 Firefox/3.6.15",
            "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv:2.0.1) Gecko/20100101 Firefox/4.0.1",
            "Opera/9.80 (Windows NT 6.1; U; en) Presto/2.8.131 Version/11.11",
            "Opera/9.80 (Android 2.3.4; Linux; Opera mobi/adr-1107051709; U; zh-cn) Presto/2.8.149 Version/11.10",
            "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/531.21.8 (KHTML, like Gecko) Version/4.0.4 Safari/531.21.10",
            "Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/533.17.8 (KHTML, like Gecko) Version/5.0.1 Safari/533.17.8",
            "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.19.4 (KHTML, like Gecko) Version/5.0.2 Safari/533.18.5",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0",
            "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; Trident/4.0)",
            "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0)",
            "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)"
        ];

        return $array[array_rand($array)];
    }

    /**
     * 随机IP
     *
     * @return string
     */
    private function getRandIp()
    {
        $array = ["218", "218", "66", "66", "218", "218", "60", "60", "202", "204", "66", "66", "66", "59", "61", "60", "222", "221", "66", "59", "60", "60", "66", "218", "218", "62", "63", "64", "66", "66", "122", "211"];
        $rand = mt_rand(0, count($array));
        $ip1id = $array[$rand];
        $ip2id = round(rand(600000, 2550000) / 10000);
        $ip3id = round(rand(600000, 2550000) / 10000);
        $ip4id = round(rand(600000, 2550000) / 10000);
        return $ip1id . "." . $ip2id . "." . $ip3id . "." . $ip4id;
    }

    /**
     * @return mixed
     */
    public function getRootPath()
    {
        return $this->rootPath;
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
        @$this->rmdir($this->workspace); // 清除临时工作目录
    }
}
