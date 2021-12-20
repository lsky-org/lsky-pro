<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VariableManagementConditionExpression File
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
* VariableManagementConditionExpression class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VariableManagementConditionExpression extends ManagementConditionExpressionModel
{
    /**
    * Gets the managementConditionId
    * The management condition id that is used to evaluate the expression.
    *
    * @return string The managementConditionId
    */
    public function getManagementConditionId()
    {
        if (array_key_exists("managementConditionId", $this->_propDict)) {
            return $this->_propDict["managementConditionId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the managementConditionId
    * The management condition id that is used to evaluate the expression.
    *
    * @param string $val The value of the managementConditionId
    *
    * @return VariableManagementConditionExpression
    */
    public function setManagementConditionId($val)
    {
        $this->_propDict["managementConditionId"] = $val;
        return $this;
    }
}
