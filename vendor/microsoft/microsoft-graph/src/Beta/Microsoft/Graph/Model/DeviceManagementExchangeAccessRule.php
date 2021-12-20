<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementExchangeAccessRule File
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
* DeviceManagementExchangeAccessRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementExchangeAccessRule extends Entity
{

    /**
    * Gets the accessLevel
    * Access Level for Exchange granted by this rule. Possible values are: none, allow, block, quarantine.
    *
    * @return DeviceManagementExchangeAccessLevel The accessLevel
    */
    public function getAccessLevel()
    {
        if (array_key_exists("accessLevel", $this->_propDict)) {
            if (is_a($this->_propDict["accessLevel"], "\Beta\Microsoft\Graph\Model\DeviceManagementExchangeAccessLevel")) {
                return $this->_propDict["accessLevel"];
            } else {
                $this->_propDict["accessLevel"] = new DeviceManagementExchangeAccessLevel($this->_propDict["accessLevel"]);
                return $this->_propDict["accessLevel"];
            }
        }
        return null;
    }

    /**
    * Sets the accessLevel
    * Access Level for Exchange granted by this rule. Possible values are: none, allow, block, quarantine.
    *
    * @param DeviceManagementExchangeAccessLevel $val The value to assign to the accessLevel
    *
    * @return DeviceManagementExchangeAccessRule The DeviceManagementExchangeAccessRule
    */
    public function setAccessLevel($val)
    {
        $this->_propDict["accessLevel"] = $val;
         return $this;
    }

    /**
    * Gets the deviceClass
    * Device Class which will be impacted by this rule.
    *
    * @return DeviceManagementExchangeDeviceClass The deviceClass
    */
    public function getDeviceClass()
    {
        if (array_key_exists("deviceClass", $this->_propDict)) {
            if (is_a($this->_propDict["deviceClass"], "\Beta\Microsoft\Graph\Model\DeviceManagementExchangeDeviceClass")) {
                return $this->_propDict["deviceClass"];
            } else {
                $this->_propDict["deviceClass"] = new DeviceManagementExchangeDeviceClass($this->_propDict["deviceClass"]);
                return $this->_propDict["deviceClass"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceClass
    * Device Class which will be impacted by this rule.
    *
    * @param DeviceManagementExchangeDeviceClass $val The value to assign to the deviceClass
    *
    * @return DeviceManagementExchangeAccessRule The DeviceManagementExchangeAccessRule
    */
    public function setDeviceClass($val)
    {
        $this->_propDict["deviceClass"] = $val;
         return $this;
    }
}
