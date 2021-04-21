<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* StoragePlanInformation File
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
* StoragePlanInformation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class StoragePlanInformation extends Entity
{
    /**
    * Gets the upgradeAvailable
    * Indicates if there are higher storage quota plans available. Read-only.
    *
    * @return bool The upgradeAvailable
    */
    public function getUpgradeAvailable()
    {
        if (array_key_exists("upgradeAvailable", $this->_propDict)) {
            return $this->_propDict["upgradeAvailable"];
        } else {
            return null;
        }
    }

    /**
    * Sets the upgradeAvailable
    * Indicates if there are higher storage quota plans available. Read-only.
    *
    * @param bool $val The value of the upgradeAvailable
    *
    * @return StoragePlanInformation
    */
    public function setUpgradeAvailable($val)
    {
        $this->_propDict["upgradeAvailable"] = $val;
        return $this;
    }
}
