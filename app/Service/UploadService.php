<?php

namespace App\Service;

use App\Enums\ConfigKey;
use App\Enums\GroupConfigKey;
use App\Enums\Strategy\KodoOption;
use App\Enums\Strategy\LocalOption;
use App\Enums\StrategyKey;
use App\Enums\UserConfigKey;
use App\Exceptions\UploadException;
use App\Models\Group;
use App\Models\Image;
use App\Models\Strategy;
use App\Models\User;
use App\Utils;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use League\Flysystem\Adapter\Local;
use League\Flysystem\AdapterInterface;
use League\Flysystem\Filesystem;
use Overtrue\Flysystem\Qiniu\QiniuAdapter;

class UploadService
{
    /**
     * @param  Request  $request
     * @param  User|null  $user
     * @return void
     * @throws UploadException
     */
    public function store(Request $request, ?User $user = null)//: Image
    {
        $file = $request->file('file');

        if (is_null($user) && ! Utils::config(ConfigKey::IsAllowGuestUpload, true)) {
            throw new UploadException('管理员关闭了游客上传');
        }

        // 组配置
        $configs = Group::getDefaultConfig();
        // 默认使用本地储存策略
        $disk = collect([
            'driver' => StrategyKey::Local,
            'configs' => [LocalOption::Root => config('filesystems.disks.local.root')],
        ]);

        if (! is_null($user)) {
            // 如果该用户有角色组，覆盖默认组、上传策略配置
            if ($user->group) {
                $configs = $user->group->configs;
                // 获取策略列表，根据用户所选的策略上传
                $strategies = $user->group->strategies()->get();
                if ($strategies->isNotEmpty()) {
                    // 是否指定了默认的策略
                    $defaultStrategyId = $user->configs->get(UserConfigKey::DefaultStrategy, 0);
                    /** @var Strategy $strategy $disk */
                    $strategy = $strategies->find($defaultStrategyId, $strategies->first());
                    $disk = collect(['driver' => $strategy->key])->merge(['configs' => $strategy->configs]);
                }
            }

            if ($file->getSize() / 1024 + $user->images()->sum('size') > $user->capacity) {
                throw new UploadException('储存空间不足');
            }
        }

        if (! in_array($file->extension(), $configs->get(GroupConfigKey::AcceptedFileSuffixes))) {
            throw new UploadException('不支持的文件类型');
        }

        if ($file->getSize() / 1024 > $configs->get(GroupConfigKey::MaximumFileSize)) {
            throw new UploadException("图片大小超出限制");
        }

        // TODO 是否超出组限制

        $pathname = $this->replacePathname(
            $configs->get(GroupConfigKey::PathNamingRule).'/'.$configs->get(GroupConfigKey::FileNamingRule)
        ).".{$file->extension()}";

        $filesystem = new Filesystem($this->getAdapter($disk->get('driver'), $disk->get('configs')));
        if (! $filesystem->putStream($pathname, fopen($file, 'r'))) {
            throw new UploadException('上传失败');
        }

        // TODO 检测是否存在该图片，有则只创建记录不保存文件
        // TODO 图片保存至默认相册(若有)
    }

    protected function getAdapter(int $disk, Collection $configs): AdapterInterface
    {
        return match ($disk) {
            StrategyKey::Local => new Local($configs->get('root')),
            StrategyKey::Kodo => new QiniuAdapter(
                accessKey: $configs->get(KodoOption::AccessKey),
                secretKey: $configs->get(KodoOption::SecretKey),
                bucket: $configs->get(KodoOption::Bucket),
                domain: $configs->get(KodoOption::Domain),
            ),
        };
    }

    protected function replacePathname(string $pathname): string
    {
        // TODO
        $array = [
            '{Y}' => date('Y'),
            '{m}' => date('m'),
            '{d}' => date('d'),
            '{uniqid}' => uniqid(),
        ];
        return str_replace(array_keys($array), array_values($array), $pathname);
    }
}
