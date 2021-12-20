<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NumberColumn File
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
* NumberColumn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NumberColumn extends Entity
{
    /**
    * Gets the decimalPlaces
    * How many decimal places to display. See below for information about the possible values.
    *
    * @return string The decimalPlaces
    */
    public function getDecimalPlaces()
    {
        if (array_key_exists("decimalPlaces", $this->_propDict)) {
            return $this->_propDict["decimalPlaces"];
        } else {
            return null;
        }
    }

    /**
    * Sets the decimalPlaces
    * How many decimal places to display. See below for information about the possible values.
    *
    * @param string $val The value of the decimalPlaces
    *
    * @return NumberColumn
    */
    public function setDecimalPlaces($val)
    {
        $this->_propDict["decimalPlaces"] = $val;
        return $this;
    }
    /**
    * Gets the displayAs
    * How the value should be presented in the UX. Must be one of number or percentage. If unspecified, treated as number.
    *
    * @return string The displayAs
    */
    public function getDisplayAs()
    {
        if (array_key_exists("displayAs", $this->_propDict)) {
            return $this->_propDict["displayAs"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayAs
    * How the value should be presented in the UX. Must be one of number or percentage. If unspecified, treated as number.
    *
    * @param string $val The value of the displayAs
    *
    * @return NumberColumn
    */
    public function setDisplayAs($val)
    {
        $this->_propDict["displayAs"] = $val;
        return $this;
    }
    /**
    * Gets the maximum
    * The maximum permitted value.
    *
    * @return float The maximum
    */
    public function getMaximum()
    {
        if (array_key_exists("maximum", $this->_propDict)) {
            return $this->_propDict["maximum"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximum
    * The maximum permitted value.
    *
    * @param float $val The value of the maximum
    *
    * @return NumberColumn
    */
    public function setMaximum($val)
    {
        $this->_propDict["maximum"] = $val;
        return $this;
    }
    /**
    * Gets the minimum
    * The minimum permitted value.
    *
    * @return float The minimum
    */
    public function getMinimum()
    {
        if (array_key_exists("minimum", $this->_propDict)) {
            return $this->_propDict["minimum"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimum
    * The minimum permitted value.
    *
    * @param float $val The value of the minimum
    *
    * @return NumberColumn
    */
    public function setMinimum($val)
    {
        $this->_propDict["minimum"] = $val;
        return $this;
    }
}
