<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosikEv2VpnConfiguration File
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
* IosikEv2VpnConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosikEv2VpnConfiguration extends IosVpnConfiguration
{
    /**
    * Gets the allowDefaultChildSecurityAssociationParameters
    * Allows the use of child security association parameters by setting all parameters to the device's default unless explicitly specified.
    *
    * @return bool The allowDefaultChildSecurityAssociationParameters
    */
    public function getAllowDefaultChildSecurityAssociationParameters()
    {
        if (array_key_exists("allowDefaultChildSecurityAssociationParameters", $this->_propDict)) {
            return $this->_propDict["allowDefaultChildSecurityAssociationParameters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowDefaultChildSecurityAssociationParameters
    * Allows the use of child security association parameters by setting all parameters to the device's default unless explicitly specified.
    *
    * @param bool $val The allowDefaultChildSecurityAssociationParameters
    *
    * @return IosikEv2VpnConfiguration
    */
    public function setAllowDefaultChildSecurityAssociationParameters($val)
    {
        $this->_propDict["allowDefaultChildSecurityAssociationParameters"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the allowDefaultSecurityAssociationParameters
    * Allows the use of security association parameters by setting all parameters to the device's default unless explicitly specified.
    *
    * @return bool The allowDefaultSecurityAssociationParameters
    */
    public function getAllowDefaultSecurityAssociationParameters()
    {
        if (array_key_exists("allowDefaultSecurityAssociationParameters", $this->_propDict)) {
            return $this->_propDict["allowDefaultSecurityAssociationParameters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowDefaultSecurityAssociationParameters
    * Allows the use of security association parameters by setting all parameters to the device's default unless explicitly specified.
    *
    * @param bool $val The allowDefaultSecurityAssociationParameters
    *
    * @return IosikEv2VpnConfiguration
    */
    public function setAllowDefaultSecurityAssociationParameters($val)
    {
        $this->_propDict["allowDefaultSecurityAssociationParameters"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the alwaysOnConfiguration
    * AlwaysOn Configuration
    *
    * @return AppleVpnAlwaysOnConfiguration The alwaysOnConfiguration
    */
    public function getAlwaysOnConfiguration()
    {
        if (array_key_exists("alwaysOnConfiguration", $this->_propDict)) {
            if (is_a($this->_propDict["alwaysOnConfiguration"], "\Beta\Microsoft\Graph\Model\AppleVpnAlwaysOnConfiguration")) {
                return $this->_propDict["alwaysOnConfiguration"];
            } else {
                $this->_propDict["alwaysOnConfiguration"] = new AppleVpnAlwaysOnConfiguration($this->_propDict["alwaysOnConfiguration"]);
                return $this->_propDict["alwaysOnConfiguration"];
            }
        }
        return null;
    }
    
    /**
    * Sets the alwaysOnConfiguration
    * AlwaysOn Configuration
    *
    * @param AppleVpnAlwaysOnConfiguration $val The alwaysOnConfiguration
    *
    * @return IosikEv2VpnConfiguration
    */
    public function setAlwaysOnConfiguration($val)
    {
        $this->_propDict["alwaysOnConfiguration"] = $val;
        return $this;
    }
    
    /**
    * Gets the childSecurityAssociationParameters
    * Child Security Association Parameters
    *
    * @return IosVpnSecurityAssociationParameters The childSecurityAssociationParameters
    */
    public function getChildSecurityAssociationParameters()
    {
        if (array_key_exists("childSecurityAssociationParameters", $this->_propDict)) {
            if (is_a($this->_propDict["childSecurityAssociationParameters"], "\Beta\Microsoft\Graph\Model\IosVpnSecurityAssociationParameters")) {
                return $this->_propDict["childSecurityAssociationParameters"];
            } else {
                $this->_propDict["childSecurityAssociationParameters"] = new IosVpnSecurityAssociationParameters($this->_propDict["childSecurityAssociationParameters"]);
                return $this->_propDict["childSecurityAssociationParameters"];
            }
        }
        return null;
    }
    
    /**
    * Sets the childSecurityAssociationParameters
    * Child Security Association Parameters
    *
    * @param IosVpnSecurityAssociationParameters $val The childSecurityAssociationParameters
    *
    * @return IosikEv2VpnConfiguration
    */
    public function setChildSecurityAssociationParameters($val)
    {
        $this->_propDict["childSecurityAssociationParameters"] = $val;
        return $this;
    }
    
    /**
    * Gets the clientAuthenticationType
    * Type of Client Authentication the VPN client will use. Possible values are: userAuthentication, deviceAuthentication.
    *
    * @return VpnClientAuthenticationType The clientAuthenticationType
    */
    public function getClientAuthenticationType()
    {
        if (array_key_exists("clientAuthenticationType", $this->_propDict)) {
            if (is_a($this->_propDict["clientAuthenticationType"], "\Beta\Microsoft\Graph\Model\VpnClientAuthenticationType")) {
                return $this->_propDict["clientAuthenticationType"];
            } else {
                $this->_propDict["clientAuthenticationType"] = new VpnClientAuthenticationType($this->_propDict["clientAuthenticationType"]);
                return $this->_propDict["clientAuthenticationType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the clientAuthenticationType
    * Type of Client Authentication the VPN client will use. Possible values are: userAuthentication, deviceAuthentication.
    *
    * @param VpnClientAuthenticationType $val The clientAuthenticationType
    *
    * @return IosikEv2VpnConfiguration
    */
    public function setClientAuthenticationType($val)
    {
        $this->_propDict["clientAuthenticationType"] = $val;
        return $this;
    }
    
    /**
    * Gets the deadPeerDetectionRate
    * Determine how often to check if a peer connection is still active. . Possible values are: medium, none, low, high.
    *
    * @return VpnDeadPeerDetectionRate The deadPeerDetectionRate
    */
    public function getDeadPeerDetectionRate()
    {
        if (array_key_exists("deadPeerDetectionRate", $this->_propDict)) {
            if (is_a($this->_propDict["deadPeerDetectionRate"], "\Beta\Microsoft\Graph\Model\VpnDeadPeerDetectionRate")) {
                return $this->_propDict["deadPeerDetectionRate"];
            } else {
                $this->_propDict["deadPeerDetectionRate"] = new VpnDeadPeerDetectionRate($this->_propDict["deadPeerDetectionRate"]);
                return $this->_propDict["deadPeerDetectionRate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deadPeerDetectionRate
    * Determine how often to check if a peer connection is still active. . Possible values are: medium, none, low, high.
    *
    * @param VpnDeadPeerDetectionRate $val The deadPeerDetectionRate
    *
    * @return IosikEv2VpnConfiguration
    */
    public function setDeadPeerDetectionRate($val)
    {
        $this->_propDict["deadPeerDetectionRate"] = $val;
        return $this;
    }
    
    /**
    * Gets the disableMobilityAndMultihoming
    * Disable MOBIKE
    *
    * @return bool The disableMobilityAndMultihoming
    */
    public function getDisableMobilityAndMultihoming()
    {
        if (array_key_exists("disableMobilityAndMultihoming", $this->_propDict)) {
            return $this->_propDict["disableMobilityAndMultihoming"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the disableMobilityAndMultihoming
    * Disable MOBIKE
    *
    * @param bool $val The disableMobilityAndMultihoming
    *
    * @return IosikEv2VpnConfiguration
    */
    public function setDisableMobilityAndMultihoming($val)
    {
        $this->_propDict["disableMobilityAndMultihoming"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the disableRedirect
    * Disable Redirect
    *
    * @return bool The disableRedirect
    */
    public function getDisableRedirect()
    {
        if (array_key_exists("disableRedirect", $this->_propDict)) {
            return $this->_propDict["disableRedirect"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the disableRedirect
    * Disable Redirect
    *
    * @param bool $val The disableRedirect
    *
    * @return IosikEv2VpnConfiguration
    */
    public function setDisableRedirect($val)
    {
        $this->_propDict["disableRedirect"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enableAlwaysOnConfiguration
    * Determines if Always on VPN is enabled
    *
    * @return bool The enableAlwaysOnConfiguration
    */
    public function getEnableAlwaysOnConfiguration()
    {
        if (array_key_exists("enableAlwaysOnConfiguration", $this->_propDict)) {
            return $this->_propDict["enableAlwaysOnConfiguration"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableAlwaysOnConfiguration
    * Determines if Always on VPN is enabled
    *
    * @param bool $val The enableAlwaysOnConfiguration
    *
    * @return IosikEv2VpnConfiguration
    */
    public function setEnableAlwaysOnConfiguration($val)
    {
        $this->_propDict["enableAlwaysOnConfiguration"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enableCertificateRevocationCheck
    * Enables a best-effort revocation check; server response timeouts will not cause it to fail
    *
    * @return bool The enableCertificateRevocationCheck
    */
    public function getEnableCertificateRevocationCheck()
    {
        if (array_key_exists("enableCertificateRevocationCheck", $this->_propDict)) {
            return $this->_propDict["enableCertificateRevocationCheck"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableCertificateRevocationCheck
    * Enables a best-effort revocation check; server response timeouts will not cause it to fail
    *
    * @param bool $val The enableCertificateRevocationCheck
    *
    * @return IosikEv2VpnConfiguration
    */
    public function setEnableCertificateRevocationCheck($val)
    {
        $this->_propDict["enableCertificateRevocationCheck"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enableEAP
    * Enables EAP only authentication
    *
    * @return bool The enableEAP
    */
    public function getEnableEAP()
    {
        if (array_key_exists("enableEAP", $this->_propDict)) {
            return $this->_propDict["enableEAP"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableEAP
    * Enables EAP only authentication
    *
    * @param bool $val The enableEAP
    *
    * @return IosikEv2VpnConfiguration
    */
    public function setEnableEAP($val)
    {
        $this->_propDict["enableEAP"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enablePerfectForwardSecrecy
    * Enable Perfect Forward Secrecy (PFS).
    *
    * @return bool The enablePerfectForwardSecrecy
    */
    public function getEnablePerfectForwardSecrecy()
    {
        if (array_key_exists("enablePerfectForwardSecrecy", $this->_propDict)) {
            return $this->_propDict["enablePerfectForwardSecrecy"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enablePerfectForwardSecrecy
    * Enable Perfect Forward Secrecy (PFS).
    *
    * @param bool $val The enablePerfectForwardSecrecy
    *
    * @return IosikEv2VpnConfiguration
    */
    public function setEnablePerfectForwardSecrecy($val)
    {
        $this->_propDict["enablePerfectForwardSecrecy"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the enableUseInternalSubnetAttributes
    * Enable Use Internal Subnet Attributes.
    *
    * @return bool The enableUseInternalSubnetAttributes
    */
    public function getEnableUseInternalSubnetAttributes()
    {
        if (array_key_exists("enableUseInternalSubnetAttributes", $this->_propDict)) {
            return $this->_propDict["enableUseInternalSubnetAttributes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enableUseInternalSubnetAttributes
    * Enable Use Internal Subnet Attributes.
    *
    * @param bool $val The enableUseInternalSubnetAttributes
    *
    * @return IosikEv2VpnConfiguration
    */
    public function setEnableUseInternalSubnetAttributes($val)
    {
        $this->_propDict["enableUseInternalSubnetAttributes"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the localIdentifier
    * Method of identifying the client that is trying to connect via VPN. . Possible values are: deviceFQDN, empty, clientCertificateSubjectName.
    *
    * @return VpnLocalIdentifier The localIdentifier
    */
    public function getLocalIdentifier()
    {
        if (array_key_exists("localIdentifier", $this->_propDict)) {
            if (is_a($this->_propDict["localIdentifier"], "\Beta\Microsoft\Graph\Model\VpnLocalIdentifier")) {
                return $this->_propDict["localIdentifier"];
            } else {
                $this->_propDict["localIdentifier"] = new VpnLocalIdentifier($this->_propDict["localIdentifier"]);
                return $this->_propDict["localIdentifier"];
            }
        }
        return null;
    }
    
    /**
    * Sets the localIdentifier
    * Method of identifying the client that is trying to connect via VPN. . Possible values are: deviceFQDN, empty, clientCertificateSubjectName.
    *
    * @param VpnLocalIdentifier $val The localIdentifier
    *
    * @return IosikEv2VpnConfiguration
    */
    public function setLocalIdentifier($val)
    {
        $this->_propDict["localIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the mtuSizeInBytes
    * Maximum transmission unit. Valid values 1280 to 1400
    *
    * @return int The mtuSizeInBytes
    */
    public function getMtuSizeInBytes()
    {
        if (array_key_exists("mtuSizeInBytes", $this->_propDict)) {
            return $this->_propDict["mtuSizeInBytes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the mtuSizeInBytes
    * Maximum transmission unit. Valid values 1280 to 1400
    *
    * @param int $val The mtuSizeInBytes
    *
    * @return IosikEv2VpnConfiguration
    */
    public function setMtuSizeInBytes($val)
    {
        $this->_propDict["mtuSizeInBytes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the remoteIdentifier
    * Address of the IKEv2 server. Must be a FQDN, UserFQDN, network address, or ASN1DN
    *
    * @return string The remoteIdentifier
    */
    public function getRemoteIdentifier()
    {
        if (array_key_exists("remoteIdentifier", $this->_propDict)) {
            return $this->_propDict["remoteIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the remoteIdentifier
    * Address of the IKEv2 server. Must be a FQDN, UserFQDN, network address, or ASN1DN
    *
    * @param string $val The remoteIdentifier
    *
    * @return IosikEv2VpnConfiguration
    */
    public function setRemoteIdentifier($val)
    {
        $this->_propDict["remoteIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the securityAssociationParameters
    * Security Association Parameters
    *
    * @return IosVpnSecurityAssociationParameters The securityAssociationParameters
    */
    public function getSecurityAssociationParameters()
    {
        if (array_key_exists("securityAssociationParameters", $this->_propDict)) {
            if (is_a($this->_propDict["securityAssociationParameters"], "\Beta\Microsoft\Graph\Model\IosVpnSecurityAssociationParameters")) {
                return $this->_propDict["securityAssociationParameters"];
            } else {
                $this->_propDict["securityAssociationParameters"] = new IosVpnSecurityAssociationParameters($this->_propDict["securityAssociationParameters"]);
                return $this->_propDict["securityAssociationParameters"];
            }
        }
        return null;
    }
    
    /**
    * Sets the securityAssociationParameters
    * Security Association Parameters
    *
    * @param IosVpnSecurityAssociationParameters $val The securityAssociationParameters
    *
    * @return IosikEv2VpnConfiguration
    */
    public function setSecurityAssociationParameters($val)
    {
        $this->_propDict["securityAssociationParameters"] = $val;
        return $this;
    }
    
    /**
    * Gets the serverCertificateCommonName
    * Common name of the IKEv2 Server Certificate used in Server Authentication
    *
    * @return string The serverCertificateCommonName
    */
    public function getServerCertificateCommonName()
    {
        if (array_key_exists("serverCertificateCommonName", $this->_propDict)) {
            return $this->_propDict["serverCertificateCommonName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the serverCertificateCommonName
    * Common name of the IKEv2 Server Certificate used in Server Authentication
    *
    * @param string $val The serverCertificateCommonName
    *
    * @return IosikEv2VpnConfiguration
    */
    public function setServerCertificateCommonName($val)
    {
        $this->_propDict["serverCertificateCommonName"] = $val;
        return $this;
    }
    
    /**
    * Gets the serverCertificateIssuerCommonName
    * Issuer Common name of the IKEv2 Server Certificate issuer used in Authentication
    *
    * @return string The serverCertificateIssuerCommonName
    */
    public function getServerCertificateIssuerCommonName()
    {
        if (array_key_exists("serverCertificateIssuerCommonName", $this->_propDict)) {
            return $this->_propDict["serverCertificateIssuerCommonName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the serverCertificateIssuerCommonName
    * Issuer Common name of the IKEv2 Server Certificate issuer used in Authentication
    *
    * @param string $val The serverCertificateIssuerCommonName
    *
    * @return IosikEv2VpnConfiguration
    */
    public function setServerCertificateIssuerCommonName($val)
    {
        $this->_propDict["serverCertificateIssuerCommonName"] = $val;
        return $this;
    }
    
    /**
    * Gets the serverCertificateType
    * The type of certificate the VPN server will present to the VPN client for authentication. Possible values are: rsa, ecdsa256, ecdsa384, ecdsa521.
    *
    * @return VpnServerCertificateType The serverCertificateType
    */
    public function getServerCertificateType()
    {
        if (array_key_exists("serverCertificateType", $this->_propDict)) {
            if (is_a($this->_propDict["serverCertificateType"], "\Beta\Microsoft\Graph\Model\VpnServerCertificateType")) {
                return $this->_propDict["serverCertificateType"];
            } else {
                $this->_propDict["serverCertificateType"] = new VpnServerCertificateType($this->_propDict["serverCertificateType"]);
                return $this->_propDict["serverCertificateType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the serverCertificateType
    * The type of certificate the VPN server will present to the VPN client for authentication. Possible values are: rsa, ecdsa256, ecdsa384, ecdsa521.
    *
    * @param VpnServerCertificateType $val The serverCertificateType
    *
    * @return IosikEv2VpnConfiguration
    */
    public function setServerCertificateType($val)
    {
        $this->_propDict["serverCertificateType"] = $val;
        return $this;
    }
    
    /**
    * Gets the sharedSecret
    * Used when Shared Secret Authentication is selected
    *
    * @return string The sharedSecret
    */
    public function getSharedSecret()
    {
        if (array_key_exists("sharedSecret", $this->_propDict)) {
            return $this->_propDict["sharedSecret"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sharedSecret
    * Used when Shared Secret Authentication is selected
    *
    * @param string $val The sharedSecret
    *
    * @return IosikEv2VpnConfiguration
    */
    public function setSharedSecret($val)
    {
        $this->_propDict["sharedSecret"] = $val;
        return $this;
    }
    
    /**
    * Gets the tlsMaximumVersion
    * The maximum TLS version to be used with EAP-TLS authentication
    *
    * @return string The tlsMaximumVersion
    */
    public function getTlsMaximumVersion()
    {
        if (array_key_exists("tlsMaximumVersion", $this->_propDict)) {
            return $this->_propDict["tlsMaximumVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tlsMaximumVersion
    * The maximum TLS version to be used with EAP-TLS authentication
    *
    * @param string $val The tlsMaximumVersion
    *
    * @return IosikEv2VpnConfiguration
    */
    public function setTlsMaximumVersion($val)
    {
        $this->_propDict["tlsMaximumVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the tlsMinimumVersion
    * The minimum TLS version to be used with EAP-TLS authentication
    *
    * @return string The tlsMinimumVersion
    */
    public function getTlsMinimumVersion()
    {
        if (array_key_exists("tlsMinimumVersion", $this->_propDict)) {
            return $this->_propDict["tlsMinimumVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tlsMinimumVersion
    * The minimum TLS version to be used with EAP-TLS authentication
    *
    * @param string $val The tlsMinimumVersion
    *
    * @return IosikEv2VpnConfiguration
    */
    public function setTlsMinimumVersion($val)
    {
        $this->_propDict["tlsMinimumVersion"] = $val;
        return $this;
    }
    
}
