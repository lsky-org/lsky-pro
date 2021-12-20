<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceComplianceScriptValidationResult File
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
* DeviceComplianceScriptValidationResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceComplianceScriptValidationResult extends Entity
{

    /**
    * Gets the ruleErrors
    * Errors in json for the script for rules.
    *
    * @return DeviceComplianceScriptRuleError The ruleErrors
    */
    public function getRuleErrors()
    {
        if (array_key_exists("ruleErrors", $this->_propDict)) {
            if (is_a($this->_propDict["ruleErrors"], "\Beta\Microsoft\Graph\Model\DeviceComplianceScriptRuleError")) {
                return $this->_propDict["ruleErrors"];
            } else {
                $this->_propDict["ruleErrors"] = new DeviceComplianceScriptRuleError($this->_propDict["ruleErrors"]);
                return $this->_propDict["ruleErrors"];
            }
        }
        return null;
    }

    /**
    * Sets the ruleErrors
    * Errors in json for the script for rules.
    *
    * @param DeviceComplianceScriptRuleError $val The value to assign to the ruleErrors
    *
    * @return DeviceComplianceScriptValidationResult The DeviceComplianceScriptValidationResult
    */
    public function setRuleErrors($val)
    {
        $this->_propDict["ruleErrors"] = $val;
         return $this;
    }

    /**
    * Gets the rules
    * Parsed rules from json.
    *
    * @return DeviceComplianceScriptRule The rules
    */
    public function getRules()
    {
        if (array_key_exists("rules", $this->_propDict)) {
            if (is_a($this->_propDict["rules"], "\Beta\Microsoft\Graph\Model\DeviceComplianceScriptRule")) {
                return $this->_propDict["rules"];
            } else {
                $this->_propDict["rules"] = new DeviceComplianceScriptRule($this->_propDict["rules"]);
                return $this->_propDict["rules"];
            }
        }
        return null;
    }

    /**
    * Sets the rules
    * Parsed rules from json.
    *
    * @param DeviceComplianceScriptRule $val The value to assign to the rules
    *
    * @return DeviceComplianceScriptValidationResult The DeviceComplianceScriptValidationResult
    */
    public function setRules($val)
    {
        $this->_propDict["rules"] = $val;
         return $this;
    }

    /**
    * Gets the scriptErrors
    * Errors in json for the script.
    *
    * @return DeviceComplianceScriptError The scriptErrors
    */
    public function getScriptErrors()
    {
        if (array_key_exists("scriptErrors", $this->_propDict)) {
            if (is_a($this->_propDict["scriptErrors"], "\Beta\Microsoft\Graph\Model\DeviceComplianceScriptError")) {
                return $this->_propDict["scriptErrors"];
            } else {
                $this->_propDict["scriptErrors"] = new DeviceComplianceScriptError($this->_propDict["scriptErrors"]);
                return $this->_propDict["scriptErrors"];
            }
        }
        return null;
    }

    /**
    * Sets the scriptErrors
    * Errors in json for the script.
    *
    * @param DeviceComplianceScriptError $val The value to assign to the scriptErrors
    *
    * @return DeviceComplianceScriptValidationResult The DeviceComplianceScriptValidationResult
    */
    public function setScriptErrors($val)
    {
        $this->_propDict["scriptErrors"] = $val;
         return $this;
    }
}
