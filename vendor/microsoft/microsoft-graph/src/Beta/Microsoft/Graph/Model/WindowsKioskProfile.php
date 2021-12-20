<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsKioskProfile File
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
* WindowsKioskProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsKioskProfile extends Entity
{

    /**
    * Gets the appConfiguration
    * The App configuration that will be used for this kiosk configuration.
    *
    * @return WindowsKioskAppConfiguration The appConfiguration
    */
    public function getAppConfiguration()
    {
        if (array_key_exists("appConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["appConfiguration"], "\Beta\Microsoft\Graph\Model\WindowsKioskAppConfiguration")) {
                return $this->_propDict["appConfiguration"];
            } else {
                $this->_propDict["appConfiguration"] = new WindowsKioskAppConfiguration($this->_propDict["appConfiguration"]);
                return $this->_propDict["appConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the appConfiguration
    * The App configuration that will be used for this kiosk configuration.
    *
    * @param WindowsKioskAppConfiguration $val The value to assign to the appConfiguration
    *
    * @return WindowsKioskProfile The WindowsKioskProfile
    */
    public function setAppConfiguration($val)
    {
        $this->_propDict["appConfiguration"] = $val;
         return $this;
    }
    /**
    * Gets the profileId
    * Key of the entity.
    *
    * @return string The profileId
    */
    public function getProfileId()
    {
        if (array_key_exists("profileId", $this->_propDict)) {
            return $this->_propDict["profileId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the profileId
    * Key of the entity.
    *
    * @param string $val The value of the profileId
    *
    * @return WindowsKioskProfile
    */
    public function setProfileId($val)
    {
        $this->_propDict["profileId"] = $val;
        return $this;
    }
    /**
    * Gets the profileName
    * This is a friendly name used to identify a group of applications, the layout of these apps on the start menu and the users to whom this kiosk configuration is assigned.
    *
    * @return string The profileName
    */
    public function getProfileName()
    {
        if (array_key_exists("profileName", $this->_propDict)) {
            return $this->_propDict["profileName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the profileName
    * This is a friendly name used to identify a group of applications, the layout of these apps on the start menu and the users to whom this kiosk configuration is assigned.
    *
    * @param string $val The value of the profileName
    *
    * @return WindowsKioskProfile
    */
    public function setProfileName($val)
    {
        $this->_propDict["profileName"] = $val;
        return $this;
    }

    /**
    * Gets the userAccountsConfiguration
    * The user accounts that will be locked to this kiosk configuration. This collection can contain a maximum of 100 elements.
    *
    * @return WindowsKioskUser The userAccountsConfiguration
    */
    public function getUserAccountsConfiguration()
    {
        if (array_key_exists("userAccountsConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["userAccountsConfiguration"], "\Beta\Microsoft\Graph\Model\WindowsKioskUser")) {
                return $this->_propDict["userAccountsConfiguration"];
            } else {
                $this->_propDict["userAccountsConfiguration"] = new WindowsKioskUser($this->_propDict["userAccountsConfiguration"]);
                return $this->_propDict["userAccountsConfiguration"];
            }
        }
        return null;
    }

    /**
    * Sets the userAccountsConfiguration
    * The user accounts that will be locked to this kiosk configuration. This collection can contain a maximum of 100 elements.
    *
    * @param WindowsKioskUser $val The value to assign to the userAccountsConfiguration
    *
    * @return WindowsKioskProfile The WindowsKioskProfile
    */
    public function setUserAccountsConfiguration($val)
    {
        $this->_propDict["userAccountsConfiguration"] = $val;
         return $this;
    }
}
