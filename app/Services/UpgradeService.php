<?php

namespace App\Services;

use App\Enums\ConfigKey;
use App\Models\Config;
use App\Utils;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use League\Flysystem\Filesystem;
use League\Flysystem\FilesystemException;
use League\Flysystem\Local\LocalFilesystemAdapter;

class UpgradeService
{
    const ApiUrl = 'https://api.lsky.pro/v2';

    /** @var array|array[] 所有版本 */
    protected array $versions = [];

    /** @var string 临时目录 */
    protected string $temp = 'storage/temp';

    /** @var string 升级锁文件 */
    protected string $lock = 'upgrading.lock';

    protected Filesystem $filesystem;

    protected PendingRequest $http;

    public function __construct(protected string $version)
    {
        $this->http = Http::baseUrl(self::ApiUrl)->withOptions(['timeout' => 1800])->timeout(1800);
        $this->filesystem = new Filesystem(new LocalFilesystemAdapter(base_path()));
    }

    /**
     * 是否需要更新
     *
     * @return bool
     * @throws \Exception
     */
    public function check(): bool
    {
        return version_compare($this->version, $this->getVersions()->first()['name']) === -1;
    }

    /**
     * @throws \Exception
     */
    public function getVersions(): Collection
    {
        if (! $this->versions) {
            $response = $this->http->get('/versions');
            if (! $response->successful()) {
                throw new \Exception('无法请求升级服务器');
            }
            $this->versions = $response->json() ?: [];
            foreach ($this->versions as &$version) {
                $version['changelog'] = (new \Parsedown())->text($version['changelog']);
            }
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

            @ini_set('memory_limit', '1G');
            @ini_set('max_execution_time', '86400');
            // 获取差异信息
            $response = $this->http->get('/diff/'.urlencode(Utils::config(ConfigKey::AppVersion)));
            if ($response->failed()) {
                throw new \Exception('无法请求升级服务器');
            }
            $result = $response->json();
            $files = $result['files'];

            $this->setProgress('下载补丁包...');
            foreach ($files as $file) {
                if ($file['action'] === 'deleted') continue;
                $res = $this->http->baseUrl($result['download_url'])->get($file['pathname']);
                if ($res->failed()) {
                    throw new \Exception("补丁文件 {$file['pathname']} 下载失败。");
                }
                $this->filesystem->write($this->temp.'/'.$file['pathname'], $res->body());
                // 校验文件
                if ($file['md5'] !== md5_file(base_path($this->temp).'/'.$file['pathname'])) {
                    throw new \Exception("补丁文件 {$file['pathname']} 校验失败。");
                }
            }
            $this->setProgress('执行升级...');
            foreach ($files as $file) {
                match ($file['action']) {
                    'added', 'copied' => $this->filesystem->copy($this->temp.'/'.$file['pathname'], $file['pathname']),
                    'deleted' => $this->filesystem->delete($file['pathname']),
                };
            }
            $this->setProgress('清除缓存...');
            // 更新版本号
            $version = $this->getVersions()->first()['name'];
            Config::query()->where('name', ConfigKey::AppVersion)->update(['value' => $version]);
            // 执行数据库迁移
            Artisan::call('migrate', ['--seed' => true]);
            // 清除缓存
            Artisan::call('optimize:clear');
            Artisan::call('package:discover');
        } catch (\Throwable $e) {
            Utils::e($e, '升级失败');
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
