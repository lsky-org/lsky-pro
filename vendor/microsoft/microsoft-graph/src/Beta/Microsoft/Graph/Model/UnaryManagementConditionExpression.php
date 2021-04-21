<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UnaryManagementConditionExpression File
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
* UnaryManagementConditionExpression class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UnaryManagementConditionExpression extends ManagementConditionExpressionModel
{

    /**
    * Gets the operand
    * The operand of the unary operation.
    *
    * @return ManagementConditionExpressionModel The operand
    */
    public function getOperand()
    {
        if (array_key_exists("operand", $this->_propDict)) {
            if (is_a($this->_propDict["operand"], "\Beta\Microsoft\Graph\Model\ManagementConditionExpressionModel")) {
                return $this->_propDict["operand"];
            } else {
                $this->_propDict["operand"] = new ManagementConditionExpressionModel($this->_propDict["operand"]);
                return $this->_propDict["operand"];
            }
        }
        return null;
    }

    /**
    * Sets the operand
    * The operand of the unary operation.
    *
    * @param ManagementConditionExpressionModel $val The value to assign to the operand
    *
    * @return UnaryManagementConditionExpression The UnaryManagementConditionExpression
    */
    public function setOperand($val)
    {
        $this->_propDict["operand"] = $val;
         return $this;
    }

    /**
    * Gets the operator
    * The operator used in the evaluation of the unary operation. Possible values are: not.
    *
    * @return UnaryManagementConditionExpressionOperatorType The operator
    */
    public function getOperator()
    {
        if (array_key_exists("operator", $this->_propDict)) {
            if (is_a($this->_propDict["operator"], "\Beta\Microsoft\Graph\Model\UnaryManagementConditionExpressionOperatorType")) {
                return $this->_propDict["operator"];
            } else {
                $this->_propDict["operator"] = new UnaryManagementConditionExpressionOperatorType($this->_propDict["operator"]);
                return $this->_propDict["operator"];
            }
        }
        return null;
    }

    /**
    * Sets the operator
    * The operator used in the evaluation of the unary operation. Possible values are: not.
    *
    * @param UnaryManagementConditionExpressionOperatorType $val The value to assign to the operator
    *
    * @return UnaryManagementConditionExpression The UnaryManagementConditionExpression
    */
    public function setOperator($val)
    {
        $this->_propDict["operator"] = $val;
         return $this;
    }
}
