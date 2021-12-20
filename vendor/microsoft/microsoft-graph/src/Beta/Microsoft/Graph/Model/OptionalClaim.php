<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OptionalClaim File
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
* OptionalClaim class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OptionalClaim extends Entity
{
    /**
    * Gets the additionalProperties
    * Additional properties of the claim. If a property exists in this collection, it modifies the behavior of the optional claim specified in the name property.
    *
    * @return string The additionalProperties
    */
    public function getAdditionalProperties()
    {
        if (array_key_exists("additionalProperties", $this->_propDict)) {
            return $this->_propDict["additionalProperties"];
        } else {
            return null;
        }
    }

    /**
    * Sets the additionalProperties
    * Additional properties of the claim. If a property exists in this collection, it modifies the behavior of the optional claim specified in the name property.
    *
    * @param string $val The value of the additionalProperties
    *
    * @return OptionalClaim
    */
    public function setAdditionalProperties($val)
    {
        $this->_propDict["additionalProperties"] = $val;
        return $this;
    }
    /**
    * Gets the essential
    * If the value is true, the claim specified by the client is necessary to ensure a smooth authorization experience for the specific task requested by the end user. The default value is false.
    *
    * @return bool The essential
    */
    public function getEssential()
    {
        if (array_key_exists("essential", $this->_propDict)) {
            return $this->_propDict["essential"];
        } else {
            return null;
        }
    }

    /**
    * Sets the essential
    * If the value is true, the claim specified by the client is necessary to ensure a smooth authorization experience for the specific task requested by the end user. The default value is false.
    *
    * @param bool $val The value of the essential
    *
    * @return OptionalClaim
    */
    public function setEssential($val)
    {
        $this->_propDict["essential"] = $val;
        return $this;
    }
    /**
    * Gets the name
    * The name of the optional claim.
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }

    /**
    * Sets the name
    * The name of the optional claim.
    *
    * @param string $val The value of the name
    *
    * @return OptionalClaim
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the source
    * The source (directory object) of the claim. There are predefined claims and user-defined claims from extension properties. If the source value is null, the claim is a predefined optional claim. If the source value is user, the value in the name property is the extension property from the user object.
    *
    * @return string The source
    */
    public function getSource()
    {
        if (array_key_exists("source", $this->_propDict)) {
            return $this->_propDict["source"];
        } else {
            return null;
        }
    }

    /**
    * Sets the source
    * The source (directory object) of the claim. There are predefined claims and user-defined claims from extension properties. If the source value is null, the claim is a predefined optional claim. If the source value is user, the value in the name property is the extension property from the user object.
    *
    * @param string $val The value of the source
    *
    * @return OptionalClaim
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
        return $this;
    }
}
