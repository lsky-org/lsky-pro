<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ExpressionInputObject File
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
* ExpressionInputObject class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ExpressionInputObject extends Entity
{

    /**
    * Gets the definition
    * Definition of the test object.
    *
    * @return ObjectDefinition The definition
    */
    public function getDefinition()
    {
        if (array_key_exists("definition", $this->_propDict)) {
            if (is_a($this->_propDict["definition"], "\Beta\Microsoft\Graph\Model\ObjectDefinition")) {
                return $this->_propDict["definition"];
            } else {
                $this->_propDict["definition"] = new ObjectDefinition($this->_propDict["definition"]);
                return $this->_propDict["definition"];
            }
        }
        return null;
    }

    /**
    * Sets the definition
    * Definition of the test object.
    *
    * @param ObjectDefinition $val The value to assign to the definition
    *
    * @return ExpressionInputObject The ExpressionInputObject
    */
    public function setDefinition($val)
    {
        $this->_propDict["definition"] = $val;
         return $this;
    }

    /**
    * Gets the expressionInputObjectProperties
    * Property values of the test object.
    *
    * @return StringKeyObjectValuePair The expressionInputObjectProperties
    */
    public function getExpressionInputObjectProperties()
    {
        if (array_key_exists("properties", $this->_propDict)) {
            if (is_a($this->_propDict["properties"], "\Beta\Microsoft\Graph\Model\StringKeyObjectValuePair")) {
                return $this->_propDict["properties"];
            } else {
                $this->_propDict["properties"] = new StringKeyObjectValuePair($this->_propDict["properties"]);
                return $this->_propDict["properties"];
            }
        }
        return null;
    }

    /**
    * Sets the expressionInputObjectProperties
    * Property values of the test object.
    *
    * @param StringKeyObjectValuePair $val The value to assign to the properties
    *
    * @return ExpressionInputObject The ExpressionInputObject
    */
    public function setExpressionInputObjectProperties($val)
    {
        $this->_propDict["properties"] = $val;
         return $this;
    }
}
