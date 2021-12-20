<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSSystemExtension File
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
* MacOSSystemExtension class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSSystemExtension extends Entity
{
    /**
    * Gets the bundleId
    * Gets or sets the bundle identifier of the system extension.
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
    * Gets or sets the bundle identifier of the system extension.
    *
    * @param string $val The value of the bundleId
    *
    * @return MacOSSystemExtension
    */
    public function setBundleId($val)
    {
        $this->_propDict["bundleId"] = $val;
        return $this;
    }
    /**
    * Gets the teamIdentifier
    * Gets or sets the team identifier that was used to sign the system extension.
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
    * Gets or sets the team identifier that was used to sign the system extension.
    *
    * @param string $val The value of the teamIdentifier
    *
    * @return MacOSSystemExtension
    */
    public function setTeamIdentifier($val)
    {
        $this->_propDict["teamIdentifier"] = $val;
        return $this;
    }
}
