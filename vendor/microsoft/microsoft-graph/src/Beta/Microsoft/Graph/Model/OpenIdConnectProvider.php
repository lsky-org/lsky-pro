<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OpenIdConnectProvider File
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
* OpenIdConnectProvider class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OpenIdConnectProvider extends IdentityProvider
{
    /**
    * Gets the claimsMapping
    * After the OIDC provider sends an ID token back to Azure AD, Azure AD needs to be able to map the claims from the received token to the claims that Azure AD recognizes and uses. This complex type captures that mapping. It is a required property.
    *
    * @return ClaimsMapping The claimsMapping
    */
    public function getClaimsMapping()
    {
        if (array_key_exists("claimsMapping", $this->_propDict)) {
            if (is_a($this->_propDict["claimsMapping"], "\Beta\Microsoft\Graph\Model\ClaimsMapping")) {
                return $this->_propDict["claimsMapping"];
            } else {
                $this->_propDict["claimsMapping"] = new ClaimsMapping($this->_propDict["claimsMapping"]);
                return $this->_propDict["claimsMapping"];
            }
        }
        return null;
    }
    
    /**
    * Sets the claimsMapping
    * After the OIDC provider sends an ID token back to Azure AD, Azure AD needs to be able to map the claims from the received token to the claims that Azure AD recognizes and uses. This complex type captures that mapping. It is a required property.
    *
    * @param ClaimsMapping $val The claimsMapping
    *
    * @return OpenIdConnectProvider
    */
    public function setClaimsMapping($val)
    {
        $this->_propDict["claimsMapping"] = $val;
        return $this;
    }
    
    /**
    * Gets the domainHint
    * The domain hint can be used to skip directly to the sign-in page of the specified identity provider, instead of having the user make a selection among the list of available identity providers.
    *
    * @return string The domainHint
    */
    public function getDomainHint()
    {
        if (array_key_exists("domainHint", $this->_propDict)) {
            return $this->_propDict["domainHint"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the domainHint
    * The domain hint can be used to skip directly to the sign-in page of the specified identity provider, instead of having the user make a selection among the list of available identity providers.
    *
    * @param string $val The domainHint
    *
    * @return OpenIdConnectProvider
    */
    public function setDomainHint($val)
    {
        $this->_propDict["domainHint"] = $val;
        return $this;
    }
    
    /**
    * Gets the metadataUrl
    * The URL for the metadata document of the OpenID Connect identity provider. Every OpenID Connect identity provider describes a metadata document that contains most of the information required to perform sign-in. This includes information such as the URLs to use and the location of the service's public signing keys. The OpenID Connect metadata document is always located at an endpoint that ends in .well-known/openid-configuration . For the OpenID Connect identity provider you are looking to add, you will need to provide the metadata URL. It is a required property and is read only after creation.
    *
    * @return string The metadataUrl
    */
    public function getMetadataUrl()
    {
        if (array_key_exists("metadataUrl", $this->_propDict)) {
            return $this->_propDict["metadataUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the metadataUrl
    * The URL for the metadata document of the OpenID Connect identity provider. Every OpenID Connect identity provider describes a metadata document that contains most of the information required to perform sign-in. This includes information such as the URLs to use and the location of the service's public signing keys. The OpenID Connect metadata document is always located at an endpoint that ends in .well-known/openid-configuration . For the OpenID Connect identity provider you are looking to add, you will need to provide the metadata URL. It is a required property and is read only after creation.
    *
    * @param string $val The metadataUrl
    *
    * @return OpenIdConnectProvider
    */
    public function setMetadataUrl($val)
    {
        $this->_propDict["metadataUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the responseMode
    * The response mode defines the method that should be used to send the data back from the custom identity provider to Azure AD B2C. The following response modes can be used: form_post, query. query response mode means the code or token is returned as a query parameter. form_post response mode is recommended for the best security. The response is transmitted via the HTTP POST method, with the code or token being encoded in the body using the application/x-www-form-urlencoded format. It is a required property.
    *
    * @return OpenIdConnectResponseMode The responseMode
    */
    public function getResponseMode()
    {
        if (array_key_exists("responseMode", $this->_propDict)) {
            if (is_a($this->_propDict["responseMode"], "\Beta\Microsoft\Graph\Model\OpenIdConnectResponseMode")) {
                return $this->_propDict["responseMode"];
            } else {
                $this->_propDict["responseMode"] = new OpenIdConnectResponseMode($this->_propDict["responseMode"]);
                return $this->_propDict["responseMode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the responseMode
    * The response mode defines the method that should be used to send the data back from the custom identity provider to Azure AD B2C. The following response modes can be used: form_post, query. query response mode means the code or token is returned as a query parameter. form_post response mode is recommended for the best security. The response is transmitted via the HTTP POST method, with the code or token being encoded in the body using the application/x-www-form-urlencoded format. It is a required property.
    *
    * @param OpenIdConnectResponseMode $val The responseMode
    *
    * @return OpenIdConnectProvider
    */
    public function setResponseMode($val)
    {
        $this->_propDict["responseMode"] = $val;
        return $this;
    }
    
    /**
    * Gets the responseType
    * response type describes what kind of information is sent back in the initial call to the authorization_endpoint of the custom identity provider. The following response types can be used: code , id_token , token. It is a required property.
    *
    * @return OpenIdConnectResponseTypes The responseType
    */
    public function getResponseType()
    {
        if (array_key_exists("responseType", $this->_propDict)) {
            if (is_a($this->_propDict["responseType"], "\Beta\Microsoft\Graph\Model\OpenIdConnectResponseTypes")) {
                return $this->_propDict["responseType"];
            } else {
                $this->_propDict["responseType"] = new OpenIdConnectResponseTypes($this->_propDict["responseType"]);
                return $this->_propDict["responseType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the responseType
    * response type describes what kind of information is sent back in the initial call to the authorization_endpoint of the custom identity provider. The following response types can be used: code , id_token , token. It is a required property.
    *
    * @param OpenIdConnectResponseTypes $val The responseType
    *
    * @return OpenIdConnectProvider
    */
    public function setResponseType($val)
    {
        $this->_propDict["responseType"] = $val;
        return $this;
    }
    
    /**
    * Gets the scope
    * Scope defines the information and permissions you are looking to gather from your custom identity provider. OpenID Connect requests must contain the openid scope value in order to receive the ID token from the identity provider. Without the ID token, users are not able to sign in to Azure AD B2C using the custom identity provider. Other scopes can be appended separated by space. For more details about the scope limitations see RFC6749 Section 3.3. It is a required property.
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
    * Scope defines the information and permissions you are looking to gather from your custom identity provider. OpenID Connect requests must contain the openid scope value in order to receive the ID token from the identity provider. Without the ID token, users are not able to sign in to Azure AD B2C using the custom identity provider. Other scopes can be appended separated by space. For more details about the scope limitations see RFC6749 Section 3.3. It is a required property.
    *
    * @param string $val The scope
    *
    * @return OpenIdConnectProvider
    */
    public function setScope($val)
    {
        $this->_propDict["scope"] = $val;
        return $this;
    }
    
}
