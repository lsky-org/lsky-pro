<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookTable File
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
* WorkbookTable class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookTable extends Entity
{
    /**
    * Gets the highlightFirstColumn
    * Indicates whether the first column contains special formatting.
    *
    * @return bool The highlightFirstColumn
    */
    public function getHighlightFirstColumn()
    {
        if (array_key_exists("highlightFirstColumn", $this->_propDict)) {
            return $this->_propDict["highlightFirstColumn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the highlightFirstColumn
    * Indicates whether the first column contains special formatting.
    *
    * @param bool $val The highlightFirstColumn
    *
    * @return WorkbookTable
    */
    public function setHighlightFirstColumn($val)
    {
        $this->_propDict["highlightFirstColumn"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the highlightLastColumn
    * Indicates whether the last column contains special formatting.
    *
    * @return bool The highlightLastColumn
    */
    public function getHighlightLastColumn()
    {
        if (array_key_exists("highlightLastColumn", $this->_propDict)) {
            return $this->_propDict["highlightLastColumn"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the highlightLastColumn
    * Indicates whether the last column contains special formatting.
    *
    * @param bool $val The highlightLastColumn
    *
    * @return WorkbookTable
    */
    public function setHighlightLastColumn($val)
    {
        $this->_propDict["highlightLastColumn"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the legacyId
    * Legacy Id used in older Excle clients. The value of the identifier remains the same even when the table is renamed. This property should be interpreted as an opaque string value and should not be parsed to any other type. Read-only.
    *
    * @return string The legacyId
    */
    public function getLegacyId()
    {
        if (array_key_exists("legacyId", $this->_propDict)) {
            return $this->_propDict["legacyId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the legacyId
    * Legacy Id used in older Excle clients. The value of the identifier remains the same even when the table is renamed. This property should be interpreted as an opaque string value and should not be parsed to any other type. Read-only.
    *
    * @param string $val The legacyId
    *
    * @return WorkbookTable
    */
    public function setLegacyId($val)
    {
        $this->_propDict["legacyId"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    * Name of the table.
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
    * Name of the table.
    *
    * @param string $val The name
    *
    * @return WorkbookTable
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the showBandedColumns
    * Indicates whether the columns show banded formatting in which odd columns are highlighted differently from even ones to make reading the table easier.
    *
    * @return bool The showBandedColumns
    */
    public function getShowBandedColumns()
    {
        if (array_key_exists("showBandedColumns", $this->_propDict)) {
            return $this->_propDict["showBandedColumns"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the showBandedColumns
    * Indicates whether the columns show banded formatting in which odd columns are highlighted differently from even ones to make reading the table easier.
    *
    * @param bool $val The showBandedColumns
    *
    * @return WorkbookTable
    */
    public function setShowBandedColumns($val)
    {
        $this->_propDict["showBandedColumns"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the showBandedRows
    * Indicates whether the rows show banded formatting in which odd rows are highlighted differently from even ones to make reading the table easier.
    *
    * @return bool The showBandedRows
    */
    public function getShowBandedRows()
    {
        if (array_key_exists("showBandedRows", $this->_propDict)) {
            return $this->_propDict["showBandedRows"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the showBandedRows
    * Indicates whether the rows show banded formatting in which odd rows are highlighted differently from even ones to make reading the table easier.
    *
    * @param bool $val The showBandedRows
    *
    * @return WorkbookTable
    */
    public function setShowBandedRows($val)
    {
        $this->_propDict["showBandedRows"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the showFilterButton
    * Indicates whether the filter buttons are visible at the top of each column header. Setting this is only allowed if the table contains a header row.
    *
    * @return bool The showFilterButton
    */
    public function getShowFilterButton()
    {
        if (array_key_exists("showFilterButton", $this->_propDict)) {
            return $this->_propDict["showFilterButton"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the showFilterButton
    * Indicates whether the filter buttons are visible at the top of each column header. Setting this is only allowed if the table contains a header row.
    *
    * @param bool $val The showFilterButton
    *
    * @return WorkbookTable
    */
    public function setShowFilterButton($val)
    {
        $this->_propDict["showFilterButton"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the showHeaders
    * Indicates whether the header row is visible or not. This value can be set to show or remove the header row.
    *
    * @return bool The showHeaders
    */
    public function getShowHeaders()
    {
        if (array_key_exists("showHeaders", $this->_propDict)) {
            return $this->_propDict["showHeaders"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the showHeaders
    * Indicates whether the header row is visible or not. This value can be set to show or remove the header row.
    *
    * @param bool $val The showHeaders
    *
    * @return WorkbookTable
    */
    public function setShowHeaders($val)
    {
        $this->_propDict["showHeaders"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the showTotals
    * Indicates whether the total row is visible or not. This value can be set to show or remove the total row.
    *
    * @return bool The showTotals
    */
    public function getShowTotals()
    {
        if (array_key_exists("showTotals", $this->_propDict)) {
            return $this->_propDict["showTotals"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the showTotals
    * Indicates whether the total row is visible or not. This value can be set to show or remove the total row.
    *
    * @param bool $val The showTotals
    *
    * @return WorkbookTable
    */
    public function setShowTotals($val)
    {
        $this->_propDict["showTotals"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the style
    * Constant value that represents the Table style. Possible values are: TableStyleLight1 thru TableStyleLight21, TableStyleMedium1 thru TableStyleMedium28, TableStyleStyleDark1 thru TableStyleStyleDark11. A custom user-defined style present in the workbook can also be specified.
    *
    * @return string The style
    */
    public function getStyle()
    {
        if (array_key_exists("style", $this->_propDict)) {
            return $this->_propDict["style"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the style
    * Constant value that represents the Table style. Possible values are: TableStyleLight1 thru TableStyleLight21, TableStyleMedium1 thru TableStyleMedium28, TableStyleStyleDark1 thru TableStyleStyleDark11. A custom user-defined style present in the workbook can also be specified.
    *
    * @param string $val The style
    *
    * @return WorkbookTable
    */
    public function setStyle($val)
    {
        $this->_propDict["style"] = $val;
        return $this;
    }
    

     /** 
     * Gets the columns
    * Represents a collection of all the columns in the table. Read-only.
     *
     * @return array The columns
     */
    public function getColumns()
    {
        if (array_key_exists("columns", $this->_propDict)) {
           return $this->_propDict["columns"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the columns
    * Represents a collection of all the columns in the table. Read-only.
    *
    * @param WorkbookTableColumn $val The columns
    *
    * @return WorkbookTable
    */
    public function setColumns($val)
    {
		$this->_propDict["columns"] = $val;
        return $this;
    }
    

     /** 
     * Gets the rows
    * Represents a collection of all the rows in the table. Read-only.
     *
     * @return array The rows
     */
    public function getRows()
    {
        if (array_key_exists("rows", $this->_propDict)) {
           return $this->_propDict["rows"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the rows
    * Represents a collection of all the rows in the table. Read-only.
    *
    * @param WorkbookTableRow $val The rows
    *
    * @return WorkbookTable
    */
    public function setRows($val)
    {
		$this->_propDict["rows"] = $val;
        return $this;
    }
    
    /**
    * Gets the sort
    * Represents the sorting for the table. Read-only.
    *
    * @return WorkbookTableSort The sort
    */
    public function getSort()
    {
        if (array_key_exists("sort", $this->_propDict)) {
            if (is_a($this->_propDict["sort"], "\Beta\Microsoft\Graph\Model\WorkbookTableSort")) {
                return $this->_propDict["sort"];
            } else {
                $this->_propDict["sort"] = new WorkbookTableSort($this->_propDict["sort"]);
                return $this->_propDict["sort"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sort
    * Represents the sorting for the table. Read-only.
    *
    * @param WorkbookTableSort $val The sort
    *
    * @return WorkbookTable
    */
    public function setSort($val)
    {
        $this->_propDict["sort"] = $val;
        return $this;
    }
    
    /**
    * Gets the worksheet
    * The worksheet containing the current table. Read-only.
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
    * The worksheet containing the current table. Read-only.
    *
    * @param WorkbookWorksheet $val The worksheet
    *
    * @return WorkbookTable
    */
    public function setWorksheet($val)
    {
        $this->_propDict["worksheet"] = $val;
        return $this;
    }
    
}
