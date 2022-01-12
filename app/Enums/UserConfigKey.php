<?php

namespace App\Enums;

final class UserConfigKey
{
    /** @var string 默认相册 */
    const DefaultAlbum = 'default_album';

    /** @var string 默认策略 */
    const DefaultStrategy = 'default_strategy';

    /** @var string 上传是否自动清除预览 */
    const IsAutoClearPreview = 'is_auto_clear_preview';
}
