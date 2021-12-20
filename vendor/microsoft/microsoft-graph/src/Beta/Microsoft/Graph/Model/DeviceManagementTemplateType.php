<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementTemplateType File
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
* DeviceManagementTemplateType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementTemplateType extends Enum
{
    /**
    * The Enum DeviceManagementTemplateType
    */
    const SECURITY_BASELINE = "securityBaseline";
    const SPECIALIZED_DEVICES = "specializedDevices";
    const ADVANCED_THREAT_PROTECTION_SECURITY_BASELINE = "advancedThreatProtectionSecurityBaseline";
    const DEVICE_CONFIGURATION = "deviceConfiguration";
    const CUSTOM = "custom";
    const SECURITY_TEMPLATE = "securityTemplate";
    const MICROSOFT_EDGE_SECURITY_BASELINE = "microsoftEdgeSecurityBaseline";
    const MICROSOFT_OFFICE365_PRO_PLUS_SECURITY_BASELINE = "microsoftOffice365ProPlusSecurityBaseline";
    const DEVICE_COMPLIANCE = "deviceCompliance";
    const DEVICE_CONFIGURATION_FOR_OFFICE365 = "deviceConfigurationForOffice365";
    const CLOUD_PC = "cloudPC";
    const FIREWALL_SHARED_SETTINGS = "firewallSharedSettings";
}