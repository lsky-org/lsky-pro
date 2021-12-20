<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserCredentialUsageDetails File
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
* UserCredentialUsageDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserCredentialUsageDetails extends Entity
{
    /**
    * Gets the authMethod
    * Represents the authentication method that the user used. Possible values are:email, mobileSMS, mobileCall, officePhone, securityQuestion (only used for self-service password reset), appNotification, appCode, alternateMobileCall (supported only in registration), fido, appPassword,unknownFutureValue
    *
    * @return UsageAuthMethod The authMethod
    */
    public function getAuthMethod()
    {
        if (array_key_exists("authMethod", $this->_propDict)) {
            if (is_a($this->_propDict["authMethod"], "\Beta\Microsoft\Graph\Model\UsageAuthMethod")) {
                return $this->_propDict["authMethod"];
            } else {
                $this->_propDict["authMethod"] = new UsageAuthMethod($this->_propDict["authMethod"]);
                return $this->_propDict["authMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the authMethod
    * Represents the authentication method that the user used. Possible values are:email, mobileSMS, mobileCall, officePhone, securityQuestion (only used for self-service password reset), appNotification, appCode, alternateMobileCall (supported only in registration), fido, appPassword,unknownFutureValue
    *
    * @param UsageAuthMethod $val The authMethod
    *
    * @return UserCredentialUsageDetails
    */
    public function setAuthMethod($val)
    {
        $this->_propDict["authMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the eventDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: 2014-01-01T00:00:00Z.
    *
    * @return \DateTime The eventDateTime
    */
    public function getEventDateTime()
    {
        if (array_key_exists("eventDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["eventDateTime"], "\DateTime")) {
                return $this->_propDict["eventDateTime"];
            } else {
                $this->_propDict["eventDateTime"] = new \DateTime($this->_propDict["eventDateTime"]);
                return $this->_propDict["eventDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the eventDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The eventDateTime
    *
    * @return UserCredentialUsageDetails
    */
    public function setEventDateTime($val)
    {
        $this->_propDict["eventDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the failureReason
    * Provides the failure reason for the corresponding reset or registration workflow.
    *
    * @return string The failureReason
    */
    public function getFailureReason()
    {
        if (array_key_exists("failureReason", $this->_propDict)) {
            return $this->_propDict["failureReason"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the failureReason
    * Provides the failure reason for the corresponding reset or registration workflow.
    *
    * @param string $val The failureReason
    *
    * @return UserCredentialUsageDetails
    */
    public function setFailureReason($val)
    {
        $this->_propDict["failureReason"] = $val;
        return $this;
    }
    
    /**
    * Gets the feature
    * Possible values are: registration, reset, unknownFutureValue.
    *
    * @return FeatureType The feature
    */
    public function getFeature()
    {
        if (array_key_exists("feature", $this->_propDict)) {
            if (is_a($this->_propDict["feature"], "\Beta\Microsoft\Graph\Model\FeatureType")) {
                return $this->_propDict["feature"];
            } else {
                $this->_propDict["feature"] = new FeatureType($this->_propDict["feature"]);
                return $this->_propDict["feature"];
            }
        }
        return null;
    }
    
    /**
    * Sets the feature
    * Possible values are: registration, reset, unknownFutureValue.
    *
    * @param FeatureType $val The feature
    *
    * @return UserCredentialUsageDetails
    */
    public function setFeature($val)
    {
        $this->_propDict["feature"] = $val;
        return $this;
    }
    
    /**
    * Gets the isSuccess
    * Indicates success or failure of the workflow.
    *
    * @return bool The isSuccess
    */
    public function getIsSuccess()
    {
        if (array_key_exists("isSuccess", $this->_propDict)) {
            return $this->_propDict["isSuccess"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isSuccess
    * Indicates success or failure of the workflow.
    *
    * @param bool $val The isSuccess
    *
    * @return UserCredentialUsageDetails
    */
    public function setIsSuccess($val)
    {
        $this->_propDict["isSuccess"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the userDisplayName
    * User name of the user performing the reset or registration workflow.
    *
    * @return string The userDisplayName
    */
    public function getUserDisplayName()
    {
        if (array_key_exists("userDisplayName", $this->_propDict)) {
            return $this->_propDict["userDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userDisplayName
    * User name of the user performing the reset or registration workflow.
    *
    * @param string $val The userDisplayName
    *
    * @return UserCredentialUsageDetails
    */
    public function setUserDisplayName($val)
    {
        $this->_propDict["userDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    * User principal name of the user performing the reset or registration workflow.
    *
    * @return string The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userPrincipalName
    * User principal name of the user performing the reset or registration workflow.
    *
    * @param string $val The userPrincipalName
    *
    * @return UserCredentialUsageDetails
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
}
