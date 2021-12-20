<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserRegistrationFeatureSummary File
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
* UserRegistrationFeatureSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserRegistrationFeatureSummary extends Entity
{
    /**
    * Gets the totalUserCount
    * Total number of users accounts, excluding those that are blocked
    *
    * @return int The totalUserCount
    */
    public function getTotalUserCount()
    {
        if (array_key_exists("totalUserCount", $this->_propDict)) {
            return $this->_propDict["totalUserCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the totalUserCount
    * Total number of users accounts, excluding those that are blocked
    *
    * @param int $val The value of the totalUserCount
    *
    * @return UserRegistrationFeatureSummary
    */
    public function setTotalUserCount($val)
    {
        $this->_propDict["totalUserCount"] = $val;
        return $this;
    }

    /**
    * Gets the userRegistrationFeatureCounts
    * Number of users registered or capable for Multi-Factor Authentication, Self-Service Password Reset and Passwordless Authentication.
    *
    * @return UserRegistrationFeatureCount The userRegistrationFeatureCounts
    */
    public function getUserRegistrationFeatureCounts()
    {
        if (array_key_exists("userRegistrationFeatureCounts", $this->_propDict)) {
            if (is_a($this->_propDict["userRegistrationFeatureCounts"], "\Beta\Microsoft\Graph\Model\UserRegistrationFeatureCount")) {
                return $this->_propDict["userRegistrationFeatureCounts"];
            } else {
                $this->_propDict["userRegistrationFeatureCounts"] = new UserRegistrationFeatureCount($this->_propDict["userRegistrationFeatureCounts"]);
                return $this->_propDict["userRegistrationFeatureCounts"];
            }
        }
        return null;
    }

    /**
    * Sets the userRegistrationFeatureCounts
    * Number of users registered or capable for Multi-Factor Authentication, Self-Service Password Reset and Passwordless Authentication.
    *
    * @param UserRegistrationFeatureCount $val The value to assign to the userRegistrationFeatureCounts
    *
    * @return UserRegistrationFeatureSummary The UserRegistrationFeatureSummary
    */
    public function setUserRegistrationFeatureCounts($val)
    {
        $this->_propDict["userRegistrationFeatureCounts"] = $val;
         return $this;
    }

    /**
    * Gets the userRoles
    * User role type. Possible values are: all, privilegedAdmin, admin, user.
    *
    * @return IncludedUserRoles The userRoles
    */
    public function getUserRoles()
    {
        if (array_key_exists("userRoles", $this->_propDict)) {
            if (is_a($this->_propDict["userRoles"], "\Beta\Microsoft\Graph\Model\IncludedUserRoles")) {
                return $this->_propDict["userRoles"];
            } else {
                $this->_propDict["userRoles"] = new IncludedUserRoles($this->_propDict["userRoles"]);
                return $this->_propDict["userRoles"];
            }
        }
        return null;
    }

    /**
    * Sets the userRoles
    * User role type. Possible values are: all, privilegedAdmin, admin, user.
    *
    * @param IncludedUserRoles $val The value to assign to the userRoles
    *
    * @return UserRegistrationFeatureSummary The UserRegistrationFeatureSummary
    */
    public function setUserRoles($val)
    {
        $this->_propDict["userRoles"] = $val;
         return $this;
    }

    /**
    * Gets the userTypes
    * User type. Possible values are: all, member, guest.
    *
    * @return IncludedUserTypes The userTypes
    */
    public function getUserTypes()
    {
        if (array_key_exists("userTypes", $this->_propDict)) {
            if (is_a($this->_propDict["userTypes"], "\Beta\Microsoft\Graph\Model\IncludedUserTypes")) {
                return $this->_propDict["userTypes"];
            } else {
                $this->_propDict["userTypes"] = new IncludedUserTypes($this->_propDict["userTypes"]);
                return $this->_propDict["userTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the userTypes
    * User type. Possible values are: all, member, guest.
    *
    * @param IncludedUserTypes $val The value to assign to the userTypes
    *
    * @return UserRegistrationFeatureSummary The UserRegistrationFeatureSummary
    */
    public function setUserTypes($val)
    {
        $this->_propDict["userTypes"] = $val;
         return $this;
    }
}
