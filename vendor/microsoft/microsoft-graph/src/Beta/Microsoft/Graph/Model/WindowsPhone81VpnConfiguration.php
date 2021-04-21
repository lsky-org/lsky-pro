<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsPhone81VpnConfiguration File
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
* WindowsPhone81VpnConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsPhone81VpnConfiguration extends Windows81VpnConfiguration
{
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
    * @return WindowsPhone81VpnConfiguration
    */
    public function setAuthenticationMethod($val)
    {
        $this->_propDict["authenticationMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the bypassVpnOnCompanyWifi
    * Bypass VPN on company Wi-Fi.
    *
    * @return bool The bypassVpnOnCompanyWifi
    */
    public function getBypassVpnOnCompanyWifi()
    {
        if (array_key_exists("bypassVpnOnCompanyWifi", $this->_propDict)) {
            return $this->_propDict["bypassVpnOnCompanyWifi"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bypassVpnOnCompanyWifi
    * Bypass VPN on company Wi-Fi.
    *
    * @param bool $val The bypassVpnOnCompanyWifi
    *
    * @return WindowsPhone81VpnConfiguration
    */
    public function setBypassVpnOnCompanyWifi($val)
    {
        $this->_propDict["bypassVpnOnCompanyWifi"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the bypassVpnOnHomeWifi
    * Bypass VPN on home Wi-Fi.
    *
    * @return bool The bypassVpnOnHomeWifi
    */
    public function getBypassVpnOnHomeWifi()
    {
        if (array_key_exists("bypassVpnOnHomeWifi", $this->_propDict)) {
            return $this->_propDict["bypassVpnOnHomeWifi"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bypassVpnOnHomeWifi
    * Bypass VPN on home Wi-Fi.
    *
    * @param bool $val The bypassVpnOnHomeWifi
    *
    * @return WindowsPhone81VpnConfiguration
    */
    public function setBypassVpnOnHomeWifi($val)
    {
        $this->_propDict["bypassVpnOnHomeWifi"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the dnsSuffixSearchList
    * DNS suffix search list.
    *
    * @return string The dnsSuffixSearchList
    */
    public function getDnsSuffixSearchList()
    {
        if (array_key_exists("dnsSuffixSearchList", $this->_propDict)) {
            return $this->_propDict["dnsSuffixSearchList"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the dnsSuffixSearchList
    * DNS suffix search list.
    *
    * @param string $val The dnsSuffixSearchList
    *
    * @return WindowsPhone81VpnConfiguration
    */
    public function setDnsSuffixSearchList($val)
    {
        $this->_propDict["dnsSuffixSearchList"] = $val;
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
    * @return WindowsPhone81VpnConfiguration
    */
    public function setRememberUserCredentials($val)
    {
        $this->_propDict["rememberUserCredentials"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the identityCertificate
    * Identity certificate for client authentication when authentication method is certificate.
    *
    * @return WindowsPhone81CertificateProfileBase The identityCertificate
    */
    public function getIdentityCertificate()
    {
        if (array_key_exists("identityCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["identityCertificate"], "\Beta\Microsoft\Graph\Model\WindowsPhone81CertificateProfileBase")) {
                return $this->_propDict["identityCertificate"];
            } else {
                $this->_propDict["identityCertificate"] = new WindowsPhone81CertificateProfileBase($this->_propDict["identityCertificate"]);
                return $this->_propDict["identityCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the identityCertificate
    * Identity certificate for client authentication when authentication method is certificate.
    *
    * @param WindowsPhone81CertificateProfileBase $val The identityCertificate
    *
    * @return WindowsPhone81VpnConfiguration
    */
    public function setIdentityCertificate($val)
    {
        $this->_propDict["identityCertificate"] = $val;
        return $this;
    }
    
}
