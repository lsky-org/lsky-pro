<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConfigurationManagerActionDeliveryStatus File
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
* ConfigurationManagerActionDeliveryStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConfigurationManagerActionDeliveryStatus extends Enum
{
    /**
    * The Enum ConfigurationManagerActionDeliveryStatus
    */
    const UNKNOWN = "unknown";
    const PENDING_DELIVERY = "pendingDelivery";
    const DELIVERED_TO_CONNECTOR_SERVICE = "deliveredToConnectorService";
    const FAILED_TO_DELIVER_TO_CONNECTOR_SERVICE = "failedToDeliverToConnectorService";
    const DELIVERED_TO_ON_PREMISES_SERVER = "deliveredToOnPremisesServer";
}