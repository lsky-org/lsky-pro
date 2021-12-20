<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosCredentialSingleSignOnExtension File
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
* IosCredentialSingleSignOnExtension class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosCredentialSingleSignOnExtension extends IosSingleSignOnExtension
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.iosCredentialSingleSignOnExtension");
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
    * @return IosCredentialSingleSignOnExtension The IosCredentialSingleSignOnExtension
    */
    public function setConfigurations($val)
    {
        $this->_propDict["configurations"] = $val;
         return $this;
    }
    /**
    * Gets the domains
    * Gets or sets a list of hosts or domain names for which the app extension performs SSO.
    *
    * @return string The domains
    */
    public function getDomains()
    {
        if (array_key_exists("domains", $this->_propDict)) {
            return $this->_propDict["domains"];
        } else {
            return null;
        }
    }

    /**
    * Sets the domains
    * Gets or sets a list of hosts or domain names for which the app extension performs SSO.
    *
    * @param string $val The value of the domains
    *
    * @return IosCredentialSingleSignOnExtension
    */
    public function setDomains($val)
    {
        $this->_propDict["domains"] = $val;
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
    * @return IosCredentialSingleSignOnExtension
    */
    public function setExtensionIdentifier($val)
    {
        $this->_propDict["extensionIdentifier"] = $val;
        return $this;
    }
    /**
    * Gets the realm
    * Gets or sets the case-sensitive realm name for this profile.
    *
    * @return string The realm
    */
    public function getRealm()
    {
        if (array_key_exists("realm", $this->_propDict)) {
            return $this->_propDict["realm"];
        } else {
            return null;
        }
    }

    /**
    * Sets the realm
    * Gets or sets the case-sensitive realm name for this profile.
    *
    * @param string $val The value of the realm
    *
    * @return IosCredentialSingleSignOnExtension
    */
    public function setRealm($val)
    {
        $this->_propDict["realm"] = $val;
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
    * @return IosCredentialSingleSignOnExtension
    */
    public function setTeamIdentifier($val)
    {
        $this->_propDict["teamIdentifier"] = $val;
        return $this;
    }
}
