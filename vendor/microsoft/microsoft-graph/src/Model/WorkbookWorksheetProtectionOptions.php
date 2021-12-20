<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookWorksheetProtectionOptions File
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
* WorkbookWorksheetProtectionOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookWorksheetProtectionOptions extends Entity
{
    /**
    * Gets the allowAutoFilter
    * Represents the worksheet protection option of allowing using auto filter feature.
    *
    * @return bool The allowAutoFilter
    */
    public function getAllowAutoFilter()
    {
        if (array_key_exists("allowAutoFilter", $this->_propDict)) {
            return $this->_propDict["allowAutoFilter"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowAutoFilter
    * Represents the worksheet protection option of allowing using auto filter feature.
    *
    * @param bool $val The value of the allowAutoFilter
    *
    * @return WorkbookWorksheetProtectionOptions
    */
    public function setAllowAutoFilter($val)
    {
        $this->_propDict["allowAutoFilter"] = $val;
        return $this;
    }
    /**
    * Gets the allowDeleteColumns
    * Represents the worksheet protection option of allowing deleting columns.
    *
    * @return bool The allowDeleteColumns
    */
    public function getAllowDeleteColumns()
    {
        if (array_key_exists("allowDeleteColumns", $this->_propDict)) {
            return $this->_propDict["allowDeleteColumns"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowDeleteColumns
    * Represents the worksheet protection option of allowing deleting columns.
    *
    * @param bool $val The value of the allowDeleteColumns
    *
    * @return WorkbookWorksheetProtectionOptions
    */
    public function setAllowDeleteColumns($val)
    {
        $this->_propDict["allowDeleteColumns"] = $val;
        return $this;
    }
    /**
    * Gets the allowDeleteRows
    * Represents the worksheet protection option of allowing deleting rows.
    *
    * @return bool The allowDeleteRows
    */
    public function getAllowDeleteRows()
    {
        if (array_key_exists("allowDeleteRows", $this->_propDict)) {
            return $this->_propDict["allowDeleteRows"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowDeleteRows
    * Represents the worksheet protection option of allowing deleting rows.
    *
    * @param bool $val The value of the allowDeleteRows
    *
    * @return WorkbookWorksheetProtectionOptions
    */
    public function setAllowDeleteRows($val)
    {
        $this->_propDict["allowDeleteRows"] = $val;
        return $this;
    }
    /**
    * Gets the allowFormatCells
    * Represents the worksheet protection option of allowing formatting cells.
    *
    * @return bool The allowFormatCells
    */
    public function getAllowFormatCells()
    {
        if (array_key_exists("allowFormatCells", $this->_propDict)) {
            return $this->_propDict["allowFormatCells"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowFormatCells
    * Represents the worksheet protection option of allowing formatting cells.
    *
    * @param bool $val The value of the allowFormatCells
    *
    * @return WorkbookWorksheetProtectionOptions
    */
    public function setAllowFormatCells($val)
    {
        $this->_propDict["allowFormatCells"] = $val;
        return $this;
    }
    /**
    * Gets the allowFormatColumns
    * Represents the worksheet protection option of allowing formatting columns.
    *
    * @return bool The allowFormatColumns
    */
    public function getAllowFormatColumns()
    {
        if (array_key_exists("allowFormatColumns", $this->_propDict)) {
            return $this->_propDict["allowFormatColumns"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowFormatColumns
    * Represents the worksheet protection option of allowing formatting columns.
    *
    * @param bool $val The value of the allowFormatColumns
    *
    * @return WorkbookWorksheetProtectionOptions
    */
    public function setAllowFormatColumns($val)
    {
        $this->_propDict["allowFormatColumns"] = $val;
        return $this;
    }
    /**
    * Gets the allowFormatRows
    * Represents the worksheet protection option of allowing formatting rows.
    *
    * @return bool The allowFormatRows
    */
    public function getAllowFormatRows()
    {
        if (array_key_exists("allowFormatRows", $this->_propDict)) {
            return $this->_propDict["allowFormatRows"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowFormatRows
    * Represents the worksheet protection option of allowing formatting rows.
    *
    * @param bool $val The value of the allowFormatRows
    *
    * @return WorkbookWorksheetProtectionOptions
    */
    public function setAllowFormatRows($val)
    {
        $this->_propDict["allowFormatRows"] = $val;
        return $this;
    }
    /**
    * Gets the allowInsertColumns
    * Represents the worksheet protection option of allowing inserting columns.
    *
    * @return bool The allowInsertColumns
    */
    public function getAllowInsertColumns()
    {
        if (array_key_exists("allowInsertColumns", $this->_propDict)) {
            return $this->_propDict["allowInsertColumns"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowInsertColumns
    * Represents the worksheet protection option of allowing inserting columns.
    *
    * @param bool $val The value of the allowInsertColumns
    *
    * @return WorkbookWorksheetProtectionOptions
    */
    public function setAllowInsertColumns($val)
    {
        $this->_propDict["allowInsertColumns"] = $val;
        return $this;
    }
    /**
    * Gets the allowInsertHyperlinks
    * Represents the worksheet protection option of allowing inserting hyperlinks.
    *
    * @return bool The allowInsertHyperlinks
    */
    public function getAllowInsertHyperlinks()
    {
        if (array_key_exists("allowInsertHyperlinks", $this->_propDict)) {
            return $this->_propDict["allowInsertHyperlinks"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowInsertHyperlinks
    * Represents the worksheet protection option of allowing inserting hyperlinks.
    *
    * @param bool $val The value of the allowInsertHyperlinks
    *
    * @return WorkbookWorksheetProtectionOptions
    */
    public function setAllowInsertHyperlinks($val)
    {
        $this->_propDict["allowInsertHyperlinks"] = $val;
        return $this;
    }
    /**
    * Gets the allowInsertRows
    * Represents the worksheet protection option of allowing inserting rows.
    *
    * @return bool The allowInsertRows
    */
    public function getAllowInsertRows()
    {
        if (array_key_exists("allowInsertRows", $this->_propDict)) {
            return $this->_propDict["allowInsertRows"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowInsertRows
    * Represents the worksheet protection option of allowing inserting rows.
    *
    * @param bool $val The value of the allowInsertRows
    *
    * @return WorkbookWorksheetProtectionOptions
    */
    public function setAllowInsertRows($val)
    {
        $this->_propDict["allowInsertRows"] = $val;
        return $this;
    }
    /**
    * Gets the allowPivotTables
    * Represents the worksheet protection option of allowing using pivot table feature.
    *
    * @return bool The allowPivotTables
    */
    public function getAllowPivotTables()
    {
        if (array_key_exists("allowPivotTables", $this->_propDict)) {
            return $this->_propDict["allowPivotTables"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowPivotTables
    * Represents the worksheet protection option of allowing using pivot table feature.
    *
    * @param bool $val The value of the allowPivotTables
    *
    * @return WorkbookWorksheetProtectionOptions
    */
    public function setAllowPivotTables($val)
    {
        $this->_propDict["allowPivotTables"] = $val;
        return $this;
    }
    /**
    * Gets the allowSort
    * Represents the worksheet protection option of allowing using sort feature.
    *
    * @return bool The allowSort
    */
    public function getAllowSort()
    {
        if (array_key_exists("allowSort", $this->_propDict)) {
            return $this->_propDict["allowSort"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowSort
    * Represents the worksheet protection option of allowing using sort feature.
    *
    * @param bool $val The value of the allowSort
    *
    * @return WorkbookWorksheetProtectionOptions
    */
    public function setAllowSort($val)
    {
        $this->_propDict["allowSort"] = $val;
        return $this;
    }
}
