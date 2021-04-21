<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RbacApplication File
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
* RbacApplication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RbacApplication extends Entity
{

     /** 
     * Gets the resourceNamespaces
     *
     * @return array The resourceNamespaces
     */
    public function getResourceNamespaces()
    {
        if (array_key_exists("resourceNamespaces", $this->_propDict)) {
           return $this->_propDict["resourceNamespaces"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the resourceNamespaces
    *
    * @param UnifiedRbacResourceNamespace $val The resourceNamespaces
    *
    * @return RbacApplication
    */
    public function setResourceNamespaces($val)
    {
		$this->_propDict["resourceNamespaces"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleAssignments
     *
     * @return array The roleAssignments
     */
    public function getRoleAssignments()
    {
        if (array_key_exists("roleAssignments", $this->_propDict)) {
           return $this->_propDict["roleAssignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleAssignments
    *
    * @param UnifiedRoleAssignment $val The roleAssignments
    *
    * @return RbacApplication
    */
    public function setRoleAssignments($val)
    {
		$this->_propDict["roleAssignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleDefinitions
     *
     * @return array The roleDefinitions
     */
    public function getRoleDefinitions()
    {
        if (array_key_exists("roleDefinitions", $this->_propDict)) {
           return $this->_propDict["roleDefinitions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleDefinitions
    *
    * @param UnifiedRoleDefinition $val The roleDefinitions
    *
    * @return RbacApplication
    */
    public function setRoleDefinitions($val)
    {
		$this->_propDict["roleDefinitions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleAssignmentApprovals
     *
     * @return array The roleAssignmentApprovals
     */
    public function getRoleAssignmentApprovals()
    {
        if (array_key_exists("roleAssignmentApprovals", $this->_propDict)) {
           return $this->_propDict["roleAssignmentApprovals"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleAssignmentApprovals
    *
    * @param Approval $val The roleAssignmentApprovals
    *
    * @return RbacApplication
    */
    public function setRoleAssignmentApprovals($val)
    {
		$this->_propDict["roleAssignmentApprovals"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleAssignmentRequests
     *
     * @return array The roleAssignmentRequests
     */
    public function getRoleAssignmentRequests()
    {
        if (array_key_exists("roleAssignmentRequests", $this->_propDict)) {
           return $this->_propDict["roleAssignmentRequests"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleAssignmentRequests
    *
    * @param UnifiedRoleAssignmentRequest $val The roleAssignmentRequests
    *
    * @return RbacApplication
    */
    public function setRoleAssignmentRequests($val)
    {
		$this->_propDict["roleAssignmentRequests"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleAssignmentScheduleInstances
     *
     * @return array The roleAssignmentScheduleInstances
     */
    public function getRoleAssignmentScheduleInstances()
    {
        if (array_key_exists("roleAssignmentScheduleInstances", $this->_propDict)) {
           return $this->_propDict["roleAssignmentScheduleInstances"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleAssignmentScheduleInstances
    *
    * @param UnifiedRoleAssignmentScheduleInstance $val The roleAssignmentScheduleInstances
    *
    * @return RbacApplication
    */
    public function setRoleAssignmentScheduleInstances($val)
    {
		$this->_propDict["roleAssignmentScheduleInstances"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleAssignmentSchedules
     *
     * @return array The roleAssignmentSchedules
     */
    public function getRoleAssignmentSchedules()
    {
        if (array_key_exists("roleAssignmentSchedules", $this->_propDict)) {
           return $this->_propDict["roleAssignmentSchedules"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleAssignmentSchedules
    *
    * @param UnifiedRoleAssignmentSchedule $val The roleAssignmentSchedules
    *
    * @return RbacApplication
    */
    public function setRoleAssignmentSchedules($val)
    {
		$this->_propDict["roleAssignmentSchedules"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleEligibilityRequests
     *
     * @return array The roleEligibilityRequests
     */
    public function getRoleEligibilityRequests()
    {
        if (array_key_exists("roleEligibilityRequests", $this->_propDict)) {
           return $this->_propDict["roleEligibilityRequests"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleEligibilityRequests
    *
    * @param UnifiedRoleEligibilityRequest $val The roleEligibilityRequests
    *
    * @return RbacApplication
    */
    public function setRoleEligibilityRequests($val)
    {
		$this->_propDict["roleEligibilityRequests"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleEligibilityScheduleInstances
     *
     * @return array The roleEligibilityScheduleInstances
     */
    public function getRoleEligibilityScheduleInstances()
    {
        if (array_key_exists("roleEligibilityScheduleInstances", $this->_propDict)) {
           return $this->_propDict["roleEligibilityScheduleInstances"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleEligibilityScheduleInstances
    *
    * @param UnifiedRoleEligibilityScheduleInstance $val The roleEligibilityScheduleInstances
    *
    * @return RbacApplication
    */
    public function setRoleEligibilityScheduleInstances($val)
    {
		$this->_propDict["roleEligibilityScheduleInstances"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleEligibilitySchedules
     *
     * @return array The roleEligibilitySchedules
     */
    public function getRoleEligibilitySchedules()
    {
        if (array_key_exists("roleEligibilitySchedules", $this->_propDict)) {
           return $this->_propDict["roleEligibilitySchedules"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleEligibilitySchedules
    *
    * @param UnifiedRoleEligibilitySchedule $val The roleEligibilitySchedules
    *
    * @return RbacApplication
    */
    public function setRoleEligibilitySchedules($val)
    {
		$this->_propDict["roleEligibilitySchedules"] = $val;
        return $this;
    }
    
}
