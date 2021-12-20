<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationStudent File
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
* EducationStudent class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationStudent extends Entity
{

    /**
    * Gets the birthDate
    * Birth date of the student.
    *
    * @return \DateTime The birthDate
    */
    public function getBirthDate()
    {
        if (array_key_exists("birthDate", $this->_propDict)) {
            if (is_a($this->_propDict["birthDate"], "\DateTime")) {
                return $this->_propDict["birthDate"];
            } else {
                $this->_propDict["birthDate"] = new \DateTime($this->_propDict["birthDate"]);
                return $this->_propDict["birthDate"];
            }
        }
        return null;
    }

    /**
    * Sets the birthDate
    * Birth date of the student.
    *
    * @param \DateTime $val The value to assign to the birthDate
    *
    * @return EducationStudent The EducationStudent
    */
    public function setBirthDate($val)
    {
        $this->_propDict["birthDate"] = $val;
         return $this;
    }
    /**
    * Gets the externalId
    * ID of the student in the source system.
    *
    * @return string The externalId
    */
    public function getExternalId()
    {
        if (array_key_exists("externalId", $this->_propDict)) {
            return $this->_propDict["externalId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the externalId
    * ID of the student in the source system.
    *
    * @param string $val The value of the externalId
    *
    * @return EducationStudent
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }

    /**
    * Gets the gender
    * Possible values are: female, male, other.
    *
    * @return EducationGender The gender
    */
    public function getGender()
    {
        if (array_key_exists("gender", $this->_propDict)) {
            if (is_a($this->_propDict["gender"], "\Beta\Microsoft\Graph\Model\EducationGender")) {
                return $this->_propDict["gender"];
            } else {
                $this->_propDict["gender"] = new EducationGender($this->_propDict["gender"]);
                return $this->_propDict["gender"];
            }
        }
        return null;
    }

    /**
    * Sets the gender
    * Possible values are: female, male, other.
    *
    * @param EducationGender $val The value to assign to the gender
    *
    * @return EducationStudent The EducationStudent
    */
    public function setGender($val)
    {
        $this->_propDict["gender"] = $val;
         return $this;
    }
    /**
    * Gets the grade
    * Current grade level of the student.
    *
    * @return string The grade
    */
    public function getGrade()
    {
        if (array_key_exists("grade", $this->_propDict)) {
            return $this->_propDict["grade"];
        } else {
            return null;
        }
    }

    /**
    * Sets the grade
    * Current grade level of the student.
    *
    * @param string $val The value of the grade
    *
    * @return EducationStudent
    */
    public function setGrade($val)
    {
        $this->_propDict["grade"] = $val;
        return $this;
    }
    /**
    * Gets the graduationYear
    * Year the student is graduating from the school.
    *
    * @return string The graduationYear
    */
    public function getGraduationYear()
    {
        if (array_key_exists("graduationYear", $this->_propDict)) {
            return $this->_propDict["graduationYear"];
        } else {
            return null;
        }
    }

    /**
    * Sets the graduationYear
    * Year the student is graduating from the school.
    *
    * @param string $val The value of the graduationYear
    *
    * @return EducationStudent
    */
    public function setGraduationYear($val)
    {
        $this->_propDict["graduationYear"] = $val;
        return $this;
    }
    /**
    * Gets the studentNumber
    * Student Number.
    *
    * @return string The studentNumber
    */
    public function getStudentNumber()
    {
        if (array_key_exists("studentNumber", $this->_propDict)) {
            return $this->_propDict["studentNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the studentNumber
    * Student Number.
    *
    * @param string $val The value of the studentNumber
    *
    * @return EducationStudent
    */
    public function setStudentNumber($val)
    {
        $this->_propDict["studentNumber"] = $val;
        return $this;
    }
}
