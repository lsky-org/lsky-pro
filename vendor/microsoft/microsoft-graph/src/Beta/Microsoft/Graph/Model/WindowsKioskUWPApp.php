<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsKioskUWPApp File
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
* WindowsKioskUWPApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsKioskUWPApp extends WindowsKioskAppBase
{
    /**
    * Gets the appId
    * This references an Intune App that will be target to the same assignments as Kiosk configuration
    *
    * @return string The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appId
    * This references an Intune App that will be target to the same assignments as Kiosk configuration
    *
    * @param string $val The value of the appId
    *
    * @return WindowsKioskUWPApp
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }
    /**
    * Gets the appUserModelId
    * This is the only Application User Model ID (AUMID) that will be available to launch use while in Kiosk Mode
    *
    * @return string The appUserModelId
    */
    public function getAppUserModelId()
    {
        if (array_key_exists("appUserModelId", $this->_propDict)) {
            return $this->_propDict["appUserModelId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appUserModelId
    * This is the only Application User Model ID (AUMID) that will be available to launch use while in Kiosk Mode
    *
    * @param string $val The value of the appUserModelId
    *
    * @return WindowsKioskUWPApp
    */
    public function setAppUserModelId($val)
    {
        $this->_propDict["appUserModelId"] = $val;
        return $this;
    }
    /**
    * Gets the containedAppId
    * This references an contained App from an Intune App
    *
    * @return string The containedAppId
    */
    public function getContainedAppId()
    {
        if (array_key_exists("containedAppId", $this->_propDict)) {
            return $this->_propDict["containedAppId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the containedAppId
    * This references an contained App from an Intune App
    *
    * @param string $val The value of the containedAppId
    *
    * @return WindowsKioskUWPApp
    */
    public function setContainedAppId($val)
    {
        $this->_propDict["containedAppId"] = $val;
        return $this;
    }
}
