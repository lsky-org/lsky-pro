<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AttributeDefinition File
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
* AttributeDefinition class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AttributeDefinition extends Entity
{
    /**
    * Gets the anchor
    * true if the attribute should be used as the anchor for the object. Anchor attributes must have a unique value identifying an object, and must be immutable. Default is false. One, and only one, of the object's attributes must be designated as the anchor to support synchronization.
    *
    * @return bool The anchor
    */
    public function getAnchor()
    {
        if (array_key_exists("anchor", $this->_propDict)) {
            return $this->_propDict["anchor"];
        } else {
            return null;
        }
    }

    /**
    * Sets the anchor
    * true if the attribute should be used as the anchor for the object. Anchor attributes must have a unique value identifying an object, and must be immutable. Default is false. One, and only one, of the object's attributes must be designated as the anchor to support synchronization.
    *
    * @param bool $val The value of the anchor
    *
    * @return AttributeDefinition
    */
    public function setAnchor($val)
    {
        $this->_propDict["anchor"] = $val;
        return $this;
    }

    /**
    * Gets the apiExpressions
    *
    * @return StringKeyStringValuePair The apiExpressions
    */
    public function getApiExpressions()
    {
        if (array_key_exists("apiExpressions", $this->_propDict)) {
            if (is_a($this->_propDict["apiExpressions"], "\Beta\Microsoft\Graph\Model\StringKeyStringValuePair")) {
                return $this->_propDict["apiExpressions"];
            } else {
                $this->_propDict["apiExpressions"] = new StringKeyStringValuePair($this->_propDict["apiExpressions"]);
                return $this->_propDict["apiExpressions"];
            }
        }
        return null;
    }

    /**
    * Sets the apiExpressions
    *
    * @param StringKeyStringValuePair $val The value to assign to the apiExpressions
    *
    * @return AttributeDefinition The AttributeDefinition
    */
    public function setApiExpressions($val)
    {
        $this->_propDict["apiExpressions"] = $val;
         return $this;
    }
    /**
    * Gets the caseExact
    * true if value of this attribute should be treated as case-sensitive. This setting affects how the synchronization engine detects changes for the attribute.
    *
    * @return bool The caseExact
    */
    public function getCaseExact()
    {
        if (array_key_exists("caseExact", $this->_propDict)) {
            return $this->_propDict["caseExact"];
        } else {
            return null;
        }
    }

    /**
    * Sets the caseExact
    * true if value of this attribute should be treated as case-sensitive. This setting affects how the synchronization engine detects changes for the attribute.
    *
    * @param bool $val The value of the caseExact
    *
    * @return AttributeDefinition
    */
    public function setCaseExact($val)
    {
        $this->_propDict["caseExact"] = $val;
        return $this;
    }
    /**
    * Gets the defaultValue
    *
    * @return string The defaultValue
    */
    public function getDefaultValue()
    {
        if (array_key_exists("defaultValue", $this->_propDict)) {
            return $this->_propDict["defaultValue"];
        } else {
            return null;
        }
    }

    /**
    * Sets the defaultValue
    *
    * @param string $val The value of the defaultValue
    *
    * @return AttributeDefinition
    */
    public function setDefaultValue($val)
    {
        $this->_propDict["defaultValue"] = $val;
        return $this;
    }
    /**
    * Gets the flowNullValues
    * 'true' to allow null values for attributes.
    *
    * @return bool The flowNullValues
    */
    public function getFlowNullValues()
    {
        if (array_key_exists("flowNullValues", $this->_propDict)) {
            return $this->_propDict["flowNullValues"];
        } else {
            return null;
        }
    }

    /**
    * Sets the flowNullValues
    * 'true' to allow null values for attributes.
    *
    * @param bool $val The value of the flowNullValues
    *
    * @return AttributeDefinition
    */
    public function setFlowNullValues($val)
    {
        $this->_propDict["flowNullValues"] = $val;
        return $this;
    }

    /**
    * Gets the metadata
    * Additional extension properties. Unless mentioned explicitly, metadata values should not be changed.
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
    * Additional extension properties. Unless mentioned explicitly, metadata values should not be changed.
    *
    * @param MetadataEntry $val The value to assign to the metadata
    *
    * @return AttributeDefinition The AttributeDefinition
    */
    public function setMetadata($val)
    {
        $this->_propDict["metadata"] = $val;
         return $this;
    }
    /**
    * Gets the multivalued
    * true if an attribute can have multiple values. Default is false.
    *
    * @return bool The multivalued
    */
    public function getMultivalued()
    {
        if (array_key_exists("multivalued", $this->_propDict)) {
            return $this->_propDict["multivalued"];
        } else {
            return null;
        }
    }

    /**
    * Sets the multivalued
    * true if an attribute can have multiple values. Default is false.
    *
    * @param bool $val The value of the multivalued
    *
    * @return AttributeDefinition
    */
    public function setMultivalued($val)
    {
        $this->_propDict["multivalued"] = $val;
        return $this;
    }

    /**
    * Gets the mutability
    * An attribute's mutability. Possible values are:  ReadWrite, ReadOnly, Immutable, WriteOnly. Default is ReadWrite.
    *
    * @return Mutability The mutability
    */
    public function getMutability()
    {
        if (array_key_exists("mutability", $this->_propDict)) {
            if (is_a($this->_propDict["mutability"], "\Beta\Microsoft\Graph\Model\Mutability")) {
                return $this->_propDict["mutability"];
            } else {
                $this->_propDict["mutability"] = new Mutability($this->_propDict["mutability"]);
                return $this->_propDict["mutability"];
            }
        }
        return null;
    }

    /**
    * Sets the mutability
    * An attribute's mutability. Possible values are:  ReadWrite, ReadOnly, Immutable, WriteOnly. Default is ReadWrite.
    *
    * @param Mutability $val The value to assign to the mutability
    *
    * @return AttributeDefinition The AttributeDefinition
    */
    public function setMutability($val)
    {
        $this->_propDict["mutability"] = $val;
         return $this;
    }
    /**
    * Gets the name
    * Name of the attribute. Must be unique within the object definition. Not nullable.
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
    * Name of the attribute. Must be unique within the object definition. Not nullable.
    *
    * @param string $val The value of the name
    *
    * @return AttributeDefinition
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }

    /**
    * Gets the referencedObjects
    * For attributes with reference type, lists referenced objects (for example, the manager attribute would list User as the referenced object).
    *
    * @return ReferencedObject The referencedObjects
    */
    public function getReferencedObjects()
    {
        if (array_key_exists("referencedObjects", $this->_propDict)) {
            if (is_a($this->_propDict["referencedObjects"], "\Beta\Microsoft\Graph\Model\ReferencedObject")) {
                return $this->_propDict["referencedObjects"];
            } else {
                $this->_propDict["referencedObjects"] = new ReferencedObject($this->_propDict["referencedObjects"]);
                return $this->_propDict["referencedObjects"];
            }
        }
        return null;
    }

    /**
    * Sets the referencedObjects
    * For attributes with reference type, lists referenced objects (for example, the manager attribute would list User as the referenced object).
    *
    * @param ReferencedObject $val The value to assign to the referencedObjects
    *
    * @return AttributeDefinition The AttributeDefinition
    */
    public function setReferencedObjects($val)
    {
        $this->_propDict["referencedObjects"] = $val;
         return $this;
    }
    /**
    * Gets the required
    * true if attribute is required. Object can not be created if any of the required attributes are missing. If during synchronization, the required attribute has no value, the default value will be used. If default the value was not set, synchronization will record an error.
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
    * true if attribute is required. Object can not be created if any of the required attributes are missing. If during synchronization, the required attribute has no value, the default value will be used. If default the value was not set, synchronization will record an error.
    *
    * @param bool $val The value of the required
    *
    * @return AttributeDefinition
    */
    public function setRequired($val)
    {
        $this->_propDict["required"] = $val;
        return $this;
    }

    /**
    * Gets the type
    * Attribute value type. Possible values are: String, Integer, Reference, Binary, Boolean,DateTime. Default is String.
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
    * Attribute value type. Possible values are: String, Integer, Reference, Binary, Boolean,DateTime. Default is String.
    *
    * @param AttributeType $val The value to assign to the type
    *
    * @return AttributeDefinition The AttributeDefinition
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
         return $this;
    }
}
