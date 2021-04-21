<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OpenShift File
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
* OpenShift class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OpenShift extends ChangeTrackedEntity
{
    /**
    * Gets the draftOpenShift
    * An unpublished open shift.
    *
    * @return OpenShiftItem The draftOpenShift
    */
    public function getDraftOpenShift()
    {
        if (array_key_exists("draftOpenShift", $this->_propDict)) {
            if (is_a($this->_propDict["draftOpenShift"], "\Beta\Microsoft\Graph\Model\OpenShiftItem")) {
                return $this->_propDict["draftOpenShift"];
            } else {
                $this->_propDict["draftOpenShift"] = new OpenShiftItem($this->_propDict["draftOpenShift"]);
                return $this->_propDict["draftOpenShift"];
            }
        }
        return null;
    }
    
    /**
    * Sets the draftOpenShift
    * An unpublished open shift.
    *
    * @param OpenShiftItem $val The draftOpenShift
    *
    * @return OpenShift
    */
    public function setDraftOpenShift($val)
    {
        $this->_propDict["draftOpenShift"] = $val;
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
    * @return OpenShift
    */
    public function setIsStagedForDeletion($val)
    {
        $this->_propDict["isStagedForDeletion"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the schedulingGroupId
    * ID for the scheduling group that the open shift belongs to.
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
    * ID for the scheduling group that the open shift belongs to.
    *
    * @param string $val The schedulingGroupId
    *
    * @return OpenShift
    */
    public function setSchedulingGroupId($val)
    {
        $this->_propDict["schedulingGroupId"] = $val;
        return $this;
    }
    
    /**
    * Gets the sharedOpenShift
    * A published open shift.
    *
    * @return OpenShiftItem The sharedOpenShift
    */
    public function getSharedOpenShift()
    {
        if (array_key_exists("sharedOpenShift", $this->_propDict)) {
            if (is_a($this->_propDict["sharedOpenShift"], "\Beta\Microsoft\Graph\Model\OpenShiftItem")) {
                return $this->_propDict["sharedOpenShift"];
            } else {
                $this->_propDict["sharedOpenShift"] = new OpenShiftItem($this->_propDict["sharedOpenShift"]);
                return $this->_propDict["sharedOpenShift"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sharedOpenShift
    * A published open shift.
    *
    * @param OpenShiftItem $val The sharedOpenShift
    *
    * @return OpenShift
    */
    public function setSharedOpenShift($val)
    {
        $this->_propDict["sharedOpenShift"] = $val;
        return $this;
    }
    
}
