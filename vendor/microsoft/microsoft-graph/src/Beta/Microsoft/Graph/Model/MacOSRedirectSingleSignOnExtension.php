<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSRedirectSingleSignOnExtension File
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
* MacOSRedirectSingleSignOnExtension class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSRedirectSingleSignOnExtension extends MacOSSingleSignOnExtension
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.macOSRedirectSingleSignOnExtension");
    }


    /**
    * Gets the configurations
    * Gets or sets a list of typed key-value pairs used to configure Credential-type profiles. This collection can contain a maximum of 500 elements.
    *
    * @return KeyTypedValuePair The configurations
    */
    public function getConfigurations()
    {
        if (array_key_exists("configurations", $this->_propDict)) {
            if (is_a($this->_propDict["configurations"], "\Beta\Microsoft\Graph\Model\KeyTypedValuePair")) {
                return $this->_propDict["configurations"];
            } else {
                $this->_propDict["configurations"] = new KeyTypedValuePair($this->_propDict["configurations"]);
                return $this->_propDict["configurations"];
            }
        }
        return null;
    }

    /**
    * Sets the configurations
    * Gets or sets a list of typed key-value pairs used to configure Credential-type profiles. This collection can contain a maximum of 500 elements.
    *
    * @param KeyTypedValuePair $val The value to assign to the configurations
    *
    * @return MacOSRedirectSingleSignOnExtension The MacOSRedirectSingleSignOnExtension
    */
    public function setConfigurations($val)
    {
        $this->_propDict["configurations"] = $val;
         return $this;
    }
    /**
    * Gets the extensionIdentifier
    * Gets or sets the bundle ID of the app extension that performs SSO for the specified URLs.
    *
    * @return string The extensionIdentifier
    */
    public function getExtensionIdentifier()
    {
        if (array_key_exists("extensionIdentifier", $this->_propDict)) {
            return $this->_propDict["extensionIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the extensionIdentifier
    * Gets or sets the bundle ID of the app extension that performs SSO for the specified URLs.
    *
    * @param string $val The value of the extensionIdentifier
    *
    * @return MacOSRedirectSingleSignOnExtension
    */
    public function setExtensionIdentifier($val)
    {
        $this->_propDict["extensionIdentifier"] = $val;
        return $this;
    }
    /**
    * Gets the teamIdentifier
    * Gets or sets the team ID of the app extension that performs SSO for the specified URLs.
    *
    * @return string The teamIdentifier
    */
    public function getTeamIdentifier()
    {
        if (array_key_exists("teamIdentifier", $this->_propDict)) {
            return $this->_propDict["teamIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the teamIdentifier
    * Gets or sets the team ID of the app extension that performs SSO for the specified URLs.
    *
    * @param string $val The value of the teamIdentifier
    *
    * @return MacOSRedirectSingleSignOnExtension
    */
    public function setTeamIdentifier($val)
    {
        $this->_propDict["teamIdentifier"] = $val;
        return $this;
    }
    /**
    * Gets the urlPrefixes
    * One or more URL prefixes of identity providers on whose behalf the app extension performs single sign-on. URLs must begin with http:// or https://. All URL prefixes must be unique for all profiles.
    *
    * @return string The urlPrefixes
    */
    public function getUrlPrefixes()
    {
        if (array_key_exists("urlPrefixes", $this->_propDict)) {
            return $this->_propDict["urlPrefixes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the urlPrefixes
    * One or more URL prefixes of identity providers on whose behalf the app extension performs single sign-on. URLs must begin with http:// or https://. All URL prefixes must be unique for all profiles.
    *
    * @param string $val The value of the urlPrefixes
    *
    * @return MacOSRedirectSingleSignOnExtension
    */
    public function setUrlPrefixes($val)
    {
        $this->_propDict["urlPrefixes"] = $val;
        return $this;
    }
}
