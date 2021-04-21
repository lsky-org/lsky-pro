<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10VpnProxyServer File
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
* Windows10VpnProxyServer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Windows10VpnProxyServer extends VpnProxyServer
{
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
    * @return Windows10VpnProxyServer
    */
    public function setBypassProxyServerForLocalAddress($val)
    {
        $this->_propDict["bypassProxyServerForLocalAddress"] = $val;
        return $this;
    }
}
