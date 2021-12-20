<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationRubric File
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
* EducationRubric class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationRubric extends Entity
{
    /**
    * Gets the createdBy
    * The user who created this resource.
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
    * The user who created this resource.
    *
    * @param IdentitySet $val The createdBy
    *
    * @return EducationRubric
    */
    public function setCreatedBy($val)
    {
        $this->_propDict["createdBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
    * The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return EducationRubric
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * The description of this rubric.
    *
    * @return EducationItemBody The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            if (is_a($this->_propDict["description"], "\Beta\Microsoft\Graph\Model\EducationItemBody")) {
                return $this->_propDict["description"];
            } else {
                $this->_propDict["description"] = new EducationItemBody($this->_propDict["description"]);
                return $this->_propDict["description"];
            }
        }
        return null;
    }
    
    /**
    * Sets the description
    * The description of this rubric.
    *
    * @param EducationItemBody $val The description
    *
    * @return EducationRubric
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The name of this rubric.
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
    * The name of this rubric.
    *
    * @param string $val The displayName
    *
    * @return EducationRubric
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the grading
    * The grading type of this rubric -- null for a no-points rubric, or educationAssignmentPointsGradeType for a points rubric.
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
    * The grading type of this rubric -- null for a no-points rubric, or educationAssignmentPointsGradeType for a points rubric.
    *
    * @param EducationAssignmentGradeType $val The grading
    *
    * @return EducationRubric
    */
    public function setGrading($val)
    {
        $this->_propDict["grading"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedBy
    * The last user to modify the resource.
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
    * The last user to modify the resource.
    *
    * @param IdentitySet $val The lastModifiedBy
    *
    * @return EducationRubric
    */
    public function setLastModifiedBy($val)
    {
        $this->_propDict["lastModifiedBy"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * Moment in time when the resource was last modified.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
    * Moment in time when the resource was last modified.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return EducationRubric
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    

     /** 
     * Gets the levels
    * The collection of levels making up this rubric.
     *
     * @return array The levels
     */
    public function getLevels()
    {
        if (array_key_exists("levels", $this->_propDict)) {
           return $this->_propDict["levels"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the levels
    * The collection of levels making up this rubric.
    *
    * @param RubricLevel $val The levels
    *
    * @return EducationRubric
    */
    public function setLevels($val)
    {
		$this->_propDict["levels"] = $val;
        return $this;
    }
    

     /** 
     * Gets the qualities
    * The collection of qualities making up this rubric.
     *
     * @return array The qualities
     */
    public function getQualities()
    {
        if (array_key_exists("qualities", $this->_propDict)) {
           return $this->_propDict["qualities"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the qualities
    * The collection of qualities making up this rubric.
    *
    * @param RubricQuality $val The qualities
    *
    * @return EducationRubric
    */
    public function setQualities($val)
    {
		$this->_propDict["qualities"] = $val;
        return $this;
    }
    
}
