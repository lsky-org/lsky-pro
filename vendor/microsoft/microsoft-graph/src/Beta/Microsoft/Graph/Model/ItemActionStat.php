<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ItemActionStat File
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
* ItemActionStat class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ItemActionStat extends Entity
{
    /**
    * Gets the actionCount
    * The number of times the action took place. Read-only.
    *
    * @return int The actionCount
    */
    public function getActionCount()
    {
        if (array_key_exists("actionCount", $this->_propDict)) {
            return $this->_propDict["actionCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the actionCount
    * The number of times the action took place. Read-only.
    *
    * @param int $val The value of the actionCount
    *
    * @return ItemActionStat
    */
    public function setActionCount($val)
    {
        $this->_propDict["actionCount"] = $val;
        return $this;
    }
    /**
    * Gets the actorCount
    * The number of distinct actors that performed the action. Read-only.
    *
    * @return int The actorCount
    */
    public function getActorCount()
    {
        if (array_key_exists("actorCount", $this->_propDict)) {
            return $this->_propDict["actorCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the actorCount
    * The number of distinct actors that performed the action. Read-only.
    *
    * @param int $val The value of the actorCount
    *
    * @return ItemActionStat
    */
    public function setActorCount($val)
    {
        $this->_propDict["actorCount"] = $val;
        return $this;
    }
}
