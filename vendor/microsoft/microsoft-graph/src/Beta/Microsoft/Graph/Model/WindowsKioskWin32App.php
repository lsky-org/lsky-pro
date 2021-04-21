<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsKioskWin32App File
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
* WindowsKioskWin32App class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsKioskWin32App extends WindowsKioskAppBase
{
    /**
    * Gets the classicAppPath
    * This is the classicapppath to be used by v4 Win32 app while in Kiosk Mode
    *
    * @return string The classicAppPath
    */
    public function getClassicAppPath()
    {
        if (array_key_exists("classicAppPath", $this->_propDict)) {
            return $this->_propDict["classicAppPath"];
        } else {
            return null;
        }
    }

    /**
    * Sets the classicAppPath
    * This is the classicapppath to be used by v4 Win32 app while in Kiosk Mode
    *
    * @param string $val The value of the classicAppPath
    *
    * @return WindowsKioskWin32App
    */
    public function setClassicAppPath($val)
    {
        $this->_propDict["classicAppPath"] = $val;
        return $this;
    }
    /**
    * Gets the edgeKiosk
    * Edge kiosk (url) for Edge kiosk mode
    *
    * @return string The edgeKiosk
    */
    public function getEdgeKiosk()
    {
        if (array_key_exists("edgeKiosk", $this->_propDict)) {
            return $this->_propDict["edgeKiosk"];
        } else {
            return null;
        }
    }

    /**
    * Sets the edgeKiosk
    * Edge kiosk (url) for Edge kiosk mode
    *
    * @param string $val The value of the edgeKiosk
    *
    * @return WindowsKioskWin32App
    */
    public function setEdgeKiosk($val)
    {
        $this->_propDict["edgeKiosk"] = $val;
        return $this;
    }
    /**
    * Gets the edgeKioskIdleTimeoutMinutes
    * Edge kiosk idle timeout in minutes for Edge kiosk mode. Valid values 0 to 1440
    *
    * @return int The edgeKioskIdleTimeoutMinutes
    */
    public function getEdgeKioskIdleTimeoutMinutes()
    {
        if (array_key_exists("edgeKioskIdleTimeoutMinutes", $this->_propDict)) {
            return $this->_propDict["edgeKioskIdleTimeoutMinutes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the edgeKioskIdleTimeoutMinutes
    * Edge kiosk idle timeout in minutes for Edge kiosk mode. Valid values 0 to 1440
    *
    * @param int $val The value of the edgeKioskIdleTimeoutMinutes
    *
    * @return WindowsKioskWin32App
    */
    public function setEdgeKioskIdleTimeoutMinutes($val)
    {
        $this->_propDict["edgeKioskIdleTimeoutMinutes"] = $val;
        return $this;
    }

    /**
    * Gets the edgeKioskType
    * Edge kiosk type for Edge kiosk mode. Possible values are: publicBrowsing, fullScreen.
    *
    * @return WindowsEdgeKioskType The edgeKioskType
    */
    public function getEdgeKioskType()
    {
        if (array_key_exists("edgeKioskType", $this->_propDict)) {
            if (is_a($this->_propDict["edgeKioskType"], "\Beta\Microsoft\Graph\Model\WindowsEdgeKioskType")) {
                return $this->_propDict["edgeKioskType"];
            } else {
                $this->_propDict["edgeKioskType"] = new WindowsEdgeKioskType($this->_propDict["edgeKioskType"]);
                return $this->_propDict["edgeKioskType"];
            }
        }
        return null;
    }

    /**
    * Sets the edgeKioskType
    * Edge kiosk type for Edge kiosk mode. Possible values are: publicBrowsing, fullScreen.
    *
    * @param WindowsEdgeKioskType $val The value to assign to the edgeKioskType
    *
    * @return WindowsKioskWin32App The WindowsKioskWin32App
    */
    public function setEdgeKioskType($val)
    {
        $this->_propDict["edgeKioskType"] = $val;
         return $this;
    }
    /**
    * Gets the edgeNoFirstRun
    * Edge first run flag for Edge kiosk mode
    *
    * @return bool The edgeNoFirstRun
    */
    public function getEdgeNoFirstRun()
    {
        if (array_key_exists("edgeNoFirstRun", $this->_propDict)) {
            return $this->_propDict["edgeNoFirstRun"];
        } else {
            return null;
        }
    }

    /**
    * Sets the edgeNoFirstRun
    * Edge first run flag for Edge kiosk mode
    *
    * @param bool $val The value of the edgeNoFirstRun
    *
    * @return WindowsKioskWin32App
    */
    public function setEdgeNoFirstRun($val)
    {
        $this->_propDict["edgeNoFirstRun"] = $val;
        return $this;
    }
}
