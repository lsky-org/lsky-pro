<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingTimeSuggestion File
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
* MeetingTimeSuggestion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MeetingTimeSuggestion extends Entity
{

    /**
    * Gets the attendeeAvailability
    * An array that shows the availability status of each attendee for this meeting suggestion.
    *
    * @return AttendeeAvailability The attendeeAvailability
    */
    public function getAttendeeAvailability()
    {
        if (array_key_exists("attendeeAvailability", $this->_propDict)) {
            if (is_a($this->_propDict["attendeeAvailability"], "\Beta\Microsoft\Graph\Model\AttendeeAvailability")) {
                return $this->_propDict["attendeeAvailability"];
            } else {
                $this->_propDict["attendeeAvailability"] = new AttendeeAvailability($this->_propDict["attendeeAvailability"]);
                return $this->_propDict["attendeeAvailability"];
            }
        }
        return null;
    }

    /**
    * Sets the attendeeAvailability
    * An array that shows the availability status of each attendee for this meeting suggestion.
    *
    * @param AttendeeAvailability $val The value to assign to the attendeeAvailability
    *
    * @return MeetingTimeSuggestion The MeetingTimeSuggestion
    */
    public function setAttendeeAvailability($val)
    {
        $this->_propDict["attendeeAvailability"] = $val;
         return $this;
    }
    /**
    * Gets the confidence
    * A percentage that represents the likelhood of all the attendees attending.
    *
    * @return float The confidence
    */
    public function getConfidence()
    {
        if (array_key_exists("confidence", $this->_propDict)) {
            return $this->_propDict["confidence"];
        } else {
            return null;
        }
    }

    /**
    * Sets the confidence
    * A percentage that represents the likelhood of all the attendees attending.
    *
    * @param float $val The value of the confidence
    *
    * @return MeetingTimeSuggestion
    */
    public function setConfidence($val)
    {
        $this->_propDict["confidence"] = $val;
        return $this;
    }

    /**
    * Gets the locations
    * An array that specifies the name and geographic location of each meeting location for this meeting suggestion.
    *
    * @return Location The locations
    */
    public function getLocations()
    {
        if (array_key_exists("locations", $this->_propDict)) {
            if (is_a($this->_propDict["locations"], "\Beta\Microsoft\Graph\Model\Location")) {
                return $this->_propDict["locations"];
            } else {
                $this->_propDict["locations"] = new Location($this->_propDict["locations"]);
                return $this->_propDict["locations"];
            }
        }
        return null;
    }

    /**
    * Sets the locations
    * An array that specifies the name and geographic location of each meeting location for this meeting suggestion.
    *
    * @param Location $val The value to assign to the locations
    *
    * @return MeetingTimeSuggestion The MeetingTimeSuggestion
    */
    public function setLocations($val)
    {
        $this->_propDict["locations"] = $val;
         return $this;
    }

    /**
    * Gets the meetingTimeSlot
    * A time period suggested for the meeting.
    *
    * @return TimeSlot The meetingTimeSlot
    */
    public function getMeetingTimeSlot()
    {
        if (array_key_exists("meetingTimeSlot", $this->_propDict)) {
            if (is_a($this->_propDict["meetingTimeSlot"], "\Beta\Microsoft\Graph\Model\TimeSlot")) {
                return $this->_propDict["meetingTimeSlot"];
            } else {
                $this->_propDict["meetingTimeSlot"] = new TimeSlot($this->_propDict["meetingTimeSlot"]);
                return $this->_propDict["meetingTimeSlot"];
            }
        }
        return null;
    }

    /**
    * Sets the meetingTimeSlot
    * A time period suggested for the meeting.
    *
    * @param TimeSlot $val The value to assign to the meetingTimeSlot
    *
    * @return MeetingTimeSuggestion The MeetingTimeSuggestion
    */
    public function setMeetingTimeSlot($val)
    {
        $this->_propDict["meetingTimeSlot"] = $val;
         return $this;
    }
    /**
    * Gets the order
    * Order of meeting time suggestions sorted by their computed confidence value from high to low, then by chronology if there are suggestions with the same confidence.
    *
    * @return int The order
    */
    public function getOrder()
    {
        if (array_key_exists("order", $this->_propDict)) {
            return $this->_propDict["order"];
        } else {
            return null;
        }
    }

    /**
    * Sets the order
    * Order of meeting time suggestions sorted by their computed confidence value from high to low, then by chronology if there are suggestions with the same confidence.
    *
    * @param int $val The value of the order
    *
    * @return MeetingTimeSuggestion
    */
    public function setOrder($val)
    {
        $this->_propDict["order"] = $val;
        return $this;
    }

    /**
    * Gets the organizerAvailability
    * Availability of the meeting organizer for this meeting suggestion. Possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
    *
    * @return FreeBusyStatus The organizerAvailability
    */
    public function getOrganizerAvailability()
    {
        if (array_key_exists("organizerAvailability", $this->_propDict)) {
            if (is_a($this->_propDict["organizerAvailability"], "\Beta\Microsoft\Graph\Model\FreeBusyStatus")) {
                return $this->_propDict["organizerAvailability"];
            } else {
                $this->_propDict["organizerAvailability"] = new FreeBusyStatus($this->_propDict["organizerAvailability"]);
                return $this->_propDict["organizerAvailability"];
            }
        }
        return null;
    }

    /**
    * Sets the organizerAvailability
    * Availability of the meeting organizer for this meeting suggestion. Possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
    *
    * @param FreeBusyStatus $val The value to assign to the organizerAvailability
    *
    * @return MeetingTimeSuggestion The MeetingTimeSuggestion
    */
    public function setOrganizerAvailability($val)
    {
        $this->_propDict["organizerAvailability"] = $val;
         return $this;
    }
    /**
    * Gets the suggestionReason
    * Reason for suggesting the meeting time.
    *
    * @return string The suggestionReason
    */
    public function getSuggestionReason()
    {
        if (array_key_exists("suggestionReason", $this->_propDict)) {
            return $this->_propDict["suggestionReason"];
        } else {
            return null;
        }
    }

    /**
    * Sets the suggestionReason
    * Reason for suggesting the meeting time.
    *
    * @param string $val The value of the suggestionReason
    *
    * @return MeetingTimeSuggestion
    */
    public function setSuggestionReason($val)
    {
        $this->_propDict["suggestionReason"] = $val;
        return $this;
    }
}
