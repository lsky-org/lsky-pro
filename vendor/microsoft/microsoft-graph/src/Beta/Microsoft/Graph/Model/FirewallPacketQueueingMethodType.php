<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FirewallPacketQueueingMethodType File
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
* FirewallPacketQueueingMethodType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FirewallPacketQueueingMethodType extends Enum
{
    /**
    * The Enum FirewallPacketQueueingMethodType
    */
    const DEVICE_DEFAULT = "deviceDefault";
    const DISABLED = "disabled";
    const QUEUE_INBOUND = "queueInbound";
    const QUEUE_OUTBOUND = "queueOutbound";
    const QUEUE_BOTH = "queueBoth";
}