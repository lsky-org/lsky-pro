<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookRangeFormat File
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
* WorkbookRangeFormat class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookRangeFormat extends Entity
{
    /**
    * Gets the columnWidth
    * Gets or sets the width of all colums within the range. If the column widths are not uniform, null will be returned.
    *
    * @return float The columnWidth
    */
    public function getColumnWidth()
    {
        if (array_key_exists("columnWidth", $this->_propDict)) {
            return $this->_propDict["columnWidth"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the columnWidth
    * Gets or sets the width of all colums within the range. If the column widths are not uniform, null will be returned.
    *
    * @param float $val The columnWidth
    *
    * @return WorkbookRangeFormat
    */
    public function setColumnWidth($val)
    {
        $this->_propDict["columnWidth"] = $val;
        return $this;
    }
    
    /**
    * Gets the horizontalAlignment
    * Represents the horizontal alignment for the specified object. Possible values are: General, Left, Center, Right, Fill, Justify, CenterAcrossSelection, Distributed.
    *
    * @return string The horizontalAlignment
    */
    public function getHorizontalAlignment()
    {
        if (array_key_exists("horizontalAlignment", $this->_propDict)) {
            return $this->_propDict["horizontalAlignment"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the horizontalAlignment
    * Represents the horizontal alignment for the specified object. Possible values are: General, Left, Center, Right, Fill, Justify, CenterAcrossSelection, Distributed.
    *
    * @param string $val The horizontalAlignment
    *
    * @return WorkbookRangeFormat
    */
    public function setHorizontalAlignment($val)
    {
        $this->_propDict["horizontalAlignment"] = $val;
        return $this;
    }
    
    /**
    * Gets the rowHeight
    * Gets or sets the height of all rows in the range. If the row heights are not uniform null will be returned.
    *
    * @return float The rowHeight
    */
    public function getRowHeight()
    {
        if (array_key_exists("rowHeight", $this->_propDict)) {
            return $this->_propDict["rowHeight"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the rowHeight
    * Gets or sets the height of all rows in the range. If the row heights are not uniform null will be returned.
    *
    * @param float $val The rowHeight
    *
    * @return WorkbookRangeFormat
    */
    public function setRowHeight($val)
    {
        $this->_propDict["rowHeight"] = $val;
        return $this;
    }
    
    /**
    * Gets the verticalAlignment
    * Represents the vertical alignment for the specified object. Possible values are: Top, Center, Bottom, Justify, Distributed.
    *
    * @return string The verticalAlignment
    */
    public function getVerticalAlignment()
    {
        if (array_key_exists("verticalAlignment", $this->_propDict)) {
            return $this->_propDict["verticalAlignment"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the verticalAlignment
    * Represents the vertical alignment for the specified object. Possible values are: Top, Center, Bottom, Justify, Distributed.
    *
    * @param string $val The verticalAlignment
    *
    * @return WorkbookRangeFormat
    */
    public function setVerticalAlignment($val)
    {
        $this->_propDict["verticalAlignment"] = $val;
        return $this;
    }
    
    /**
    * Gets the wrapText
    * Indicates if Excel wraps the text in the object. A null value indicates that the entire range doesn't have uniform wrap setting
    *
    * @return bool The wrapText
    */
    public function getWrapText()
    {
        if (array_key_exists("wrapText", $this->_propDict)) {
            return $this->_propDict["wrapText"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the wrapText
    * Indicates if Excel wraps the text in the object. A null value indicates that the entire range doesn't have uniform wrap setting
    *
    * @param bool $val The wrapText
    *
    * @return WorkbookRangeFormat
    */
    public function setWrapText($val)
    {
        $this->_propDict["wrapText"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the borders
    * Collection of border objects that apply to the overall range selected Read-only.
     *
     * @return array The borders
     */
    public function getBorders()
    {
        if (array_key_exists("borders", $this->_propDict)) {
           return $this->_propDict["borders"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the borders
    * Collection of border objects that apply to the overall range selected Read-only.
    *
    * @param WorkbookRangeBorder $val The borders
    *
    * @return WorkbookRangeFormat
    */
    public function setBorders($val)
    {
		$this->_propDict["borders"] = $val;
        return $this;
    }
    
    /**
    * Gets the fill
    * Returns the fill object defined on the overall range. Read-only.
    *
    * @return WorkbookRangeFill The fill
    */
    public function getFill()
    {
        if (array_key_exists("fill", $this->_propDict)) {
            if (is_a($this->_propDict["fill"], "\Beta\Microsoft\Graph\Model\WorkbookRangeFill")) {
                return $this->_propDict["fill"];
            } else {
                $this->_propDict["fill"] = new WorkbookRangeFill($this->_propDict["fill"]);
                return $this->_propDict["fill"];
            }
        }
        return null;
    }
    
    /**
    * Sets the fill
    * Returns the fill object defined on the overall range. Read-only.
    *
    * @param WorkbookRangeFill $val The fill
    *
    * @return WorkbookRangeFormat
    */
    public function setFill($val)
    {
        $this->_propDict["fill"] = $val;
        return $this;
    }
    
    /**
    * Gets the font
    * Returns the font object defined on the overall range selected Read-only.
    *
    * @return WorkbookRangeFont The font
    */
    public function getFont()
    {
        if (array_key_exists("font", $this->_propDict)) {
            if (is_a($this->_propDict["font"], "\Beta\Microsoft\Graph\Model\WorkbookRangeFont")) {
                return $this->_propDict["font"];
            } else {
                $this->_propDict["font"] = new WorkbookRangeFont($this->_propDict["font"]);
                return $this->_propDict["font"];
            }
        }
        return null;
    }
    
    /**
    * Sets the font
    * Returns the font object defined on the overall range selected Read-only.
    *
    * @param WorkbookRangeFont $val The font
    *
    * @return WorkbookRangeFormat
    */
    public function setFont($val)
    {
        $this->_propDict["font"] = $val;
        return $this;
    }
    
    /**
    * Gets the protection
    * Returns the format protection object for a range. Read-only.
    *
    * @return WorkbookFormatProtection The protection
    */
    public function getProtection()
    {
        if (array_key_exists("protection", $this->_propDict)) {
            if (is_a($this->_propDict["protection"], "\Beta\Microsoft\Graph\Model\WorkbookFormatProtection")) {
                return $this->_propDict["protection"];
            } else {
                $this->_propDict["protection"] = new WorkbookFormatProtection($this->_propDict["protection"]);
                return $this->_propDict["protection"];
            }
        }
        return null;
    }
    
    /**
    * Sets the protection
    * Returns the format protection object for a range. Read-only.
    *
    * @param WorkbookFormatProtection $val The protection
    *
    * @return WorkbookRangeFormat
    */
    public function setProtection($val)
    {
        $this->_propDict["protection"] = $val;
        return $this;
    }
    
}
