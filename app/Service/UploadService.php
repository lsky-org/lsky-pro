<?php

namespace App\Service;

use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;

class UploadService
{
    public function store(Request $request, ?User $user)//: Image
    {
        // TODO 如果关闭了游客上传，返回404
        // TODO 检测IP是否超出上传限制
        // TODO 获取用户组，无用户组则不受用户组配置限制
        // TODO 判断储存容量
        // TODO 获取策略列表，根据用户所选的策略上传
        // TODO 检测是否存在该图片，有则直接返回
        // TODO 图片保存至默认相册(若有)
    }
}
