<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IdentityApiConnector File
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
* IdentityApiConnector class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IdentityApiConnector extends Entity
{
    /**
    * Gets the authenticationConfiguration
    * The object which describes the authentication configuration details for calling the API. Basic and PKCS 12 client certificate are supported.
    *
    * @return ApiAuthenticationConfigurationBase The authenticationConfiguration
    */
    public function getAuthenticationConfiguration()
    {
        if (array_key_exists("authenticationConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationConfiguration"], "\Beta\Microsoft\Graph\Model\ApiAuthenticationConfigurationBase")) {
                return $this->_propDict["authenticationConfiguration"];
            } else {
                $this->_propDict["authenticationConfiguration"] = new ApiAuthenticationConfigurationBase($this->_propDict["authenticationConfiguration"]);
                return $this->_propDict["authenticationConfiguration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the authenticationConfiguration
    * The object which describes the authentication configuration details for calling the API. Basic and PKCS 12 client certificate are supported.
    *
    * @param ApiAuthenticationConfigurationBase $val The authenticationConfiguration
    *
    * @return IdentityApiConnector
    */
    public function setAuthenticationConfiguration($val)
    {
        $this->_propDict["authenticationConfiguration"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The name of the API connector.
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
    * The name of the API connector.
    *
    * @param string $val The displayName
    *
    * @return IdentityApiConnector
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetUrl
    * The URL of the API endpoint to call.
    *
    * @return string The targetUrl
    */
    public function getTargetUrl()
    {
        if (array_key_exists("targetUrl", $this->_propDict)) {
            return $this->_propDict["targetUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetUrl
    * The URL of the API endpoint to call.
    *
    * @param string $val The targetUrl
    *
    * @return IdentityApiConnector
    */
    public function setTargetUrl($val)
    {
        $this->_propDict["targetUrl"] = $val;
        return $this;
    }
    
}
