<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SizeRange File
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
* SizeRange class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SizeRange extends Entity
{
    /**
    * Gets the maximumSize
    * The maximum size (in kilobytes) that an incoming message must have in order for a condition or exception to apply.
    *
    * @return int The maximumSize
    */
    public function getMaximumSize()
    {
        if (array_key_exists("maximumSize", $this->_propDict)) {
            return $this->_propDict["maximumSize"];
        } else {
            return null;
        }
    }

    /**
    * Sets the maximumSize
    * The maximum size (in kilobytes) that an incoming message must have in order for a condition or exception to apply.
    *
    * @param int $val The value of the maximumSize
    *
    * @return SizeRange
    */
    public function setMaximumSize($val)
    {
        $this->_propDict["maximumSize"] = $val;
        return $this;
    }
    /**
    * Gets the minimumSize
    * The minimum size (in kilobytes) that an incoming message must have in order for a condition or exception to apply.
    *
    * @return int The minimumSize
    */
    public function getMinimumSize()
    {
        if (array_key_exists("minimumSize", $this->_propDict)) {
            return $this->_propDict["minimumSize"];
        } else {
            return null;
        }
    }

    /**
    * Sets the minimumSize
    * The minimum size (in kilobytes) that an incoming message must have in order for a condition or exception to apply.
    *
    * @param int $val The value of the minimumSize
    *
    * @return SizeRange
    */
    public function setMinimumSize($val)
    {
        $this->_propDict["minimumSize"] = $val;
        return $this;
    }
}
