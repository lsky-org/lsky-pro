<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PermissionGrantConditionSet File
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
* PermissionGrantConditionSet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PermissionGrantConditionSet extends Entity
{
    /**
    * Gets the clientApplicationIds
    * A list of appId values for the client applications to match with, or a list with the single value all to match any client application. Default is the single value all.
    *
    * @return string The clientApplicationIds
    */
    public function getClientApplicationIds()
    {
        if (array_key_exists("clientApplicationIds", $this->_propDict)) {
            return $this->_propDict["clientApplicationIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the clientApplicationIds
    * A list of appId values for the client applications to match with, or a list with the single value all to match any client application. Default is the single value all.
    *
    * @param string $val The clientApplicationIds
    *
    * @return PermissionGrantConditionSet
    */
    public function setClientApplicationIds($val)
    {
        $this->_propDict["clientApplicationIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the clientApplicationPublisherIds
    * A list of Microsoft Partner Network (MPN) IDs for verified publishers of the client application, or a list with the single value all to match with client apps from any publisher. Default is the single value all.
    *
    * @return string The clientApplicationPublisherIds
    */
    public function getClientApplicationPublisherIds()
    {
        if (array_key_exists("clientApplicationPublisherIds", $this->_propDict)) {
            return $this->_propDict["clientApplicationPublisherIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the clientApplicationPublisherIds
    * A list of Microsoft Partner Network (MPN) IDs for verified publishers of the client application, or a list with the single value all to match with client apps from any publisher. Default is the single value all.
    *
    * @param string $val The clientApplicationPublisherIds
    *
    * @return PermissionGrantConditionSet
    */
    public function setClientApplicationPublisherIds($val)
    {
        $this->_propDict["clientApplicationPublisherIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the clientApplicationsFromVerifiedPublisherOnly
    * Set to true to only match on client applications with a verified publisher. Set to false to match on any client app, even if it does not have a verified publisher. Default is false.
    *
    * @return bool The clientApplicationsFromVerifiedPublisherOnly
    */
    public function getClientApplicationsFromVerifiedPublisherOnly()
    {
        if (array_key_exists("clientApplicationsFromVerifiedPublisherOnly", $this->_propDict)) {
            return $this->_propDict["clientApplicationsFromVerifiedPublisherOnly"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the clientApplicationsFromVerifiedPublisherOnly
    * Set to true to only match on client applications with a verified publisher. Set to false to match on any client app, even if it does not have a verified publisher. Default is false.
    *
    * @param bool $val The clientApplicationsFromVerifiedPublisherOnly
    *
    * @return PermissionGrantConditionSet
    */
    public function setClientApplicationsFromVerifiedPublisherOnly($val)
    {
        $this->_propDict["clientApplicationsFromVerifiedPublisherOnly"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the clientApplicationTenantIds
    * A list of Azure Active Directory tenant IDs in which the client application is registered, or a list with the single value all to match with client apps registered in any tenant. Default is the single value all.
    *
    * @return string The clientApplicationTenantIds
    */
    public function getClientApplicationTenantIds()
    {
        if (array_key_exists("clientApplicationTenantIds", $this->_propDict)) {
            return $this->_propDict["clientApplicationTenantIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the clientApplicationTenantIds
    * A list of Azure Active Directory tenant IDs in which the client application is registered, or a list with the single value all to match with client apps registered in any tenant. Default is the single value all.
    *
    * @param string $val The clientApplicationTenantIds
    *
    * @return PermissionGrantConditionSet
    */
    public function setClientApplicationTenantIds($val)
    {
        $this->_propDict["clientApplicationTenantIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the permissionClassification
    * The permission classification for the permission being granted, or all to match with any permission classification (including permissions which are not classified). Default is all.
    *
    * @return string The permissionClassification
    */
    public function getPermissionClassification()
    {
        if (array_key_exists("permissionClassification", $this->_propDict)) {
            return $this->_propDict["permissionClassification"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the permissionClassification
    * The permission classification for the permission being granted, or all to match with any permission classification (including permissions which are not classified). Default is all.
    *
    * @param string $val The permissionClassification
    *
    * @return PermissionGrantConditionSet
    */
    public function setPermissionClassification($val)
    {
        $this->_propDict["permissionClassification"] = $val;
        return $this;
    }
    
    /**
    * Gets the permissions
    * The list of id values for the specific permissions to match with, or a list with the single value all to match with any permission. The id of delegated permissions can be found in the publishedPermissionScopes property of the API's **servicePrincipal** object. The id of application permissions can be found in the appRoles property of the API's **servicePrincipal** object. The id of resource-specific application permissions can be found in the resourceSpecificApplicationPermissions property of the API's **servicePrincipal** object. Default is the single value all.
    *
    * @return string The permissions
    */
    public function getPermissions()
    {
        if (array_key_exists("permissions", $this->_propDict)) {
            return $this->_propDict["permissions"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the permissions
    * The list of id values for the specific permissions to match with, or a list with the single value all to match with any permission. The id of delegated permissions can be found in the publishedPermissionScopes property of the API's **servicePrincipal** object. The id of application permissions can be found in the appRoles property of the API's **servicePrincipal** object. The id of resource-specific application permissions can be found in the resourceSpecificApplicationPermissions property of the API's **servicePrincipal** object. Default is the single value all.
    *
    * @param string $val The permissions
    *
    * @return PermissionGrantConditionSet
    */
    public function setPermissions($val)
    {
        $this->_propDict["permissions"] = $val;
        return $this;
    }
    
    /**
    * Gets the permissionType
    * The permission type of the permission being granted. Possible values: application for application permissions (e.g. app roles), or delegated for delegated permissions. The value delegatedUserConsentable indicates delegated permissions which have not been configured by the API publisher to require admin consent—this value may be used in built-in permission grant policies, but cannot be used in custom permission grant policies. Required.
    *
    * @return PermissionType The permissionType
    */
    public function getPermissionType()
    {
        if (array_key_exists("permissionType", $this->_propDict)) {
            if (is_a($this->_propDict["permissionType"], "\Beta\Microsoft\Graph\Model\PermissionType")) {
                return $this->_propDict["permissionType"];
            } else {
                $this->_propDict["permissionType"] = new PermissionType($this->_propDict["permissionType"]);
                return $this->_propDict["permissionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the permissionType
    * The permission type of the permission being granted. Possible values: application for application permissions (e.g. app roles), or delegated for delegated permissions. The value delegatedUserConsentable indicates delegated permissions which have not been configured by the API publisher to require admin consent—this value may be used in built-in permission grant policies, but cannot be used in custom permission grant policies. Required.
    *
    * @param PermissionType $val The permissionType
    *
    * @return PermissionGrantConditionSet
    */
    public function setPermissionType($val)
    {
        $this->_propDict["permissionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceApplication
    * The appId of the resource application (e.g. the API) for which a permission is being granted, or any to match with any resource application or API. Default is any.
    *
    * @return string The resourceApplication
    */
    public function getResourceApplication()
    {
        if (array_key_exists("resourceApplication", $this->_propDict)) {
            return $this->_propDict["resourceApplication"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resourceApplication
    * The appId of the resource application (e.g. the API) for which a permission is being granted, or any to match with any resource application or API. Default is any.
    *
    * @param string $val The resourceApplication
    *
    * @return PermissionGrantConditionSet
    */
    public function setResourceApplication($val)
    {
        $this->_propDict["resourceApplication"] = $val;
        return $this;
    }
    
}
