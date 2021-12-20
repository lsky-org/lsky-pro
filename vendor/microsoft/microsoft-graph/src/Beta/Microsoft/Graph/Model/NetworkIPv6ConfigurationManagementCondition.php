<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NetworkIPv6ConfigurationManagementCondition File
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
* NetworkIPv6ConfigurationManagementCondition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NetworkIPv6ConfigurationManagementCondition extends NetworkManagementCondition
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
    * @return NetworkIPv6ConfigurationManagementCondition
    */
    public function setDnsSuffixList($val)
    {
        $this->_propDict["dnsSuffixList"] = $val;
        return $this;
    }
    
    /**
    * Gets the ipV6DNSServerList
    * An IPv6 DNS servers configured for the adapter.
    *
    * @return string The ipV6DNSServerList
    */
    public function getIpV6DNSServerList()
    {
        if (array_key_exists("ipV6DNSServerList", $this->_propDict)) {
            return $this->_propDict["ipV6DNSServerList"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ipV6DNSServerList
    * An IPv6 DNS servers configured for the adapter.
    *
    * @param string $val The ipV6DNSServerList
    *
    * @return NetworkIPv6ConfigurationManagementCondition
    */
    public function setIpV6DNSServerList($val)
    {
        $this->_propDict["ipV6DNSServerList"] = $val;
        return $this;
    }
    
    /**
    * Gets the ipV6Gateway
    * The IPv6 gateway address to. e.g 2001:db8::1
    *
    * @return string The ipV6Gateway
    */
    public function getIpV6Gateway()
    {
        if (array_key_exists("ipV6Gateway", $this->_propDict)) {
            return $this->_propDict["ipV6Gateway"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ipV6Gateway
    * The IPv6 gateway address to. e.g 2001:db8::1
    *
    * @param string $val The ipV6Gateway
    *
    * @return NetworkIPv6ConfigurationManagementCondition
    */
    public function setIpV6Gateway($val)
    {
        $this->_propDict["ipV6Gateway"] = $val;
        return $this;
    }
    
    /**
    * Gets the ipV6Prefix
    * The IPv6 subnet to be connected to. e.g. 2001:db8::/32
    *
    * @return string The ipV6Prefix
    */
    public function getIpV6Prefix()
    {
        if (array_key_exists("ipV6Prefix", $this->_propDict)) {
            return $this->_propDict["ipV6Prefix"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the ipV6Prefix
    * The IPv6 subnet to be connected to. e.g. 2001:db8::/32
    *
    * @param string $val The ipV6Prefix
    *
    * @return NetworkIPv6ConfigurationManagementCondition
    */
    public function setIpV6Prefix($val)
    {
        $this->_propDict["ipV6Prefix"] = $val;
        return $this;
    }
    
}
