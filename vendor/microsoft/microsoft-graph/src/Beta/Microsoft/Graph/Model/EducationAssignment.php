<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationAssignment File
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
* EducationAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationAssignment extends Entity
{
    /**
    * Gets the addedStudentAction
    * Optional field to control the assignment behavior for students who are added after the assignment is published. If not specified, defaults to none value. Currently supports only two values: none or assignIfOpen.
    *
    * @return EducationAddedStudentAction The addedStudentAction
    */
    public function getAddedStudentAction()
    {
        if (array_key_exists("addedStudentAction", $this->_propDict)) {
            if (is_a($this->_propDict["addedStudentAction"], "\Beta\Microsoft\Graph\Model\EducationAddedStudentAction")) {
                return $this->_propDict["addedStudentAction"];
            } else {
                $this->_propDict["addedStudentAction"] = new EducationAddedStudentAction($this->_propDict["addedStudentAction"]);
                return $this->_propDict["addedStudentAction"];
            }
        }
        return null;
    }
    
    /**
    * Sets the addedStudentAction
    * Optional field to control the assignment behavior for students who are added after the assignment is published. If not specified, defaults to none value. Currently supports only two values: none or assignIfOpen.
    *
    * @param EducationAddedStudentAction $val The addedStudentAction
    *
    * @return EducationAssignment
    */
    public function setAddedStudentAction($val)
    {
        $this->_propDict["addedStudentAction"] = $val;
        return $this;
    }
    
    /**
    * Gets the allowLateSubmissions
    * Identifies whether students can submit after the due date. If this property is not specified during create, it defaults to true.
    *
    * @return bool The allowLateSubmissions
    */
    public function getAllowLateSubmissions()
    {
        if (array_key_exists("allowLateSubmissions", $this->_propDict)) {
            return $this->_propDict["allowLateSubmissions"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowLateSubmissions
    * Identifies whether students can submit after the due date. If this property is not specified during create, it defaults to true.
    *
    * @param bool $val The allowLateSubmissions
    *
    * @return EducationAssignment
    */
    public function setAllowLateSubmissions($val)
    {
        $this->_propDict["allowLateSubmissions"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the allowStudentsToAddResourcesToSubmission
    * Identifies whether students can add their own resources to a submission or if they can only modify resources added by the teacher.
    *
    * @return bool The allowStudentsToAddResourcesToSubmission
    */
    public function getAllowStudentsToAddResourcesToSubmission()
    {
        if (array_key_exists("allowStudentsToAddResourcesToSubmission", $this->_propDict)) {
            return $this->_propDict["allowStudentsToAddResourcesToSubmission"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowStudentsToAddResourcesToSubmission
    * Identifies whether students can add their own resources to a submission or if they can only modify resources added by the teacher.
    *
    * @param bool $val The allowStudentsToAddResourcesToSubmission
    *
    * @return EducationAssignment
    */
    public function setAllowStudentsToAddResourcesToSubmission($val)
    {
        $this->_propDict["allowStudentsToAddResourcesToSubmission"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the assignDateTime
    * The date when the assignment should become active.  If in the future, the assignment is not shown to the student until this date.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The assignDateTime
    */
    public function getAssignDateTime()
    {
        if (array_key_exists("assignDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["assignDateTime"], "\DateTime")) {
                return $this->_propDict["assignDateTime"];
            } else {
                $this->_propDict["assignDateTime"] = new \DateTime($this->_propDict["assignDateTime"]);
                return $this->_propDict["assignDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the assignDateTime
    * The date when the assignment should become active.  If in the future, the assignment is not shown to the student until this date.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The assignDateTime
    *
    * @return EducationAssignment
    */
    public function setAssignDateTime($val)
    {
        $this->_propDict["assignDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the assignedDateTime
    * The moment that the assignment was published to students and the assignment shows up on the students timeline.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
    * The moment that the assignment was published to students and the assignment shows up on the students timeline.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The assignedDateTime
    *
    * @return EducationAssignment
    */
    public function setAssignedDateTime($val)
    {
        $this->_propDict["assignedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the assignTo
    * Which users, or whole class should receive a submission object once the assignment is published.
    *
    * @return EducationAssignmentRecipient The assignTo
    */
    public function getAssignTo()
    {
        if (array_key_exists("assignTo", $this->_propDict)) {
            if (is_a($this->_propDict["assignTo"], "\Beta\Microsoft\Graph\Model\EducationAssignmentRecipient")) {
                return $this->_propDict["assignTo"];
            } else {
                $this->_propDict["assignTo"] = new EducationAssignmentRecipient($this->_propDict["assignTo"]);
                return $this->_propDict["assignTo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the assignTo
    * Which users, or whole class should receive a submission object once the assignment is published.
    *
    * @param EducationAssignmentRecipient $val The assignTo
    *
    * @return EducationAssignment
    */
    public function setAssignTo($val)
    {
        $this->_propDict["assignTo"] = $val;
        return $this;
    }
    
    /**
    * Gets the classId
    * Class which this assignment belongs.
    *
    * @return string The classId
    */
    public function getClassId()
    {
        if (array_key_exists("classId", $this->_propDict)) {
            return $this->_propDict["classId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the classId
    * Class which this assignment belongs.
    *
    * @param string $val The classId
    *
    * @return EducationAssignment
    */
    public function setClassId($val)
    {
        $this->_propDict["classId"] = $val;
        return $this;
    }
    
    /**
    * Gets the closeDateTime
    * Date when the assignment will be closed for submissions. This is an optional field that can be null if the assignment does not allowLateSubmissions or when the closeDateTime is the same as the dueDateTime. But if specified, then the closeDateTime must be greater than or equal to the dueDateTime. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The closeDateTime
    */
    public function getCloseDateTime()
    {
        if (array_key_exists("closeDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["closeDateTime"], "\DateTime")) {
                return $this->_propDict["closeDateTime"];
            } else {
                $this->_propDict["closeDateTime"] = new \DateTime($this->_propDict["closeDateTime"]);
                return $this->_propDict["closeDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the closeDateTime
    * Date when the assignment will be closed for submissions. This is an optional field that can be null if the assignment does not allowLateSubmissions or when the closeDateTime is the same as the dueDateTime. But if specified, then the closeDateTime must be greater than or equal to the dueDateTime. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The closeDateTime
    *
    * @return EducationAssignment
    */
    public function setCloseDateTime($val)
    {
        $this->_propDict["closeDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdBy
    * Who created the assignment.
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
    * Who created the assignment.
    *
    * @param IdentitySet $val The createdBy
    *
    * @return EducationAssignment
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * Moment when the assignment was created.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
    * Moment when the assignment was created.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return EducationAssignment
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * Name of the assignment.
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * Name of the assignment.
    *
    * @param string $val The displayName
    *
    * @return EducationAssignment
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the dueDateTime
    * Date when the students assignment is due.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
    * Date when the students assignment is due.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The dueDateTime
    *
    * @return EducationAssignment
    */
    public function setDueDateTime($val)
    {
        $this->_propDict["dueDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the grading
    * How the assignment will be graded.
    *
    * @return EducationAssignmentGradeType The grading
    */
    public function getGrading()
    {
        if (array_key_exists("grading", $this->_propDict)) {
            if (is_a($this->_propDict["grading"], "\Beta\Microsoft\Graph\Model\EducationAssignmentGradeType")) {
                return $this->_propDict["grading"];
            } else {
                $this->_propDict["grading"] = new EducationAssignmentGradeType($this->_propDict["grading"]);
                return $this->_propDict["grading"];
            }
        }
        return null;
    }
    
    /**
    * Sets the grading
    * How the assignment will be graded.
    *
    * @param EducationAssignmentGradeType $val The grading
    *
    * @return EducationAssignment
    */
    public function setGrading($val)
    {
        $this->_propDict["grading"] = $val;
        return $this;
    }
    
    /**
    * Gets the instructions
    * Instructions for the assignment.  This along with the display name tell the student what to do.
    *
    * @return EducationItemBody The instructions
    */
    public function getInstructions()
    {
        if (array_key_exists("instructions", $this->_propDict)) {
            if (is_a($this->_propDict["instructions"], "\Beta\Microsoft\Graph\Model\EducationItemBody")) {
                return $this->_propDict["instructions"];
            } else {
                $this->_propDict["instructions"] = new EducationItemBody($this->_propDict["instructions"]);
                return $this->_propDict["instructions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the instructions
    * Instructions for the assignment.  This along with the display name tell the student what to do.
    *
    * @param EducationItemBody $val The instructions
    *
    * @return EducationAssignment
    */
    public function setInstructions($val)
    {
        $this->_propDict["instructions"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedBy
    * Who last modified the assignment.
    *
    * @return IdentitySet The lastModifiedBy
    */
    public function getLastModifiedBy()
    {
        if (array_key_exists("lastModifiedBy", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedBy"], "\Beta\Microsoft\Graph\Model\IdentitySet")) {
                return $this->_propDict["lastModifiedBy"];
            } else {
                $this->_propDict["lastModifiedBy"] = new IdentitySet($this->_propDict["lastModifiedBy"]);
                return $this->_propDict["lastModifiedBy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedBy
    * Who last modified the assignment.
    *
    * @param IdentitySet $val The lastModifiedBy
    *
    * @return EducationAssignment
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * Moment when the assignment was last modified.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    * Moment when the assignment was last modified.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return EducationAssignment
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the notificationChannelUrl
    * Optional field to specify the URL of the channel to post the assignment publish notification. If not specified or null, defaults to the General channel. This field only applies to assignments where the assignTo value is educationAssignmentClassRecipient. Updating the notificationChannelUrl is not allowed after the assignment has been published.
    *
    * @return string The notificationChannelUrl
    */
    public function getNotificationChannelUrl()
    {
        if (array_key_exists("notificationChannelUrl", $this->_propDict)) {
            return $this->_propDict["notificationChannelUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notificationChannelUrl
    * Optional field to specify the URL of the channel to post the assignment publish notification. If not specified or null, defaults to the General channel. This field only applies to assignments where the assignTo value is educationAssignmentClassRecipient. Updating the notificationChannelUrl is not allowed after the assignment has been published.
    *
    * @param string $val The notificationChannelUrl
    *
    * @return EducationAssignment
    */
    public function setNotificationChannelUrl($val)
    {
        $this->_propDict["notificationChannelUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * Status of the Assignment.  You can not PATCH this value.  Possible values are: draft, scheduled, published, assigned.
    *
    * @return EducationAssignmentStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\EducationAssignmentStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new EducationAssignmentStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * Status of the Assignment.  You can not PATCH this value.  Possible values are: draft, scheduled, published, assigned.
    *
    * @param EducationAssignmentStatus $val The status
    *
    * @return EducationAssignment
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    

     /** 
     * Gets the categories
    * When set, enables users to easily find assignments of a given type.  Read-only. Nullable.
     *
     * @return array The categories
     */
    public function getCategories()
    {
        if (array_key_exists("categories", $this->_propDict)) {
           return $this->_propDict["categories"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the categories
    * When set, enables users to easily find assignments of a given type.  Read-only. Nullable.
    *
    * @param EducationCategory $val The categories
    *
    * @return EducationAssignment
    */
    public function setCategories($val)
    {
		$this->_propDict["categories"] = $val;
        return $this;
    }
    

     /** 
     * Gets the resources
    * Learning objects that are associated with this assignment.  Only teachers can modify this list. Nullable.
     *
     * @return array The resources
     */
    public function getResources()
    {
        if (array_key_exists("resources", $this->_propDict)) {
           return $this->_propDict["resources"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the resources
    * Learning objects that are associated with this assignment.  Only teachers can modify this list. Nullable.
    *
    * @param EducationAssignmentResource $val The resources
    *
    * @return EducationAssignment
    */
    public function setResources($val)
    {
		$this->_propDict["resources"] = $val;
        return $this;
    }
    
    /**
    * Gets the rubric
    * When set, the grading rubric attached to this assignment.
    *
    * @return EducationRubric The rubric
    */
    public function getRubric()
    {
        if (array_key_exists("rubric", $this->_propDict)) {
            if (is_a($this->_propDict["rubric"], "\Beta\Microsoft\Graph\Model\EducationRubric")) {
                return $this->_propDict["rubric"];
            } else {
                $this->_propDict["rubric"] = new EducationRubric($this->_propDict["rubric"]);
                return $this->_propDict["rubric"];
            }
        }
        return null;
    }
    
    /**
    * Sets the rubric
    * When set, the grading rubric attached to this assignment.
    *
    * @param EducationRubric $val The rubric
    *
    * @return EducationAssignment
    */
    public function setRubric($val)
    {
        $this->_propDict["rubric"] = $val;
        return $this;
    }
    

     /** 
     * Gets the submissions
    * Once published, there is a submission object for each student representing their work and grade.  Read-only. Nullable.
     *
     * @return array The submissions
     */
    public function getSubmissions()
    {
        if (array_key_exists("submissions", $this->_propDict)) {
           return $this->_propDict["submissions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the submissions
    * Once published, there is a submission object for each student representing their work and grade.  Read-only. Nullable.
    *
    * @param EducationSubmission $val The submissions
    *
    * @return EducationAssignment
    */
    public function setSubmissions($val)
    {
		$this->_propDict["submissions"] = $val;
        return $this;
    }
    
}
