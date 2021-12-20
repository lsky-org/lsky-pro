<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsKioskDesktopApp File
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
* WindowsKioskDesktopApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsKioskDesktopApp extends WindowsKioskAppBase
{
    /**
    * Gets the desktopApplicationId
    * Define the DesktopApplicationID of the app
    *
    * @return string The desktopApplicationId
    */
    public function getDesktopApplicationId()
    {
        if (array_key_exists("desktopApplicationId", $this->_propDict)) {
            return $this->_propDict["desktopApplicationId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the desktopApplicationId
    * Define the DesktopApplicationID of the app
    *
    * @param string $val The value of the desktopApplicationId
    *
    * @return WindowsKioskDesktopApp
    */
    public function setDesktopApplicationId($val)
    {
        $this->_propDict["desktopApplicationId"] = $val;
        return $this;
    }
    /**
    * Gets the desktopApplicationLinkPath
    * Define the DesktopApplicationLinkPath of the app
    *
    * @return string The desktopApplicationLinkPath
    */
    public function getDesktopApplicationLinkPath()
    {
        if (array_key_exists("desktopApplicationLinkPath", $this->_propDict)) {
            return $this->_propDict["desktopApplicationLinkPath"];
        } else {
            return null;
        }
    }

    /**
    * Sets the desktopApplicationLinkPath
    * Define the DesktopApplicationLinkPath of the app
    *
    * @param string $val The value of the desktopApplicationLinkPath
    *
    * @return WindowsKioskDesktopApp
    */
    public function setDesktopApplicationLinkPath($val)
    {
        $this->_propDict["desktopApplicationLinkPath"] = $val;
        return $this;
    }
    /**
    * Gets the path
    * Define the path of a desktop app
    *
    * @return string The path
    */
    public function getPath()
    {
        if (array_key_exists("path", $this->_propDict)) {
            return $this->_propDict["path"];
        } else {
            return null;
        }
    }

    /**
    * Sets the path
    * Define the path of a desktop app
    *
    * @param string $val The value of the path
    *
    * @return WindowsKioskDesktopApp
    */
    public function setPath($val)
    {
        $this->_propDict["path"] = $val;
        return $this;
    }
}
