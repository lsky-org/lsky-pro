<?php

namespace App\Services;

use App\Enums\ConfigKey;
use App\Models\Config;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use League\Flysystem\Filesystem;
use League\Flysystem\FilesystemException;
use League\Flysystem\Local\LocalFilesystemAdapter;

class UpgradeService
{
    const ApiUrl = 'https://api.lsky.pro';

    /** @var array|array[] 所有版本 */
    protected array $versions = [];

    /** @var string 临时目录 */
    protected string $temp = 'temp';

    /** @var string 升级锁文件 */
    protected string $lock = 'upgrading.lock';

    protected Filesystem $filesystem;

    public function __construct(protected string $version)
    {
        $this->filesystem = new Filesystem(new LocalFilesystemAdapter(base_path()));
    }

    /**
     * 是否需要更新
     *
     * @return bool
     */
    public function check(): bool
    {
        return version_compare($this->version, $this->getVersions()->first()['name']) === -1;
    }

    public function getVersions(): Collection
    {
        if (! $this->versions) {
            // TODO 获取所有版本
            $this->versions = [
                [
                    'icon' => 'https://raw.githubusercontent.com/wisp-x/lsky-pro/master/public/static/app/images/icon.png',
                    'name' => 'V 2.0.1',
                    'size' => '33.5 MB',
                    'md5' => '12',
                    'changelog' => (new \Parsedown())->parse('### Added
- 一键复制全部链接 ([#167](https://github.com/wisp-x/lsky-pro/issues/167))

### Changed
- 将所有静态资源放置本地
- 接口增加刷新 token 属性
- 个人中心、后台显示用户注册时间 ([#263](https://github.com/wisp-x/lsky-pro/pull/263))

FAQ:
- 为了保证可用性，此次更新主要是为了静态文件放置本地，不再使用第三方静态资源托管服务。
- 如没有特殊情况，这次更新为 1.x 版本最后一个小版本。最新版本动态请[戳我](https://github.com/wisp-x/lsky-pro/projects/1)

'),
                    'pushed_at' => '2022-02-26 12:21',
                ],
            ];
        }
        return collect($this->versions);
    }

    public function upgrade(): bool
    {
        try {
            if (file_exists(base_path($this->lock))) {
                return false;
            }

            if (! $this->check()) {
                return false;
            }

            file_put_contents(base_path($this->lock), '');
            $this->setProgress('准备升级...');

            // TODO 获取差异信息
            $diff = [
                'server_url' => 'https://raw.githubusercontent.com/wisp-x/lsky-pro/dev',
                'files' => [
                    [
                        'path' => '.env.example',
                        'md5' => 'c931d81183b69204496923f2fbe3dfd5',
                        'action' => 'copied', // in added, deleted, copied
                    ],
                ],
            ];
            $this->setProgress('下载补丁包...');
            $timeout = 30;
            foreach ($diff['files'] as $file) {
                if ($file['action'] === 'deleted') continue;
                $response = Http::withOptions([
                    'timeout' => $timeout,
                ])->timeout($timeout)->get($diff['server_url'].'/'.$file['path']);
                if (! $response->successful()) {
                    throw new \Exception("补丁文件 {$file['path']} 下载失败。");
                }
                $this->filesystem->write($this->temp.'/'.$file['path'], $response->body());
                // 校验文件
                if ($file['md5'] !== md5_file(base_path($this->temp).'/'.$file['path'])) {
                    throw new \Exception("补丁文件 {$file['path']} 校验失败。");
                }
            }
            $this->setProgress('执行升级...');
            foreach ($diff['files'] as $file) {
                match ($file['action']) {
                    'added', 'copied' => $this->filesystem->copy($this->temp.'/'.$file['path'], $file['path']),
                    'deleted' => $this->filesystem->delete($file['path']),
                };
            }
            $this->setProgress('清除缓存...');
            // 更新版本号
            $version = $this->getVersions()->first()['name'];
            //Config::query()->where('name', ConfigKey::AppVersion)->update(['value' => $version]);
            // 执行数据库迁移
            Artisan::call('migrate');
            // 清除配置缓存
            Cache::forget('configs');
            Artisan::call('package:discover');
        } catch (\Throwable $e) {
            Log::error('升级失败', ['message' => $e->getMessage(), $e->getTraceAsString()]);
            $this->setProgress($e->getMessage(), 'fail');
            @unlink(base_path($this->lock));
            return false;
        }
        $this->setProgress('升级成功，请刷新页面', 'success', 6);
        $this->gc();
        return true;
    }

    /**
     * 设置升级进度
     *
     * @param  string  $message
     * @param  string  $status in installing、success、fail
     * @param  int  $ttl
     * @return void
     */
    protected function setProgress(string $message, string $status = 'installing', int $ttl = 1800)
    {
        Cache::put('upgrade_progress', compact('status', 'message'), $ttl);
    }

    /**
     * 获取升级进度
     *
     * @return void
     */
    public function getProgress()
    {
        Cache::get('upgrade_progress');
    }

    protected function gc()
    {
        try {
            $this->filesystem->delete($this->lock);
            $this->filesystem->deleteDirectory($this->temp);
        } catch (FilesystemException $e) {
        }
    }
}
