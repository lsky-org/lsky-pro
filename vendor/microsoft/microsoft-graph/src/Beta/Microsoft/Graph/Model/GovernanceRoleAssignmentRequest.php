<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* GovernanceRoleAssignmentRequest File
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
* GovernanceRoleAssignmentRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class GovernanceRoleAssignmentRequest extends Entity
{
    /**
    * Gets the assignmentState
    * Required. The state of the assignment. The possible values are: Eligible (for eligible assignment),  Active (if it is directly assigned), Active (by administrators, or activated on an eligible assignment by the users).
    *
    * @return string The assignmentState
    */
    public function getAssignmentState()
    {
        if (array_key_exists("assignmentState", $this->_propDict)) {
            return $this->_propDict["assignmentState"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assignmentState
    * Required. The state of the assignment. The possible values are: Eligible (for eligible assignment),  Active (if it is directly assigned), Active (by administrators, or activated on an eligible assignment by the users).
    *
    * @param string $val The assignmentState
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setAssignmentState($val)
    {
        $this->_propDict["assignmentState"] = $val;
        return $this;
    }
    
    /**
    * Gets the linkedEligibleRoleAssignmentId
    * If this is a request for role activation, it represents the id of the eligible assignment being referred; Otherwise, the value is null.
    *
    * @return string The linkedEligibleRoleAssignmentId
    */
    public function getLinkedEligibleRoleAssignmentId()
    {
        if (array_key_exists("linkedEligibleRoleAssignmentId", $this->_propDict)) {
            return $this->_propDict["linkedEligibleRoleAssignmentId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the linkedEligibleRoleAssignmentId
    * If this is a request for role activation, it represents the id of the eligible assignment being referred; Otherwise, the value is null.
    *
    * @param string $val The linkedEligibleRoleAssignmentId
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setLinkedEligibleRoleAssignmentId($val)
    {
        $this->_propDict["linkedEligibleRoleAssignmentId"] = $val;
        return $this;
    }
    
    /**
    * Gets the reason
    * A message provided by users and administrators when create the request about why it is needed.
    *
    * @return string The reason
    */
    public function getReason()
    {
        if (array_key_exists("reason", $this->_propDict)) {
            return $this->_propDict["reason"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the reason
    * A message provided by users and administrators when create the request about why it is needed.
    *
    * @param string $val The reason
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setReason($val)
    {
        $this->_propDict["reason"] = $val;
        return $this;
    }
    
    /**
    * Gets the requestedDateTime
    * Read-only. The request create time. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The requestedDateTime
    */
    public function getRequestedDateTime()
    {
        if (array_key_exists("requestedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["requestedDateTime"], "\DateTime")) {
                return $this->_propDict["requestedDateTime"];
            } else {
                $this->_propDict["requestedDateTime"] = new \DateTime($this->_propDict["requestedDateTime"]);
                return $this->_propDict["requestedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the requestedDateTime
    * Read-only. The request create time. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The requestedDateTime
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setRequestedDateTime($val)
    {
        $this->_propDict["requestedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceId
    * Required. The id of the resource which the role assignment request is associated with.
    *
    * @return string The resourceId
    */
    public function getResourceId()
    {
        if (array_key_exists("resourceId", $this->_propDict)) {
            return $this->_propDict["resourceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceId
    * Required. The id of the resource which the role assignment request is associated with.
    *
    * @param string $val The resourceId
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setResourceId($val)
    {
        $this->_propDict["resourceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleDefinitionId
    * Required. The id of the role definition which the role assignment request is associated with.
    *
    * @return string The roleDefinitionId
    */
    public function getRoleDefinitionId()
    {
        if (array_key_exists("roleDefinitionId", $this->_propDict)) {
            return $this->_propDict["roleDefinitionId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleDefinitionId
    * Required. The id of the role definition which the role assignment request is associated with.
    *
    * @param string $val The roleDefinitionId
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setRoleDefinitionId($val)
    {
        $this->_propDict["roleDefinitionId"] = $val;
        return $this;
    }
    
    /**
    * Gets the schedule
    * The schedule object of the role assignment request.
    *
    * @return GovernanceSchedule The schedule
    */
    public function getSchedule()
    {
        if (array_key_exists("schedule", $this->_propDict)) {
            if (is_a($this->_propDict["schedule"], "\Beta\Microsoft\Graph\Model\GovernanceSchedule")) {
                return $this->_propDict["schedule"];
            } else {
                $this->_propDict["schedule"] = new GovernanceSchedule($this->_propDict["schedule"]);
                return $this->_propDict["schedule"];
            }
        }
        return null;
    }
    
    /**
    * Sets the schedule
    * The schedule object of the role assignment request.
    *
    * @param GovernanceSchedule $val The schedule
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setSchedule($val)
    {
        $this->_propDict["schedule"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * The status of the role assignment request.
    *
    * @return GovernanceRoleAssignmentRequestStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\GovernanceRoleAssignmentRequestStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new GovernanceRoleAssignmentRequestStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * The status of the role assignment request.
    *
    * @param GovernanceRoleAssignmentRequestStatus $val The status
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the subjectId
    * Required. The id of the subject which the role assignment request is associated with.
    *
    * @return string The subjectId
    */
    public function getSubjectId()
    {
        if (array_key_exists("subjectId", $this->_propDict)) {
            return $this->_propDict["subjectId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the subjectId
    * Required. The id of the subject which the role assignment request is associated with.
    *
    * @param string $val The subjectId
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setSubjectId($val)
    {
        $this->_propDict["subjectId"] = $val;
        return $this;
    }
    
    /**
    * Gets the type
    * Required. Representing the type of the operation on the role assignment. The possible values are: AdminAdd , UserAdd , AdminUpdate , AdminRemove , UserRemove , UserExtend , AdminExtend , UserRenew , AdminRenew.
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the type
    * Required. Representing the type of the operation on the role assignment. The possible values are: AdminAdd , UserAdd , AdminUpdate , AdminRemove , UserRemove , UserExtend , AdminExtend , UserRenew , AdminRenew.
    *
    * @param string $val The type
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    
    /**
    * Gets the resource
    * Read-only. The resource that the request aims to.
    *
    * @return GovernanceResource The resource
    */
    public function getResource()
    {
        if (array_key_exists("resource", $this->_propDict)) {
            if (is_a($this->_propDict["resource"], "\Beta\Microsoft\Graph\Model\GovernanceResource")) {
                return $this->_propDict["resource"];
            } else {
                $this->_propDict["resource"] = new GovernanceResource($this->_propDict["resource"]);
                return $this->_propDict["resource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the resource
    * Read-only. The resource that the request aims to.
    *
    * @param GovernanceResource $val The resource
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleDefinition
    * Read-only. The role definition that the request aims to.
    *
    * @return GovernanceRoleDefinition The roleDefinition
    */
    public function getRoleDefinition()
    {
        if (array_key_exists("roleDefinition", $this->_propDict)) {
            if (is_a($this->_propDict["roleDefinition"], "\Beta\Microsoft\Graph\Model\GovernanceRoleDefinition")) {
                return $this->_propDict["roleDefinition"];
            } else {
                $this->_propDict["roleDefinition"] = new GovernanceRoleDefinition($this->_propDict["roleDefinition"]);
                return $this->_propDict["roleDefinition"];
            }
        }
        return null;
    }
    
    /**
    * Sets the roleDefinition
    * Read-only. The role definition that the request aims to.
    *
    * @param GovernanceRoleDefinition $val The roleDefinition
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setRoleDefinition($val)
    {
        $this->_propDict["roleDefinition"] = $val;
        return $this;
    }
    
    /**
    * Gets the subject
    * Read-only. The user/group principal.
    *
    * @return GovernanceSubject The subject
    */
    public function getSubject()
    {
        if (array_key_exists("subject", $this->_propDict)) {
            if (is_a($this->_propDict["subject"], "\Beta\Microsoft\Graph\Model\GovernanceSubject")) {
                return $this->_propDict["subject"];
            } else {
                $this->_propDict["subject"] = new GovernanceSubject($this->_propDict["subject"]);
                return $this->_propDict["subject"];
            }
        }
        return null;
    }
    
    /**
    * Sets the subject
    * Read-only. The user/group principal.
    *
    * @param GovernanceSubject $val The subject
    *
    * @return GovernanceRoleAssignmentRequest
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }
    
}
