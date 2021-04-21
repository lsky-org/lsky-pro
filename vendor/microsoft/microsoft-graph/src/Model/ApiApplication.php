<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ApiApplication File
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
* ApiApplication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ApiApplication extends Entity
{
    /**
    * Gets the acceptMappedClaims
    * When true, allows an application to use claims mapping without specifying a custom signing key.
    *
    * @return bool The acceptMappedClaims
    */
    public function getAcceptMappedClaims()
    {
        if (array_key_exists("acceptMappedClaims", $this->_propDict)) {
            return $this->_propDict["acceptMappedClaims"];
        } else {
            return null;
        }
    }

    /**
    * Sets the acceptMappedClaims
    * When true, allows an application to use claims mapping without specifying a custom signing key.
    *
    * @param bool $val The value of the acceptMappedClaims
    *
    * @return ApiApplication
    */
    public function setAcceptMappedClaims($val)
    {
        $this->_propDict["acceptMappedClaims"] = $val;
        return $this;
    }
    /**
    * Gets the knownClientApplications
    * Used for bundling consent if you have a solution that contains two parts: a client app and a custom web API app. If you set the appID of the client app to this value, the user only consents once to the client app. Azure AD knows that consenting to the client means implicitly consenting to the web API and automatically provisions service principals for both APIs at the same time. Both the client and the web API app must be registered in the same tenant.
    *
    * @return string The knownClientApplications
    */
    public function getKnownClientApplications()
    {
        if (array_key_exists("knownClientApplications", $this->_propDict)) {
            return $this->_propDict["knownClientApplications"];
        } else {
            return null;
        }
    }

    /**
    * Sets the knownClientApplications
    * Used for bundling consent if you have a solution that contains two parts: a client app and a custom web API app. If you set the appID of the client app to this value, the user only consents once to the client app. Azure AD knows that consenting to the client means implicitly consenting to the web API and automatically provisions service principals for both APIs at the same time. Both the client and the web API app must be registered in the same tenant.
    *
    * @param string $val The value of the knownClientApplications
    *
    * @return ApiApplication
    */
    public function setKnownClientApplications($val)
    {
        $this->_propDict["knownClientApplications"] = $val;
        return $this;
    }

    /**
    * Gets the oauth2PermissionScopes
    * The definition of the delegated permissions exposed by the web API represented by this application registration. These delegated permissions may be requested by a client application, and may be granted by users or administrators during consent. Delegated permissions are sometimes referred to as OAuth 2.0 scopes.
    *
    * @return PermissionScope The oauth2PermissionScopes
    */
    public function getOauth2PermissionScopes()
    {
        if (array_key_exists("oauth2PermissionScopes", $this->_propDict)) {
            if (is_a($this->_propDict["oauth2PermissionScopes"], "\Microsoft\Graph\Model\PermissionScope")) {
                return $this->_propDict["oauth2PermissionScopes"];
            } else {
                $this->_propDict["oauth2PermissionScopes"] = new PermissionScope($this->_propDict["oauth2PermissionScopes"]);
                return $this->_propDict["oauth2PermissionScopes"];
            }
        }
        return null;
    }

    /**
    * Sets the oauth2PermissionScopes
    * The definition of the delegated permissions exposed by the web API represented by this application registration. These delegated permissions may be requested by a client application, and may be granted by users or administrators during consent. Delegated permissions are sometimes referred to as OAuth 2.0 scopes.
    *
    * @param PermissionScope $val The value to assign to the oauth2PermissionScopes
    *
    * @return ApiApplication The ApiApplication
    */
    public function setOauth2PermissionScopes($val)
    {
        $this->_propDict["oauth2PermissionScopes"] = $val;
         return $this;
    }

    /**
    * Gets the preAuthorizedApplications
    * Lists the client applications that are pre-authorized with the specified delegated permissions to access this application's APIs. Users are not required to consent to any pre-authorized application (for the permissions specified). However, any additional permissions not listed in preAuthorizedApplications (requested through incremental consent for example) will require user consent.
    *
    * @return PreAuthorizedApplication The preAuthorizedApplications
    */
    public function getPreAuthorizedApplications()
    {
        if (array_key_exists("preAuthorizedApplications", $this->_propDict)) {
            if (is_a($this->_propDict["preAuthorizedApplications"], "\Microsoft\Graph\Model\PreAuthorizedApplication")) {
                return $this->_propDict["preAuthorizedApplications"];
            } else {
                $this->_propDict["preAuthorizedApplications"] = new PreAuthorizedApplication($this->_propDict["preAuthorizedApplications"]);
                return $this->_propDict["preAuthorizedApplications"];
            }
        }
        return null;
    }

    /**
    * Sets the preAuthorizedApplications
    * Lists the client applications that are pre-authorized with the specified delegated permissions to access this application's APIs. Users are not required to consent to any pre-authorized application (for the permissions specified). However, any additional permissions not listed in preAuthorizedApplications (requested through incremental consent for example) will require user consent.
    *
    * @param PreAuthorizedApplication $val The value to assign to the preAuthorizedApplications
    *
    * @return ApiApplication The ApiApplication
    */
    public function setPreAuthorizedApplications($val)
    {
        $this->_propDict["preAuthorizedApplications"] = $val;
         return $this;
    }
    /**
    * Gets the requestedAccessTokenVersion
    * Specifies the access token version expected by this resource. This changes the version and format of the JWT produced independent of the endpoint or client used to request the access token.  The endpoint used, v1.0 or v2.0, is chosen by the client and only impacts the version of id_tokens. Resources need to explicitly configure requestedAccessTokenVersion to indicate the supported access token format.  Possible values for requestedAccessTokenVersion are 1, 2, or null. If the value is null, this defaults to 1, which corresponds to the v1.0 endpoint.  If signInAudience on the application is configured as AzureADandPersonalMicrosoftAccount, the value for this property must be 2
    *
    * @return int The requestedAccessTokenVersion
    */
    public function getRequestedAccessTokenVersion()
    {
        if (array_key_exists("requestedAccessTokenVersion", $this->_propDict)) {
            return $this->_propDict["requestedAccessTokenVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requestedAccessTokenVersion
    * Specifies the access token version expected by this resource. This changes the version and format of the JWT produced independent of the endpoint or client used to request the access token.  The endpoint used, v1.0 or v2.0, is chosen by the client and only impacts the version of id_tokens. Resources need to explicitly configure requestedAccessTokenVersion to indicate the supported access token format.  Possible values for requestedAccessTokenVersion are 1, 2, or null. If the value is null, this defaults to 1, which corresponds to the v1.0 endpoint.  If signInAudience on the application is configured as AzureADandPersonalMicrosoftAccount, the value for this property must be 2
    *
    * @param int $val The value of the requestedAccessTokenVersion
    *
    * @return ApiApplication
    */
    public function setRequestedAccessTokenVersion($val)
    {
        $this->_propDict["requestedAccessTokenVersion"] = $val;
        return $this;
    }
}
