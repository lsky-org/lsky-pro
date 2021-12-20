<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChartAxes File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

/**
* WorkbookChartAxes class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookChartAxes extends Entity
{
    /**
    * Gets the categoryAxis
    * Represents the category axis in a chart. Read-only.
    *
    * @return WorkbookChartAxis The categoryAxis
    */
    public function getCategoryAxis()
    {
        if (array_key_exists("categoryAxis", $this->_propDict)) {
            if (is_a($this->_propDict["categoryAxis"], "\Microsoft\Graph\Model\WorkbookChartAxis")) {
                return $this->_propDict["categoryAxis"];
            } else {
                $this->_propDict["categoryAxis"] = new WorkbookChartAxis($this->_propDict["categoryAxis"]);
                return $this->_propDict["categoryAxis"];
            }
        }
        return null;
    }
    
    /**
    * Sets the categoryAxis
    * Represents the category axis in a chart. Read-only.
    *
    * @param WorkbookChartAxis $val The categoryAxis
    *
    * @return WorkbookChartAxes
    */
    public function setCategoryAxis($val)
    {
        $this->_propDict["categoryAxis"] = $val;
        return $this;
    }
    
    /**
    * Gets the seriesAxis
    * Represents the series axis of a 3-dimensional chart. Read-only.
    *
    * @return WorkbookChartAxis The seriesAxis
    */
    public function getSeriesAxis()
    {
        if (array_key_exists("seriesAxis", $this->_propDict)) {
            if (is_a($this->_propDict["seriesAxis"], "\Microsoft\Graph\Model\WorkbookChartAxis")) {
                return $this->_propDict["seriesAxis"];
            } else {
                $this->_propDict["seriesAxis"] = new WorkbookChartAxis($this->_propDict["seriesAxis"]);
                return $this->_propDict["seriesAxis"];
            }
        }
        return null;
    }
    
    /**
    * Sets the seriesAxis
    * Represents the series axis of a 3-dimensional chart. Read-only.
    *
    * @param WorkbookChartAxis $val The seriesAxis
    *
    * @return WorkbookChartAxes
    */
    public function setSeriesAxis($val)
    {
        $this->_propDict["seriesAxis"] = $val;
        return $this;
    }
    
    /**
    * Gets the valueAxis
    * Represents the value axis in an axis. Read-only.
    *
    * @return WorkbookChartAxis The valueAxis
    */
    public function getValueAxis()
    {
        if (array_key_exists("valueAxis", $this->_propDict)) {
            if (is_a($this->_propDict["valueAxis"], "\Microsoft\Graph\Model\WorkbookChartAxis")) {
                return $this->_propDict["valueAxis"];
            } else {
                $this->_propDict["valueAxis"] = new WorkbookChartAxis($this->_propDict["valueAxis"]);
                return $this->_propDict["valueAxis"];
            }
        }
        return null;
    }
    
    /**
    * Sets the valueAxis
    * Represents the value axis in an axis. Read-only.
    *
    * @param WorkbookChartAxis $val The valueAxis
    *
    * @return WorkbookChartAxes
    */
    public function setValueAxis($val)
    {
        $this->_propDict["valueAxis"] = $val;
        return $this;
    }
    
}
