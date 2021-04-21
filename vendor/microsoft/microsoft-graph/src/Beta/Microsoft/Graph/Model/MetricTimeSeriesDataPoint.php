<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MetricTimeSeriesDataPoint File
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
* MetricTimeSeriesDataPoint class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MetricTimeSeriesDataPoint extends Entity
{

    /**
    * Gets the dateTime
    * Time of the metric time series data point
    *
    * @return \DateTime The dateTime
    */
    public function getDateTime()
    {
        if (array_key_exists("dateTime", $this->_propDict)) {
            if (is_a($this->_propDict["dateTime"], "\DateTime")) {
                return $this->_propDict["dateTime"];
            } else {
                $this->_propDict["dateTime"] = new \DateTime($this->_propDict["dateTime"]);
                return $this->_propDict["dateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the dateTime
    * Time of the metric time series data point
    *
    * @param \DateTime $val The value to assign to the dateTime
    *
    * @return MetricTimeSeriesDataPoint The MetricTimeSeriesDataPoint
    */
    public function setDateTime($val)
    {
        $this->_propDict["dateTime"] = $val;
         return $this;
    }
    /**
    * Gets the value
    * Value of the metric time series data point
    *
    * @return int The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }

    /**
    * Sets the value
    * Value of the metric time series data point
    *
    * @param int $val The value of the value
    *
    * @return MetricTimeSeriesDataPoint
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
}
