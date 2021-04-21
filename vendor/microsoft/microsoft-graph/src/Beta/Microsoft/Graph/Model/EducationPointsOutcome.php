<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationPointsOutcome File
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
* EducationPointsOutcome class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationPointsOutcome extends EducationOutcome
{
    /**
    * Gets the points
    * The numeric grade the teacher has given the student for this assignment.
    *
    * @return EducationAssignmentPointsGrade The points
    */
    public function getPoints()
    {
        if (array_key_exists("points", $this->_propDict)) {
            if (is_a($this->_propDict["points"], "\Beta\Microsoft\Graph\Model\EducationAssignmentPointsGrade")) {
                return $this->_propDict["points"];
            } else {
                $this->_propDict["points"] = new EducationAssignmentPointsGrade($this->_propDict["points"]);
                return $this->_propDict["points"];
            }
        }
        return null;
    }
    
    /**
    * Sets the points
    * The numeric grade the teacher has given the student for this assignment.
    *
    * @param EducationAssignmentPointsGrade $val The points
    *
    * @return EducationPointsOutcome
    */
    public function setPoints($val)
    {
        $this->_propDict["points"] = $val;
        return $this;
    }
    
    /**
    * Gets the publishedPoints
    * A copy of the points property that is made when the grade is released to the student.
    *
    * @return EducationAssignmentPointsGrade The publishedPoints
    */
    public function getPublishedPoints()
    {
        if (array_key_exists("publishedPoints", $this->_propDict)) {
            if (is_a($this->_propDict["publishedPoints"], "\Beta\Microsoft\Graph\Model\EducationAssignmentPointsGrade")) {
                return $this->_propDict["publishedPoints"];
            } else {
                $this->_propDict["publishedPoints"] = new EducationAssignmentPointsGrade($this->_propDict["publishedPoints"]);
                return $this->_propDict["publishedPoints"];
            }
        }
        return null;
    }
    
    /**
    * Sets the publishedPoints
    * A copy of the points property that is made when the grade is released to the student.
    *
    * @param EducationAssignmentPointsGrade $val The publishedPoints
    *
    * @return EducationPointsOutcome
    */
    public function setPublishedPoints($val)
    {
        $this->_propDict["publishedPoints"] = $val;
        return $this;
    }
    
}
