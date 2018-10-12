<?php
/**
 * User: Wisp X
 * Date: 2018/9/27
 * Time: 22:21
 * Link: https://gitee.com/wispx
 */

namespace app\index\controller\admin;

use app\common\model\Config;
use think\Db;
use think\Exception;
use think\facade\Env;

/**
 * 系统更新
 *
 * Class Update
 * @package app\index\controller\admin
 */
class Update extends Base
{
    const VERSION_API = 'https://lsky.wispx.cn/version.php';

    private $record = [];

    public function initialize()
    {
        parent::initialize();
        $record = json_decode(@file_get_contents(Env::get('root_path') . 'update.json'), true);
        if ($record) {
            $this->record = $record;
        }
        $this->assign('record', $this->record);
    }

    public function index()
    {
        // 检测是否为最新版
        $newest = json_decode($this->curl(self::VERSION_API), true);
        $this->assign('newest', $newest);
        return $this->fetch();
    }

    public function toUpdate()
    {
        if ($this->request->isPost()) {
            Db::startTrans();
            try {
                // 获取最新版数据
                $newest = json_decode($this->curl(self::VERSION_API));
                if (!$newest) {
                    throw new Exception('更新数据获取失败');
                }
                // 根目录路径
                $rootPath = Env::get('root_path');
                // 缓存目录路径
                $runtimePath = Env::get('runtime_path');
                // 版本缓存目录路径
                $verPath = $runtimePath . $newest->version . DIRECTORY_SEPARATOR;
                // 文件暂存路径
                $pathname = $verPath . basename($newest->link);
                // 下载文件
                if (!$this->getFile($newest->link, $pathname)) {
                    throw new Exception('更新文件下载失败');
                }
                // 解压到暂存目录
                if (!$this->unZip($pathname, $verPath)) {
                    @unlink($pathname);
                    throw new Exception('更新文件解压失败');
                }
                // 是否存在更新配置文件
                $updateConfig = $verPath . 'update.php';
                if ($config = @include($updateConfig)) {
                    foreach ($config as $key => $value) {
                        switch ($key) {
                            // 遍历删除文件
                            case 'delete':
                                foreach ($value as $val) {
                                    @unlink($rootPath . trim($val, '/'));
                                }
                                break;
                        }
                    }

                    // 删除配置文件
                    @unlink($updateConfig);
                }
                // 是否存在sql文件
                $updateSql = $verPath . 'update.sql';
                if ($sql = @file_get_contents($updateSql)) {
                    Db::execute($sql);

                    // 删除sql文件
                    @unlink($updateSql);
                }
                // 更新版本号
                Config::where('name', 'system_version')->setField('value', $newest->version);
                // 删除压缩包
                @unlink($pathname);
                // 移动文件
                $this->recurseCopy($verPath, $rootPath);
                // 删除更新缓存目录
                $this->delFolder($verPath);
                // 写入更新记录文件
                array_unshift($this->record, $newest);
                file_put_contents($rootPath . 'update.json', json_encode($this->record, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT));
                Db::commit();
            } catch (Exception $e) {
                Db::rollback();
                //return $this->error($e->getLine());
                return $this->error($e->getMessage());
            }
            return $this->success('更新成功');
        }
    }

    private function delFolder($path)
    {
        if (is_dir($path)) {
            // 扫描一个文件夹内的所有文件夹和文件并返回数组
            $p = scandir($path);
            foreach ($p as $val) {
                // 排除目录中的.和..
                if ($val != "." && $val != "..") {
                    // 如果是目录则递归子目录，继续操作
                    if (is_dir($path . $val)) {
                        // 子目录中操作删除文件夹和文件
                        $this->delFolder($path . $val . DIRECTORY_SEPARATOR);
                        // 目录清空后删除空文件夹
                        @rmdir($path . $val . DIRECTORY_SEPARATOR);
                    } else {
                        // 如果是文件直接删除
                        @unlink($path . $val);
                    }
                }
            }
            @rmdir($path);
        }
    }

