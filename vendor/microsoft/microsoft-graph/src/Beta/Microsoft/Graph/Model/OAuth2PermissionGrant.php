<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OAuth2PermissionGrant File
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
* OAuth2PermissionGrant class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OAuth2PermissionGrant extends Entity
{
    /**
    * Gets the clientId
    * The id of the client service principal for the application which is authorized to act on behalf of a signed-in user when accessing an API. Required. Supports $filter (eq only).
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
    * The id of the client service principal for the application which is authorized to act on behalf of a signed-in user when accessing an API. Required. Supports $filter (eq only).
    *
    * @param string $val The clientId
    *
    * @return OAuth2PermissionGrant
    */
    public function setClientId($val)
    {
        $this->_propDict["clientId"] = $val;
        return $this;
    }
    
    /**
    * Gets the consentType
    * Indicates if authorization is granted for the client application to impersonate all users or only a specific user. AllPrincipals indicates authorization to impersonate all users. Principal indicates authorization to impersonate a specific user. Consent on behalf of all users can be granted by an administrator. Non-admin users may be authorized to consent on behalf of themselves in some cases, for some delegated permissions. Required. Supports $filter (eq only).
    *
    * @return string The consentType
    */
    public function getConsentType()
    {
        if (array_key_exists("consentType", $this->_propDict)) {
            return $this->_propDict["consentType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the consentType
    * Indicates if authorization is granted for the client application to impersonate all users or only a specific user. AllPrincipals indicates authorization to impersonate all users. Principal indicates authorization to impersonate a specific user. Consent on behalf of all users can be granted by an administrator. Non-admin users may be authorized to consent on behalf of themselves in some cases, for some delegated permissions. Required. Supports $filter (eq only).
    *
    * @param string $val The consentType
    *
    * @return OAuth2PermissionGrant
    */
    public function setConsentType($val)
    {
        $this->_propDict["consentType"] = $val;
        return $this;
    }
    
    /**
    * Gets the expiryTime
    * Currently, the end time value is ignored, but a value is required when creating an oAuth2PermissionGrant. Required.
    *
    * @return \DateTime The expiryTime
    */
    public function getExpiryTime()
    {
        if (array_key_exists("expiryTime", $this->_propDict)) {
            if (is_a($this->_propDict["expiryTime"], "\DateTime")) {
                return $this->_propDict["expiryTime"];
            } else {
                $this->_propDict["expiryTime"] = new \DateTime($this->_propDict["expiryTime"]);
                return $this->_propDict["expiryTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expiryTime
    * Currently, the end time value is ignored, but a value is required when creating an oAuth2PermissionGrant. Required.
    *
    * @param \DateTime $val The expiryTime
    *
    * @return OAuth2PermissionGrant
    */
    public function setExpiryTime($val)
    {
        $this->_propDict["expiryTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the principalId
    * The id of the user on behalf of whom the client is authorized to access the resource, when consentType is Principal. If consentType is AllPrincipals this value is null. Required when consentType is Principal.
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
    * The id of the user on behalf of whom the client is authorized to access the resource, when consentType is Principal. If consentType is AllPrincipals this value is null. Required when consentType is Principal.
    *
    * @param string $val The principalId
    *
    * @return OAuth2PermissionGrant
    */
    public function setPrincipalId($val)
    {
        $this->_propDict["principalId"] = $val;
        return $this;
    }
    
    /**
    * Gets the resourceId
    * The id of the resource service principal to which access is authorized. This identifies the API which the client is authorized to attempt to call on behalf of a signed-in user.
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
    * The id of the resource service principal to which access is authorized. This identifies the API which the client is authorized to attempt to call on behalf of a signed-in user.
    *
    * @param string $val The resourceId
    *
    * @return OAuth2PermissionGrant
    */
    public function setResourceId($val)
    {
        $this->_propDict["resourceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the scope
    * A space-separated list of the claim values for delegated permissions which should be included in access tokens for the resource application (the API). For example, openid User.Read GroupMember.Read.All. Each claim value should match the value field of one of the delegated permissions defined by the API, listed in the publishedPermissionScopes property of the resource service principal.
    *
    * @return string The scope
    */
    public function getScope()
    {
        if (array_key_exists("scope", $this->_propDict)) {
            return $this->_propDict["scope"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the scope
    * A space-separated list of the claim values for delegated permissions which should be included in access tokens for the resource application (the API). For example, openid User.Read GroupMember.Read.All. Each claim value should match the value field of one of the delegated permissions defined by the API, listed in the publishedPermissionScopes property of the resource service principal.
    *
    * @param string $val The scope
    *
    * @return OAuth2PermissionGrant
    */
    public function setScope($val)
    {
        $this->_propDict["scope"] = $val;
        return $this;
    }
    
    /**
    * Gets the startTime
    * Currently, the start time value is ignored, but a value is required when creating an oAuth2PermissionGrant. Required.
    *
    * @return \DateTime The startTime
    */
    public function getStartTime()
    {
        if (array_key_exists("startTime", $this->_propDict)) {
            if (is_a($this->_propDict["startTime"], "\DateTime")) {
                return $this->_propDict["startTime"];
            } else {
                $this->_propDict["startTime"] = new \DateTime($this->_propDict["startTime"]);
                return $this->_propDict["startTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the startTime
    * Currently, the start time value is ignored, but a value is required when creating an oAuth2PermissionGrant. Required.
    *
    * @param \DateTime $val The startTime
    *
    * @return OAuth2PermissionGrant
    */
    public function setStartTime($val)
    {
        $this->_propDict["startTime"] = $val;
        return $this;
    }
    
}
