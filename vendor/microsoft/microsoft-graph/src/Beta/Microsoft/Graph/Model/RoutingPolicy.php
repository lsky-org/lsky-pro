<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RoutingPolicy File
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
* RoutingPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RoutingPolicy extends Enum
{
    /**
    * The Enum RoutingPolicy
    */
    const NONE = "none";
    const NO_MISSED_CALL = "noMissedCall";
    const DISABLE_FORWARDING_EXCEPT_PHONE = "disableForwardingExceptPhone";
    const DISABLE_FORWARDING = "disableForwarding";
    const PREFER_SKYPE_FOR_BUSINESS = "preferSkypeForBusiness";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}