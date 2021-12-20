<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationSynchronizationCustomizations File
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
* EducationSynchronizationCustomizations class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationSynchronizationCustomizations extends EducationSynchronizationCustomizationsBase
{

    /**
    * Gets the school
    * Customizations for School entities.
    *
    * @return EducationSynchronizationCustomization The school
    */
    public function getSchool()
    {
        if (array_key_exists("school", $this->_propDict)) {
            if (is_a($this->_propDict["school"], "\Beta\Microsoft\Graph\Model\EducationSynchronizationCustomization")) {
                return $this->_propDict["school"];
            } else {
                $this->_propDict["school"] = new EducationSynchronizationCustomization($this->_propDict["school"]);
                return $this->_propDict["school"];
            }
        }
        return null;
    }

    /**
    * Sets the school
    * Customizations for School entities.
    *
    * @param EducationSynchronizationCustomization $val The value to assign to the school
    *
    * @return EducationSynchronizationCustomizations The EducationSynchronizationCustomizations
    */
    public function setSchool($val)
    {
        $this->_propDict["school"] = $val;
         return $this;
    }

    /**
    * Gets the section
    * Customizations for Section entities.
    *
    * @return EducationSynchronizationCustomization The section
    */
    public function getSection()
    {
        if (array_key_exists("section", $this->_propDict)) {
            if (is_a($this->_propDict["section"], "\Beta\Microsoft\Graph\Model\EducationSynchronizationCustomization")) {
                return $this->_propDict["section"];
            } else {
                $this->_propDict["section"] = new EducationSynchronizationCustomization($this->_propDict["section"]);
                return $this->_propDict["section"];
            }
        }
        return null;
    }

    /**
    * Sets the section
    * Customizations for Section entities.
    *
    * @param EducationSynchronizationCustomization $val The value to assign to the section
    *
    * @return EducationSynchronizationCustomizations The EducationSynchronizationCustomizations
    */
    public function setSection($val)
    {
        $this->_propDict["section"] = $val;
         return $this;
    }

    /**
    * Gets the student
    * Customizations for Student entities.
    *
    * @return EducationSynchronizationCustomization The student
    */
    public function getStudent()
    {
        if (array_key_exists("student", $this->_propDict)) {
            if (is_a($this->_propDict["student"], "\Beta\Microsoft\Graph\Model\EducationSynchronizationCustomization")) {
                return $this->_propDict["student"];
            } else {
                $this->_propDict["student"] = new EducationSynchronizationCustomization($this->_propDict["student"]);
                return $this->_propDict["student"];
            }
        }
        return null;
    }

    /**
    * Sets the student
    * Customizations for Student entities.
    *
    * @param EducationSynchronizationCustomization $val The value to assign to the student
    *
    * @return EducationSynchronizationCustomizations The EducationSynchronizationCustomizations
    */
    public function setStudent($val)
    {
        $this->_propDict["student"] = $val;
         return $this;
    }

    /**
    * Gets the studentEnrollment
    * Customizations for Student Enrollments.
    *
    * @return EducationSynchronizationCustomization The studentEnrollment
    */
    public function getStudentEnrollment()
    {
        if (array_key_exists("studentEnrollment", $this->_propDict)) {
            if (is_a($this->_propDict["studentEnrollment"], "\Beta\Microsoft\Graph\Model\EducationSynchronizationCustomization")) {
                return $this->_propDict["studentEnrollment"];
            } else {
                $this->_propDict["studentEnrollment"] = new EducationSynchronizationCustomization($this->_propDict["studentEnrollment"]);
                return $this->_propDict["studentEnrollment"];
            }
        }
        return null;
    }

    /**
    * Sets the studentEnrollment
    * Customizations for Student Enrollments.
    *
    * @param EducationSynchronizationCustomization $val The value to assign to the studentEnrollment
    *
    * @return EducationSynchronizationCustomizations The EducationSynchronizationCustomizations
    */
    public function setStudentEnrollment($val)
    {
        $this->_propDict["studentEnrollment"] = $val;
         return $this;
    }

    /**
    * Gets the teacher
    * Customizations for Teacher entities.
    *
    * @return EducationSynchronizationCustomization The teacher
    */
    public function getTeacher()
    {
        if (array_key_exists("teacher", $this->_propDict)) {
            if (is_a($this->_propDict["teacher"], "\Beta\Microsoft\Graph\Model\EducationSynchronizationCustomization")) {
                return $this->_propDict["teacher"];
            } else {
                $this->_propDict["teacher"] = new EducationSynchronizationCustomization($this->_propDict["teacher"]);
                return $this->_propDict["teacher"];
            }
        }
        return null;
    }

    /**
    * Sets the teacher
    * Customizations for Teacher entities.
    *
    * @param EducationSynchronizationCustomization $val The value to assign to the teacher
    *
    * @return EducationSynchronizationCustomizations The EducationSynchronizationCustomizations
    */
    public function setTeacher($val)
    {
        $this->_propDict["teacher"] = $val;
         return $this;
    }

    /**
    * Gets the teacherRoster
    * Customizations for Teacher Rosters.
    *
    * @return EducationSynchronizationCustomization The teacherRoster
    */
    public function getTeacherRoster()
    {
        if (array_key_exists("teacherRoster", $this->_propDict)) {
            if (is_a($this->_propDict["teacherRoster"], "\Beta\Microsoft\Graph\Model\EducationSynchronizationCustomization")) {
                return $this->_propDict["teacherRoster"];
            } else {
                $this->_propDict["teacherRoster"] = new EducationSynchronizationCustomization($this->_propDict["teacherRoster"]);
                return $this->_propDict["teacherRoster"];
            }
        }
        return null;
    }

    /**
    * Sets the teacherRoster
    * Customizations for Teacher Rosters.
    *
    * @param EducationSynchronizationCustomization $val The value to assign to the teacherRoster
    *
    * @return EducationSynchronizationCustomizations The EducationSynchronizationCustomizations
    */
    public function setTeacherRoster($val)
    {
        $this->_propDict["teacherRoster"] = $val;
         return $this;
    }
}
