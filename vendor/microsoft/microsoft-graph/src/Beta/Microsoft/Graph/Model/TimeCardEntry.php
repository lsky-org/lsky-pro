<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TimeCardEntry File
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
* TimeCardEntry class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TimeCardEntry extends Entity
{

    /**
    * Gets the breaks
    *
    * @return TimeCardBreak The breaks
    */
    public function getBreaks()
    {
        if (array_key_exists("breaks", $this->_propDict)) {
            if (is_a($this->_propDict["breaks"], "\Beta\Microsoft\Graph\Model\TimeCardBreak")) {
                return $this->_propDict["breaks"];
            } else {
                $this->_propDict["breaks"] = new TimeCardBreak($this->_propDict["breaks"]);
                return $this->_propDict["breaks"];
            }
        }
        return null;
    }

    /**
    * Sets the breaks
    *
    * @param TimeCardBreak $val The value to assign to the breaks
    *
    * @return TimeCardEntry The TimeCardEntry
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
    * @param TimeCardEvent $val The value to assign to the clockInEvent
    *
    * @return TimeCardEntry The TimeCardEntry
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
    * @param TimeCardEvent $val The value to assign to the clockOutEvent
    *
    * @return TimeCardEntry The TimeCardEntry
    */
    public function setClockOutEvent($val)
    {
        $this->_propDict["clockOutEvent"] = $val;
         return $this;
    }
}
