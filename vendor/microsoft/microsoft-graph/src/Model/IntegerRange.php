<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IntegerRange File
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
* IntegerRange class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IntegerRange extends Entity
{
    /**
    * Gets the end
    * The inclusive upper bound of the integer range.
    *
    * @return int The end
    */
    public function getEnd()
    {
        if (array_key_exists("end", $this->_propDict)) {
            return $this->_propDict["end"];
        } else {
            return null;
        }
    }

    /**
    * Sets the end
    * The inclusive upper bound of the integer range.
    *
    * @param int $val The value of the end
    *
    * @return IntegerRange
    */
    public function setEnd($val)
    {
        $this->_propDict["end"] = $val;
        return $this;
    }
    /**
    * Gets the start
    * The inclusive lower bound of the integer range.
    *
    * @return int The start
    */
    public function getStart()
    {
        if (array_key_exists("start", $this->_propDict)) {
            return $this->_propDict["start"];
        } else {
            return null;
        }
    }

    /**
    * Sets the start
    * The inclusive lower bound of the integer range.
    *
    * @param int $val The value of the start
    *
    * @return IntegerRange
    */
    public function setStart($val)
    {
        $this->_propDict["start"] = $val;
        return $this;
    }
}
