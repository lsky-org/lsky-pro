<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookRange File
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
* WorkbookRange class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookRange extends Entity
{
    /**
    * Gets the address
    * Represents the range reference in A1-style. Address value will contain the Sheet reference (e.g. Sheet1!A1:B4). Read-only.
    *
    * @return string The address
    */
    public function getAddress()
    {
        if (array_key_exists("address", $this->_propDict)) {
            return $this->_propDict["address"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the address
    * Represents the range reference in A1-style. Address value will contain the Sheet reference (e.g. Sheet1!A1:B4). Read-only.
    *
    * @param string $val The address
    *
    * @return WorkbookRange
    */
    public function setAddress($val)
    {
        $this->_propDict["address"] = $val;
        return $this;
    }
    
    /**
    * Gets the addressLocal
    * Represents range reference for the specified range in the language of the user. Read-only.
    *
    * @return string The addressLocal
    */
    public function getAddressLocal()
    {
        if (array_key_exists("addressLocal", $this->_propDict)) {
            return $this->_propDict["addressLocal"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the addressLocal
    * Represents range reference for the specified range in the language of the user. Read-only.
    *
    * @param string $val The addressLocal
    *
    * @return WorkbookRange
    */
    public function setAddressLocal($val)
    {
        $this->_propDict["addressLocal"] = $val;
        return $this;
    }
    
    /**
    * Gets the cellCount
    * Number of cells in the range. Read-only.
    *
    * @return int The cellCount
    */
    public function getCellCount()
    {
        if (array_key_exists("cellCount", $this->_propDict)) {
            return $this->_propDict["cellCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cellCount
    * Number of cells in the range. Read-only.
    *
    * @param int $val The cellCount
    *
    * @return WorkbookRange
    */
    public function setCellCount($val)
    {
        $this->_propDict["cellCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the columnCount
    * Represents the total number of columns in the range. Read-only.
    *
    * @return int The columnCount
    */
    public function getColumnCount()
    {
        if (array_key_exists("columnCount", $this->_propDict)) {
            return $this->_propDict["columnCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the columnCount
    * Represents the total number of columns in the range. Read-only.
    *
    * @param int $val The columnCount
    *
    * @return WorkbookRange
    */
    public function setColumnCount($val)
    {
        $this->_propDict["columnCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the columnHidden
    * Represents if all columns of the current range are hidden.
    *
    * @return bool The columnHidden
    */
    public function getColumnHidden()
    {
        if (array_key_exists("columnHidden", $this->_propDict)) {
            return $this->_propDict["columnHidden"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the columnHidden
    * Represents if all columns of the current range are hidden.
    *
    * @param bool $val The columnHidden
    *
    * @return WorkbookRange
    */
    public function setColumnHidden($val)
    {
        $this->_propDict["columnHidden"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the columnIndex
    * Represents the column number of the first cell in the range. Zero-indexed. Read-only.
    *
    * @return int The columnIndex
    */
    public function getColumnIndex()
    {
        if (array_key_exists("columnIndex", $this->_propDict)) {
            return $this->_propDict["columnIndex"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the columnIndex
    * Represents the column number of the first cell in the range. Zero-indexed. Read-only.
    *
    * @param int $val The columnIndex
    *
    * @return WorkbookRange
    */
    public function setColumnIndex($val)
    {
        $this->_propDict["columnIndex"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the formulas
    * Represents the formula in A1-style notation.
    *
    * @return string The formulas
    */
    public function getFormulas()
    {
        if (array_key_exists("formulas", $this->_propDict)) {
            return $this->_propDict["formulas"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the formulas
    * Represents the formula in A1-style notation.
    *
    * @param string $val The formulas
    *
    * @return WorkbookRange
    */
    public function setFormulas($val)
    {
        $this->_propDict["formulas"] = $val;
        return $this;
    }
    
    /**
    * Gets the formulasLocal
    * Represents the formula in A1-style notation, in the user's language and number-formatting locale.  For example, the English '=SUM(A1, 1.5)' formula would become '=SUMME(A1; 1,5)' in German.
    *
    * @return string The formulasLocal
    */
    public function getFormulasLocal()
    {
        if (array_key_exists("formulasLocal", $this->_propDict)) {
            return $this->_propDict["formulasLocal"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the formulasLocal
    * Represents the formula in A1-style notation, in the user's language and number-formatting locale.  For example, the English '=SUM(A1, 1.5)' formula would become '=SUMME(A1; 1,5)' in German.
    *
    * @param string $val The formulasLocal
    *
    * @return WorkbookRange
    */
    public function setFormulasLocal($val)
    {
        $this->_propDict["formulasLocal"] = $val;
        return $this;
    }
    
    /**
    * Gets the formulasR1C1
    * Represents the formula in R1C1-style notation.
    *
    * @return string The formulasR1C1
    */
    public function getFormulasR1C1()
    {
        if (array_key_exists("formulasR1C1", $this->_propDict)) {
            return $this->_propDict["formulasR1C1"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the formulasR1C1
    * Represents the formula in R1C1-style notation.
    *
    * @param string $val The formulasR1C1
    *
    * @return WorkbookRange
    */
    public function setFormulasR1C1($val)
    {
        $this->_propDict["formulasR1C1"] = $val;
        return $this;
    }
    
    /**
    * Gets the hidden
    * Represents if all cells of the current range are hidden. Read-only.
    *
    * @return bool The hidden
    */
    public function getHidden()
    {
        if (array_key_exists("hidden", $this->_propDict)) {
            return $this->_propDict["hidden"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hidden
    * Represents if all cells of the current range are hidden. Read-only.
    *
    * @param bool $val The hidden
    *
    * @return WorkbookRange
    */
    public function setHidden($val)
    {
        $this->_propDict["hidden"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the numberFormat
    * Represents Excel's number format code for the given cell.
    *
    * @return string The numberFormat
    */
    public function getNumberFormat()
    {
        if (array_key_exists("numberFormat", $this->_propDict)) {
            return $this->_propDict["numberFormat"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the numberFormat
    * Represents Excel's number format code for the given cell.
    *
    * @param string $val The numberFormat
    *
    * @return WorkbookRange
    */
    public function setNumberFormat($val)
    {
        $this->_propDict["numberFormat"] = $val;
        return $this;
    }
    
    /**
    * Gets the rowCount
    * Returns the total number of rows in the range. Read-only.
    *
    * @return int The rowCount
    */
    public function getRowCount()
    {
        if (array_key_exists("rowCount", $this->_propDict)) {
            return $this->_propDict["rowCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the rowCount
    * Returns the total number of rows in the range. Read-only.
    *
    * @param int $val The rowCount
    *
    * @return WorkbookRange
    */
    public function setRowCount($val)
    {
        $this->_propDict["rowCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the rowHidden
    * Represents if all rows of the current range are hidden.
    *
    * @return bool The rowHidden
    */
    public function getRowHidden()
    {
        if (array_key_exists("rowHidden", $this->_propDict)) {
            return $this->_propDict["rowHidden"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the rowHidden
    * Represents if all rows of the current range are hidden.
    *
    * @param bool $val The rowHidden
    *
    * @return WorkbookRange
    */
    public function setRowHidden($val)
    {
        $this->_propDict["rowHidden"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the rowIndex
    * Returns the row number of the first cell in the range. Zero-indexed. Read-only.
    *
    * @return int The rowIndex
    */
    public function getRowIndex()
    {
        if (array_key_exists("rowIndex", $this->_propDict)) {
            return $this->_propDict["rowIndex"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the rowIndex
    * Returns the row number of the first cell in the range. Zero-indexed. Read-only.
    *
    * @param int $val The rowIndex
    *
    * @return WorkbookRange
    */
    public function setRowIndex($val)
    {
        $this->_propDict["rowIndex"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the text
    * Text values of the specified range. The Text value will not depend on the cell width. The # sign substitution that happens in Excel UI will not affect the text value returned by the API. Read-only.
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
    * Text values of the specified range. The Text value will not depend on the cell width. The # sign substitution that happens in Excel UI will not affect the text value returned by the API. Read-only.
    *
    * @param string $val The text
    *
    * @return WorkbookRange
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
        return $this;
    }
    
    /**
    * Gets the values
    * Represents the raw values of the specified range. The data returned could be of type string, number, or a boolean. Cell that contain an error will return the error string.
    *
    * @return string The values
    */
    public function getValues()
    {
        if (array_key_exists("values", $this->_propDict)) {
            return $this->_propDict["values"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the values
    * Represents the raw values of the specified range. The data returned could be of type string, number, or a boolean. Cell that contain an error will return the error string.
    *
    * @param string $val The values
    *
    * @return WorkbookRange
    */
    public function setValues($val)
    {
        $this->_propDict["values"] = $val;
        return $this;
    }
    
    /**
    * Gets the valueTypes
    * Represents the type of data of each cell. Possible values are: Unknown, Empty, String, Integer, Double, Boolean, Error. Read-only.
    *
    * @return string The valueTypes
    */
    public function getValueTypes()
    {
        if (array_key_exists("valueTypes", $this->_propDict)) {
            return $this->_propDict["valueTypes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the valueTypes
    * Represents the type of data of each cell. Possible values are: Unknown, Empty, String, Integer, Double, Boolean, Error. Read-only.
    *
    * @param string $val The valueTypes
    *
    * @return WorkbookRange
    */
    public function setValueTypes($val)
    {
        $this->_propDict["valueTypes"] = $val;
        return $this;
    }
    
    /**
    * Gets the format
    * Returns a format object, encapsulating the range's font, fill, borders, alignment, and other properties. Read-only.
    *
    * @return WorkbookRangeFormat The format
    */
    public function getFormat()
    {
        if (array_key_exists("format", $this->_propDict)) {
            if (is_a($this->_propDict["format"], "\Microsoft\Graph\Model\WorkbookRangeFormat")) {
                return $this->_propDict["format"];
            } else {
                $this->_propDict["format"] = new WorkbookRangeFormat($this->_propDict["format"]);
                return $this->_propDict["format"];
            }
        }
        return null;
    }
    
    /**
    * Sets the format
    * Returns a format object, encapsulating the range's font, fill, borders, alignment, and other properties. Read-only.
    *
    * @param WorkbookRangeFormat $val The format
    *
    * @return WorkbookRange
    */
    public function setFormat($val)
    {
        $this->_propDict["format"] = $val;
        return $this;
    }
    
    /**
    * Gets the sort
    * The worksheet containing the current range. Read-only.
    *
    * @return WorkbookRangeSort The sort
    */
    public function getSort()
    {
        if (array_key_exists("sort", $this->_propDict)) {
            if (is_a($this->_propDict["sort"], "\Microsoft\Graph\Model\WorkbookRangeSort")) {
                return $this->_propDict["sort"];
            } else {
                $this->_propDict["sort"] = new WorkbookRangeSort($this->_propDict["sort"]);
                return $this->_propDict["sort"];
            }
        }
        return null;
    }
    
    /**
    * Sets the sort
    * The worksheet containing the current range. Read-only.
    *
    * @param WorkbookRangeSort $val The sort
    *
    * @return WorkbookRange
    */
    public function setSort($val)
    {
        $this->_propDict["sort"] = $val;
        return $this;
    }
    
    /**
    * Gets the worksheet
    * The worksheet containing the current range. Read-only.
    *
    * @return WorkbookWorksheet The worksheet
    */
    public function getWorksheet()
    {
        if (array_key_exists("worksheet", $this->_propDict)) {
            if (is_a($this->_propDict["worksheet"], "\Microsoft\Graph\Model\WorkbookWorksheet")) {
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
    * The worksheet containing the current range. Read-only.
    *
    * @param WorkbookWorksheet $val The worksheet
    *
    * @return WorkbookRange
    */
    public function setWorksheet($val)
    {
        $this->_propDict["worksheet"] = $val;
        return $this;
    }
    
}
