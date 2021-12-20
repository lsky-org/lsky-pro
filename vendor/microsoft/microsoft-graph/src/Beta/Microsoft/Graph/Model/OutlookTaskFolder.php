<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OutlookTaskFolder File
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
* OutlookTaskFolder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OutlookTaskFolder extends Entity
{
    /**
    * Gets the changeKey
    * The version of the task folder.
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
    * The version of the task folder.
    *
    * @param string $val The changeKey
    *
    * @return OutlookTaskFolder
    */
    public function setChangeKey($val)
    {
        $this->_propDict["changeKey"] = $val;
        return $this;
    }
    
    /**
    * Gets the isDefaultFolder
    * True if the folder is the default task folder.
    *
    * @return bool The isDefaultFolder
    */
    public function getIsDefaultFolder()
    {
        if (array_key_exists("isDefaultFolder", $this->_propDict)) {
            return $this->_propDict["isDefaultFolder"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDefaultFolder
    * True if the folder is the default task folder.
    *
    * @param bool $val The isDefaultFolder
    *
    * @return OutlookTaskFolder
    */
    public function setIsDefaultFolder($val)
    {
        $this->_propDict["isDefaultFolder"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the name
    * The name of the task folder.
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
    * The name of the task folder.
    *
    * @param string $val The name
    *
    * @return OutlookTaskFolder
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the parentGroupKey
    * The unique GUID identifier for the task folder's parent group.
    *
    * @return string The parentGroupKey
    */
    public function getParentGroupKey()
    {
        if (array_key_exists("parentGroupKey", $this->_propDict)) {
            return $this->_propDict["parentGroupKey"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the parentGroupKey
    * The unique GUID identifier for the task folder's parent group.
    *
    * @param string $val The parentGroupKey
    *
    * @return OutlookTaskFolder
    */
    public function setParentGroupKey($val)
    {
        $this->_propDict["parentGroupKey"] = $val;
        return $this;
    }
    

     /** 
     * Gets the multiValueExtendedProperties
    * The collection of multi-value extended properties defined for the task folder. Read-only. Nullable.
     *
     * @return array The multiValueExtendedProperties
     */
    public function getMultiValueExtendedProperties()
    {
        if (array_key_exists("multiValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["multiValueExtendedProperties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the multiValueExtendedProperties
    * The collection of multi-value extended properties defined for the task folder. Read-only. Nullable.
    *
    * @param MultiValueLegacyExtendedProperty $val The multiValueExtendedProperties
    *
    * @return OutlookTaskFolder
    */
    public function setMultiValueExtendedProperties($val)
    {
		$this->_propDict["multiValueExtendedProperties"] = $val;
        return $this;
    }
    

     /** 
     * Gets the singleValueExtendedProperties
    * The collection of single-value extended properties defined for the task folder. Read-only. Nullable.
     *
     * @return array The singleValueExtendedProperties
     */
    public function getSingleValueExtendedProperties()
    {
        if (array_key_exists("singleValueExtendedProperties", $this->_propDict)) {
           return $this->_propDict["singleValueExtendedProperties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the singleValueExtendedProperties
    * The collection of single-value extended properties defined for the task folder. Read-only. Nullable.
    *
    * @param SingleValueLegacyExtendedProperty $val The singleValueExtendedProperties
    *
    * @return OutlookTaskFolder
    */
    public function setSingleValueExtendedProperties($val)
    {
		$this->_propDict["singleValueExtendedProperties"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tasks
    * The tasks in this task folder. Read-only. Nullable.
     *
     * @return array The tasks
     */
    public function getTasks()
    {
        if (array_key_exists("tasks", $this->_propDict)) {
           return $this->_propDict["tasks"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tasks
    * The tasks in this task folder. Read-only. Nullable.
    *
    * @param OutlookTask $val The tasks
    *
    * @return OutlookTaskFolder
    */
    public function setTasks($val)
    {
		$this->_propDict["tasks"] = $val;
        return $this;
    }
    
}
