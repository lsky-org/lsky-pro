<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EventMessage File
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
* EventMessage class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EventMessage extends Message
{
    /**
    * Gets the endDateTime
    * The end time of the requested meeting.
    *
    * @return DateTimeTimeZone The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\Beta\Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new DateTimeTimeZone($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the endDateTime
    * The end time of the requested meeting.
    *
    * @param DateTimeTimeZone $val The endDateTime
    *
    * @return EventMessage
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the isAllDay
    *
    * @return bool The isAllDay
    */
    public function getIsAllDay()
    {
        if (array_key_exists("isAllDay", $this->_propDict)) {
            return $this->_propDict["isAllDay"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isAllDay
    *
    * @param bool $val The isAllDay
    *
    * @return EventMessage
    */
    public function setIsAllDay($val)
    {
        $this->_propDict["isAllDay"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isDelegated
    * True if this meeting request is accessible to a delegate, false otherwise. Default is false.
    *
    * @return bool The isDelegated
    */
    public function getIsDelegated()
    {
        if (array_key_exists("isDelegated", $this->_propDict)) {
            return $this->_propDict["isDelegated"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDelegated
    * True if this meeting request is accessible to a delegate, false otherwise. Default is false.
    *
    * @param bool $val The isDelegated
    *
    * @return EventMessage
    */
    public function setIsDelegated($val)
    {
        $this->_propDict["isDelegated"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isOutOfDate
    *
    * @return bool The isOutOfDate
    */
    public function getIsOutOfDate()
    {
        if (array_key_exists("isOutOfDate", $this->_propDict)) {
            return $this->_propDict["isOutOfDate"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isOutOfDate
    *
    * @param bool $val The isOutOfDate
    *
    * @return EventMessage
    */
    public function setIsOutOfDate($val)
    {
        $this->_propDict["isOutOfDate"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the location
    *
    * @return Location The location
    */
    public function getLocation()
    {
        if (array_key_exists("location", $this->_propDict)) {
            if (is_a($this->_propDict["location"], "\Beta\Microsoft\Graph\Model\Location")) {
                return $this->_propDict["location"];
            } else {
                $this->_propDict["location"] = new Location($this->_propDict["location"]);
                return $this->_propDict["location"];
            }
        }
        return null;
    }
    
    /**
    * Sets the location
    *
    * @param Location $val The location
    *
    * @return EventMessage
    */
    public function setLocation($val)
    {
        $this->_propDict["location"] = $val;
        return $this;
    }
    
    /**
    * Gets the meetingMessageType
    * The type of event message: none, meetingRequest, meetingCancelled, meetingAccepted, meetingTenativelyAccepted, meetingDeclined.
    *
    * @return MeetingMessageType The meetingMessageType
    */
    public function getMeetingMessageType()
    {
        if (array_key_exists("meetingMessageType", $this->_propDict)) {
            if (is_a($this->_propDict["meetingMessageType"], "\Beta\Microsoft\Graph\Model\MeetingMessageType")) {
                return $this->_propDict["meetingMessageType"];
            } else {
                $this->_propDict["meetingMessageType"] = new MeetingMessageType($this->_propDict["meetingMessageType"]);
                return $this->_propDict["meetingMessageType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the meetingMessageType
    * The type of event message: none, meetingRequest, meetingCancelled, meetingAccepted, meetingTenativelyAccepted, meetingDeclined.
    *
    * @param MeetingMessageType $val The meetingMessageType
    *
    * @return EventMessage
    */
    public function setMeetingMessageType($val)
    {
        $this->_propDict["meetingMessageType"] = $val;
        return $this;
    }
    
    /**
    * Gets the recurrence
    *
    * @return PatternedRecurrence The recurrence
    */
    public function getRecurrence()
    {
        if (array_key_exists("recurrence", $this->_propDict)) {
            if (is_a($this->_propDict["recurrence"], "\Beta\Microsoft\Graph\Model\PatternedRecurrence")) {
                return $this->_propDict["recurrence"];
            } else {
                $this->_propDict["recurrence"] = new PatternedRecurrence($this->_propDict["recurrence"]);
                return $this->_propDict["recurrence"];
            }
        }
        return null;
    }
    
    /**
    * Sets the recurrence
    *
    * @param PatternedRecurrence $val The recurrence
    *
    * @return EventMessage
    */
    public function setRecurrence($val)
    {
        $this->_propDict["recurrence"] = $val;
        return $this;
    }
    
    /**
    * Gets the startDateTime
    *
    * @return DateTimeTimeZone The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\Beta\Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new DateTimeTimeZone($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startDateTime
    *
    * @param DateTimeTimeZone $val The startDateTime
    *
    * @return EventMessage
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the type
    *
    * @return EventType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\Model\EventType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new EventType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }
    
    /**
    * Sets the type
    *
    * @param EventType $val The type
    *
    * @return EventMessage
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    
    /**
    * Gets the event
    * The event associated with the event message. The assumption for attendees or room resources is that the Calendar Attendant is set to automatically update the calendar with an event when meeting request event messages arrive. Navigation property.  Read-only.
    *
    * @return Event The event
    */
    public function getEvent()
    {
        if (array_key_exists("event", $this->_propDict)) {
            if (is_a($this->_propDict["event"], "\Beta\Microsoft\Graph\Model\Event")) {
                return $this->_propDict["event"];
            } else {
                $this->_propDict["event"] = new Event($this->_propDict["event"]);
                return $this->_propDict["event"];
            }
        }
        return null;
    }
    
    /**
    * Sets the event
    * The event associated with the event message. The assumption for attendees or room resources is that the Calendar Attendant is set to automatically update the calendar with an event when meeting request event messages arrive. Navigation property.  Read-only.
    *
    * @param Event $val The event
    *
    * @return EventMessage
    */
    public function setEvent($val)
    {
        $this->_propDict["event"] = $val;
        return $this;
    }
    
}
