<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\FormRequest;
use Illuminate\Validation\Rule;

class GroupRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $requiredIfReview = function ($driver) {
            return Rule::requiredIf($this->input('configs.is_enable_scan') && $this->input('configs.scan_configs.driver') === $driver);
        };

        $requiredIfWatermark = function ($driver) {
            return Rule::requiredIf($this->input('configs.is_enable_watermark') && $this->input('configs.watermark_configs.driver') === $driver);
        };

        return [
            'name' => 'required|between:2,30',
            'is_default' => 'boolean',
            'is_guest' => 'boolean',
            'configs' => 'required|array',
            'configs.maximum_file_size' => 'required|numeric',
            'configs.concurrent_upload_num' => 'required|integer',
            'configs.limit_per_minute' => 'required|integer',
            'configs.limit_per_hour' => 'required|integer',
            'configs.limit_per_day' => 'required|integer',
            'configs.limit_per_week' => 'required|integer',
            'configs.limit_per_month' => 'required|integer',
            'configs.image_save_quality' => 'required|min:1|max:100',
            'configs.image_save_format' => '',
            'configs.path_naming_rule' => 'max:400',
            'configs.file_naming_rule' => 'max:400',
            'configs.accepted_file_suffixes' => 'required|array|in:jpeg,jpg,png,gif,tif,bmp,ico,psd,webp',

            'configs.is_enable_scan' => 'boolean',
            'configs.scanned_action' => [
                'exclude_if:configs.is_enable_scan,false',
                'in:mark,delete',
            ],
            'configs.scan_configs.driver' => ['exclude_if:configs.is_enable_scan,false', 'in:tencent,aliyun,nsfwjs'],
            'configs.scan_configs.drivers.tencent.endpoint' => [$requiredIfReview('tencent')],
            'configs.scan_configs.drivers.tencent.secret_id' => [$requiredIfReview('tencent')],
            'configs.scan_configs.drivers.tencent.secret_key' => [$requiredIfReview('tencent')],
            'configs.scan_configs.drivers.tencent.region' => [$requiredIfReview('tencent')],
            'configs.scan_configs.drivers.tencent.biz_type' => '',

            'configs.scan_configs.drivers.aliyun.access_key_id' => [$requiredIfReview('aliyun')],
            'configs.scan_configs.drivers.aliyun.access_key_secret' => [$requiredIfReview('aliyun')],
            'configs.scan_configs.drivers.aliyun.region_id' => [$requiredIfReview('aliyun')],
            'configs.scan_configs.drivers.aliyun.biz_type' => '',
            'configs.scan_configs.drivers.aliyun.scenes' => [$requiredIfReview('aliyun'), 'array'],

            'configs.scan_configs.drivers.nsfwjs.api_url' => [$requiredIfReview('nsfwjs')],
            'configs.scan_configs.drivers.nsfwjs.attr_name' => [$requiredIfReview('nsfwjs'), 'nullable'],
            'configs.scan_configs.drivers.nsfwjs.threshold' => [$requiredIfReview('nsfwjs'), 'nullable', 'integer', 'between:1,100'],

            'configs.is_enable_original_protection' => 'boolean',
            'configs.image_cache_ttl' => 'nullable|numeric',

            'configs.is_enable_watermark' => 'boolean',
            'configs.watermark_configs.mode' => ['in:1,2'],
            'configs.watermark_configs.driver' => ['exclude_if:configs.is_enable_watermark,false', 'in:font,image'],
            'configs.watermark_configs.drivers.font.font' => [
                $requiredIfWatermark('font'),
                function ($attribute, $value, $fail) {
                    if (! file_exists(storage_path('app/public/'.$value))) {
                        $fail('字体文件不存在');
                    }
                },
            ],
            'configs.watermark_configs.drivers.font.position' => [$requiredIfWatermark('font')],
            'configs.watermark_configs.drivers.font.text' => [$requiredIfWatermark('font')],
            'configs.watermark_configs.drivers.font.color' => [$requiredIfWatermark('font')],
            'configs.watermark_configs.drivers.font.size' => [$requiredIfWatermark('font'), 'nullable', 'integer'],
            'configs.watermark_configs.drivers.font.angle' => [$requiredIfWatermark('font'), 'nullable', 'integer'],
            'configs.watermark_configs.drivers.font.x' => [$requiredIfWatermark('font'), 'nullable', 'integer'],
            'configs.watermark_configs.drivers.font.y' => [$requiredIfWatermark('font'), 'nullable', 'integer'],
            'configs.watermark_configs.drivers.image.image' => [
                $requiredIfWatermark('image'),
                function ($attribute, $value, $fail) {
                    if (! file_exists(storage_path('app/public/'.$value))) {
                        $fail('图片文件不存在');
                    }
                },
            ],
            'configs.watermark_configs.drivers.image.position' => [$requiredIfWatermark('image')],
            'configs.watermark_configs.drivers.image.width' => [$requiredIfWatermark('image'), 'nullable', 'integer'],
            'configs.watermark_configs.drivers.image.height' => [$requiredIfWatermark('image'), 'nullable', 'integer'],
            'configs.watermark_configs.drivers.image.opacity' => [
                $requiredIfWatermark('image'), 'nullable', 'integer', 'between:0,100',
            ],
            'configs.watermark_configs.drivers.image.rotate' => [$requiredIfWatermark('image'), 'nullable', 'integer'],
            'configs.watermark_configs.drivers.image.x' => [$requiredIfWatermark('image'), 'nullable', 'integer'],
            'configs.watermark_configs.drivers.image.y' => [$requiredIfWatermark('image'), 'nullable', 'integer'],
        ];
    }

    public function attributes()
    {
        return [
            'name' => '组名称',
            'is_default' => '是否默认',
            'configs' => '组配置',
            'configs.maximum_file_size' => '文件最大上传大小',
            'configs.concurrent_upload_num' => '并发上传数量',
            'configs.limit_per_minute' => '每分钟上传限制',
            'configs.limit_per_hour' => '每小时上传限制',
            'configs.limit_per_day' => '每天上传限制',
            'configs.limit_per_week' => '每周上传限制',
            'configs.limit_per_month' => '每月上传限制',
            'configs.path_naming_rule' => '路径命名规则',
            'configs.file_naming_rule' => '文件命名规则',
            'configs.image_save_quality' => '图片保存质量',
            'configs.image_save_format' => '图片保存格式',
            'configs.accepted_file_suffixes' => '允许上传的文件后缀',

            'configs.is_enable_scan' => '是否启用图片审核',
            'configs.scanned_action' => '图片审核动作',
            'configs.scan_configs.driver' => '图片审核驱动',
            'configs.scan_configs.drivers.tencent.endpoint' => 'Endpoint',
            'configs.scan_configs.drivers.tencent.secret_id' => 'SecretId',
            'configs.scan_configs.drivers.tencent.secret_key' => 'SecretKey',
            'configs.scan_configs.drivers.tencent.region' => '地域节点',
            'configs.scan_configs.drivers.tencent.biz_type' => '业务场景',
            'configs.scan_configs.drivers.aliyun.access_key_id' => 'AccessKeyId',
            'configs.scan_configs.drivers.aliyun.access_key_secret' => 'AccessKeySecret',
            'configs.scan_configs.drivers.aliyun.region_id' => '地域节点',
            'configs.scan_configs.drivers.aliyun.biz_type' => '场景名称',
            'configs.scan_configs.drivers.aliyun.scenes' => '审核场景',
            'configs.scan_configs.drivers.nsfwjs.api_url' => '接口地址',
            'configs.scan_configs.drivers.nsfwjs.attr_name' => '表单名称',
            'configs.scan_configs.drivers.nsfwjs.threshold' => '阈值',

            'configs.is_enable_original_protection' => '是否启用原图保护功能',
            'configs.image_cache_ttl' => '图片缓存时间',

            'configs.is_enable_watermark' => '是否启用水印功能',
            'configs.watermark_configs.driver' => '水印驱动',
            'configs.watermark_configs.drivers.font.font' => '字体文件',
            'configs.watermark_configs.drivers.font.position' => '水印位置',
            'configs.watermark_configs.drivers.font.text' => '水印文字',
            'configs.watermark_configs.drivers.font.color' => '字体颜色',
            'configs.watermark_configs.drivers.font.size' => '水印文字大小',
            'configs.watermark_configs.drivers.font.angle' => '水印旋转角度',
            'configs.watermark_configs.drivers.font.x' => '水印X轴偏移量',
            'configs.watermark_configs.drivers.font.y' => '水印Y轴偏移量',
            'configs.watermark_configs.drivers.image.image' => '水印图片文件',
            'configs.watermark_configs.drivers.image.position' => '水印位置',
            'configs.watermark_configs.drivers.image.width' => '水印图片宽度',
            'configs.watermark_configs.drivers.image.height' => '水印图片高度',
            'configs.watermark_configs.drivers.image.opacity' => '水印透明度',
            'configs.watermark_configs.drivers.image.rotate' => '水印旋转角度',
            'configs.watermark_configs.drivers.image.x' => '水印X轴偏移量',
            'configs.watermark_configs.drivers.image.y' => '水印Y轴偏移量',
        ];
    }
}
