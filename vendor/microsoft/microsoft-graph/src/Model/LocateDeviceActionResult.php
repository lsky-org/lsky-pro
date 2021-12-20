<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LocateDeviceActionResult File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* LocateDeviceActionResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LocateDeviceActionResult extends DeviceActionResult
{

    /**
    * Gets the deviceLocation
    * device location
    *
    * @return DeviceGeoLocation The deviceLocation
    */
    public function getDeviceLocation()
    {
        if (array_key_exists("deviceLocation", $this->_propDict)) {
            if (is_a($this->_propDict["deviceLocation"], "\Microsoft\Graph\Model\DeviceGeoLocation")) {
                return $this->_propDict["deviceLocation"];
            } else {
                $this->_propDict["deviceLocation"] = new DeviceGeoLocation($this->_propDict["deviceLocation"]);
                return $this->_propDict["deviceLocation"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceLocation
    * device location
    *
    * @param DeviceGeoLocation $val The value to assign to the deviceLocation
    *
    * @return LocateDeviceActionResult The LocateDeviceActionResult
    */
    public function setDeviceLocation($val)
    {
        $this->_propDict["deviceLocation"] = $val;
         return $this;
    }
}
