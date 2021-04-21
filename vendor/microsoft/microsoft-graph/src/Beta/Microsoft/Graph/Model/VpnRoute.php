<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VpnRoute File
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
* VpnRoute class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VpnRoute extends Entity
{
    /**
    * Gets the destinationPrefix
    * Destination prefix (IPv4/v6 address).
    *
    * @return string The destinationPrefix
    */
    public function getDestinationPrefix()
    {
        if (array_key_exists("destinationPrefix", $this->_propDict)) {
            return $this->_propDict["destinationPrefix"];
        } else {
            return null;
        }
    }

    /**
    * Sets the destinationPrefix
    * Destination prefix (IPv4/v6 address).
    *
    * @param string $val The value of the destinationPrefix
    *
    * @return VpnRoute
    */
    public function setDestinationPrefix($val)
    {
        $this->_propDict["destinationPrefix"] = $val;
        return $this;
    }
    /**
    * Gets the prefixSize
    * Prefix size. (1-32). Valid values 1 to 32
    *
    * @return int The prefixSize
    */
    public function getPrefixSize()
    {
        if (array_key_exists("prefixSize", $this->_propDict)) {
            return $this->_propDict["prefixSize"];
        } else {
            return null;
        }
    }

    /**
    * Sets the prefixSize
    * Prefix size. (1-32). Valid values 1 to 32
    *
    * @param int $val The value of the prefixSize
    *
    * @return VpnRoute
    */
    public function setPrefixSize($val)
    {
        $this->_propDict["prefixSize"] = $val;
        return $this;
    }
}
