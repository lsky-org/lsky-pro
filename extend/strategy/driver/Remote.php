<?php
/**
 * Created by WispX.
 * User: WispX <1591788658@qq.com>
 * Date: 2019/10/31
 * Time: 9:39 上午
 * Link: https://github.com/wisp-x
 */

namespace strategy\driver;

use FtpClient\FtpException;
use strategy\Driver;

class Remote implements Driver
{
    private $ftp;

    private $error;

    public function __construct($options = [])
    {
        try {
            $this->ftp = new \FtpClient\FtpClient();
            $this->ftp->connect($options['remote_host'], false, $options['remote_port']);
            $this->ftp = $this->ftp->login($options['remote_name'], $options['remote_password']);
            $this->ftp->pasv($options['remote_pasv'] ? true : false);
        } catch (FtpException $e) {
            $this->error = $e->getMessage();
        }
    }

    /**
     * 创建文件
     *
     * @param $pathname
     * @param $file
     *
     * @return mixed
     */
    public function create($pathname, $file)
    {
        if (!$this->check()) return false;

        try {
            $dirname = dirname($pathname);
            if (!$this->ftp->isDir($dirname)) {
                if (!$this->ftp->mkdir($dirname, true)) {
                    throw new FtpException('文件夹创建失败!');
                }
            }
            if (!$this->ftp->put($pathname, $file, FTP_BINARY)) {
                throw new FtpException('上传失败');
            }
        } catch (FtpException $e) {
            $this->error = $e->getMessage();
            return false;
        }

        return true;
    }

    /**
     * 删除单个文件
     *
     * @param $pathname
     *
     * @return mixed
     */
    public function delete($pathname)
    {
        if (!$this->check()) return false;

        try {
            if (!$this->ftp->remove($pathname, true)) {
                throw new FtpException('删除失败');
            }
        } catch (FtpException $e) {
            $this->error = $e->getMessage();
            return false;
        }

        return true;
    }

    /**
     * 删除多个文件
     *
     * @param array $list 一维数组
     *
     * @return mixed
     */
    public function deletes(array $list)
    {
        if (!$this->check()) return false;

        try {
            foreach ($list as $item) {
                if (!$this->ftp->remove($item, true)) {
                    throw new FtpException('删除失败');
                }
            }
        } catch (FtpException $e) {
            $this->error = $e->getMessage();
            return false;
        }

        return true;
    }

    /**
     * 获取出错信息
     *
     * @return mixed
     */
    public function getError()
    {
        return 'Remote：' . $this->error;
    }

    private function check()
    {
        if (!extension_loaded('ftp')) {
            $this->error = 'php_ftp 拓展未开启';
            return false;
        }

        return true;
    }
}
