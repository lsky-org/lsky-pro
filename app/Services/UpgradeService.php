<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use ZipArchive;

class UpgradeService
{
    const ApiUrl = 'https://api.lsky.pro';

    /** @var array|array[] 所有版本 */
    protected array $versions = [];

    public function __construct(protected string $version)
    {
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
                    'download_url' => 'https://software.download.prss.microsoft.com/sg/Win10_21H2_Chinese(Simplified)_x64.iso?t=cc16df27-a503-4843-928b-fa38631f2a70&e=1646095954&h=47dc652437cb5752e720648dd2f74faa0b5d1966c9f6cfb6b8557f32dddec97c',
                ],
            ];
        }
        return collect($this->versions);
    }

    public function upgrade(): bool
    {
        $lock = base_path('upgrading.lock');

        try {
            if (file_exists($lock)) {
                return false;
            }

            file_put_contents($lock, '');

            $package = base_path('upgrade.zip');
            $version = $this->getVersions()->first();

            // 如果有安装包则直接进行安装，否则下载安装包
            if (! file_exists($package)) {
                $this->setProgress('正在下载安装包...');
                if (! $this->check()) {
                    throw new \Exception('No need to upgrade.');
                }
                $response = Http::withOptions([
                    'timeout' => 600,
                ])->timeout(600)->get($version['download_url'])->onError(function () {
                    throw new \Exception('安装包下载异常');
                });
                if ($response->successful()) {
                    file_put_contents($package, $response->body());
                    $this->setProgress('安装包下载完成');
                }
            }

            $this->setProgress('正在解压安装包...');
            $md5 = md5_file($package);

            if ($md5 !== $version['md5']) {
                throw new \Exception('md5 校验失败');
            }

            $zip = new ZipArchive;
            if (! $zip->open($package)) {
                throw new \Exception('Installation package decompression failed.');
            }
            $zip->extractTo(base_path($md5));
            $zip->close();
            $this->setProgress('执行安装中...');

            // TODO 读取已存在的软连接，移动到更新目录
            // TODO 移动本地文件到更新目录

            // 清除配置缓存
            Cache::forget('configs');
            Artisan::call('package:discover');
        } catch (\Throwable $e) {
            Log::error('升级失败', ['message' => $e->getMessage(), $e->getTraceAsString()]);
            $this->setProgress($e->getMessage(), 'fail');
            @unlink($lock);
            return false;
        }
        $this->setProgress('安装成功，请刷新页面', 'success');
        @unlink($lock);
        @unlink($package);

        return true;
    }

    /**
     * 设置安装进度
     *
     * @param  string  $message
     * @param  string  $status in installing、success、fail
     * @return void
     */
    private function setProgress(string $message, string $status = 'installing')
    {
        Cache::put('upgrade_progress', compact('status', 'message'), 1800);
    }

    /**
     * 获取安装进度
     *
     * @return void
     */
    public function getProgress()
    {
        Cache::get('upgrade_progress');
    }
}
