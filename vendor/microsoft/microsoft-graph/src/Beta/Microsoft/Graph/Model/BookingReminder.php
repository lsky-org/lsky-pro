<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BookingReminder File
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
* BookingReminder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BookingReminder extends Entity
{
    /**
    * Gets the message
    * The message in the reminder.
    *
    * @return string The message
    */
    public function getMessage()
    {
        if (array_key_exists("message", $this->_propDict)) {
            return $this->_propDict["message"];
        } else {
            return null;
        }
    }

    /**
    * Sets the message
    * The message in the reminder.
    *
    * @param string $val The value of the message
    *
    * @return BookingReminder
    */
    public function setMessage($val)
    {
        $this->_propDict["message"] = $val;
        return $this;
    }

    /**
    * Gets the offset
    * The amount of time before the start of an appointment that the reminder should be sent. It's denoted in ISO 8601 format.
    *
    * @return Duration The offset
    */
    public function getOffset()
    {
        if (array_key_exists("offset", $this->_propDict)) {
            if (is_a($this->_propDict["offset"], "\Beta\Microsoft\Graph\Model\Duration")) {
                return $this->_propDict["offset"];
            } else {
                $this->_propDict["offset"] = new Duration($this->_propDict["offset"]);
                return $this->_propDict["offset"];
            }
        }
        return null;
    }

    /**
    * Sets the offset
    * The amount of time before the start of an appointment that the reminder should be sent. It's denoted in ISO 8601 format.
    *
    * @param Duration $val The value to assign to the offset
    *
    * @return BookingReminder The BookingReminder
    */
    public function setOffset($val)
    {
        $this->_propDict["offset"] = $val;
         return $this;
    }

    /**
    * Gets the recipients
    * The persons who shouold receive the reminder. Possible values are: allAttendees, staff, customer.
    *
    * @return BookingReminderRecipients The recipients
    */
    public function getRecipients()
    {
        if (array_key_exists("recipients", $this->_propDict)) {
            if (is_a($this->_propDict["recipients"], "\Beta\Microsoft\Graph\Model\BookingReminderRecipients")) {
                return $this->_propDict["recipients"];
            } else {
                $this->_propDict["recipients"] = new BookingReminderRecipients($this->_propDict["recipients"]);
                return $this->_propDict["recipients"];
            }
        }
        return null;
    }

    /**
    * Sets the recipients
    * The persons who shouold receive the reminder. Possible values are: allAttendees, staff, customer.
    *
    * @param BookingReminderRecipients $val The value to assign to the recipients
    *
    * @return BookingReminder The BookingReminder
    */
    public function setRecipients($val)
    {
        $this->_propDict["recipients"] = $val;
         return $this;
    }
}
