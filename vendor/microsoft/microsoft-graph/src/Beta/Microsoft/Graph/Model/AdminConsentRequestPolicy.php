<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AdminConsentRequestPolicy File
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
* AdminConsentRequestPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AdminConsentRequestPolicy extends Entity
{
    /**
    * Gets the isEnabled
    * Specifies whether the admin consent request feature is enabled or disabled. Required.
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
    * Specifies whether the admin consent request feature is enabled or disabled. Required.
    *
    * @param bool $val The isEnabled
    *
    * @return AdminConsentRequestPolicy
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the notifyReviewers
    * Specifies whether reviewers will receive notifications. Required.
    *
    * @return bool The notifyReviewers
    */
    public function getNotifyReviewers()
    {
        if (array_key_exists("notifyReviewers", $this->_propDict)) {
            return $this->_propDict["notifyReviewers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notifyReviewers
    * Specifies whether reviewers will receive notifications. Required.
    *
    * @param bool $val The notifyReviewers
    *
    * @return AdminConsentRequestPolicy
    */
    public function setNotifyReviewers($val)
    {
        $this->_propDict["notifyReviewers"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the remindersEnabled
    * Specifies whether reviewers will receive reminder emails. Required.
    *
    * @return bool The remindersEnabled
    */
    public function getRemindersEnabled()
    {
        if (array_key_exists("remindersEnabled", $this->_propDict)) {
            return $this->_propDict["remindersEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the remindersEnabled
    * Specifies whether reviewers will receive reminder emails. Required.
    *
    * @param bool $val The remindersEnabled
    *
    * @return AdminConsentRequestPolicy
    */
    public function setRemindersEnabled($val)
    {
        $this->_propDict["remindersEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the requestDurationInDays
    * Specifies the duration the request is active before it automatically expires if no decision is applied.
    *
    * @return int The requestDurationInDays
    */
    public function getRequestDurationInDays()
    {
        if (array_key_exists("requestDurationInDays", $this->_propDict)) {
            return $this->_propDict["requestDurationInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requestDurationInDays
    * Specifies the duration the request is active before it automatically expires if no decision is applied.
    *
    * @param int $val The requestDurationInDays
    *
    * @return AdminConsentRequestPolicy
    */
    public function setRequestDurationInDays($val)
    {
        $this->_propDict["requestDurationInDays"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the reviewers
    * Required.
     *
     * @return array The reviewers
     */
    public function getReviewers()
    {
        if (array_key_exists("reviewers", $this->_propDict)) {
           return $this->_propDict["reviewers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the reviewers
    * Required.
    *
    * @param AccessReviewReviewerScope $val The reviewers
    *
    * @return AdminConsentRequestPolicy
    */
    public function setReviewers($val)
    {
		$this->_propDict["reviewers"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    * Specifies the version of this policy. When the policy is updated, this version is updated. Read-only.
    *
    * @return int The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the version
    * Specifies the version of this policy. When the policy is updated, this version is updated. Read-only.
    *
    * @param int $val The version
    *
    * @return AdminConsentRequestPolicy
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = intval($val);
        return $this;
    }
    
}
