<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChartTitle File
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
* WorkbookChartTitle class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookChartTitle extends Entity
{
    /**
    * Gets the overlay
    * Boolean value representing if the chart title will overlay the chart or not.
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
    * Boolean value representing if the chart title will overlay the chart or not.
    *
    * @param bool $val The overlay
    *
    * @return WorkbookChartTitle
    */
    public function setOverlay($val)
    {
        $this->_propDict["overlay"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the text
    * Represents the title text of a chart.
    *
    * @return string The text
    */
    public function getText()
    {
        if (array_key_exists("text", $this->_propDict)) {
            return $this->_propDict["text"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the text
    * Represents the title text of a chart.
    *
    * @param string $val The text
    *
    * @return WorkbookChartTitle
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
        return $this;
    }
    
    /**
    * Gets the visible
    * A boolean value the represents the visibility of a chart title object.
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
    * A boolean value the represents the visibility of a chart title object.
    *
    * @param bool $val The visible
    *
    * @return WorkbookChartTitle
    */
    public function setVisible($val)
    {
        $this->_propDict["visible"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the format
    * Represents the formatting of a chart title, which includes fill and font formatting. Read-only.
    *
    * @return WorkbookChartTitleFormat The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            if (is_a($this->_propDict["format"], "\Microsoft\Graph\Model\WorkbookChartTitleFormat")) {
                return $this->_propDict["format"];
            } else {
                $this->_propDict["format"] = new WorkbookChartTitleFormat($this->_propDict["format"]);
                return $this->_propDict["format"];
            }
        }
        return null;
    }
    
    /**
    * Sets the format
    * Represents the formatting of a chart title, which includes fill and font formatting. Read-only.
    *
    * @param WorkbookChartTitleFormat $val The format
    *
    * @return WorkbookChartTitle
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
        return $this;
    }
    
}
