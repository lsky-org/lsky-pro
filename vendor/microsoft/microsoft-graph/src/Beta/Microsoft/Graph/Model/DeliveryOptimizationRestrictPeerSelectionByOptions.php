<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeliveryOptimizationRestrictPeerSelectionByOptions File
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
* DeliveryOptimizationRestrictPeerSelectionByOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeliveryOptimizationRestrictPeerSelectionByOptions extends Enum
{
    /**
    * The Enum DeliveryOptimizationRestrictPeerSelectionByOptions
    */
    const NOT_CONFIGURED = "notConfigured";
    const SUBNET_MASK = "subnetMask";
}