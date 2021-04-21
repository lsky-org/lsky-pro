<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Win32LobAppRule File
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
* Win32LobAppRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Win32LobAppRule extends Entity
{

    /**
    * Gets the ruleType
    * The rule type indicating the purpose of the rule. Possible values are: detection, requirement.
    *
    * @return Win32LobAppRuleType The ruleType
    */
    public function getRuleType()
    {
        if (array_key_exists("ruleType", $this->_propDict)) {
            if (is_a($this->_propDict["ruleType"], "\Beta\Microsoft\Graph\Model\Win32LobAppRuleType")) {
                return $this->_propDict["ruleType"];
            } else {
                $this->_propDict["ruleType"] = new Win32LobAppRuleType($this->_propDict["ruleType"]);
                return $this->_propDict["ruleType"];
            }
        }
        return null;
    }

    /**
    * Sets the ruleType
    * The rule type indicating the purpose of the rule. Possible values are: detection, requirement.
    *
    * @param Win32LobAppRuleType $val The value to assign to the ruleType
    *
    * @return Win32LobAppRule The Win32LobAppRule
    */
    public function setRuleType($val)
    {
        $this->_propDict["ruleType"] = $val;
         return $this;
    }
}
