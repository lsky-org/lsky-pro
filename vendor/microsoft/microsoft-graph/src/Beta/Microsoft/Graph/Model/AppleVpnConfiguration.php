<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppleVpnConfiguration File
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
* AppleVpnConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppleVpnConfiguration extends DeviceConfiguration
{
    /**
    * Gets the associatedDomains
    * Associated Domains
    *
    * @return string The associatedDomains
    */
    public function getAssociatedDomains()
    {
        if (array_key_exists("associatedDomains", $this->_propDict)) {
            return $this->_propDict["associatedDomains"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the associatedDomains
    * Associated Domains
    *
    * @param string $val The associatedDomains
    *
    * @return AppleVpnConfiguration
    */
    public function setAssociatedDomains($val)
    {
        $this->_propDict["associatedDomains"] = $val;
        return $this;
    }
    
    /**
    * Gets the authenticationMethod
    * Authentication method for this VPN connection. Possible values are: certificate, usernameAndPassword, sharedSecret, derivedCredential, azureAD.
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
    * Authentication method for this VPN connection. Possible values are: certificate, usernameAndPassword, sharedSecret, derivedCredential, azureAD.
    *
    * @param VpnAuthenticationMethod $val The authenticationMethod
    *
    * @return AppleVpnConfiguration
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
    * @return AppleVpnConfiguration
    */
    public function setConnectionName($val)
    {
        $this->_propDict["connectionName"] = $val;
        return $this;
    }
    
    /**
    * Gets the connectionType
    * Connection type. Possible values are: ciscoAnyConnect, pulseSecure, f5EdgeClient, dellSonicWallMobileConnect, checkPointCapsuleVpn, customVpn, ciscoIPSec, citrix, ciscoAnyConnectV2, paloAltoGlobalProtect, zscalerPrivateAccess, f5Access2018, citrixSso, paloAltoGlobalProtectV2, ikEv2, alwaysOn, microsoftTunnel, netMotionMobility, microsoftProtect.
    *
    * @return AppleVpnConnectionType The connectionType
    */
    public function getConnectionType()
    {
        if (array_key_exists("connectionType", $this->_propDict)) {
            if (is_a($this->_propDict["connectionType"], "\Beta\Microsoft\Graph\Model\AppleVpnConnectionType")) {
                return $this->_propDict["connectionType"];
            } else {
                $this->_propDict["connectionType"] = new AppleVpnConnectionType($this->_propDict["connectionType"]);
                return $this->_propDict["connectionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the connectionType
    * Connection type. Possible values are: ciscoAnyConnect, pulseSecure, f5EdgeClient, dellSonicWallMobileConnect, checkPointCapsuleVpn, customVpn, ciscoIPSec, citrix, ciscoAnyConnectV2, paloAltoGlobalProtect, zscalerPrivateAccess, f5Access2018, citrixSso, paloAltoGlobalProtectV2, ikEv2, alwaysOn, microsoftTunnel, netMotionMobility, microsoftProtect.
    *
    * @param AppleVpnConnectionType $val The connectionType
    *
    * @return AppleVpnConfiguration
    */
    public function setConnectionType($val)
    {
        $this->_propDict["connectionType"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customData
    * Custom data when connection type is set to Custom VPN. Use this field to enable functionality not supported by Intune, but available in your VPN solution. Contact your VPN vendor to learn how to add these key/value pairs. This collection can contain a maximum of 25 elements.
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
    * Custom data when connection type is set to Custom VPN. Use this field to enable functionality not supported by Intune, but available in your VPN solution. Contact your VPN vendor to learn how to add these key/value pairs. This collection can contain a maximum of 25 elements.
    *
    * @param KeyValue $val The customData
    *
    * @return AppleVpnConfiguration
    */
    public function setCustomData($val)
    {
		$this->_propDict["customData"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customKeyValueData
    * Custom data when connection type is set to Custom VPN. Use this field to enable functionality not supported by Intune, but available in your VPN solution. Contact your VPN vendor to learn how to add these key/value pairs. This collection can contain a maximum of 25 elements.
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
    * Custom data when connection type is set to Custom VPN. Use this field to enable functionality not supported by Intune, but available in your VPN solution. Contact your VPN vendor to learn how to add these key/value pairs. This collection can contain a maximum of 25 elements.
    *
    * @param KeyValuePair $val The customKeyValueData
    *
    * @return AppleVpnConfiguration
    */
    public function setCustomKeyValueData($val)
    {
		$this->_propDict["customKeyValueData"] = $val;
        return $this;
    }
    
    /**
    * Gets the disableOnDemandUserOverride
    * Toggle to prevent user from disabling automatic VPN in the Settings app
    *
    * @return bool The disableOnDemandUserOverride
    */
    public function getDisableOnDemandUserOverride()
    {
        if (array_key_exists("disableOnDemandUserOverride", $this->_propDict)) {
            return $this->_propDict["disableOnDemandUserOverride"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the disableOnDemandUserOverride
    * Toggle to prevent user from disabling automatic VPN in the Settings app
    *
    * @param bool $val The disableOnDemandUserOverride
    *
    * @return AppleVpnConfiguration
    */
    public function setDisableOnDemandUserOverride($val)
    {
        $this->_propDict["disableOnDemandUserOverride"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enablePerApp
    * Setting this to true creates Per-App VPN payload which can later be associated with Apps that can trigger this VPN conneciton on the end user's iOS device.
    *
    * @return bool The enablePerApp
    */
    public function getEnablePerApp()
    {
        if (array_key_exists("enablePerApp", $this->_propDict)) {
            return $this->_propDict["enablePerApp"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enablePerApp
    * Setting this to true creates Per-App VPN payload which can later be associated with Apps that can trigger this VPN conneciton on the end user's iOS device.
    *
    * @param bool $val The enablePerApp
    *
    * @return AppleVpnConfiguration
    */
    public function setEnablePerApp($val)
    {
        $this->_propDict["enablePerApp"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enableSplitTunneling
    * Send all network traffic through VPN.
    *
    * @return bool The enableSplitTunneling
    */
    public function getEnableSplitTunneling()
    {
        if (array_key_exists("enableSplitTunneling", $this->_propDict)) {
            return $this->_propDict["enableSplitTunneling"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableSplitTunneling
    * Send all network traffic through VPN.
    *
    * @param bool $val The enableSplitTunneling
    *
    * @return AppleVpnConfiguration
    */
    public function setEnableSplitTunneling($val)
    {
        $this->_propDict["enableSplitTunneling"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the excludedDomains
    * Domains that are accessed through the public internet instead of through VPN, even when per-app VPN is activated
    *
    * @return string The excludedDomains
    */
    public function getExcludedDomains()
    {
        if (array_key_exists("excludedDomains", $this->_propDict)) {
            return $this->_propDict["excludedDomains"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the excludedDomains
    * Domains that are accessed through the public internet instead of through VPN, even when per-app VPN is activated
    *
    * @param string $val The excludedDomains
    *
    * @return AppleVpnConfiguration
    */
    public function setExcludedDomains($val)
    {
        $this->_propDict["excludedDomains"] = $val;
        return $this;
    }
    
    /**
    * Gets the identifier
    * Identifier provided by VPN vendor when connection type is set to Custom VPN. For example: Cisco AnyConnect uses an identifier of the form com.cisco.anyconnect.applevpn.plugin
    *
    * @return string The identifier
    */
    public function getIdentifier()
    {
        if (array_key_exists("identifier", $this->_propDict)) {
            return $this->_propDict["identifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the identifier
    * Identifier provided by VPN vendor when connection type is set to Custom VPN. For example: Cisco AnyConnect uses an identifier of the form com.cisco.anyconnect.applevpn.plugin
    *
    * @param string $val The identifier
    *
    * @return AppleVpnConfiguration
    */
    public function setIdentifier($val)
    {
        $this->_propDict["identifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the loginGroupOrDomain
    * Login group or domain when connection type is set to Dell SonicWALL Mobile Connection.
    *
    * @return string The loginGroupOrDomain
    */
    public function getLoginGroupOrDomain()
    {
        if (array_key_exists("loginGroupOrDomain", $this->_propDict)) {
            return $this->_propDict["loginGroupOrDomain"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the loginGroupOrDomain
    * Login group or domain when connection type is set to Dell SonicWALL Mobile Connection.
    *
    * @param string $val The loginGroupOrDomain
    *
    * @return AppleVpnConfiguration
    */
    public function setLoginGroupOrDomain($val)
    {
        $this->_propDict["loginGroupOrDomain"] = $val;
        return $this;
    }
    

     /** 
     * Gets the onDemandRules
    * On-Demand Rules. This collection can contain a maximum of 500 elements.
     *
     * @return array The onDemandRules
     */
    public function getOnDemandRules()
    {
        if (array_key_exists("onDemandRules", $this->_propDict)) {
           return $this->_propDict["onDemandRules"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the onDemandRules
    * On-Demand Rules. This collection can contain a maximum of 500 elements.
    *
    * @param VpnOnDemandRule $val The onDemandRules
    *
    * @return AppleVpnConfiguration
    */
    public function setOnDemandRules($val)
    {
		$this->_propDict["onDemandRules"] = $val;
        return $this;
    }
    
    /**
    * Gets the optInToDeviceIdSharing
    * Opt-In to sharing the device's Id to third-party vpn clients for use during network access control validation.
    *
    * @return bool The optInToDeviceIdSharing
    */
    public function getOptInToDeviceIdSharing()
    {
        if (array_key_exists("optInToDeviceIdSharing", $this->_propDict)) {
            return $this->_propDict["optInToDeviceIdSharing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the optInToDeviceIdSharing
    * Opt-In to sharing the device's Id to third-party vpn clients for use during network access control validation.
    *
    * @param bool $val The optInToDeviceIdSharing
    *
    * @return AppleVpnConfiguration
    */
    public function setOptInToDeviceIdSharing($val)
    {
        $this->_propDict["optInToDeviceIdSharing"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the providerType
    * Provider type for per-app VPN. Possible values are: notConfigured, appProxy, packetTunnel.
    *
    * @return VpnProviderType The providerType
    */
    public function getProviderType()
    {
        if (array_key_exists("providerType", $this->_propDict)) {
            if (is_a($this->_propDict["providerType"], "\Beta\Microsoft\Graph\Model\VpnProviderType")) {
                return $this->_propDict["providerType"];
            } else {
                $this->_propDict["providerType"] = new VpnProviderType($this->_propDict["providerType"]);
                return $this->_propDict["providerType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the providerType
    * Provider type for per-app VPN. Possible values are: notConfigured, appProxy, packetTunnel.
    *
    * @param VpnProviderType $val The providerType
    *
    * @return AppleVpnConfiguration
    */
    public function setProviderType($val)
    {
        $this->_propDict["providerType"] = $val;
        return $this;
    }
    
    /**
    * Gets the proxyServer
    * Proxy Server.
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
    * Proxy Server.
    *
    * @param VpnProxyServer $val The proxyServer
    *
    * @return AppleVpnConfiguration
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
    * @return AppleVpnConfiguration
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
    * @return AppleVpnConfiguration
    */
    public function setRole($val)
    {
        $this->_propDict["role"] = $val;
        return $this;
    }
    
    /**
    * Gets the safariDomains
    * Safari domains when this VPN per App setting is enabled. In addition to the apps associated with this VPN, Safari domains specified here will also be able to trigger this VPN connection.
    *
    * @return string The safariDomains
    */
    public function getSafariDomains()
    {
        if (array_key_exists("safariDomains", $this->_propDict)) {
            return $this->_propDict["safariDomains"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the safariDomains
    * Safari domains when this VPN per App setting is enabled. In addition to the apps associated with this VPN, Safari domains specified here will also be able to trigger this VPN connection.
    *
    * @param string $val The safariDomains
    *
    * @return AppleVpnConfiguration
    */
    public function setSafariDomains($val)
    {
        $this->_propDict["safariDomains"] = $val;
        return $this;
    }
    
    /**
    * Gets the server
    * VPN Server on the network. Make sure end users can access this network location.
    *
    * @return VpnServer The server
    */
    public function getServer()
    {
        if (array_key_exists("server", $this->_propDict)) {
            if (is_a($this->_propDict["server"], "\Beta\Microsoft\Graph\Model\VpnServer")) {
                return $this->_propDict["server"];
            } else {
                $this->_propDict["server"] = new VpnServer($this->_propDict["server"]);
                return $this->_propDict["server"];
            }
        }
        return null;
    }
    
    /**
    * Sets the server
    * VPN Server on the network. Make sure end users can access this network location.
    *
    * @param VpnServer $val The server
    *
    * @return AppleVpnConfiguration
    */
    public function setServer($val)
    {
        $this->_propDict["server"] = $val;
        return $this;
    }
    
}
