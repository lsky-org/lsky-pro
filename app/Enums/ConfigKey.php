<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static IsEnableRegistration()
 * @method static static IsEnableGallery()
 * @method static static SiteName()
 * @method static static SiteKeywords()
 * @method static static SiteDescription()
 * @method static static IcpNo()
 * @method static static IsAllowGuestUpload()
 * @method static static UserInitialCapacity()
 * @method static static MailConfigs()
 */
final class ConfigKey extends Enum
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

    /** @var string 用户初始容量 */
    const UserInitialCapacity = 'user_initial_capacity';

    /** @var string 邮件配置 */
    const MailConfigs = 'mail_configs';
}
