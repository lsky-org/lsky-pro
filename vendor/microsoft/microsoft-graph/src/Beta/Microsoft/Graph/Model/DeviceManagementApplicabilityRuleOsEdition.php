<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementApplicabilityRuleOsEdition File
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
* DeviceManagementApplicabilityRuleOsEdition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementApplicabilityRuleOsEdition extends Entity
{
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
    * @return DeviceManagementApplicabilityRuleOsEdition
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the osEditionTypes
    * Applicability rule OS edition type.
    *
    * @return Windows10EditionType The osEditionTypes
    */
    public function getOsEditionTypes()
    {
        if (array_key_exists("osEditionTypes", $this->_propDict)) {
            if (is_a($this->_propDict["osEditionTypes"], "\Beta\Microsoft\Graph\Model\Windows10EditionType")) {
                return $this->_propDict["osEditionTypes"];
            } else {
                $this->_propDict["osEditionTypes"] = new Windows10EditionType($this->_propDict["osEditionTypes"]);
                return $this->_propDict["osEditionTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the osEditionTypes
    * Applicability rule OS edition type.
    *
    * @param Windows10EditionType $val The value to assign to the osEditionTypes
    *
    * @return DeviceManagementApplicabilityRuleOsEdition The DeviceManagementApplicabilityRuleOsEdition
    */
    public function setOsEditionTypes($val)
    {
        $this->_propDict["osEditionTypes"] = $val;
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
    * @return DeviceManagementApplicabilityRuleOsEdition The DeviceManagementApplicabilityRuleOsEdition
    */
    public function setRuleType($val)
    {
        $this->_propDict["ruleType"] = $val;
         return $this;
    }
}
