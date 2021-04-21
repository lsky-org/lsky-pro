<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageAssignment File
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
* AccessPackageAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageAssignment extends Entity
{
    /**
    * Gets the accessPackageId
    * The identifier of the access package. Read-only.
    *
    * @return string The accessPackageId
    */
    public function getAccessPackageId()
    {
        if (array_key_exists("accessPackageId", $this->_propDict)) {
            return $this->_propDict["accessPackageId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accessPackageId
    * The identifier of the access package. Read-only.
    *
    * @param string $val The accessPackageId
    *
    * @return AccessPackageAssignment
    */
    public function setAccessPackageId($val)
    {
        $this->_propDict["accessPackageId"] = $val;
        return $this;
    }
    
    /**
    * Gets the assignmentPolicyId
    * The identifier of the access package assignment policy. Read-only.
    *
    * @return string The assignmentPolicyId
    */
    public function getAssignmentPolicyId()
    {
        if (array_key_exists("assignmentPolicyId", $this->_propDict)) {
            return $this->_propDict["assignmentPolicyId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assignmentPolicyId
    * The identifier of the access package assignment policy. Read-only.
    *
    * @param string $val The assignmentPolicyId
    *
    * @return AccessPackageAssignment
    */
    public function setAssignmentPolicyId($val)
    {
        $this->_propDict["assignmentPolicyId"] = $val;
        return $this;
    }
    
    /**
    * Gets the assignmentState
    * The state of the access package assignment. Possible values are Delivering, Delivered, or Expired. Read-only.
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
    * The state of the access package assignment. Possible values are Delivering, Delivered, or Expired. Read-only.
    *
    * @param string $val The assignmentState
    *
    * @return AccessPackageAssignment
    */
    public function setAssignmentState($val)
    {
        $this->_propDict["assignmentState"] = $val;
        return $this;
    }
    
    /**
    * Gets the assignmentStatus
    * More information about the assignment lifecycle.  Possible values include Delivering, Delivered, NearExpiry1DayNotificationTriggered, or ExpiredNotificationTriggered.  Read-only.
    *
    * @return string The assignmentStatus
    */
    public function getAssignmentStatus()
    {
        if (array_key_exists("assignmentStatus", $this->_propDict)) {
            return $this->_propDict["assignmentStatus"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assignmentStatus
    * More information about the assignment lifecycle.  Possible values include Delivering, Delivered, NearExpiry1DayNotificationTriggered, or ExpiredNotificationTriggered.  Read-only.
    *
    * @param string $val The assignmentStatus
    *
    * @return AccessPackageAssignment
    */
    public function setAssignmentStatus($val)
    {
        $this->_propDict["assignmentStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the catalogId
    * The identifier of the catalog containing the access package. Read-only.
    *
    * @return string The catalogId
    */
    public function getCatalogId()
    {
        if (array_key_exists("catalogId", $this->_propDict)) {
            return $this->_propDict["catalogId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the catalogId
    * The identifier of the catalog containing the access package. Read-only.
    *
    * @param string $val The catalogId
    *
    * @return AccessPackageAssignment
    */
    public function setCatalogId($val)
    {
        $this->_propDict["catalogId"] = $val;
        return $this;
    }
    
    /**
    * Gets the expiredDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The expiredDateTime
    */
    public function getExpiredDateTime()
    {
        if (array_key_exists("expiredDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expiredDateTime"], "\DateTime")) {
                return $this->_propDict["expiredDateTime"];
            } else {
                $this->_propDict["expiredDateTime"] = new \DateTime($this->_propDict["expiredDateTime"]);
                return $this->_propDict["expiredDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expiredDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The expiredDateTime
    *
    * @return AccessPackageAssignment
    */
    public function setExpiredDateTime($val)
    {
        $this->_propDict["expiredDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the isExtended
    * Indicates whether the access package assignment is extended. Read-only.
    *
    * @return bool The isExtended
    */
    public function getIsExtended()
    {
        if (array_key_exists("isExtended", $this->_propDict)) {
            return $this->_propDict["isExtended"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isExtended
    * Indicates whether the access package assignment is extended. Read-only.
    *
    * @param bool $val The isExtended
    *
    * @return AccessPackageAssignment
    */
    public function setIsExtended($val)
    {
        $this->_propDict["isExtended"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the schedule
    * When the access assignment is to be in place. Read-only.
    *
    * @return RequestSchedule The schedule
    */
    public function getSchedule()
    {
        if (array_key_exists("schedule", $this->_propDict)) {
            if (is_a($this->_propDict["schedule"], "\Beta\Microsoft\Graph\Model\RequestSchedule")) {
                return $this->_propDict["schedule"];
            } else {
                $this->_propDict["schedule"] = new RequestSchedule($this->_propDict["schedule"]);
                return $this->_propDict["schedule"];
            }
        }
        return null;
    }
    
    /**
    * Sets the schedule
    * When the access assignment is to be in place. Read-only.
    *
    * @param RequestSchedule $val The schedule
    *
    * @return AccessPackageAssignment
    */
    public function setSchedule($val)
    {
        $this->_propDict["schedule"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetId
    * The ID of the subject with the assignment. Read-only.
    *
    * @return string The targetId
    */
    public function getTargetId()
    {
        if (array_key_exists("targetId", $this->_propDict)) {
            return $this->_propDict["targetId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetId
    * The ID of the subject with the assignment. Read-only.
    *
    * @param string $val The targetId
    *
    * @return AccessPackageAssignment
    */
    public function setTargetId($val)
    {
        $this->_propDict["targetId"] = $val;
        return $this;
    }
    
    /**
    * Gets the accessPackage
    * Read-only. Nullable.
    *
    * @return AccessPackage The accessPackage
    */
    public function getAccessPackage()
    {
        if (array_key_exists("accessPackage", $this->_propDict)) {
            if (is_a($this->_propDict["accessPackage"], "\Beta\Microsoft\Graph\Model\AccessPackage")) {
                return $this->_propDict["accessPackage"];
            } else {
                $this->_propDict["accessPackage"] = new AccessPackage($this->_propDict["accessPackage"]);
                return $this->_propDict["accessPackage"];
            }
        }
        return null;
    }
    
    /**
    * Sets the accessPackage
    * Read-only. Nullable.
    *
    * @param AccessPackage $val The accessPackage
    *
    * @return AccessPackageAssignment
    */
    public function setAccessPackage($val)
    {
        $this->_propDict["accessPackage"] = $val;
        return $this;
    }
    
    /**
    * Gets the accessPackageAssignmentPolicy
    * Read-only. Nullable.
    *
    * @return AccessPackageAssignmentPolicy The accessPackageAssignmentPolicy
    */
    public function getAccessPackageAssignmentPolicy()
    {
        if (array_key_exists("accessPackageAssignmentPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["accessPackageAssignmentPolicy"], "\Beta\Microsoft\Graph\Model\AccessPackageAssignmentPolicy")) {
                return $this->_propDict["accessPackageAssignmentPolicy"];
            } else {
                $this->_propDict["accessPackageAssignmentPolicy"] = new AccessPackageAssignmentPolicy($this->_propDict["accessPackageAssignmentPolicy"]);
                return $this->_propDict["accessPackageAssignmentPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the accessPackageAssignmentPolicy
    * Read-only. Nullable.
    *
    * @param AccessPackageAssignmentPolicy $val The accessPackageAssignmentPolicy
    *
    * @return AccessPackageAssignment
    */
    public function setAccessPackageAssignmentPolicy($val)
    {
        $this->_propDict["accessPackageAssignmentPolicy"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackageAssignmentRequests
     *
     * @return array The accessPackageAssignmentRequests
     */
    public function getAccessPackageAssignmentRequests()
    {
        if (array_key_exists("accessPackageAssignmentRequests", $this->_propDict)) {
           return $this->_propDict["accessPackageAssignmentRequests"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the accessPackageAssignmentRequests
    *
    * @param AccessPackageAssignmentRequest $val The accessPackageAssignmentRequests
    *
    * @return AccessPackageAssignment
    */
    public function setAccessPackageAssignmentRequests($val)
    {
		$this->_propDict["accessPackageAssignmentRequests"] = $val;
        return $this;
    }
    

     /** 
     * Gets the accessPackageAssignmentResourceRoles
    * The resource roles delivered to the target user for this assignment. Read-only. Nullable.
     *
     * @return array The accessPackageAssignmentResourceRoles
     */
    public function getAccessPackageAssignmentResourceRoles()
    {
        if (array_key_exists("accessPackageAssignmentResourceRoles", $this->_propDict)) {
           return $this->_propDict["accessPackageAssignmentResourceRoles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the accessPackageAssignmentResourceRoles
    * The resource roles delivered to the target user for this assignment. Read-only. Nullable.
    *
    * @param AccessPackageAssignmentResourceRole $val The accessPackageAssignmentResourceRoles
    *
    * @return AccessPackageAssignment
    */
    public function setAccessPackageAssignmentResourceRoles($val)
    {
		$this->_propDict["accessPackageAssignmentResourceRoles"] = $val;
        return $this;
    }
    
    /**
    * Gets the target
    * The subject of the access package assignment. Read-only. Nullable.
    *
    * @return AccessPackageSubject The target
    */
    public function getTarget()
    {
        if (array_key_exists("target", $this->_propDict)) {
            if (is_a($this->_propDict["target"], "\Beta\Microsoft\Graph\Model\AccessPackageSubject")) {
                return $this->_propDict["target"];
            } else {
                $this->_propDict["target"] = new AccessPackageSubject($this->_propDict["target"]);
                return $this->_propDict["target"];
            }
        }
        return null;
    }
    
    /**
    * Sets the target
    * The subject of the access package assignment. Read-only. Nullable.
    *
    * @param AccessPackageSubject $val The target
    *
    * @return AccessPackageAssignment
    */
    public function setTarget($val)
    {
        $this->_propDict["target"] = $val;
        return $this;
    }
    
}
