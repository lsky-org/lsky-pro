<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GovernanceRuleSetting File
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
* GovernanceRuleSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GovernanceRuleSetting extends Entity
{
    /**
    * Gets the ruleIdentifier
    * The id of the rule. For example, ExpirationRule and MfaRule.
    *
    * @return string The ruleIdentifier
    */
    public function getRuleIdentifier()
    {
        if (array_key_exists("ruleIdentifier", $this->_propDict)) {
            return $this->_propDict["ruleIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ruleIdentifier
    * The id of the rule. For example, ExpirationRule and MfaRule.
    *
    * @param string $val The value of the ruleIdentifier
    *
    * @return GovernanceRuleSetting
    */
    public function setRuleIdentifier($val)
    {
        $this->_propDict["ruleIdentifier"] = $val;
        return $this;
    }
    /**
    * Gets the setting
    * The settings of the rule. The value is a JSON string with a list of pairs in the format of Parameter_Name:Parameter_Value. For example, {'permanentAssignment':false,'maximumGrantPeriodInMinutes':129600}
    *
    * @return string The setting
    */
    public function getSetting()
    {
        if (array_key_exists("setting", $this->_propDict)) {
            return $this->_propDict["setting"];
        } else {
            return null;
        }
    }

    /**
    * Sets the setting
    * The settings of the rule. The value is a JSON string with a list of pairs in the format of Parameter_Name:Parameter_Value. For example, {'permanentAssignment':false,'maximumGrantPeriodInMinutes':129600}
    *
    * @param string $val The value of the setting
    *
    * @return GovernanceRuleSetting
    */
    public function setSetting($val)
    {
        $this->_propDict["setting"] = $val;
        return $this;
    }
}
