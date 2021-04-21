<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementConfigurationWindowsSkus File
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
* DeviceManagementConfigurationWindowsSkus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementConfigurationWindowsSkus extends Enum
{
    /**
    * The Enum DeviceManagementConfigurationWindowsSkus
    */
    const UNKNOWN = "unknown";
    const WINDOWS_HOME = "windowsHome";
    const WINDOWS_PROFESSIONAL = "windowsProfessional";
    const WINDOWS_ENTERPRISE = "windowsEnterprise";
    const WINDOWS_EDUCATION = "windowsEducation";
    const WINDOWS_MOBILE = "windowsMobile";
    const WINDOWS_MOBILE_ENTERPRISE = "windowsMobileEnterprise";
    const WINDOWS_TEAM_SURFACE = "windowsTeamSurface";
    const IOT = "iot";
    const IOT_ENTERPRISE = "iotEnterprise";
    const HOLO_LENS = "holoLens";
    const HOLO_LENS_ENTERPRISE = "holoLensEnterprise";
    const HOLOGRAPHIC_FOR_BUSINESS = "holographicForBusiness";
    const WINDOWS_MULTI_SESSION = "windowsMultiSession";
    const SURFACE_HUB = "surfaceHub";
}