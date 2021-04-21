<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChartAxisTitleFormat File
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
* WorkbookChartAxisTitleFormat class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookChartAxisTitleFormat extends Entity
{
    /**
    * Gets the font
    * Represents the font attributes, such as font name, font size, color, etc. of chart axis title object. Read-only.
    *
    * @return WorkbookChartFont The font
    */
    public function getFont()
    {
        if (array_key_exists("font", $this->_propDict)) {
            if (is_a($this->_propDict["font"], "\Microsoft\Graph\Model\WorkbookChartFont")) {
                return $this->_propDict["font"];
            } else {
                $this->_propDict["font"] = new WorkbookChartFont($this->_propDict["font"]);
                return $this->_propDict["font"];
            }
        }
        return null;
    }
    
    /**
    * Sets the font
    * Represents the font attributes, such as font name, font size, color, etc. of chart axis title object. Read-only.
    *
    * @param WorkbookChartFont $val The font
    *
    * @return WorkbookChartAxisTitleFormat
    */
    public function setFont($val)
    {
        $this->_propDict["font"] = $val;
        return $this;
    }
    
}
