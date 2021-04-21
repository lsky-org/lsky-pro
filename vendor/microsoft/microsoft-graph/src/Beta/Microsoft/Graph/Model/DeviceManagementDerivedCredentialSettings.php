<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementDerivedCredentialSettings File
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
* DeviceManagementDerivedCredentialSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementDerivedCredentialSettings extends Entity
{
    /**
    * Gets the displayName
    * The display name for the profile.
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
    * The display name for the profile.
    *
    * @param string $val The displayName
    *
    * @return DeviceManagementDerivedCredentialSettings
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the helpUrl
    * The URL that will be accessible to end users as they retrieve a derived credential using the Company Portal.
    *
    * @return string The helpUrl
    */
    public function getHelpUrl()
    {
        if (array_key_exists("helpUrl", $this->_propDict)) {
            return $this->_propDict["helpUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the helpUrl
    * The URL that will be accessible to end users as they retrieve a derived credential using the Company Portal.
    *
    * @param string $val The helpUrl
    *
    * @return DeviceManagementDerivedCredentialSettings
    */
    public function setHelpUrl($val)
    {
        $this->_propDict["helpUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the issuer
    * The derived credential provider to use.
    *
    * @return DeviceManagementDerivedCredentialIssuer The issuer
    */
    public function getIssuer()
    {
        if (array_key_exists("issuer", $this->_propDict)) {
            if (is_a($this->_propDict["issuer"], "\Beta\Microsoft\Graph\Model\DeviceManagementDerivedCredentialIssuer")) {
                return $this->_propDict["issuer"];
            } else {
                $this->_propDict["issuer"] = new DeviceManagementDerivedCredentialIssuer($this->_propDict["issuer"]);
                return $this->_propDict["issuer"];
            }
        }
        return null;
    }
    
    /**
    * Sets the issuer
    * The derived credential provider to use.
    *
    * @param DeviceManagementDerivedCredentialIssuer $val The issuer
    *
    * @return DeviceManagementDerivedCredentialSettings
    */
    public function setIssuer($val)
    {
        $this->_propDict["issuer"] = $val;
        return $this;
    }
    
    /**
    * Gets the notificationType
    * The methods used to inform the end user to open Company Portal to deliver Wi-Fi, VPN, or email profiles that use certificates to the device.
    *
    * @return DeviceManagementDerivedCredentialNotificationType The notificationType
    */
    public function getNotificationType()
    {
        if (array_key_exists("notificationType", $this->_propDict)) {
            if (is_a($this->_propDict["notificationType"], "\Beta\Microsoft\Graph\Model\DeviceManagementDerivedCredentialNotificationType")) {
                return $this->_propDict["notificationType"];
            } else {
                $this->_propDict["notificationType"] = new DeviceManagementDerivedCredentialNotificationType($this->_propDict["notificationType"]);
                return $this->_propDict["notificationType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the notificationType
    * The methods used to inform the end user to open Company Portal to deliver Wi-Fi, VPN, or email profiles that use certificates to the device.
    *
    * @param DeviceManagementDerivedCredentialNotificationType $val The notificationType
    *
    * @return DeviceManagementDerivedCredentialSettings
    */
    public function setNotificationType($val)
    {
        $this->_propDict["notificationType"] = $val;
        return $this;
    }
    
}