    /**
     * 递归移动源目录（包括文件和子文件）到目的目录【或移动源文件到新文件】
     *
     * @param [string] $source 源目录或源文件
     * @param [string] $target 目的目录或目的文件
     *
     * @return boolean true
     */
    private function moveFolder($source, $target)
    {

        if (!file_exists($source)) {
            return false;
        } //如果源目录/文件不存在返回false

        //如果要移动文件
        if (filetype($source) == 'file') {
            $basedir = dirname($target);
            if (!is_dir($basedir)) {
                mkdir($basedir);
            } //目标目录不存在时给它创建目录
            copy($source, $target);
            unlink($source);

        } else { //如果要移动目录

            if (!file_exists($target)) {
                mkdir($target);
            } //目标目录不存在时就创建

            $files = array(); //存放文件
            $dirs = array(); //存放目录
            $fh = opendir($source);

            if ($fh != false) {
                while ($row = readdir($fh)) {
                    $src_file = $source . DIRECTORY_SEPARATOR . $row; //每个源文件
                    if ($row != '.' && $row != '..') {
                        if (!is_dir($src_file)) {
                            $files[] = $row;
                        } else {
                            $dirs[] = $row;
                        }
                    }
                }
                closedir($fh);
            }

            foreach ($files as $v) {
                copy($source . DIRECTORY_SEPARATOR . $v, $target . DIRECTORY_SEPARATOR . $v);
                unlink($source . DIRECTORY_SEPARATOR . $v);
            }

            if (count($dirs)) {
                foreach ($dirs as $v) {
                    $this->moveFolder($source . DIRECTORY_SEPARATOR . $v, $target . DIRECTORY_SEPARATOR . $v);
                }
            }
        }
        return true;
    }


    private function curl($url)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $data = curl_exec($curl);
        curl_close($curl);
        return $data;
    }

    /**
     * 复制目录下的所有文件及文件夹
     *
     * @param $src  原目录
     * @param $dst  新目录
     */
    private function recurseCopy($src, $dst)
    {
        $dir = opendir($src);
        @mkdir($dst);
        while (false !== ($file = readdir($dir))) {
            if (($file != '.') && ($file != '..')) {
                if (is_dir($src . DIRECTORY_SEPARATOR . $file)) {
                    $this->recurseCopy($src . DIRECTORY_SEPARATOR . $file, $dst . DIRECTORY_SEPARATOR . $file);
                } else {
                    copy($src . DIRECTORY_SEPARATOR . $file, $dst . DIRECTORY_SEPARATOR . $file);
                }
            }
        }
        closedir($dir);
    }

    /**
     * 获取远程文件
     *
     * @param        $url
     * @param string $pathname
     * @param int    $timeout
     *
     * @return bool|mixed|string
     */
    private function getFile($url, $pathname = "", $timeout = 60)
    {
        $pathname = empty($pathname) ? pathinfo($url, PATHINFO_BASENAME) : $pathname;
        $dir = pathinfo($pathname, PATHINFO_DIRNAME);
        !is_dir($dir) && @mkdir($dir, 0755, true);
        $url = str_replace(" ", "%20", $url);

        if (function_exists('curl_init')) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $temp = curl_exec($ch);
            if (@file_put_contents($pathname, $temp) && !curl_error($ch)) {
                return $pathname;
            } else {
                return false;
            }
        } else {
            $options = [
                'http' => [
                    'method' => 'GET',
                    'header' => '',
                    'timeout' => $timeout
                ]
            ];
            $context = stream_context_create($options);
            if (@copy($url, $pathname, $context)) {
                // $http_response_header
                return $pathname;
            } else {
                return false;
            }
        }
    }

    /**
     * zip文件解压
     *
     * @param       $zipFile        zip文件的路径,可以不加zip文件后缀.如果其他类型的文件伪装成zip解压也会失败
     * @param       $dir            解压到的文件夹路径
     * @param array $extArray       允许解压的文件后缀名数组,解压任何类型的文件
     *
     * @return bool        解压失败返回false,成功返回true
     */
    private function unZip($zipFile, $dir, $extArray = [])
    {

        if (!file_exists($zipFile)) {
            return false;
        }

        if (!is_dir($dir)) {

            if (!mkdir($dir, 0755, true)) {
                return false;
            }
        }

        $resource = zip_open($zipFile);

        // 其他类型的文件伪装成zip文件时出现此种情况
        if (is_numeric($resource)) {
            return false;
        }

        while ($dirResource = zip_read($resource)) {
            if (!zip_entry_open($resource, $dirResource)) {
                continue;
            }

            $fileName = str_replace(['/', '\\'], [DIRECTORY_SEPARATOR, DIRECTORY_SEPARATOR], $dir . zip_entry_name($dirResource));
            $filePath = substr($fileName, 0, strrpos($fileName, DIRECTORY_SEPARATOR));

            if (!is_dir($filePath)) {
                if (!mkdir($filePath, 0755, true)) {
                    return false;
                }
            }

            if (is_dir($fileName)) {
                zip_entry_close($dirResource);
                continue;
            }

            if (count($extArray) > 0) {
                if (!in_array(pathinfo($fileName, PATHINFO_EXTENSION), $extArray)) {
                    continue;
                }
            }

            $fileSize = zip_entry_filesize($dirResource);
            $fileContent = zip_entry_read($dirResource, $fileSize);
            file_put_contents($fileName, $fileContent);

            zip_entry_close($dirResource);
        }

        zip_close($resource);
        return true;
    }
}