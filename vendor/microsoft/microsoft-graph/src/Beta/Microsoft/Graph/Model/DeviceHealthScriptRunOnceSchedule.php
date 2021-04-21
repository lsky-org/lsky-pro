<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceHealthScriptRunOnceSchedule File
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
* DeviceHealthScriptRunOnceSchedule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceHealthScriptRunOnceSchedule extends DeviceHealthScriptTimeSchedule
{

    /**
    * Gets the date
    * The date the script is scheduled to run. This collection can contain a maximum of 20 elements.
    *
    * @return \DateTime The date
    */
    public function getDate()
    {
        if (array_key_exists("date", $this->_propDict)) {
            if (is_a($this->_propDict["date"], "\DateTime")) {
                return $this->_propDict["date"];
            } else {
                $this->_propDict["date"] = new \DateTime($this->_propDict["date"]);
                return $this->_propDict["date"];
            }
        }
        return null;
    }

    /**
    * Sets the date
    * The date the script is scheduled to run. This collection can contain a maximum of 20 elements.
    *
    * @param \DateTime $val The value to assign to the date
    *
    * @return DeviceHealthScriptRunOnceSchedule The DeviceHealthScriptRunOnceSchedule
    */
    public function setDate($val)
    {
        $this->_propDict["date"] = $val;
         return $this;
    }
}
