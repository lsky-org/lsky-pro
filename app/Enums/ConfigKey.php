<?php

namespace App\Enums;

final class ConfigKey
{
    /** @var string 是否启用注册 */
    const IsEnableRegistration = 'is_enable_registration';

    /** @var string 是否启用画廊 */
    const IsEnableGallery = 'is_enable_gallery';

    /** @var string 是否启用接口 */
    const IsEnableApi = 'is_enable_api';

    /** @var string 程序名称 */
    const AppName = 'app_name';

    /** @var string 程序版本 */
    const AppVersion = 'app_version';

    /** @var string 站点关键字 */
    const SiteKeywords = 'site_keywords';

    /** @var string 站点描述 */
    const SiteDescription = 'site_description';

    /** @var string 站点公告 */
    const SiteNotice = 'site_notice';

    /** @var string icp备案号 */
    const IcpNo = 'icp_no';

    /** @var string 是否允许游客上传 */
    const IsAllowGuestUpload = 'is_allow_guest_upload';

    /** @var string 用户初始容量(kb) */
    const UserInitialCapacity = 'user_initial_capacity';

    /** @var string 账户是否需要验证 */
    const IsUserNeedVerify = 'is_user_need_verify';

    /** @var string 是否启用异步上传流水线 */
    const UploadPipelineAsyncEnabled = 'upload_pipeline_async_enabled';

    /** @var string 存储成本单价（每 GB / 月） */
    const StorageCostPerGbMonth = 'storage_cost_per_gb_month';

    /** @var string 存储成本币种（ISO 货币代码） */
    const StorageCostCurrency = 'storage_cost_currency';

    /** @var string 当前启用的 AI 提供商 */
    const AiProvider = 'ai_provider';

    /** @var string AI 提供商配置 */
    const AiProviderSettings = 'ai_provider_settings';

    /** @var string 邮件配置 */
    const Mail = 'mail';

    /** @var string 角色组默认配置 */
    const Group = 'group';
}
