<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MatchLocation File
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
* MatchLocation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MatchLocation extends Entity
{
    /**
    * Gets the length
    *
    * @return int The length
    */
    public function getLength()
    {
        if (array_key_exists("length", $this->_propDict)) {
            return $this->_propDict["length"];
        } else {
            return null;
        }
    }

    /**
    * Sets the length
    *
    * @param int $val The value of the length
    *
    * @return MatchLocation
    */
    public function setLength($val)
    {
        $this->_propDict["length"] = $val;
        return $this;
    }
    /**
    * Gets the offset
    *
    * @return int The offset
    */
    public function getOffset()
    {
        if (array_key_exists("offset", $this->_propDict)) {
            return $this->_propDict["offset"];
        } else {
            return null;
        }
    }

    /**
    * Sets the offset
    *
    * @param int $val The value of the offset
    *
    * @return MatchLocation
    */
    public function setOffset($val)
    {
        $this->_propDict["offset"] = $val;
        return $this;
    }
}
