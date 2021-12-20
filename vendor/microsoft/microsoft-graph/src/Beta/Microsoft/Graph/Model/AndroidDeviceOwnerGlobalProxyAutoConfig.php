<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerGlobalProxyAutoConfig File
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
* AndroidDeviceOwnerGlobalProxyAutoConfig class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerGlobalProxyAutoConfig extends AndroidDeviceOwnerGlobalProxy
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.androidDeviceOwnerGlobalProxyAutoConfig");
    }

    /**
    * Gets the proxyAutoConfigURL
    * The proxy auto-config URL
    *
    * @return string The proxyAutoConfigURL
    */
    public function getProxyAutoConfigURL()
    {
        if (array_key_exists("proxyAutoConfigURL", $this->_propDict)) {
            return $this->_propDict["proxyAutoConfigURL"];
        } else {
            return null;
        }
    }

    /**
    * Sets the proxyAutoConfigURL
    * The proxy auto-config URL
    *
    * @param string $val The value of the proxyAutoConfigURL
    *
    * @return AndroidDeviceOwnerGlobalProxyAutoConfig
    */
    public function setProxyAutoConfigURL($val)
    {
        $this->_propDict["proxyAutoConfigURL"] = $val;
        return $this;
    }
}
