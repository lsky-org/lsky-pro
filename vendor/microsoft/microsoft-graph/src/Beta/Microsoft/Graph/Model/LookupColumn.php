<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LookupColumn File
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
* LookupColumn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LookupColumn extends Entity
{
    /**
    * Gets the allowMultipleValues
    * Indicates whether multiple values can be selected from the source.
    *
    * @return bool The allowMultipleValues
    */
    public function getAllowMultipleValues()
    {
        if (array_key_exists("allowMultipleValues", $this->_propDict)) {
            return $this->_propDict["allowMultipleValues"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowMultipleValues
    * Indicates whether multiple values can be selected from the source.
    *
    * @param bool $val The value of the allowMultipleValues
    *
    * @return LookupColumn
    */
    public function setAllowMultipleValues($val)
    {
        $this->_propDict["allowMultipleValues"] = $val;
        return $this;
    }
    /**
    * Gets the allowUnlimitedLength
    * Indicates whether values in the column should be able to exceed the standard limit of 255 characters.
    *
    * @return bool The allowUnlimitedLength
    */
    public function getAllowUnlimitedLength()
    {
        if (array_key_exists("allowUnlimitedLength", $this->_propDict)) {
            return $this->_propDict["allowUnlimitedLength"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowUnlimitedLength
    * Indicates whether values in the column should be able to exceed the standard limit of 255 characters.
    *
    * @param bool $val The value of the allowUnlimitedLength
    *
    * @return LookupColumn
    */
    public function setAllowUnlimitedLength($val)
    {
        $this->_propDict["allowUnlimitedLength"] = $val;
        return $this;
    }
    /**
    * Gets the columnName
    * The name of the lookup source column.
    *
    * @return string The columnName
    */
    public function getColumnName()
    {
        if (array_key_exists("columnName", $this->_propDict)) {
            return $this->_propDict["columnName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the columnName
    * The name of the lookup source column.
    *
    * @param string $val The value of the columnName
    *
    * @return LookupColumn
    */
    public function setColumnName($val)
    {
        $this->_propDict["columnName"] = $val;
        return $this;
    }
    /**
    * Gets the listId
    * The unique identifier of the lookup source list.
    *
    * @return string The listId
    */
    public function getListId()
    {
        if (array_key_exists("listId", $this->_propDict)) {
            return $this->_propDict["listId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the listId
    * The unique identifier of the lookup source list.
    *
    * @param string $val The value of the listId
    *
    * @return LookupColumn
    */
    public function setListId($val)
    {
        $this->_propDict["listId"] = $val;
        return $this;
    }
    /**
    * Gets the primaryLookupColumnId
    * If specified, this column is a secondary lookup, pulling an additional field from the list item looked up by the primary lookup. Use the list item looked up by the primary as the source for the column named here.
    *
    * @return string The primaryLookupColumnId
    */
    public function getPrimaryLookupColumnId()
    {
        if (array_key_exists("primaryLookupColumnId", $this->_propDict)) {
            return $this->_propDict["primaryLookupColumnId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the primaryLookupColumnId
    * If specified, this column is a secondary lookup, pulling an additional field from the list item looked up by the primary lookup. Use the list item looked up by the primary as the source for the column named here.
    *
    * @param string $val The value of the primaryLookupColumnId
    *
    * @return LookupColumn
    */
    public function setPrimaryLookupColumnId($val)
    {
        $this->_propDict["primaryLookupColumnId"] = $val;
        return $this;
    }
}
