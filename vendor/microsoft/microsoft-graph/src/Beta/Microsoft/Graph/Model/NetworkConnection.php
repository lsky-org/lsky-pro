<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NetworkConnection File
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
* NetworkConnection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NetworkConnection extends Entity
{
    /**
    * Gets the applicationName
    * Name of the application managing the network connection (for example, Facebook, SMTP, etc.).
    *
    * @return string The applicationName
    */
    public function getApplicationName()
    {
        if (array_key_exists("applicationName", $this->_propDict)) {
            return $this->_propDict["applicationName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the applicationName
    * Name of the application managing the network connection (for example, Facebook, SMTP, etc.).
    *
    * @param string $val The value of the applicationName
    *
    * @return NetworkConnection
    */
    public function setApplicationName($val)
    {
        $this->_propDict["applicationName"] = $val;
        return $this;
    }
    /**
    * Gets the destinationAddress
    * Destination IP address (of the network connection).
    *
    * @return string The destinationAddress
    */
    public function getDestinationAddress()
    {
        if (array_key_exists("destinationAddress", $this->_propDict)) {
            return $this->_propDict["destinationAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationAddress
    * Destination IP address (of the network connection).
    *
    * @param string $val The value of the destinationAddress
    *
    * @return NetworkConnection
    */
    public function setDestinationAddress($val)
    {
        $this->_propDict["destinationAddress"] = $val;
        return $this;
    }
    /**
    * Gets the destinationDomain
    * Destination domain portion of the destination URL. (for example 'www.contoso.com').
    *
    * @return string The destinationDomain
    */
    public function getDestinationDomain()
    {
        if (array_key_exists("destinationDomain", $this->_propDict)) {
            return $this->_propDict["destinationDomain"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationDomain
    * Destination domain portion of the destination URL. (for example 'www.contoso.com').
    *
    * @param string $val The value of the destinationDomain
    *
    * @return NetworkConnection
    */
    public function setDestinationDomain($val)
    {
        $this->_propDict["destinationDomain"] = $val;
        return $this;
    }
    /**
    * Gets the destinationLocation
    * Location (by IP address mapping) associated with the destination of a network connection.
    *
    * @return string The destinationLocation
    */
    public function getDestinationLocation()
    {
        if (array_key_exists("destinationLocation", $this->_propDict)) {
            return $this->_propDict["destinationLocation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationLocation
    * Location (by IP address mapping) associated with the destination of a network connection.
    *
    * @param string $val The value of the destinationLocation
    *
    * @return NetworkConnection
    */
    public function setDestinationLocation($val)
    {
        $this->_propDict["destinationLocation"] = $val;
        return $this;
    }
    /**
    * Gets the destinationPort
    * Destination port (of the network connection).
    *
    * @return string The destinationPort
    */
    public function getDestinationPort()
    {
        if (array_key_exists("destinationPort", $this->_propDict)) {
            return $this->_propDict["destinationPort"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationPort
    * Destination port (of the network connection).
    *
    * @param string $val The value of the destinationPort
    *
    * @return NetworkConnection
    */
    public function setDestinationPort($val)
    {
        $this->_propDict["destinationPort"] = $val;
        return $this;
    }
    /**
    * Gets the destinationUrl
    * Network connection URL/URI string - excluding parameters. (for example 'www.contoso.com/products/default.html')
    *
    * @return string The destinationUrl
    */
    public function getDestinationUrl()
    {
        if (array_key_exists("destinationUrl", $this->_propDict)) {
            return $this->_propDict["destinationUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationUrl
    * Network connection URL/URI string - excluding parameters. (for example 'www.contoso.com/products/default.html')
    *
    * @param string $val The value of the destinationUrl
    *
    * @return NetworkConnection
    */
    public function setDestinationUrl($val)
    {
        $this->_propDict["destinationUrl"] = $val;
        return $this;
    }

    /**
    * Gets the direction
    * Network connection direction. Possible values are: unknown, inbound, outbound.
    *
    * @return ConnectionDirection The direction
    */
    public function getDirection()
    {
        if (array_key_exists("direction", $this->_propDict)) {
            if (is_a($this->_propDict["direction"], "\Beta\Microsoft\Graph\Model\ConnectionDirection")) {
                return $this->_propDict["direction"];
            } else {
                $this->_propDict["direction"] = new ConnectionDirection($this->_propDict["direction"]);
                return $this->_propDict["direction"];
            }
        }
        return null;
    }

    /**
    * Sets the direction
    * Network connection direction. Possible values are: unknown, inbound, outbound.
    *
    * @param ConnectionDirection $val The value to assign to the direction
    *
    * @return NetworkConnection The NetworkConnection
    */
    public function setDirection($val)
    {
        $this->_propDict["direction"] = $val;
         return $this;
    }

    /**
    * Gets the domainRegisteredDateTime
    * Date when the destination domain was registered. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @return \DateTime The domainRegisteredDateTime
    */
    public function getDomainRegisteredDateTime()
    {
        if (array_key_exists("domainRegisteredDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["domainRegisteredDateTime"], "\DateTime")) {
                return $this->_propDict["domainRegisteredDateTime"];
            } else {
                $this->_propDict["domainRegisteredDateTime"] = new \DateTime($this->_propDict["domainRegisteredDateTime"]);
                return $this->_propDict["domainRegisteredDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the domainRegisteredDateTime
    * Date when the destination domain was registered. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    *
    * @param \DateTime $val The value to assign to the domainRegisteredDateTime
    *
    * @return NetworkConnection The NetworkConnection
    */
    public function setDomainRegisteredDateTime($val)
    {
        $this->_propDict["domainRegisteredDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the localDnsName
    * The local DNS name resolution as it appears in the host's local DNS cache (for example, in case the 'hosts' file was tampered with).
    *
    * @return string The localDnsName
    */
    public function getLocalDnsName()
    {
        if (array_key_exists("localDnsName", $this->_propDict)) {
            return $this->_propDict["localDnsName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the localDnsName
    * The local DNS name resolution as it appears in the host's local DNS cache (for example, in case the 'hosts' file was tampered with).
    *
    * @param string $val The value of the localDnsName
    *
    * @return NetworkConnection
    */
    public function setLocalDnsName($val)
    {
        $this->_propDict["localDnsName"] = $val;
        return $this;
    }
    /**
    * Gets the natDestinationAddress
    * Network Address Translation destination IP address.
    *
    * @return string The natDestinationAddress
    */
    public function getNatDestinationAddress()
    {
        if (array_key_exists("natDestinationAddress", $this->_propDict)) {
            return $this->_propDict["natDestinationAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the natDestinationAddress
    * Network Address Translation destination IP address.
    *
    * @param string $val The value of the natDestinationAddress
    *
    * @return NetworkConnection
    */
    public function setNatDestinationAddress($val)
    {
        $this->_propDict["natDestinationAddress"] = $val;
        return $this;
    }
    /**
    * Gets the natDestinationPort
    * Network Address Translation destination port.
    *
    * @return string The natDestinationPort
    */
    public function getNatDestinationPort()
    {
        if (array_key_exists("natDestinationPort", $this->_propDict)) {
            return $this->_propDict["natDestinationPort"];
        } else {
            return null;
        }
    }

    /**
    * Sets the natDestinationPort
    * Network Address Translation destination port.
    *
    * @param string $val The value of the natDestinationPort
    *
    * @return NetworkConnection
    */
    public function setNatDestinationPort($val)
    {
        $this->_propDict["natDestinationPort"] = $val;
        return $this;
    }
    /**
    * Gets the natSourceAddress
    * Network Address Translation source IP address.
    *
    * @return string The natSourceAddress
    */
    public function getNatSourceAddress()
    {
        if (array_key_exists("natSourceAddress", $this->_propDict)) {
            return $this->_propDict["natSourceAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the natSourceAddress
    * Network Address Translation source IP address.
    *
    * @param string $val The value of the natSourceAddress
    *
    * @return NetworkConnection
    */
    public function setNatSourceAddress($val)
    {
        $this->_propDict["natSourceAddress"] = $val;
        return $this;
    }
    /**
    * Gets the natSourcePort
    * Network Address Translation source port.
    *
    * @return string The natSourcePort
    */
    public function getNatSourcePort()
    {
        if (array_key_exists("natSourcePort", $this->_propDict)) {
            return $this->_propDict["natSourcePort"];
        } else {
            return null;
        }
    }

    /**
    * Sets the natSourcePort
    * Network Address Translation source port.
    *
    * @param string $val The value of the natSourcePort
    *
    * @return NetworkConnection
    */
    public function setNatSourcePort($val)
    {
        $this->_propDict["natSourcePort"] = $val;
        return $this;
    }

    /**
    * Gets the protocol
    * Network protocol. Possible values are: unknown, ip, icmp, igmp, ggp, ipv4, tcp, pup, udp, idp, ipv6, ipv6RoutingHeader, ipv6FragmentHeader, ipSecEncapsulatingSecurityPayload, ipSecAuthenticationHeader, icmpV6, ipv6NoNextHeader, ipv6DestinationOptions, nd, raw, ipx, spx, spxII.
    *
    * @return SecurityNetworkProtocol The protocol
    */
    public function getProtocol()
    {
        if (array_key_exists("protocol", $this->_propDict)) {
            if (is_a($this->_propDict["protocol"], "\Beta\Microsoft\Graph\Model\SecurityNetworkProtocol")) {
                return $this->_propDict["protocol"];
            } else {
                $this->_propDict["protocol"] = new SecurityNetworkProtocol($this->_propDict["protocol"]);
                return $this->_propDict["protocol"];
            }
        }
        return null;
    }

    /**
    * Sets the protocol
    * Network protocol. Possible values are: unknown, ip, icmp, igmp, ggp, ipv4, tcp, pup, udp, idp, ipv6, ipv6RoutingHeader, ipv6FragmentHeader, ipSecEncapsulatingSecurityPayload, ipSecAuthenticationHeader, icmpV6, ipv6NoNextHeader, ipv6DestinationOptions, nd, raw, ipx, spx, spxII.
    *
    * @param SecurityNetworkProtocol $val The value to assign to the protocol
    *
    * @return NetworkConnection The NetworkConnection
    */
    public function setProtocol($val)
    {
        $this->_propDict["protocol"] = $val;
         return $this;
    }
    /**
    * Gets the riskScore
    * Provider generated/calculated risk score of the network connection. Recommended value range of 0-1, which equates to a percentage.
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
    * Provider generated/calculated risk score of the network connection. Recommended value range of 0-1, which equates to a percentage.
    *
    * @param string $val The value of the riskScore
    *
    * @return NetworkConnection
    */
    public function setRiskScore($val)
    {
        $this->_propDict["riskScore"] = $val;
        return $this;
    }
    /**
    * Gets the sourceAddress
    * Source (i.e. origin) IP address (of the network connection).
    *
    * @return string The sourceAddress
    */
    public function getSourceAddress()
    {
        if (array_key_exists("sourceAddress", $this->_propDict)) {
            return $this->_propDict["sourceAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceAddress
    * Source (i.e. origin) IP address (of the network connection).
    *
    * @param string $val The value of the sourceAddress
    *
    * @return NetworkConnection
    */
    public function setSourceAddress($val)
    {
        $this->_propDict["sourceAddress"] = $val;
        return $this;
    }
    /**
    * Gets the sourceLocation
    * Location (by IP address mapping) associated with the source of a network connection.
    *
    * @return string The sourceLocation
    */
    public function getSourceLocation()
    {
        if (array_key_exists("sourceLocation", $this->_propDict)) {
            return $this->_propDict["sourceLocation"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceLocation
    * Location (by IP address mapping) associated with the source of a network connection.
    *
    * @param string $val The value of the sourceLocation
    *
    * @return NetworkConnection
    */
    public function setSourceLocation($val)
    {
        $this->_propDict["sourceLocation"] = $val;
        return $this;
    }
    /**
    * Gets the sourcePort
    * Source (i.e. origin) IP port (of the network connection).
    *
    * @return string The sourcePort
    */
    public function getSourcePort()
    {
        if (array_key_exists("sourcePort", $this->_propDict)) {
            return $this->_propDict["sourcePort"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourcePort
    * Source (i.e. origin) IP port (of the network connection).
    *
    * @param string $val The value of the sourcePort
    *
    * @return NetworkConnection
    */
    public function setSourcePort($val)
    {
        $this->_propDict["sourcePort"] = $val;
        return $this;
    }

    /**
    * Gets the status
    * Network connection status. Possible values are: unknown, attempted, succeeded, blocked, failed.
    *
    * @return ConnectionStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\ConnectionStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new ConnectionStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }

    /**
    * Sets the status
    * Network connection status. Possible values are: unknown, attempted, succeeded, blocked, failed.
    *
    * @param ConnectionStatus $val The value to assign to the status
    *
    * @return NetworkConnection The NetworkConnection
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
         return $this;
    }
    /**
    * Gets the urlParameters
    * Parameters (suffix) of the destination URL.
    *
    * @return string The urlParameters
    */
    public function getUrlParameters()
    {
        if (array_key_exists("urlParameters", $this->_propDict)) {
            return $this->_propDict["urlParameters"];
        } else {
            return null;
        }
    }

    /**
    * Sets the urlParameters
    * Parameters (suffix) of the destination URL.
    *
    * @param string $val The value of the urlParameters
    *
    * @return NetworkConnection
    */
    public function setUrlParameters($val)
    {
        $this->_propDict["urlParameters"] = $val;
        return $this;
    }
}
