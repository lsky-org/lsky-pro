<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsAssignedAccessProfile File
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
* WindowsAssignedAccessProfile class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsAssignedAccessProfile extends Entity
{
    /**
    * Gets the appUserModelIds
    * These are the only Windows Store Apps that will be available to launch from the Start menu.
    *
    * @return string The appUserModelIds
    */
    public function getAppUserModelIds()
    {
        if (array_key_exists("appUserModelIds", $this->_propDict)) {
            return $this->_propDict["appUserModelIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appUserModelIds
    * These are the only Windows Store Apps that will be available to launch from the Start menu.
    *
    * @param string $val The appUserModelIds
    *
    * @return WindowsAssignedAccessProfile
    */
    public function setAppUserModelIds($val)
    {
        $this->_propDict["appUserModelIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the desktopAppPaths
    * These are the paths of the Desktop Apps that will be available on the Start menu and the only apps the user will be able to launch.
    *
    * @return string The desktopAppPaths
    */
    public function getDesktopAppPaths()
    {
        if (array_key_exists("desktopAppPaths", $this->_propDict)) {
            return $this->_propDict["desktopAppPaths"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the desktopAppPaths
    * These are the paths of the Desktop Apps that will be available on the Start menu and the only apps the user will be able to launch.
    *
    * @param string $val The desktopAppPaths
    *
    * @return WindowsAssignedAccessProfile
    */
    public function setDesktopAppPaths($val)
    {
        $this->_propDict["desktopAppPaths"] = $val;
        return $this;
    }
    
    /**
    * Gets the profileName
    * This is a friendly name used to identify a group of applications, the layout of these apps on the start menu and the users to whom this kiosk configuration is assigned.
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
    * This is a friendly name used to identify a group of applications, the layout of these apps on the start menu and the users to whom this kiosk configuration is assigned.
    *
    * @param string $val The profileName
    *
    * @return WindowsAssignedAccessProfile
    */
    public function setProfileName($val)
    {
        $this->_propDict["profileName"] = $val;
        return $this;
    }
    
    /**
    * Gets the showTaskBar
    * This setting allows the admin to specify whether the Task Bar is shown or not.
    *
    * @return bool The showTaskBar
    */
    public function getShowTaskBar()
    {
        if (array_key_exists("showTaskBar", $this->_propDict)) {
            return $this->_propDict["showTaskBar"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the showTaskBar
    * This setting allows the admin to specify whether the Task Bar is shown or not.
    *
    * @param bool $val The showTaskBar
    *
    * @return WindowsAssignedAccessProfile
    */
    public function setShowTaskBar($val)
    {
        $this->_propDict["showTaskBar"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the startMenuLayoutXml
    * Allows admins to override the default Start layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in Binary format.
    *
    * @return \GuzzleHttp\Psr7\Stream The startMenuLayoutXml
    */
    public function getStartMenuLayoutXml()
    {
        if (array_key_exists("startMenuLayoutXml", $this->_propDict)) {
            if (is_a($this->_propDict["startMenuLayoutXml"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["startMenuLayoutXml"];
            } else {
                $this->_propDict["startMenuLayoutXml"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["startMenuLayoutXml"]);
                return $this->_propDict["startMenuLayoutXml"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startMenuLayoutXml
    * Allows admins to override the default Start layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in Binary format.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The startMenuLayoutXml
    *
    * @return WindowsAssignedAccessProfile
    */
    public function setStartMenuLayoutXml($val)
    {
        $this->_propDict["startMenuLayoutXml"] = $val;
        return $this;
    }
    
    /**
    * Gets the userAccounts
    * The user accounts that will be locked to this kiosk configuration.
    *
    * @return string The userAccounts
    */
    public function getUserAccounts()
    {
        if (array_key_exists("userAccounts", $this->_propDict)) {
            return $this->_propDict["userAccounts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userAccounts
    * The user accounts that will be locked to this kiosk configuration.
    *
    * @param string $val The userAccounts
    *
    * @return WindowsAssignedAccessProfile
    */
    public function setUserAccounts($val)
    {
        $this->_propDict["userAccounts"] = $val;
        return $this;
    }
    
}
