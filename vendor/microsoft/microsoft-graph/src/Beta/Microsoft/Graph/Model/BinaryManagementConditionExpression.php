<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BinaryManagementConditionExpression File
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
* BinaryManagementConditionExpression class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BinaryManagementConditionExpression extends ManagementConditionExpressionModel
{

    /**
    * Gets the firstOperand
    * The first operand of the binary operation.
    *
    * @return ManagementConditionExpressionModel The firstOperand
    */
    public function getFirstOperand()
    {
        if (array_key_exists("firstOperand", $this->_propDict)) {
            if (is_a($this->_propDict["firstOperand"], "\Beta\Microsoft\Graph\Model\ManagementConditionExpressionModel")) {
                return $this->_propDict["firstOperand"];
            } else {
                $this->_propDict["firstOperand"] = new ManagementConditionExpressionModel($this->_propDict["firstOperand"]);
                return $this->_propDict["firstOperand"];
            }
        }
        return null;
    }

    /**
    * Sets the firstOperand
    * The first operand of the binary operation.
    *
    * @param ManagementConditionExpressionModel $val The value to assign to the firstOperand
    *
    * @return BinaryManagementConditionExpression The BinaryManagementConditionExpression
    */
    public function setFirstOperand($val)
    {
        $this->_propDict["firstOperand"] = $val;
         return $this;
    }

    /**
    * Gets the operator
    * The operator used in the evaluation of the binary operation. Possible values are: or, and.
    *
    * @return BinaryManagementConditionExpressionOperatorType The operator
    */
    public function getOperator()
    {
        if (array_key_exists("operator", $this->_propDict)) {
            if (is_a($this->_propDict["operator"], "\Beta\Microsoft\Graph\Model\BinaryManagementConditionExpressionOperatorType")) {
                return $this->_propDict["operator"];
            } else {
                $this->_propDict["operator"] = new BinaryManagementConditionExpressionOperatorType($this->_propDict["operator"]);
                return $this->_propDict["operator"];
            }
        }
        return null;
    }

    /**
    * Sets the operator
    * The operator used in the evaluation of the binary operation. Possible values are: or, and.
    *
    * @param BinaryManagementConditionExpressionOperatorType $val The value to assign to the operator
    *
    * @return BinaryManagementConditionExpression The BinaryManagementConditionExpression
    */
    public function setOperator($val)
    {
        $this->_propDict["operator"] = $val;
         return $this;
    }

    /**
    * Gets the secondOperand
    * The second operand of the binary operation.
    *
    * @return ManagementConditionExpressionModel The secondOperand
    */
    public function getSecondOperand()
    {
        if (array_key_exists("secondOperand", $this->_propDict)) {
            if (is_a($this->_propDict["secondOperand"], "\Beta\Microsoft\Graph\Model\ManagementConditionExpressionModel")) {
                return $this->_propDict["secondOperand"];
            } else {
                $this->_propDict["secondOperand"] = new ManagementConditionExpressionModel($this->_propDict["secondOperand"]);
                return $this->_propDict["secondOperand"];
            }
        }
        return null;
    }

    /**
    * Sets the secondOperand
    * The second operand of the binary operation.
    *
    * @param ManagementConditionExpressionModel $val The value to assign to the secondOperand
    *
    * @return BinaryManagementConditionExpression The BinaryManagementConditionExpression
    */
    public function setSecondOperand($val)
    {
        $this->_propDict["secondOperand"] = $val;
         return $this;
    }
}
