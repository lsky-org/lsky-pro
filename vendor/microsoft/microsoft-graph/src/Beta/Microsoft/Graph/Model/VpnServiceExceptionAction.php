<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VpnServiceExceptionAction File
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
* VpnServiceExceptionAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VpnServiceExceptionAction extends Enum
{
    /**
    * The Enum VpnServiceExceptionAction
    */
    const FORCE_TRAFFIC_VIA_VPN = "forceTrafficViaVPN";
    const ALLOW_TRAFFIC_OUTSIDE = "allowTrafficOutside";
    const DROP_TRAFFIC = "dropTraffic";
}