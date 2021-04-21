<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Shift File
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
* Shift class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Shift extends ChangeTrackedEntity
{
    /**
    * Gets the draftShift
    * The draft version of this shift that is viewable by managers. Required.
    *
    * @return ShiftItem The draftShift
    */
    public function getDraftShift()
    {
        if (array_key_exists("draftShift", $this->_propDict)) {
            if (is_a($this->_propDict["draftShift"], "\Beta\Microsoft\Graph\Model\ShiftItem")) {
                return $this->_propDict["draftShift"];
            } else {
                $this->_propDict["draftShift"] = new ShiftItem($this->_propDict["draftShift"]);
                return $this->_propDict["draftShift"];
            }
        }
        return null;
    }
    
    /**
    * Sets the draftShift
    * The draft version of this shift that is viewable by managers. Required.
    *
    * @param ShiftItem $val The draftShift
    *
    * @return Shift
    */
    public function setDraftShift($val)
    {
        $this->_propDict["draftShift"] = $val;
        return $this;
    }
    
    /**
    * Gets the isStagedForDeletion
    *
    * @return bool The isStagedForDeletion
    */
    public function getIsStagedForDeletion()
    {
        if (array_key_exists("isStagedForDeletion", $this->_propDict)) {
            return $this->_propDict["isStagedForDeletion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isStagedForDeletion
    *
    * @param bool $val The isStagedForDeletion
    *
    * @return Shift
    */
    public function setIsStagedForDeletion($val)
    {
        $this->_propDict["isStagedForDeletion"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the schedulingGroupId
    * ID of the scheduling group the shift is part of. Required.
    *
    * @return string The schedulingGroupId
    */
    public function getSchedulingGroupId()
    {
        if (array_key_exists("schedulingGroupId", $this->_propDict)) {
            return $this->_propDict["schedulingGroupId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the schedulingGroupId
    * ID of the scheduling group the shift is part of. Required.
    *
    * @param string $val The schedulingGroupId
    *
    * @return Shift
    */
    public function setSchedulingGroupId($val)
    {
        $this->_propDict["schedulingGroupId"] = $val;
        return $this;
    }
    
    /**
    * Gets the sharedShift
    * The shared version of this shift that is viewable by both employees and managers. Required.
    *
    * @return ShiftItem The sharedShift
    */
    public function getSharedShift()
    {
        if (array_key_exists("sharedShift", $this->_propDict)) {
            if (is_a($this->_propDict["sharedShift"], "\Beta\Microsoft\Graph\Model\ShiftItem")) {
                return $this->_propDict["sharedShift"];
            } else {
                $this->_propDict["sharedShift"] = new ShiftItem($this->_propDict["sharedShift"]);
                return $this->_propDict["sharedShift"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sharedShift
    * The shared version of this shift that is viewable by both employees and managers. Required.
    *
    * @param ShiftItem $val The sharedShift
    *
    * @return Shift
    */
    public function setSharedShift($val)
    {
        $this->_propDict["sharedShift"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    * ID of the user assigned to the shift. Required.
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
    * ID of the user assigned to the shift. Required.
    *
    * @param string $val The userId
    *
    * @return Shift
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
}
