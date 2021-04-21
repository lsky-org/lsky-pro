<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EndpointSecurityConfigurationProfileType File
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
* EndpointSecurityConfigurationProfileType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EndpointSecurityConfigurationProfileType extends Enum
{
    /**
    * The Enum EndpointSecurityConfigurationProfileType
    */
    const UNKNOWN = "unknown";
    const ANTIVIRUS = "antivirus";
    const WINDOWS_SECURITY = "windowsSecurity";
    const BIT_LOCKER = "bitLocker";
    const FILE_VAULT = "fileVault";
    const FIREWALL = "firewall";
    const FIREWALL_RULES = "firewallRules";
    const ENDPOINT_DETECTION_AND_RESPONSE = "endpointDetectionAndResponse";
    const DEVICE_CONTROL = "deviceControl";
    const APP_AND_BROWSER_ISOLATION = "appAndBrowserIsolation";
    const EXPLOIT_PROTECTION = "exploitProtection";
    const WEB_PROTECTION = "webProtection";
    const APPLICATION_CONTROL = "applicationControl";
    const ATTACK_SURFACE_REDUCTION_RULES = "attackSurfaceReductionRules";
    const ACCOUNT_PROTECTION = "accountProtection";
}