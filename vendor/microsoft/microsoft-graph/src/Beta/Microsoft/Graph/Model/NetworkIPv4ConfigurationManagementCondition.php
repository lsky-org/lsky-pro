<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NetworkIPv4ConfigurationManagementCondition File
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
* NetworkIPv4ConfigurationManagementCondition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NetworkIPv4ConfigurationManagementCondition extends NetworkManagementCondition
{
    /**
    * Gets the dnsSuffixList
    * Valid DNS suffixes for the current network. e.g. seattle.contoso.com
    *
    * @return string The dnsSuffixList
    */
    public function getDnsSuffixList()
    {
        if (array_key_exists("dnsSuffixList", $this->_propDict)) {
            return $this->_propDict["dnsSuffixList"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the dnsSuffixList
    * Valid DNS suffixes for the current network. e.g. seattle.contoso.com
    *
    * @param string $val The dnsSuffixList
    *
    * @return NetworkIPv4ConfigurationManagementCondition
    */
    public function setDnsSuffixList($val)
    {
        $this->_propDict["dnsSuffixList"] = $val;
        return $this;
    }
    
    /**
    * Gets the ipV4DHCPServer
    * The IPv4 address of the DHCP server for the adapter.
    *
    * @return string The ipV4DHCPServer
    */
    public function getIpV4DHCPServer()
    {
        if (array_key_exists("ipV4DHCPServer", $this->_propDict)) {
            return $this->_propDict["ipV4DHCPServer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ipV4DHCPServer
    * The IPv4 address of the DHCP server for the adapter.
    *
    * @param string $val The ipV4DHCPServer
    *
    * @return NetworkIPv4ConfigurationManagementCondition
    */
    public function setIpV4DHCPServer($val)
    {
        $this->_propDict["ipV4DHCPServer"] = $val;
        return $this;
    }
    
    /**
    * Gets the ipV4DNSServerList
    * The IPv4 DNS servers configured for the adapter.
    *
    * @return string The ipV4DNSServerList
    */
    public function getIpV4DNSServerList()
    {
        if (array_key_exists("ipV4DNSServerList", $this->_propDict)) {
            return $this->_propDict["ipV4DNSServerList"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ipV4DNSServerList
    * The IPv4 DNS servers configured for the adapter.
    *
    * @param string $val The ipV4DNSServerList
    *
    * @return NetworkIPv4ConfigurationManagementCondition
    */
    public function setIpV4DNSServerList($val)
    {
        $this->_propDict["ipV4DNSServerList"] = $val;
        return $this;
    }
    
    /**
    * Gets the ipV4Gateway
    * The IPv4 gateway address. e.g. 10.0.0.0
    *
    * @return string The ipV4Gateway
    */
    public function getIpV4Gateway()
    {
        if (array_key_exists("ipV4Gateway", $this->_propDict)) {
            return $this->_propDict["ipV4Gateway"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ipV4Gateway
    * The IPv4 gateway address. e.g. 10.0.0.0
    *
    * @param string $val The ipV4Gateway
    *
    * @return NetworkIPv4ConfigurationManagementCondition
    */
    public function setIpV4Gateway($val)
    {
        $this->_propDict["ipV4Gateway"] = $val;
        return $this;
    }
    
    /**
    * Gets the ipV4Prefix
    * The IPv4 subnet to be connected to. e.g. 10.0.0.0/8
    *
    * @return string The ipV4Prefix
    */
    public function getIpV4Prefix()
    {
        if (array_key_exists("ipV4Prefix", $this->_propDict)) {
            return $this->_propDict["ipV4Prefix"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ipV4Prefix
    * The IPv4 subnet to be connected to. e.g. 10.0.0.0/8
    *
    * @param string $val The ipV4Prefix
    *
    * @return NetworkIPv4ConfigurationManagementCondition
    */
    public function setIpV4Prefix($val)
    {
        $this->_propDict["ipV4Prefix"] = $val;
        return $this;
    }
    
}
