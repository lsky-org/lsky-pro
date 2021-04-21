<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TemporaryAccessPassAuthenticationMethod File
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
* TemporaryAccessPassAuthenticationMethod class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TemporaryAccessPassAuthenticationMethod extends AuthenticationMethod
{
    /**
    * Gets the createdDateTime
    * The date and time when the temporaryAccessPass was created.
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
    * The date and time when the temporaryAccessPass was created.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return TemporaryAccessPassAuthenticationMethod
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the isUsable
    * The state of the authentication method that indicates whether it's currently usable by the user.
    *
    * @return bool The isUsable
    */
    public function getIsUsable()
    {
        if (array_key_exists("isUsable", $this->_propDict)) {
            return $this->_propDict["isUsable"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isUsable
    * The state of the authentication method that indicates whether it's currently usable by the user.
    *
    * @param bool $val The isUsable
    *
    * @return TemporaryAccessPassAuthenticationMethod
    */
    public function setIsUsable($val)
    {
        $this->_propDict["isUsable"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isUsableOnce
    * Determines whether the pass is limited to a one time use. If true, the pass can be used once; if false, the pass can be used multiple times within the temporaryAccessPass lifetime.
    *
    * @return bool The isUsableOnce
    */
    public function getIsUsableOnce()
    {
        if (array_key_exists("isUsableOnce", $this->_propDict)) {
            return $this->_propDict["isUsableOnce"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isUsableOnce
    * Determines whether the pass is limited to a one time use. If true, the pass can be used once; if false, the pass can be used multiple times within the temporaryAccessPass lifetime.
    *
    * @param bool $val The isUsableOnce
    *
    * @return TemporaryAccessPassAuthenticationMethod
    */
    public function setIsUsableOnce($val)
    {
        $this->_propDict["isUsableOnce"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lifetimeInMinutes
    * The lifetime of the temporaryAccessPass in minutes starting at startDateTime. Minimum 10, Maximum 43200 (equivalent to 30 days).
    *
    * @return int The lifetimeInMinutes
    */
    public function getLifetimeInMinutes()
    {
        if (array_key_exists("lifetimeInMinutes", $this->_propDict)) {
            return $this->_propDict["lifetimeInMinutes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lifetimeInMinutes
    * The lifetime of the temporaryAccessPass in minutes starting at startDateTime. Minimum 10, Maximum 43200 (equivalent to 30 days).
    *
    * @param int $val The lifetimeInMinutes
    *
    * @return TemporaryAccessPassAuthenticationMethod
    */
    public function setLifetimeInMinutes($val)
    {
        $this->_propDict["lifetimeInMinutes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the methodUsabilityReason
    * Details about usability state (isUsable). Reasons can include: enabledByPolicy, disabledByPolicy, expired, notYetValid, oneTimeUsed.
    *
    * @return string The methodUsabilityReason
    */
    public function getMethodUsabilityReason()
    {
        if (array_key_exists("methodUsabilityReason", $this->_propDict)) {
            return $this->_propDict["methodUsabilityReason"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the methodUsabilityReason
    * Details about usability state (isUsable). Reasons can include: enabledByPolicy, disabledByPolicy, expired, notYetValid, oneTimeUsed.
    *
    * @param string $val The methodUsabilityReason
    *
    * @return TemporaryAccessPassAuthenticationMethod
    */
    public function setMethodUsabilityReason($val)
    {
        $this->_propDict["methodUsabilityReason"] = $val;
        return $this;
    }
    
    /**
    * Gets the startDateTime
    * The date and time when the temporaryAccessPass becomes available to use.
    *
    * @return \DateTime The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime")) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startDateTime
    * The date and time when the temporaryAccessPass becomes available to use.
    *
    * @param \DateTime $val The startDateTime
    *
    * @return TemporaryAccessPassAuthenticationMethod
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the temporaryAccessPass
    * The temporaryAccessPass used to authenticate. Returned only on creation of a new temporaryAccessPass; returned as NULL with GET.
    *
    * @return string The temporaryAccessPass
    */
    public function getTemporaryAccessPass()
    {
        if (array_key_exists("temporaryAccessPass", $this->_propDict)) {
            return $this->_propDict["temporaryAccessPass"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the temporaryAccessPass
    * The temporaryAccessPass used to authenticate. Returned only on creation of a new temporaryAccessPass; returned as NULL with GET.
    *
    * @param string $val The temporaryAccessPass
    *
    * @return TemporaryAccessPassAuthenticationMethod
    */
    public function setTemporaryAccessPass($val)
    {
        $this->_propDict["temporaryAccessPass"] = $val;
        return $this;
    }
    
}
