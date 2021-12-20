<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TimeCard File
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
* TimeCard class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TimeCard extends ChangeTrackedEntity
{

     /** 
     * Gets the breaks
     *
     * @return array The breaks
     */
    public function getBreaks()
    {
        if (array_key_exists("breaks", $this->_propDict)) {
           return $this->_propDict["breaks"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the breaks
    *
    * @param TimeCardBreak $val The breaks
    *
    * @return TimeCard
    */
    public function setBreaks($val)
    {
		$this->_propDict["breaks"] = $val;
        return $this;
    }
    
    /**
    * Gets the clockInEvent
    *
    * @return TimeCardEvent The clockInEvent
    */
    public function getClockInEvent()
    {
        if (array_key_exists("clockInEvent", $this->_propDict)) {
            if (is_a($this->_propDict["clockInEvent"], "\Beta\Microsoft\Graph\Model\TimeCardEvent")) {
                return $this->_propDict["clockInEvent"];
            } else {
                $this->_propDict["clockInEvent"] = new TimeCardEvent($this->_propDict["clockInEvent"]);
                return $this->_propDict["clockInEvent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the clockInEvent
    *
    * @param TimeCardEvent $val The clockInEvent
    *
    * @return TimeCard
    */
    public function setClockInEvent($val)
    {
        $this->_propDict["clockInEvent"] = $val;
        return $this;
    }
    
    /**
    * Gets the clockOutEvent
    *
    * @return TimeCardEvent The clockOutEvent
    */
    public function getClockOutEvent()
    {
        if (array_key_exists("clockOutEvent", $this->_propDict)) {
            if (is_a($this->_propDict["clockOutEvent"], "\Beta\Microsoft\Graph\Model\TimeCardEvent")) {
                return $this->_propDict["clockOutEvent"];
            } else {
                $this->_propDict["clockOutEvent"] = new TimeCardEvent($this->_propDict["clockOutEvent"]);
                return $this->_propDict["clockOutEvent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the clockOutEvent
    *
    * @param TimeCardEvent $val The clockOutEvent
    *
    * @return TimeCard
    */
    public function setClockOutEvent($val)
    {
        $this->_propDict["clockOutEvent"] = $val;
        return $this;
    }
    
    /**
    * Gets the confirmedBy
    *
    * @return ConfirmedBy The confirmedBy
    */
    public function getConfirmedBy()
    {
        if (array_key_exists("confirmedBy", $this->_propDict)) {
            if (is_a($this->_propDict["confirmedBy"], "\Beta\Microsoft\Graph\Model\ConfirmedBy")) {
                return $this->_propDict["confirmedBy"];
            } else {
                $this->_propDict["confirmedBy"] = new ConfirmedBy($this->_propDict["confirmedBy"]);
                return $this->_propDict["confirmedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the confirmedBy
    *
    * @param ConfirmedBy $val The confirmedBy
    *
    * @return TimeCard
    */
    public function setConfirmedBy($val)
    {
        $this->_propDict["confirmedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the notes
    *
    * @return ItemBody The notes
    */
    public function getNotes()
    {
        if (array_key_exists("notes", $this->_propDict)) {
            if (is_a($this->_propDict["notes"], "\Beta\Microsoft\Graph\Model\ItemBody")) {
                return $this->_propDict["notes"];
            } else {
                $this->_propDict["notes"] = new ItemBody($this->_propDict["notes"]);
                return $this->_propDict["notes"];
            }
        }
        return null;
    }
    
    /**
    * Sets the notes
    *
    * @param ItemBody $val The notes
    *
    * @return TimeCard
    */
    public function setNotes($val)
    {
        $this->_propDict["notes"] = $val;
        return $this;
    }
    
    /**
    * Gets the originalEntry
    *
    * @return TimeCardEntry The originalEntry
    */
    public function getOriginalEntry()
    {
        if (array_key_exists("originalEntry", $this->_propDict)) {
            if (is_a($this->_propDict["originalEntry"], "\Beta\Microsoft\Graph\Model\TimeCardEntry")) {
                return $this->_propDict["originalEntry"];
            } else {
                $this->_propDict["originalEntry"] = new TimeCardEntry($this->_propDict["originalEntry"]);
                return $this->_propDict["originalEntry"];
            }
        }
        return null;
    }
    
    /**
    * Sets the originalEntry
    *
    * @param TimeCardEntry $val The originalEntry
    *
    * @return TimeCard
    */
    public function setOriginalEntry($val)
    {
        $this->_propDict["originalEntry"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    *
    * @return TimeCardState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\TimeCardState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new TimeCardState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    *
    * @param TimeCardState $val The state
    *
    * @return TimeCard
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userId
    *
    * @param string $val The userId
    *
    * @return TimeCard
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
}
