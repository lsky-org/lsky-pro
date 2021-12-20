<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AddContentHeaderAction File
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
* AddContentHeaderAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AddContentHeaderAction extends InformationProtectionAction
{

    /**
    * Gets the alignment
    * Possible values are: left, right, center.
    *
    * @return ContentAlignment The alignment
    */
    public function getAlignment()
    {
        if (array_key_exists("alignment", $this->_propDict)) {
            if (is_a($this->_propDict["alignment"], "\Beta\Microsoft\Graph\Model\ContentAlignment")) {
                return $this->_propDict["alignment"];
            } else {
                $this->_propDict["alignment"] = new ContentAlignment($this->_propDict["alignment"]);
                return $this->_propDict["alignment"];
            }
        }
        return null;
    }

    /**
    * Sets the alignment
    * Possible values are: left, right, center.
    *
    * @param ContentAlignment $val The value to assign to the alignment
    *
    * @return AddContentHeaderAction The AddContentHeaderAction
    */
    public function setAlignment($val)
    {
        $this->_propDict["alignment"] = $val;
         return $this;
    }
    /**
    * Gets the fontColor
    * Color of the font to use for the header.
    *
    * @return string The fontColor
    */
    public function getFontColor()
    {
        if (array_key_exists("fontColor", $this->_propDict)) {
            return $this->_propDict["fontColor"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fontColor
    * Color of the font to use for the header.
    *
    * @param string $val The value of the fontColor
    *
    * @return AddContentHeaderAction
    */
    public function setFontColor($val)
    {
        $this->_propDict["fontColor"] = $val;
        return $this;
    }
    /**
    * Gets the fontName
    * Name of the font to use for the header.
    *
    * @return string The fontName
    */
    public function getFontName()
    {
        if (array_key_exists("fontName", $this->_propDict)) {
            return $this->_propDict["fontName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fontName
    * Name of the font to use for the header.
    *
    * @param string $val The value of the fontName
    *
    * @return AddContentHeaderAction
    */
    public function setFontName($val)
    {
        $this->_propDict["fontName"] = $val;
        return $this;
    }
    /**
    * Gets the fontSize
    * Font size to use for the header.
    *
    * @return int The fontSize
    */
    public function getFontSize()
    {
        if (array_key_exists("fontSize", $this->_propDict)) {
            return $this->_propDict["fontSize"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fontSize
    * Font size to use for the header.
    *
    * @param int $val The value of the fontSize
    *
    * @return AddContentHeaderAction
    */
    public function setFontSize($val)
    {
        $this->_propDict["fontSize"] = $val;
        return $this;
    }
    /**
    * Gets the margin
    * The margin of the header from the top of the document.
    *
    * @return int The margin
    */
    public function getMargin()
    {
        if (array_key_exists("margin", $this->_propDict)) {
            return $this->_propDict["margin"];
        } else {
            return null;
        }
    }

    /**
    * Sets the margin
    * The margin of the header from the top of the document.
    *
    * @param int $val The value of the margin
    *
    * @return AddContentHeaderAction
    */
    public function setMargin($val)
    {
        $this->_propDict["margin"] = $val;
        return $this;
    }
    /**
    * Gets the text
    * The contents of the header itself.
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
    * The contents of the header itself.
    *
    * @param string $val The value of the text
    *
    * @return AddContentHeaderAction
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
        return $this;
    }
    /**
    * Gets the uiElementName
    * The name of the UI element where the header should be placed.
    *
    * @return string The uiElementName
    */
    public function getUiElementName()
    {
        if (array_key_exists("uiElementName", $this->_propDict)) {
            return $this->_propDict["uiElementName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the uiElementName
    * The name of the UI element where the header should be placed.
    *
    * @param string $val The value of the uiElementName
    *
    * @return AddContentHeaderAction
    */
    public function setUiElementName($val)
    {
        $this->_propDict["uiElementName"] = $val;
        return $this;
    }
}
