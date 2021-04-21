<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TimeCardBreak File
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
* TimeCardBreak class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TimeCardBreak extends Entity
{
    /**
    * Gets the breakId
    *
    * @return string The breakId
    */
    public function getBreakId()
    {
        if (array_key_exists("breakId", $this->_propDict)) {
            return $this->_propDict["breakId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the breakId
    *
    * @param string $val The value of the breakId
    *
    * @return TimeCardBreak
    */
    public function setBreakId($val)
    {
        $this->_propDict["breakId"] = $val;
        return $this;
    }

    /**
    * Gets the end
    *
    * @return TimeCardEvent The end
    */
    public function getEnd()
    {
        if (array_key_exists("end", $this->_propDict)) {
            if (is_a($this->_propDict["end"], "\Beta\Microsoft\Graph\Model\TimeCardEvent")) {
                return $this->_propDict["end"];
            } else {
                $this->_propDict["end"] = new TimeCardEvent($this->_propDict["end"]);
                return $this->_propDict["end"];
            }
        }
        return null;
    }

    /**
    * Sets the end
    *
    * @param TimeCardEvent $val The value to assign to the end
    *
    * @return TimeCardBreak The TimeCardBreak
    */
    public function setEnd($val)
    {
        $this->_propDict["end"] = $val;
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
    * @param ItemBody $val The value to assign to the notes
    *
    * @return TimeCardBreak The TimeCardBreak
    */
    public function setNotes($val)
    {
        $this->_propDict["notes"] = $val;
         return $this;
    }

    /**
    * Gets the start
    *
    * @return TimeCardEvent The start
    */
    public function getStart()
    {
        if (array_key_exists("start", $this->_propDict)) {
            if (is_a($this->_propDict["start"], "\Beta\Microsoft\Graph\Model\TimeCardEvent")) {
                return $this->_propDict["start"];
            } else {
                $this->_propDict["start"] = new TimeCardEvent($this->_propDict["start"]);
                return $this->_propDict["start"];
            }
        }
        return null;
    }

    /**
    * Sets the start
    *
    * @param TimeCardEvent $val The value to assign to the start
    *
    * @return TimeCardBreak The TimeCardBreak
    */
    public function setStart($val)
    {
        $this->_propDict["start"] = $val;
         return $this;
    }
}
