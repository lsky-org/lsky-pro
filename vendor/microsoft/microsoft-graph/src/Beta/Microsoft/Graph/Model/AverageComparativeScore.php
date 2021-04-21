<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AverageComparativeScore File
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
* AverageComparativeScore class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AverageComparativeScore extends Entity
{
    /**
    * Gets the averageScore
    * Average score within specified basis.
    *
    * @return float The averageScore
    */
    public function getAverageScore()
    {
        if (array_key_exists("averageScore", $this->_propDict)) {
            return $this->_propDict["averageScore"];
        } else {
            return null;
        }
    }

    /**
    * Sets the averageScore
    * Average score within specified basis.
    *
    * @param float $val The value of the averageScore
    *
    * @return AverageComparativeScore
    */
    public function setAverageScore($val)
    {
        $this->_propDict["averageScore"] = $val;
        return $this;
    }
    /**
    * Gets the basis
    * Scope type. The possible values are: AllTenants, TotalSeats, IndustryTypes.
    *
    * @return string The basis
    */
    public function getBasis()
    {
        if (array_key_exists("basis", $this->_propDict)) {
            return $this->_propDict["basis"];
        } else {
            return null;
        }
    }

    /**
    * Sets the basis
    * Scope type. The possible values are: AllTenants, TotalSeats, IndustryTypes.
    *
    * @param string $val The value of the basis
    *
    * @return AverageComparativeScore
    */
    public function setBasis($val)
    {
        $this->_propDict["basis"] = $val;
        return $this;
    }
}
