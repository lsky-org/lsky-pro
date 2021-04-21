<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeliveryOptimizationGroupIdOptionsType File
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
* DeliveryOptimizationGroupIdOptionsType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeliveryOptimizationGroupIdOptionsType extends Enum
{
    /**
    * The Enum DeliveryOptimizationGroupIdOptionsType
    */
    const NOT_CONFIGURED = "notConfigured";
    const AD_SITE = "adSite";
    const AUTHENTICATED_DOMAIN_SID = "authenticatedDomainSid";
    const DHCP_USER_OPTION = "dhcpUserOption";
    const DNS_SUFFIX = "dnsSuffix";
}