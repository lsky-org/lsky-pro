<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FilterOperatorSchema File
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
* FilterOperatorSchema class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FilterOperatorSchema extends Entity
{
    /**
    * Gets the arity
    * Arity of the operator. Possible values are: Binary, Unary. The default is Binary.
    *
    * @return ScopeOperatorType The arity
    */
    public function getArity()
    {
        if (array_key_exists("arity", $this->_propDict)) {
            if (is_a($this->_propDict["arity"], "\Beta\Microsoft\Graph\Model\ScopeOperatorType")) {
                return $this->_propDict["arity"];
            } else {
                $this->_propDict["arity"] = new ScopeOperatorType($this->_propDict["arity"]);
                return $this->_propDict["arity"];
            }
        }
        return null;
    }
    
    /**
    * Sets the arity
    * Arity of the operator. Possible values are: Binary, Unary. The default is Binary.
    *
    * @param ScopeOperatorType $val The arity
    *
    * @return FilterOperatorSchema
    */
    public function setArity($val)
    {
        $this->_propDict["arity"] = $val;
        return $this;
    }
    
    /**
    * Gets the multivaluedComparisonType
    * Possible values are: All, Any. Applies only to multivalued attributes. All means that all values must satisfy the condition. Any means that at least one value has to satisfy the condition. The default is All.
    *
    * @return ScopeOperatorMultiValuedComparisonType The multivaluedComparisonType
    */
    public function getMultivaluedComparisonType()
    {
        if (array_key_exists("multivaluedComparisonType", $this->_propDict)) {
            if (is_a($this->_propDict["multivaluedComparisonType"], "\Beta\Microsoft\Graph\Model\ScopeOperatorMultiValuedComparisonType")) {
                return $this->_propDict["multivaluedComparisonType"];
            } else {
                $this->_propDict["multivaluedComparisonType"] = new ScopeOperatorMultiValuedComparisonType($this->_propDict["multivaluedComparisonType"]);
                return $this->_propDict["multivaluedComparisonType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the multivaluedComparisonType
    * Possible values are: All, Any. Applies only to multivalued attributes. All means that all values must satisfy the condition. Any means that at least one value has to satisfy the condition. The default is All.
    *
    * @param ScopeOperatorMultiValuedComparisonType $val The multivaluedComparisonType
    *
    * @return FilterOperatorSchema
    */
    public function setMultivaluedComparisonType($val)
    {
        $this->_propDict["multivaluedComparisonType"] = $val;
        return $this;
    }
    

     /** 
     * Gets the supportedAttributeTypes
    * Attribute types supported by the operator. Possible values are: Boolean, Binary, Reference, Integer, String.
     *
     * @return array The supportedAttributeTypes
     */
    public function getSupportedAttributeTypes()
    {
        if (array_key_exists("supportedAttributeTypes", $this->_propDict)) {
           return $this->_propDict["supportedAttributeTypes"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the supportedAttributeTypes
    * Attribute types supported by the operator. Possible values are: Boolean, Binary, Reference, Integer, String.
    *
    * @param AttributeType $val The supportedAttributeTypes
    *
    * @return FilterOperatorSchema
    */
    public function setSupportedAttributeTypes($val)
    {
		$this->_propDict["supportedAttributeTypes"] = $val;
        return $this;
    }
    
}
