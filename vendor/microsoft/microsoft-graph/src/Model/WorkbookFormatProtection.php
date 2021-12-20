<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WorkbookFormatProtection File
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
* WorkbookFormatProtection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WorkbookFormatProtection extends Entity
{
    /**
    * Gets the formulaHidden
    * Indicates if Excel hides the formula for the cells in the range. A null value indicates that the entire range doesn't have uniform formula hidden setting.
    *
    * @return bool The formulaHidden
    */
    public function getFormulaHidden()
    {
        if (array_key_exists("formulaHidden", $this->_propDict)) {
            return $this->_propDict["formulaHidden"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the formulaHidden
    * Indicates if Excel hides the formula for the cells in the range. A null value indicates that the entire range doesn't have uniform formula hidden setting.
    *
    * @param bool $val The formulaHidden
    *
    * @return WorkbookFormatProtection
    */
    public function setFormulaHidden($val)
    {
        $this->_propDict["formulaHidden"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the locked
    * Indicates if Excel locks the cells in the object. A null value indicates that the entire range doesn't have uniform lock setting.
    *
    * @return bool The locked
    */
    public function getLocked()
    {
        if (array_key_exists("locked", $this->_propDict)) {
            return $this->_propDict["locked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the locked
    * Indicates if Excel locks the cells in the object. A null value indicates that the entire range doesn't have uniform lock setting.
    *
    * @param bool $val The locked
    *
    * @return WorkbookFormatProtection
    */
    public function setLocked($val)
    {
        $this->_propDict["locked"] = boolval($val);
        return $this;
    }
    
}
