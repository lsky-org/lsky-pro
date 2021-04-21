<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VpnServer File
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
* VpnServer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VpnServer extends Entity
{
    /**
    * Gets the address
    * Address (IP address, FQDN or URL)
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
    * Address (IP address, FQDN or URL)
    *
    * @param string $val The value of the address
    *
    * @return VpnServer
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
        return $this;
    }
    /**
    * Gets the description
    * Description.
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
    * Description.
    *
    * @param string $val The value of the description
    *
    * @return VpnServer
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    /**
    * Gets the isDefaultServer
    * Default server.
    *
    * @return bool The isDefaultServer
    */
    public function getIsDefaultServer()
    {
        if (array_key_exists("isDefaultServer", $this->_propDict)) {
            return $this->_propDict["isDefaultServer"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isDefaultServer
    * Default server.
    *
    * @param bool $val The value of the isDefaultServer
    *
    * @return VpnServer
    */
    public function setIsDefaultServer($val)
    {
        $this->_propDict["isDefaultServer"] = $val;
        return $this;
    }
}
