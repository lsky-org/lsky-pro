<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsDeliveryOptimizationMode File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* WindowsDeliveryOptimizationMode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsDeliveryOptimizationMode extends Enum
{
    /**
    * The Enum WindowsDeliveryOptimizationMode
    */
    const USER_DEFINED = "userDefined";
    const HTTP_ONLY = "httpOnly";
    const HTTP_WITH_PEERING_NAT = "httpWithPeeringNat";
    const HTTP_WITH_PEERING_PRIVATE_GROUP = "httpWithPeeringPrivateGroup";
    const HTTP_WITH_INTERNET_PEERING = "httpWithInternetPeering";
    const SIMPLE_DOWNLOAD = "simpleDownload";
    const BYPASS_MODE = "bypassMode";
}