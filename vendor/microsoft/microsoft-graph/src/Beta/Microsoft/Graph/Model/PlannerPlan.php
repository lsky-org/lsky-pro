<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerPlan File
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
* PlannerPlan class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerPlan extends PlannerDelta
{
    /**
    * Gets the container
    * Identifies the container of the plan. After it is set, this property can’t be updated. Required.
    *
    * @return PlannerPlanContainer The container
    */
    public function getContainer()
    {
        if (array_key_exists("container", $this->_propDict)) {
            if (is_a($this->_propDict["container"], "\Beta\Microsoft\Graph\Model\PlannerPlanContainer")) {
                return $this->_propDict["container"];
            } else {
                $this->_propDict["container"] = new PlannerPlanContainer($this->_propDict["container"]);
                return $this->_propDict["container"];
            }
        }
        return null;
    }
    
    /**
    * Sets the container
    * Identifies the container of the plan. After it is set, this property can’t be updated. Required.
    *
    * @param PlannerPlanContainer $val The container
    *
    * @return PlannerPlan
    */
    public function setContainer($val)
    {
        $this->_propDict["container"] = $val;
        return $this;
    }
    
    /**
    * Gets the contexts
    * Read-only. Additional user experiences in which this plan is used, represented as plannerPlanContext entries.
    *
    * @return PlannerPlanContextCollection The contexts
    */
    public function getContexts()
    {
        if (array_key_exists("contexts", $this->_propDict)) {
            if (is_a($this->_propDict["contexts"], "\Beta\Microsoft\Graph\Model\PlannerPlanContextCollection")) {
                return $this->_propDict["contexts"];
            } else {
                $this->_propDict["contexts"] = new PlannerPlanContextCollection($this->_propDict["contexts"]);
                return $this->_propDict["contexts"];
            }
        }
        return null;
    }
    
    /**
    * Sets the contexts
    * Read-only. Additional user experiences in which this plan is used, represented as plannerPlanContext entries.
    *
    * @param PlannerPlanContextCollection $val The contexts
    *
    * @return PlannerPlan
    */
    public function setContexts($val)
    {
        $this->_propDict["contexts"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdBy
    * Read-only. The user who created the plan.
    *
    * @return IdentitySet The createdBy
    */
    public function getCreatedBy()
    {
        if (array_key_exists("createdBy", $this->_propDict)) {
            if (is_a($this->_propDict["createdBy"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["createdBy"];
            } else {
                $this->_propDict["createdBy"] = new IdentitySet($this->_propDict["createdBy"]);
                return $this->_propDict["createdBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdBy
    * Read-only. The user who created the plan.
    *
    * @param IdentitySet $val The createdBy
    *
    * @return PlannerPlan
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * Read-only. Date and time at which the plan is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * Read-only. Date and time at which the plan is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return PlannerPlan
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the owner
    * ID of the Group that owns the plan. A valid group must exist before this field can be set. After it is set, this property can’t be updated.
    *
    * @return string The owner
    */
    public function getOwner()
    {
        if (array_key_exists("owner", $this->_propDict)) {
            return $this->_propDict["owner"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the owner
    * ID of the Group that owns the plan. A valid group must exist before this field can be set. After it is set, this property can’t be updated.
    *
    * @param string $val The owner
    *
    * @return PlannerPlan
    */
    public function setOwner($val)
    {
        $this->_propDict["owner"] = $val;
        return $this;
    }
    
    /**
    * Gets the title
    * Required. Title of the plan.
    *
    * @return string The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            return $this->_propDict["title"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the title
    * Required. Title of the plan.
    *
    * @param string $val The title
    *
    * @return PlannerPlan
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
    

     /** 
     * Gets the buckets
    * Collection of buckets in the plan. Read-only. Nullable.
     *
     * @return array The buckets
     */
    public function getBuckets()
    {
        if (array_key_exists("buckets", $this->_propDict)) {
           return $this->_propDict["buckets"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the buckets
    * Collection of buckets in the plan. Read-only. Nullable.
    *
    * @param PlannerBucket $val The buckets
    *
    * @return PlannerPlan
    */
    public function setBuckets($val)
    {
		$this->_propDict["buckets"] = $val;
        return $this;
    }
    
    /**
    * Gets the details
    * Additional details about the plan. Read-only. Nullable.
    *
    * @return PlannerPlanDetails The details
    */
    public function getDetails()
    {
        if (array_key_exists("details", $this->_propDict)) {
            if (is_a($this->_propDict["details"], "\Beta\Microsoft\Graph\Model\PlannerPlanDetails")) {
                return $this->_propDict["details"];
            } else {
                $this->_propDict["details"] = new PlannerPlanDetails($this->_propDict["details"]);
                return $this->_propDict["details"];
            }
        }
        return null;
    }
    
    /**
    * Sets the details
    * Additional details about the plan. Read-only. Nullable.
    *
    * @param PlannerPlanDetails $val The details
    *
    * @return PlannerPlan
    */
    public function setDetails($val)
    {
        $this->_propDict["details"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tasks
    * Collection of tasks in the plan. Read-only. Nullable.
     *
     * @return array The tasks
     */
    public function getTasks()
    {
        if (array_key_exists("tasks", $this->_propDict)) {
           return $this->_propDict["tasks"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tasks
    * Collection of tasks in the plan. Read-only. Nullable.
    *
    * @param PlannerTask $val The tasks
    *
    * @return PlannerPlan
    */
    public function setTasks($val)
    {
		$this->_propDict["tasks"] = $val;
        return $this;
    }
    
}
