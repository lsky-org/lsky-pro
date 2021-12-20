<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MoveAction File
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
* MoveAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MoveAction extends Entity
{
    /**
    * Gets the from
    * The name of the location the item was moved from.
    *
    * @return string The from
    */
    public function getFrom()
    {
        if (array_key_exists("from", $this->_propDict)) {
            return $this->_propDict["from"];
        } else {
            return null;
        }
    }

    /**
    * Sets the from
    * The name of the location the item was moved from.
    *
    * @param string $val The value of the from
    *
    * @return MoveAction
    */
    public function setFrom($val)
    {
        $this->_propDict["from"] = $val;
        return $this;
    }
    /**
    * Gets the to
    * The name of the location the item was moved to.
    *
    * @return string The to
    */
    public function getTo()
    {
        if (array_key_exists("to", $this->_propDict)) {
            return $this->_propDict["to"];
        } else {
            return null;
        }
    }

    /**
    * Sets the to
    * The name of the location the item was moved to.
    *
    * @param string $val The value of the to
    *
    * @return MoveAction
    */
    public function setTo($val)
    {
        $this->_propDict["to"] = $val;
        return $this;
    }
}
