<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnifiedRoleAssignmentSchedule File
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
* UnifiedRoleAssignmentSchedule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnifiedRoleAssignmentSchedule extends UnifiedRoleScheduleBase
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
    * @return UnifiedRoleAssignmentSchedule
    */
    public function setAssignmentType($val)
    {
        $this->_propDict["assignmentType"] = $val;
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
    * @return UnifiedRoleAssignmentSchedule
    */
    public function setMemberType($val)
    {
        $this->_propDict["memberType"] = $val;
        return $this;
    }
    
    /**
    * Gets the scheduleInfo
    *
    * @return RequestSchedule The scheduleInfo
    */
    public function getScheduleInfo()
    {
        if (array_key_exists("scheduleInfo", $this->_propDict)) {
            if (is_a($this->_propDict["scheduleInfo"], "\Beta\Microsoft\Graph\Model\RequestSchedule")) {
                return $this->_propDict["scheduleInfo"];
            } else {
                $this->_propDict["scheduleInfo"] = new RequestSchedule($this->_propDict["scheduleInfo"]);
                return $this->_propDict["scheduleInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the scheduleInfo
    *
    * @param RequestSchedule $val The scheduleInfo
    *
    * @return UnifiedRoleAssignmentSchedule
    */
    public function setScheduleInfo($val)
    {
        $this->_propDict["scheduleInfo"] = $val;
        return $this;
    }
    
    /**
    * Gets the activatedUsing
    *
    * @return UnifiedRoleEligibilitySchedule The activatedUsing
    */
    public function getActivatedUsing()
    {
        if (array_key_exists("activatedUsing", $this->_propDict)) {
            if (is_a($this->_propDict["activatedUsing"], "\Beta\Microsoft\Graph\Model\UnifiedRoleEligibilitySchedule")) {
                return $this->_propDict["activatedUsing"];
            } else {
                $this->_propDict["activatedUsing"] = new UnifiedRoleEligibilitySchedule($this->_propDict["activatedUsing"]);
                return $this->_propDict["activatedUsing"];
            }
        }
        return null;
    }
    
    /**
    * Sets the activatedUsing
    *
    * @param UnifiedRoleEligibilitySchedule $val The activatedUsing
    *
    * @return UnifiedRoleAssignmentSchedule
    */
    public function setActivatedUsing($val)
    {
        $this->_propDict["activatedUsing"] = $val;
        return $this;
    }
    
}
