<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MessageRule File
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
* MessageRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MessageRule extends Entity
{
    /**
    * Gets the actions
    * Actions to be taken on a message when the corresponding conditions are fulfilled.
    *
    * @return MessageRuleActions The actions
    */
    public function getActions()
    {
        if (array_key_exists("actions", $this->_propDict)) {
            if (is_a($this->_propDict["actions"], "\Beta\Microsoft\Graph\Model\MessageRuleActions")) {
                return $this->_propDict["actions"];
            } else {
                $this->_propDict["actions"] = new MessageRuleActions($this->_propDict["actions"]);
                return $this->_propDict["actions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the actions
    * Actions to be taken on a message when the corresponding conditions are fulfilled.
    *
    * @param MessageRuleActions $val The actions
    *
    * @return MessageRule
    */
    public function setActions($val)
    {
        $this->_propDict["actions"] = $val;
        return $this;
    }
    
    /**
    * Gets the conditions
    * Conditions that when fulfilled, will trigger the corresponding actions for that rule.
    *
    * @return MessageRulePredicates The conditions
    */
    public function getConditions()
    {
        if (array_key_exists("conditions", $this->_propDict)) {
            if (is_a($this->_propDict["conditions"], "\Beta\Microsoft\Graph\Model\MessageRulePredicates")) {
                return $this->_propDict["conditions"];
            } else {
                $this->_propDict["conditions"] = new MessageRulePredicates($this->_propDict["conditions"]);
                return $this->_propDict["conditions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the conditions
    * Conditions that when fulfilled, will trigger the corresponding actions for that rule.
    *
    * @param MessageRulePredicates $val The conditions
    *
    * @return MessageRule
    */
    public function setConditions($val)
    {
        $this->_propDict["conditions"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The display name of the rule.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * The display name of the rule.
    *
    * @param string $val The displayName
    *
    * @return MessageRule
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the exceptions
    * Exception conditions for the rule.
    *
    * @return MessageRulePredicates The exceptions
    */
    public function getExceptions()
    {
        if (array_key_exists("exceptions", $this->_propDict)) {
            if (is_a($this->_propDict["exceptions"], "\Beta\Microsoft\Graph\Model\MessageRulePredicates")) {
                return $this->_propDict["exceptions"];
            } else {
                $this->_propDict["exceptions"] = new MessageRulePredicates($this->_propDict["exceptions"]);
                return $this->_propDict["exceptions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the exceptions
    * Exception conditions for the rule.
    *
    * @param MessageRulePredicates $val The exceptions
    *
    * @return MessageRule
    */
    public function setExceptions($val)
    {
        $this->_propDict["exceptions"] = $val;
        return $this;
    }
    
    /**
    * Gets the hasError
    * Indicates whether the rule is in an error condition. Read-only.
    *
    * @return bool The hasError
    */
    public function getHasError()
    {
        if (array_key_exists("hasError", $this->_propDict)) {
            return $this->_propDict["hasError"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hasError
    * Indicates whether the rule is in an error condition. Read-only.
    *
    * @param bool $val The hasError
    *
    * @return MessageRule
    */
    public function setHasError($val)
    {
        $this->_propDict["hasError"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isEnabled
    * Indicates whether the rule is enabled to be applied to messages.
    *
    * @return bool The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isEnabled
    * Indicates whether the rule is enabled to be applied to messages.
    *
    * @param bool $val The isEnabled
    *
    * @return MessageRule
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isReadOnly
    * Indicates if the rule is read-only and cannot be modified or deleted by the rules REST API.
    *
    * @return bool The isReadOnly
    */
    public function getIsReadOnly()
    {
        if (array_key_exists("isReadOnly", $this->_propDict)) {
            return $this->_propDict["isReadOnly"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isReadOnly
    * Indicates if the rule is read-only and cannot be modified or deleted by the rules REST API.
    *
    * @param bool $val The isReadOnly
    *
    * @return MessageRule
    */
    public function setIsReadOnly($val)
    {
        $this->_propDict["isReadOnly"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the sequence
    * Indicates the order in which the rule is executed, among other rules.
    *
    * @return int The sequence
    */
    public function getSequence()
    {
        if (array_key_exists("sequence", $this->_propDict)) {
            return $this->_propDict["sequence"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sequence
    * Indicates the order in which the rule is executed, among other rules.
    *
    * @param int $val The sequence
    *
    * @return MessageRule
    */
    public function setSequence($val)
    {
        $this->_propDict["sequence"] = intval($val);
        return $this;
    }
    
}
