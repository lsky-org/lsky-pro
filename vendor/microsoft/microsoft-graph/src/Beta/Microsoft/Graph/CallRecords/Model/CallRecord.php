<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CallRecord File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\CallRecords\Model;

/**
* CallRecord class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CallRecord extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the endDateTime
    * UTC time when the last user left the call. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The endDateTime
    */
    public function getEndDateTime()
    {
        if (array_key_exists("endDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["endDateTime"], "\DateTime")) {
                return $this->_propDict["endDateTime"];
            } else {
                $this->_propDict["endDateTime"] = new \DateTime($this->_propDict["endDateTime"]);
                return $this->_propDict["endDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the endDateTime
    * UTC time when the last user left the call. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The endDateTime
    *
    * @return CallRecord
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the joinWebUrl
    * Meeting URL associated to the call. May not be available for a peerToPeer call record type.
    *
    * @return string The joinWebUrl
    */
    public function getJoinWebUrl()
    {
        if (array_key_exists("joinWebUrl", $this->_propDict)) {
            return $this->_propDict["joinWebUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the joinWebUrl
    * Meeting URL associated to the call. May not be available for a peerToPeer call record type.
    *
    * @param string $val The joinWebUrl
    *
    * @return CallRecord
    */
    public function setJoinWebUrl($val)
    {
        $this->_propDict["joinWebUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * UTC time when the call record was created. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    * UTC time when the call record was created. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return CallRecord
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the modalities
    * List of all the modalities used in the call. Possible values are: unknown, audio, video, videoBasedScreenSharing, data, screenSharing, unknownFutureValue.
     *
     * @return array The modalities
     */
    public function getModalities()
    {
        if (array_key_exists("modalities", $this->_propDict)) {
           return $this->_propDict["modalities"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the modalities
    * List of all the modalities used in the call. Possible values are: unknown, audio, video, videoBasedScreenSharing, data, screenSharing, unknownFutureValue.
    *
    * @param Modality $val The modalities
    *
    * @return CallRecord
    */
    public function setModalities($val)
    {
		$this->_propDict["modalities"] = $val;
        return $this;
    }
    
    /**
    * Gets the organizer
    * The organizing party's identity.
    *
    * @return \Beta\Microsoft\Graph\Model\IdentitySet The organizer
    */
    public function getOrganizer()
    {
        if (array_key_exists("organizer", $this->_propDict)) {
            if (is_a($this->_propDict["organizer"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["organizer"];
            } else {
                $this->_propDict["organizer"] = new \Beta\Microsoft\Graph\Model\IdentitySet($this->_propDict["organizer"]);
                return $this->_propDict["organizer"];
            }
        }
        return null;
    }
    
    /**
    * Sets the organizer
    * The organizing party's identity.
    *
    * @param \Beta\Microsoft\Graph\Model\IdentitySet $val The organizer
    *
    * @return CallRecord
    */
    public function setOrganizer($val)
    {
        $this->_propDict["organizer"] = $val;
        return $this;
    }
    

     /** 
     * Gets the participants
    * List of distinct identities involved in the call.
     *
     * @return array The participants
     */
    public function getParticipants()
    {
        if (array_key_exists("participants", $this->_propDict)) {
           return $this->_propDict["participants"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the participants
    * List of distinct identities involved in the call.
    *
    * @param \Beta\Microsoft\Graph\Model\IdentitySet $val The participants
    *
    * @return CallRecord
    */
    public function setParticipants($val)
    {
		$this->_propDict["participants"] = $val;
        return $this;
    }
    
    /**
    * Gets the startDateTime
    * UTC time when the first user joined the call. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime")) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startDateTime
    * UTC time when the first user joined the call. The DatetimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The startDateTime
    *
    * @return CallRecord
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the type
    * Indicates the type of the call. Possible values are: unknown, groupCall, peerToPeer, unknownFutureValue.
    *
    * @return CallType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\CallRecords\Model\CallType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new CallType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }
    
    /**
    * Sets the type
    * Indicates the type of the call. Possible values are: unknown, groupCall, peerToPeer, unknownFutureValue.
    *
    * @param CallType $val The type
    *
    * @return CallRecord
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    
    /**
    * Gets the version
    * Monotonically increasing version of the call record. Higher version call records with the same ID includes additional data compared to the lower version.
    *
    * @return int The version
    */
    public function getVersion()
    {
        if (array_key_exists("version", $this->_propDict)) {
            return $this->_propDict["version"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the version
    * Monotonically increasing version of the call record. Higher version call records with the same ID includes additional data compared to the lower version.
    *
    * @param int $val The version
    *
    * @return CallRecord
    */
    public function setVersion($val)
    {
        $this->_propDict["version"] = intval($val);
        return $this;
    }
    

     /** 
     * Gets the sessions
    * List of sessions involved in the call. Peer-to-peer calls typically only have one session, whereas group calls typically have at least one session per participant. Read-only. Nullable.
     *
     * @return array The sessions
     */
    public function getSessions()
    {
        if (array_key_exists("sessions", $this->_propDict)) {
           return $this->_propDict["sessions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the sessions
    * List of sessions involved in the call. Peer-to-peer calls typically only have one session, whereas group calls typically have at least one session per participant. Read-only. Nullable.
    *
    * @param Session $val The sessions
    *
    * @return CallRecord
    */
    public function setSessions($val)
    {
		$this->_propDict["sessions"] = $val;
        return $this;
    }
    
}
