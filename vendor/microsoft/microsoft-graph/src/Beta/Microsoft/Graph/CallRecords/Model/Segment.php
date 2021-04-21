<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Segment File
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
* Segment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Segment extends \Beta\Microsoft\Graph\Model\Entity
{
    /**
    * Gets the callee
    * Endpoint that answered this segment.
    *
    * @return Endpoint The callee
    */
    public function getCallee()
    {
        if (array_key_exists("callee", $this->_propDict)) {
            if (is_a($this->_propDict["callee"], "\Beta\Microsoft\Graph\CallRecords\Model\Endpoint")) {
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
    * Endpoint that answered this segment.
    *
    * @param Endpoint $val The callee
    *
    * @return Segment
    */
    public function setCallee($val)
    {
        $this->_propDict["callee"] = $val;
        return $this;
    }
    
    /**
    * Gets the caller
    * Endpoint that initiated this segment.
    *
    * @return Endpoint The caller
    */
    public function getCaller()
    {
        if (array_key_exists("caller", $this->_propDict)) {
            if (is_a($this->_propDict["caller"], "\Beta\Microsoft\Graph\CallRecords\Model\Endpoint")) {
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
    * Endpoint that initiated this segment.
    *
    * @param Endpoint $val The caller
    *
    * @return Segment
    */
    public function setCaller($val)
    {
        $this->_propDict["caller"] = $val;
        return $this;
    }
    
    /**
    * Gets the endDateTime
    * UTC time when the segment ended. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
    * UTC time when the segment ended. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The endDateTime
    *
    * @return Segment
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the failureInfo
    * Failure information associated with the segment if it failed.
    *
    * @return FailureInfo The failureInfo
    */
    public function getFailureInfo()
    {
        if (array_key_exists("failureInfo", $this->_propDict)) {
            if (is_a($this->_propDict["failureInfo"], "\Beta\Microsoft\Graph\CallRecords\Model\FailureInfo")) {
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
    * Failure information associated with the segment if it failed.
    *
    * @param FailureInfo $val The failureInfo
    *
    * @return Segment
    */
    public function setFailureInfo($val)
    {
        $this->_propDict["failureInfo"] = $val;
        return $this;
    }
    

     /** 
     * Gets the media
    * Media associated with this segment.
     *
     * @return array The media
     */
    public function getMedia()
    {
        if (array_key_exists("media", $this->_propDict)) {
           return $this->_propDict["media"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the media
    * Media associated with this segment.
    *
    * @param Media $val The media
    *
    * @return Segment
    */
    public function setMedia($val)
    {
		$this->_propDict["media"] = $val;
        return $this;
    }
    
    /**
    * Gets the startDateTime
    * UTC time when the segment started. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
    * UTC time when the segment started. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The startDateTime
    *
    * @return Segment
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }
    
}
