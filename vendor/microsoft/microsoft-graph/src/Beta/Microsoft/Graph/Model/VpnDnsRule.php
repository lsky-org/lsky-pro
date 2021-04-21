<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VpnDnsRule File
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
* VpnDnsRule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VpnDnsRule extends Entity
{
    /**
    * Gets the autoTrigger
    * Automatically connect to the VPN when the device connects to this domain: Default False.
    *
    * @return bool The autoTrigger
    */
    public function getAutoTrigger()
    {
        if (array_key_exists("autoTrigger", $this->_propDict)) {
            return $this->_propDict["autoTrigger"];
        } else {
            return null;
        }
    }

    /**
    * Sets the autoTrigger
    * Automatically connect to the VPN when the device connects to this domain: Default False.
    *
    * @param bool $val The value of the autoTrigger
    *
    * @return VpnDnsRule
    */
    public function setAutoTrigger($val)
    {
        $this->_propDict["autoTrigger"] = $val;
        return $this;
    }
    /**
    * Gets the name
    * Name.
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * Name.
    *
    * @param string $val The value of the name
    *
    * @return VpnDnsRule
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the persistent
    * Keep this rule active even when the VPN is not connected: Default False
    *
    * @return bool The persistent
    */
    public function getPersistent()
    {
        if (array_key_exists("persistent", $this->_propDict)) {
            return $this->_propDict["persistent"];
        } else {
            return null;
        }
    }

    /**
    * Sets the persistent
    * Keep this rule active even when the VPN is not connected: Default False
    *
    * @param bool $val The value of the persistent
    *
    * @return VpnDnsRule
    */
    public function setPersistent($val)
    {
        $this->_propDict["persistent"] = $val;
        return $this;
    }
    /**
    * Gets the proxyServerUri
    * Proxy Server Uri.
    *
    * @return string The proxyServerUri
    */
    public function getProxyServerUri()
    {
        if (array_key_exists("proxyServerUri", $this->_propDict)) {
            return $this->_propDict["proxyServerUri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the proxyServerUri
    * Proxy Server Uri.
    *
    * @param string $val The value of the proxyServerUri
    *
    * @return VpnDnsRule
    */
    public function setProxyServerUri($val)
    {
        $this->_propDict["proxyServerUri"] = $val;
        return $this;
    }
    /**
    * Gets the servers
    * Servers.
    *
    * @return string The servers
    */
    public function getServers()
    {
        if (array_key_exists("servers", $this->_propDict)) {
            return $this->_propDict["servers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the servers
    * Servers.
    *
    * @param string $val The value of the servers
    *
    * @return VpnDnsRule
    */
    public function setServers($val)
    {
        $this->_propDict["servers"] = $val;
        return $this;
    }
}
