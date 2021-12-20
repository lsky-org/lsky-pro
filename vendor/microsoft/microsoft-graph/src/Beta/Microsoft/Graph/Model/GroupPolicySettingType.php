<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GroupPolicySettingType File
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
* GroupPolicySettingType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GroupPolicySettingType extends Enum
{
    /**
    * The Enum GroupPolicySettingType
    */
    const UNKNOWN = "unknown";
    const POLICY = "policy";
    const ACCOUNT = "account";
    const SECURITY_OPTIONS = "securityOptions";
    const USER_RIGHTS_ASSIGNMENT = "userRightsAssignment";
    const AUDIT_SETTING = "auditSetting";
    const WINDOWS_FIREWALL_SETTINGS = "windowsFirewallSettings";
}