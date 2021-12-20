<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementTemplateSubtype File
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
* DeviceManagementTemplateSubtype class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementTemplateSubtype extends Enum
{
    /**
    * The Enum DeviceManagementTemplateSubtype
    */
    const NONE = "none";
    const FIREWALL = "firewall";
    const DISK_ENCRYPTION = "diskEncryption";
    const ATTACK_SURFACE_REDUCTION = "attackSurfaceReduction";
    const ENDPOINT_DETECTION_REPONSE = "endpointDetectionReponse";
    const ACCOUNT_PROTECTION = "accountProtection";
    const ANTIVIRUS = "antivirus";
    const FIREWALL_SHARED_APP_LIST = "firewallSharedAppList";
    const FIREWALL_SHARED_IP_LIST = "firewallSharedIpList";
    const FIREWALL_SHARED_PORTLIST = "firewallSharedPortlist";
}