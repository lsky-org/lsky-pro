<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookChartSeriesFormat File
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
* WorkbookChartSeriesFormat class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookChartSeriesFormat extends Entity
{
    /**
    * Gets the fill
    * Represents the fill format of a chart series, which includes background formating information. Read-only.
    *
    * @return WorkbookChartFill The fill
    */
    public function getFill()
    {
        if (array_key_exists("fill", $this->_propDict)) {
            if (is_a($this->_propDict["fill"], "\Microsoft\Graph\Model\WorkbookChartFill")) {
                return $this->_propDict["fill"];
            } else {
                $this->_propDict["fill"] = new WorkbookChartFill($this->_propDict["fill"]);
                return $this->_propDict["fill"];
            }
        }
        return null;
    }
    
    /**
    * Sets the fill
    * Represents the fill format of a chart series, which includes background formating information. Read-only.
    *
    * @param WorkbookChartFill $val The fill
    *
    * @return WorkbookChartSeriesFormat
    */
    public function setFill($val)
    {
        $this->_propDict["fill"] = $val;
        return $this;
    }
    
    /**
    * Gets the line
    * Represents line formatting. Read-only.
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
    * Represents line formatting. Read-only.
    *
    * @param WorkbookChartLineFormat $val The line
    *
    * @return WorkbookChartSeriesFormat
    */
    public function setLine($val)
    {
        $this->_propDict["line"] = $val;
        return $this;
    }
    
}
