<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Session File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\CallRecords\Model;

/**
* Session class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Session extends \Microsoft\Graph\Model\Entity
{
    /**
    * Gets the callee
    * Endpoint that answered the session.
    *
    * @return Endpoint The callee
    */
    public function getCallee()
    {
        if (array_key_exists("callee", $this->_propDict)) {
            if (is_a($this->_propDict["callee"], "\Microsoft\Graph\CallRecords\Model\Endpoint")) {
                return $this->_propDict["callee"];
            } else {
                $this->_propDict["callee"] = new Endpoint($this->_propDict["callee"]);
                return $this->_propDict["callee"];
            }
        }
        return null;
    }
    
    /**
    * Sets the callee
    * Endpoint that answered the session.
    *
    * @param Endpoint $val The callee
    *
    * @return Session
    */
    public function setCallee($val)
    {
        $this->_propDict["callee"] = $val;
        return $this;
    }
    
    /**
    * Gets the caller
    * Endpoint that initiated the session.
    *
    * @return Endpoint The caller
    */
    public function getCaller()
    {
        if (array_key_exists("caller", $this->_propDict)) {
            if (is_a($this->_propDict["caller"], "\Microsoft\Graph\CallRecords\Model\Endpoint")) {
                return $this->_propDict["caller"];
            } else {
                $this->_propDict["caller"] = new Endpoint($this->_propDict["caller"]);
                return $this->_propDict["caller"];
            }
        }
        return null;
    }
    
    /**
    * Sets the caller
    * Endpoint that initiated the session.
    *
    * @param Endpoint $val The caller
    *
    * @return Session
    */
    public function setCaller($val)
    {
        $this->_propDict["caller"] = $val;
        return $this;
    }
    
    /**
    * Gets the endDateTime
    * UTC time when the last user left the session. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
    * UTC time when the last user left the session. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The endDateTime
    *
    * @return Session
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the failureInfo
    * Failure information associated with the session if the session failed.
    *
    * @return FailureInfo The failureInfo
    */
    public function getFailureInfo()
    {
        if (array_key_exists("failureInfo", $this->_propDict)) {
            if (is_a($this->_propDict["failureInfo"], "\Microsoft\Graph\CallRecords\Model\FailureInfo")) {
                return $this->_propDict["failureInfo"];
            } else {
                $this->_propDict["failureInfo"] = new FailureInfo($this->_propDict["failureInfo"]);
                return $this->_propDict["failureInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the failureInfo
    * Failure information associated with the session if the session failed.
    *
    * @param FailureInfo $val The failureInfo
    *
    * @return Session
    */
    public function setFailureInfo($val)
    {
        $this->_propDict["failureInfo"] = $val;
        return $this;
    }
    

     /** 
     * Gets the modalities
    * List of modalities present in the session. Possible values are: unknown, audio, video, videoBasedScreenSharing, data, screenSharing, unknownFutureValue.
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
    * List of modalities present in the session. Possible values are: unknown, audio, video, videoBasedScreenSharing, data, screenSharing, unknownFutureValue.
    *
    * @param Modality $val The modalities
    *
    * @return Session
    */
    public function setModalities($val)
    {
		$this->_propDict["modalities"] = $val;
        return $this;
    }
    
    /**
    * Gets the startDateTime
    * UTC fime when the first user joined the session. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
    * UTC fime when the first user joined the session. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The startDateTime
    *
    * @return Session
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the segments
    * The list of segments involved in the session. Read-only. Nullable.
     *
     * @return array The segments
     */
    public function getSegments()
    {
        if (array_key_exists("segments", $this->_propDict)) {
           return $this->_propDict["segments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the segments
    * The list of segments involved in the session. Read-only. Nullable.
    *
    * @param Segment $val The segments
    *
    * @return Session
    */
    public function setSegments($val)
    {
		$this->_propDict["segments"] = $val;
        return $this;
    }
    
}
