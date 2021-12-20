<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationCourse File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* EducationCourse class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationCourse extends Entity
{
    /**
    * Gets the courseNumber
    * Unique identifier for the course.
    *
    * @return string The courseNumber
    */
    public function getCourseNumber()
    {
        if (array_key_exists("courseNumber", $this->_propDict)) {
            return $this->_propDict["courseNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the courseNumber
    * Unique identifier for the course.
    *
    * @param string $val The value of the courseNumber
    *
    * @return EducationCourse
    */
    public function setCourseNumber($val)
    {
        $this->_propDict["courseNumber"] = $val;
        return $this;
    }
    /**
    * Gets the description
    * Description of the course.
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
    * Description of the course.
    *
    * @param string $val The value of the description
    *
    * @return EducationCourse
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the displayName
    * Name of the course.
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
    * Name of the course.
    *
    * @param string $val The value of the displayName
    *
    * @return EducationCourse
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    /**
    * Gets the externalId
    * ID of the course from the syncing system.
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
    * ID of the course from the syncing system.
    *
    * @param string $val The value of the externalId
    *
    * @return EducationCourse
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }
    /**
    * Gets the subject
    * Subject of the course.
    *
    * @return string The subject
    */
    public function getSubject()
    {
        if (array_key_exists("subject", $this->_propDict)) {
            return $this->_propDict["subject"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subject
    * Subject of the course.
    *
    * @param string $val The value of the subject
    *
    * @return EducationCourse
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }
}
