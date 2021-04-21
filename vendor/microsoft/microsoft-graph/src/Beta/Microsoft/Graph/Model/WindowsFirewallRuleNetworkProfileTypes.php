<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsFirewallRuleNetworkProfileTypes File
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
* WindowsFirewallRuleNetworkProfileTypes class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsFirewallRuleNetworkProfileTypes extends Enum
{
    /**
    * The Enum WindowsFirewallRuleNetworkProfileTypes
    */
    const NOT_CONFIGURED = "notConfigured";
    const DOMAIN = "domain";
    const GRAPHPRIVATE = "private";
    const GRAPHPUBLIC = "public";
}