<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TodoTaskList File
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
* TodoTaskList class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TodoTaskList extends Entity
{
    /**
    * Gets the displayName
    * The name of the task list.
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
    * The name of the task list.
    *
    * @param string $val The displayName
    *
    * @return TodoTaskList
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isOwner
    * True if the user is owner of the given task list.
    *
    * @return bool The isOwner
    */
    public function getIsOwner()
    {
        if (array_key_exists("isOwner", $this->_propDict)) {
            return $this->_propDict["isOwner"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isOwner
    * True if the user is owner of the given task list.
    *
    * @param bool $val The isOwner
    *
    * @return TodoTaskList
    */
    public function setIsOwner($val)
    {
        $this->_propDict["isOwner"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isShared
    * True if the task list is shared with other users
    *
    * @return bool The isShared
    */
    public function getIsShared()
    {
        if (array_key_exists("isShared", $this->_propDict)) {
            return $this->_propDict["isShared"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isShared
    * True if the task list is shared with other users
    *
    * @param bool $val The isShared
    *
    * @return TodoTaskList
    */
    public function setIsShared($val)
    {
        $this->_propDict["isShared"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the wellknownListName
    * Property indicating the list name if the given list is a well-known list. Possible values are: none, defaultList, flaggedEmails, unknownFutureValue.
    *
    * @return WellknownListName The wellknownListName
    */
    public function getWellknownListName()
    {
        if (array_key_exists("wellknownListName", $this->_propDict)) {
            if (is_a($this->_propDict["wellknownListName"], "\Microsoft\Graph\Model\WellknownListName")) {
                return $this->_propDict["wellknownListName"];
            } else {
                $this->_propDict["wellknownListName"] = new WellknownListName($this->_propDict["wellknownListName"]);
                return $this->_propDict["wellknownListName"];
            }
        }
        return null;
    }
    
    /**
    * Sets the wellknownListName
    * Property indicating the list name if the given list is a well-known list. Possible values are: none, defaultList, flaggedEmails, unknownFutureValue.
    *
    * @param WellknownListName $val The wellknownListName
    *
    * @return TodoTaskList
    */
    public function setWellknownListName($val)
    {
        $this->_propDict["wellknownListName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the extensions
    * The collection of open extensions defined for the task list. Nullable.
     *
     * @return array The extensions
     */
    public function getExtensions()
    {
        if (array_key_exists("extensions", $this->_propDict)) {
           return $this->_propDict["extensions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the extensions
    * The collection of open extensions defined for the task list. Nullable.
    *
    * @param Extension $val The extensions
    *
    * @return TodoTaskList
    */
    public function setExtensions($val)
    {
		$this->_propDict["extensions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tasks
    * The tasks in this task list. Read-only. Nullable.
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
    * The tasks in this task list. Read-only. Nullable.
    *
    * @param TodoTask $val The tasks
    *
    * @return TodoTaskList
    */
    public function setTasks($val)
    {
		$this->_propDict["tasks"] = $val;
        return $this;
    }
    
}
