<?php

namespace App\Enums;

final class UserConfigKey
{
    /** @var string 默认相册 */
    const DefaultAlbum = 'default_album';

    /** @var string 默认策略 */
    const DefaultStrategy = 'default_strategy';

    /** @var string 默认权限 */
    const DefaultPermission = 'default_permission';

    /** @var string 图片粘贴后动作 */
    const PastedAction = 'pasted_action';

    /** @var string 上传是否自动清除预览 */
    const IsAutoClearPreview = 'is_auto_clear_preview';
}
