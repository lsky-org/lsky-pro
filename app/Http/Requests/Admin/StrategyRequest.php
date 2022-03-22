<?php

namespace App\Http\Requests\Admin;

use App\Enums\StrategyKey;
use App\Http\Requests\FormRequest;
use App\Models\Strategy;
use Illuminate\Support\Collection;

class StrategyRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $checkUrl = function ($attribute, $value, $fail) {
            if ($this->input('key') == StrategyKey::Local) {
                $folders = [env('THUMBNAIL_PATH', 'thumbnails'), 'fonts', 'css', 'js'];
                $symlink = Strategy::getRootPath($value);
                if (! $symlink) {
                    return $fail('访问域名缺少根路径');
                }
                if (in_array($symlink, $folders)) {
                    return $fail('系统保留路径：'. $symlink);
                }
                if (false !== strpbrk($symlink, "\\/?%*:|\"<>")) {
                    return $fail('根路径名称不符合规则');
                }
                // 修改时单独判断
                if ($this->method() === 'PUT') {
                    $symlinks = Strategy::query()
                        ->where('id', '<>', $this->route('id'))
                        ->pluck('configs')
                        ->transform(function (Collection $configs) {
                            return Strategy::getRootPath($configs->get('url'));
                        })->merge($folders)->values()->toArray();
                    if (in_array($symlink, $symlinks)) {
                        return $fail('根路径已经存在');
                    }
                } else {
                    if (realpath(public_path($symlink))) {
                        return $fail('根路径已经存在');
                    }
                }
            }
        };

        $array = [
            'groups' => 'array',
            'name' => 'required|max:60',
            'intro' => 'max:2000',
            'key' => 'required|integer',
            'configs.url' => ['required', 'url'],
        ];

        return array_merge($array, match((int)$this->input('key')) {
            StrategyKey::Local => [
                'configs.url' => ['required', 'url', $checkUrl],
                'configs.root' => ['max:1000', function ($attribute, $value, $fail) {
                    if ($value) {
                        if (! is_dir($value)) {
                            return $fail('储存路径不存在');
                        }
                        if (! is_writeable($value)) {
                            return $fail('储存路径没有写入权限');
                        }
                    }
                }],
            ],
            StrategyKey::S3 => [
                'configs.access_key_id' => 'required',
                'configs.secret_access_key' => 'required',
                'configs.endpoint' => '',
                'configs.region' => '',
                'configs.bucket' => 'required',
            ],
            StrategyKey::Oss => [
                'configs.access_key_id' => 'required',
                'configs.access_key_secret' => 'required',
                'configs.endpoint' => 'required',
                'configs.bucket' => 'required',
            ],
            StrategyKey::Cos => [
                'configs.app_id' => 'required',
                'configs.secret_id' => 'required',
                'configs.secret_key' => 'required',
                'configs.region' => 'required',
                'configs.bucket' => 'required',
            ],
            StrategyKey::Kodo => [
                'configs.access_key' => 'required',
                'configs.secret_key' => 'required',
                'configs.bucket' => 'required',
            ],
            StrategyKey::Uss => [
                'configs.service' => 'required',
                'configs.operator' => 'required',
                'configs.password' => 'required',
            ],
            StrategyKey::Sftp => [
                'configs.root' => 'required',
                'configs.host' => 'required',
                'configs.port' => 'integer',
                'configs.username' => 'required',
                'configs.password' => 'required_if:configs.private_key,null',
                'configs.private_key' => 'required_if:configs.password,null',
                'configs.passphrase' => '',
                'configs.use_agent' => 'required|boolean',
            ],
            StrategyKey::Ftp => [
                'configs.root' => 'required',
                'configs.host' => 'required',
                'configs.port' => 'integer',
                'configs.username' => 'required',
                'configs.password' => 'required',
                'configs.ssl' => 'required|boolean',
                'configs.passive' => 'required|boolean',
            ],
            StrategyKey::Webdav => [
                'configs.base_uri' => 'required',
                'configs.username' => '',
                'configs.password' => '',
            ],
            StrategyKey::Minio => [
                'configs.access_key' => 'required',
                'configs.secret_key' => 'required',
                'configs.endpoint' => '',
                'configs.prefix' => '',
                'configs.region' => '',
                'configs.bucket' => 'required',
            ],
        });
    }

    public function attributes()
    {
        $array = [
            'name' => '名称',
            'intro' => '简介',
            'key' => '策略',
            'configs.url' => '访问网址',
        ];

        return array_merge($array, match((int)$this->input('key')) {
            StrategyKey::Local => [
                'configs.root' => '根目录路径',
            ],
            StrategyKey::S3 => [
                'configs.access_key_id' => 'AccessKeyId',
                'configs.secret_access_key' => 'SecretAccessKey',
                'configs.endpoint' => '连接地址',
                'configs.region' => '区域',
                'configs.bucket' => '储存桶名称',
            ],
            StrategyKey::Oss => [
                'configs.access_key_id' => 'AccessKeyId',
                'configs.access_key_secret' => 'AccessKeySecret',
                'configs.endpoint' => '地域节点域名',
                'configs.bucket' => 'Bucket 名称',
            ],
            StrategyKey::Cos => [
                'configs.app_id' => 'AppId',
                'configs.secret_id' => 'SecretId',
                'configs.secret_key' => 'SecretKey',
                'configs.region' => '所属地域',
                'configs.bucket' => '储存桶名称',
            ],
            StrategyKey::Kodo => [
                'configs.access_key' => 'AccessKey',
                'configs.secret_key' => 'SecretKey',
                'configs.bucket' => 'Bucket',
            ],
            StrategyKey::Uss => [
                'configs.service' => '服务名称',
                'configs.operator' => '操作员名称',
                'configs.password' => '操作员密码',
            ],
            StrategyKey::Sftp => [
                'configs.root' => '根目录路径',
                'configs.host' => '主机地址',
                'configs.port' => '连接端口',
                'configs.username' => '用户名',
                'configs.password' => '密码',
                'configs.private_key' => '密钥',
                'configs.passphrase' => '密钥口令',
                'configs.use_agent' => '使用代理',
            ],
            StrategyKey::Ftp => [
                'configs.root' => '根目录路径',
                'configs.host' => '主机地址',
                'configs.port' => '连接端口',
                'configs.username' => '用户名',
                'configs.password' => '密码',
                'configs.ssl' => '加密连接',
                'configs.passive' => '被动模式',
            ],
            StrategyKey::Webdav => [
                'configs.base_uri' => 'required',
                'configs.username' => 'required',
                'configs.password' => 'required',
            ],
            StrategyKey::Minio => [
                'configs.access_key' => 'AccessKey',
                'configs.secret_key' => 'SecretKey',
                'configs.endpoint' => '连接地址',
                'configs.prefix' => '子目录',
                'configs.region' => '区域',
                'configs.bucket' => 'Bucket 名称',
            ],
        });
    }
}
