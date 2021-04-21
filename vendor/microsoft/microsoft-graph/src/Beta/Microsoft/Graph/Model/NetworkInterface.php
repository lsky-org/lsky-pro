<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NetworkInterface File
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
* NetworkInterface class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NetworkInterface extends Entity
{
    /**
    * Gets the description
    * Description of the NIC (e.g. Ethernet adapter, Wireless LAN adapter Local Area Connection &amp;lt;#&amp;gt;, etc.).
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }

    /**
    * Sets the description
    * Description of the NIC (e.g. Ethernet adapter, Wireless LAN adapter Local Area Connection &amp;lt;#&amp;gt;, etc.).
    *
    * @param string $val The value of the description
    *
    * @return NetworkInterface
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the ipV4Address
    * Last IPv4 address associated with this NIC.
    *
    * @return string The ipV4Address
    */
    public function getIpV4Address()
    {
        if (array_key_exists("ipV4Address", $this->_propDict)) {
            return $this->_propDict["ipV4Address"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ipV4Address
    * Last IPv4 address associated with this NIC.
    *
    * @param string $val The value of the ipV4Address
    *
    * @return NetworkInterface
    */
    public function setIpV4Address($val)
    {
        $this->_propDict["ipV4Address"] = $val;
        return $this;
    }
    /**
    * Gets the ipV6Address
    * Last Public (aka global) IPv6 address associated with this NIC.
    *
    * @return string The ipV6Address
    */
    public function getIpV6Address()
    {
        if (array_key_exists("ipV6Address", $this->_propDict)) {
            return $this->_propDict["ipV6Address"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ipV6Address
    * Last Public (aka global) IPv6 address associated with this NIC.
    *
    * @param string $val The value of the ipV6Address
    *
    * @return NetworkInterface
    */
    public function setIpV6Address($val)
    {
        $this->_propDict["ipV6Address"] = $val;
        return $this;
    }
    /**
    * Gets the localIpV6Address
    * Last local (link-local or site-local) IPv6 address associated with this NIC.
    *
    * @return string The localIpV6Address
    */
    public function getLocalIpV6Address()
    {
        if (array_key_exists("localIpV6Address", $this->_propDict)) {
            return $this->_propDict["localIpV6Address"];
        } else {
            return null;
        }
    }

    /**
    * Sets the localIpV6Address
    * Last local (link-local or site-local) IPv6 address associated with this NIC.
    *
    * @param string $val The value of the localIpV6Address
    *
    * @return NetworkInterface
    */
    public function setLocalIpV6Address($val)
    {
        $this->_propDict["localIpV6Address"] = $val;
        return $this;
    }
    /**
    * Gets the macAddress
    * MAC address of the NIC on this host.
    *
    * @return string The macAddress
    */
    public function getMacAddress()
    {
        if (array_key_exists("macAddress", $this->_propDict)) {
            return $this->_propDict["macAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the macAddress
    * MAC address of the NIC on this host.
    *
    * @param string $val The value of the macAddress
    *
    * @return NetworkInterface
    */
    public function setMacAddress($val)
    {
        $this->_propDict["macAddress"] = $val;
        return $this;
    }
}
