<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChartAxis File
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
* WorkbookChartAxis class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookChartAxis extends Entity
{
    /**
    * Gets the majorUnit
    * Represents the interval between two major tick marks. Can be set to a numeric value or an empty string.  The returned value is always a number.
    *
    * @return string The majorUnit
    */
    public function getMajorUnit()
    {
        if (array_key_exists("majorUnit", $this->_propDict)) {
            return $this->_propDict["majorUnit"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the majorUnit
    * Represents the interval between two major tick marks. Can be set to a numeric value or an empty string.  The returned value is always a number.
    *
    * @param string $val The majorUnit
    *
    * @return WorkbookChartAxis
    */
    public function setMajorUnit($val)
    {
        $this->_propDict["majorUnit"] = $val;
        return $this;
    }
    
    /**
    * Gets the maximum
    * Represents the maximum value on the value axis.  Can be set to a numeric value or an empty string (for automatic axis values).  The returned value is always a number.
    *
    * @return string The maximum
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
    * Represents the maximum value on the value axis.  Can be set to a numeric value or an empty string (for automatic axis values).  The returned value is always a number.
    *
    * @param string $val The maximum
    *
    * @return WorkbookChartAxis
    */
    public function setMaximum($val)
    {
        $this->_propDict["maximum"] = $val;
        return $this;
    }
    
    /**
    * Gets the minimum
    * Represents the minimum value on the value axis. Can be set to a numeric value or an empty string (for automatic axis values).  The returned value is always a number.
    *
    * @return string The minimum
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
    * Represents the minimum value on the value axis. Can be set to a numeric value or an empty string (for automatic axis values).  The returned value is always a number.
    *
    * @param string $val The minimum
    *
    * @return WorkbookChartAxis
    */
    public function setMinimum($val)
    {
        $this->_propDict["minimum"] = $val;
        return $this;
    }
    
    /**
    * Gets the minorUnit
    * Represents the interval between two minor tick marks. 'Can be set to a numeric value or an empty string (for automatic axis values). The returned value is always a number.
    *
    * @return string The minorUnit
    */
    public function getMinorUnit()
    {
        if (array_key_exists("minorUnit", $this->_propDict)) {
            return $this->_propDict["minorUnit"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the minorUnit
    * Represents the interval between two minor tick marks. 'Can be set to a numeric value or an empty string (for automatic axis values). The returned value is always a number.
    *
    * @param string $val The minorUnit
    *
    * @return WorkbookChartAxis
    */
    public function setMinorUnit($val)
    {
        $this->_propDict["minorUnit"] = $val;
        return $this;
    }
    
    /**
    * Gets the format
    * Represents the formatting of a chart object, which includes line and font formatting. Read-only.
    *
    * @return WorkbookChartAxisFormat The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            if (is_a($this->_propDict["format"], "\Beta\Microsoft\Graph\Model\WorkbookChartAxisFormat")) {
                return $this->_propDict["format"];
            } else {
                $this->_propDict["format"] = new WorkbookChartAxisFormat($this->_propDict["format"]);
                return $this->_propDict["format"];
            }
        }
        return null;
    }
    
    /**
    * Sets the format
    * Represents the formatting of a chart object, which includes line and font formatting. Read-only.
    *
    * @param WorkbookChartAxisFormat $val The format
    *
    * @return WorkbookChartAxis
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
        return $this;
    }
    
    /**
    * Gets the majorGridlines
    * Returns a gridlines object that represents the major gridlines for the specified axis. Read-only.
    *
    * @return WorkbookChartGridlines The majorGridlines
    */
    public function getMajorGridlines()
    {
        if (array_key_exists("majorGridlines", $this->_propDict)) {
            if (is_a($this->_propDict["majorGridlines"], "\Beta\Microsoft\Graph\Model\WorkbookChartGridlines")) {
                return $this->_propDict["majorGridlines"];
            } else {
                $this->_propDict["majorGridlines"] = new WorkbookChartGridlines($this->_propDict["majorGridlines"]);
                return $this->_propDict["majorGridlines"];
            }
        }
        return null;
    }
    
    /**
    * Sets the majorGridlines
    * Returns a gridlines object that represents the major gridlines for the specified axis. Read-only.
    *
    * @param WorkbookChartGridlines $val The majorGridlines
    *
    * @return WorkbookChartAxis
    */
    public function setMajorGridlines($val)
    {
        $this->_propDict["majorGridlines"] = $val;
        return $this;
    }
    
    /**
    * Gets the minorGridlines
    * Returns a Gridlines object that represents the minor gridlines for the specified axis. Read-only.
    *
    * @return WorkbookChartGridlines The minorGridlines
    */
    public function getMinorGridlines()
    {
        if (array_key_exists("minorGridlines", $this->_propDict)) {
            if (is_a($this->_propDict["minorGridlines"], "\Beta\Microsoft\Graph\Model\WorkbookChartGridlines")) {
                return $this->_propDict["minorGridlines"];
            } else {
                $this->_propDict["minorGridlines"] = new WorkbookChartGridlines($this->_propDict["minorGridlines"]);
                return $this->_propDict["minorGridlines"];
            }
        }
        return null;
    }
    
    /**
    * Sets the minorGridlines
    * Returns a Gridlines object that represents the minor gridlines for the specified axis. Read-only.
    *
    * @param WorkbookChartGridlines $val The minorGridlines
    *
    * @return WorkbookChartAxis
    */
    public function setMinorGridlines($val)
    {
        $this->_propDict["minorGridlines"] = $val;
        return $this;
    }
    
    /**
    * Gets the title
    * Represents the axis title. Read-only.
    *
    * @return WorkbookChartAxisTitle The title
    */
    public function getTitle()
    {
        if (array_key_exists("title", $this->_propDict)) {
            if (is_a($this->_propDict["title"], "\Beta\Microsoft\Graph\Model\WorkbookChartAxisTitle")) {
                return $this->_propDict["title"];
            } else {
                $this->_propDict["title"] = new WorkbookChartAxisTitle($this->_propDict["title"]);
                return $this->_propDict["title"];
            }
        }
        return null;
    }
    
    /**
    * Sets the title
    * Represents the axis title. Read-only.
    *
    * @param WorkbookChartAxisTitle $val The title
    *
    * @return WorkbookChartAxis
    */
    public function setTitle($val)
    {
        $this->_propDict["title"] = $val;
        return $this;
    }
    
}
