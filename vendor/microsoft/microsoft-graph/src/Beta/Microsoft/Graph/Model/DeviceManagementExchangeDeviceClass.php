<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementExchangeDeviceClass File
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
* DeviceManagementExchangeDeviceClass class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementExchangeDeviceClass extends Entity
{
    /**
    * Gets the name
    * Name of the device class which will be impacted by this rule.
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * Name of the device class which will be impacted by this rule.
    *
    * @param string $val The value of the name
    *
    * @return DeviceManagementExchangeDeviceClass
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the type
    * Type of device which is impacted by this rule e.g. Model, Family. Possible values are: family, model.
    *
    * @return DeviceManagementExchangeAccessRuleType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\Model\DeviceManagementExchangeAccessRuleType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new DeviceManagementExchangeAccessRuleType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    * Type of device which is impacted by this rule e.g. Model, Family. Possible values are: family, model.
    *
    * @param DeviceManagementExchangeAccessRuleType $val The value to assign to the type
    *
    * @return DeviceManagementExchangeDeviceClass The DeviceManagementExchangeDeviceClass
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
}
