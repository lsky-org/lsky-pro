<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsNetworkIsolationPolicy File
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
* WindowsNetworkIsolationPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsNetworkIsolationPolicy extends Entity
{

    /**
    * Gets the enterpriseCloudResources
    * Contains a list of enterprise resource domains hosted in the cloud that need to be protected. Connections to these resources are considered enterprise data. If a proxy is paired with a cloud resource, traffic to the cloud resource will be routed through the enterprise network via the denoted proxy server (on Port 80). A proxy server used for this purpose must also be configured using the EnterpriseInternalProxyServers policy. This collection can contain a maximum of 500 elements.
    *
    * @return ProxiedDomain The enterpriseCloudResources
    */
    public function getEnterpriseCloudResources()
    {
        if (array_key_exists("enterpriseCloudResources", $this->_propDict)) {
            if (is_a($this->_propDict["enterpriseCloudResources"], "\Beta\Microsoft\Graph\Model\ProxiedDomain")) {
                return $this->_propDict["enterpriseCloudResources"];
            } else {
                $this->_propDict["enterpriseCloudResources"] = new ProxiedDomain($this->_propDict["enterpriseCloudResources"]);
                return $this->_propDict["enterpriseCloudResources"];
            }
        }
        return null;
    }

    /**
    * Sets the enterpriseCloudResources
    * Contains a list of enterprise resource domains hosted in the cloud that need to be protected. Connections to these resources are considered enterprise data. If a proxy is paired with a cloud resource, traffic to the cloud resource will be routed through the enterprise network via the denoted proxy server (on Port 80). A proxy server used for this purpose must also be configured using the EnterpriseInternalProxyServers policy. This collection can contain a maximum of 500 elements.
    *
    * @param ProxiedDomain $val The value to assign to the enterpriseCloudResources
    *
    * @return WindowsNetworkIsolationPolicy The WindowsNetworkIsolationPolicy
    */
    public function setEnterpriseCloudResources($val)
    {
        $this->_propDict["enterpriseCloudResources"] = $val;
         return $this;
    }
    /**
    * Gets the enterpriseInternalProxyServers
    * This is the comma-separated list of internal proxy servers. For example, '157.54.14.28, 157.54.11.118, 10.202.14.167, 157.53.14.163, 157.69.210.59'. These proxies have been configured by the admin to connect to specific resources on the Internet. They are considered to be enterprise network locations. The proxies are only leveraged in configuring the EnterpriseCloudResources policy to force traffic to the matched cloud resources through these proxies.
    *
    * @return string The enterpriseInternalProxyServers
    */
    public function getEnterpriseInternalProxyServers()
    {
        if (array_key_exists("enterpriseInternalProxyServers", $this->_propDict)) {
            return $this->_propDict["enterpriseInternalProxyServers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enterpriseInternalProxyServers
    * This is the comma-separated list of internal proxy servers. For example, '157.54.14.28, 157.54.11.118, 10.202.14.167, 157.53.14.163, 157.69.210.59'. These proxies have been configured by the admin to connect to specific resources on the Internet. They are considered to be enterprise network locations. The proxies are only leveraged in configuring the EnterpriseCloudResources policy to force traffic to the matched cloud resources through these proxies.
    *
    * @param string $val The value of the enterpriseInternalProxyServers
    *
    * @return WindowsNetworkIsolationPolicy
    */
    public function setEnterpriseInternalProxyServers($val)
    {
        $this->_propDict["enterpriseInternalProxyServers"] = $val;
        return $this;
    }

    /**
    * Gets the enterpriseIPRanges
    * Sets the enterprise IP ranges that define the computers in the enterprise network. Data that comes from those computers will be considered part of the enterprise and protected. These locations will be considered a safe destination for enterprise data to be shared to. This collection can contain a maximum of 500 elements.
    *
    * @return IpRange The enterpriseIPRanges
    */
    public function getEnterpriseIPRanges()
    {
        if (array_key_exists("enterpriseIPRanges", $this->_propDict)) {
            if (is_a($this->_propDict["enterpriseIPRanges"], "\Beta\Microsoft\Graph\Model\IpRange")) {
                return $this->_propDict["enterpriseIPRanges"];
            } else {
                $this->_propDict["enterpriseIPRanges"] = new IpRange($this->_propDict["enterpriseIPRanges"]);
                return $this->_propDict["enterpriseIPRanges"];
            }
        }
        return null;
    }

    /**
    * Sets the enterpriseIPRanges
    * Sets the enterprise IP ranges that define the computers in the enterprise network. Data that comes from those computers will be considered part of the enterprise and protected. These locations will be considered a safe destination for enterprise data to be shared to. This collection can contain a maximum of 500 elements.
    *
    * @param IpRange $val The value to assign to the enterpriseIPRanges
    *
    * @return WindowsNetworkIsolationPolicy The WindowsNetworkIsolationPolicy
    */
    public function setEnterpriseIPRanges($val)
    {
        $this->_propDict["enterpriseIPRanges"] = $val;
         return $this;
    }
    /**
    * Gets the enterpriseIPRangesAreAuthoritative
    * Boolean value that tells the client to accept the configured list and not to use heuristics to attempt to find other subnets. Default is false.
    *
    * @return bool The enterpriseIPRangesAreAuthoritative
    */
    public function getEnterpriseIPRangesAreAuthoritative()
    {
        if (array_key_exists("enterpriseIPRangesAreAuthoritative", $this->_propDict)) {
            return $this->_propDict["enterpriseIPRangesAreAuthoritative"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enterpriseIPRangesAreAuthoritative
    * Boolean value that tells the client to accept the configured list and not to use heuristics to attempt to find other subnets. Default is false.
    *
    * @param bool $val The value of the enterpriseIPRangesAreAuthoritative
    *
    * @return WindowsNetworkIsolationPolicy
    */
    public function setEnterpriseIPRangesAreAuthoritative($val)
    {
        $this->_propDict["enterpriseIPRangesAreAuthoritative"] = $val;
        return $this;
    }
    /**
    * Gets the enterpriseNetworkDomainNames
    * This is the list of domains that comprise the boundaries of the enterprise. Data from one of these domains that is sent to a device will be considered enterprise data and protected. These locations will be considered a safe destination for enterprise data to be shared to.
    *
    * @return string The enterpriseNetworkDomainNames
    */
    public function getEnterpriseNetworkDomainNames()
    {
        if (array_key_exists("enterpriseNetworkDomainNames", $this->_propDict)) {
            return $this->_propDict["enterpriseNetworkDomainNames"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enterpriseNetworkDomainNames
    * This is the list of domains that comprise the boundaries of the enterprise. Data from one of these domains that is sent to a device will be considered enterprise data and protected. These locations will be considered a safe destination for enterprise data to be shared to.
    *
    * @param string $val The value of the enterpriseNetworkDomainNames
    *
    * @return WindowsNetworkIsolationPolicy
    */
    public function setEnterpriseNetworkDomainNames($val)
    {
        $this->_propDict["enterpriseNetworkDomainNames"] = $val;
        return $this;
    }
    /**
    * Gets the enterpriseProxyServers
    * This is a list of proxy servers. Any server not on this list is considered non-enterprise.
    *
    * @return string The enterpriseProxyServers
    */
    public function getEnterpriseProxyServers()
    {
        if (array_key_exists("enterpriseProxyServers", $this->_propDict)) {
            return $this->_propDict["enterpriseProxyServers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enterpriseProxyServers
    * This is a list of proxy servers. Any server not on this list is considered non-enterprise.
    *
    * @param string $val The value of the enterpriseProxyServers
    *
    * @return WindowsNetworkIsolationPolicy
    */
    public function setEnterpriseProxyServers($val)
    {
        $this->_propDict["enterpriseProxyServers"] = $val;
        return $this;
    }
    /**
    * Gets the enterpriseProxyServersAreAuthoritative
    * Boolean value that tells the client to accept the configured list of proxies and not try to detect other work proxies. Default is false
    *
    * @return bool The enterpriseProxyServersAreAuthoritative
    */
    public function getEnterpriseProxyServersAreAuthoritative()
    {
        if (array_key_exists("enterpriseProxyServersAreAuthoritative", $this->_propDict)) {
            return $this->_propDict["enterpriseProxyServersAreAuthoritative"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enterpriseProxyServersAreAuthoritative
    * Boolean value that tells the client to accept the configured list of proxies and not try to detect other work proxies. Default is false
    *
    * @param bool $val The value of the enterpriseProxyServersAreAuthoritative
    *
    * @return WindowsNetworkIsolationPolicy
    */
    public function setEnterpriseProxyServersAreAuthoritative($val)
    {
        $this->_propDict["enterpriseProxyServersAreAuthoritative"] = $val;
        return $this;
    }
    /**
    * Gets the neutralDomainResources
    * List of domain names that can used for work or personal resource.
    *
    * @return string The neutralDomainResources
    */
    public function getNeutralDomainResources()
    {
        if (array_key_exists("neutralDomainResources", $this->_propDict)) {
            return $this->_propDict["neutralDomainResources"];
        } else {
            return null;
        }
    }

    /**
    * Sets the neutralDomainResources
    * List of domain names that can used for work or personal resource.
    *
    * @param string $val The value of the neutralDomainResources
    *
    * @return WindowsNetworkIsolationPolicy
    */
    public function setNeutralDomainResources($val)
    {
        $this->_propDict["neutralDomainResources"] = $val;
        return $this;
    }
}
