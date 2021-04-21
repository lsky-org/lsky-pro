<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Workbook File
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
* Workbook class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Workbook extends Entity
{
    /**
    * Gets the application
    *
    * @return WorkbookApplication The application
    */
    public function getApplication()
    {
        if (array_key_exists("application", $this->_propDict)) {
            if (is_a($this->_propDict["application"], "\Microsoft\Graph\Model\WorkbookApplication")) {
                return $this->_propDict["application"];
            } else {
                $this->_propDict["application"] = new WorkbookApplication($this->_propDict["application"]);
                return $this->_propDict["application"];
            }
        }
        return null;
    }
    
    /**
    * Sets the application
    *
    * @param WorkbookApplication $val The application
    *
    * @return Workbook
    */
    public function setApplication($val)
    {
        $this->_propDict["application"] = $val;
        return $this;
    }
    

     /** 
     * Gets the comments
     *
     * @return array The comments
     */
    public function getComments()
    {
        if (array_key_exists("comments", $this->_propDict)) {
           return $this->_propDict["comments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the comments
    *
    * @param WorkbookComment $val The comments
    *
    * @return Workbook
    */
    public function setComments($val)
    {
		$this->_propDict["comments"] = $val;
        return $this;
    }
    
    /**
    * Gets the functions
    *
    * @return WorkbookFunctions The functions
    */
    public function getFunctions()
    {
        if (array_key_exists("functions", $this->_propDict)) {
            if (is_a($this->_propDict["functions"], "\Microsoft\Graph\Model\WorkbookFunctions")) {
                return $this->_propDict["functions"];
            } else {
                $this->_propDict["functions"] = new WorkbookFunctions($this->_propDict["functions"]);
                return $this->_propDict["functions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the functions
    *
    * @param WorkbookFunctions $val The functions
    *
    * @return Workbook
    */
    public function setFunctions($val)
    {
        $this->_propDict["functions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the names
    * Represents a collection of workbook scoped named items (named ranges and constants). Read-only.
     *
     * @return array The names
     */
    public function getNames()
    {
        if (array_key_exists("names", $this->_propDict)) {
           return $this->_propDict["names"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the names
    * Represents a collection of workbook scoped named items (named ranges and constants). Read-only.
    *
    * @param WorkbookNamedItem $val The names
    *
    * @return Workbook
    */
    public function setNames($val)
    {
		$this->_propDict["names"] = $val;
        return $this;
    }
    

     /** 
     * Gets the operations
    * The status of Workbook operations. Getting an operation collection is not supported, but you can get the status of a long-running operation if the Location header is returned in the response. Read-only. Nullable.
     *
     * @return array The operations
     */
    public function getOperations()
    {
        if (array_key_exists("operations", $this->_propDict)) {
           return $this->_propDict["operations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the operations
    * The status of Workbook operations. Getting an operation collection is not supported, but you can get the status of a long-running operation if the Location header is returned in the response. Read-only. Nullable.
    *
    * @param WorkbookOperation $val The operations
    *
    * @return Workbook
    */
    public function setOperations($val)
    {
		$this->_propDict["operations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the tables
    * Represents a collection of tables associated with the workbook. Read-only.
     *
     * @return array The tables
     */
    public function getTables()
    {
        if (array_key_exists("tables", $this->_propDict)) {
           return $this->_propDict["tables"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the tables
    * Represents a collection of tables associated with the workbook. Read-only.
    *
    * @param WorkbookTable $val The tables
    *
    * @return Workbook
    */
    public function setTables($val)
    {
		$this->_propDict["tables"] = $val;
        return $this;
    }
    

     /** 
     * Gets the worksheets
    * Represents a collection of worksheets associated with the workbook. Read-only.
     *
     * @return array The worksheets
     */
    public function getWorksheets()
    {
        if (array_key_exists("worksheets", $this->_propDict)) {
           return $this->_propDict["worksheets"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the worksheets
    * Represents a collection of worksheets associated with the workbook. Read-only.
    *
    * @param WorkbookWorksheet $val The worksheets
    *
    * @return Workbook
    */
    public function setWorksheets($val)
    {
		$this->_propDict["worksheets"] = $val;
        return $this;
    }
    
}
