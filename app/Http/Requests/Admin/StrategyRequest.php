<?php

namespace App\Http\Requests\Admin;

use App\Enums\StrategyKey;
use App\Http\Requests\FormRequest;
use App\Models\Strategy;

class StrategyRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'groups' => 'array',
            'name' => 'required|max:60',
            'intro' => 'max:2000',
            'key' => 'required|integer',
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
            'configs.url' => ['required', 'url', function ($attribute, $value, $fail) {
                if ($this->input('key') == StrategyKey::Local) {
                    $symlink = Strategy::getRootPath($value);
                    if (! $symlink) {
                        return $fail('访问域名缺少根路径');
                    }
                    if (false !== strpbrk($symlink, "\\/?%*:|\"<>")) {
                        return $fail('根路径名称不符合规则');
                    }
                    if (realpath(public_path($symlink))) {
                        return $fail('根路径已经存在');
                    }
                }
            }],
        ];
    }

    public function attributes()
    {
        return [
            'name' => '名称',
            'intro' => '简介',
            'key' => '策略',
            'configs.root' => '储存路径',
            'configs.url' => '访问域名',
        ];
    }
}
