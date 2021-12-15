<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static DefaultAlbum()
 * @method static static DefaultStrategy()
 * @method static static IsAutoClearPreview()
 */
final class UserConfigKey extends Enum
{
    /** @var string 默认相册 */
    const DefaultAlbum = 'default_album';

    /** @var string 默认策略 */
    const DefaultStrategy = 'default_strategy';

    /** @var string 上传是否自动清除预览 */
    const IsAutoClearPreview = 'is_auto_clear_preview';
}
