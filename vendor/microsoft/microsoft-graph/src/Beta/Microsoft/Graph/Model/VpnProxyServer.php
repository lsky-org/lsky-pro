<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VpnProxyServer File
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
* VpnProxyServer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VpnProxyServer extends Entity
{
    /**
    * Gets the address
    * Address.
    *
    * @return string The address
    */
    public function getAddress()
    {
        if (array_key_exists("address", $this->_propDict)) {
            return $this->_propDict["address"];
        } else {
            return null;
        }
    }

    /**
    * Sets the address
    * Address.
    *
    * @param string $val The value of the address
    *
    * @return VpnProxyServer
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
        return $this;
    }
    /**
    * Gets the automaticConfigurationScriptUrl
    * Proxy's automatic configuration script url.
    *
    * @return string The automaticConfigurationScriptUrl
    */
    public function getAutomaticConfigurationScriptUrl()
    {
        if (array_key_exists("automaticConfigurationScriptUrl", $this->_propDict)) {
            return $this->_propDict["automaticConfigurationScriptUrl"];
        } else {
            return null;
        }
    }

    /**
    * Sets the automaticConfigurationScriptUrl
    * Proxy's automatic configuration script url.
    *
    * @param string $val The value of the automaticConfigurationScriptUrl
    *
    * @return VpnProxyServer
    */
    public function setAutomaticConfigurationScriptUrl($val)
    {
        $this->_propDict["automaticConfigurationScriptUrl"] = $val;
        return $this;
    }
    /**
    * Gets the port
    * Port. Valid values 0 to 65535
    *
    * @return int The port
    */
    public function getPort()
    {
        if (array_key_exists("port", $this->_propDict)) {
            return $this->_propDict["port"];
        } else {
            return null;
        }
    }

    /**
    * Sets the port
    * Port. Valid values 0 to 65535
    *
    * @param int $val The value of the port
    *
    * @return VpnProxyServer
    */
    public function setPort($val)
    {
        $this->_propDict["port"] = $val;
        return $this;
    }
}
