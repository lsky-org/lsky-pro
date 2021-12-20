<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleAssignmentScheduleInstance File
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
* UnifiedRoleAssignmentScheduleInstance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleAssignmentScheduleInstance extends UnifiedRoleScheduleInstanceBase
{
    /**
    * Gets the assignmentType
    *
    * @return string The assignmentType
    */
    public function getAssignmentType()
    {
        if (array_key_exists("assignmentType", $this->_propDict)) {
            return $this->_propDict["assignmentType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assignmentType
    *
    * @param string $val The assignmentType
    *
    * @return UnifiedRoleAssignmentScheduleInstance
    */
    public function setAssignmentType($val)
    {
        $this->_propDict["assignmentType"] = $val;
        return $this;
    }
    
    /**
    * Gets the endDateTime
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
    *
    * @param \DateTime $val The endDateTime
    *
    * @return UnifiedRoleAssignmentScheduleInstance
    */
    public function setEndDateTime($val)
    {
        $this->_propDict["endDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the memberType
    *
    * @return string The memberType
    */
    public function getMemberType()
    {
        if (array_key_exists("memberType", $this->_propDict)) {
            return $this->_propDict["memberType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the memberType
    *
    * @param string $val The memberType
    *
    * @return UnifiedRoleAssignmentScheduleInstance
    */
    public function setMemberType($val)
    {
        $this->_propDict["memberType"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleAssignmentOriginId
    *
    * @return string The roleAssignmentOriginId
    */
    public function getRoleAssignmentOriginId()
    {
        if (array_key_exists("roleAssignmentOriginId", $this->_propDict)) {
            return $this->_propDict["roleAssignmentOriginId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleAssignmentOriginId
    *
    * @param string $val The roleAssignmentOriginId
    *
    * @return UnifiedRoleAssignmentScheduleInstance
    */
    public function setRoleAssignmentOriginId($val)
    {
        $this->_propDict["roleAssignmentOriginId"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleAssignmentScheduleId
    *
    * @return string The roleAssignmentScheduleId
    */
    public function getRoleAssignmentScheduleId()
    {
        if (array_key_exists("roleAssignmentScheduleId", $this->_propDict)) {
            return $this->_propDict["roleAssignmentScheduleId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleAssignmentScheduleId
    *
    * @param string $val The roleAssignmentScheduleId
    *
    * @return UnifiedRoleAssignmentScheduleInstance
    */
    public function setRoleAssignmentScheduleId($val)
    {
        $this->_propDict["roleAssignmentScheduleId"] = $val;
        return $this;
    }
    
    /**
    * Gets the startDateTime
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
    *
    * @param \DateTime $val The startDateTime
    *
    * @return UnifiedRoleAssignmentScheduleInstance
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the activatedUsing
    *
    * @return UnifiedRoleEligibilityScheduleInstance The activatedUsing
    */
    public function getActivatedUsing()
    {
        if (array_key_exists("activatedUsing", $this->_propDict)) {
            if (is_a($this->_propDict["activatedUsing"], "\Beta\Microsoft\Graph\Model\UnifiedRoleEligibilityScheduleInstance")) {
                return $this->_propDict["activatedUsing"];
            } else {
                $this->_propDict["activatedUsing"] = new UnifiedRoleEligibilityScheduleInstance($this->_propDict["activatedUsing"]);
                return $this->_propDict["activatedUsing"];
            }
        }
        return null;
    }
    
    /**
    * Sets the activatedUsing
    *
    * @param UnifiedRoleEligibilityScheduleInstance $val The activatedUsing
    *
    * @return UnifiedRoleAssignmentScheduleInstance
    */
    public function setActivatedUsing($val)
    {
        $this->_propDict["activatedUsing"] = $val;
        return $this;
    }
    
}
