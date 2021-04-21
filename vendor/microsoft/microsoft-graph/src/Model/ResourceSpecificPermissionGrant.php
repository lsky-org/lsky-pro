<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ResourceSpecificPermissionGrant File
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
* ResourceSpecificPermissionGrant class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ResourceSpecificPermissionGrant extends DirectoryObject
{
    /**
    * Gets the clientAppId
    * ID of the service principal of the Azure AD app that has been granted access. Read-only.
    *
    * @return string The clientAppId
    */
    public function getClientAppId()
    {
        if (array_key_exists("clientAppId", $this->_propDict)) {
            return $this->_propDict["clientAppId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the clientAppId
    * ID of the service principal of the Azure AD app that has been granted access. Read-only.
    *
    * @param string $val The clientAppId
    *
    * @return ResourceSpecificPermissionGrant
    */
    public function setClientAppId($val)
    {
        $this->_propDict["clientAppId"] = $val;
        return $this;
    }
    
    /**
    * Gets the clientId
    * ID of the Azure AD app that has been granted access. Read-only.
    *
    * @return string The clientId
    */
    public function getClientId()
    {
        if (array_key_exists("clientId", $this->_propDict)) {
            return $this->_propDict["clientId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the clientId
    * ID of the Azure AD app that has been granted access. Read-only.
    *
    * @param string $val The clientId
    *
    * @return ResourceSpecificPermissionGrant
    */
    public function setClientId($val)
    {
        $this->_propDict["clientId"] = $val;
        return $this;
    }
    
    /**
    * Gets the permission
    * The name of the permission. Read-only.
    *
    * @return string The permission
    */
    public function getPermission()
    {
        if (array_key_exists("permission", $this->_propDict)) {
            return $this->_propDict["permission"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the permission
    * The name of the permission. Read-only.
    *
    * @param string $val The permission
    *
    * @return ResourceSpecificPermissionGrant
    */
    public function setPermission($val)
    {
        $this->_propDict["permission"] = $val;
        return $this;
    }
    
    /**
    * Gets the permissionType
    * The type of permission. Possible values are: Application,Delegated. Read-only.
    *
    * @return string The permissionType
    */
    public function getPermissionType()
    {
        if (array_key_exists("permissionType", $this->_propDict)) {
            return $this->_propDict["permissionType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the permissionType
    * The type of permission. Possible values are: Application,Delegated. Read-only.
    *
    * @param string $val The permissionType
    *
    * @return ResourceSpecificPermissionGrant
    */
    public function setPermissionType($val)
    {
        $this->_propDict["permissionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceAppId
    * ID of the Azure AD app that is hosting the resource. Read-only.
    *
    * @return string The resourceAppId
    */
    public function getResourceAppId()
    {
        if (array_key_exists("resourceAppId", $this->_propDict)) {
            return $this->_propDict["resourceAppId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceAppId
    * ID of the Azure AD app that is hosting the resource. Read-only.
    *
    * @param string $val The resourceAppId
    *
    * @return ResourceSpecificPermissionGrant
    */
    public function setResourceAppId($val)
    {
        $this->_propDict["resourceAppId"] = $val;
        return $this;
    }
    
}
