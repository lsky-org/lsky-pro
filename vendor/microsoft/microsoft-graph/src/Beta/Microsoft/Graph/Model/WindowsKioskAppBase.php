<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsKioskAppBase File
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
* WindowsKioskAppBase class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsKioskAppBase extends Entity
{

    /**
    * Gets the appType
    * The app type. Possible values are: unknown, store, desktop, aumId.
    *
    * @return WindowsKioskAppType The appType
    */
    public function getAppType()
    {
        if (array_key_exists("appType", $this->_propDict)) {
            if (is_a($this->_propDict["appType"], "\Beta\Microsoft\Graph\Model\WindowsKioskAppType")) {
                return $this->_propDict["appType"];
            } else {
                $this->_propDict["appType"] = new WindowsKioskAppType($this->_propDict["appType"]);
                return $this->_propDict["appType"];
            }
        }
        return null;
    }

    /**
    * Sets the appType
    * The app type. Possible values are: unknown, store, desktop, aumId.
    *
    * @param WindowsKioskAppType $val The value to assign to the appType
    *
    * @return WindowsKioskAppBase The WindowsKioskAppBase
    */
    public function setAppType($val)
    {
        $this->_propDict["appType"] = $val;
         return $this;
    }
    /**
    * Gets the autoLaunch
    * Allow the app to be auto-launched in multi-app kiosk mode
    *
    * @return bool The autoLaunch
    */
    public function getAutoLaunch()
    {
        if (array_key_exists("autoLaunch", $this->_propDict)) {
            return $this->_propDict["autoLaunch"];
        } else {
            return null;
        }
    }

    /**
    * Sets the autoLaunch
    * Allow the app to be auto-launched in multi-app kiosk mode
    *
    * @param bool $val The value of the autoLaunch
    *
    * @return WindowsKioskAppBase
    */
    public function setAutoLaunch($val)
    {
        $this->_propDict["autoLaunch"] = $val;
        return $this;
    }
    /**
    * Gets the name
    * Represents the friendly name of an app
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * Represents the friendly name of an app
    *
    * @param string $val The value of the name
    *
    * @return WindowsKioskAppBase
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the startLayoutTileSize
    * The app tile size for the start layout. Possible values are: hidden, small, medium, wide, large.
    *
    * @return WindowsAppStartLayoutTileSize The startLayoutTileSize
    */
    public function getStartLayoutTileSize()
    {
        if (array_key_exists("startLayoutTileSize", $this->_propDict)) {
            if (is_a($this->_propDict["startLayoutTileSize"], "\Beta\Microsoft\Graph\Model\WindowsAppStartLayoutTileSize")) {
                return $this->_propDict["startLayoutTileSize"];
            } else {
                $this->_propDict["startLayoutTileSize"] = new WindowsAppStartLayoutTileSize($this->_propDict["startLayoutTileSize"]);
                return $this->_propDict["startLayoutTileSize"];
            }
        }
        return null;
    }

    /**
    * Sets the startLayoutTileSize
    * The app tile size for the start layout. Possible values are: hidden, small, medium, wide, large.
    *
    * @param WindowsAppStartLayoutTileSize $val The value to assign to the startLayoutTileSize
    *
    * @return WindowsKioskAppBase The WindowsKioskAppBase
    */
    public function setStartLayoutTileSize($val)
    {
        $this->_propDict["startLayoutTileSize"] = $val;
         return $this;
    }
}
