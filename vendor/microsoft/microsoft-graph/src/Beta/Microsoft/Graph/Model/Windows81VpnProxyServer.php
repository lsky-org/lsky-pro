<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows81VpnProxyServer File
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
* Windows81VpnProxyServer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Windows81VpnProxyServer extends VpnProxyServer
{
    /**
    * Gets the automaticallyDetectProxySettings
    * Automatically detect proxy settings.
    *
    * @return bool The automaticallyDetectProxySettings
    */
    public function getAutomaticallyDetectProxySettings()
    {
        if (array_key_exists("automaticallyDetectProxySettings", $this->_propDict)) {
            return $this->_propDict["automaticallyDetectProxySettings"];
        } else {
            return null;
        }
    }

    /**
    * Sets the automaticallyDetectProxySettings
    * Automatically detect proxy settings.
    *
    * @param bool $val The value of the automaticallyDetectProxySettings
    *
    * @return Windows81VpnProxyServer
    */
    public function setAutomaticallyDetectProxySettings($val)
    {
        $this->_propDict["automaticallyDetectProxySettings"] = $val;
        return $this;
    }
    /**
    * Gets the bypassProxyServerForLocalAddress
    * Bypass proxy server for local address.
    *
    * @return bool The bypassProxyServerForLocalAddress
    */
    public function getBypassProxyServerForLocalAddress()
    {
        if (array_key_exists("bypassProxyServerForLocalAddress", $this->_propDict)) {
            return $this->_propDict["bypassProxyServerForLocalAddress"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bypassProxyServerForLocalAddress
    * Bypass proxy server for local address.
    *
    * @param bool $val The value of the bypassProxyServerForLocalAddress
    *
    * @return Windows81VpnProxyServer
    */
    public function setBypassProxyServerForLocalAddress($val)
    {
        $this->_propDict["bypassProxyServerForLocalAddress"] = $val;
        return $this;
    }
}
