<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MatchingDlpRule File
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
* MatchingDlpRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MatchingDlpRule extends Entity
{

    /**
    * Gets the actions
    *
    * @return DlpActionInfo The actions
    */
    public function getActions()
    {
        if (array_key_exists("actions", $this->_propDict)) {
            if (is_a($this->_propDict["actions"], "\Beta\Microsoft\Graph\Model\DlpActionInfo")) {
                return $this->_propDict["actions"];
            } else {
                $this->_propDict["actions"] = new DlpActionInfo($this->_propDict["actions"]);
                return $this->_propDict["actions"];
            }
        }
        return null;
    }

    /**
    * Sets the actions
    *
    * @param DlpActionInfo $val The value to assign to the actions
    *
    * @return MatchingDlpRule The MatchingDlpRule
    */
    public function setActions($val)
    {
        $this->_propDict["actions"] = $val;
         return $this;
    }
    /**
    * Gets the isMostRestrictive
    *
    * @return bool The isMostRestrictive
    */
    public function getIsMostRestrictive()
    {
        if (array_key_exists("isMostRestrictive", $this->_propDict)) {
            return $this->_propDict["isMostRestrictive"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isMostRestrictive
    *
    * @param bool $val The value of the isMostRestrictive
    *
    * @return MatchingDlpRule
    */
    public function setIsMostRestrictive($val)
    {
        $this->_propDict["isMostRestrictive"] = $val;
        return $this;
    }
    /**
    * Gets the policyId
    *
    * @return string The policyId
    */
    public function getPolicyId()
    {
        if (array_key_exists("policyId", $this->_propDict)) {
            return $this->_propDict["policyId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyId
    *
    * @param string $val The value of the policyId
    *
    * @return MatchingDlpRule
    */
    public function setPolicyId($val)
    {
        $this->_propDict["policyId"] = $val;
        return $this;
    }
    /**
    * Gets the policyName
    *
    * @return string The policyName
    */
    public function getPolicyName()
    {
        if (array_key_exists("policyName", $this->_propDict)) {
            return $this->_propDict["policyName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the policyName
    *
    * @param string $val The value of the policyName
    *
    * @return MatchingDlpRule
    */
    public function setPolicyName($val)
    {
        $this->_propDict["policyName"] = $val;
        return $this;
    }
    /**
    * Gets the priority
    *
    * @return int The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            return $this->_propDict["priority"];
        } else {
            return null;
        }
    }

    /**
    * Sets the priority
    *
    * @param int $val The value of the priority
    *
    * @return MatchingDlpRule
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = $val;
        return $this;
    }
    /**
    * Gets the ruleId
    *
    * @return string The ruleId
    */
    public function getRuleId()
    {
        if (array_key_exists("ruleId", $this->_propDict)) {
            return $this->_propDict["ruleId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ruleId
    *
    * @param string $val The value of the ruleId
    *
    * @return MatchingDlpRule
    */
    public function setRuleId($val)
    {
        $this->_propDict["ruleId"] = $val;
        return $this;
    }

    /**
    * Gets the ruleMode
    *
    * @return RuleMode The ruleMode
    */
    public function getRuleMode()
    {
        if (array_key_exists("ruleMode", $this->_propDict)) {
            if (is_a($this->_propDict["ruleMode"], "\Beta\Microsoft\Graph\Model\RuleMode")) {
                return $this->_propDict["ruleMode"];
            } else {
                $this->_propDict["ruleMode"] = new RuleMode($this->_propDict["ruleMode"]);
                return $this->_propDict["ruleMode"];
            }
        }
        return null;
    }

    /**
    * Sets the ruleMode
    *
    * @param RuleMode $val The value to assign to the ruleMode
    *
    * @return MatchingDlpRule The MatchingDlpRule
    */
    public function setRuleMode($val)
    {
        $this->_propDict["ruleMode"] = $val;
         return $this;
    }
    /**
    * Gets the ruleName
    *
    * @return string The ruleName
    */
    public function getRuleName()
    {
        if (array_key_exists("ruleName", $this->_propDict)) {
            return $this->_propDict["ruleName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ruleName
    *
    * @param string $val The value of the ruleName
    *
    * @return MatchingDlpRule
    */
    public function setRuleName($val)
    {
        $this->_propDict["ruleName"] = $val;
        return $this;
    }
}
