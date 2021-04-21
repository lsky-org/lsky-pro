<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ScheduleItem File
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
* ScheduleItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ScheduleItem extends Entity
{

    /**
    * Gets the end
    * The date, time, and time zone that the corresponding event ends.
    *
    * @return DateTimeTimeZone The end
    */
    public function getEnd()
    {
        if (array_key_exists("end", $this->_propDict)) {
            if (is_a($this->_propDict["end"], "\Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["end"];
            } else {
                $this->_propDict["end"] = new DateTimeTimeZone($this->_propDict["end"]);
                return $this->_propDict["end"];
            }
        }
        return null;
    }

    /**
    * Sets the end
    * The date, time, and time zone that the corresponding event ends.
    *
    * @param DateTimeTimeZone $val The value to assign to the end
    *
    * @return ScheduleItem The ScheduleItem
    */
    public function setEnd($val)
    {
        $this->_propDict["end"] = $val;
         return $this;
    }
    /**
    * Gets the isPrivate
    * The sensitivity of the corresponding event. True if the event is marked private, false otherwise. Optional.
    *
    * @return bool The isPrivate
    */
    public function getIsPrivate()
    {
        if (array_key_exists("isPrivate", $this->_propDict)) {
            return $this->_propDict["isPrivate"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isPrivate
    * The sensitivity of the corresponding event. True if the event is marked private, false otherwise. Optional.
    *
    * @param bool $val The value of the isPrivate
    *
    * @return ScheduleItem
    */
    public function setIsPrivate($val)
    {
        $this->_propDict["isPrivate"] = $val;
        return $this;
    }
    /**
    * Gets the location
    * The location where the corresponding event is held or attended from. Optional.
    *
    * @return string The location
    */
    public function getLocation()
    {
        if (array_key_exists("location", $this->_propDict)) {
            return $this->_propDict["location"];
        } else {
            return null;
        }
    }

    /**
    * Sets the location
    * The location where the corresponding event is held or attended from. Optional.
    *
    * @param string $val The value of the location
    *
    * @return ScheduleItem
    */
    public function setLocation($val)
    {
        $this->_propDict["location"] = $val;
        return $this;
    }

    /**
    * Gets the start
    * The date, time, and time zone that the corresponding event starts.
    *
    * @return DateTimeTimeZone The start
    */
    public function getStart()
    {
        if (array_key_exists("start", $this->_propDict)) {
            if (is_a($this->_propDict["start"], "\Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["start"];
            } else {
                $this->_propDict["start"] = new DateTimeTimeZone($this->_propDict["start"]);
                return $this->_propDict["start"];
            }
        }
        return null;
    }

    /**
    * Sets the start
    * The date, time, and time zone that the corresponding event starts.
    *
    * @param DateTimeTimeZone $val The value to assign to the start
    *
    * @return ScheduleItem The ScheduleItem
    */
    public function setStart($val)
    {
        $this->_propDict["start"] = $val;
         return $this;
    }

    /**
    * Gets the status
    * The availability status of the user or resource during the corresponding event. The possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
    *
    * @return FreeBusyStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\FreeBusyStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new FreeBusyStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * The availability status of the user or resource during the corresponding event. The possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
    *
    * @param FreeBusyStatus $val The value to assign to the status
    *
    * @return ScheduleItem The ScheduleItem
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
    /**
    * Gets the subject
    * The corresponding event's subject line. Optional.
    *
    * @return string The subject
    */
    public function getSubject()
    {
        if (array_key_exists("subject", $this->_propDict)) {
            return $this->_propDict["subject"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subject
    * The corresponding event's subject line. Optional.
    *
    * @param string $val The value of the subject
    *
    * @return ScheduleItem
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }
}
