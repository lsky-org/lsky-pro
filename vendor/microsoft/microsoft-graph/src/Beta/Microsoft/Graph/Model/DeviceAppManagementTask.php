<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceAppManagementTask File
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
* DeviceAppManagementTask class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceAppManagementTask extends Entity
{
    /**
    * Gets the assignedTo
    * The name or email of the admin this task is assigned to.
    *
    * @return string The assignedTo
    */
    public function getAssignedTo()
    {
        if (array_key_exists("assignedTo", $this->_propDict)) {
            return $this->_propDict["assignedTo"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the assignedTo
    * The name or email of the admin this task is assigned to.
    *
    * @param string $val The assignedTo
    *
    * @return DeviceAppManagementTask
    */
    public function setAssignedTo($val)
    {
        $this->_propDict["assignedTo"] = $val;
        return $this;
    }
    
    /**
    * Gets the category
    * The category. Possible values are: unknown, advancedThreatProtection.
    *
    * @return DeviceAppManagementTaskCategory The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            if (is_a($this->_propDict["category"], "\Beta\Microsoft\Graph\Model\DeviceAppManagementTaskCategory")) {
                return $this->_propDict["category"];
            } else {
                $this->_propDict["category"] = new DeviceAppManagementTaskCategory($this->_propDict["category"]);
                return $this->_propDict["category"];
            }
        }
        return null;
    }
    
    /**
    * Sets the category
    * The category. Possible values are: unknown, advancedThreatProtection.
    *
    * @param DeviceAppManagementTaskCategory $val The category
    *
    * @return DeviceAppManagementTask
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The created date.
    *
    * @return \DateTime The createdDateTime
    */
    public function getCreatedDateTime()
    {
        if (array_key_exists("createdDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["createdDateTime"], "\DateTime")) {
                return $this->_propDict["createdDateTime"];
            } else {
                $this->_propDict["createdDateTime"] = new \DateTime($this->_propDict["createdDateTime"]);
                return $this->_propDict["createdDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdDateTime
    * The created date.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return DeviceAppManagementTask
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the creator
    * The email address of the creator.
    *
    * @return string The creator
    */
    public function getCreator()
    {
        if (array_key_exists("creator", $this->_propDict)) {
            return $this->_propDict["creator"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the creator
    * The email address of the creator.
    *
    * @param string $val The creator
    *
    * @return DeviceAppManagementTask
    */
    public function setCreator($val)
    {
        $this->_propDict["creator"] = $val;
        return $this;
    }
    
    /**
    * Gets the creatorNotes
    * Notes from the creator.
    *
    * @return string The creatorNotes
    */
    public function getCreatorNotes()
    {
        if (array_key_exists("creatorNotes", $this->_propDict)) {
            return $this->_propDict["creatorNotes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the creatorNotes
    * Notes from the creator.
    *
    * @param string $val The creatorNotes
    *
    * @return DeviceAppManagementTask
    */
    public function setCreatorNotes($val)
    {
        $this->_propDict["creatorNotes"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * The description.
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
    * The description.
    *
    * @param string $val The description
    *
    * @return DeviceAppManagementTask
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The name.
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
    * The name.
    *
    * @param string $val The displayName
    *
    * @return DeviceAppManagementTask
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the dueDateTime
    * The due date.
    *
    * @return \DateTime The dueDateTime
    */
    public function getDueDateTime()
    {
        if (array_key_exists("dueDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["dueDateTime"], "\DateTime")) {
                return $this->_propDict["dueDateTime"];
            } else {
                $this->_propDict["dueDateTime"] = new \DateTime($this->_propDict["dueDateTime"]);
                return $this->_propDict["dueDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the dueDateTime
    * The due date.
    *
    * @param \DateTime $val The dueDateTime
    *
    * @return DeviceAppManagementTask
    */
    public function setDueDateTime($val)
    {
        $this->_propDict["dueDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the priority
    * The priority. Possible values are: none, high, low.
    *
    * @return DeviceAppManagementTaskPriority The priority
    */
    public function getPriority()
    {
        if (array_key_exists("priority", $this->_propDict)) {
            if (is_a($this->_propDict["priority"], "\Beta\Microsoft\Graph\Model\DeviceAppManagementTaskPriority")) {
                return $this->_propDict["priority"];
            } else {
                $this->_propDict["priority"] = new DeviceAppManagementTaskPriority($this->_propDict["priority"]);
                return $this->_propDict["priority"];
            }
        }
        return null;
    }
    
    /**
    * Sets the priority
    * The priority. Possible values are: none, high, low.
    *
    * @param DeviceAppManagementTaskPriority $val The priority
    *
    * @return DeviceAppManagementTask
    */
    public function setPriority($val)
    {
        $this->_propDict["priority"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * The status. Possible values are: unknown, pending, active, completed, rejected.
    *
    * @return DeviceAppManagementTaskStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\DeviceAppManagementTaskStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new DeviceAppManagementTaskStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * The status. Possible values are: unknown, pending, active, completed, rejected.
    *
    * @param DeviceAppManagementTaskStatus $val The status
    *
    * @return DeviceAppManagementTask
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
}
