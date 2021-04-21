<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceHealthScriptTimeSchedule File
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
* DeviceHealthScriptTimeSchedule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceHealthScriptTimeSchedule extends DeviceHealthScriptRunSchedule
{

    /**
    * Gets the time
    * At what time the script is scheduled to run. This collection can contain a maximum of 20 elements.
    *
    * @return TimeOfDay The time
    */
    public function getTime()
    {
        if (array_key_exists("time", $this->_propDict)) {
            if (is_a($this->_propDict["time"], "\Beta\Microsoft\Graph\Model\TimeOfDay")) {
                return $this->_propDict["time"];
            } else {
                $this->_propDict["time"] = new TimeOfDay($this->_propDict["time"]);
                return $this->_propDict["time"];
            }
        }
        return null;
    }

    /**
    * Sets the time
    * At what time the script is scheduled to run. This collection can contain a maximum of 20 elements.
    *
    * @param TimeOfDay $val The value to assign to the time
    *
    * @return DeviceHealthScriptTimeSchedule The DeviceHealthScriptTimeSchedule
    */
    public function setTime($val)
    {
        $this->_propDict["time"] = $val;
         return $this;
    }
    /**
    * Gets the useUtc
    * Indicate if the time is Utc or client local time.
    *
    * @return bool The useUtc
    */
    public function getUseUtc()
    {
        if (array_key_exists("useUtc", $this->_propDict)) {
            return $this->_propDict["useUtc"];
        } else {
            return null;
        }
    }

    /**
    * Sets the useUtc
    * Indicate if the time is Utc or client local time.
    *
    * @param bool $val The value of the useUtc
    *
    * @return DeviceHealthScriptTimeSchedule
    */
    public function setUseUtc($val)
    {
        $this->_propDict["useUtc"] = $val;
        return $this;
    }
}
