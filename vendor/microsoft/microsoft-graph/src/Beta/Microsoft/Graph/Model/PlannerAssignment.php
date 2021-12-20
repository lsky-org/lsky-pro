<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerAssignment File
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
* PlannerAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerAssignment extends Entity
{

    /**
    * Gets the assignedBy
    * The identity of the user that performed the assignment of the task, i.e. the assignor.
    *
    * @return IdentitySet The assignedBy
    */
    public function getAssignedBy()
    {
        if (array_key_exists("assignedBy", $this->_propDict)) {
            if (is_a($this->_propDict["assignedBy"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["assignedBy"];
            } else {
                $this->_propDict["assignedBy"] = new IdentitySet($this->_propDict["assignedBy"]);
                return $this->_propDict["assignedBy"];
            }
        }
        return null;
    }

    /**
    * Sets the assignedBy
    * The identity of the user that performed the assignment of the task, i.e. the assignor.
    *
    * @param IdentitySet $val The value to assign to the assignedBy
    *
    * @return PlannerAssignment The PlannerAssignment
    */
    public function setAssignedBy($val)
    {
        $this->_propDict["assignedBy"] = $val;
         return $this;
    }

    /**
    * Gets the assignedDateTime
    * The time at which the task was assigned. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The assignedDateTime
    */
    public function getAssignedDateTime()
    {
        if (array_key_exists("assignedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["assignedDateTime"], "\DateTime")) {
                return $this->_propDict["assignedDateTime"];
            } else {
                $this->_propDict["assignedDateTime"] = new \DateTime($this->_propDict["assignedDateTime"]);
                return $this->_propDict["assignedDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the assignedDateTime
    * The time at which the task was assigned. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The value to assign to the assignedDateTime
    *
    * @return PlannerAssignment The PlannerAssignment
    */
    public function setAssignedDateTime($val)
    {
        $this->_propDict["assignedDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the orderHint
    * Hint used to order assignees in a task. The format is defined as outlined here.
    *
    * @return string The orderHint
    */
    public function getOrderHint()
    {
        if (array_key_exists("orderHint", $this->_propDict)) {
            return $this->_propDict["orderHint"];
        } else {
            return null;
        }
    }

    /**
    * Sets the orderHint
    * Hint used to order assignees in a task. The format is defined as outlined here.
    *
    * @param string $val The value of the orderHint
    *
    * @return PlannerAssignment
    */
    public function setOrderHint($val)
    {
        $this->_propDict["orderHint"] = $val;
        return $this;
    }
}
