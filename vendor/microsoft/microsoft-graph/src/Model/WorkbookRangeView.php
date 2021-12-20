<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookRangeView File
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
* WorkbookRangeView class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookRangeView extends Entity
{
    /**
    * Gets the cellAddresses
    * Represents the cell addresses
    *
    * @return string The cellAddresses
    */
    public function getCellAddresses()
    {
        if (array_key_exists("cellAddresses", $this->_propDict)) {
            return $this->_propDict["cellAddresses"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the cellAddresses
    * Represents the cell addresses
    *
    * @param string $val The cellAddresses
    *
    * @return WorkbookRangeView
    */
    public function setCellAddresses($val)
    {
        $this->_propDict["cellAddresses"] = $val;
        return $this;
    }
    
    /**
    * Gets the columnCount
    * Returns the number of visible columns. Read-only.
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
    * Returns the number of visible columns. Read-only.
    *
    * @param int $val The columnCount
    *
    * @return WorkbookRangeView
    */
    public function setColumnCount($val)
    {
        $this->_propDict["columnCount"] = intval($val);
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
    * @return WorkbookRangeView
    */
    public function setFormulas($val)
    {
        $this->_propDict["formulas"] = $val;
        return $this;
    }
    
    /**
    * Gets the formulasLocal
    * Represents the formula in A1-style notation, in the user's language and number-formatting locale. For example, the English '=SUM(A1, 1.5)' formula would become '=SUMME(A1; 1,5)' in German.
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
    * Represents the formula in A1-style notation, in the user's language and number-formatting locale. For example, the English '=SUM(A1, 1.5)' formula would become '=SUMME(A1; 1,5)' in German.
    *
    * @param string $val The formulasLocal
    *
    * @return WorkbookRangeView
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
    * @return WorkbookRangeView
    */
    public function setFormulasR1C1($val)
    {
        $this->_propDict["formulasR1C1"] = $val;
        return $this;
    }
    
    /**
    * Gets the index
    * Index of the range.
    *
    * @return int The index
    */
    public function getIndex()
    {
        if (array_key_exists("index", $this->_propDict)) {
            return $this->_propDict["index"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the index
    * Index of the range.
    *
    * @param int $val The index
    *
    * @return WorkbookRangeView
    */
    public function setIndex($val)
    {
        $this->_propDict["index"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the numberFormat
    * Represents Excel's number format code for the given cell. Read-only.
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
    * Represents Excel's number format code for the given cell. Read-only.
    *
    * @param string $val The numberFormat
    *
    * @return WorkbookRangeView
    */
    public function setNumberFormat($val)
    {
        $this->_propDict["numberFormat"] = $val;
        return $this;
    }
    
    /**
    * Gets the rowCount
    * Returns the number of visible rows. Read-only.
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
    * Returns the number of visible rows. Read-only.
    *
    * @param int $val The rowCount
    *
    * @return WorkbookRangeView
    */
    public function setRowCount($val)
    {
        $this->_propDict["rowCount"] = intval($val);
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
    * @return WorkbookRangeView
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
        return $this;
    }
    
    /**
    * Gets the values
    * Represents the raw values of the specified range view. The data returned could be of type string, number, or a boolean. Cell that contain an error will return the error string.
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
    * Represents the raw values of the specified range view. The data returned could be of type string, number, or a boolean. Cell that contain an error will return the error string.
    *
    * @param string $val The values
    *
    * @return WorkbookRangeView
    */
    public function setValues($val)
    {
        $this->_propDict["values"] = $val;
        return $this;
    }
    
    /**
    * Gets the valueTypes
    * Represents the type of data of each cell. Read-only. Possible values are: Unknown, Empty, String, Integer, Double, Boolean, Error.
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
    * Represents the type of data of each cell. Read-only. Possible values are: Unknown, Empty, String, Integer, Double, Boolean, Error.
    *
    * @param string $val The valueTypes
    *
    * @return WorkbookRangeView
    */
    public function setValueTypes($val)
    {
        $this->_propDict["valueTypes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the rows
    * Represents a collection of range views associated with the range. Read-only. Read-only.
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
    * Represents a collection of range views associated with the range. Read-only. Read-only.
    *
    * @param WorkbookRangeView $val The rows
    *
    * @return WorkbookRangeView
    */
    public function setRows($val)
    {
		$this->_propDict["rows"] = $val;
        return $this;
    }
    
}
