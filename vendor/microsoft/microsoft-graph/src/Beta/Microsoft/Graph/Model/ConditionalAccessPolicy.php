<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessPolicy File
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
* ConditionalAccessPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessPolicy extends Entity
{
    /**
    * Gets the conditions
    * Specifies the rules that must be met for the policy to apply. Required.
    *
    * @return ConditionalAccessConditionSet The conditions
    */
    public function getConditions()
    {
        if (array_key_exists("conditions", $this->_propDict)) {
            if (is_a($this->_propDict["conditions"], "\Beta\Microsoft\Graph\Model\ConditionalAccessConditionSet")) {
                return $this->_propDict["conditions"];
            } else {
                $this->_propDict["conditions"] = new ConditionalAccessConditionSet($this->_propDict["conditions"]);
                return $this->_propDict["conditions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the conditions
    * Specifies the rules that must be met for the policy to apply. Required.
    *
    * @param ConditionalAccessConditionSet $val The conditions
    *
    * @return ConditionalAccessPolicy
    */
    public function setConditions($val)
    {
        $this->_propDict["conditions"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Readonly.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Readonly.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return ConditionalAccessPolicy
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * Not used.
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * Not used.
    *
    * @param string $val The description
    *
    * @return ConditionalAccessPolicy
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Specifies a display name for the conditionalAccessPolicy object.
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
    * Specifies a display name for the conditionalAccessPolicy object.
    *
    * @param string $val The displayName
    *
    * @return ConditionalAccessPolicy
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the grantControls
    * Specifies the grant controls that must be fulfilled to pass the policy.
    *
    * @return ConditionalAccessGrantControls The grantControls
    */
    public function getGrantControls()
    {
        if (array_key_exists("grantControls", $this->_propDict)) {
            if (is_a($this->_propDict["grantControls"], "\Beta\Microsoft\Graph\Model\ConditionalAccessGrantControls")) {
                return $this->_propDict["grantControls"];
            } else {
                $this->_propDict["grantControls"] = new ConditionalAccessGrantControls($this->_propDict["grantControls"]);
                return $this->_propDict["grantControls"];
            }
        }
        return null;
    }
    
    /**
    * Sets the grantControls
    * Specifies the grant controls that must be fulfilled to pass the policy.
    *
    * @param ConditionalAccessGrantControls $val The grantControls
    *
    * @return ConditionalAccessPolicy
    */
    public function setGrantControls($val)
    {
        $this->_propDict["grantControls"] = $val;
        return $this;
    }
    
    /**
    * Gets the modifiedDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Readonly.
    *
    * @return \DateTime The modifiedDateTime
    */
    public function getModifiedDateTime()
    {
        if (array_key_exists("modifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["modifiedDateTime"], "\DateTime")) {
                return $this->_propDict["modifiedDateTime"];
            } else {
                $this->_propDict["modifiedDateTime"] = new \DateTime($this->_propDict["modifiedDateTime"]);
                return $this->_propDict["modifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the modifiedDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Readonly.
    *
    * @param \DateTime $val The modifiedDateTime
    *
    * @return ConditionalAccessPolicy
    */
    public function setModifiedDateTime($val)
    {
        $this->_propDict["modifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the sessionControls
    * Specifies the session controls that are enforced after sign-in.
    *
    * @return ConditionalAccessSessionControls The sessionControls
    */
    public function getSessionControls()
    {
        if (array_key_exists("sessionControls", $this->_propDict)) {
            if (is_a($this->_propDict["sessionControls"], "\Beta\Microsoft\Graph\Model\ConditionalAccessSessionControls")) {
                return $this->_propDict["sessionControls"];
            } else {
                $this->_propDict["sessionControls"] = new ConditionalAccessSessionControls($this->_propDict["sessionControls"]);
                return $this->_propDict["sessionControls"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sessionControls
    * Specifies the session controls that are enforced after sign-in.
    *
    * @param ConditionalAccessSessionControls $val The sessionControls
    *
    * @return ConditionalAccessPolicy
    */
    public function setSessionControls($val)
    {
        $this->_propDict["sessionControls"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    * Specifies the state of the conditionalAccessPolicy object. Possible values are: enabled, disabled, enabledForReportingButNotEnforced. Required.
    *
    * @return ConditionalAccessPolicyState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\ConditionalAccessPolicyState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new ConditionalAccessPolicyState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    * Specifies the state of the conditionalAccessPolicy object. Possible values are: enabled, disabled, enabledForReportingButNotEnforced. Required.
    *
    * @param ConditionalAccessPolicyState $val The state
    *
    * @return ConditionalAccessPolicy
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
}
