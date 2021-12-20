<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChartLegend File
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
* WorkbookChartLegend class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookChartLegend extends Entity
{
    /**
    * Gets the overlay
    * Boolean value for whether the chart legend should overlap with the main body of the chart.
    *
    * @return bool The overlay
    */
    public function getOverlay()
    {
        if (array_key_exists("overlay", $this->_propDict)) {
            return $this->_propDict["overlay"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the overlay
    * Boolean value for whether the chart legend should overlap with the main body of the chart.
    *
    * @param bool $val The overlay
    *
    * @return WorkbookChartLegend
    */
    public function setOverlay($val)
    {
        $this->_propDict["overlay"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the position
    * Represents the position of the legend on the chart. The possible values are: Top, Bottom, Left, Right, Corner, Custom.
    *
    * @return string The position
    */
    public function getPosition()
    {
        if (array_key_exists("position", $this->_propDict)) {
            return $this->_propDict["position"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the position
    * Represents the position of the legend on the chart. The possible values are: Top, Bottom, Left, Right, Corner, Custom.
    *
    * @param string $val The position
    *
    * @return WorkbookChartLegend
    */
    public function setPosition($val)
    {
        $this->_propDict["position"] = $val;
        return $this;
    }
    
    /**
    * Gets the visible
    * A boolean value the represents the visibility of a ChartLegend object.
    *
    * @return bool The visible
    */
    public function getVisible()
    {
        if (array_key_exists("visible", $this->_propDict)) {
            return $this->_propDict["visible"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the visible
    * A boolean value the represents the visibility of a ChartLegend object.
    *
    * @param bool $val The visible
    *
    * @return WorkbookChartLegend
    */
    public function setVisible($val)
    {
        $this->_propDict["visible"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the format
    * Represents the formatting of a chart legend, which includes fill and font formatting. Read-only.
    *
    * @return WorkbookChartLegendFormat The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            if (is_a($this->_propDict["format"], "\Beta\Microsoft\Graph\Model\WorkbookChartLegendFormat")) {
                return $this->_propDict["format"];
            } else {
                $this->_propDict["format"] = new WorkbookChartLegendFormat($this->_propDict["format"]);
                return $this->_propDict["format"];
            }
        }
        return null;
    }
    
    /**
    * Sets the format
    * Represents the formatting of a chart legend, which includes fill and font formatting. Read-only.
    *
    * @param WorkbookChartLegendFormat $val The format
    *
    * @return WorkbookChartLegend
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
        return $this;
    }
    
}
