<?php
/**
 * Created by Wisp X
 * User: Wisp X
 * Date: 2020/3/17
 * Time: 9:01
 */

namespace app\common\controller;

use app\common\model\Group;
use app\common\model\Images;
use app\common\traits\Core;
use GuzzleHttp\Client;
use think\Controller;
use think\Exception;
use think\facade\Config;

class Upload extends Controller
{
    use Core;

    /**
     * 当前登录用户
     *
     * @var
     */
    private $user;

    /**
     * 当前应该使用的用户组
     *
     * @var
     */
    private $group;

    /**
     * 当前应该使用的储存对象实例
     *
     * @var
     */
    private $strategy;

    /**
     * 系统配置
     *
     * @var array
     */
    private $configs = [];

    protected function initialize()
    {
        parent::initialize();
        $this->user = request()->user;
        $this->configs = $this->getConfig();

        // 角色组
        if ($this->user) $this->group = $this->user->role;
        if (!$this->group) $this->group = Group::where('default', 1)->find();

        // 设置当前储存策略
        $this->strategy = $this->getStrategyInstance($this->group->strategy);
    }

    /**
     * 执行上传，成功返回数据，否则直接抛出异常
     *
     * @return array
     * @throws Exception
     */
    public function exec()
    {
        if (!$this->configs['allowed_tourist_upload'] && !$this->user) {
            throw new Exception('管理员关闭了游客上传！');
        }

        $image = $this->getImage();
        $size = $image->getSize();
        $mime = $image->getMime();
        $sha1 = $image->hash('sha1');
        $md5 = $image->hash('md5');

        if ($this->user) {
            if (($this->user->use_quota + $size) > $this->user->quota) {
                throw new Exception('保存失败！您的储存容量不足，请联系管理员！');
            }

            if (!$this->user->state) {
                throw new Exception('你的账号被冻结，请联系管理员！');
            }
        }

        // 当前储存策略
        $currentStrategy = strtolower($this->group->strategy);
        // 获取当前储存策略配置
        $pathname = strtolower($this->makePathname($image->getInfo('name')));

        $cdnDomain = $currentStrategy . '_cdn_domain';
        $domain = $this->request->domain();
        if (array_key_exists($cdnDomain, $this->strategy->configs)) {
            if ($this->strategy->configs[$cdnDomain]) {
                $domain = $this->strategy->configs[$cdnDomain];
            }
        }
        $url = make_url($domain, $pathname);

        // 检测是否存在该图片，有则直接返回
        if ($oldImage = Images::where('md5', $md5)->where('strategy', $currentStrategy)->find()) {
            $pathname = $oldImage->pathname;
            $url = make_url($domain, $pathname);
            goto exist;
        }

        if (!$this->strategy->create($pathname, $image->getPathname())) {
            if (Config::get('app.app_debug')) {
                throw new Exception($this->strategy->getError());
            }
            throw new Exception('上传失败，请检查策略配置是否正确！');
        }

        exist:

        // 图片鉴黄
        $suspicious = 0;
        if ($this->configs['open_audit']) {
            $client = new Client(['timeout' => 30.00]);
            $response = $client->get("https://www.moderatecontent.com/api/v2?key={$this->configs['audit_key']}&url={$url}");
            if (200 == $response->getStatusCode()) {
                $result = json_decode($response->getBody()->getContents());
                if (0 == $result->error_code) {
                    if ($result->rating_index >= $this->configs['audit_index']) {
                        // 是否直接拦截色情图片
                        if (Config::get('system.intercept_salacity')) {
                            $this->strategy->delete($pathname);
                            throw new Exception('图片[' . $image->getInfo('name') . ']涉嫌违规，禁止上传！');
                        }
                        $suspicious = 1;
                    }
                } else {
                    $this->strategy->delete($pathname);
                    throw new Exception($result->error);
                }
            }
        }

        $imageData = [
            'user_id' => $this->user ? $this->user->id : 0,
            'strategy' => $currentStrategy,
            'path' => dirname($pathname),
            'name' => basename($pathname),
            'pathname' => $pathname,
            'size' => $size,
            'mime' => $mime,
            'sha1' => $sha1,
            'md5' => $md5,
            'suspicious' => $suspicious
        ];

        // 默认上传文件夹，暂只支持一级
        if ($this->user && $this->user->default_folder) {
            $folderId = $this->user->folders()->where('name', $this->user->default_folder)->value('id');
            if (!$folderId) {
                if (!$folderId = $this->user->folders()->insertGetId([
                    'user_id' => $this->user->id,
                    'parent_id' => 0,
                    'name' => $this->user->default_folder
                ])) {
                    throw new Exception('文件夹创建失败！');
                }
            }

            $imageData['folder_id'] = $folderId;
        }

        if (!Images::create($imageData)) {
            $this->strategy->delete($pathname);
            throw new Exception('图片数据保存失败');
        }

        $data = [
            'name' => $image->getInfo('name'),
            'url' => $url,
            'size' => $size,
            'mime' => $mime,
            'sha1' => $sha1,
            'md5' => $md5,
        ];

        if ($this->user) {
            $data['quota'] = sprintf('%.2f', (float)$this->user->quota);
            $data['use_quota'] = sprintf('%.2f', (float)$this->user->use_quota);
        }

        return $data;
    }

    /**
     * 获取图片资源
     *
     * @return array|null|\think\File
     * @throws Exception
     */
    private function getImage()
    {
        $image = $this->request->file('image');
        if (null === $image) {
            throw new Exception('图片资源获取失败');
        }
        if (!is_uploaded_file($image->getPathname())) {
            throw new Exception('file is not uploaded via HTTP POST');
        }
        if (!$image->check([
            'size' => $this->configs['upload_max_size'],
            'ext' => filter_comma($this->configs['upload_allowed_exts']),
        ])) {
            throw new Exception($image->getError());
        }

        return $image;
    }

    /**
     * Make pathname
     *
     * @param string $name 文件名
     *
     * @return string
     */
    private function makePathname($name)
    {
        $naming = Config::pull('naming');
        $pathRule = $this->configs['path_naming_rule'];
        $fileRule = $this->configs['file_naming_rule'];
        $path = trim(str_replace(
            array_column($naming['path'], 'name'),
            array_column($naming['path'], 'value'),
            $pathRule
        ), '/');
        if ($fileRule === '{original}') {
            $file = $name;
        } else {
            $file = trim(str_replace(
                array_column($naming['file'], 'name'),
                array_column($naming['file'], 'value'),
                $fileRule
            ), '/') . '.' . get_file_ext($name);
        }
        return $path . '/' . $file;
    }
}
