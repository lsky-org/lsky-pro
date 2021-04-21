<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChartFont File
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
* WorkbookChartFont class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookChartFont extends Entity
{
    /**
    * Gets the bold
    * Represents the bold status of font.
    *
    * @return bool The bold
    */
    public function getBold()
    {
        if (array_key_exists("bold", $this->_propDict)) {
            return $this->_propDict["bold"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bold
    * Represents the bold status of font.
    *
    * @param bool $val The bold
    *
    * @return WorkbookChartFont
    */
    public function setBold($val)
    {
        $this->_propDict["bold"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the color
    * HTML color code representation of the text color. E.g. #FF0000 represents Red.
    *
    * @return string The color
    */
    public function getColor()
    {
        if (array_key_exists("color", $this->_propDict)) {
            return $this->_propDict["color"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the color
    * HTML color code representation of the text color. E.g. #FF0000 represents Red.
    *
    * @param string $val The color
    *
    * @return WorkbookChartFont
    */
    public function setColor($val)
    {
        $this->_propDict["color"] = $val;
        return $this;
    }
    
    /**
    * Gets the italic
    * Represents the italic status of the font.
    *
    * @return bool The italic
    */
    public function getItalic()
    {
        if (array_key_exists("italic", $this->_propDict)) {
            return $this->_propDict["italic"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the italic
    * Represents the italic status of the font.
    *
    * @param bool $val The italic
    *
    * @return WorkbookChartFont
    */
    public function setItalic($val)
    {
        $this->_propDict["italic"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the name
    * Font name (e.g. 'Calibri')
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
    * Font name (e.g. 'Calibri')
    *
    * @param string $val The name
    *
    * @return WorkbookChartFont
    */
    public function setName($val)
    {
        $this->_propDict["name"] = $val;
        return $this;
    }
    
    /**
    * Gets the size
    * Size of the font (e.g. 11)
    *
    * @return float The size
    */
    public function getSize()
    {
        if (array_key_exists("size", $this->_propDict)) {
            return $this->_propDict["size"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the size
    * Size of the font (e.g. 11)
    *
    * @param float $val The size
    *
    * @return WorkbookChartFont
    */
    public function setSize($val)
    {
        $this->_propDict["size"] = $val;
        return $this;
    }
    
    /**
    * Gets the underline
    * Type of underline applied to the font. The possible values are: None, Single.
    *
    * @return string The underline
    */
    public function getUnderline()
    {
        if (array_key_exists("underline", $this->_propDict)) {
            return $this->_propDict["underline"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the underline
    * Type of underline applied to the font. The possible values are: None, Single.
    *
    * @param string $val The underline
    *
    * @return WorkbookChartFont
    */
    public function setUnderline($val)
    {
        $this->_propDict["underline"] = $val;
        return $this;
    }
    
}
