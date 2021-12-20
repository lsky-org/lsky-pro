<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10NetworkProxyServer File
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
* Windows10NetworkProxyServer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Windows10NetworkProxyServer extends Entity
{
    /**
    * Gets the address
    * Address to the proxy server. Specify an address in the format [':']
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
    * Address to the proxy server. Specify an address in the format [':']
    *
    * @param string $val The value of the address
    *
    * @return Windows10NetworkProxyServer
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
        return $this;
    }
    /**
    * Gets the exceptions
    * Addresses that should not use the proxy server. The system will not use the proxy server for addresses beginning with what is specified in this node.
    *
    * @return string The exceptions
    */
    public function getExceptions()
    {
        if (array_key_exists("exceptions", $this->_propDict)) {
            return $this->_propDict["exceptions"];
        } else {
            return null;
        }
    }

    /**
    * Sets the exceptions
    * Addresses that should not use the proxy server. The system will not use the proxy server for addresses beginning with what is specified in this node.
    *
    * @param string $val The value of the exceptions
    *
    * @return Windows10NetworkProxyServer
    */
    public function setExceptions($val)
    {
        $this->_propDict["exceptions"] = $val;
        return $this;
    }
    /**
    * Gets the useForLocalAddresses
    * Specifies whether the proxy server should be used for local (intranet) addresses.
    *
    * @return bool The useForLocalAddresses
    */
    public function getUseForLocalAddresses()
    {
        if (array_key_exists("useForLocalAddresses", $this->_propDict)) {
            return $this->_propDict["useForLocalAddresses"];
        } else {
            return null;
        }
    }

    /**
    * Sets the useForLocalAddresses
    * Specifies whether the proxy server should be used for local (intranet) addresses.
    *
    * @param bool $val The value of the useForLocalAddresses
    *
    * @return Windows10NetworkProxyServer
    */
    public function setUseForLocalAddresses($val)
    {
        $this->_propDict["useForLocalAddresses"] = $val;
        return $this;
    }
}
