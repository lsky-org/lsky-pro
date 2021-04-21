<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedDeviceCleanupSettings File
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
* ManagedDeviceCleanupSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedDeviceCleanupSettings extends Entity
{
    /**
    * Gets the deviceInactivityBeforeRetirementInDays
    * Number of days when the device has not contacted Intune.
    *
    * @return string The deviceInactivityBeforeRetirementInDays
    */
    public function getDeviceInactivityBeforeRetirementInDays()
    {
        if (array_key_exists("deviceInactivityBeforeRetirementInDays", $this->_propDict)) {
            return $this->_propDict["deviceInactivityBeforeRetirementInDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the deviceInactivityBeforeRetirementInDays
    * Number of days when the device has not contacted Intune.
    *
    * @param string $val The value of the deviceInactivityBeforeRetirementInDays
    *
    * @return ManagedDeviceCleanupSettings
    */
    public function setDeviceInactivityBeforeRetirementInDays($val)
    {
        $this->_propDict["deviceInactivityBeforeRetirementInDays"] = $val;
        return $this;
    }
}
