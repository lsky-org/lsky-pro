<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSAzureAdSingleSignOnExtension File
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
* MacOSAzureAdSingleSignOnExtension class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSAzureAdSingleSignOnExtension extends MacOSSingleSignOnExtension
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.macOSAzureAdSingleSignOnExtension");
    }

    /**
    * Gets the bundleIdAccessControlList
    * An optional list of additional bundle IDs allowed to use the AAD extension for single sign-on.
    *
    * @return string The bundleIdAccessControlList
    */
    public function getBundleIdAccessControlList()
    {
        if (array_key_exists("bundleIdAccessControlList", $this->_propDict)) {
            return $this->_propDict["bundleIdAccessControlList"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bundleIdAccessControlList
    * An optional list of additional bundle IDs allowed to use the AAD extension for single sign-on.
    *
    * @param string $val The value of the bundleIdAccessControlList
    *
    * @return MacOSAzureAdSingleSignOnExtension
    */
    public function setBundleIdAccessControlList($val)
    {
        $this->_propDict["bundleIdAccessControlList"] = $val;
        return $this;
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
    * @return MacOSAzureAdSingleSignOnExtension The MacOSAzureAdSingleSignOnExtension
    */
    public function setConfigurations($val)
    {
        $this->_propDict["configurations"] = $val;
         return $this;
    }
    /**
    * Gets the enableSharedDeviceMode
    * Enables or disables shared device mode.
    *
    * @return bool The enableSharedDeviceMode
    */
    public function getEnableSharedDeviceMode()
    {
        if (array_key_exists("enableSharedDeviceMode", $this->_propDict)) {
            return $this->_propDict["enableSharedDeviceMode"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enableSharedDeviceMode
    * Enables or disables shared device mode.
    *
    * @param bool $val The value of the enableSharedDeviceMode
    *
    * @return MacOSAzureAdSingleSignOnExtension
    */
    public function setEnableSharedDeviceMode($val)
    {
        $this->_propDict["enableSharedDeviceMode"] = $val;
        return $this;
    }
}
