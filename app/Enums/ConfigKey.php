<?php

namespace App\Enums;

final class ConfigKey
{
    /** @var string 是否启用注册 */
    const IsEnableRegistration = 'is_enable_registration';

    /** @var string 是否启用画廊 */
    const IsEnableGallery = 'is_enable_gallery';

    /** @var string 站点名称 */
    const SiteName = 'site_name';

    /** @var string 站点关键字 */
    const SiteKeywords = 'site_keywords';

    /** @var string 站点描述 */
    const SiteDescription = 'site_description';

    /** @var string icp备案号 */
    const IcpNo = 'icp_no';

    /** @var string 是否允许游客上传 */
    const IsAllowGuestUpload = 'is_allow_guest_upload';

    /** @var string 用户初始容量(kb) */
    const UserInitialCapacity = 'user_initial_capacity';

    /** @var string 账户是否需要验证 */
    const IsUserNeedVerify = 'is_user_need_verify';

    /** @var string 是否启用缩略图功能 */
    const IsEnableThumbnail = 'is_enable_thumbnail';

    /** @var string 邮件配置 */
    const MailConfigs = 'mail_configs';

    /** @var string 访客组配置，同时也为组默认配置，开启游客上传后生效 */
    const GuestGroupConfigs = 'guest_group_configs';
}
