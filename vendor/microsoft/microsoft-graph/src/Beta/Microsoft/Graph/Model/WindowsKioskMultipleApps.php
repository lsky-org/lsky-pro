<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsKioskMultipleApps File
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
* WindowsKioskMultipleApps class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsKioskMultipleApps extends WindowsKioskAppConfiguration
{
    /**
    * Gets the allowAccessToDownloadsFolder
    * This setting allows access to Downloads folder in file explorer.
    *
    * @return bool The allowAccessToDownloadsFolder
    */
    public function getAllowAccessToDownloadsFolder()
    {
        if (array_key_exists("allowAccessToDownloadsFolder", $this->_propDict)) {
            return $this->_propDict["allowAccessToDownloadsFolder"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowAccessToDownloadsFolder
    * This setting allows access to Downloads folder in file explorer.
    *
    * @param bool $val The value of the allowAccessToDownloadsFolder
    *
    * @return WindowsKioskMultipleApps
    */
    public function setAllowAccessToDownloadsFolder($val)
    {
        $this->_propDict["allowAccessToDownloadsFolder"] = $val;
        return $this;
    }

    /**
    * Gets the apps
    * These are the only Windows Store Apps that will be available to launch from the Start menu. This collection can contain a maximum of 128 elements.
    *
    * @return WindowsKioskAppBase The apps
    */
    public function getApps()
    {
        if (array_key_exists("apps", $this->_propDict)) {
            if (is_a($this->_propDict["apps"], "\Beta\Microsoft\Graph\Model\WindowsKioskAppBase")) {
                return $this->_propDict["apps"];
            } else {
                $this->_propDict["apps"] = new WindowsKioskAppBase($this->_propDict["apps"]);
                return $this->_propDict["apps"];
            }
        }
        return null;
    }

    /**
    * Sets the apps
    * These are the only Windows Store Apps that will be available to launch from the Start menu. This collection can contain a maximum of 128 elements.
    *
    * @param WindowsKioskAppBase $val The value to assign to the apps
    *
    * @return WindowsKioskMultipleApps The WindowsKioskMultipleApps
    */
    public function setApps($val)
    {
        $this->_propDict["apps"] = $val;
         return $this;
    }
    /**
    * Gets the disallowDesktopApps
    * This setting indicates that desktop apps are allowed. Default to true.
    *
    * @return bool The disallowDesktopApps
    */
    public function getDisallowDesktopApps()
    {
        if (array_key_exists("disallowDesktopApps", $this->_propDict)) {
            return $this->_propDict["disallowDesktopApps"];
        } else {
            return null;
        }
    }

    /**
    * Sets the disallowDesktopApps
    * This setting indicates that desktop apps are allowed. Default to true.
    *
    * @param bool $val The value of the disallowDesktopApps
    *
    * @return WindowsKioskMultipleApps
    */
    public function setDisallowDesktopApps($val)
    {
        $this->_propDict["disallowDesktopApps"] = $val;
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
    * @param bool $val The value of the showTaskBar
    *
    * @return WindowsKioskMultipleApps
    */
    public function setShowTaskBar($val)
    {
        $this->_propDict["showTaskBar"] = $val;
        return $this;
    }

    /**
    * Gets the startMenuLayoutXml
    * Allows admins to override the default Start layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in Binary format.
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
    * Allows admins to override the default Start layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in Binary format.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The value to assign to the startMenuLayoutXml
    *
    * @return WindowsKioskMultipleApps The WindowsKioskMultipleApps
    */
    public function setStartMenuLayoutXml($val)
    {
        $this->_propDict["startMenuLayoutXml"] = $val;
         return $this;
    }
}
