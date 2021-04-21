<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceAndAppManagementAssignedRoleDetails File
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
* DeviceAndAppManagementAssignedRoleDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceAndAppManagementAssignedRoleDetails extends Entity
{
    /**
    * Gets the roleAssignmentIds
    * Role Assignment IDs for the specifc Role Assignments assigned to a user.
    *
    * @return string The roleAssignmentIds
    */
    public function getRoleAssignmentIds()
    {
        if (array_key_exists("roleAssignmentIds", $this->_propDict)) {
            return $this->_propDict["roleAssignmentIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleAssignmentIds
    * Role Assignment IDs for the specifc Role Assignments assigned to a user.
    *
    * @param string $val The value of the roleAssignmentIds
    *
    * @return DeviceAndAppManagementAssignedRoleDetails
    */
    public function setRoleAssignmentIds($val)
    {
        $this->_propDict["roleAssignmentIds"] = $val;
        return $this;
    }
    /**
    * Gets the roleDefinitionIds
    * Role Definition IDs for the specifc Role Definitions assigned to a user.
    *
    * @return string The roleDefinitionIds
    */
    public function getRoleDefinitionIds()
    {
        if (array_key_exists("roleDefinitionIds", $this->_propDict)) {
            return $this->_propDict["roleDefinitionIds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the roleDefinitionIds
    * Role Definition IDs for the specifc Role Definitions assigned to a user.
    *
    * @param string $val The value of the roleDefinitionIds
    *
    * @return DeviceAndAppManagementAssignedRoleDetails
    */
    public function setRoleDefinitionIds($val)
    {
        $this->_propDict["roleDefinitionIds"] = $val;
        return $this;
    }
}
