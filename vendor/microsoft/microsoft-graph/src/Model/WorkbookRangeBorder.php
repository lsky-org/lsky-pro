<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookRangeBorder File
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
* WorkbookRangeBorder class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookRangeBorder extends Entity
{
    /**
    * Gets the color
    * HTML color code representing the color of the border line, of the form #RRGGBB (e.g. 'FFA500') or as a named HTML color (e.g. 'orange').
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
    * HTML color code representing the color of the border line, of the form #RRGGBB (e.g. 'FFA500') or as a named HTML color (e.g. 'orange').
    *
    * @param string $val The color
    *
    * @return WorkbookRangeBorder
    */
    public function setColor($val)
    {
        $this->_propDict["color"] = $val;
        return $this;
    }
    
    /**
    * Gets the sideIndex
    * Constant value that indicates the specific side of the border. Possible values are: EdgeTop, EdgeBottom, EdgeLeft, EdgeRight, InsideVertical, InsideHorizontal, DiagonalDown, DiagonalUp. Read-only.
    *
    * @return string The sideIndex
    */
    public function getSideIndex()
    {
        if (array_key_exists("sideIndex", $this->_propDict)) {
            return $this->_propDict["sideIndex"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the sideIndex
    * Constant value that indicates the specific side of the border. Possible values are: EdgeTop, EdgeBottom, EdgeLeft, EdgeRight, InsideVertical, InsideHorizontal, DiagonalDown, DiagonalUp. Read-only.
    *
    * @param string $val The sideIndex
    *
    * @return WorkbookRangeBorder
    */
    public function setSideIndex($val)
    {
        $this->_propDict["sideIndex"] = $val;
        return $this;
    }
    
    /**
    * Gets the style
    * One of the constants of line style specifying the line style for the border. Possible values are: None, Continuous, Dash, DashDot, DashDotDot, Dot, Double, SlantDashDot.
    *
    * @return string The style
    */
    public function getStyle()
    {
        if (array_key_exists("style", $this->_propDict)) {
            return $this->_propDict["style"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the style
    * One of the constants of line style specifying the line style for the border. Possible values are: None, Continuous, Dash, DashDot, DashDotDot, Dot, Double, SlantDashDot.
    *
    * @param string $val The style
    *
    * @return WorkbookRangeBorder
    */
    public function setStyle($val)
    {
        $this->_propDict["style"] = $val;
        return $this;
    }
    
    /**
    * Gets the weight
    * Specifies the weight of the border around a range. Possible values are: Hairline, Thin, Medium, Thick.
    *
    * @return string The weight
    */
    public function getWeight()
    {
        if (array_key_exists("weight", $this->_propDict)) {
            return $this->_propDict["weight"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the weight
    * Specifies the weight of the border around a range. Possible values are: Hairline, Thin, Medium, Thick.
    *
    * @param string $val The weight
    *
    * @return WorkbookRangeBorder
    */
    public function setWeight($val)
    {
        $this->_propDict["weight"] = $val;
        return $this;
    }
    
}
