<?php
/**
 * User: Wisp X
 * Date: 2018/9/30
 * Time: 下午4:28
 * Link: https://github.com/wisp-x
 */

namespace strategy\driver;

use strategy\Driver;

class Github implements Driver
{
    /**
     * 当前储存策略参数
     *
     * @var array
     */
    protected $options = [];

    /**
     * 错误信息
     *
     * @var null
     */
    protected $error = null;

    /**
     * client实例
     *
     * @var null
     */
    protected $client = null;

    /**
     * client constructor.
     *
     * @param array $options
     */
    public function __construct($options = [])
    {
        $this->options = $options;
        try {
            $this->client = new \Github\Client();
            $this->client->authenticate($this->options['github_token'],null, \Github\Client::AUTH_URL_TOKEN);
        } catch (\Exception $e) {
            $this->error = $e->getMessage();
        }
    }

    /**
     * 创建文件
     *
     * @param $pathname
     * @param $file
     *
     * @return bool
     */
    public function create($pathname, $file)
    {
        try {
            $image_info = getimagesize($file);
            $content = fread(fopen($file, 'r'), filesize($file));
            $path = $this->options['github_path']."/".$pathname;
            $fileInfo = $this->client->api('repo')->contents()->create($this->options['github_user'], $this->options['github_repo'], $path,$content,$this->options['github_message'],$this->options['github_branch']);
        } catch (\Exception $e) {
            $this->error = $e->getMessage();
            return false;
        }

        return true;
    }

    /**
     * 删除文件
     *
     * @param $pathname
     *
     * @return bool
     */
    public function delete($pathname)
    {
        try {
            $path = $this->options['github_path']."/".$pathname;
            $oldFile =$this->client->api('repo')->contents()->show($this->options['github_user'], $this->options['github_repo'], $path,$this->options['github_branch']);
            $fileInfo =$this->client->api('repo')->contents()->rm($this->options['github_user'], $this->options['github_repo'], $path, "", $oldFile['sha'],$this->options['github_branch']);

        } catch (\Exception $e) {
            $this->error = $e->getMessage();
            return false;
        }

        return true;
    }

    /**
     * 删除多个文件
     *
     * @param array $list
     * @return bool|mixed
     */
    public function deletes(array $list)
    {
        try {
            foreach ($list as $value) {
                $this->delete($value);
            }
        } catch (\Exception $e) {
            $this->error = $e->getMessage();
            return false;
        }

        return true;
    }

    public function getError()
    {
        return 'client：' . $this->error;
    }
}
