<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosVpnConfiguration File
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
* IosVpnConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosVpnConfiguration extends AppleVpnConfiguration
{
    /**
    * Gets the cloudName
    * Zscaler only. Zscaler cloud which the user is assigned to.
    *
    * @return string The cloudName
    */
    public function getCloudName()
    {
        if (array_key_exists("cloudName", $this->_propDict)) {
            return $this->_propDict["cloudName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cloudName
    * Zscaler only. Zscaler cloud which the user is assigned to.
    *
    * @param string $val The cloudName
    *
    * @return IosVpnConfiguration
    */
    public function setCloudName($val)
    {
        $this->_propDict["cloudName"] = $val;
        return $this;
    }
    
    /**
    * Gets the excludeList
    * Zscaler only. List of network addresses which are not sent through the Zscaler cloud.
    *
    * @return string The excludeList
    */
    public function getExcludeList()
    {
        if (array_key_exists("excludeList", $this->_propDict)) {
            return $this->_propDict["excludeList"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the excludeList
    * Zscaler only. List of network addresses which are not sent through the Zscaler cloud.
    *
    * @param string $val The excludeList
    *
    * @return IosVpnConfiguration
    */
    public function setExcludeList($val)
    {
        $this->_propDict["excludeList"] = $val;
        return $this;
    }
    
    /**
    * Gets the microsoftTunnelSiteId
    * Microsoft Tunnel site ID.
    *
    * @return string The microsoftTunnelSiteId
    */
    public function getMicrosoftTunnelSiteId()
    {
        if (array_key_exists("microsoftTunnelSiteId", $this->_propDict)) {
            return $this->_propDict["microsoftTunnelSiteId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the microsoftTunnelSiteId
    * Microsoft Tunnel site ID.
    *
    * @param string $val The microsoftTunnelSiteId
    *
    * @return IosVpnConfiguration
    */
    public function setMicrosoftTunnelSiteId($val)
    {
        $this->_propDict["microsoftTunnelSiteId"] = $val;
        return $this;
    }
    
    /**
    * Gets the strictEnforcement
    * Zscaler only. Blocks network traffic until the user signs into Zscaler app. 'True' means traffic is blocked.
    *
    * @return bool The strictEnforcement
    */
    public function getStrictEnforcement()
    {
        if (array_key_exists("strictEnforcement", $this->_propDict)) {
            return $this->_propDict["strictEnforcement"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the strictEnforcement
    * Zscaler only. Blocks network traffic until the user signs into Zscaler app. 'True' means traffic is blocked.
    *
    * @param bool $val The strictEnforcement
    *
    * @return IosVpnConfiguration
    */
    public function setStrictEnforcement($val)
    {
        $this->_propDict["strictEnforcement"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the targetedMobileApps
    * Targeted mobile apps. This collection can contain a maximum of 500 elements.
     *
     * @return array The targetedMobileApps
     */
    public function getTargetedMobileApps()
    {
        if (array_key_exists("targetedMobileApps", $this->_propDict)) {
           return $this->_propDict["targetedMobileApps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the targetedMobileApps
    * Targeted mobile apps. This collection can contain a maximum of 500 elements.
    *
    * @param AppListItem $val The targetedMobileApps
    *
    * @return IosVpnConfiguration
    */
    public function setTargetedMobileApps($val)
    {
		$this->_propDict["targetedMobileApps"] = $val;
        return $this;
    }
    
    /**
    * Gets the userDomain
    * Zscaler only. Enter a static domain to pre-populate the login field with in the Zscaler app. If this is left empty, the user's Azure Active Directory domain will be used instead.
    *
    * @return string The userDomain
    */
    public function getUserDomain()
    {
        if (array_key_exists("userDomain", $this->_propDict)) {
            return $this->_propDict["userDomain"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userDomain
    * Zscaler only. Enter a static domain to pre-populate the login field with in the Zscaler app. If this is left empty, the user's Azure Active Directory domain will be used instead.
    *
    * @param string $val The userDomain
    *
    * @return IosVpnConfiguration
    */
    public function setUserDomain($val)
    {
        $this->_propDict["userDomain"] = $val;
        return $this;
    }
    
    /**
    * Gets the derivedCredentialSettings
    * Tenant level settings for the Derived Credentials to be used for authentication.
    *
    * @return DeviceManagementDerivedCredentialSettings The derivedCredentialSettings
    */
    public function getDerivedCredentialSettings()
    {
        if (array_key_exists("derivedCredentialSettings", $this->_propDict)) {
            if (is_a($this->_propDict["derivedCredentialSettings"], "\Beta\Microsoft\Graph\Model\DeviceManagementDerivedCredentialSettings")) {
                return $this->_propDict["derivedCredentialSettings"];
            } else {
                $this->_propDict["derivedCredentialSettings"] = new DeviceManagementDerivedCredentialSettings($this->_propDict["derivedCredentialSettings"]);
                return $this->_propDict["derivedCredentialSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the derivedCredentialSettings
    * Tenant level settings for the Derived Credentials to be used for authentication.
    *
    * @param DeviceManagementDerivedCredentialSettings $val The derivedCredentialSettings
    *
    * @return IosVpnConfiguration
    */
    public function setDerivedCredentialSettings($val)
    {
        $this->_propDict["derivedCredentialSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityCertificate
    * Identity certificate for client authentication when authentication method is certificate.
    *
    * @return IosCertificateProfileBase The identityCertificate
    */
    public function getIdentityCertificate()
    {
        if (array_key_exists("identityCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["identityCertificate"], "\Beta\Microsoft\Graph\Model\IosCertificateProfileBase")) {
                return $this->_propDict["identityCertificate"];
            } else {
                $this->_propDict["identityCertificate"] = new IosCertificateProfileBase($this->_propDict["identityCertificate"]);
                return $this->_propDict["identityCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the identityCertificate
    * Identity certificate for client authentication when authentication method is certificate.
    *
    * @param IosCertificateProfileBase $val The identityCertificate
    *
    * @return IosVpnConfiguration
    */
    public function setIdentityCertificate($val)
    {
        $this->_propDict["identityCertificate"] = $val;
        return $this;
    }
    
}
