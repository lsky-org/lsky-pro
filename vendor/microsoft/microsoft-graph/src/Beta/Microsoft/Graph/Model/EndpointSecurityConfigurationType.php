<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EndpointSecurityConfigurationType File
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
* EndpointSecurityConfigurationType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EndpointSecurityConfigurationType extends Enum
{
    /**
    * The Enum EndpointSecurityConfigurationType
    */
    const UNKNOWN = "unknown";
    const ANTIVIRUS = "antivirus";
    const DISK_ENCRYPTION = "diskEncryption";
    const FIREWALL = "firewall";
    const ENDPOINT_DETECTION_AND_RESPONSE = "endpointDetectionAndResponse";
    const ATTACK_SURFACE_REDUCTION = "attackSurfaceReduction";
    const ACCOUNT_PROTECTION = "accountProtection";
}