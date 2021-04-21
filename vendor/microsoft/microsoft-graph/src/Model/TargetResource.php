<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TargetResource File
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
* TargetResource class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TargetResource extends Entity
{
    /**
    * Gets the displayName
    * Indicates the visible name defined for the resource. Typically specified when the resource is created.
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
    * Indicates the visible name defined for the resource. Typically specified when the resource is created.
    *
    * @param string $val The value of the displayName
    *
    * @return TargetResource
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the groupType
    * When type is set to Group, this indicates the group type.  Possible values are: unifiedGroups, azureAD, and unknownFutureValue
    *
    * @return GroupType The groupType
    */
    public function getGroupType()
    {
        if (array_key_exists("groupType", $this->_propDict)) {
            if (is_a($this->_propDict["groupType"], "\Microsoft\Graph\Model\GroupType")) {
                return $this->_propDict["groupType"];
            } else {
                $this->_propDict["groupType"] = new GroupType($this->_propDict["groupType"]);
                return $this->_propDict["groupType"];
            }
        }
        return null;
    }

    /**
    * Sets the groupType
    * When type is set to Group, this indicates the group type.  Possible values are: unifiedGroups, azureAD, and unknownFutureValue
    *
    * @param GroupType $val The value to assign to the groupType
    *
    * @return TargetResource The TargetResource
    */
    public function setGroupType($val)
    {
        $this->_propDict["groupType"] = $val;
         return $this;
    }
    /**
    * Gets the id
    * Indicates the unique ID of the resource.
    *
    * @return string The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    * Indicates the unique ID of the resource.
    *
    * @param string $val The value of the id
    *
    * @return TargetResource
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }

    /**
    * Gets the modifiedProperties
    * Indicates name, old value and new value of each attribute that changed. Property values depend on the operation type.
    *
    * @return ModifiedProperty The modifiedProperties
    */
    public function getModifiedProperties()
    {
        if (array_key_exists("modifiedProperties", $this->_propDict)) {
            if (is_a($this->_propDict["modifiedProperties"], "\Microsoft\Graph\Model\ModifiedProperty")) {
                return $this->_propDict["modifiedProperties"];
            } else {
                $this->_propDict["modifiedProperties"] = new ModifiedProperty($this->_propDict["modifiedProperties"]);
                return $this->_propDict["modifiedProperties"];
            }
        }
        return null;
    }

    /**
    * Sets the modifiedProperties
    * Indicates name, old value and new value of each attribute that changed. Property values depend on the operation type.
    *
    * @param ModifiedProperty $val The value to assign to the modifiedProperties
    *
    * @return TargetResource The TargetResource
    */
    public function setModifiedProperties($val)
    {
        $this->_propDict["modifiedProperties"] = $val;
         return $this;
    }
    /**
    * Gets the type
    * Describes the resource type.  Example values include Application, Group, ServicePrincipal, and User.
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }

    /**
    * Sets the type
    * Describes the resource type.  Example values include Application, Group, ServicePrincipal, and User.
    *
    * @param string $val The value of the type
    *
    * @return TargetResource
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    /**
    * Gets the userPrincipalName
    * When type is set to User, this includes the user name that initiated the action; null for other types.
    *
    * @return string The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPrincipalName
    * When type is set to User, this includes the user name that initiated the action; null for other types.
    *
    * @param string $val The value of the userPrincipalName
    *
    * @return TargetResource
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
}
