<?php

namespace App\Enums;

final class GroupConfigKey
{
    /** @var string 最大文件大小 */
    const MaximumFileSize = 'maximum_file_size';

    /** @var string 并发上传数量 */
    const ConcurrentUploadNum = 'concurrent_upload_num';

    /** @var string 上传是否需要审查 */
    const IsEnableScan = 'is_enable_scan';

    /** @var string 审查配置 */
    const ScanConfigs = 'scan_configs';

    /** @var string 违规图片审查后动作 */
    const ScannedAction = 'scanned_action';

    /** @var string 是否启用原图保护功能 */
    const IsEnableOriginalProtection = 'is_enable_original_protection';

    /** @var string 上传是否启用水印功能 */
    const IsEnableWatermark = 'is_enable_watermark';

    /** @var string 水印配置 */
    const WatermarkConfigs = 'watermark_configs';

    /** @var string 每分钟上传限制 */
    const LimitPerMinute = 'limit_per_minute';

    /** @var string 每小时上传限制 */
    const LimitPerHour = 'limit_per_hour';

    /** @var string 每天上传数量限制 */
    const LimitPerDay = 'limit_per_day';

    /** @var string 每周上传数量限制 */
    const LimitPerWeek = 'limit_per_week';

    /** @var string 每月上传数量限制 */
    const LimitPerMonth = 'limit_per_month';

    /** @var string 允许上传的文件后缀 */
    const AcceptedFileSuffixes = 'accepted_file_suffixes';

    /** @var string 路径命名规则 */
    const PathNamingRule = 'path_naming_rule';

    /** @var string 文件命名规则 */
    const FileNamingRule = 'file_naming_rule';

    /** @var string 图片缓存时间 */
    const ImageCacheTtl = 'image_cache_ttl';

    /** @var string 图片保存格式 */
    const ImageSaveFormat = 'image_save_format';

    /** @var string 图片保存质量 */
    const ImageSaveQuality = 'image_save_quality';
}
