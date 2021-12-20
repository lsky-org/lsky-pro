<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidWorkProfileVpnConfiguration File
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
* AndroidWorkProfileVpnConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidWorkProfileVpnConfiguration extends DeviceConfiguration
{
    /**
    * Gets the alwaysOn
    * Whether or not to enable always-on VPN connection.
    *
    * @return bool The alwaysOn
    */
    public function getAlwaysOn()
    {
        if (array_key_exists("alwaysOn", $this->_propDict)) {
            return $this->_propDict["alwaysOn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the alwaysOn
    * Whether or not to enable always-on VPN connection.
    *
    * @param bool $val The alwaysOn
    *
    * @return AndroidWorkProfileVpnConfiguration
    */
    public function setAlwaysOn($val)
    {
        $this->_propDict["alwaysOn"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the alwaysOnLockdown
    * If always-on VPN connection is enabled, whether or not to lock network traffic when that VPN is disconnected.
    *
    * @return bool The alwaysOnLockdown
    */
    public function getAlwaysOnLockdown()
    {
        if (array_key_exists("alwaysOnLockdown", $this->_propDict)) {
            return $this->_propDict["alwaysOnLockdown"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the alwaysOnLockdown
    * If always-on VPN connection is enabled, whether or not to lock network traffic when that VPN is disconnected.
    *
    * @param bool $val The alwaysOnLockdown
    *
    * @return AndroidWorkProfileVpnConfiguration
    */
    public function setAlwaysOnLockdown($val)
    {
        $this->_propDict["alwaysOnLockdown"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the authenticationMethod
    * Authentication method. Possible values are: certificate, usernameAndPassword, sharedSecret, derivedCredential, azureAD.
    *
    * @return VpnAuthenticationMethod The authenticationMethod
    */
    public function getAuthenticationMethod()
    {
        if (array_key_exists("authenticationMethod", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationMethod"], "\Beta\Microsoft\Graph\Model\VpnAuthenticationMethod")) {
                return $this->_propDict["authenticationMethod"];
            } else {
                $this->_propDict["authenticationMethod"] = new VpnAuthenticationMethod($this->_propDict["authenticationMethod"]);
                return $this->_propDict["authenticationMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the authenticationMethod
    * Authentication method. Possible values are: certificate, usernameAndPassword, sharedSecret, derivedCredential, azureAD.
    *
    * @param VpnAuthenticationMethod $val The authenticationMethod
    *
    * @return AndroidWorkProfileVpnConfiguration
    */
    public function setAuthenticationMethod($val)
    {
        $this->_propDict["authenticationMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the connectionName
    * Connection name displayed to the user.
    *
    * @return string The connectionName
    */
    public function getConnectionName()
    {
        if (array_key_exists("connectionName", $this->_propDict)) {
            return $this->_propDict["connectionName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the connectionName
    * Connection name displayed to the user.
    *
    * @param string $val The connectionName
    *
    * @return AndroidWorkProfileVpnConfiguration
    */
    public function setConnectionName($val)
    {
        $this->_propDict["connectionName"] = $val;
        return $this;
    }
    
    /**
    * Gets the connectionType
    * Connection type. Possible values are: ciscoAnyConnect, pulseSecure, f5EdgeClient, dellSonicWallMobileConnect, checkPointCapsuleVpn, citrix, paloAltoGlobalProtect, microsoftTunnel, netMotionMobility, microsoftProtect.
    *
    * @return AndroidWorkProfileVpnConnectionType The connectionType
    */
    public function getConnectionType()
    {
        if (array_key_exists("connectionType", $this->_propDict)) {
            if (is_a($this->_propDict["connectionType"], "\Beta\Microsoft\Graph\Model\AndroidWorkProfileVpnConnectionType")) {
                return $this->_propDict["connectionType"];
            } else {
                $this->_propDict["connectionType"] = new AndroidWorkProfileVpnConnectionType($this->_propDict["connectionType"]);
                return $this->_propDict["connectionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the connectionType
    * Connection type. Possible values are: ciscoAnyConnect, pulseSecure, f5EdgeClient, dellSonicWallMobileConnect, checkPointCapsuleVpn, citrix, paloAltoGlobalProtect, microsoftTunnel, netMotionMobility, microsoftProtect.
    *
    * @param AndroidWorkProfileVpnConnectionType $val The connectionType
    *
    * @return AndroidWorkProfileVpnConfiguration
    */
    public function setConnectionType($val)
    {
        $this->_propDict["connectionType"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customData
    * Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
     *
     * @return array The customData
     */
    public function getCustomData()
    {
        if (array_key_exists("customData", $this->_propDict)) {
           return $this->_propDict["customData"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the customData
    * Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
    *
    * @param KeyValue $val The customData
    *
    * @return AndroidWorkProfileVpnConfiguration
    */
    public function setCustomData($val)
    {
		$this->_propDict["customData"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customKeyValueData
    * Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
     *
     * @return array The customKeyValueData
     */
    public function getCustomKeyValueData()
    {
        if (array_key_exists("customKeyValueData", $this->_propDict)) {
           return $this->_propDict["customKeyValueData"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the customKeyValueData
    * Custom data when connection type is set to Citrix. This collection can contain a maximum of 25 elements.
    *
    * @param KeyValuePair $val The customKeyValueData
    *
    * @return AndroidWorkProfileVpnConfiguration
    */
    public function setCustomKeyValueData($val)
    {
		$this->_propDict["customKeyValueData"] = $val;
        return $this;
    }
    
    /**
    * Gets the fingerprint
    * Fingerprint is a string that will be used to verify the VPN server can be trusted, which is only applicable when connection type is Check Point Capsule VPN.
    *
    * @return string The fingerprint
    */
    public function getFingerprint()
    {
        if (array_key_exists("fingerprint", $this->_propDict)) {
            return $this->_propDict["fingerprint"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fingerprint
    * Fingerprint is a string that will be used to verify the VPN server can be trusted, which is only applicable when connection type is Check Point Capsule VPN.
    *
    * @param string $val The fingerprint
    *
    * @return AndroidWorkProfileVpnConfiguration
    */
    public function setFingerprint($val)
    {
        $this->_propDict["fingerprint"] = $val;
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
    * @return AndroidWorkProfileVpnConfiguration
    */
    public function setMicrosoftTunnelSiteId($val)
    {
        $this->_propDict["microsoftTunnelSiteId"] = $val;
        return $this;
    }
    
    /**
    * Gets the proxyServer
    * Proxy server.
    *
    * @return VpnProxyServer The proxyServer
    */
    public function getProxyServer()
    {
        if (array_key_exists("proxyServer", $this->_propDict)) {
            if (is_a($this->_propDict["proxyServer"], "\Beta\Microsoft\Graph\Model\VpnProxyServer")) {
                return $this->_propDict["proxyServer"];
            } else {
                $this->_propDict["proxyServer"] = new VpnProxyServer($this->_propDict["proxyServer"]);
                return $this->_propDict["proxyServer"];
            }
        }
        return null;
    }
    
    /**
    * Sets the proxyServer
    * Proxy server.
    *
    * @param VpnProxyServer $val The proxyServer
    *
    * @return AndroidWorkProfileVpnConfiguration
    */
    public function setProxyServer($val)
    {
        $this->_propDict["proxyServer"] = $val;
        return $this;
    }
    
    /**
    * Gets the realm
    * Realm when connection type is set to Pulse Secure.
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
    * Realm when connection type is set to Pulse Secure.
    *
    * @param string $val The realm
    *
    * @return AndroidWorkProfileVpnConfiguration
    */
    public function setRealm($val)
    {
        $this->_propDict["realm"] = $val;
        return $this;
    }
    
    /**
    * Gets the role
    * Role when connection type is set to Pulse Secure.
    *
    * @return string The role
    */
    public function getRole()
    {
        if (array_key_exists("role", $this->_propDict)) {
            return $this->_propDict["role"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the role
    * Role when connection type is set to Pulse Secure.
    *
    * @param string $val The role
    *
    * @return AndroidWorkProfileVpnConfiguration
    */
    public function setRole($val)
    {
        $this->_propDict["role"] = $val;
        return $this;
    }
    

     /** 
     * Gets the servers
    * List of VPN Servers on the network. Make sure end users can access these network locations. This collection can contain a maximum of 500 elements.
     *
     * @return array The servers
     */
    public function getServers()
    {
        if (array_key_exists("servers", $this->_propDict)) {
           return $this->_propDict["servers"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the servers
    * List of VPN Servers on the network. Make sure end users can access these network locations. This collection can contain a maximum of 500 elements.
    *
    * @param VpnServer $val The servers
    *
    * @return AndroidWorkProfileVpnConfiguration
    */
    public function setServers($val)
    {
		$this->_propDict["servers"] = $val;
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
    * @return AndroidWorkProfileVpnConfiguration
    */
    public function setTargetedMobileApps($val)
    {
		$this->_propDict["targetedMobileApps"] = $val;
        return $this;
    }
    
    /**
    * Gets the targetedPackageIds
    * Targeted App package IDs.
    *
    * @return string The targetedPackageIds
    */
    public function getTargetedPackageIds()
    {
        if (array_key_exists("targetedPackageIds", $this->_propDict)) {
            return $this->_propDict["targetedPackageIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetedPackageIds
    * Targeted App package IDs.
    *
    * @param string $val The targetedPackageIds
    *
    * @return AndroidWorkProfileVpnConfiguration
    */
    public function setTargetedPackageIds($val)
    {
        $this->_propDict["targetedPackageIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityCertificate
    * Identity certificate for client authentication when authentication method is certificate.
    *
    * @return AndroidWorkProfileCertificateProfileBase The identityCertificate
    */
    public function getIdentityCertificate()
    {
        if (array_key_exists("identityCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["identityCertificate"], "\Beta\Microsoft\Graph\Model\AndroidWorkProfileCertificateProfileBase")) {
                return $this->_propDict["identityCertificate"];
            } else {
                $this->_propDict["identityCertificate"] = new AndroidWorkProfileCertificateProfileBase($this->_propDict["identityCertificate"]);
                return $this->_propDict["identityCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the identityCertificate
    * Identity certificate for client authentication when authentication method is certificate.
    *
    * @param AndroidWorkProfileCertificateProfileBase $val The identityCertificate
    *
    * @return AndroidWorkProfileVpnConfiguration
    */
    public function setIdentityCertificate($val)
    {
        $this->_propDict["identityCertificate"] = $val;
        return $this;
    }
    
}
