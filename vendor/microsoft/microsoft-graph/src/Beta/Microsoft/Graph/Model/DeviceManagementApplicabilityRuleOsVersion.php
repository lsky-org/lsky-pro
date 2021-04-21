<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementApplicabilityRuleOsVersion File
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
* DeviceManagementApplicabilityRuleOsVersion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementApplicabilityRuleOsVersion extends Entity
{
    /**
    * Gets the maxOSVersion
    * Max OS version for Applicability Rule.
    *
    * @return string The maxOSVersion
    */
    public function getMaxOSVersion()
    {
        if (array_key_exists("maxOSVersion", $this->_propDict)) {
            return $this->_propDict["maxOSVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maxOSVersion
    * Max OS version for Applicability Rule.
    *
    * @param string $val The value of the maxOSVersion
    *
    * @return DeviceManagementApplicabilityRuleOsVersion
    */
    public function setMaxOSVersion($val)
    {
        $this->_propDict["maxOSVersion"] = $val;
        return $this;
    }
    /**
    * Gets the minOSVersion
    * Min OS version for Applicability Rule.
    *
    * @return string The minOSVersion
    */
    public function getMinOSVersion()
    {
        if (array_key_exists("minOSVersion", $this->_propDict)) {
            return $this->_propDict["minOSVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minOSVersion
    * Min OS version for Applicability Rule.
    *
    * @param string $val The value of the minOSVersion
    *
    * @return DeviceManagementApplicabilityRuleOsVersion
    */
    public function setMinOSVersion($val)
    {
        $this->_propDict["minOSVersion"] = $val;
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
    * @return DeviceManagementApplicabilityRuleOsVersion
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
    * @return DeviceManagementApplicabilityRuleOsVersion The DeviceManagementApplicabilityRuleOsVersion
    */
    public function setRuleType($val)
    {
        $this->_propDict["ruleType"] = $val;
         return $this;
    }
}
