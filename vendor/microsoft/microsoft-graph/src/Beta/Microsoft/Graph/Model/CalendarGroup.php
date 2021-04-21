<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CalendarGroup File
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
* CalendarGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CalendarGroup extends Entity
{
    /**
    * Gets the changeKey
    * Identifies the version of the calendar group. Every time the calendar group is changed, ChangeKey changes as well. This allows Exchange to apply changes to the correct version of the object. Read-only.
    *
    * @return string The changeKey
    */
    public function getChangeKey()
    {
        if (array_key_exists("changeKey", $this->_propDict)) {
            return $this->_propDict["changeKey"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the changeKey
    * Identifies the version of the calendar group. Every time the calendar group is changed, ChangeKey changes as well. This allows Exchange to apply changes to the correct version of the object. Read-only.
    *
    * @param string $val The changeKey
    *
    * @return CalendarGroup
    */
    public function setChangeKey($val)
    {
        $this->_propDict["changeKey"] = $val;
        return $this;
    }
    
    /**
    * Gets the classId
    * The class identifier. Read-only.
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
    * The class identifier. Read-only.
    *
    * @param string $val The classId
    *
    * @return CalendarGroup
    */
    public function setClassId($val)
    {
        $this->_propDict["classId"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    * The group name.
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    * The group name.
    *
    * @param string $val The name
    *
    * @return CalendarGroup
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    

     /** 
     * Gets the calendars
    * The calendars in the calendar group. Navigation property. Read-only. Nullable.
     *
     * @return array The calendars
     */
    public function getCalendars()
    {
        if (array_key_exists("calendars", $this->_propDict)) {
           return $this->_propDict["calendars"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the calendars
    * The calendars in the calendar group. Navigation property. Read-only. Nullable.
    *
    * @param Calendar $val The calendars
    *
    * @return CalendarGroup
    */
    public function setCalendars($val)
    {
		$this->_propDict["calendars"] = $val;
        return $this;
    }
    
}
