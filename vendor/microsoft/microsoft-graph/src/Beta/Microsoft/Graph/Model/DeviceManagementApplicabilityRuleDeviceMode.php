<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementApplicabilityRuleDeviceMode File
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
* DeviceManagementApplicabilityRuleDeviceMode class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementApplicabilityRuleDeviceMode extends Entity
{

    /**
    * Gets the deviceMode
    * Applicability rule for device mode. Possible values are: standardConfiguration, sModeConfiguration.
    *
    * @return Windows10DeviceModeType The deviceMode
    */
    public function getDeviceMode()
    {
        if (array_key_exists("deviceMode", $this->_propDict)) {
            if (is_a($this->_propDict["deviceMode"], "\Beta\Microsoft\Graph\Model\Windows10DeviceModeType")) {
                return $this->_propDict["deviceMode"];
            } else {
                $this->_propDict["deviceMode"] = new Windows10DeviceModeType($this->_propDict["deviceMode"]);
                return $this->_propDict["deviceMode"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceMode
    * Applicability rule for device mode. Possible values are: standardConfiguration, sModeConfiguration.
    *
    * @param Windows10DeviceModeType $val The value to assign to the deviceMode
    *
    * @return DeviceManagementApplicabilityRuleDeviceMode The DeviceManagementApplicabilityRuleDeviceMode
    */
    public function setDeviceMode($val)
    {
        $this->_propDict["deviceMode"] = $val;
         return $this;
    }
    /**
    * Gets the name
    * Name for object.
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
    * Name for object.
    *
    * @param string $val The value of the name
    *
    * @return DeviceManagementApplicabilityRuleDeviceMode
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the ruleType
    * Applicability Rule type. Possible values are: include, exclude.
    *
    * @return DeviceManagementApplicabilityRuleType The ruleType
    */
    public function getRuleType()
    {
        if (array_key_exists("ruleType", $this->_propDict)) {
            if (is_a($this->_propDict["ruleType"], "\Beta\Microsoft\Graph\Model\DeviceManagementApplicabilityRuleType")) {
                return $this->_propDict["ruleType"];
            } else {
                $this->_propDict["ruleType"] = new DeviceManagementApplicabilityRuleType($this->_propDict["ruleType"]);
                return $this->_propDict["ruleType"];
            }
        }
        return null;
    }

    /**
    * Sets the ruleType
    * Applicability Rule type. Possible values are: include, exclude.
    *
    * @param DeviceManagementApplicabilityRuleType $val The value to assign to the ruleType
    *
    * @return DeviceManagementApplicabilityRuleDeviceMode The DeviceManagementApplicabilityRuleDeviceMode
    */
    public function setRuleType($val)
    {
        $this->_propDict["ruleType"] = $val;
         return $this;
    }
}
