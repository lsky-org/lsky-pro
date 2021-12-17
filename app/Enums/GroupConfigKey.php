<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static MaximumFileSize()
 * @method static static ConcurrentUploadNum()
 * @method static static IsUploadNeedsReview()
 * @method static static LimitPerHour()
 * @method static static LimitPerDay()
 * @method static static LimitPerWeek()
 * @method static static LimitPerMonth()
 * @method static static AcceptedFileSuffixes()
 * @method static static PathNamingRule()
 * @method static static FileNamingRule()
 */
final class GroupConfigKey extends Enum
{
    /** @var string 最大文件大小 */
    const MaximumFileSize = 'maximum_file_size';

    /** @var string 并发上传数量 */
    const ConcurrentUploadNum = 'concurrent_upload_num';

    /** @var string 上传是否需要审查 */
    const IsUploadNeedsReview = 'is_upload_needs_review';

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
}
