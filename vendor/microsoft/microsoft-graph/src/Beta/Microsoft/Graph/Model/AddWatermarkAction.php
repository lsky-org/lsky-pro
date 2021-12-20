<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AddWatermarkAction File
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
* AddWatermarkAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AddWatermarkAction extends InformationProtectionAction
{
    /**
    * Gets the fontColor
    * Color of the font to use for the watermark.
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
    * Color of the font to use for the watermark.
    *
    * @param string $val The value of the fontColor
    *
    * @return AddWatermarkAction
    */
    public function setFontColor($val)
    {
        $this->_propDict["fontColor"] = $val;
        return $this;
    }
    /**
    * Gets the fontName
    * Name of the font to use for the watermark.
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
    * Name of the font to use for the watermark.
    *
    * @param string $val The value of the fontName
    *
    * @return AddWatermarkAction
    */
    public function setFontName($val)
    {
        $this->_propDict["fontName"] = $val;
        return $this;
    }
    /**
    * Gets the fontSize
    * Font size to use for the watermark.
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
    * Font size to use for the watermark.
    *
    * @param int $val The value of the fontSize
    *
    * @return AddWatermarkAction
    */
    public function setFontSize($val)
    {
        $this->_propDict["fontSize"] = $val;
        return $this;
    }

    /**
    * Gets the layout
    * Possible values are: horizontal, diagonal.
    *
    * @return WatermarkLayout The layout
    */
    public function getLayout()
    {
        if (array_key_exists("layout", $this->_propDict)) {
            if (is_a($this->_propDict["layout"], "\Beta\Microsoft\Graph\Model\WatermarkLayout")) {
                return $this->_propDict["layout"];
            } else {
                $this->_propDict["layout"] = new WatermarkLayout($this->_propDict["layout"]);
                return $this->_propDict["layout"];
            }
        }
        return null;
    }

    /**
    * Sets the layout
    * Possible values are: horizontal, diagonal.
    *
    * @param WatermarkLayout $val The value to assign to the layout
    *
    * @return AddWatermarkAction The AddWatermarkAction
    */
    public function setLayout($val)
    {
        $this->_propDict["layout"] = $val;
         return $this;
    }
    /**
    * Gets the text
    * The contents of the watermark itself.
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
    * The contents of the watermark itself.
    *
    * @param string $val The value of the text
    *
    * @return AddWatermarkAction
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
        return $this;
    }
    /**
    * Gets the uiElementName
    * The name of the UI element where the watermark should be placed.
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
    * The name of the UI element where the watermark should be placed.
    *
    * @param string $val The value of the uiElementName
    *
    * @return AddWatermarkAction
    */
    public function setUiElementName($val)
    {
        $this->_propDict["uiElementName"] = $val;
        return $this;
    }
}
