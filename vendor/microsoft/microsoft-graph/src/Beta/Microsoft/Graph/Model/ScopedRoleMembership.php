<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ScopedRoleMembership File
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
* ScopedRoleMembership class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ScopedRoleMembership extends Entity
{
    /**
    * Gets the administrativeUnitId
    * Unique identifier for the administrative unit that the directory role is scoped to
    *
    * @return string The administrativeUnitId
    */
    public function getAdministrativeUnitId()
    {
        if (array_key_exists("administrativeUnitId", $this->_propDict)) {
            return $this->_propDict["administrativeUnitId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the administrativeUnitId
    * Unique identifier for the administrative unit that the directory role is scoped to
    *
    * @param string $val The administrativeUnitId
    *
    * @return ScopedRoleMembership
    */
    public function setAdministrativeUnitId($val)
    {
        $this->_propDict["administrativeUnitId"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleId
    * Unique identifier for the directory role that the member is in.
    *
    * @return string The roleId
    */
    public function getRoleId()
    {
        if (array_key_exists("roleId", $this->_propDict)) {
            return $this->_propDict["roleId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleId
    * Unique identifier for the directory role that the member is in.
    *
    * @param string $val The roleId
    *
    * @return ScopedRoleMembership
    */
    public function setRoleId($val)
    {
        $this->_propDict["roleId"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleMemberInfo
    * Role member identity information. Represents the user that is a member of this scoped-role.
    *
    * @return Identity The roleMemberInfo
    */
    public function getRoleMemberInfo()
    {
        if (array_key_exists("roleMemberInfo", $this->_propDict)) {
            if (is_a($this->_propDict["roleMemberInfo"], "\Beta\Microsoft\Graph\Model\Identity")) {
                return $this->_propDict["roleMemberInfo"];
            } else {
                $this->_propDict["roleMemberInfo"] = new Identity($this->_propDict["roleMemberInfo"]);
                return $this->_propDict["roleMemberInfo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the roleMemberInfo
    * Role member identity information. Represents the user that is a member of this scoped-role.
    *
    * @param Identity $val The roleMemberInfo
    *
    * @return ScopedRoleMembership
    */
    public function setRoleMemberInfo($val)
    {
        $this->_propDict["roleMemberInfo"] = $val;
        return $this;
    }
    
}
