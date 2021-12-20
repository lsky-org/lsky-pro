<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* StringKeyAttributeMappingSourceValuePair File
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
* StringKeyAttributeMappingSourceValuePair class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class StringKeyAttributeMappingSourceValuePair extends Entity
{
    /**
    * Gets the key
    * The name of the parameter.
    *
    * @return string The key
    */
    public function getKey()
    {
        if (array_key_exists("key", $this->_propDict)) {
            return $this->_propDict["key"];
        } else {
            return null;
        }
    }

    /**
    * Sets the key
    * The name of the parameter.
    *
    * @param string $val The value of the key
    *
    * @return StringKeyAttributeMappingSourceValuePair
    */
    public function setKey($val)
    {
        $this->_propDict["key"] = $val;
        return $this;
    }

    /**
    * Gets the value
    * The value of the parameter.
    *
    * @return AttributeMappingSource The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            if (is_a($this->_propDict["value"], "\Beta\Microsoft\Graph\Model\AttributeMappingSource")) {
                return $this->_propDict["value"];
            } else {
                $this->_propDict["value"] = new AttributeMappingSource($this->_propDict["value"]);
                return $this->_propDict["value"];
            }
        }
        return null;
    }

    /**
    * Sets the value
    * The value of the parameter.
    *
    * @param AttributeMappingSource $val The value to assign to the value
    *
    * @return StringKeyAttributeMappingSourceValuePair The StringKeyAttributeMappingSourceValuePair
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
         return $this;
    }
}
