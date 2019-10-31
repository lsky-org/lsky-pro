<?php
/**
 * Created by WispX.
 * User: WispX <wisp-x@qq.com>
 * Date: 2019-08-06
 * Time: 15:51
 * Link: https://github.com/wisp-x
 */

namespace app\index\controller\admin;

use think\Db;
use think\facade\Config;
use think\facade\Env;

class Update extends Base
{
    public function index()
    {
        die;
        // https://dev.tencent.com/u/wispx/p/lsky-pro-releases/git/raw/master/releases/lsky-pro-1.5.4.zip
        echo <<<EOT
<style>
  body {background-color: black;color: white;}
  span {color: white;}
</style>
<pre>
EOT;

        try {
            $this->out('检测更新中...');
            $version = $this->checkUpdate();
            if (!$version) {
                throw new \Exception('版本信息获取失败!');
            }
            $this->out("检测到新版本 [v{$version}]");
            $runtimePath = Env::get('runtime_path');
            $url = "https://dev.tencent.com/u/wispx/p/lsky-pro-releases/git/raw/master/releases/lsky-pro-{$version}.zip";
            $dirname = "lsky-pro-{$version}";
            $name = "lsky-pro-{$version}.zip";
            // $ip = $this->getRandIp();
            $context = stream_context_create(
                ['http' => [
                    'header' => "User-Agent: {$this->getRandUserAgent()}",
                    'timeout' => 600
                ]]
            );
            $this->out('<font color="#ffd700">开始更新操作, 请勿关闭本窗口...</font>');
            $this->out('安装包下载中, 请耐心等待...');
            if (!$file = @file_get_contents($url, false, $context)) {
                throw new \Exception('安装包下载失败, 请稍后再试!');
            }
            $this->out('安装包下载完成!', '正在保存安装包...');
            if (!@file_put_contents($runtimePath . $name, $file)) {
                throw new \Exception('安装包保存失败! 请检查 runtime 目录权限!');
            }
            $this->out('保存完成!', '正在执行解压...');
            if (! $this->extractZip($runtimePath . $name)) {
                throw new \Exception('安装包解压失败!');
            }
            // 读取sql文件
            $this->out('解压完成!', '正在更新数据...');
            // 更新表结构
            //$tableFields = require "{$runtimePath}{$dirname}/config/table.php";
            $sqlFile = file_get_contents("{$runtimePath}{$dirname}/update.sql");

            $config = Config::pull('db');
            $mysqli = new \mysqli(
                $config['hostname'],
                $config['username'],
                $config['password'],
                $config['database'],
                $config['hostport']
            );
            if ($mysqli->connect_errno) {
                $mysqli->close();
                throw new \Exception("数据库连接失败! {$mysqli->connect_error}");
            }

            $mysqli->autocommit(false);
            $mysqli->select_db($config['database']);
            $mysqli->query("SET NAMES utf8");

            /*foreach ($tableFields as $table => $fields) {
                foreach ($fields as $field => $sql) {
                    $fetchFields = $mysqli->query("DESCRIBE `{$table}`;");
                    // 判断字段是否已存在
                    $flag = true;
                    foreach ($fetchFields as $fetchField) {
                        if ($field == $fetchField['Field']) {
                            $flag = false;
                        }
                    }
                    if ($flag) {
                        if (!$mysqli->query($sql)) {
                            throw new \Exception($mysqli->error);
                        }
                    }
                }
            }*/

            foreach (explode(';', $sqlFile) as $value) {
                if ($value && !ctype_space($value)) {
                    if (!$mysqli->query($value . ';')) {
                        throw new \Exception("数据更新失败! 错误信息：{$mysqli->error}, sql语句：{$value}");
                    }
                }
            }
            $this->out('数据库更新完毕!', '正在复制文件...');
            $this->out('清理临时数据...');
            // TODO 复制文件
            // TODO 清理临时数据

            $mysqli->commit();
            $mysqli->autocommit(true);
            $mysqli->close();

            $this->out("<font color='green'>更新成功!</font>");
        } catch (\Exception $e) {
            $this->out("<font color='red'>{$e->getMessage()}</font>");
        }

        ob_end_flush();
    }

    /**
     * 解压文件到指定目录
     *
     * @param $filename                 zip压缩包路径加文件名
     * @param bool $destDir             解压文件的目的路径
     * @param bool $createZipNameDir    是否以压缩文件的名字创建目标文件夹
     * @param bool $overwrite           是否覆盖
     * @return bool
     */
    public function extractZip($filename, $destDir = false, $createZipNameDir = false, $overwrite = true)
    {
        if ($zip = zip_open($filename)) {
            if ($zip) {
                $splitter = ($createZipNameDir === true) ? "." : "/";
                if ($destDir === false) {
                    $destDir = substr($filename, 0, strrpos($filename, $splitter)) . "/";
                }

                // 如果不存在 创建目标解压目录
                $this->mkdirs($destDir);

                // 对每个文件进行解压
                while ($zip_entry = zip_read($zip)) {
                    // 文件不在根目录
                    $pos_last_slash = strrpos(zip_entry_name($zip_entry), "/");
                    if ($pos_last_slash !== false) {
                        // 创建目录 在末尾带 /
                        $this->mkdirs($destDir . substr(zip_entry_name($zip_entry), 0, $pos_last_slash + 1));
                    }

                    // 打开包
                    if (zip_entry_open($zip, $zip_entry, "r")) {
                        // 文件名保存在磁盘上
                        $file_name = $destDir . zip_entry_name($zip_entry);
                        // 检查文件是否需要重写
                        if ($overwrite === true || $overwrite === false && !is_file($file_name)) {
                            // 读取压缩文件的内容
                            $fstream = zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));
                            @file_put_contents($file_name, $fstream);
                            // 设置权限
                            chmod($file_name, 0755);
                        }
                        zip_entry_close($zip_entry);
                    }
                }
                zip_close($zip);
            }
        } else {
            return false;
        }

        return true;
    }

    /**
     * 创建目录
     *
     * @param $path
     */
    public function mkdirs($path)
    {
        if (!is_dir($path)) {
            $directoryPath = "";
            $directories = explode("/", $path);
            array_pop($directories);

            foreach ($directories as $directory) {
                $directoryPath .= $directory . "/";
                if (!is_dir($directoryPath)) {
                    mkdir($directoryPath);
                    chmod($directoryPath, 0777);
                }
            }
        }
    }

    /**
     * 检测最新版
     *
     * @return bool|string
     * @throws \Exception
     */
    private function checkUpdate()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->get('https://api.github.com/repos/wisp-x/lsky-pro/releases/latest');
        if (200 === $response->getStatusCode()) {
            $result = json_decode($response->getBody()->getContents());
            $version = ltrim(strtolower($result->name), 'v');
            if ($this->config['system_version'] > $version) {
                throw new \Exception('不可降级!');
            }
            if ($this->config['system_version'] == $version) {
                throw new \Exception('当前已经是最新版!');
            }

            return $version;
        }

        return false;
    }

    /**
     * Out Print
     *
     * @param mixed ...$args
     */
    private function out(...$args)
    {
        if (ob_get_level() == 0) ob_start();

        foreach ($args as $i => $arg) {
            echo "<span><font color='green'>root@lsky-pro</font>:~$ {$arg}</span>";
            echo str_pad('', 4096) . "\n";

            ob_flush();
            flush();
            sleep(1);
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
}
