<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookApplication File
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
* WorkbookApplication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookApplication extends Entity
{
    /**
    * Gets the calculationMode
    * Returns the calculation mode used in the workbook. Possible values are: Automatic, AutomaticExceptTables, Manual.
    *
    * @return string The calculationMode
    */
    public function getCalculationMode()
    {
        if (array_key_exists("calculationMode", $this->_propDict)) {
            return $this->_propDict["calculationMode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the calculationMode
    * Returns the calculation mode used in the workbook. Possible values are: Automatic, AutomaticExceptTables, Manual.
    *
    * @param string $val The calculationMode
    *
    * @return WorkbookApplication
    */
    public function setCalculationMode($val)
    {
        $this->_propDict["calculationMode"] = $val;
        return $this;
    }
    
}
