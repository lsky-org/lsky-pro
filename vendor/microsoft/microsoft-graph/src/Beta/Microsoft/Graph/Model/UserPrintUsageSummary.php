<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserPrintUsageSummary File
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
* UserPrintUsageSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserPrintUsageSummary extends Entity
{
    /**
    * Gets the completedJobCount
    *
    * @return int The completedJobCount
    */
    public function getCompletedJobCount()
    {
        if (array_key_exists("completedJobCount", $this->_propDict)) {
            return $this->_propDict["completedJobCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the completedJobCount
    *
    * @param int $val The value of the completedJobCount
    *
    * @return UserPrintUsageSummary
    */
    public function setCompletedJobCount($val)
    {
        $this->_propDict["completedJobCount"] = $val;
        return $this;
    }
    /**
    * Gets the incompleteJobCount
    *
    * @return int The incompleteJobCount
    */
    public function getIncompleteJobCount()
    {
        if (array_key_exists("incompleteJobCount", $this->_propDict)) {
            return $this->_propDict["incompleteJobCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the incompleteJobCount
    *
    * @param int $val The value of the incompleteJobCount
    *
    * @return UserPrintUsageSummary
    */
    public function setIncompleteJobCount($val)
    {
        $this->_propDict["incompleteJobCount"] = $val;
        return $this;
    }

    /**
    * Gets the user
    *
    * @return Identity The user
    */
    public function getUser()
    {
        if (array_key_exists("user", $this->_propDict)) {
            if (is_a($this->_propDict["user"], "\Beta\Microsoft\Graph\Model\Identity")) {
                return $this->_propDict["user"];
            } else {
                $this->_propDict["user"] = new Identity($this->_propDict["user"]);
                return $this->_propDict["user"];
            }
        }
        return null;
    }

    /**
    * Sets the user
    *
    * @param Identity $val The value to assign to the user
    *
    * @return UserPrintUsageSummary The UserPrintUsageSummary
    */
    public function setUser($val)
    {
        $this->_propDict["user"] = $val;
         return $this;
    }
    /**
    * Gets the userDisplayName
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
    *
    * @param string $val The value of the userDisplayName
    *
    * @return UserPrintUsageSummary
    */
    public function setUserDisplayName($val)
    {
        $this->_propDict["userDisplayName"] = $val;
        return $this;
    }
    /**
    * Gets the userPrincipalName
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
    *
    * @param string $val The value of the userPrincipalName
    *
    * @return UserPrintUsageSummary
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
}
