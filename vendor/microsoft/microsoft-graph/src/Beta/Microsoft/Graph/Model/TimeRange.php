<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TimeRange File
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
* TimeRange class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TimeRange extends Entity
{

    /**
    * Gets the endTime
    * End time for the time range.
    *
    * @return TimeOfDay The endTime
    */
    public function getEndTime()
    {
        if (array_key_exists("endTime", $this->_propDict)) {
            if (is_a($this->_propDict["endTime"], "\Beta\Microsoft\Graph\Model\TimeOfDay")) {
                return $this->_propDict["endTime"];
            } else {
                $this->_propDict["endTime"] = new TimeOfDay($this->_propDict["endTime"]);
                return $this->_propDict["endTime"];
            }
        }
        return null;
    }

    /**
    * Sets the endTime
    * End time for the time range.
    *
    * @param TimeOfDay $val The value to assign to the endTime
    *
    * @return TimeRange The TimeRange
    */
    public function setEndTime($val)
    {
        $this->_propDict["endTime"] = $val;
         return $this;
    }

    /**
    * Gets the startTime
    * Start time for the time range.
    *
    * @return TimeOfDay The startTime
    */
    public function getStartTime()
    {
        if (array_key_exists("startTime", $this->_propDict)) {
            if (is_a($this->_propDict["startTime"], "\Beta\Microsoft\Graph\Model\TimeOfDay")) {
                return $this->_propDict["startTime"];
            } else {
                $this->_propDict["startTime"] = new TimeOfDay($this->_propDict["startTime"]);
                return $this->_propDict["startTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startTime
    * Start time for the time range.
    *
    * @param TimeOfDay $val The value to assign to the startTime
    *
    * @return TimeRange The TimeRange
    */
    public function setStartTime($val)
    {
        $this->_propDict["startTime"] = $val;
         return $this;
    }
}
