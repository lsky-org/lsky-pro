<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ObjectDefinition File
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
* ObjectDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ObjectDefinition extends Entity
{

    /**
    * Gets the attributes
    *
    * @return AttributeDefinition The attributes
    */
    public function getAttributes()
    {
        if (array_key_exists("attributes", $this->_propDict)) {
            if (is_a($this->_propDict["attributes"], "\Beta\Microsoft\Graph\Model\AttributeDefinition")) {
                return $this->_propDict["attributes"];
            } else {
                $this->_propDict["attributes"] = new AttributeDefinition($this->_propDict["attributes"]);
                return $this->_propDict["attributes"];
            }
        }
        return null;
    }

    /**
    * Sets the attributes
    *
    * @param AttributeDefinition $val The value to assign to the attributes
    *
    * @return ObjectDefinition The ObjectDefinition
    */
    public function setAttributes($val)
    {
        $this->_propDict["attributes"] = $val;
         return $this;
    }

    /**
    * Gets the metadata
    *
    * @return MetadataEntry The metadata
    */
    public function getMetadata()
    {
        if (array_key_exists("metadata", $this->_propDict)) {
            if (is_a($this->_propDict["metadata"], "\Beta\Microsoft\Graph\Model\MetadataEntry")) {
                return $this->_propDict["metadata"];
            } else {
                $this->_propDict["metadata"] = new MetadataEntry($this->_propDict["metadata"]);
                return $this->_propDict["metadata"];
            }
        }
        return null;
    }

    /**
    * Sets the metadata
    *
    * @param MetadataEntry $val The value to assign to the metadata
    *
    * @return ObjectDefinition The ObjectDefinition
    */
    public function setMetadata($val)
    {
        $this->_propDict["metadata"] = $val;
         return $this;
    }
    /**
    * Gets the name
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
    *
    * @param string $val The value of the name
    *
    * @return ObjectDefinition
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    /**
    * Gets the supportedApis
    *
    * @return string The supportedApis
    */
    public function getSupportedApis()
    {
        if (array_key_exists("supportedApis", $this->_propDict)) {
            return $this->_propDict["supportedApis"];
        } else {
            return null;
        }
    }

    /**
    * Sets the supportedApis
    *
    * @param string $val The value of the supportedApis
    *
    * @return ObjectDefinition
    */
    public function setSupportedApis($val)
    {
        $this->_propDict["supportedApis"] = $val;
        return $this;
    }
}
