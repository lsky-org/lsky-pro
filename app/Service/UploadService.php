<?php

namespace App\Service;

use App\Enums\ConfigKey;
use App\Enums\GroupConfigKey;
use App\Enums\ImagePermission;
use App\Enums\Strategy\KodoOption;
use App\Enums\Strategy\LocalOption;
use App\Enums\StrategyKey;
use App\Enums\UserConfigKey;
use App\Enums\UserStatus;
use App\Exceptions\UploadException;
use App\Models\Group;
use App\Models\Image;
use App\Models\Strategy;
use App\Models\User;
use App\Utils;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use League\Flysystem\Adapter\Local;
use League\Flysystem\AdapterInterface;
use League\Flysystem\Filesystem;
use Overtrue\Flysystem\Qiniu\QiniuAdapter;

class UploadService
{
    /**
     * @param  Request  $request
     * @param  User|null  $user
     * @return Image
     * @throws UploadException
     */
    public function store(Request $request, ?User $user = null): Image
    {
        $file = $request->file('file');

        if (is_null($user) && ! Utils::config(ConfigKey::IsAllowGuestUpload, true)) {
            throw new UploadException('管理员关闭了游客上传');
        }

        $image = new Image();
        // 组配置
        $configs = Group::getDefaultConfig();
        // 默认使用本地储存策略
        $disk = collect([
            'driver' => StrategyKey::Local,
            'configs' => collect([LocalOption::Root => config('filesystems.disks.local.root')]),
        ]);

        if (! is_null($user)) {
            if ($user->status !== UserStatus::Normal) {
                throw new UploadException('账号状态异常');
            }

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
                    $disk = collect(['driver' => $strategy->key, 'configs' => $strategy->configs]);
                    $image->strategy_id = $strategy->id;
                }
            }

            if ($file->getSize() / 1024 + $user->images()->sum('size') > $user->capacity) {
                throw new UploadException('储存空间不足');
            }

            $image->user_id = $user->id;

            // 图片保存至默认相册(若有)
            if ($albumId = $user->configs->get(UserConfigKey::DefaultAlbum)) {
                if ($user->albums()->where('id', $albumId)->exists()) {
                    $image->album_id = $albumId;
                }
            }
        }


        if (! in_array($file->extension(), $configs->get(GroupConfigKey::AcceptedFileSuffixes))) {
            throw new UploadException('不支持的文件类型');
        }

        if ($file->getSize() / 1024 > $configs->get(GroupConfigKey::MaximumFileSize)) {
            throw new UploadException("图片大小超出限制");
        }

        $carbon = Carbon::now();
        $format = 'Y-m-d H:i:s';
        $array = [
            'minute' => ['key' => GroupConfigKey::LimitPerMinute, 'str' => '分钟'],
            'hours' => ['key' => GroupConfigKey::LimitPerHour, 'str' => '小时'],
            'days' => ['key' => GroupConfigKey::LimitPerDay, 'str' => '天'],
            'weeks' => ['key' => GroupConfigKey::LimitPerWeek, 'str' => '周'],
            'months' => ['key' => GroupConfigKey::LimitPerWeek, 'str' => '月'],
        ];
        $sql = collect(array_keys($array))->transform(function ($range) use ($carbon, $format) {
            return "count(if(`created_at` between '{$carbon->parse("-1 {$range}")->format($format)}' and '{$carbon->format($format)}', 1, null)) as {$range}";
        })->implode(', ');
        $statistics = Image::query()->selectRaw($sql)->when(! is_null($user), function (Builder $builder) use ($user) {
            $builder->where('user_id', $user->id);
        }, function (Builder $builder) use ($request) {
            $builder->where('uploaded_ip', $request->ip())->whereNull('user_id');
        })->first();
        foreach ($array as $key => $item) {
            $value = $configs->get($item['key'], 0);
            if ($statistics->$key >= $value) {
                throw new UploadException("每{$item['str']}内你最多可以上传 {$value} 张图片");
            }
        }

        $pathname = $this->replacePathname(
            $configs->get(GroupConfigKey::PathNamingRule).'/'.$configs->get(GroupConfigKey::FileNamingRule)
        ).".{$file->extension()}";

        $image->fill([
            'md5' => md5_file($file->getRealPath()),
            'sha1' => sha1_file($file->getRealPath()),
            'path' => dirname($pathname),
            'name' => basename($pathname),
            'origin_name' => $file->getClientOriginalName(),
            'size' => $file->getSize() / 1024,
            'mimetype' => $file->getMimeType(),
            'permission' => ImagePermission::Private,
            'is_unhealthy' => false, // TODO 接入鉴黄？
            'uploaded_ip' => $request->ip(),
        ]);

        $filesystem = new Filesystem($this->getAdapter($disk->get('driver'), $disk->get('configs')));
        // 检测该策略是否存在该图片，有则只创建记录不保存文件
        /** @var Image $existing */
        $existing = Image::query()->when($image->strategy_id, function (Builder $builder, $id) {
            $builder->where('strategy_id', $id);
        })->where('md5', $image->md5)->where('sha1', $image->sha1)->first();
        if (is_null($existing)) {
            $handle = fopen($file, 'r');
            if (! $filesystem->putStream($pathname, $handle) || ! fclose($handle)) {
                throw new UploadException('图片上传失败');
            }
        } else {
            $image->fill($existing->only('path', 'name'));
        }

        DB::transaction(function () use ($image, $user, $filesystem, $existing) {
            if (! $image->save()) {
                // 删除文件
                if (is_null($existing)) $filesystem->delete($image->pathname);
                throw new UploadException('图片保存失败');
            }
            if (! is_null($user)) {
                $user->increment('image_num');
            }
        }, 3);

        return $image;
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
