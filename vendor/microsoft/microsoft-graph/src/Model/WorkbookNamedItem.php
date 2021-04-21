<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookNamedItem File
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
* WorkbookNamedItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookNamedItem extends Entity
{
    /**
    * Gets the comment
    * Represents the comment associated with this name.
    *
    * @return string The comment
    */
    public function getComment()
    {
        if (array_key_exists("comment", $this->_propDict)) {
            return $this->_propDict["comment"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the comment
    * Represents the comment associated with this name.
    *
    * @param string $val The comment
    *
    * @return WorkbookNamedItem
    */
    public function setComment($val)
    {
        $this->_propDict["comment"] = $val;
        return $this;
    }
    
    /**
    * Gets the name
    * The name of the object. Read-only.
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
    * The name of the object. Read-only.
    *
    * @param string $val The name
    *
    * @return WorkbookNamedItem
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the scope
    * Indicates whether the name is scoped to the workbook or to a specific worksheet. Read-only.
    *
    * @return string The scope
    */
    public function getScope()
    {
        if (array_key_exists("scope", $this->_propDict)) {
            return $this->_propDict["scope"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the scope
    * Indicates whether the name is scoped to the workbook or to a specific worksheet. Read-only.
    *
    * @param string $val The scope
    *
    * @return WorkbookNamedItem
    */
    public function setScope($val)
    {
        $this->_propDict["scope"] = $val;
        return $this;
    }
    
    /**
    * Gets the type
    * Indicates what type of reference is associated with the name. Possible values are: String, Integer, Double, Boolean, Range. Read-only.
    *
    * @return string The type
    */
    public function getType()
    {
        if (array_key_exists("type", $this->_propDict)) {
            return $this->_propDict["type"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the type
    * Indicates what type of reference is associated with the name. Possible values are: String, Integer, Double, Boolean, Range. Read-only.
    *
    * @param string $val The type
    *
    * @return WorkbookNamedItem
    */
    public function setType($val)
    {
        $this->_propDict["type"] = $val;
        return $this;
    }
    
    /**
    * Gets the value
    * Represents the formula that the name is defined to refer to. E.g. =Sheet14!$B$2:$H$12, =4.75, etc. Read-only.
    *
    * @return string The value
    */
    public function getValue()
    {
        if (array_key_exists("value", $this->_propDict)) {
            return $this->_propDict["value"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the value
    * Represents the formula that the name is defined to refer to. E.g. =Sheet14!$B$2:$H$12, =4.75, etc. Read-only.
    *
    * @param string $val The value
    *
    * @return WorkbookNamedItem
    */
    public function setValue($val)
    {
        $this->_propDict["value"] = $val;
        return $this;
    }
    
    /**
    * Gets the visible
    * Specifies whether the object is visible or not.
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
    * Specifies whether the object is visible or not.
    *
    * @param bool $val The visible
    *
    * @return WorkbookNamedItem
    */
    public function setVisible($val)
    {
        $this->_propDict["visible"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the worksheet
    * Returns the worksheet on which the named item is scoped to. Available only if the item is scoped to the worksheet. Read-only.
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
    * Returns the worksheet on which the named item is scoped to. Available only if the item is scoped to the worksheet. Read-only.
    *
    * @param WorkbookWorksheet $val The worksheet
    *
    * @return WorkbookNamedItem
    */
    public function setWorksheet($val)
    {
        $this->_propDict["worksheet"] = $val;
        return $this;
    }
    
}
