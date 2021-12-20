<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OpenShiftItem File
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
* OpenShiftItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OpenShiftItem extends ShiftItem
{
    /**
    * Gets the openSlotCount
    * Count of the number of slots for the given open shift.
    *
    * @return int The openSlotCount
    */
    public function getOpenSlotCount()
    {
        if (array_key_exists("openSlotCount", $this->_propDict)) {
            return $this->_propDict["openSlotCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the openSlotCount
    * Count of the number of slots for the given open shift.
    *
    * @param int $val The value of the openSlotCount
    *
    * @return OpenShiftItem
    */
    public function setOpenSlotCount($val)
    {
        $this->_propDict["openSlotCount"] = $val;
        return $this;
    }
}
