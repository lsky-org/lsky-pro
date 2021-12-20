<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingParticipants File
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
* MeetingParticipants class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MeetingParticipants extends Entity
{

    /**
    * Gets the attendees
    *
    * @return MeetingParticipantInfo The attendees
    */
    public function getAttendees()
    {
        if (array_key_exists("attendees", $this->_propDict)) {
            if (is_a($this->_propDict["attendees"], "\Beta\Microsoft\Graph\Model\MeetingParticipantInfo")) {
                return $this->_propDict["attendees"];
            } else {
                $this->_propDict["attendees"] = new MeetingParticipantInfo($this->_propDict["attendees"]);
                return $this->_propDict["attendees"];
            }
        }
        return null;
    }

    /**
    * Sets the attendees
    *
    * @param MeetingParticipantInfo $val The value to assign to the attendees
    *
    * @return MeetingParticipants The MeetingParticipants
    */
    public function setAttendees($val)
    {
        $this->_propDict["attendees"] = $val;
         return $this;
    }

    /**
    * Gets the contributors
    * For broadcast meeting only.
    *
    * @return MeetingParticipantInfo The contributors
    */
    public function getContributors()
    {
        if (array_key_exists("contributors", $this->_propDict)) {
            if (is_a($this->_propDict["contributors"], "\Beta\Microsoft\Graph\Model\MeetingParticipantInfo")) {
                return $this->_propDict["contributors"];
            } else {
                $this->_propDict["contributors"] = new MeetingParticipantInfo($this->_propDict["contributors"]);
                return $this->_propDict["contributors"];
            }
        }
        return null;
    }

    /**
    * Sets the contributors
    * For broadcast meeting only.
    *
    * @param MeetingParticipantInfo $val The value to assign to the contributors
    *
    * @return MeetingParticipants The MeetingParticipants
    */
    public function setContributors($val)
    {
        $this->_propDict["contributors"] = $val;
         return $this;
    }

    /**
    * Gets the organizer
    *
    * @return MeetingParticipantInfo The organizer
    */
    public function getOrganizer()
    {
        if (array_key_exists("organizer", $this->_propDict)) {
            if (is_a($this->_propDict["organizer"], "\Beta\Microsoft\Graph\Model\MeetingParticipantInfo")) {
                return $this->_propDict["organizer"];
            } else {
                $this->_propDict["organizer"] = new MeetingParticipantInfo($this->_propDict["organizer"]);
                return $this->_propDict["organizer"];
            }
        }
        return null;
    }

    /**
    * Sets the organizer
    *
    * @param MeetingParticipantInfo $val The value to assign to the organizer
    *
    * @return MeetingParticipants The MeetingParticipants
    */
    public function setOrganizer($val)
    {
        $this->_propDict["organizer"] = $val;
         return $this;
    }

    /**
    * Gets the producers
    * For broadcast meeting only.
    *
    * @return MeetingParticipantInfo The producers
    */
    public function getProducers()
    {
        if (array_key_exists("producers", $this->_propDict)) {
            if (is_a($this->_propDict["producers"], "\Beta\Microsoft\Graph\Model\MeetingParticipantInfo")) {
                return $this->_propDict["producers"];
            } else {
                $this->_propDict["producers"] = new MeetingParticipantInfo($this->_propDict["producers"]);
                return $this->_propDict["producers"];
            }
        }
        return null;
    }

    /**
    * Sets the producers
    * For broadcast meeting only.
    *
    * @param MeetingParticipantInfo $val The value to assign to the producers
    *
    * @return MeetingParticipants The MeetingParticipants
    */
    public function setProducers($val)
    {
        $this->_propDict["producers"] = $val;
         return $this;
    }
}
