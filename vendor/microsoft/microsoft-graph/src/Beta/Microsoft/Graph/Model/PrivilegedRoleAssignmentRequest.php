<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrivilegedRoleAssignmentRequest File
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
* PrivilegedRoleAssignmentRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrivilegedRoleAssignmentRequest extends Entity
{
    /**
    * Gets the assignmentState
    * The state of the assignment. The value can be Eligible for eligible assignment Active - if it is directly assigned Active by administrators, or activated on an eligible assignment by the users.
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
    * The state of the assignment. The value can be Eligible for eligible assignment Active - if it is directly assigned Active by administrators, or activated on an eligible assignment by the users.
    *
    * @param string $val The assignmentState
    *
    * @return PrivilegedRoleAssignmentRequest
    */
    public function setAssignmentState($val)
    {
        $this->_propDict["assignmentState"] = $val;
        return $this;
    }
    
    /**
    * Gets the duration
    * The duration of a role assignment.
    *
    * @return string The duration
    */
    public function getDuration()
    {
        if (array_key_exists("duration", $this->_propDict)) {
            return $this->_propDict["duration"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the duration
    * The duration of a role assignment.
    *
    * @param string $val The duration
    *
    * @return PrivilegedRoleAssignmentRequest
    */
    public function setDuration($val)
    {
        $this->_propDict["duration"] = $val;
        return $this;
    }
    
    /**
    * Gets the reason
    * The reason for the role assignment.
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
    * The reason for the role assignment.
    *
    * @param string $val The reason
    *
    * @return PrivilegedRoleAssignmentRequest
    */
    public function setReason($val)
    {
        $this->_propDict["reason"] = $val;
        return $this;
    }
    
    /**
    * Gets the requestedDateTime
    * Read-only. The request create time. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
    * Read-only. The request create time. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    *
    * @param \DateTime $val The requestedDateTime
    *
    * @return PrivilegedRoleAssignmentRequest
    */
    public function setRequestedDateTime($val)
    {
        $this->_propDict["requestedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleId
    * The id of the role.
    *
    * @return string The roleId
    */
    public function getRoleId()
    {
        if (array_key_exists("roleId", $this->_propDict)) {
            return $this->_propDict["roleId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleId
    * The id of the role.
    *
    * @param string $val The roleId
    *
    * @return PrivilegedRoleAssignmentRequest
    */
    public function setRoleId($val)
    {
        $this->_propDict["roleId"] = $val;
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
    * @return PrivilegedRoleAssignmentRequest
    */
    public function setSchedule($val)
    {
        $this->_propDict["schedule"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * Read-only.The status of the role assignment request. The value can be NotStarted,Completed,RequestedApproval,Scheduled,Approved,ApprovalDenied,ApprovalAborted,Cancelling,Cancelled,Revoked,RequestExpired.
    *
    * @return string The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            return $this->_propDict["status"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the status
    * Read-only.The status of the role assignment request. The value can be NotStarted,Completed,RequestedApproval,Scheduled,Approved,ApprovalDenied,ApprovalAborted,Cancelling,Cancelled,Revoked,RequestExpired.
    *
    * @param string $val The status
    *
    * @return PrivilegedRoleAssignmentRequest
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the ticketNumber
    * The ticketNumber for the role assignment.
    *
    * @return string The ticketNumber
    */
    public function getTicketNumber()
    {
        if (array_key_exists("ticketNumber", $this->_propDict)) {
            return $this->_propDict["ticketNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ticketNumber
    * The ticketNumber for the role assignment.
    *
    * @param string $val The ticketNumber
    *
    * @return PrivilegedRoleAssignmentRequest
    */
    public function setTicketNumber($val)
    {
        $this->_propDict["ticketNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the ticketSystem
    * The ticketSystem for the role assignment.
    *
    * @return string The ticketSystem
    */
    public function getTicketSystem()
    {
        if (array_key_exists("ticketSystem", $this->_propDict)) {
            return $this->_propDict["ticketSystem"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ticketSystem
    * The ticketSystem for the role assignment.
    *
    * @param string $val The ticketSystem
    *
    * @return PrivilegedRoleAssignmentRequest
    */
    public function setTicketSystem($val)
    {
        $this->_propDict["ticketSystem"] = $val;
        return $this;
    }
    
    /**
    * Gets the type
    * Representing the type of the operation on the role assignment. The value can be AdminAdd: Administrators add users to roles;UserAdd: Users add role assignments.
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
    * Representing the type of the operation on the role assignment. The value can be AdminAdd: Administrators add users to roles;UserAdd: Users add role assignments.
    *
    * @param string $val The type
    *
    * @return PrivilegedRoleAssignmentRequest
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    * The id of the user.
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
    * The id of the user.
    *
    * @param string $val The userId
    *
    * @return PrivilegedRoleAssignmentRequest
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleInfo
    * The roleInfo object of the role assignment request.
    *
    * @return PrivilegedRole The roleInfo
    */
    public function getRoleInfo()
    {
        if (array_key_exists("roleInfo", $this->_propDict)) {
            if (is_a($this->_propDict["roleInfo"], "\Beta\Microsoft\Graph\Model\PrivilegedRole")) {
                return $this->_propDict["roleInfo"];
            } else {
                $this->_propDict["roleInfo"] = new PrivilegedRole($this->_propDict["roleInfo"]);
                return $this->_propDict["roleInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the roleInfo
    * The roleInfo object of the role assignment request.
    *
    * @param PrivilegedRole $val The roleInfo
    *
    * @return PrivilegedRoleAssignmentRequest
    */
    public function setRoleInfo($val)
    {
        $this->_propDict["roleInfo"] = $val;
        return $this;
    }
    
}
