<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConfigurationManagerActionResult File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;
/**
* ConfigurationManagerActionResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConfigurationManagerActionResult extends DeviceActionResult
{

    /**
    * Gets the actionDeliveryStatus
    * State of the action being delivered to on-prem server. Possible values are: unknown, pendingDelivery, deliveredToConnectorService, failedToDeliverToConnectorService, deliveredToOnPremisesServer.
    *
    * @return ConfigurationManagerActionDeliveryStatus The actionDeliveryStatus
    */
    public function getActionDeliveryStatus()
    {
        if (array_key_exists("actionDeliveryStatus", $this->_propDict)) {
            if (is_a($this->_propDict["actionDeliveryStatus"], "\Beta\Microsoft\Graph\Model\ConfigurationManagerActionDeliveryStatus")) {
                return $this->_propDict["actionDeliveryStatus"];
            } else {
                $this->_propDict["actionDeliveryStatus"] = new ConfigurationManagerActionDeliveryStatus($this->_propDict["actionDeliveryStatus"]);
                return $this->_propDict["actionDeliveryStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the actionDeliveryStatus
    * State of the action being delivered to on-prem server. Possible values are: unknown, pendingDelivery, deliveredToConnectorService, failedToDeliverToConnectorService, deliveredToOnPremisesServer.
    *
    * @param ConfigurationManagerActionDeliveryStatus $val The value to assign to the actionDeliveryStatus
    *
    * @return ConfigurationManagerActionResult The ConfigurationManagerActionResult
    */
    public function setActionDeliveryStatus($val)
    {
        $this->_propDict["actionDeliveryStatus"] = $val;
         return $this;
    }
    /**
    * Gets the errorCode
    * Error code of Configuration Manager action from client
    *
    * @return int The errorCode
    */
    public function getErrorCode()
    {
        if (array_key_exists("errorCode", $this->_propDict)) {
            return $this->_propDict["errorCode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errorCode
    * Error code of Configuration Manager action from client
    *
    * @param int $val The value of the errorCode
    *
    * @return ConfigurationManagerActionResult
    */
    public function setErrorCode($val)
    {
        $this->_propDict["errorCode"] = $val;
        return $this;
    }
}
