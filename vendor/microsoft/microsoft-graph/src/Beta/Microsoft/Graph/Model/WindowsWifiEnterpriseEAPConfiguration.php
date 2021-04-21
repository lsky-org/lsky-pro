<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsWifiEnterpriseEAPConfiguration File
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
* WindowsWifiEnterpriseEAPConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsWifiEnterpriseEAPConfiguration extends WindowsWifiConfiguration
{
    /**
    * Gets the authenticationMethod
    * Specify the authentication method. Possible values are: certificate, usernameAndPassword, derivedCredential.
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
    * Specify the authentication method. Possible values are: certificate, usernameAndPassword, derivedCredential.
    *
    * @param WiFiAuthenticationMethod $val The authenticationMethod
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setAuthenticationMethod($val)
    {
        $this->_propDict["authenticationMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the authenticationPeriodInSeconds
    * Specify the number of seconds for the client to wait after an authentication attempt before failing. Valid range 1-3600.
    *
    * @return int The authenticationPeriodInSeconds
    */
    public function getAuthenticationPeriodInSeconds()
    {
        if (array_key_exists("authenticationPeriodInSeconds", $this->_propDict)) {
            return $this->_propDict["authenticationPeriodInSeconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the authenticationPeriodInSeconds
    * Specify the number of seconds for the client to wait after an authentication attempt before failing. Valid range 1-3600.
    *
    * @param int $val The authenticationPeriodInSeconds
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setAuthenticationPeriodInSeconds($val)
    {
        $this->_propDict["authenticationPeriodInSeconds"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the authenticationRetryDelayPeriodInSeconds
    * Specify the number of seconds between a failed authentication and the next authentication attempt. Valid range 1-3600.
    *
    * @return int The authenticationRetryDelayPeriodInSeconds
    */
    public function getAuthenticationRetryDelayPeriodInSeconds()
    {
        if (array_key_exists("authenticationRetryDelayPeriodInSeconds", $this->_propDict)) {
            return $this->_propDict["authenticationRetryDelayPeriodInSeconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the authenticationRetryDelayPeriodInSeconds
    * Specify the number of seconds between a failed authentication and the next authentication attempt. Valid range 1-3600.
    *
    * @param int $val The authenticationRetryDelayPeriodInSeconds
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setAuthenticationRetryDelayPeriodInSeconds($val)
    {
        $this->_propDict["authenticationRetryDelayPeriodInSeconds"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the authenticationType
    * Specify whether to authenticate the user, the device, either, or to use guest authentication (none). If you’re using certificate authentication, make sure the certificate type matches the authentication type. Possible values are: none, user, machine, machineOrUser, guest.
    *
    * @return WifiAuthenticationType The authenticationType
    */
    public function getAuthenticationType()
    {
        if (array_key_exists("authenticationType", $this->_propDict)) {
            if (is_a($this->_propDict["authenticationType"], "\Beta\Microsoft\Graph\Model\WifiAuthenticationType")) {
                return $this->_propDict["authenticationType"];
            } else {
                $this->_propDict["authenticationType"] = new WifiAuthenticationType($this->_propDict["authenticationType"]);
                return $this->_propDict["authenticationType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the authenticationType
    * Specify whether to authenticate the user, the device, either, or to use guest authentication (none). If you’re using certificate authentication, make sure the certificate type matches the authentication type. Possible values are: none, user, machine, machineOrUser, guest.
    *
    * @param WifiAuthenticationType $val The authenticationType
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setAuthenticationType($val)
    {
        $this->_propDict["authenticationType"] = $val;
        return $this;
    }
    
    /**
    * Gets the cacheCredentials
    * Specify whether to cache user credentials on the device so that users don’t need to keep entering them each time they connect.
    *
    * @return bool The cacheCredentials
    */
    public function getCacheCredentials()
    {
        if (array_key_exists("cacheCredentials", $this->_propDict)) {
            return $this->_propDict["cacheCredentials"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cacheCredentials
    * Specify whether to cache user credentials on the device so that users don’t need to keep entering them each time they connect.
    *
    * @param bool $val The cacheCredentials
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setCacheCredentials($val)
    {
        $this->_propDict["cacheCredentials"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the disableUserPromptForServerValidation
    * Specify whether to prevent the user from being prompted to authorize new servers for trusted certification authorities when EAP type is selected as PEAP.
    *
    * @return bool The disableUserPromptForServerValidation
    */
    public function getDisableUserPromptForServerValidation()
    {
        if (array_key_exists("disableUserPromptForServerValidation", $this->_propDict)) {
            return $this->_propDict["disableUserPromptForServerValidation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the disableUserPromptForServerValidation
    * Specify whether to prevent the user from being prompted to authorize new servers for trusted certification authorities when EAP type is selected as PEAP.
    *
    * @param bool $val The disableUserPromptForServerValidation
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setDisableUserPromptForServerValidation($val)
    {
        $this->_propDict["disableUserPromptForServerValidation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the eapolStartPeriodInSeconds
    * Specify the number of seconds to wait before sending an EAPOL (Extensible Authentication Protocol over LAN) Start message. Valid range 1-3600.
    *
    * @return int The eapolStartPeriodInSeconds
    */
    public function getEapolStartPeriodInSeconds()
    {
        if (array_key_exists("eapolStartPeriodInSeconds", $this->_propDict)) {
            return $this->_propDict["eapolStartPeriodInSeconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the eapolStartPeriodInSeconds
    * Specify the number of seconds to wait before sending an EAPOL (Extensible Authentication Protocol over LAN) Start message. Valid range 1-3600.
    *
    * @param int $val The eapolStartPeriodInSeconds
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setEapolStartPeriodInSeconds($val)
    {
        $this->_propDict["eapolStartPeriodInSeconds"] = intval($val);
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
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setEapType($val)
    {
        $this->_propDict["eapType"] = $val;
        return $this;
    }
    
    /**
    * Gets the enablePairwiseMasterKeyCaching
    * Specify whether the wifi connection should enable pairwise master key caching.
    *
    * @return bool The enablePairwiseMasterKeyCaching
    */
    public function getEnablePairwiseMasterKeyCaching()
    {
        if (array_key_exists("enablePairwiseMasterKeyCaching", $this->_propDict)) {
            return $this->_propDict["enablePairwiseMasterKeyCaching"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enablePairwiseMasterKeyCaching
    * Specify whether the wifi connection should enable pairwise master key caching.
    *
    * @param bool $val The enablePairwiseMasterKeyCaching
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setEnablePairwiseMasterKeyCaching($val)
    {
        $this->_propDict["enablePairwiseMasterKeyCaching"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enablePreAuthentication
    * Specify whether pre-authentication should be enabled.
    *
    * @return bool The enablePreAuthentication
    */
    public function getEnablePreAuthentication()
    {
        if (array_key_exists("enablePreAuthentication", $this->_propDict)) {
            return $this->_propDict["enablePreAuthentication"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enablePreAuthentication
    * Specify whether pre-authentication should be enabled.
    *
    * @param bool $val The enablePreAuthentication
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setEnablePreAuthentication($val)
    {
        $this->_propDict["enablePreAuthentication"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the innerAuthenticationProtocolForEAPTTLS
    * Specify inner authentication protocol for EAP TTLS. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
    *
    * @return NonEapAuthenticationMethodForEapTtlsType The innerAuthenticationProtocolForEAPTTLS
    */
    public function getInnerAuthenticationProtocolForEAPTTLS()
    {
        if (array_key_exists("innerAuthenticationProtocolForEAPTTLS", $this->_propDict)) {
            if (is_a($this->_propDict["innerAuthenticationProtocolForEAPTTLS"], "\Beta\Microsoft\Graph\Model\NonEapAuthenticationMethodForEapTtlsType")) {
                return $this->_propDict["innerAuthenticationProtocolForEAPTTLS"];
            } else {
                $this->_propDict["innerAuthenticationProtocolForEAPTTLS"] = new NonEapAuthenticationMethodForEapTtlsType($this->_propDict["innerAuthenticationProtocolForEAPTTLS"]);
                return $this->_propDict["innerAuthenticationProtocolForEAPTTLS"];
            }
        }
        return null;
    }
    
    /**
    * Sets the innerAuthenticationProtocolForEAPTTLS
    * Specify inner authentication protocol for EAP TTLS. Possible values are: unencryptedPassword, challengeHandshakeAuthenticationProtocol, microsoftChap, microsoftChapVersionTwo.
    *
    * @param NonEapAuthenticationMethodForEapTtlsType $val The innerAuthenticationProtocolForEAPTTLS
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setInnerAuthenticationProtocolForEAPTTLS($val)
    {
        $this->_propDict["innerAuthenticationProtocolForEAPTTLS"] = $val;
        return $this;
    }
    
    /**
    * Gets the maximumAuthenticationFailures
    * Specify the maximum authentication failures allowed for a set of credentials. Valid range 1-100.
    *
    * @return int The maximumAuthenticationFailures
    */
    public function getMaximumAuthenticationFailures()
    {
        if (array_key_exists("maximumAuthenticationFailures", $this->_propDict)) {
            return $this->_propDict["maximumAuthenticationFailures"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the maximumAuthenticationFailures
    * Specify the maximum authentication failures allowed for a set of credentials. Valid range 1-100.
    *
    * @param int $val The maximumAuthenticationFailures
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setMaximumAuthenticationFailures($val)
    {
        $this->_propDict["maximumAuthenticationFailures"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the maximumAuthenticationTimeoutInSeconds
    * Specify maximum authentication timeout (in seconds).  Valid range: 1-120
    *
    * @return int The maximumAuthenticationTimeoutInSeconds
    */
    public function getMaximumAuthenticationTimeoutInSeconds()
    {
        if (array_key_exists("maximumAuthenticationTimeoutInSeconds", $this->_propDict)) {
            return $this->_propDict["maximumAuthenticationTimeoutInSeconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the maximumAuthenticationTimeoutInSeconds
    * Specify maximum authentication timeout (in seconds).  Valid range: 1-120
    *
    * @param int $val The maximumAuthenticationTimeoutInSeconds
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setMaximumAuthenticationTimeoutInSeconds($val)
    {
        $this->_propDict["maximumAuthenticationTimeoutInSeconds"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the maximumEAPOLStartMessages
    * Specifiy the maximum number of EAPOL (Extensible Authentication Protocol over LAN) Start messages to be sent before returning failure. Valid range 1-100.
    *
    * @return int The maximumEAPOLStartMessages
    */
    public function getMaximumEAPOLStartMessages()
    {
        if (array_key_exists("maximumEAPOLStartMessages", $this->_propDict)) {
            return $this->_propDict["maximumEAPOLStartMessages"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the maximumEAPOLStartMessages
    * Specifiy the maximum number of EAPOL (Extensible Authentication Protocol over LAN) Start messages to be sent before returning failure. Valid range 1-100.
    *
    * @param int $val The maximumEAPOLStartMessages
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setMaximumEAPOLStartMessages($val)
    {
        $this->_propDict["maximumEAPOLStartMessages"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the maximumNumberOfPairwiseMasterKeysInCache
    * Specify maximum number of pairwise master keys in cache.  Valid range: 1-255
    *
    * @return int The maximumNumberOfPairwiseMasterKeysInCache
    */
    public function getMaximumNumberOfPairwiseMasterKeysInCache()
    {
        if (array_key_exists("maximumNumberOfPairwiseMasterKeysInCache", $this->_propDict)) {
            return $this->_propDict["maximumNumberOfPairwiseMasterKeysInCache"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the maximumNumberOfPairwiseMasterKeysInCache
    * Specify maximum number of pairwise master keys in cache.  Valid range: 1-255
    *
    * @param int $val The maximumNumberOfPairwiseMasterKeysInCache
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setMaximumNumberOfPairwiseMasterKeysInCache($val)
    {
        $this->_propDict["maximumNumberOfPairwiseMasterKeysInCache"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the maximumPairwiseMasterKeyCacheTimeInMinutes
    * Specify maximum pairwise master key cache time (in minutes).  Valid range: 5-1440
    *
    * @return int The maximumPairwiseMasterKeyCacheTimeInMinutes
    */
    public function getMaximumPairwiseMasterKeyCacheTimeInMinutes()
    {
        if (array_key_exists("maximumPairwiseMasterKeyCacheTimeInMinutes", $this->_propDict)) {
            return $this->_propDict["maximumPairwiseMasterKeyCacheTimeInMinutes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the maximumPairwiseMasterKeyCacheTimeInMinutes
    * Specify maximum pairwise master key cache time (in minutes).  Valid range: 5-1440
    *
    * @param int $val The maximumPairwiseMasterKeyCacheTimeInMinutes
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setMaximumPairwiseMasterKeyCacheTimeInMinutes($val)
    {
        $this->_propDict["maximumPairwiseMasterKeyCacheTimeInMinutes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the maximumPreAuthenticationAttempts
    * Specify maximum pre-authentication attempts.  Valid range: 1-16
    *
    * @return int The maximumPreAuthenticationAttempts
    */
    public function getMaximumPreAuthenticationAttempts()
    {
        if (array_key_exists("maximumPreAuthenticationAttempts", $this->_propDict)) {
            return $this->_propDict["maximumPreAuthenticationAttempts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the maximumPreAuthenticationAttempts
    * Specify maximum pre-authentication attempts.  Valid range: 1-16
    *
    * @param int $val The maximumPreAuthenticationAttempts
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setMaximumPreAuthenticationAttempts($val)
    {
        $this->_propDict["maximumPreAuthenticationAttempts"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the networkSingleSignOn
    * Specify the network single sign on type. Possible values are: disabled, prelogon, postlogon.
    *
    * @return NetworkSingleSignOnType The networkSingleSignOn
    */
    public function getNetworkSingleSignOn()
    {
        if (array_key_exists("networkSingleSignOn", $this->_propDict)) {
            if (is_a($this->_propDict["networkSingleSignOn"], "\Beta\Microsoft\Graph\Model\NetworkSingleSignOnType")) {
                return $this->_propDict["networkSingleSignOn"];
            } else {
                $this->_propDict["networkSingleSignOn"] = new NetworkSingleSignOnType($this->_propDict["networkSingleSignOn"]);
                return $this->_propDict["networkSingleSignOn"];
            }
        }
        return null;
    }
    
    /**
    * Sets the networkSingleSignOn
    * Specify the network single sign on type. Possible values are: disabled, prelogon, postlogon.
    *
    * @param NetworkSingleSignOnType $val The networkSingleSignOn
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setNetworkSingleSignOn($val)
    {
        $this->_propDict["networkSingleSignOn"] = $val;
        return $this;
    }
    
    /**
    * Gets the outerIdentityPrivacyTemporaryValue
    * Specify the string to replace usernames for privacy when using EAP TTLS or PEAP.
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
    * Specify the string to replace usernames for privacy when using EAP TTLS or PEAP.
    *
    * @param string $val The outerIdentityPrivacyTemporaryValue
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setOuterIdentityPrivacyTemporaryValue($val)
    {
        $this->_propDict["outerIdentityPrivacyTemporaryValue"] = $val;
        return $this;
    }
    
    /**
    * Gets the performServerValidation
    * Specify whether to enable verification of server's identity by validating the certificate when EAP type is selected as PEAP.
    *
    * @return bool The performServerValidation
    */
    public function getPerformServerValidation()
    {
        if (array_key_exists("performServerValidation", $this->_propDict)) {
            return $this->_propDict["performServerValidation"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the performServerValidation
    * Specify whether to enable verification of server's identity by validating the certificate when EAP type is selected as PEAP.
    *
    * @param bool $val The performServerValidation
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setPerformServerValidation($val)
    {
        $this->_propDict["performServerValidation"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the promptForAdditionalAuthenticationCredentials
    * Specify whether the wifi connection should prompt for additional authentication credentials.
    *
    * @return bool The promptForAdditionalAuthenticationCredentials
    */
    public function getPromptForAdditionalAuthenticationCredentials()
    {
        if (array_key_exists("promptForAdditionalAuthenticationCredentials", $this->_propDict)) {
            return $this->_propDict["promptForAdditionalAuthenticationCredentials"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the promptForAdditionalAuthenticationCredentials
    * Specify whether the wifi connection should prompt for additional authentication credentials.
    *
    * @param bool $val The promptForAdditionalAuthenticationCredentials
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setPromptForAdditionalAuthenticationCredentials($val)
    {
        $this->_propDict["promptForAdditionalAuthenticationCredentials"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the requireCryptographicBinding
    * Specify whether to enable cryptographic binding when EAP type is selected as PEAP.
    *
    * @return bool The requireCryptographicBinding
    */
    public function getRequireCryptographicBinding()
    {
        if (array_key_exists("requireCryptographicBinding", $this->_propDict)) {
            return $this->_propDict["requireCryptographicBinding"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requireCryptographicBinding
    * Specify whether to enable cryptographic binding when EAP type is selected as PEAP.
    *
    * @param bool $val The requireCryptographicBinding
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setRequireCryptographicBinding($val)
    {
        $this->_propDict["requireCryptographicBinding"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the trustedServerCertificateNames
    * Specify trusted server certificate names.
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
    * Specify trusted server certificate names.
    *
    * @param string $val The trustedServerCertificateNames
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setTrustedServerCertificateNames($val)
    {
        $this->_propDict["trustedServerCertificateNames"] = $val;
        return $this;
    }
    
    /**
    * Gets the userBasedVirtualLan
    * Specifiy whether to change the virtual LAN used by the device based on the user’s credentials. Cannot be used when NetworkSingleSignOnType is set to ​Disabled.
    *
    * @return bool The userBasedVirtualLan
    */
    public function getUserBasedVirtualLan()
    {
        if (array_key_exists("userBasedVirtualLan", $this->_propDict)) {
            return $this->_propDict["userBasedVirtualLan"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userBasedVirtualLan
    * Specifiy whether to change the virtual LAN used by the device based on the user’s credentials. Cannot be used when NetworkSingleSignOnType is set to ​Disabled.
    *
    * @param bool $val The userBasedVirtualLan
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setUserBasedVirtualLan($val)
    {
        $this->_propDict["userBasedVirtualLan"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the identityCertificateForClientAuthentication
    * Specify identity certificate for client authentication.
    *
    * @return WindowsCertificateProfileBase The identityCertificateForClientAuthentication
    */
    public function getIdentityCertificateForClientAuthentication()
    {
        if (array_key_exists("identityCertificateForClientAuthentication", $this->_propDict)) {
            if (is_a($this->_propDict["identityCertificateForClientAuthentication"], "\Beta\Microsoft\Graph\Model\WindowsCertificateProfileBase")) {
                return $this->_propDict["identityCertificateForClientAuthentication"];
            } else {
                $this->_propDict["identityCertificateForClientAuthentication"] = new WindowsCertificateProfileBase($this->_propDict["identityCertificateForClientAuthentication"]);
                return $this->_propDict["identityCertificateForClientAuthentication"];
            }
        }
        return null;
    }
    
    /**
    * Sets the identityCertificateForClientAuthentication
    * Specify identity certificate for client authentication.
    *
    * @param WindowsCertificateProfileBase $val The identityCertificateForClientAuthentication
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setIdentityCertificateForClientAuthentication($val)
    {
        $this->_propDict["identityCertificateForClientAuthentication"] = $val;
        return $this;
    }
    
    /**
    * Gets the rootCertificateForClientValidation
    * Specify root certificate for client validation.
    *
    * @return Windows81TrustedRootCertificate The rootCertificateForClientValidation
    */
    public function getRootCertificateForClientValidation()
    {
        if (array_key_exists("rootCertificateForClientValidation", $this->_propDict)) {
            if (is_a($this->_propDict["rootCertificateForClientValidation"], "\Beta\Microsoft\Graph\Model\Windows81TrustedRootCertificate")) {
                return $this->_propDict["rootCertificateForClientValidation"];
            } else {
                $this->_propDict["rootCertificateForClientValidation"] = new Windows81TrustedRootCertificate($this->_propDict["rootCertificateForClientValidation"]);
                return $this->_propDict["rootCertificateForClientValidation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the rootCertificateForClientValidation
    * Specify root certificate for client validation.
    *
    * @param Windows81TrustedRootCertificate $val The rootCertificateForClientValidation
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setRootCertificateForClientValidation($val)
    {
        $this->_propDict["rootCertificateForClientValidation"] = $val;
        return $this;
    }
    

     /** 
     * Gets the rootCertificatesForServerValidation
    * Specify root certificate for server validation.
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
    * Specify root certificate for server validation.
    *
    * @param Windows81TrustedRootCertificate $val The rootCertificatesForServerValidation
    *
    * @return WindowsWifiEnterpriseEAPConfiguration
    */
    public function setRootCertificatesForServerValidation($val)
    {
		$this->_propDict["rootCertificatesForServerValidation"] = $val;
        return $this;
    }
    
}
