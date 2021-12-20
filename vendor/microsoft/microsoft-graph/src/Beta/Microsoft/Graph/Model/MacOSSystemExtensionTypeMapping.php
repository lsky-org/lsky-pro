<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSSystemExtensionTypeMapping File
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
* MacOSSystemExtensionTypeMapping class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSSystemExtensionTypeMapping extends Entity
{

    /**
    * Gets the allowedTypes
    * Gets or sets the allowed macOS system extension types. Possible values are: driverExtensionsAllowed, networkExtensionsAllowed, endpointSecurityExtensionsAllowed.
    *
    * @return MacOSSystemExtensionType The allowedTypes
    */
    public function getAllowedTypes()
    {
        if (array_key_exists("allowedTypes", $this->_propDict)) {
            if (is_a($this->_propDict["allowedTypes"], "\Beta\Microsoft\Graph\Model\MacOSSystemExtensionType")) {
                return $this->_propDict["allowedTypes"];
            } else {
                $this->_propDict["allowedTypes"] = new MacOSSystemExtensionType($this->_propDict["allowedTypes"]);
                return $this->_propDict["allowedTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the allowedTypes
    * Gets or sets the allowed macOS system extension types. Possible values are: driverExtensionsAllowed, networkExtensionsAllowed, endpointSecurityExtensionsAllowed.
    *
    * @param MacOSSystemExtensionType $val The value to assign to the allowedTypes
    *
    * @return MacOSSystemExtensionTypeMapping The MacOSSystemExtensionTypeMapping
    */
    public function setAllowedTypes($val)
    {
        $this->_propDict["allowedTypes"] = $val;
         return $this;
    }
    /**
    * Gets the teamIdentifier
    * Gets or sets the team identifier used to sign the system extension.
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
    * Gets or sets the team identifier used to sign the system extension.
    *
    * @param string $val The value of the teamIdentifier
    *
    * @return MacOSSystemExtensionTypeMapping
    */
    public function setTeamIdentifier($val)
    {
        $this->_propDict["teamIdentifier"] = $val;
        return $this;
    }
}
