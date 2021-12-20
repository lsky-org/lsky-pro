<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsKioskSingleUWPApp File
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
* WindowsKioskSingleUWPApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsKioskSingleUWPApp extends WindowsKioskAppConfiguration
{

    /**
    * Gets the uwpApp
    * This is the only Application User Model ID (AUMID) that will be available to launch use while in Kiosk Mode
    *
    * @return WindowsKioskUWPApp The uwpApp
    */
    public function getUwpApp()
    {
        if (array_key_exists("uwpApp", $this->_propDict)) {
            if (is_a($this->_propDict["uwpApp"], "\Beta\Microsoft\Graph\Model\WindowsKioskUWPApp")) {
                return $this->_propDict["uwpApp"];
            } else {
                $this->_propDict["uwpApp"] = new WindowsKioskUWPApp($this->_propDict["uwpApp"]);
                return $this->_propDict["uwpApp"];
            }
        }
        return null;
    }

    /**
    * Sets the uwpApp
    * This is the only Application User Model ID (AUMID) that will be available to launch use while in Kiosk Mode
    *
    * @param WindowsKioskUWPApp $val The value to assign to the uwpApp
    *
    * @return WindowsKioskSingleUWPApp The WindowsKioskSingleUWPApp
    */
    public function setUwpApp($val)
    {
        $this->_propDict["uwpApp"] = $val;
         return $this;
    }
}
