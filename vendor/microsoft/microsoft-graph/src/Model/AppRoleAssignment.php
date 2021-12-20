<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppRoleAssignment File
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
* AppRoleAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppRoleAssignment extends DirectoryObject
{
    /**
    * Gets the appRoleId
    * The identifier (id) for the app role which is assigned to the principal. This app role must be exposed in the appRoles property on the resource application's service principal (resourceId). If the resource application has not declared any app roles, a default app role ID of 00000000-0000-0000-0000-000000000000 can be specified to signal that the principal is assigned to the resource app without any specific app roles. Required on create.
    *
    * @return string The appRoleId
    */
    public function getAppRoleId()
    {
        if (array_key_exists("appRoleId", $this->_propDict)) {
            return $this->_propDict["appRoleId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appRoleId
    * The identifier (id) for the app role which is assigned to the principal. This app role must be exposed in the appRoles property on the resource application's service principal (resourceId). If the resource application has not declared any app roles, a default app role ID of 00000000-0000-0000-0000-000000000000 can be specified to signal that the principal is assigned to the resource app without any specific app roles. Required on create.
    *
    * @param string $val The appRoleId
    *
    * @return AppRoleAssignment
    */
    public function setAppRoleId($val)
    {
        $this->_propDict["appRoleId"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The time when the app role assignment was created.The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
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
    * The time when the app role assignment was created.The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return AppRoleAssignment
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the principalDisplayName
    * The display name of the user, group, or service principal that was granted the app role assignment. Read-only. Supports $filter (eq and startswith).
    *
    * @return string The principalDisplayName
    */
    public function getPrincipalDisplayName()
    {
        if (array_key_exists("principalDisplayName", $this->_propDict)) {
            return $this->_propDict["principalDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the principalDisplayName
    * The display name of the user, group, or service principal that was granted the app role assignment. Read-only. Supports $filter (eq and startswith).
    *
    * @param string $val The principalDisplayName
    *
    * @return AppRoleAssignment
    */
    public function setPrincipalDisplayName($val)
    {
        $this->_propDict["principalDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the principalId
    * The unique identifier (id) for the user, group or service principal being granted the app role. Required on create.
    *
    * @return string The principalId
    */
    public function getPrincipalId()
    {
        if (array_key_exists("principalId", $this->_propDict)) {
            return $this->_propDict["principalId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the principalId
    * The unique identifier (id) for the user, group or service principal being granted the app role. Required on create.
    *
    * @param string $val The principalId
    *
    * @return AppRoleAssignment
    */
    public function setPrincipalId($val)
    {
        $this->_propDict["principalId"] = $val;
        return $this;
    }
    
    /**
    * Gets the principalType
    * The type of the assigned principal. This can either be User, Group or ServicePrincipal. Read-only.
    *
    * @return string The principalType
    */
    public function getPrincipalType()
    {
        if (array_key_exists("principalType", $this->_propDict)) {
            return $this->_propDict["principalType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the principalType
    * The type of the assigned principal. This can either be User, Group or ServicePrincipal. Read-only.
    *
    * @param string $val The principalType
    *
    * @return AppRoleAssignment
    */
    public function setPrincipalType($val)
    {
        $this->_propDict["principalType"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceDisplayName
    * The display name of the resource app's service principal to which the assignment is made.
    *
    * @return string The resourceDisplayName
    */
    public function getResourceDisplayName()
    {
        if (array_key_exists("resourceDisplayName", $this->_propDict)) {
            return $this->_propDict["resourceDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceDisplayName
    * The display name of the resource app's service principal to which the assignment is made.
    *
    * @param string $val The resourceDisplayName
    *
    * @return AppRoleAssignment
    */
    public function setResourceDisplayName($val)
    {
        $this->_propDict["resourceDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceId
    * The unique identifier (id) for the resource service principal for which the assignment is made. Required on create. Supports $filter (eq only).
    *
    * @return string The resourceId
    */
    public function getResourceId()
    {
        if (array_key_exists("resourceId", $this->_propDict)) {
            return $this->_propDict["resourceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceId
    * The unique identifier (id) for the resource service principal for which the assignment is made. Required on create. Supports $filter (eq only).
    *
    * @param string $val The resourceId
    *
    * @return AppRoleAssignment
    */
    public function setResourceId($val)
    {
        $this->_propDict["resourceId"] = $val;
        return $this;
    }
    
}
