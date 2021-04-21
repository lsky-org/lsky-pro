<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerGlobalProxyDirect File
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
* AndroidDeviceOwnerGlobalProxyDirect class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerGlobalProxyDirect extends AndroidDeviceOwnerGlobalProxy
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.androidDeviceOwnerGlobalProxyDirect");
    }

    /**
    * Gets the excludedHosts
    * The excluded hosts
    *
    * @return string The excludedHosts
    */
    public function getExcludedHosts()
    {
        if (array_key_exists("excludedHosts", $this->_propDict)) {
            return $this->_propDict["excludedHosts"];
        } else {
            return null;
        }
    }

    /**
    * Sets the excludedHosts
    * The excluded hosts
    *
    * @param string $val The value of the excludedHosts
    *
    * @return AndroidDeviceOwnerGlobalProxyDirect
    */
    public function setExcludedHosts($val)
    {
        $this->_propDict["excludedHosts"] = $val;
        return $this;
    }
    /**
    * Gets the host
    * The host name
    *
    * @return string The host
    */
    public function getHost()
    {
        if (array_key_exists("host", $this->_propDict)) {
            return $this->_propDict["host"];
        } else {
            return null;
        }
    }

    /**
    * Sets the host
    * The host name
    *
    * @param string $val The value of the host
    *
    * @return AndroidDeviceOwnerGlobalProxyDirect
    */
    public function setHost($val)
    {
        $this->_propDict["host"] = $val;
        return $this;
    }
    /**
    * Gets the port
    * The port
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
    * The port
    *
    * @param int $val The value of the port
    *
    * @return AndroidDeviceOwnerGlobalProxyDirect
    */
    public function setPort($val)
    {
        $this->_propDict["port"] = $val;
        return $this;
    }
}
