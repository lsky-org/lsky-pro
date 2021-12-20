<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSEnterpriseWiFiConfiguration File
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
* MacOSEnterpriseWiFiConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSEnterpriseWiFiConfiguration extends MacOSWiFiConfiguration
{
    /**
    * Gets the authenticationMethod
    * Authentication Method when EAP Type is configured to PEAP or EAP-TTLS. Possible values are: certificate, usernameAndPassword, derivedCredential.
    *
    * @return WiFiAuthenticationMethod The authenticationMethod
    */
    public function getAuthenticationMethod()
    {
        if (array_key_exists("authenticationMethod", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationMethod"], "\Beta\Microsoft\Graph\Model\WiFiAuthenticationMethod")) {
                return $this->_propDict["authenticationMethod"];
            } else {
                $this->_propDict["authenticationMethod"] = new WiFiAuthenticationMethod($this->_propDict["authenticationMethod"]);
                return $this->_propDict["authenticationMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the authenticationMethod
    * Authentication Method when EAP Type is configured to PEAP or EAP-TTLS. Possible values are: certificate, usernameAndPassword, derivedCredential.
    *
    * @param WiFiAuthenticationMethod $val The authenticationMethod
    *
    * @return MacOSEnterpriseWiFiConfiguration
    */
    public function setAuthenticationMethod($val)
    {
        $this->_propDict["authenticationMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the eapFastConfiguration
    * EAP-FAST Configuration Option when EAP-FAST is the selected EAP Type. Possible values are: noProtectedAccessCredential, useProtectedAccessCredential, useProtectedAccessCredentialAndProvision, useProtectedAccessCredentialAndProvisionAnonymously.
    *
    * @return EapFastConfiguration The eapFastConfiguration
    */
    public function getEapFastConfiguration()
    {
        if (array_key_exists("eapFastConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["eapFastConfiguration"], "\Beta\Microsoft\Graph\Model\EapFastConfiguration")) {
                return $this->_propDict["eapFastConfiguration"];
            } else {
                $this->_propDict["eapFastConfiguration"] = new EapFastConfiguration($this->_propDict["eapFastConfiguration"]);
                return $this->_propDict["eapFastConfiguration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the eapFastConfiguration
    * EAP-FAST Configuration Option when EAP-FAST is the selected EAP Type. Possible values are: noProtectedAccessCredential, useProtectedAccessCredential, useProtectedAccessCredentialAndProvision, useProtectedAccessCredentialAndProvisionAnonymously.
    *
    * @param EapFastConfiguration $val The eapFastConfiguration
    *
    * @return MacOSEnterpriseWiFiConfiguration
    */
    public function setEapFastConfiguration($val)
    {
        $this->_propDict["eapFastConfiguration"] = $val;
        return $this;
    }
    
    /**
    * Gets the eapType
    * Extensible Authentication Protocol (EAP). Indicates the type of EAP protocol set on the Wi-Fi endpoint (router). Possible values are: eapTls, leap, eapSim, eapTtls, peap, eapFast.
    *
    * @return EapType The eapType
    */
    public function getEapType()
    {
        if (array_key_exists("eapType", $this->_propDict)) {
            if (is_a($this->_propDict["eapType"], "\Beta\Microsoft\Graph\Model\EapType")) {
                return $this->_propDict["eapType"];
            } else {
                $this->_propDict["eapType"] = new EapType($this->_propDict["eapType"]);
                return $this->_propDict["eapType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the eapType
    * Extensible Authentication Protocol (EAP). Indicates the type of EAP protocol set on the Wi-Fi endpoint (router). Possible values are: eapTls, leap, eapSim, eapTtls, peap, eapFast.
    *
    * @param EapType $val The eapType
    *
    * @return MacOSEnterpriseWiFiConfiguration
    */
    public function setEapType($val)
    {
        $this->_propDict["eapType"] = $val;
        return $this;
    }
    
    /**
    * Gets the innerAuthenticationProtocolForEapTtls
    * Non-EAP Method for Authentication (Inner Identity) when EAP Type is EAP-TTLS and Authenticationmethod is Username and Password. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
    *
    * @return NonEapAuthenticationMethodForEapTtlsType The innerAuthenticationProtocolForEapTtls
    */
    public function getInnerAuthenticationProtocolForEapTtls()
    {
        if (array_key_exists("innerAuthenticationProtocolForEapTtls", $this->_propDict)) {
            if (is_a($this->_propDict["innerAuthenticationProtocolForEapTtls"], "\Beta\Microsoft\Graph\Model\NonEapAuthenticationMethodForEapTtlsType")) {
                return $this->_propDict["innerAuthenticationProtocolForEapTtls"];
            } else {
                $this->_propDict["innerAuthenticationProtocolForEapTtls"] = new NonEapAuthenticationMethodForEapTtlsType($this->_propDict["innerAuthenticationProtocolForEapTtls"]);
                return $this->_propDict["innerAuthenticationProtocolForEapTtls"];
            }
        }
        return null;
    }
    
    /**
    * Sets the innerAuthenticationProtocolForEapTtls
    * Non-EAP Method for Authentication (Inner Identity) when EAP Type is EAP-TTLS and Authenticationmethod is Username and Password. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
    *
    * @param NonEapAuthenticationMethodForEapTtlsType $val The innerAuthenticationProtocolForEapTtls
    *
    * @return MacOSEnterpriseWiFiConfiguration
    */
    public function setInnerAuthenticationProtocolForEapTtls($val)
    {
        $this->_propDict["innerAuthenticationProtocolForEapTtls"] = $val;
        return $this;
    }
    
    /**
    * Gets the outerIdentityPrivacyTemporaryValue
    * Enable identity privacy (Outer Identity) when EAP Type is configured to EAP-TTLS, EAP-FAST or PEAP. This property masks usernames with the text you enter. For example, if you use 'anonymous', each user that authenticates with this Wi-Fi connection using their real username is displayed as 'anonymous'.
    *
    * @return string The outerIdentityPrivacyTemporaryValue
    */
    public function getOuterIdentityPrivacyTemporaryValue()
    {
        if (array_key_exists("outerIdentityPrivacyTemporaryValue", $this->_propDict)) {
            return $this->_propDict["outerIdentityPrivacyTemporaryValue"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the outerIdentityPrivacyTemporaryValue
    * Enable identity privacy (Outer Identity) when EAP Type is configured to EAP-TTLS, EAP-FAST or PEAP. This property masks usernames with the text you enter. For example, if you use 'anonymous', each user that authenticates with this Wi-Fi connection using their real username is displayed as 'anonymous'.
    *
    * @param string $val The outerIdentityPrivacyTemporaryValue
    *
    * @return MacOSEnterpriseWiFiConfiguration
    */
    public function setOuterIdentityPrivacyTemporaryValue($val)
    {
        $this->_propDict["outerIdentityPrivacyTemporaryValue"] = $val;
        return $this;
    }
    
    /**
    * Gets the trustedServerCertificateNames
    * Trusted server certificate names when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. This is the common name used in the certificates issued by your trusted certificate authority (CA). If you provide this information, you can bypass the dynamic trust dialog that is displayed on end users devices when they connect to this Wi-Fi network.
    *
    * @return string The trustedServerCertificateNames
    */
    public function getTrustedServerCertificateNames()
    {
        if (array_key_exists("trustedServerCertificateNames", $this->_propDict)) {
            return $this->_propDict["trustedServerCertificateNames"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the trustedServerCertificateNames
    * Trusted server certificate names when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. This is the common name used in the certificates issued by your trusted certificate authority (CA). If you provide this information, you can bypass the dynamic trust dialog that is displayed on end users devices when they connect to this Wi-Fi network.
    *
    * @param string $val The trustedServerCertificateNames
    *
    * @return MacOSEnterpriseWiFiConfiguration
    */
    public function setTrustedServerCertificateNames($val)
    {
        $this->_propDict["trustedServerCertificateNames"] = $val;
        return $this;
    }
    
    /**
    * Gets the identityCertificateForClientAuthentication
    * Identity Certificate for client authentication when EAP Type is configured to EAP-TLS, EAP-TTLS (with Certificate Authentication), or PEAP (with Certificate Authentication).
    *
    * @return MacOSCertificateProfileBase The identityCertificateForClientAuthentication
    */
    public function getIdentityCertificateForClientAuthentication()
    {
        if (array_key_exists("identityCertificateForClientAuthentication", $this->_propDict)) {
            if (is_a($this->_propDict["identityCertificateForClientAuthentication"], "\Beta\Microsoft\Graph\Model\MacOSCertificateProfileBase")) {
                return $this->_propDict["identityCertificateForClientAuthentication"];
            } else {
                $this->_propDict["identityCertificateForClientAuthentication"] = new MacOSCertificateProfileBase($this->_propDict["identityCertificateForClientAuthentication"]);
                return $this->_propDict["identityCertificateForClientAuthentication"];
            }
        }
        return null;
    }
    
    /**
    * Sets the identityCertificateForClientAuthentication
    * Identity Certificate for client authentication when EAP Type is configured to EAP-TLS, EAP-TTLS (with Certificate Authentication), or PEAP (with Certificate Authentication).
    *
    * @param MacOSCertificateProfileBase $val The identityCertificateForClientAuthentication
    *
    * @return MacOSEnterpriseWiFiConfiguration
    */
    public function setIdentityCertificateForClientAuthentication($val)
    {
        $this->_propDict["identityCertificateForClientAuthentication"] = $val;
        return $this;
    }
    
    /**
    * Gets the rootCertificateForServerValidation
    * Trusted Root Certificate for Server Validation when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP.
    *
    * @return MacOSTrustedRootCertificate The rootCertificateForServerValidation
    */
    public function getRootCertificateForServerValidation()
    {
        if (array_key_exists("rootCertificateForServerValidation", $this->_propDict)) {
            if (is_a($this->_propDict["rootCertificateForServerValidation"], "\Beta\Microsoft\Graph\Model\MacOSTrustedRootCertificate")) {
                return $this->_propDict["rootCertificateForServerValidation"];
            } else {
                $this->_propDict["rootCertificateForServerValidation"] = new MacOSTrustedRootCertificate($this->_propDict["rootCertificateForServerValidation"]);
                return $this->_propDict["rootCertificateForServerValidation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the rootCertificateForServerValidation
    * Trusted Root Certificate for Server Validation when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP.
    *
    * @param MacOSTrustedRootCertificate $val The rootCertificateForServerValidation
    *
    * @return MacOSEnterpriseWiFiConfiguration
    */
    public function setRootCertificateForServerValidation($val)
    {
        $this->_propDict["rootCertificateForServerValidation"] = $val;
        return $this;
    }
    

     /** 
     * Gets the rootCertificatesForServerValidation
    * Trusted Root Certificates for Server Validation when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. If you provide this value you do not need to provide trustedServerCertificateNames, and vice versa.
     *
     * @return array The rootCertificatesForServerValidation
     */
    public function getRootCertificatesForServerValidation()
    {
        if (array_key_exists("rootCertificatesForServerValidation", $this->_propDict)) {
           return $this->_propDict["rootCertificatesForServerValidation"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the rootCertificatesForServerValidation
    * Trusted Root Certificates for Server Validation when EAP Type is configured to EAP-TLS/TTLS/FAST or PEAP. If you provide this value you do not need to provide trustedServerCertificateNames, and vice versa.
    *
    * @param MacOSTrustedRootCertificate $val The rootCertificatesForServerValidation
    *
    * @return MacOSEnterpriseWiFiConfiguration
    */
    public function setRootCertificatesForServerValidation($val)
    {
		$this->_propDict["rootCertificatesForServerValidation"] = $val;
        return $this;
    }
    
}
