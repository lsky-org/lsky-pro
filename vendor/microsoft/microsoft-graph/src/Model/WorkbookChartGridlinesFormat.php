<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChartGridlinesFormat File
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
* WorkbookChartGridlinesFormat class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookChartGridlinesFormat extends Entity
{
    /**
    * Gets the line
    * Represents chart line formatting. Read-only.
    *
    * @return WorkbookChartLineFormat The line
    */
    public function getLine()
    {
        if (array_key_exists("line", $this->_propDict)) {
            if (is_a($this->_propDict["line"], "\Microsoft\Graph\Model\WorkbookChartLineFormat")) {
                return $this->_propDict["line"];
            } else {
                $this->_propDict["line"] = new WorkbookChartLineFormat($this->_propDict["line"]);
                return $this->_propDict["line"];
            }
        }
        return null;
    }
    
    /**
    * Sets the line
    * Represents chart line formatting. Read-only.
    *
    * @param WorkbookChartLineFormat $val The line
    *
    * @return WorkbookChartGridlinesFormat
    */
    public function setLine($val)
    {
        $this->_propDict["line"] = $val;
        return $this;
    }
    
}
