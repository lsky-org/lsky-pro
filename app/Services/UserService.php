<?php

namespace App\Services;

use App\Models\Image;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class UserService
{
    /**
     * 删除图片以及物理文件，返回已删除数量
     * 考虑到删除磁盘文件、服务器内部请求第三方删除接口比较消耗资源，传入的主键不应过多
     * TODO 改进循环中更新数据
     *
     * @param array $keys
     * @param User|null $user 传入用户数据则会根据用户id过滤
     * @param string $field
     * @return int
     */
    public function deleteImages(array $keys, ?User $user = null, string $field = 'id'): int
    {
        $count = 0;
        $model = Image::with('user', 'strategy', 'album')->when(! is_null($user), function (Builder $builder) use ($user) {
            $builder->where('user_id', $user->id);
        })->whereIn($field, $keys);

        DB::transaction(function () use ($model, $keys, &$count) {
            /** @var Image $image */
            foreach ($model->cursor() as $image) {
                // 相册图片数量更新
                $image->album?->decrement('image_num');
                // 更新相册图片数量
                $image->delete();
                // 更新数量
                if ($image->user) {
                    $image->user->image_num = $image->user->images()->count();
                    $image->user->save();
                }

                $count++;
            }
        });

        return $count;
    }
}
