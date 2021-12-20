<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NotificationTemplateBrandingOptions File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* NotificationTemplateBrandingOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NotificationTemplateBrandingOptions extends Enum
{
    /**
    * The Enum NotificationTemplateBrandingOptions
    */
    const NONE = "none";
    const INCLUDE_COMPANY_LOGO = "includeCompanyLogo";
    const INCLUDE_COMPANY_NAME = "includeCompanyName";
    const INCLUDE_CONTACT_INFORMATION = "includeContactInformation";
    const INCLUDE_COMPANY_PORTAL_LINK = "includeCompanyPortalLink";
}