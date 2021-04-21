<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChart File
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
* WorkbookChart class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookChart extends Entity
{
    /**
    * Gets the height
    * Represents the height, in points, of the chart object.
    *
    * @return float The height
    */
    public function getHeight()
    {
        if (array_key_exists("height", $this->_propDict)) {
            return $this->_propDict["height"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the height
    * Represents the height, in points, of the chart object.
    *
    * @param float $val The height
    *
    * @return WorkbookChart
    */
    public function setHeight($val)
    {
        $this->_propDict["height"] = $val;
        return $this;
    }
    
    /**
    * Gets the left
    * The distance, in points, from the left side of the chart to the worksheet origin.
    *
    * @return float The left
    */
    public function getLeft()
    {
        if (array_key_exists("left", $this->_propDict)) {
            return $this->_propDict["left"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the left
    * The distance, in points, from the left side of the chart to the worksheet origin.
    *
    * @param float $val The left
    *
    * @return WorkbookChart
    */
    public function setLeft($val)
    {
        $this->_propDict["left"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    * Represents the name of a chart object.
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
    * Represents the name of a chart object.
    *
    * @param string $val The name
    *
    * @return WorkbookChart
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the top
    * Represents the distance, in points, from the top edge of the object to the top of row 1 (on a worksheet) or the top of the chart area (on a chart).
    *
    * @return float The top
    */
    public function getTop()
    {
        if (array_key_exists("top", $this->_propDict)) {
            return $this->_propDict["top"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the top
    * Represents the distance, in points, from the top edge of the object to the top of row 1 (on a worksheet) or the top of the chart area (on a chart).
    *
    * @param float $val The top
    *
    * @return WorkbookChart
    */
    public function setTop($val)
    {
        $this->_propDict["top"] = $val;
        return $this;
    }
    
    /**
    * Gets the width
    * Represents the width, in points, of the chart object.
    *
    * @return float The width
    */
    public function getWidth()
    {
        if (array_key_exists("width", $this->_propDict)) {
            return $this->_propDict["width"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the width
    * Represents the width, in points, of the chart object.
    *
    * @param float $val The width
    *
    * @return WorkbookChart
    */
    public function setWidth($val)
    {
        $this->_propDict["width"] = $val;
        return $this;
    }
    
    /**
    * Gets the axes
    * Represents chart axes. Read-only.
    *
    * @return WorkbookChartAxes The axes
    */
    public function getAxes()
    {
        if (array_key_exists("axes", $this->_propDict)) {
            if (is_a($this->_propDict["axes"], "\Beta\Microsoft\Graph\Model\WorkbookChartAxes")) {
                return $this->_propDict["axes"];
            } else {
                $this->_propDict["axes"] = new WorkbookChartAxes($this->_propDict["axes"]);
                return $this->_propDict["axes"];
            }
        }
        return null;
    }
    
    /**
    * Sets the axes
    * Represents chart axes. Read-only.
    *
    * @param WorkbookChartAxes $val The axes
    *
    * @return WorkbookChart
    */
    public function setAxes($val)
    {
        $this->_propDict["axes"] = $val;
        return $this;
    }
    
    /**
    * Gets the dataLabels
    * Represents the datalabels on the chart. Read-only.
    *
    * @return WorkbookChartDataLabels The dataLabels
    */
    public function getDataLabels()
    {
        if (array_key_exists("dataLabels", $this->_propDict)) {
            if (is_a($this->_propDict["dataLabels"], "\Beta\Microsoft\Graph\Model\WorkbookChartDataLabels")) {
                return $this->_propDict["dataLabels"];
            } else {
                $this->_propDict["dataLabels"] = new WorkbookChartDataLabels($this->_propDict["dataLabels"]);
                return $this->_propDict["dataLabels"];
            }
        }
        return null;
    }
    
    /**
    * Sets the dataLabels
    * Represents the datalabels on the chart. Read-only.
    *
    * @param WorkbookChartDataLabels $val The dataLabels
    *
    * @return WorkbookChart
    */
    public function setDataLabels($val)
    {
        $this->_propDict["dataLabels"] = $val;
        return $this;
    }
    
    /**
    * Gets the format
    * Encapsulates the format properties for the chart area. Read-only.
    *
    * @return WorkbookChartAreaFormat The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            if (is_a($this->_propDict["format"], "\Beta\Microsoft\Graph\Model\WorkbookChartAreaFormat")) {
                return $this->_propDict["format"];
            } else {
                $this->_propDict["format"] = new WorkbookChartAreaFormat($this->_propDict["format"]);
                return $this->_propDict["format"];
            }
        }
        return null;
    }
    
    /**
    * Sets the format
    * Encapsulates the format properties for the chart area. Read-only.
    *
    * @param WorkbookChartAreaFormat $val The format
    *
    * @return WorkbookChart
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
        return $this;
    }
    
    /**
    * Gets the legend
    * Represents the legend for the chart. Read-only.
    *
    * @return WorkbookChartLegend The legend
    */
    public function getLegend()
    {
        if (array_key_exists("legend", $this->_propDict)) {
            if (is_a($this->_propDict["legend"], "\Beta\Microsoft\Graph\Model\WorkbookChartLegend")) {
                return $this->_propDict["legend"];
            } else {
                $this->_propDict["legend"] = new WorkbookChartLegend($this->_propDict["legend"]);
                return $this->_propDict["legend"];
            }
        }
        return null;
    }
    
    /**
    * Sets the legend
    * Represents the legend for the chart. Read-only.
    *
    * @param WorkbookChartLegend $val The legend
    *
    * @return WorkbookChart
    */
    public function setLegend($val)
    {
        $this->_propDict["legend"] = $val;
        return $this;
    }
    

     /** 
     * Gets the series
    * Represents either a single series or collection of series in the chart. Read-only.
     *
     * @return array The series
     */
    public function getSeries()
    {
        if (array_key_exists("series", $this->_propDict)) {
           return $this->_propDict["series"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the series
    * Represents either a single series or collection of series in the chart. Read-only.
    *
    * @param WorkbookChartSeries $val The series
    *
    * @return WorkbookChart
    */
    public function setSeries($val)
    {
		$this->_propDict["series"] = $val;
        return $this;
    }
    
    /**
    * Gets the title
    * Represents the title of the specified chart, including the text, visibility, position and formating of the title. Read-only.
    *
    * @return WorkbookChartTitle The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            if (is_a($this->_propDict["title"], "\Beta\Microsoft\Graph\Model\WorkbookChartTitle")) {
                return $this->_propDict["title"];
            } else {
                $this->_propDict["title"] = new WorkbookChartTitle($this->_propDict["title"]);
                return $this->_propDict["title"];
            }
        }
        return null;
    }
    
    /**
    * Sets the title
    * Represents the title of the specified chart, including the text, visibility, position and formating of the title. Read-only.
    *
    * @param WorkbookChartTitle $val The title
    *
    * @return WorkbookChart
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
    
    /**
    * Gets the worksheet
    * The worksheet containing the current chart. Read-only.
    *
    * @return WorkbookWorksheet The worksheet
    */
    public function getWorksheet()
    {
        if (array_key_exists("worksheet", $this->_propDict)) {
            if (is_a($this->_propDict["worksheet"], "\Beta\Microsoft\Graph\Model\WorkbookWorksheet")) {
                return $this->_propDict["worksheet"];
            } else {
                $this->_propDict["worksheet"] = new WorkbookWorksheet($this->_propDict["worksheet"]);
                return $this->_propDict["worksheet"];
            }
        }
        return null;
    }
    
    /**
    * Sets the worksheet
    * The worksheet containing the current chart. Read-only.
    *
    * @param WorkbookWorksheet $val The worksheet
    *
    * @return WorkbookChart
    */
    public function setWorksheet($val)
    {
        $this->_propDict["worksheet"] = $val;
        return $this;
    }
    
}
