<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SchedulingGroup File
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
* SchedulingGroup class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SchedulingGroup extends ChangeTrackedEntity
{
    /**
    * Gets the displayName
    * The display name for the schedulingGroup. Required.
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
    * The display name for the schedulingGroup. Required.
    *
    * @param string $val The displayName
    *
    * @return SchedulingGroup
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the isActive
    * Indicates whether the schedulingGroup can be used when creating new entities or updating existing ones. Required.
    *
    * @return bool The isActive
    */
    public function getIsActive()
    {
        if (array_key_exists("isActive", $this->_propDict)) {
            return $this->_propDict["isActive"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isActive
    * Indicates whether the schedulingGroup can be used when creating new entities or updating existing ones. Required.
    *
    * @param bool $val The isActive
    *
    * @return SchedulingGroup
    */
    public function setIsActive($val)
    {
        $this->_propDict["isActive"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the userIds
    * The list of user IDs that are a member of the schedulingGroup. Required.
    *
    * @return string The userIds
    */
    public function getUserIds()
    {
        if (array_key_exists("userIds", $this->_propDict)) {
            return $this->_propDict["userIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userIds
    * The list of user IDs that are a member of the schedulingGroup. Required.
    *
    * @param string $val The userIds
    *
    * @return SchedulingGroup
    */
    public function setUserIds($val)
    {
        $this->_propDict["userIds"] = $val;
        return $this;
    }
    
}
