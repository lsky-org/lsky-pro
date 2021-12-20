<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AssignmentFilterValidationResult File
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
* AssignmentFilterValidationResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AssignmentFilterValidationResult extends Entity
{
    /**
    * Gets the isValidRule
    * Indicator to valid or invalid rule.
    *
    * @return bool The isValidRule
    */
    public function getIsValidRule()
    {
        if (array_key_exists("isValidRule", $this->_propDict)) {
            return $this->_propDict["isValidRule"];
        } else {
            return null;
        }
    }

    /**
    * Sets the isValidRule
    * Indicator to valid or invalid rule.
    *
    * @param bool $val The value of the isValidRule
    *
    * @return AssignmentFilterValidationResult
    */
    public function setIsValidRule($val)
    {
        $this->_propDict["isValidRule"] = $val;
        return $this;
    }
}
