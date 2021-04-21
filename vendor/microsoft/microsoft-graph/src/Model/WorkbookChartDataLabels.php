<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChartDataLabels File
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
* WorkbookChartDataLabels class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookChartDataLabels extends Entity
{
    /**
    * Gets the position
    * DataLabelPosition value that represents the position of the data label. The possible values are: None, Center, InsideEnd, InsideBase, OutsideEnd, Left, Right, Top, Bottom, BestFit, Callout.
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
    * DataLabelPosition value that represents the position of the data label. The possible values are: None, Center, InsideEnd, InsideBase, OutsideEnd, Left, Right, Top, Bottom, BestFit, Callout.
    *
    * @param string $val The position
    *
    * @return WorkbookChartDataLabels
    */
    public function setPosition($val)
    {
        $this->_propDict["position"] = $val;
        return $this;
    }
    
    /**
    * Gets the separator
    * String representing the separator used for the data labels on a chart.
    *
    * @return string The separator
    */
    public function getSeparator()
    {
        if (array_key_exists("separator", $this->_propDict)) {
            return $this->_propDict["separator"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the separator
    * String representing the separator used for the data labels on a chart.
    *
    * @param string $val The separator
    *
    * @return WorkbookChartDataLabels
    */
    public function setSeparator($val)
    {
        $this->_propDict["separator"] = $val;
        return $this;
    }
    
    /**
    * Gets the showBubbleSize
    * Boolean value representing if the data label bubble size is visible or not.
    *
    * @return bool The showBubbleSize
    */
    public function getShowBubbleSize()
    {
        if (array_key_exists("showBubbleSize", $this->_propDict)) {
            return $this->_propDict["showBubbleSize"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the showBubbleSize
    * Boolean value representing if the data label bubble size is visible or not.
    *
    * @param bool $val The showBubbleSize
    *
    * @return WorkbookChartDataLabels
    */
    public function setShowBubbleSize($val)
    {
        $this->_propDict["showBubbleSize"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the showCategoryName
    * Boolean value representing if the data label category name is visible or not.
    *
    * @return bool The showCategoryName
    */
    public function getShowCategoryName()
    {
        if (array_key_exists("showCategoryName", $this->_propDict)) {
            return $this->_propDict["showCategoryName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the showCategoryName
    * Boolean value representing if the data label category name is visible or not.
    *
    * @param bool $val The showCategoryName
    *
    * @return WorkbookChartDataLabels
    */
    public function setShowCategoryName($val)
    {
        $this->_propDict["showCategoryName"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the showLegendKey
    * Boolean value representing if the data label legend key is visible or not.
    *
    * @return bool The showLegendKey
    */
    public function getShowLegendKey()
    {
        if (array_key_exists("showLegendKey", $this->_propDict)) {
            return $this->_propDict["showLegendKey"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the showLegendKey
    * Boolean value representing if the data label legend key is visible or not.
    *
    * @param bool $val The showLegendKey
    *
    * @return WorkbookChartDataLabels
    */
    public function setShowLegendKey($val)
    {
        $this->_propDict["showLegendKey"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the showPercentage
    * Boolean value representing if the data label percentage is visible or not.
    *
    * @return bool The showPercentage
    */
    public function getShowPercentage()
    {
        if (array_key_exists("showPercentage", $this->_propDict)) {
            return $this->_propDict["showPercentage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the showPercentage
    * Boolean value representing if the data label percentage is visible or not.
    *
    * @param bool $val The showPercentage
    *
    * @return WorkbookChartDataLabels
    */
    public function setShowPercentage($val)
    {
        $this->_propDict["showPercentage"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the showSeriesName
    * Boolean value representing if the data label series name is visible or not.
    *
    * @return bool The showSeriesName
    */
    public function getShowSeriesName()
    {
        if (array_key_exists("showSeriesName", $this->_propDict)) {
            return $this->_propDict["showSeriesName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the showSeriesName
    * Boolean value representing if the data label series name is visible or not.
    *
    * @param bool $val The showSeriesName
    *
    * @return WorkbookChartDataLabels
    */
    public function setShowSeriesName($val)
    {
        $this->_propDict["showSeriesName"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the showValue
    * Boolean value representing if the data label value is visible or not.
    *
    * @return bool The showValue
    */
    public function getShowValue()
    {
        if (array_key_exists("showValue", $this->_propDict)) {
            return $this->_propDict["showValue"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the showValue
    * Boolean value representing if the data label value is visible or not.
    *
    * @param bool $val The showValue
    *
    * @return WorkbookChartDataLabels
    */
    public function setShowValue($val)
    {
        $this->_propDict["showValue"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the format
    * Represents the format of chart data labels, which includes fill and font formatting. Read-only.
    *
    * @return WorkbookChartDataLabelFormat The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            if (is_a($this->_propDict["format"], "\Microsoft\Graph\Model\WorkbookChartDataLabelFormat")) {
                return $this->_propDict["format"];
            } else {
                $this->_propDict["format"] = new WorkbookChartDataLabelFormat($this->_propDict["format"]);
                return $this->_propDict["format"];
            }
        }
        return null;
    }
    
    /**
    * Sets the format
    * Represents the format of chart data labels, which includes fill and font formatting. Read-only.
    *
    * @param WorkbookChartDataLabelFormat $val The format
    *
    * @return WorkbookChartDataLabels
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
        return $this;
    }
    
}
