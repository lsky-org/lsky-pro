<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SpecifiedCaptiveNetworkPlugins File
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
* SpecifiedCaptiveNetworkPlugins class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SpecifiedCaptiveNetworkPlugins extends Entity
{
    /**
    * Gets the allowedBundleIdentifiers
    * Address of the IKEv2 server. Must be a FQDN, UserFQDN, network address, or ASN1DN
    *
    * @return string The allowedBundleIdentifiers
    */
    public function getAllowedBundleIdentifiers()
    {
        if (array_key_exists("allowedBundleIdentifiers", $this->_propDict)) {
            return $this->_propDict["allowedBundleIdentifiers"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowedBundleIdentifiers
    * Address of the IKEv2 server. Must be a FQDN, UserFQDN, network address, or ASN1DN
    *
    * @param string $val The value of the allowedBundleIdentifiers
    *
    * @return SpecifiedCaptiveNetworkPlugins
    */
    public function setAllowedBundleIdentifiers($val)
    {
        $this->_propDict["allowedBundleIdentifiers"] = $val;
        return $this;
    }
}
