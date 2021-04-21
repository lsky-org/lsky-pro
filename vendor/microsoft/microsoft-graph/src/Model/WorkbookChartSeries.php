<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChartSeries File
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
* WorkbookChartSeries class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookChartSeries extends Entity
{
    /**
    * Gets the name
    * Represents the name of a series in a chart.
    *
    * @return string The name
    */
    public function getName()
    {
        if (array_key_exists("name", $this->_propDict)) {
            return $this->_propDict["name"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the name
    * Represents the name of a series in a chart.
    *
    * @param string $val The name
    *
    * @return WorkbookChartSeries
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the format
    * Represents the formatting of a chart series, which includes fill and line formatting. Read-only.
    *
    * @return WorkbookChartSeriesFormat The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            if (is_a($this->_propDict["format"], "\Microsoft\Graph\Model\WorkbookChartSeriesFormat")) {
                return $this->_propDict["format"];
            } else {
                $this->_propDict["format"] = new WorkbookChartSeriesFormat($this->_propDict["format"]);
                return $this->_propDict["format"];
            }
        }
        return null;
    }
    
    /**
    * Sets the format
    * Represents the formatting of a chart series, which includes fill and line formatting. Read-only.
    *
    * @param WorkbookChartSeriesFormat $val The format
    *
    * @return WorkbookChartSeries
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
        return $this;
    }
    

     /** 
     * Gets the points
    * Represents a collection of all points in the series. Read-only.
     *
     * @return array The points
     */
    public function getPoints()
    {
        if (array_key_exists("points", $this->_propDict)) {
           return $this->_propDict["points"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the points
    * Represents a collection of all points in the series. Read-only.
    *
    * @param WorkbookChartPoint $val The points
    *
    * @return WorkbookChartSeries
    */
    public function setPoints($val)
    {
		$this->_propDict["points"] = $val;
        return $this;
    }
    
}
