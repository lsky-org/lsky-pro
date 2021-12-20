<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* FilterClause File
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
* FilterClause class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class FilterClause extends Entity
{
    /**
    * Gets the operatorName
    * Name of the operator to be applied to the source and target operands. Must be one of the supported operators. Supported operators can be discovered.
    *
    * @return string The operatorName
    */
    public function getOperatorName()
    {
        if (array_key_exists("operatorName", $this->_propDict)) {
            return $this->_propDict["operatorName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operatorName
    * Name of the operator to be applied to the source and target operands. Must be one of the supported operators. Supported operators can be discovered.
    *
    * @param string $val The value of the operatorName
    *
    * @return FilterClause
    */
    public function setOperatorName($val)
    {
        $this->_propDict["operatorName"] = $val;
        return $this;
    }
    /**
    * Gets the sourceOperandName
    * Name of source operand (the operand being tested). The source operand name must match one of the attribute names on the source object.
    *
    * @return string The sourceOperandName
    */
    public function getSourceOperandName()
    {
        if (array_key_exists("sourceOperandName", $this->_propDict)) {
            return $this->_propDict["sourceOperandName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the sourceOperandName
    * Name of source operand (the operand being tested). The source operand name must match one of the attribute names on the source object.
    *
    * @param string $val The value of the sourceOperandName
    *
    * @return FilterClause
    */
    public function setSourceOperandName($val)
    {
        $this->_propDict["sourceOperandName"] = $val;
        return $this;
    }

    /**
    * Gets the targetOperand
    * Values that the source operand will be tested against.
    *
    * @return FilterOperand The targetOperand
    */
    public function getTargetOperand()
    {
        if (array_key_exists("targetOperand", $this->_propDict)) {
            if (is_a($this->_propDict["targetOperand"], "\Beta\Microsoft\Graph\Model\FilterOperand")) {
                return $this->_propDict["targetOperand"];
            } else {
                $this->_propDict["targetOperand"] = new FilterOperand($this->_propDict["targetOperand"]);
                return $this->_propDict["targetOperand"];
            }
        }
        return null;
    }

    /**
    * Sets the targetOperand
    * Values that the source operand will be tested against.
    *
    * @param FilterOperand $val The value to assign to the targetOperand
    *
    * @return FilterClause The FilterClause
    */
    public function setTargetOperand($val)
    {
        $this->_propDict["targetOperand"] = $val;
         return $this;
    }
}
