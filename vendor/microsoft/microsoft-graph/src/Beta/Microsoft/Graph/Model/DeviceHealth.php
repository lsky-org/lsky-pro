<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceHealth File
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
* DeviceHealth class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceHealth extends Entity
{

    /**
    * Gets the lastConnectionTime
    * The last time the device was connected.
    *
    * @return \DateTime The lastConnectionTime
    */
    public function getLastConnectionTime()
    {
        if (array_key_exists("lastConnectionTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastConnectionTime"], "\DateTime")) {
                return $this->_propDict["lastConnectionTime"];
            } else {
                $this->_propDict["lastConnectionTime"] = new \DateTime($this->_propDict["lastConnectionTime"]);
                return $this->_propDict["lastConnectionTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastConnectionTime
    * The last time the device was connected.
    *
    * @param \DateTime $val The value to assign to the lastConnectionTime
    *
    * @return DeviceHealth The DeviceHealth
    */
    public function setLastConnectionTime($val)
    {
        $this->_propDict["lastConnectionTime"] = $val;
         return $this;
    }
}
