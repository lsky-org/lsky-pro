<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerKioskModeAppPositionItem File
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
* AndroidDeviceOwnerKioskModeAppPositionItem class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerKioskModeAppPositionItem extends Entity
{

    /**
    * Gets the item
    * Item to be arranged
    *
    * @return AndroidDeviceOwnerKioskModeHomeScreenItem The item
    */
    public function getItem()
    {
        if (array_key_exists("item", $this->_propDict)) {
            if (is_a($this->_propDict["item"], "\Beta\Microsoft\Graph\Model\AndroidDeviceOwnerKioskModeHomeScreenItem")) {
                return $this->_propDict["item"];
            } else {
                $this->_propDict["item"] = new AndroidDeviceOwnerKioskModeHomeScreenItem($this->_propDict["item"]);
                return $this->_propDict["item"];
            }
        }
        return null;
    }

    /**
    * Sets the item
    * Item to be arranged
    *
    * @param AndroidDeviceOwnerKioskModeHomeScreenItem $val The value to assign to the item
    *
    * @return AndroidDeviceOwnerKioskModeAppPositionItem The AndroidDeviceOwnerKioskModeAppPositionItem
    */
    public function setItem($val)
    {
        $this->_propDict["item"] = $val;
         return $this;
    }
    /**
    * Gets the position
    * Position of the item on the grid. Valid values 0 to 9999999
    *
    * @return int The position
    */
    public function getPosition()
    {
        if (array_key_exists("position", $this->_propDict)) {
            return $this->_propDict["position"];
        } else {
            return null;
        }
    }

    /**
    * Sets the position
    * Position of the item on the grid. Valid values 0 to 9999999
    *
    * @param int $val The value of the position
    *
    * @return AndroidDeviceOwnerKioskModeAppPositionItem
    */
    public function setPosition($val)
    {
        $this->_propDict["position"] = $val;
        return $this;
    }
}
