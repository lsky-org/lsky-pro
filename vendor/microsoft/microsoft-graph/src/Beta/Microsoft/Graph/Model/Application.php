<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Application File
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
* Application class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Application extends DirectoryObject
{
    /**
    * Gets the api
    * Specifies settings for an application that implements a web API.
    *
    * @return ApiApplication The api
    */
    public function getApi()
    {
        if (array_key_exists("api", $this->_propDict)) {
            if (is_a($this->_propDict["api"], "\Beta\Microsoft\Graph\Model\ApiApplication")) {
                return $this->_propDict["api"];
            } else {
                $this->_propDict["api"] = new ApiApplication($this->_propDict["api"]);
                return $this->_propDict["api"];
            }
        }
        return null;
    }
    
    /**
    * Sets the api
    * Specifies settings for an application that implements a web API.
    *
    * @param ApiApplication $val The api
    *
    * @return Application
    */
    public function setApi($val)
    {
        $this->_propDict["api"] = $val;
        return $this;
    }
    
    /**
    * Gets the appId
    * The unique identifier for the application that is assigned by Azure AD. Not nullable. Read-only.
    *
    * @return string The appId
    */
    public function getAppId()
    {
        if (array_key_exists("appId", $this->_propDict)) {
            return $this->_propDict["appId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appId
    * The unique identifier for the application that is assigned by Azure AD. Not nullable. Read-only.
    *
    * @param string $val The appId
    *
    * @return Application
    */
    public function setAppId($val)
    {
        $this->_propDict["appId"] = $val;
        return $this;
    }
    

     /** 
     * Gets the appRoles
    * The collection of roles assigned to the application. With app role assignments, these roles can be assigned to users, groups, or service principals associated with other applications. Not nullable.
     *
     * @return array The appRoles
     */
    public function getAppRoles()
    {
        if (array_key_exists("appRoles", $this->_propDict)) {
           return $this->_propDict["appRoles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appRoles
    * The collection of roles assigned to the application. With app role assignments, these roles can be assigned to users, groups, or service principals associated with other applications. Not nullable.
    *
    * @param AppRole $val The appRoles
    *
    * @return Application
    */
    public function setAppRoles($val)
    {
		$this->_propDict["appRoles"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdDateTime
    * The date and time the application was registered. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
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
    * The date and time the application was registered. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    *
    * @param \DateTime $val The createdDateTime
    *
    * @return Application
    */
    public function setCreatedDateTime($val)
    {
        $this->_propDict["createdDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultRedirectUri
    *
    * @return string The defaultRedirectUri
    */
    public function getDefaultRedirectUri()
    {
        if (array_key_exists("defaultRedirectUri", $this->_propDict)) {
            return $this->_propDict["defaultRedirectUri"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defaultRedirectUri
    *
    * @param string $val The defaultRedirectUri
    *
    * @return Application
    */
    public function setDefaultRedirectUri($val)
    {
        $this->_propDict["defaultRedirectUri"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
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
    *
    * @param string $val The description
    *
    * @return Application
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The display name for the application.
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
    * The display name for the application.
    *
    * @param string $val The displayName
    *
    * @return Application
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the groupMembershipClaims
    * Configures the groups claim issued in a user or OAuth 2.0 access token that the application expects. To set this attribute, use one of the following string values: None, SecurityGroup (for security groups and Azure AD roles), All (this gets all security groups, distribution groups, and Azure AD directory roles that the signed-in user is a member of).
    *
    * @return string The groupMembershipClaims
    */
    public function getGroupMembershipClaims()
    {
        if (array_key_exists("groupMembershipClaims", $this->_propDict)) {
            return $this->_propDict["groupMembershipClaims"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the groupMembershipClaims
    * Configures the groups claim issued in a user or OAuth 2.0 access token that the application expects. To set this attribute, use one of the following string values: None, SecurityGroup (for security groups and Azure AD roles), All (this gets all security groups, distribution groups, and Azure AD directory roles that the signed-in user is a member of).
    *
    * @param string $val The groupMembershipClaims
    *
    * @return Application
    */
    public function setGroupMembershipClaims($val)
    {
        $this->_propDict["groupMembershipClaims"] = $val;
        return $this;
    }
    
    /**
    * Gets the identifierUris
    * The URIs that identify the application within its Azure AD tenant, or within a verified custom domain if the application is multi-tenant. For more information, see Application Objects and Service Principal Objects. The any operator is required for filter expressions on multi-valued properties. Not nullable.
    *
    * @return string The identifierUris
    */
    public function getIdentifierUris()
    {
        if (array_key_exists("identifierUris", $this->_propDict)) {
            return $this->_propDict["identifierUris"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the identifierUris
    * The URIs that identify the application within its Azure AD tenant, or within a verified custom domain if the application is multi-tenant. For more information, see Application Objects and Service Principal Objects. The any operator is required for filter expressions on multi-valued properties. Not nullable.
    *
    * @param string $val The identifierUris
    *
    * @return Application
    */
    public function setIdentifierUris($val)
    {
        $this->_propDict["identifierUris"] = $val;
        return $this;
    }
    
    /**
    * Gets the info
    * Basic profile information of the application, such as it's marketing, support, terms of service, and privacy statement URLs. The terms of service and privacy statement are surfaced to users through the user consent experience. For more information, see How to: Add Terms of service and privacy statement for registered Azure AD apps.
    *
    * @return InformationalUrl The info
    */
    public function getInfo()
    {
        if (array_key_exists("info", $this->_propDict)) {
            if (is_a($this->_propDict["info"], "\Beta\Microsoft\Graph\Model\InformationalUrl")) {
                return $this->_propDict["info"];
            } else {
                $this->_propDict["info"] = new InformationalUrl($this->_propDict["info"]);
                return $this->_propDict["info"];
            }
        }
        return null;
    }
    
    /**
    * Sets the info
    * Basic profile information of the application, such as it's marketing, support, terms of service, and privacy statement URLs. The terms of service and privacy statement are surfaced to users through the user consent experience. For more information, see How to: Add Terms of service and privacy statement for registered Azure AD apps.
    *
    * @param InformationalUrl $val The info
    *
    * @return Application
    */
    public function setInfo($val)
    {
        $this->_propDict["info"] = $val;
        return $this;
    }
    
    /**
    * Gets the isDeviceOnlyAuthSupported
    *
    * @return bool The isDeviceOnlyAuthSupported
    */
    public function getIsDeviceOnlyAuthSupported()
    {
        if (array_key_exists("isDeviceOnlyAuthSupported", $this->_propDict)) {
            return $this->_propDict["isDeviceOnlyAuthSupported"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isDeviceOnlyAuthSupported
    *
    * @param bool $val The isDeviceOnlyAuthSupported
    *
    * @return Application
    */
    public function setIsDeviceOnlyAuthSupported($val)
    {
        $this->_propDict["isDeviceOnlyAuthSupported"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the isFallbackPublicClient
    * Specifies the fallback application type as public client, such as an installed application running on a mobile device. The default value is false which means the fallback application type is confidential client such as a web app. There are certain scenarios where Azure AD cannot determine the client application type. For example, the ROPC flow where the application is configured without specifying a redirect URI. In those cases Azure AD interprets the application type based on the value of this property.
    *
    * @return bool The isFallbackPublicClient
    */
    public function getIsFallbackPublicClient()
    {
        if (array_key_exists("isFallbackPublicClient", $this->_propDict)) {
            return $this->_propDict["isFallbackPublicClient"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isFallbackPublicClient
    * Specifies the fallback application type as public client, such as an installed application running on a mobile device. The default value is false which means the fallback application type is confidential client such as a web app. There are certain scenarios where Azure AD cannot determine the client application type. For example, the ROPC flow where the application is configured without specifying a redirect URI. In those cases Azure AD interprets the application type based on the value of this property.
    *
    * @param bool $val The isFallbackPublicClient
    *
    * @return Application
    */
    public function setIsFallbackPublicClient($val)
    {
        $this->_propDict["isFallbackPublicClient"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the keyCredentials
    * The collection of key credentials associated with the application. Not nullable.
     *
     * @return array The keyCredentials
     */
    public function getKeyCredentials()
    {
        if (array_key_exists("keyCredentials", $this->_propDict)) {
           return $this->_propDict["keyCredentials"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the keyCredentials
    * The collection of key credentials associated with the application. Not nullable.
    *
    * @param KeyCredential $val The keyCredentials
    *
    * @return Application
    */
    public function setKeyCredentials($val)
    {
		$this->_propDict["keyCredentials"] = $val;
        return $this;
    }
    
    /**
    * Gets the logo
    * The main logo for the application. Not nullable.
    *
    * @return \GuzzleHttp\Psr7\Stream The logo
    */
    public function getLogo()
    {
        if (array_key_exists("logo", $this->_propDict)) {
            if (is_a($this->_propDict["logo"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["logo"];
            } else {
                $this->_propDict["logo"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["logo"]);
                return $this->_propDict["logo"];
            }
        }
        return null;
    }
    
    /**
    * Sets the logo
    * The main logo for the application. Not nullable.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The logo
    *
    * @return Application
    */
    public function setLogo($val)
    {
        $this->_propDict["logo"] = $val;
        return $this;
    }
    
    /**
    * Gets the notes
    * Notes relevant for the management of the application.
    *
    * @return string The notes
    */
    public function getNotes()
    {
        if (array_key_exists("notes", $this->_propDict)) {
            return $this->_propDict["notes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notes
    * Notes relevant for the management of the application.
    *
    * @param string $val The notes
    *
    * @return Application
    */
    public function setNotes($val)
    {
        $this->_propDict["notes"] = $val;
        return $this;
    }
    
    /**
    * Gets the optionalClaims
    * Application developers can configure optional claims in their Azure AD applications to specify the claims that are sent to their application by the Microsoft security token service. For more information, see How to: Provide optional claims to your app.
    *
    * @return OptionalClaims The optionalClaims
    */
    public function getOptionalClaims()
    {
        if (array_key_exists("optionalClaims", $this->_propDict)) {
            if (is_a($this->_propDict["optionalClaims"], "\Beta\Microsoft\Graph\Model\OptionalClaims")) {
                return $this->_propDict["optionalClaims"];
            } else {
                $this->_propDict["optionalClaims"] = new OptionalClaims($this->_propDict["optionalClaims"]);
                return $this->_propDict["optionalClaims"];
            }
        }
        return null;
    }
    
    /**
    * Sets the optionalClaims
    * Application developers can configure optional claims in their Azure AD applications to specify the claims that are sent to their application by the Microsoft security token service. For more information, see How to: Provide optional claims to your app.
    *
    * @param OptionalClaims $val The optionalClaims
    *
    * @return Application
    */
    public function setOptionalClaims($val)
    {
        $this->_propDict["optionalClaims"] = $val;
        return $this;
    }
    
    /**
    * Gets the parentalControlSettings
    * Specifies parental control settings for an application.
    *
    * @return ParentalControlSettings The parentalControlSettings
    */
    public function getParentalControlSettings()
    {
        if (array_key_exists("parentalControlSettings", $this->_propDict)) {
            if (is_a($this->_propDict["parentalControlSettings"], "\Beta\Microsoft\Graph\Model\ParentalControlSettings")) {
                return $this->_propDict["parentalControlSettings"];
            } else {
                $this->_propDict["parentalControlSettings"] = new ParentalControlSettings($this->_propDict["parentalControlSettings"]);
                return $this->_propDict["parentalControlSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the parentalControlSettings
    * Specifies parental control settings for an application.
    *
    * @param ParentalControlSettings $val The parentalControlSettings
    *
    * @return Application
    */
    public function setParentalControlSettings($val)
    {
        $this->_propDict["parentalControlSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the passwordCredentials
    * The collection of password credentials associated with the application. Not nullable.
     *
     * @return array The passwordCredentials
     */
    public function getPasswordCredentials()
    {
        if (array_key_exists("passwordCredentials", $this->_propDict)) {
           return $this->_propDict["passwordCredentials"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the passwordCredentials
    * The collection of password credentials associated with the application. Not nullable.
    *
    * @param PasswordCredential $val The passwordCredentials
    *
    * @return Application
    */
    public function setPasswordCredentials($val)
    {
		$this->_propDict["passwordCredentials"] = $val;
        return $this;
    }
    
    /**
    * Gets the publicClient
    * Specifies settings for installed clients such as desktop or mobile devices.
    *
    * @return PublicClientApplication The publicClient
    */
    public function getPublicClient()
    {
        if (array_key_exists("publicClient", $this->_propDict)) {
            if (is_a($this->_propDict["publicClient"], "\Beta\Microsoft\Graph\Model\PublicClientApplication")) {
                return $this->_propDict["publicClient"];
            } else {
                $this->_propDict["publicClient"] = new PublicClientApplication($this->_propDict["publicClient"]);
                return $this->_propDict["publicClient"];
            }
        }
        return null;
    }
    
    /**
    * Sets the publicClient
    * Specifies settings for installed clients such as desktop or mobile devices.
    *
    * @param PublicClientApplication $val The publicClient
    *
    * @return Application
    */
    public function setPublicClient($val)
    {
        $this->_propDict["publicClient"] = $val;
        return $this;
    }
    
    /**
    * Gets the publisherDomain
    * The verified publisher domain for the application. Read-only.
    *
    * @return string The publisherDomain
    */
    public function getPublisherDomain()
    {
        if (array_key_exists("publisherDomain", $this->_propDict)) {
            return $this->_propDict["publisherDomain"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the publisherDomain
    * The verified publisher domain for the application. Read-only.
    *
    * @param string $val The publisherDomain
    *
    * @return Application
    */
    public function setPublisherDomain($val)
    {
        $this->_propDict["publisherDomain"] = $val;
        return $this;
    }
    

     /** 
     * Gets the requiredResourceAccess
    * Specifies the resources that the application needs to access. This property also specifies the set of OAuth permission scopes and application roles that it needs for each of those resources. This configuration of access to the required resources drives the consent experience. Not nullable.
     *
     * @return array The requiredResourceAccess
     */
    public function getRequiredResourceAccess()
    {
        if (array_key_exists("requiredResourceAccess", $this->_propDict)) {
           return $this->_propDict["requiredResourceAccess"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the requiredResourceAccess
    * Specifies the resources that the application needs to access. This property also specifies the set of OAuth permission scopes and application roles that it needs for each of those resources. This configuration of access to the required resources drives the consent experience. Not nullable.
    *
    * @param RequiredResourceAccess $val The requiredResourceAccess
    *
    * @return Application
    */
    public function setRequiredResourceAccess($val)
    {
		$this->_propDict["requiredResourceAccess"] = $val;
        return $this;
    }
    
    /**
    * Gets the signInAudience
    * Specifies the Microsoft accounts that are supported for the current application. Supported values are: AzureADMyOrg, AzureADMultipleOrgs, AzureADandPersonalMicrosoftAccount, PersonalMicrosoftAccount. See more in the table below.
    *
    * @return string The signInAudience
    */
    public function getSignInAudience()
    {
        if (array_key_exists("signInAudience", $this->_propDict)) {
            return $this->_propDict["signInAudience"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the signInAudience
    * Specifies the Microsoft accounts that are supported for the current application. Supported values are: AzureADMyOrg, AzureADMultipleOrgs, AzureADandPersonalMicrosoftAccount, PersonalMicrosoftAccount. See more in the table below.
    *
    * @param string $val The signInAudience
    *
    * @return Application
    */
    public function setSignInAudience($val)
    {
        $this->_propDict["signInAudience"] = $val;
        return $this;
    }
    
    /**
    * Gets the spa
    * Specifies settings for a single-page application, including sign out URLs and redirect URIs for authorization codes and access tokens.
    *
    * @return SpaApplication The spa
    */
    public function getSpa()
    {
        if (array_key_exists("spa", $this->_propDict)) {
            if (is_a($this->_propDict["spa"], "\Beta\Microsoft\Graph\Model\SpaApplication")) {
                return $this->_propDict["spa"];
            } else {
                $this->_propDict["spa"] = new SpaApplication($this->_propDict["spa"]);
                return $this->_propDict["spa"];
            }
        }
        return null;
    }
    
    /**
    * Sets the spa
    * Specifies settings for a single-page application, including sign out URLs and redirect URIs for authorization codes and access tokens.
    *
    * @param SpaApplication $val The spa
    *
    * @return Application
    */
    public function setSpa($val)
    {
        $this->_propDict["spa"] = $val;
        return $this;
    }
    
    /**
    * Gets the tags
    * Custom strings that can be used to categorize and identify the application. Not nullable.
    *
    * @return string The tags
    */
    public function getTags()
    {
        if (array_key_exists("tags", $this->_propDict)) {
            return $this->_propDict["tags"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tags
    * Custom strings that can be used to categorize and identify the application. Not nullable.
    *
    * @param string $val The tags
    *
    * @return Application
    */
    public function setTags($val)
    {
        $this->_propDict["tags"] = $val;
        return $this;
    }
    
    /**
    * Gets the tokenEncryptionKeyId
    * Specifies the keyId of a public key from the keyCredentials collection. When configured, Azure AD encrypts all the tokens it emits by using the key this property points to. The application code that receives the encrypted token must use the matching private key to decrypt the token before it can be used for the signed-in user.
    *
    * @return string The tokenEncryptionKeyId
    */
    public function getTokenEncryptionKeyId()
    {
        if (array_key_exists("tokenEncryptionKeyId", $this->_propDict)) {
            return $this->_propDict["tokenEncryptionKeyId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tokenEncryptionKeyId
    * Specifies the keyId of a public key from the keyCredentials collection. When configured, Azure AD encrypts all the tokens it emits by using the key this property points to. The application code that receives the encrypted token must use the matching private key to decrypt the token before it can be used for the signed-in user.
    *
    * @param string $val The tokenEncryptionKeyId
    *
    * @return Application
    */
    public function setTokenEncryptionKeyId($val)
    {
        $this->_propDict["tokenEncryptionKeyId"] = $val;
        return $this;
    }
    
    /**
    * Gets the uniqueName
    * The unique identifier that can be assigned to an application as an alternative identifier. Immutable. Read-only.
    *
    * @return string The uniqueName
    */
    public function getUniqueName()
    {
        if (array_key_exists("uniqueName", $this->_propDict)) {
            return $this->_propDict["uniqueName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the uniqueName
    * The unique identifier that can be assigned to an application as an alternative identifier. Immutable. Read-only.
    *
    * @param string $val The uniqueName
    *
    * @return Application
    */
    public function setUniqueName($val)
    {
        $this->_propDict["uniqueName"] = $val;
        return $this;
    }
    
    /**
    * Gets the web
    * Specifies settings for a web application.
    *
    * @return WebApplication The web
    */
    public function getWeb()
    {
        if (array_key_exists("web", $this->_propDict)) {
            if (is_a($this->_propDict["web"], "\Beta\Microsoft\Graph\Model\WebApplication")) {
                return $this->_propDict["web"];
            } else {
                $this->_propDict["web"] = new WebApplication($this->_propDict["web"]);
                return $this->_propDict["web"];
            }
        }
        return null;
    }
    
    /**
    * Sets the web
    * Specifies settings for a web application.
    *
    * @param WebApplication $val The web
    *
    * @return Application
    */
    public function setWeb($val)
    {
        $this->_propDict["web"] = $val;
        return $this;
    }
    
    /**
    * Gets the onPremisesPublishing
    * Represents the set of properties required for configuring Application Proxy for this application. Configuring these properties allows you to publish your on-premises application for secure remote access.
    *
    * @return OnPremisesPublishing The onPremisesPublishing
    */
    public function getOnPremisesPublishing()
    {
        if (array_key_exists("onPremisesPublishing", $this->_propDict)) {
            if (is_a($this->_propDict["onPremisesPublishing"], "\Beta\Microsoft\Graph\Model\OnPremisesPublishing")) {
                return $this->_propDict["onPremisesPublishing"];
            } else {
                $this->_propDict["onPremisesPublishing"] = new OnPremisesPublishing($this->_propDict["onPremisesPublishing"]);
                return $this->_propDict["onPremisesPublishing"];
            }
        }
        return null;
    }
    
    /**
    * Sets the onPremisesPublishing
    * Represents the set of properties required for configuring Application Proxy for this application. Configuring these properties allows you to publish your on-premises application for secure remote access.
    *
    * @param OnPremisesPublishing $val The onPremisesPublishing
    *
    * @return Application
    */
    public function setOnPremisesPublishing($val)
    {
        $this->_propDict["onPremisesPublishing"] = $val;
        return $this;
    }
    
    /**
    * Gets the createdOnBehalfOf
    * Read-only.
    *
    * @return DirectoryObject The createdOnBehalfOf
    */
    public function getCreatedOnBehalfOf()
    {
        if (array_key_exists("createdOnBehalfOf", $this->_propDict)) {
            if (is_a($this->_propDict["createdOnBehalfOf"], "\Beta\Microsoft\Graph\Model\DirectoryObject")) {
                return $this->_propDict["createdOnBehalfOf"];
            } else {
                $this->_propDict["createdOnBehalfOf"] = new DirectoryObject($this->_propDict["createdOnBehalfOf"]);
                return $this->_propDict["createdOnBehalfOf"];
            }
        }
        return null;
    }
    
    /**
    * Sets the createdOnBehalfOf
    * Read-only.
    *
    * @param DirectoryObject $val The createdOnBehalfOf
    *
    * @return Application
    */
    public function setCreatedOnBehalfOf($val)
    {
        $this->_propDict["createdOnBehalfOf"] = $val;
        return $this;
    }
    

     /** 
     * Gets the extensionProperties
    * Read-only. Nullable.
     *
     * @return array The extensionProperties
     */
    public function getExtensionProperties()
    {
        if (array_key_exists("extensionProperties", $this->_propDict)) {
           return $this->_propDict["extensionProperties"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the extensionProperties
    * Read-only. Nullable.
    *
    * @param ExtensionProperty $val The extensionProperties
    *
    * @return Application
    */
    public function setExtensionProperties($val)
    {
		$this->_propDict["extensionProperties"] = $val;
        return $this;
    }
    

     /** 
     * Gets the homeRealmDiscoveryPolicies
     *
     * @return array The homeRealmDiscoveryPolicies
     */
    public function getHomeRealmDiscoveryPolicies()
    {
        if (array_key_exists("homeRealmDiscoveryPolicies", $this->_propDict)) {
           return $this->_propDict["homeRealmDiscoveryPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the homeRealmDiscoveryPolicies
    *
    * @param HomeRealmDiscoveryPolicy $val The homeRealmDiscoveryPolicies
    *
    * @return Application
    */
    public function setHomeRealmDiscoveryPolicies($val)
    {
		$this->_propDict["homeRealmDiscoveryPolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the owners
    * Directory objects that are owners of the application. Read-only. Nullable.
     *
     * @return array The owners
     */
    public function getOwners()
    {
        if (array_key_exists("owners", $this->_propDict)) {
           return $this->_propDict["owners"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the owners
    * Directory objects that are owners of the application. Read-only. Nullable.
    *
    * @param DirectoryObject $val The owners
    *
    * @return Application
    */
    public function setOwners($val)
    {
		$this->_propDict["owners"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tokenIssuancePolicies
     *
     * @return array The tokenIssuancePolicies
     */
    public function getTokenIssuancePolicies()
    {
        if (array_key_exists("tokenIssuancePolicies", $this->_propDict)) {
           return $this->_propDict["tokenIssuancePolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tokenIssuancePolicies
    *
    * @param TokenIssuancePolicy $val The tokenIssuancePolicies
    *
    * @return Application
    */
    public function setTokenIssuancePolicies($val)
    {
		$this->_propDict["tokenIssuancePolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tokenLifetimePolicies
    * The tokenLifetimePolicies assigned to this application.
     *
     * @return array The tokenLifetimePolicies
     */
    public function getTokenLifetimePolicies()
    {
        if (array_key_exists("tokenLifetimePolicies", $this->_propDict)) {
           return $this->_propDict["tokenLifetimePolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tokenLifetimePolicies
    * The tokenLifetimePolicies assigned to this application.
    *
    * @param TokenLifetimePolicy $val The tokenLifetimePolicies
    *
    * @return Application
    */
    public function setTokenLifetimePolicies($val)
    {
		$this->_propDict["tokenLifetimePolicies"] = $val;
        return $this;
    }
    
    /**
    * Gets the connectorGroup
    * The connectorGroup the application is using with Azure AD Application Proxy. Nullable.
    *
    * @return ConnectorGroup The connectorGroup
    */
    public function getConnectorGroup()
    {
        if (array_key_exists("connectorGroup", $this->_propDict)) {
            if (is_a($this->_propDict["connectorGroup"], "\Beta\Microsoft\Graph\Model\ConnectorGroup")) {
                return $this->_propDict["connectorGroup"];
            } else {
                $this->_propDict["connectorGroup"] = new ConnectorGroup($this->_propDict["connectorGroup"]);
                return $this->_propDict["connectorGroup"];
            }
        }
        return null;
    }
    
    /**
    * Sets the connectorGroup
    * The connectorGroup the application is using with Azure AD Application Proxy. Nullable.
    *
    * @param ConnectorGroup $val The connectorGroup
    *
    * @return Application
    */
    public function setConnectorGroup($val)
    {
        $this->_propDict["connectorGroup"] = $val;
        return $this;
    }
    
    /**
    * Gets the synchronization
    *
    * @return Synchronization The synchronization
    */
    public function getSynchronization()
    {
        if (array_key_exists("synchronization", $this->_propDict)) {
            if (is_a($this->_propDict["synchronization"], "\Beta\Microsoft\Graph\Model\Synchronization")) {
                return $this->_propDict["synchronization"];
            } else {
                $this->_propDict["synchronization"] = new Synchronization($this->_propDict["synchronization"]);
                return $this->_propDict["synchronization"];
            }
        }
        return null;
    }
    
    /**
    * Sets the synchronization
    *
    * @param Synchronization $val The synchronization
    *
    * @return Application
    */
    public function setSynchronization($val)
    {
        $this->_propDict["synchronization"] = $val;
        return $this;
    }
    
}
