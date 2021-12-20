<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookTableColumn File
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
* WorkbookTableColumn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookTableColumn extends Entity
{
    /**
    * Gets the index
    * Returns the index number of the column within the columns collection of the table. Zero-indexed. Read-only.
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
    * Returns the index number of the column within the columns collection of the table. Zero-indexed. Read-only.
    *
    * @param int $val The index
    *
    * @return WorkbookTableColumn
    */
    public function setIndex($val)
    {
        $this->_propDict["index"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the name
    * Returns the name of the table column.
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
    * Returns the name of the table column.
    *
    * @param string $val The name
    *
    * @return WorkbookTableColumn
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
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
    * @return WorkbookTableColumn
    */
    public function setValues($val)
    {
        $this->_propDict["values"] = $val;
        return $this;
    }
    
    /**
    * Gets the filter
    * Retrieve the filter applied to the column. Read-only.
    *
    * @return WorkbookFilter The filter
    */
    public function getFilter()
    {
        if (array_key_exists("filter", $this->_propDict)) {
            if (is_a($this->_propDict["filter"], "\Beta\Microsoft\Graph\Model\WorkbookFilter")) {
                return $this->_propDict["filter"];
            } else {
                $this->_propDict["filter"] = new WorkbookFilter($this->_propDict["filter"]);
                return $this->_propDict["filter"];
            }
        }
        return null;
    }
    
    /**
    * Sets the filter
    * Retrieve the filter applied to the column. Read-only.
    *
    * @param WorkbookFilter $val The filter
    *
    * @return WorkbookTableColumn
    */
    public function setFilter($val)
    {
        $this->_propDict["filter"] = $val;
        return $this;
    }
    
}
