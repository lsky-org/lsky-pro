<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ShiftItem File
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
* ShiftItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ShiftItem extends ScheduleEntity
{

    /**
    * Gets the activities
    * An incremental part of a shift which can cover details of when and where an employee is during their shift. For example, an assignment or a scheduled break or lunch. Required.
    *
    * @return ShiftActivity The activities
    */
    public function getActivities()
    {
        if (array_key_exists("activities", $this->_propDict)) {
            if (is_a($this->_propDict["activities"], "\Microsoft\Graph\Model\ShiftActivity")) {
                return $this->_propDict["activities"];
            } else {
                $this->_propDict["activities"] = new ShiftActivity($this->_propDict["activities"]);
                return $this->_propDict["activities"];
            }
        }
        return null;
    }

    /**
    * Sets the activities
    * An incremental part of a shift which can cover details of when and where an employee is during their shift. For example, an assignment or a scheduled break or lunch. Required.
    *
    * @param ShiftActivity $val The value to assign to the activities
    *
    * @return ShiftItem The ShiftItem
    */
    public function setActivities($val)
    {
        $this->_propDict["activities"] = $val;
         return $this;
    }
    /**
    * Gets the displayName
    * The shift label of the shiftItem.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    * The shift label of the shiftItem.
    *
    * @param string $val The value of the displayName
    *
    * @return ShiftItem
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the notes
    * The shift notes for the shiftItem.
    *
    * @return string The notes
    */
    public function getNotes()
    {
        if (array_key_exists("notes", $this->_propDict)) {
            return $this->_propDict["notes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notes
    * The shift notes for the shiftItem.
    *
    * @param string $val The value of the notes
    *
    * @return ShiftItem
    */
    public function setNotes($val)
    {
        $this->_propDict["notes"] = $val;
        return $this;
    }
}
