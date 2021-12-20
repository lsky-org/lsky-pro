<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* HostSecurityState File
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
* HostSecurityState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class HostSecurityState extends Entity
{
    /**
    * Gets the fqdn
    * Host FQDN (Fully Qualified Domain Name) (for example, machine.company.com).
    *
    * @return string The fqdn
    */
    public function getFqdn()
    {
        if (array_key_exists("fqdn", $this->_propDict)) {
            return $this->_propDict["fqdn"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fqdn
    * Host FQDN (Fully Qualified Domain Name) (for example, machine.company.com).
    *
    * @param string $val The value of the fqdn
    *
    * @return HostSecurityState
    */
    public function setFqdn($val)
    {
        $this->_propDict["fqdn"] = $val;
        return $this;
    }
    /**
    * Gets the isAzureAdJoined
    *
    * @return bool The isAzureAdJoined
    */
    public function getIsAzureAdJoined()
    {
        if (array_key_exists("isAzureAdJoined", $this->_propDict)) {
            return $this->_propDict["isAzureAdJoined"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAzureAdJoined
    *
    * @param bool $val The value of the isAzureAdJoined
    *
    * @return HostSecurityState
    */
    public function setIsAzureAdJoined($val)
    {
        $this->_propDict["isAzureAdJoined"] = $val;
        return $this;
    }
    /**
    * Gets the isAzureAdRegistered
    *
    * @return bool The isAzureAdRegistered
    */
    public function getIsAzureAdRegistered()
    {
        if (array_key_exists("isAzureAdRegistered", $this->_propDict)) {
            return $this->_propDict["isAzureAdRegistered"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isAzureAdRegistered
    *
    * @param bool $val The value of the isAzureAdRegistered
    *
    * @return HostSecurityState
    */
    public function setIsAzureAdRegistered($val)
    {
        $this->_propDict["isAzureAdRegistered"] = $val;
        return $this;
    }
    /**
    * Gets the isHybridAzureDomainJoined
    * True if the host is domain joined to an on-premises Active Directory domain.
    *
    * @return bool The isHybridAzureDomainJoined
    */
    public function getIsHybridAzureDomainJoined()
    {
        if (array_key_exists("isHybridAzureDomainJoined", $this->_propDict)) {
            return $this->_propDict["isHybridAzureDomainJoined"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isHybridAzureDomainJoined
    * True if the host is domain joined to an on-premises Active Directory domain.
    *
    * @param bool $val The value of the isHybridAzureDomainJoined
    *
    * @return HostSecurityState
    */
    public function setIsHybridAzureDomainJoined($val)
    {
        $this->_propDict["isHybridAzureDomainJoined"] = $val;
        return $this;
    }
    /**
    * Gets the netBiosName
    * The local host name, without the DNS domain name.
    *
    * @return string The netBiosName
    */
    public function getNetBiosName()
    {
        if (array_key_exists("netBiosName", $this->_propDict)) {
            return $this->_propDict["netBiosName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the netBiosName
    * The local host name, without the DNS domain name.
    *
    * @param string $val The value of the netBiosName
    *
    * @return HostSecurityState
    */
    public function setNetBiosName($val)
    {
        $this->_propDict["netBiosName"] = $val;
        return $this;
    }
    /**
    * Gets the os
    * Host Operating System. (For example, Windows10, MacOS, RHEL, etc.).
    *
    * @return string The os
    */
    public function getOs()
    {
        if (array_key_exists("os", $this->_propDict)) {
            return $this->_propDict["os"];
        } else {
            return null;
        }
    }

    /**
    * Sets the os
    * Host Operating System. (For example, Windows10, MacOS, RHEL, etc.).
    *
    * @param string $val The value of the os
    *
    * @return HostSecurityState
    */
    public function setOs($val)
    {
        $this->_propDict["os"] = $val;
        return $this;
    }
    /**
    * Gets the privateIpAddress
    * Private (not routable) IPv4 or IPv6 address (see RFC 1918) at the time of the alert.
    *
    * @return string The privateIpAddress
    */
    public function getPrivateIpAddress()
    {
        if (array_key_exists("privateIpAddress", $this->_propDict)) {
            return $this->_propDict["privateIpAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the privateIpAddress
    * Private (not routable) IPv4 or IPv6 address (see RFC 1918) at the time of the alert.
    *
    * @param string $val The value of the privateIpAddress
    *
    * @return HostSecurityState
    */
    public function setPrivateIpAddress($val)
    {
        $this->_propDict["privateIpAddress"] = $val;
        return $this;
    }
    /**
    * Gets the publicIpAddress
    * Publicly routable IPv4 or IPv6 address (see RFC 1918) at time of the alert.
    *
    * @return string The publicIpAddress
    */
    public function getPublicIpAddress()
    {
        if (array_key_exists("publicIpAddress", $this->_propDict)) {
            return $this->_propDict["publicIpAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the publicIpAddress
    * Publicly routable IPv4 or IPv6 address (see RFC 1918) at time of the alert.
    *
    * @param string $val The value of the publicIpAddress
    *
    * @return HostSecurityState
    */
    public function setPublicIpAddress($val)
    {
        $this->_propDict["publicIpAddress"] = $val;
        return $this;
    }
    /**
    * Gets the riskScore
    * Provider-generated/calculated risk score of the host.  Recommended value range of 0-1, which equates to a percentage.
    *
    * @return string The riskScore
    */
    public function getRiskScore()
    {
        if (array_key_exists("riskScore", $this->_propDict)) {
            return $this->_propDict["riskScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the riskScore
    * Provider-generated/calculated risk score of the host.  Recommended value range of 0-1, which equates to a percentage.
    *
    * @param string $val The value of the riskScore
    *
    * @return HostSecurityState
    */
    public function setRiskScore($val)
    {
        $this->_propDict["riskScore"] = $val;
        return $this;
    }
}
