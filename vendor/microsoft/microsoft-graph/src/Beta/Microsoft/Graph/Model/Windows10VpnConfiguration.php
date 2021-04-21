<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10VpnConfiguration File
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
* Windows10VpnConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Windows10VpnConfiguration extends WindowsVpnConfiguration
{

     /** 
     * Gets the associatedApps
    * Associated Apps. This collection can contain a maximum of 10000 elements.
     *
     * @return array The associatedApps
     */
    public function getAssociatedApps()
    {
        if (array_key_exists("associatedApps", $this->_propDict)) {
           return $this->_propDict["associatedApps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the associatedApps
    * Associated Apps. This collection can contain a maximum of 10000 elements.
    *
    * @param Windows10AssociatedApps $val The associatedApps
    *
    * @return Windows10VpnConfiguration
    */
    public function setAssociatedApps($val)
    {
		$this->_propDict["associatedApps"] = $val;
        return $this;
    }
    
    /**
    * Gets the authenticationMethod
    * Authentication method. Possible values are: certificate, usernameAndPassword, customEapXml, derivedCredential.
    *
    * @return Windows10VpnAuthenticationMethod The authenticationMethod
    */
    public function getAuthenticationMethod()
    {
        if (array_key_exists("authenticationMethod", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationMethod"], "\Beta\Microsoft\Graph\Model\Windows10VpnAuthenticationMethod")) {
                return $this->_propDict["authenticationMethod"];
            } else {
                $this->_propDict["authenticationMethod"] = new Windows10VpnAuthenticationMethod($this->_propDict["authenticationMethod"]);
                return $this->_propDict["authenticationMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the authenticationMethod
    * Authentication method. Possible values are: certificate, usernameAndPassword, customEapXml, derivedCredential.
    *
    * @param Windows10VpnAuthenticationMethod $val The authenticationMethod
    *
    * @return Windows10VpnConfiguration
    */
    public function setAuthenticationMethod($val)
    {
        $this->_propDict["authenticationMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the connectionType
    * Connection type. Possible values are: pulseSecure, f5EdgeClient, dellSonicWallMobileConnect, checkPointCapsuleVpn, automatic, ikEv2, l2tp, pptp, citrix, paloAltoGlobalProtect, ciscoAnyConnect.
    *
    * @return Windows10VpnConnectionType The connectionType
    */
    public function getConnectionType()
    {
        if (array_key_exists("connectionType", $this->_propDict)) {
            if (is_a($this->_propDict["connectionType"], "\Beta\Microsoft\Graph\Model\Windows10VpnConnectionType")) {
                return $this->_propDict["connectionType"];
            } else {
                $this->_propDict["connectionType"] = new Windows10VpnConnectionType($this->_propDict["connectionType"]);
                return $this->_propDict["connectionType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the connectionType
    * Connection type. Possible values are: pulseSecure, f5EdgeClient, dellSonicWallMobileConnect, checkPointCapsuleVpn, automatic, ikEv2, l2tp, pptp, citrix, paloAltoGlobalProtect, ciscoAnyConnect.
    *
    * @param Windows10VpnConnectionType $val The connectionType
    *
    * @return Windows10VpnConfiguration
    */
    public function setConnectionType($val)
    {
        $this->_propDict["connectionType"] = $val;
        return $this;
    }
    
    /**
    * Gets the cryptographySuite
    * Cryptography Suite security settings for IKEv2 VPN in Windows10 and above
    *
    * @return CryptographySuite The cryptographySuite
    */
    public function getCryptographySuite()
    {
        if (array_key_exists("cryptographySuite", $this->_propDict)) {
            if (is_a($this->_propDict["cryptographySuite"], "\Beta\Microsoft\Graph\Model\CryptographySuite")) {
                return $this->_propDict["cryptographySuite"];
            } else {
                $this->_propDict["cryptographySuite"] = new CryptographySuite($this->_propDict["cryptographySuite"]);
                return $this->_propDict["cryptographySuite"];
            }
        }
        return null;
    }
    
    /**
    * Sets the cryptographySuite
    * Cryptography Suite security settings for IKEv2 VPN in Windows10 and above
    *
    * @param CryptographySuite $val The cryptographySuite
    *
    * @return Windows10VpnConfiguration
    */
    public function setCryptographySuite($val)
    {
        $this->_propDict["cryptographySuite"] = $val;
        return $this;
    }
    

     /** 
     * Gets the dnsRules
    * DNS rules. This collection can contain a maximum of 1000 elements.
     *
     * @return array The dnsRules
     */
    public function getDnsRules()
    {
        if (array_key_exists("dnsRules", $this->_propDict)) {
           return $this->_propDict["dnsRules"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the dnsRules
    * DNS rules. This collection can contain a maximum of 1000 elements.
    *
    * @param VpnDnsRule $val The dnsRules
    *
    * @return Windows10VpnConfiguration
    */
    public function setDnsRules($val)
    {
		$this->_propDict["dnsRules"] = $val;
        return $this;
    }
    
    /**
    * Gets the dnsSuffixes
    * Specify DNS suffixes to add to the DNS search list to properly route short names.
    *
    * @return string The dnsSuffixes
    */
    public function getDnsSuffixes()
    {
        if (array_key_exists("dnsSuffixes", $this->_propDict)) {
            return $this->_propDict["dnsSuffixes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the dnsSuffixes
    * Specify DNS suffixes to add to the DNS search list to properly route short names.
    *
    * @param string $val The dnsSuffixes
    *
    * @return Windows10VpnConfiguration
    */
    public function setDnsSuffixes($val)
    {
        $this->_propDict["dnsSuffixes"] = $val;
        return $this;
    }
    
    /**
    * Gets the eapXml
    * Extensible Authentication Protocol (EAP) XML. (UTF8 encoded byte array)
    *
    * @return \GuzzleHttp\Psr7\Stream The eapXml
    */
    public function getEapXml()
    {
        if (array_key_exists("eapXml", $this->_propDict)) {
            if (is_a($this->_propDict["eapXml"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["eapXml"];
            } else {
                $this->_propDict["eapXml"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["eapXml"]);
                return $this->_propDict["eapXml"];
            }
        }
        return null;
    }
    
    /**
    * Sets the eapXml
    * Extensible Authentication Protocol (EAP) XML. (UTF8 encoded byte array)
    *
    * @param \GuzzleHttp\Psr7\Stream $val The eapXml
    *
    * @return Windows10VpnConfiguration
    */
    public function setEapXml($val)
    {
        $this->_propDict["eapXml"] = $val;
        return $this;
    }
    
    /**
    * Gets the enableAlwaysOn
    * Enable Always On mode.
    *
    * @return bool The enableAlwaysOn
    */
    public function getEnableAlwaysOn()
    {
        if (array_key_exists("enableAlwaysOn", $this->_propDict)) {
            return $this->_propDict["enableAlwaysOn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableAlwaysOn
    * Enable Always On mode.
    *
    * @param bool $val The enableAlwaysOn
    *
    * @return Windows10VpnConfiguration
    */
    public function setEnableAlwaysOn($val)
    {
        $this->_propDict["enableAlwaysOn"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enableConditionalAccess
    * Enable conditional access.
    *
    * @return bool The enableConditionalAccess
    */
    public function getEnableConditionalAccess()
    {
        if (array_key_exists("enableConditionalAccess", $this->_propDict)) {
            return $this->_propDict["enableConditionalAccess"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableConditionalAccess
    * Enable conditional access.
    *
    * @param bool $val The enableConditionalAccess
    *
    * @return Windows10VpnConfiguration
    */
    public function setEnableConditionalAccess($val)
    {
        $this->_propDict["enableConditionalAccess"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enableDeviceTunnel
    * Enable device tunnel.
    *
    * @return bool The enableDeviceTunnel
    */
    public function getEnableDeviceTunnel()
    {
        if (array_key_exists("enableDeviceTunnel", $this->_propDict)) {
            return $this->_propDict["enableDeviceTunnel"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableDeviceTunnel
    * Enable device tunnel.
    *
    * @param bool $val The enableDeviceTunnel
    *
    * @return Windows10VpnConfiguration
    */
    public function setEnableDeviceTunnel($val)
    {
        $this->_propDict["enableDeviceTunnel"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enableDnsRegistration
    * Enable IP address registration with internal DNS.
    *
    * @return bool The enableDnsRegistration
    */
    public function getEnableDnsRegistration()
    {
        if (array_key_exists("enableDnsRegistration", $this->_propDict)) {
            return $this->_propDict["enableDnsRegistration"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableDnsRegistration
    * Enable IP address registration with internal DNS.
    *
    * @param bool $val The enableDnsRegistration
    *
    * @return Windows10VpnConfiguration
    */
    public function setEnableDnsRegistration($val)
    {
        $this->_propDict["enableDnsRegistration"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enableSingleSignOnWithAlternateCertificate
    * Enable single sign-on (SSO) with alternate certificate.
    *
    * @return bool The enableSingleSignOnWithAlternateCertificate
    */
    public function getEnableSingleSignOnWithAlternateCertificate()
    {
        if (array_key_exists("enableSingleSignOnWithAlternateCertificate", $this->_propDict)) {
            return $this->_propDict["enableSingleSignOnWithAlternateCertificate"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableSingleSignOnWithAlternateCertificate
    * Enable single sign-on (SSO) with alternate certificate.
    *
    * @param bool $val The enableSingleSignOnWithAlternateCertificate
    *
    * @return Windows10VpnConfiguration
    */
    public function setEnableSingleSignOnWithAlternateCertificate($val)
    {
        $this->_propDict["enableSingleSignOnWithAlternateCertificate"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enableSplitTunneling
    * Enable split tunneling.
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
    * Enable split tunneling.
    *
    * @param bool $val The enableSplitTunneling
    *
    * @return Windows10VpnConfiguration
    */
    public function setEnableSplitTunneling($val)
    {
        $this->_propDict["enableSplitTunneling"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the onlyAssociatedAppsCanUseConnection
    * Only associated Apps can use connection (per-app VPN).
    *
    * @return bool The onlyAssociatedAppsCanUseConnection
    */
    public function getOnlyAssociatedAppsCanUseConnection()
    {
        if (array_key_exists("onlyAssociatedAppsCanUseConnection", $this->_propDict)) {
            return $this->_propDict["onlyAssociatedAppsCanUseConnection"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the onlyAssociatedAppsCanUseConnection
    * Only associated Apps can use connection (per-app VPN).
    *
    * @param bool $val The onlyAssociatedAppsCanUseConnection
    *
    * @return Windows10VpnConfiguration
    */
    public function setOnlyAssociatedAppsCanUseConnection($val)
    {
        $this->_propDict["onlyAssociatedAppsCanUseConnection"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the profileTarget
    * Profile target type. Possible values are: user, device, autoPilotDevice.
    *
    * @return Windows10VpnProfileTarget The profileTarget
    */
    public function getProfileTarget()
    {
        if (array_key_exists("profileTarget", $this->_propDict)) {
            if (is_a($this->_propDict["profileTarget"], "\Beta\Microsoft\Graph\Model\Windows10VpnProfileTarget")) {
                return $this->_propDict["profileTarget"];
            } else {
                $this->_propDict["profileTarget"] = new Windows10VpnProfileTarget($this->_propDict["profileTarget"]);
                return $this->_propDict["profileTarget"];
            }
        }
        return null;
    }
    
    /**
    * Sets the profileTarget
    * Profile target type. Possible values are: user, device, autoPilotDevice.
    *
    * @param Windows10VpnProfileTarget $val The profileTarget
    *
    * @return Windows10VpnConfiguration
    */
    public function setProfileTarget($val)
    {
        $this->_propDict["profileTarget"] = $val;
        return $this;
    }
    
    /**
    * Gets the proxyServer
    * Proxy Server.
    *
    * @return Windows10VpnProxyServer The proxyServer
    */
    public function getProxyServer()
    {
        if (array_key_exists("proxyServer", $this->_propDict)) {
            if (is_a($this->_propDict["proxyServer"], "\Beta\Microsoft\Graph\Model\Windows10VpnProxyServer")) {
                return $this->_propDict["proxyServer"];
            } else {
                $this->_propDict["proxyServer"] = new Windows10VpnProxyServer($this->_propDict["proxyServer"]);
                return $this->_propDict["proxyServer"];
            }
        }
        return null;
    }
    
    /**
    * Sets the proxyServer
    * Proxy Server.
    *
    * @param Windows10VpnProxyServer $val The proxyServer
    *
    * @return Windows10VpnConfiguration
    */
    public function setProxyServer($val)
    {
        $this->_propDict["proxyServer"] = $val;
        return $this;
    }
    
    /**
    * Gets the rememberUserCredentials
    * Remember user credentials.
    *
    * @return bool The rememberUserCredentials
    */
    public function getRememberUserCredentials()
    {
        if (array_key_exists("rememberUserCredentials", $this->_propDict)) {
            return $this->_propDict["rememberUserCredentials"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the rememberUserCredentials
    * Remember user credentials.
    *
    * @param bool $val The rememberUserCredentials
    *
    * @return Windows10VpnConfiguration
    */
    public function setRememberUserCredentials($val)
    {
        $this->_propDict["rememberUserCredentials"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the routes
    * Routes (optional for third-party providers). This collection can contain a maximum of 1000 elements.
     *
     * @return array The routes
     */
    public function getRoutes()
    {
        if (array_key_exists("routes", $this->_propDict)) {
           return $this->_propDict["routes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the routes
    * Routes (optional for third-party providers). This collection can contain a maximum of 1000 elements.
    *
    * @param VpnRoute $val The routes
    *
    * @return Windows10VpnConfiguration
    */
    public function setRoutes($val)
    {
		$this->_propDict["routes"] = $val;
        return $this;
    }
    
    /**
    * Gets the singleSignOnEku
    * Single sign-on Extended Key Usage (EKU).
    *
    * @return ExtendedKeyUsage The singleSignOnEku
    */
    public function getSingleSignOnEku()
    {
        if (array_key_exists("singleSignOnEku", $this->_propDict)) {
            if (is_a($this->_propDict["singleSignOnEku"], "\Beta\Microsoft\Graph\Model\ExtendedKeyUsage")) {
                return $this->_propDict["singleSignOnEku"];
            } else {
                $this->_propDict["singleSignOnEku"] = new ExtendedKeyUsage($this->_propDict["singleSignOnEku"]);
                return $this->_propDict["singleSignOnEku"];
            }
        }
        return null;
    }
    
    /**
    * Sets the singleSignOnEku
    * Single sign-on Extended Key Usage (EKU).
    *
    * @param ExtendedKeyUsage $val The singleSignOnEku
    *
    * @return Windows10VpnConfiguration
    */
    public function setSingleSignOnEku($val)
    {
        $this->_propDict["singleSignOnEku"] = $val;
        return $this;
    }
    
    /**
    * Gets the singleSignOnIssuerHash
    * Single sign-on issuer hash.
    *
    * @return string The singleSignOnIssuerHash
    */
    public function getSingleSignOnIssuerHash()
    {
        if (array_key_exists("singleSignOnIssuerHash", $this->_propDict)) {
            return $this->_propDict["singleSignOnIssuerHash"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the singleSignOnIssuerHash
    * Single sign-on issuer hash.
    *
    * @param string $val The singleSignOnIssuerHash
    *
    * @return Windows10VpnConfiguration
    */
    public function setSingleSignOnIssuerHash($val)
    {
        $this->_propDict["singleSignOnIssuerHash"] = $val;
        return $this;
    }
    

     /** 
     * Gets the trafficRules
    * Traffic rules. This collection can contain a maximum of 1000 elements.
     *
     * @return array The trafficRules
     */
    public function getTrafficRules()
    {
        if (array_key_exists("trafficRules", $this->_propDict)) {
           return $this->_propDict["trafficRules"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the trafficRules
    * Traffic rules. This collection can contain a maximum of 1000 elements.
    *
    * @param VpnTrafficRule $val The trafficRules
    *
    * @return Windows10VpnConfiguration
    */
    public function setTrafficRules($val)
    {
		$this->_propDict["trafficRules"] = $val;
        return $this;
    }
    
    /**
    * Gets the trustedNetworkDomains
    * Trusted Network Domains
    *
    * @return string The trustedNetworkDomains
    */
    public function getTrustedNetworkDomains()
    {
        if (array_key_exists("trustedNetworkDomains", $this->_propDict)) {
            return $this->_propDict["trustedNetworkDomains"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the trustedNetworkDomains
    * Trusted Network Domains
    *
    * @param string $val The trustedNetworkDomains
    *
    * @return Windows10VpnConfiguration
    */
    public function setTrustedNetworkDomains($val)
    {
        $this->_propDict["trustedNetworkDomains"] = $val;
        return $this;
    }
    
    /**
    * Gets the windowsInformationProtectionDomain
    * Windows Information Protection (WIP) domain to associate with this connection.
    *
    * @return string The windowsInformationProtectionDomain
    */
    public function getWindowsInformationProtectionDomain()
    {
        if (array_key_exists("windowsInformationProtectionDomain", $this->_propDict)) {
            return $this->_propDict["windowsInformationProtectionDomain"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the windowsInformationProtectionDomain
    * Windows Information Protection (WIP) domain to associate with this connection.
    *
    * @param string $val The windowsInformationProtectionDomain
    *
    * @return Windows10VpnConfiguration
    */
    public function setWindowsInformationProtectionDomain($val)
    {
        $this->_propDict["windowsInformationProtectionDomain"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityCertificate
    * Identity certificate for client authentication when authentication method is certificate.
    *
    * @return WindowsCertificateProfileBase The identityCertificate
    */
    public function getIdentityCertificate()
    {
        if (array_key_exists("identityCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["identityCertificate"], "\Beta\Microsoft\Graph\Model\WindowsCertificateProfileBase")) {
                return $this->_propDict["identityCertificate"];
            } else {
                $this->_propDict["identityCertificate"] = new WindowsCertificateProfileBase($this->_propDict["identityCertificate"]);
                return $this->_propDict["identityCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the identityCertificate
    * Identity certificate for client authentication when authentication method is certificate.
    *
    * @param WindowsCertificateProfileBase $val The identityCertificate
    *
    * @return Windows10VpnConfiguration
    */
    public function setIdentityCertificate($val)
    {
        $this->_propDict["identityCertificate"] = $val;
        return $this;
    }
    
}
