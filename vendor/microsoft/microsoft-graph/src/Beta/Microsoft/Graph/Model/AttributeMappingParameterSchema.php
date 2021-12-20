<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttributeMappingParameterSchema File
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
* AttributeMappingParameterSchema class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttributeMappingParameterSchema extends Entity
{
    /**
    * Gets the allowMultipleOccurrences
    * The given parameter can be provided multiple times (for example, multiple input strings in the Concatenate(string,string,...) function).
    *
    * @return bool The allowMultipleOccurrences
    */
    public function getAllowMultipleOccurrences()
    {
        if (array_key_exists("allowMultipleOccurrences", $this->_propDict)) {
            return $this->_propDict["allowMultipleOccurrences"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowMultipleOccurrences
    * The given parameter can be provided multiple times (for example, multiple input strings in the Concatenate(string,string,...) function).
    *
    * @param bool $val The value of the allowMultipleOccurrences
    *
    * @return AttributeMappingParameterSchema
    */
    public function setAllowMultipleOccurrences($val)
    {
        $this->_propDict["allowMultipleOccurrences"] = $val;
        return $this;
    }
    /**
    * Gets the name
    * Parameter name.
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
    * Parameter name.
    *
    * @param string $val The value of the name
    *
    * @return AttributeMappingParameterSchema
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the required
    * true if the parameter is required; otherwise false.
    *
    * @return bool The required
    */
    public function getRequired()
    {
        if (array_key_exists("required", $this->_propDict)) {
            return $this->_propDict["required"];
        } else {
            return null;
        }
    }

    /**
    * Sets the required
    * true if the parameter is required; otherwise false.
    *
    * @param bool $val The value of the required
    *
    * @return AttributeMappingParameterSchema
    */
    public function setRequired($val)
    {
        $this->_propDict["required"] = $val;
        return $this;
    }

    /**
    * Gets the type
    * Possible values are: Boolean, Binary, Reference, Integer, String. Default is String.
    *
    * @return AttributeType The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            if (is_a($this->_propDict["type"], "\Beta\Microsoft\Graph\Model\AttributeType")) {
                return $this->_propDict["type"];
            } else {
                $this->_propDict["type"] = new AttributeType($this->_propDict["type"]);
                return $this->_propDict["type"];
            }
        }
        return null;
    }

    /**
    * Sets the type
    * Possible values are: Boolean, Binary, Reference, Integer, String. Default is String.
    *
    * @param AttributeType $val The value to assign to the type
    *
    * @return AttributeMappingParameterSchema The AttributeMappingParameterSchema
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
}
