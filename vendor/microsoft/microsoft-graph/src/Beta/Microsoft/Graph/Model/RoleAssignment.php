<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RoleAssignment File
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
* RoleAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RoleAssignment extends Entity
{
    /**
    * Gets the description
    * Description of the Role Assignment.
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
    * Description of the Role Assignment.
    *
    * @param string $val The description
    *
    * @return RoleAssignment
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The display or friendly name of the role Assignment.
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
    * The display or friendly name of the role Assignment.
    *
    * @param string $val The displayName
    *
    * @return RoleAssignment
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceScopes
    * List of ids of role scope member security groups.  These are IDs from Azure Active Directory.
    *
    * @return string The resourceScopes
    */
    public function getResourceScopes()
    {
        if (array_key_exists("resourceScopes", $this->_propDict)) {
            return $this->_propDict["resourceScopes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceScopes
    * List of ids of role scope member security groups.  These are IDs from Azure Active Directory.
    *
    * @param string $val The resourceScopes
    *
    * @return RoleAssignment
    */
    public function setResourceScopes($val)
    {
        $this->_propDict["resourceScopes"] = $val;
        return $this;
    }
    
    /**
    * Gets the scopeMembers
    * List of ids of role scope member security groups.  These are IDs from Azure Active Directory.
    *
    * @return string The scopeMembers
    */
    public function getScopeMembers()
    {
        if (array_key_exists("scopeMembers", $this->_propDict)) {
            return $this->_propDict["scopeMembers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the scopeMembers
    * List of ids of role scope member security groups.  These are IDs from Azure Active Directory.
    *
    * @param string $val The scopeMembers
    *
    * @return RoleAssignment
    */
    public function setScopeMembers($val)
    {
        $this->_propDict["scopeMembers"] = $val;
        return $this;
    }
    
    /**
    * Gets the scopeType
    * Specifies the type of scope for a Role Assignment. Default type 'ResourceScope' allows assignment of ResourceScopes. For 'AllDevices', 'AllLicensedUsers', and 'AllDevicesAndLicensedUsers', the ResourceScopes property should be left empty. Possible values are: resourceScope, allDevices, allLicensedUsers, allDevicesAndLicensedUsers.
    *
    * @return RoleAssignmentScopeType The scopeType
    */
    public function getScopeType()
    {
        if (array_key_exists("scopeType", $this->_propDict)) {
            if (is_a($this->_propDict["scopeType"], "\Beta\Microsoft\Graph\Model\RoleAssignmentScopeType")) {
                return $this->_propDict["scopeType"];
            } else {
                $this->_propDict["scopeType"] = new RoleAssignmentScopeType($this->_propDict["scopeType"]);
                return $this->_propDict["scopeType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the scopeType
    * Specifies the type of scope for a Role Assignment. Default type 'ResourceScope' allows assignment of ResourceScopes. For 'AllDevices', 'AllLicensedUsers', and 'AllDevicesAndLicensedUsers', the ResourceScopes property should be left empty. Possible values are: resourceScope, allDevices, allLicensedUsers, allDevicesAndLicensedUsers.
    *
    * @param RoleAssignmentScopeType $val The scopeType
    *
    * @return RoleAssignment
    */
    public function setScopeType($val)
    {
        $this->_propDict["scopeType"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleDefinition
    * Role definition this assignment is part of.
    *
    * @return RoleDefinition The roleDefinition
    */
    public function getRoleDefinition()
    {
        if (array_key_exists("roleDefinition", $this->_propDict)) {
            if (is_a($this->_propDict["roleDefinition"], "\Beta\Microsoft\Graph\Model\RoleDefinition")) {
                return $this->_propDict["roleDefinition"];
            } else {
                $this->_propDict["roleDefinition"] = new RoleDefinition($this->_propDict["roleDefinition"]);
                return $this->_propDict["roleDefinition"];
            }
        }
        return null;
    }
    
    /**
    * Sets the roleDefinition
    * Role definition this assignment is part of.
    *
    * @param RoleDefinition $val The roleDefinition
    *
    * @return RoleAssignment
    */
    public function setRoleDefinition($val)
    {
        $this->_propDict["roleDefinition"] = $val;
        return $this;
    }
    
}
