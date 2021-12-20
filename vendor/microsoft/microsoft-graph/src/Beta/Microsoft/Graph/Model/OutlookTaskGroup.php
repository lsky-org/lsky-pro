<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OutlookTaskGroup File
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
* OutlookTaskGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OutlookTaskGroup extends Entity
{
    /**
    * Gets the changeKey
    * The version of the task group.
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
    * The version of the task group.
    *
    * @param string $val The changeKey
    *
    * @return OutlookTaskGroup
    */
    public function setChangeKey($val)
    {
        $this->_propDict["changeKey"] = $val;
        return $this;
    }
    
    /**
    * Gets the groupKey
    * The unique GUID identifier for the task group.
    *
    * @return string The groupKey
    */
    public function getGroupKey()
    {
        if (array_key_exists("groupKey", $this->_propDict)) {
            return $this->_propDict["groupKey"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the groupKey
    * The unique GUID identifier for the task group.
    *
    * @param string $val The groupKey
    *
    * @return OutlookTaskGroup
    */
    public function setGroupKey($val)
    {
        $this->_propDict["groupKey"] = $val;
        return $this;
    }
    
    /**
    * Gets the isDefaultGroup
    * True if the task group is the default task group.
    *
    * @return bool The isDefaultGroup
    */
    public function getIsDefaultGroup()
    {
        if (array_key_exists("isDefaultGroup", $this->_propDict)) {
            return $this->_propDict["isDefaultGroup"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDefaultGroup
    * True if the task group is the default task group.
    *
    * @param bool $val The isDefaultGroup
    *
    * @return OutlookTaskGroup
    */
    public function setIsDefaultGroup($val)
    {
        $this->_propDict["isDefaultGroup"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the name
    * The name of the task group.
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
    * The name of the task group.
    *
    * @param string $val The name
    *
    * @return OutlookTaskGroup
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    

     /** 
     * Gets the taskFolders
    * The collection of task folders in the task group. Read-only. Nullable.
     *
     * @return array The taskFolders
     */
    public function getTaskFolders()
    {
        if (array_key_exists("taskFolders", $this->_propDict)) {
           return $this->_propDict["taskFolders"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the taskFolders
    * The collection of task folders in the task group. Read-only. Nullable.
    *
    * @param OutlookTaskFolder $val The taskFolders
    *
    * @return OutlookTaskGroup
    */
    public function setTaskFolders($val)
    {
		$this->_propDict["taskFolders"] = $val;
        return $this;
    }
    
}
