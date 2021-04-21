<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationalActivityDetail File
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
* EducationalActivityDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationalActivityDetail extends Entity
{
    /**
    * Gets the abbreviation
    * Shortened name of the degree or program (example: PhD, MBA)
    *
    * @return string The abbreviation
    */
    public function getAbbreviation()
    {
        if (array_key_exists("abbreviation", $this->_propDict)) {
            return $this->_propDict["abbreviation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the abbreviation
    * Shortened name of the degree or program (example: PhD, MBA)
    *
    * @param string $val The value of the abbreviation
    *
    * @return EducationalActivityDetail
    */
    public function setAbbreviation($val)
    {
        $this->_propDict["abbreviation"] = $val;
        return $this;
    }
    /**
    * Gets the activities
    * Extracurricular activities undertaken alongside the program.
    *
    * @return string The activities
    */
    public function getActivities()
    {
        if (array_key_exists("activities", $this->_propDict)) {
            return $this->_propDict["activities"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activities
    * Extracurricular activities undertaken alongside the program.
    *
    * @param string $val The value of the activities
    *
    * @return EducationalActivityDetail
    */
    public function setActivities($val)
    {
        $this->_propDict["activities"] = $val;
        return $this;
    }
    /**
    * Gets the awards
    * Any awards or honors associated with the program.
    *
    * @return string The awards
    */
    public function getAwards()
    {
        if (array_key_exists("awards", $this->_propDict)) {
            return $this->_propDict["awards"];
        } else {
            return null;
        }
    }

    /**
    * Sets the awards
    * Any awards or honors associated with the program.
    *
    * @param string $val The value of the awards
    *
    * @return EducationalActivityDetail
    */
    public function setAwards($val)
    {
        $this->_propDict["awards"] = $val;
        return $this;
    }
    /**
    * Gets the description
    * Short description of the program provided by the user.
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * Short description of the program provided by the user.
    *
    * @param string $val The value of the description
    *
    * @return EducationalActivityDetail
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * Long-form name of the program that the user has provided.
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
    * Long-form name of the program that the user has provided.
    *
    * @param string $val The value of the displayName
    *
    * @return EducationalActivityDetail
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the fieldsOfStudy
    * Majors and minors associated with the program. (if applicable)
    *
    * @return string The fieldsOfStudy
    */
    public function getFieldsOfStudy()
    {
        if (array_key_exists("fieldsOfStudy", $this->_propDict)) {
            return $this->_propDict["fieldsOfStudy"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fieldsOfStudy
    * Majors and minors associated with the program. (if applicable)
    *
    * @param string $val The value of the fieldsOfStudy
    *
    * @return EducationalActivityDetail
    */
    public function setFieldsOfStudy($val)
    {
        $this->_propDict["fieldsOfStudy"] = $val;
        return $this;
    }
    /**
    * Gets the grade
    * The final grade, class, GPA or score.
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
    * The final grade, class, GPA or score.
    *
    * @param string $val The value of the grade
    *
    * @return EducationalActivityDetail
    */
    public function setGrade($val)
    {
        $this->_propDict["grade"] = $val;
        return $this;
    }
    /**
    * Gets the notes
    * Additional notes the user has provided.
    *
    * @return string The notes
    */
    public function getNotes()
    {
        if (array_key_exists("notes", $this->_propDict)) {
            return $this->_propDict["notes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the notes
    * Additional notes the user has provided.
    *
    * @param string $val The value of the notes
    *
    * @return EducationalActivityDetail
    */
    public function setNotes($val)
    {
        $this->_propDict["notes"] = $val;
        return $this;
    }
    /**
    * Gets the webUrl
    * Link to the degree or program page.
    *
    * @return string The webUrl
    */
    public function getWebUrl()
    {
        if (array_key_exists("webUrl", $this->_propDict)) {
            return $this->_propDict["webUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the webUrl
    * Link to the degree or program page.
    *
    * @param string $val The value of the webUrl
    *
    * @return EducationalActivityDetail
    */
    public function setWebUrl($val)
    {
        $this->_propDict["webUrl"] = $val;
        return $this;
    }
}
