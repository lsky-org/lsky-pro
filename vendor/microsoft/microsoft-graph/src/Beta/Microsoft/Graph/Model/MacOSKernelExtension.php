<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSKernelExtension File
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
* MacOSKernelExtension class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSKernelExtension extends Entity
{
    /**
    * Gets the bundleId
    * Bundle ID of the kernel extension.
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
    * Bundle ID of the kernel extension.
    *
    * @param string $val The value of the bundleId
    *
    * @return MacOSKernelExtension
    */
    public function setBundleId($val)
    {
        $this->_propDict["bundleId"] = $val;
        return $this;
    }
    /**
    * Gets the teamIdentifier
    * The team identifier that was used to sign the kernel extension.
    *
    * @return string The teamIdentifier
    */
    public function getTeamIdentifier()
    {
        if (array_key_exists("teamIdentifier", $this->_propDict)) {
            return $this->_propDict["teamIdentifier"];
        } else {
            return null;
        }
    }

    /**
    * Sets the teamIdentifier
    * The team identifier that was used to sign the kernel extension.
    *
    * @param string $val The value of the teamIdentifier
    *
    * @return MacOSKernelExtension
    */
    public function setTeamIdentifier($val)
    {
        $this->_propDict["teamIdentifier"] = $val;
        return $this;
    }
}
