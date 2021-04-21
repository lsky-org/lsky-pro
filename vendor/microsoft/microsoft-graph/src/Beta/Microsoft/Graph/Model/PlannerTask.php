<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlannerTask File
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
* PlannerTask class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlannerTask extends PlannerDelta
{
    /**
    * Gets the activeChecklistItemCount
    * Number of checklist items with value set to false, representing incomplete items.
    *
    * @return int The activeChecklistItemCount
    */
    public function getActiveChecklistItemCount()
    {
        if (array_key_exists("activeChecklistItemCount", $this->_propDict)) {
            return $this->_propDict["activeChecklistItemCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activeChecklistItemCount
    * Number of checklist items with value set to false, representing incomplete items.
    *
    * @param int $val The activeChecklistItemCount
    *
    * @return PlannerTask
    */
    public function setActiveChecklistItemCount($val)
    {
        $this->_propDict["activeChecklistItemCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the appliedCategories
    * The categories to which the task has been applied. See applied Categories for possible values.
    *
    * @return PlannerAppliedCategories The appliedCategories
    */
    public function getAppliedCategories()
    {
        if (array_key_exists("appliedCategories", $this->_propDict)) {
            if (is_a($this->_propDict["appliedCategories"], "\Beta\Microsoft\Graph\Model\PlannerAppliedCategories")) {
                return $this->_propDict["appliedCategories"];
            } else {
                $this->_propDict["appliedCategories"] = new PlannerAppliedCategories($this->_propDict["appliedCategories"]);
                return $this->_propDict["appliedCategories"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appliedCategories
    * The categories to which the task has been applied. See applied Categories for possible values.
    *
    * @param PlannerAppliedCategories $val The appliedCategories
    *
    * @return PlannerTask
    */
    public function setAppliedCategories($val)
    {
        $this->_propDict["appliedCategories"] = $val;
        return $this;
    }
    
    /**
    * Gets the assigneePriority
    * Hint used to order items of this type in a list view. The format is defined as outlined here.
    *
    * @return string The assigneePriority
    */
    public function getAssigneePriority()
    {
        if (array_key_exists("assigneePriority", $this->_propDict)) {
            return $this->_propDict["assigneePriority"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assigneePriority
    * Hint used to order items of this type in a list view. The format is defined as outlined here.
    *
    * @param string $val The assigneePriority
    *
    * @return PlannerTask
    */
    public function setAssigneePriority($val)
    {
        $this->_propDict["assigneePriority"] = $val;
        return $this;
    }
    
    /**
    * Gets the assignments
    * The set of assignees the task is assigned to.
    *
    * @return PlannerAssignments The assignments
    */
    public function getAssignments()
    {
        if (array_key_exists("assignments", $this->_propDict)) {
            if (is_a($this->_propDict["assignments"], "\Beta\Microsoft\Graph\Model\PlannerAssignments")) {
                return $this->_propDict["assignments"];
            } else {
                $this->_propDict["assignments"] = new PlannerAssignments($this->_propDict["assignments"]);
                return $this->_propDict["assignments"];
            }
        }
        return null;
    }
    
    /**
    * Sets the assignments
    * The set of assignees the task is assigned to.
    *
    * @param PlannerAssignments $val The assignments
    *
    * @return PlannerTask
    */
    public function setAssignments($val)
    {
        $this->_propDict["assignments"] = $val;
        return $this;
    }
    
    /**
    * Gets the bucketId
    * Bucket ID to which the task belongs. The bucket needs to be in the plan that the task is in. It is 28 characters long and case-sensitive. Format validation is done on the service.
    *
    * @return string The bucketId
    */
    public function getBucketId()
    {
        if (array_key_exists("bucketId", $this->_propDict)) {
            return $this->_propDict["bucketId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bucketId
    * Bucket ID to which the task belongs. The bucket needs to be in the plan that the task is in. It is 28 characters long and case-sensitive. Format validation is done on the service.
    *
    * @param string $val The bucketId
    *
    * @return PlannerTask
    */
    public function setBucketId($val)
    {
        $this->_propDict["bucketId"] = $val;
        return $this;
    }
    
    /**
    * Gets the checklistItemCount
    * Number of checklist items that are present on the task.
    *
    * @return int The checklistItemCount
    */
    public function getChecklistItemCount()
    {
        if (array_key_exists("checklistItemCount", $this->_propDict)) {
            return $this->_propDict["checklistItemCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the checklistItemCount
    * Number of checklist items that are present on the task.
    *
    * @param int $val The checklistItemCount
    *
    * @return PlannerTask
    */
    public function setChecklistItemCount($val)
    {
        $this->_propDict["checklistItemCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the completedBy
    * Identity of the user that completed the task.
    *
    * @return IdentitySet The completedBy
    */
    public function getCompletedBy()
    {
        if (array_key_exists("completedBy", $this->_propDict)) {
            if (is_a($this->_propDict["completedBy"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["completedBy"];
            } else {
                $this->_propDict["completedBy"] = new IdentitySet($this->_propDict["completedBy"]);
                return $this->_propDict["completedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the completedBy
    * Identity of the user that completed the task.
    *
    * @param IdentitySet $val The completedBy
    *
    * @return PlannerTask
    */
    public function setCompletedBy($val)
    {
        $this->_propDict["completedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the completedDateTime
    * Read-only. Date and time at which the 'percentComplete' of the task is set to '100'. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The completedDateTime
    */
    public function getCompletedDateTime()
    {
        if (array_key_exists("completedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["completedDateTime"], "\DateTime")) {
                return $this->_propDict["completedDateTime"];
            } else {
                $this->_propDict["completedDateTime"] = new \DateTime($this->_propDict["completedDateTime"]);
                return $this->_propDict["completedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the completedDateTime
    * Read-only. Date and time at which the 'percentComplete' of the task is set to '100'. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The completedDateTime
    *
    * @return PlannerTask
    */
    public function setCompletedDateTime($val)
    {
        $this->_propDict["completedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the conversationThreadId
    * Thread ID of the conversation on the task. This is the ID of the conversation thread object created in the group.
    *
    * @return string The conversationThreadId
    */
    public function getConversationThreadId()
    {
        if (array_key_exists("conversationThreadId", $this->_propDict)) {
            return $this->_propDict["conversationThreadId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the conversationThreadId
    * Thread ID of the conversation on the task. This is the ID of the conversation thread object created in the group.
    *
    * @param string $val The conversationThreadId
    *
    * @return PlannerTask
    */
    public function setConversationThreadId($val)
    {
        $this->_propDict["conversationThreadId"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdBy
    * Identity of the user that created the task.
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
    * Identity of the user that created the task.
    *
    * @param IdentitySet $val The createdBy
    *
    * @return PlannerTask
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * Read-only. Date and time at which the task is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
    * Read-only. Date and time at which the task is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return PlannerTask
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the creationSource
    * Contains information about the origin of the task.
    *
    * @return PlannerTaskCreation The creationSource
    */
    public function getCreationSource()
    {
        if (array_key_exists("creationSource", $this->_propDict)) {
            if (is_a($this->_propDict["creationSource"], "\Beta\Microsoft\Graph\Model\PlannerTaskCreation")) {
                return $this->_propDict["creationSource"];
            } else {
                $this->_propDict["creationSource"] = new PlannerTaskCreation($this->_propDict["creationSource"]);
                return $this->_propDict["creationSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the creationSource
    * Contains information about the origin of the task.
    *
    * @param PlannerTaskCreation $val The creationSource
    *
    * @return PlannerTask
    */
    public function setCreationSource($val)
    {
        $this->_propDict["creationSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the dueDateTime
    * Date and time at which the task is due. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The dueDateTime
    */
    public function getDueDateTime()
    {
        if (array_key_exists("dueDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["dueDateTime"], "\DateTime")) {
                return $this->_propDict["dueDateTime"];
            } else {
                $this->_propDict["dueDateTime"] = new \DateTime($this->_propDict["dueDateTime"]);
                return $this->_propDict["dueDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the dueDateTime
    * Date and time at which the task is due. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The dueDateTime
    *
    * @return PlannerTask
    */
    public function setDueDateTime($val)
    {
        $this->_propDict["dueDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the hasDescription
    * Read-only. Value is true if the details object of the task has a non-empty description and false otherwise.
    *
    * @return bool The hasDescription
    */
    public function getHasDescription()
    {
        if (array_key_exists("hasDescription", $this->_propDict)) {
            return $this->_propDict["hasDescription"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hasDescription
    * Read-only. Value is true if the details object of the task has a non-empty description and false otherwise.
    *
    * @param bool $val The hasDescription
    *
    * @return PlannerTask
    */
    public function setHasDescription($val)
    {
        $this->_propDict["hasDescription"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the orderHint
    * Hint used to order items of this type in a list view. The format is defined as outlined here.
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
    * Hint used to order items of this type in a list view. The format is defined as outlined here.
    *
    * @param string $val The orderHint
    *
    * @return PlannerTask
    */
    public function setOrderHint($val)
    {
        $this->_propDict["orderHint"] = $val;
        return $this;
    }
    
    /**
    * Gets the percentComplete
    * Percentage of task completion. When set to 100, the task is considered completed.
    *
    * @return int The percentComplete
    */
    public function getPercentComplete()
    {
        if (array_key_exists("percentComplete", $this->_propDict)) {
            return $this->_propDict["percentComplete"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the percentComplete
    * Percentage of task completion. When set to 100, the task is considered completed.
    *
    * @param int $val The percentComplete
    *
    * @return PlannerTask
    */
    public function setPercentComplete($val)
    {
        $this->_propDict["percentComplete"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the planId
    * Plan ID to which the task belongs.
    *
    * @return string The planId
    */
    public function getPlanId()
    {
        if (array_key_exists("planId", $this->_propDict)) {
            return $this->_propDict["planId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the planId
    * Plan ID to which the task belongs.
    *
    * @param string $val The planId
    *
    * @return PlannerTask
    */
    public function setPlanId($val)
    {
        $this->_propDict["planId"] = $val;
        return $this;
    }
    
    /**
    * Gets the previewType
    * This sets the type of preview that shows up on the task. Possible values are: automatic, noPreview, checklist, description, reference.
    *
    * @return PlannerPreviewType The previewType
    */
    public function getPreviewType()
    {
        if (array_key_exists("previewType", $this->_propDict)) {
            if (is_a($this->_propDict["previewType"], "\Beta\Microsoft\Graph\Model\PlannerPreviewType")) {
                return $this->_propDict["previewType"];
            } else {
                $this->_propDict["previewType"] = new PlannerPreviewType($this->_propDict["previewType"]);
                return $this->_propDict["previewType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the previewType
    * This sets the type of preview that shows up on the task. Possible values are: automatic, noPreview, checklist, description, reference.
    *
    * @param PlannerPreviewType $val The previewType
    *
    * @return PlannerTask
    */
    public function setPreviewType($val)
    {
        $this->_propDict["previewType"] = $val;
        return $this;
    }
    
    /**
    * Gets the priority
    * Priority of the task. Valid range of values is between 0 and 10 (inclusive), with increasing value being lower priority (0 has the highest priority and 10 has the lowest priority).  Currently, Planner interprets values 0 and 1 as 'urgent', 2 and 3 and 4 as 'important', 5, 6, and 7 as 'medium', and 8, 9, and 10 as 'low'.  Currently, Planner sets the value 1 for 'urgent', 3 for 'important', 5 for 'medium', and 9 for 'low'.
    *
    * @return int The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            return $this->_propDict["priority"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the priority
    * Priority of the task. Valid range of values is between 0 and 10 (inclusive), with increasing value being lower priority (0 has the highest priority and 10 has the lowest priority).  Currently, Planner interprets values 0 and 1 as 'urgent', 2 and 3 and 4 as 'important', 5, 6, and 7 as 'medium', and 8, 9, and 10 as 'low'.  Currently, Planner sets the value 1 for 'urgent', 3 for 'important', 5 for 'medium', and 9 for 'low'.
    *
    * @param int $val The priority
    *
    * @return PlannerTask
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the referenceCount
    * Number of external references that exist on the task.
    *
    * @return int The referenceCount
    */
    public function getReferenceCount()
    {
        if (array_key_exists("referenceCount", $this->_propDict)) {
            return $this->_propDict["referenceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the referenceCount
    * Number of external references that exist on the task.
    *
    * @param int $val The referenceCount
    *
    * @return PlannerTask
    */
    public function setReferenceCount($val)
    {
        $this->_propDict["referenceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the startDateTime
    * Date and time at which the task starts. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
    * Date and time at which the task starts. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The startDateTime
    *
    * @return PlannerTask
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the title
    * Title of the task.
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
    * Title of the task.
    *
    * @param string $val The title
    *
    * @return PlannerTask
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
    
    /**
    * Gets the assignedToTaskBoardFormat
    * Read-only. Nullable. Used to render the task correctly in the task board view when grouped by assignedTo.
    *
    * @return PlannerAssignedToTaskBoardTaskFormat The assignedToTaskBoardFormat
    */
    public function getAssignedToTaskBoardFormat()
    {
        if (array_key_exists("assignedToTaskBoardFormat", $this->_propDict)) {
            if (is_a($this->_propDict["assignedToTaskBoardFormat"], "\Beta\Microsoft\Graph\Model\PlannerAssignedToTaskBoardTaskFormat")) {
                return $this->_propDict["assignedToTaskBoardFormat"];
            } else {
                $this->_propDict["assignedToTaskBoardFormat"] = new PlannerAssignedToTaskBoardTaskFormat($this->_propDict["assignedToTaskBoardFormat"]);
                return $this->_propDict["assignedToTaskBoardFormat"];
            }
        }
        return null;
    }
    
    /**
    * Sets the assignedToTaskBoardFormat
    * Read-only. Nullable. Used to render the task correctly in the task board view when grouped by assignedTo.
    *
    * @param PlannerAssignedToTaskBoardTaskFormat $val The assignedToTaskBoardFormat
    *
    * @return PlannerTask
    */
    public function setAssignedToTaskBoardFormat($val)
    {
        $this->_propDict["assignedToTaskBoardFormat"] = $val;
        return $this;
    }
    
    /**
    * Gets the bucketTaskBoardFormat
    * Read-only. Nullable. Used to render the task correctly in the task board view when grouped by bucket.
    *
    * @return PlannerBucketTaskBoardTaskFormat The bucketTaskBoardFormat
    */
    public function getBucketTaskBoardFormat()
    {
        if (array_key_exists("bucketTaskBoardFormat", $this->_propDict)) {
            if (is_a($this->_propDict["bucketTaskBoardFormat"], "\Beta\Microsoft\Graph\Model\PlannerBucketTaskBoardTaskFormat")) {
                return $this->_propDict["bucketTaskBoardFormat"];
            } else {
                $this->_propDict["bucketTaskBoardFormat"] = new PlannerBucketTaskBoardTaskFormat($this->_propDict["bucketTaskBoardFormat"]);
                return $this->_propDict["bucketTaskBoardFormat"];
            }
        }
        return null;
    }
    
    /**
    * Sets the bucketTaskBoardFormat
    * Read-only. Nullable. Used to render the task correctly in the task board view when grouped by bucket.
    *
    * @param PlannerBucketTaskBoardTaskFormat $val The bucketTaskBoardFormat
    *
    * @return PlannerTask
    */
    public function setBucketTaskBoardFormat($val)
    {
        $this->_propDict["bucketTaskBoardFormat"] = $val;
        return $this;
    }
    
    /**
    * Gets the details
    * Read-only. Nullable. Additional details about the task.
    *
    * @return PlannerTaskDetails The details
    */
    public function getDetails()
    {
        if (array_key_exists("details", $this->_propDict)) {
            if (is_a($this->_propDict["details"], "\Beta\Microsoft\Graph\Model\PlannerTaskDetails")) {
                return $this->_propDict["details"];
            } else {
                $this->_propDict["details"] = new PlannerTaskDetails($this->_propDict["details"]);
                return $this->_propDict["details"];
            }
        }
        return null;
    }
    
    /**
    * Sets the details
    * Read-only. Nullable. Additional details about the task.
    *
    * @param PlannerTaskDetails $val The details
    *
    * @return PlannerTask
    */
    public function setDetails($val)
    {
        $this->_propDict["details"] = $val;
        return $this;
    }
    
    /**
    * Gets the progressTaskBoardFormat
    * Read-only. Nullable. Used to render the task correctly in the task board view when grouped by progress.
    *
    * @return PlannerProgressTaskBoardTaskFormat The progressTaskBoardFormat
    */
    public function getProgressTaskBoardFormat()
    {
        if (array_key_exists("progressTaskBoardFormat", $this->_propDict)) {
            if (is_a($this->_propDict["progressTaskBoardFormat"], "\Beta\Microsoft\Graph\Model\PlannerProgressTaskBoardTaskFormat")) {
                return $this->_propDict["progressTaskBoardFormat"];
            } else {
                $this->_propDict["progressTaskBoardFormat"] = new PlannerProgressTaskBoardTaskFormat($this->_propDict["progressTaskBoardFormat"]);
                return $this->_propDict["progressTaskBoardFormat"];
            }
        }
        return null;
    }
    
    /**
    * Sets the progressTaskBoardFormat
    * Read-only. Nullable. Used to render the task correctly in the task board view when grouped by progress.
    *
    * @param PlannerProgressTaskBoardTaskFormat $val The progressTaskBoardFormat
    *
    * @return PlannerTask
    */
    public function setProgressTaskBoardFormat($val)
    {
        $this->_propDict["progressTaskBoardFormat"] = $val;
        return $this;
    }
    
}
