<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LookupResultRow File
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
* LookupResultRow class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LookupResultRow extends Entity
{
    /**
    * Gets the row
    *
    * @return string The row
    */
    public function getRow()
    {
        if (array_key_exists("row", $this->_propDict)) {
            return $this->_propDict["row"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the row
    *
    * @param string $val The row
    *
    * @return LookupResultRow
    */
    public function setRow($val)
    {
        $this->_propDict["row"] = $val;
        return $this;
    }
    
}
