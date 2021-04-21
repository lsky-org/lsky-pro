<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingTimeSuggestionsResult File
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
* MeetingTimeSuggestionsResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MeetingTimeSuggestionsResult extends Entity
{
    /**
    * Gets the emptySuggestionsReason
    * A reason for not returning any meeting suggestions. Possible values are: attendeesUnavailable, attendeesUnavailableOrUnknown, locationsUnavailable, organizerUnavailable, or unknown. This property is an empty string if the meetingTimeSuggestions property does include any meeting suggestions.
    *
    * @return string The emptySuggestionsReason
    */
    public function getEmptySuggestionsReason()
    {
        if (array_key_exists("emptySuggestionsReason", $this->_propDict)) {
            return $this->_propDict["emptySuggestionsReason"];
        } else {
            return null;
        }
    }

    /**
    * Sets the emptySuggestionsReason
    * A reason for not returning any meeting suggestions. Possible values are: attendeesUnavailable, attendeesUnavailableOrUnknown, locationsUnavailable, organizerUnavailable, or unknown. This property is an empty string if the meetingTimeSuggestions property does include any meeting suggestions.
    *
    * @param string $val The value of the emptySuggestionsReason
    *
    * @return MeetingTimeSuggestionsResult
    */
    public function setEmptySuggestionsReason($val)
    {
        $this->_propDict["emptySuggestionsReason"] = $val;
        return $this;
    }

    /**
    * Gets the meetingTimeSuggestions
    * An array of meeting suggestions.
    *
    * @return MeetingTimeSuggestion The meetingTimeSuggestions
    */
    public function getMeetingTimeSuggestions()
    {
        if (array_key_exists("meetingTimeSuggestions", $this->_propDict)) {
            if (is_a($this->_propDict["meetingTimeSuggestions"], "\Microsoft\Graph\Model\MeetingTimeSuggestion")) {
                return $this->_propDict["meetingTimeSuggestions"];
            } else {
                $this->_propDict["meetingTimeSuggestions"] = new MeetingTimeSuggestion($this->_propDict["meetingTimeSuggestions"]);
                return $this->_propDict["meetingTimeSuggestions"];
            }
        }
        return null;
    }

    /**
    * Sets the meetingTimeSuggestions
    * An array of meeting suggestions.
    *
    * @param MeetingTimeSuggestion $val The value to assign to the meetingTimeSuggestions
    *
    * @return MeetingTimeSuggestionsResult The MeetingTimeSuggestionsResult
    */
    public function setMeetingTimeSuggestions($val)
    {
        $this->_propDict["meetingTimeSuggestions"] = $val;
         return $this;
    }
}
