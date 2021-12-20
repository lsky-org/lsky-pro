<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegedRoleSummary File
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
* PrivilegedRoleSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegedRoleSummary extends Entity
{
    /**
    * Gets the elevatedCount
    * The number of users that have the role assigned and the role is activated.
    *
    * @return int The elevatedCount
    */
    public function getElevatedCount()
    {
        if (array_key_exists("elevatedCount", $this->_propDict)) {
            return $this->_propDict["elevatedCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the elevatedCount
    * The number of users that have the role assigned and the role is activated.
    *
    * @param int $val The elevatedCount
    *
    * @return PrivilegedRoleSummary
    */
    public function setElevatedCount($val)
    {
        $this->_propDict["elevatedCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the managedCount
    * The number of users that have the role assigned but the role is deactivated.
    *
    * @return int The managedCount
    */
    public function getManagedCount()
    {
        if (array_key_exists("managedCount", $this->_propDict)) {
            return $this->_propDict["managedCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedCount
    * The number of users that have the role assigned but the role is deactivated.
    *
    * @param int $val The managedCount
    *
    * @return PrivilegedRoleSummary
    */
    public function setManagedCount($val)
    {
        $this->_propDict["managedCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the mfaEnabled
    * true if the role activation requires MFA. false if the role activation doesn't require MFA.
    *
    * @return bool The mfaEnabled
    */
    public function getMfaEnabled()
    {
        if (array_key_exists("mfaEnabled", $this->_propDict)) {
            return $this->_propDict["mfaEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mfaEnabled
    * true if the role activation requires MFA. false if the role activation doesn't require MFA.
    *
    * @param bool $val The mfaEnabled
    *
    * @return PrivilegedRoleSummary
    */
    public function setMfaEnabled($val)
    {
        $this->_propDict["mfaEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the status
    * Possible values are: ok, bad. The value depends on the ratio of (managedCount / usersCount). If the ratio is less than a predefined threshold, ok is returned. Otherwise, bad is returned.
    *
    * @return RoleSummaryStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\RoleSummaryStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new RoleSummaryStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * Possible values are: ok, bad. The value depends on the ratio of (managedCount / usersCount). If the ratio is less than a predefined threshold, ok is returned. Otherwise, bad is returned.
    *
    * @param RoleSummaryStatus $val The status
    *
    * @return PrivilegedRoleSummary
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the usersCount
    * The number of users that are assigned with the role.
    *
    * @return int The usersCount
    */
    public function getUsersCount()
    {
        if (array_key_exists("usersCount", $this->_propDict)) {
            return $this->_propDict["usersCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usersCount
    * The number of users that are assigned with the role.
    *
    * @param int $val The usersCount
    *
    * @return PrivilegedRoleSummary
    */
    public function setUsersCount($val)
    {
        $this->_propDict["usersCount"] = intval($val);
        return $this;
    }
    
}
