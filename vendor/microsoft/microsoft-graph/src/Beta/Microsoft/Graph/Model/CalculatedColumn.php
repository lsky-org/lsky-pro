<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CalculatedColumn File
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
* CalculatedColumn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CalculatedColumn extends Entity
{
    /**
    * Gets the format
    * For dateTime output types, the format of the value. Must be one of dateOnly or dateTime.
    *
    * @return string The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            return $this->_propDict["format"];
        } else {
            return null;
        }
    }

    /**
    * Sets the format
    * For dateTime output types, the format of the value. Must be one of dateOnly or dateTime.
    *
    * @param string $val The value of the format
    *
    * @return CalculatedColumn
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
        return $this;
    }
    /**
    * Gets the formula
    * The formula used to compute the value for this column.
    *
    * @return string The formula
    */
    public function getFormula()
    {
        if (array_key_exists("formula", $this->_propDict)) {
            return $this->_propDict["formula"];
        } else {
            return null;
        }
    }

    /**
    * Sets the formula
    * The formula used to compute the value for this column.
    *
    * @param string $val The value of the formula
    *
    * @return CalculatedColumn
    */
    public function setFormula($val)
    {
        $this->_propDict["formula"] = $val;
        return $this;
    }
    /**
    * Gets the outputType
    * The output type used to format values in this column. Must be one of boolean, currency, dateTime, number, or text.
    *
    * @return string The outputType
    */
    public function getOutputType()
    {
        if (array_key_exists("outputType", $this->_propDict)) {
            return $this->_propDict["outputType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the outputType
    * The output type used to format values in this column. Must be one of boolean, currency, dateTime, number, or text.
    *
    * @param string $val The value of the outputType
    *
    * @return CalculatedColumn
    */
    public function setOutputType($val)
    {
        $this->_propDict["outputType"] = $val;
        return $this;
    }
}
