<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsKioskSingleWin32App File
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
* WindowsKioskSingleWin32App class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsKioskSingleWin32App extends WindowsKioskAppConfiguration
{

    /**
    * Gets the win32App
    * This is the win32 app that will be available to launch use while in Kiosk Mode
    *
    * @return WindowsKioskWin32App The win32App
    */
    public function getWin32App()
    {
        if (array_key_exists("win32App", $this->_propDict)) {
            if (is_a($this->_propDict["win32App"], "\Beta\Microsoft\Graph\Model\WindowsKioskWin32App")) {
                return $this->_propDict["win32App"];
            } else {
                $this->_propDict["win32App"] = new WindowsKioskWin32App($this->_propDict["win32App"]);
                return $this->_propDict["win32App"];
            }
        }
        return null;
    }

    /**
    * Sets the win32App
    * This is the win32 app that will be available to launch use while in Kiosk Mode
    *
    * @param WindowsKioskWin32App $val The value to assign to the win32App
    *
    * @return WindowsKioskSingleWin32App The WindowsKioskSingleWin32App
    */
    public function setWin32App($val)
    {
        $this->_propDict["win32App"] = $val;
         return $this;
    }
}
