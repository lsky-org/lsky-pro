<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationTeacher File
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
* EducationTeacher class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationTeacher extends Entity
{
    /**
    * Gets the externalId
    * Id of the Teacher in external source system.
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
    * Id of the Teacher in external source system.
    *
    * @param string $val The value of the externalId
    *
    * @return EducationTeacher
    */
    public function setExternalId($val)
    {
        $this->_propDict["externalId"] = $val;
        return $this;
    }
    /**
    * Gets the teacherNumber
    * Teacher number.
    *
    * @return string The teacherNumber
    */
    public function getTeacherNumber()
    {
        if (array_key_exists("teacherNumber", $this->_propDict)) {
            return $this->_propDict["teacherNumber"];
        } else {
            return null;
        }
    }

    /**
    * Sets the teacherNumber
    * Teacher number.
    *
    * @param string $val The value of the teacherNumber
    *
    * @return EducationTeacher
    */
    public function setTeacherNumber($val)
    {
        $this->_propDict["teacherNumber"] = $val;
        return $this;
    }
}
