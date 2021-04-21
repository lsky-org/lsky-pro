<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TextColumn File
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
* TextColumn class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TextColumn extends Entity
{
    /**
    * Gets the allowMultipleLines
    * Whether to allow multiple lines of text.
    *
    * @return bool The allowMultipleLines
    */
    public function getAllowMultipleLines()
    {
        if (array_key_exists("allowMultipleLines", $this->_propDict)) {
            return $this->_propDict["allowMultipleLines"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowMultipleLines
    * Whether to allow multiple lines of text.
    *
    * @param bool $val The value of the allowMultipleLines
    *
    * @return TextColumn
    */
    public function setAllowMultipleLines($val)
    {
        $this->_propDict["allowMultipleLines"] = $val;
        return $this;
    }
    /**
    * Gets the appendChangesToExistingText
    * Whether updates to this column should replace existing text, or append to it.
    *
    * @return bool The appendChangesToExistingText
    */
    public function getAppendChangesToExistingText()
    {
        if (array_key_exists("appendChangesToExistingText", $this->_propDict)) {
            return $this->_propDict["appendChangesToExistingText"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appendChangesToExistingText
    * Whether updates to this column should replace existing text, or append to it.
    *
    * @param bool $val The value of the appendChangesToExistingText
    *
    * @return TextColumn
    */
    public function setAppendChangesToExistingText($val)
    {
        $this->_propDict["appendChangesToExistingText"] = $val;
        return $this;
    }
    /**
    * Gets the linesForEditing
    * The size of the text box.
    *
    * @return int The linesForEditing
    */
    public function getLinesForEditing()
    {
        if (array_key_exists("linesForEditing", $this->_propDict)) {
            return $this->_propDict["linesForEditing"];
        } else {
            return null;
        }
    }

    /**
    * Sets the linesForEditing
    * The size of the text box.
    *
    * @param int $val The value of the linesForEditing
    *
    * @return TextColumn
    */
    public function setLinesForEditing($val)
    {
        $this->_propDict["linesForEditing"] = $val;
        return $this;
    }
    /**
    * Gets the maxLength
    * The maximum number of characters for the value.
    *
    * @return int The maxLength
    */
    public function getMaxLength()
    {
        if (array_key_exists("maxLength", $this->_propDict)) {
            return $this->_propDict["maxLength"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maxLength
    * The maximum number of characters for the value.
    *
    * @param int $val The value of the maxLength
    *
    * @return TextColumn
    */
    public function setMaxLength($val)
    {
        $this->_propDict["maxLength"] = $val;
        return $this;
    }
    /**
    * Gets the textType
    * The type of text being stored. Must be one of plain or richText
    *
    * @return string The textType
    */
    public function getTextType()
    {
        if (array_key_exists("textType", $this->_propDict)) {
            return $this->_propDict["textType"];
        } else {
            return null;
        }
    }

    /**
    * Sets the textType
    * The type of text being stored. Must be one of plain or richText
    *
    * @param string $val The value of the textType
    *
    * @return TextColumn
    */
    public function setTextType($val)
    {
        $this->_propDict["textType"] = $val;
        return $this;
    }
}
