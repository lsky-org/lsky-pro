<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Reminder File
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
* Reminder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Reminder extends Entity
{
    /**
    * Gets the changeKey
    * Identifies the version of the reminder. Every time the reminder is changed, changeKey changes as well. This allows Exchange to apply changes to the correct version of the object.
    *
    * @return string The changeKey
    */
    public function getChangeKey()
    {
        if (array_key_exists("changeKey", $this->_propDict)) {
            return $this->_propDict["changeKey"];
        } else {
            return null;
        }
    }

    /**
    * Sets the changeKey
    * Identifies the version of the reminder. Every time the reminder is changed, changeKey changes as well. This allows Exchange to apply changes to the correct version of the object.
    *
    * @param string $val The value of the changeKey
    *
    * @return Reminder
    */
    public function setChangeKey($val)
    {
        $this->_propDict["changeKey"] = $val;
        return $this;
    }

    /**
    * Gets the eventEndTime
    * The date, time and time zone that the event ends.
    *
    * @return DateTimeTimeZone The eventEndTime
    */
    public function getEventEndTime()
    {
        if (array_key_exists("eventEndTime", $this->_propDict)) {
            if (is_a($this->_propDict["eventEndTime"], "\Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["eventEndTime"];
            } else {
                $this->_propDict["eventEndTime"] = new DateTimeTimeZone($this->_propDict["eventEndTime"]);
                return $this->_propDict["eventEndTime"];
            }
        }
        return null;
    }

    /**
    * Sets the eventEndTime
    * The date, time and time zone that the event ends.
    *
    * @param DateTimeTimeZone $val The value to assign to the eventEndTime
    *
    * @return Reminder The Reminder
    */
    public function setEventEndTime($val)
    {
        $this->_propDict["eventEndTime"] = $val;
         return $this;
    }
    /**
    * Gets the eventId
    * The unique ID of the event. Read only.
    *
    * @return string The eventId
    */
    public function getEventId()
    {
        if (array_key_exists("eventId", $this->_propDict)) {
            return $this->_propDict["eventId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the eventId
    * The unique ID of the event. Read only.
    *
    * @param string $val The value of the eventId
    *
    * @return Reminder
    */
    public function setEventId($val)
    {
        $this->_propDict["eventId"] = $val;
        return $this;
    }

    /**
    * Gets the eventLocation
    * The location of the event.
    *
    * @return Location The eventLocation
    */
    public function getEventLocation()
    {
        if (array_key_exists("eventLocation", $this->_propDict)) {
            if (is_a($this->_propDict["eventLocation"], "\Microsoft\Graph\Model\Location")) {
                return $this->_propDict["eventLocation"];
            } else {
                $this->_propDict["eventLocation"] = new Location($this->_propDict["eventLocation"]);
                return $this->_propDict["eventLocation"];
            }
        }
        return null;
    }

    /**
    * Sets the eventLocation
    * The location of the event.
    *
    * @param Location $val The value to assign to the eventLocation
    *
    * @return Reminder The Reminder
    */
    public function setEventLocation($val)
    {
        $this->_propDict["eventLocation"] = $val;
         return $this;
    }

    /**
    * Gets the eventStartTime
    * The date, time, and time zone that the event starts.
    *
    * @return DateTimeTimeZone The eventStartTime
    */
    public function getEventStartTime()
    {
        if (array_key_exists("eventStartTime", $this->_propDict)) {
            if (is_a($this->_propDict["eventStartTime"], "\Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["eventStartTime"];
            } else {
                $this->_propDict["eventStartTime"] = new DateTimeTimeZone($this->_propDict["eventStartTime"]);
                return $this->_propDict["eventStartTime"];
            }
        }
        return null;
    }

    /**
    * Sets the eventStartTime
    * The date, time, and time zone that the event starts.
    *
    * @param DateTimeTimeZone $val The value to assign to the eventStartTime
    *
    * @return Reminder The Reminder
    */
    public function setEventStartTime($val)
    {
        $this->_propDict["eventStartTime"] = $val;
         return $this;
    }
    /**
    * Gets the eventSubject
    * The text of the event's subject line.
    *
    * @return string The eventSubject
    */
    public function getEventSubject()
    {
        if (array_key_exists("eventSubject", $this->_propDict)) {
            return $this->_propDict["eventSubject"];
        } else {
            return null;
        }
    }

    /**
    * Sets the eventSubject
    * The text of the event's subject line.
    *
    * @param string $val The value of the eventSubject
    *
    * @return Reminder
    */
    public function setEventSubject($val)
    {
        $this->_propDict["eventSubject"] = $val;
        return $this;
    }
    /**
    * Gets the eventWebLink
    * The URL to open the event in Outlook on the web.The event will open in the browser if you are logged in to your mailbox via Outlook on the web. You will be prompted to login if you are not already logged in with the browser.This URL cannot be accessed from within an iFrame.
    *
    * @return string The eventWebLink
    */
    public function getEventWebLink()
    {
        if (array_key_exists("eventWebLink", $this->_propDict)) {
            return $this->_propDict["eventWebLink"];
        } else {
            return null;
        }
    }

    /**
    * Sets the eventWebLink
    * The URL to open the event in Outlook on the web.The event will open in the browser if you are logged in to your mailbox via Outlook on the web. You will be prompted to login if you are not already logged in with the browser.This URL cannot be accessed from within an iFrame.
    *
    * @param string $val The value of the eventWebLink
    *
    * @return Reminder
    */
    public function setEventWebLink($val)
    {
        $this->_propDict["eventWebLink"] = $val;
        return $this;
    }

    /**
    * Gets the reminderFireTime
    * The date, time, and time zone that the reminder is set to occur.
    *
    * @return DateTimeTimeZone The reminderFireTime
    */
    public function getReminderFireTime()
    {
        if (array_key_exists("reminderFireTime", $this->_propDict)) {
            if (is_a($this->_propDict["reminderFireTime"], "\Microsoft\Graph\Model\DateTimeTimeZone")) {
                return $this->_propDict["reminderFireTime"];
            } else {
                $this->_propDict["reminderFireTime"] = new DateTimeTimeZone($this->_propDict["reminderFireTime"]);
                return $this->_propDict["reminderFireTime"];
            }
        }
        return null;
    }

    /**
    * Sets the reminderFireTime
    * The date, time, and time zone that the reminder is set to occur.
    *
    * @param DateTimeTimeZone $val The value to assign to the reminderFireTime
    *
    * @return Reminder The Reminder
    */
    public function setReminderFireTime($val)
    {
        $this->_propDict["reminderFireTime"] = $val;
         return $this;
    }
}
