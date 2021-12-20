<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSFirewallApplication File
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
* MacOSFirewallApplication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSFirewallApplication extends Entity
{
    /**
    * Gets the allowsIncomingConnections
    * Whether or not incoming connections are allowed.
    *
    * @return bool The allowsIncomingConnections
    */
    public function getAllowsIncomingConnections()
    {
        if (array_key_exists("allowsIncomingConnections", $this->_propDict)) {
            return $this->_propDict["allowsIncomingConnections"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowsIncomingConnections
    * Whether or not incoming connections are allowed.
    *
    * @param bool $val The value of the allowsIncomingConnections
    *
    * @return MacOSFirewallApplication
    */
    public function setAllowsIncomingConnections($val)
    {
        $this->_propDict["allowsIncomingConnections"] = $val;
        return $this;
    }
    /**
    * Gets the bundleId
    * BundleId of the application.
    *
    * @return string The bundleId
    */
    public function getBundleId()
    {
        if (array_key_exists("bundleId", $this->_propDict)) {
            return $this->_propDict["bundleId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bundleId
    * BundleId of the application.
    *
    * @param string $val The value of the bundleId
    *
    * @return MacOSFirewallApplication
    */
    public function setBundleId($val)
    {
        $this->_propDict["bundleId"] = $val;
        return $this;
    }
}
