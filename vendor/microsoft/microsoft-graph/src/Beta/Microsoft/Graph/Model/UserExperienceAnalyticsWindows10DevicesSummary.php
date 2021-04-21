<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsWindows10DevicesSummary File
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
* UserExperienceAnalyticsWindows10DevicesSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsWindows10DevicesSummary extends Entity
{
    /**
    * Gets the unsupportedOSversionDeviceCount
    * The count of Windows 10 devices that have unsupported OS versions.
    *
    * @return int The unsupportedOSversionDeviceCount
    */
    public function getUnsupportedOSversionDeviceCount()
    {
        if (array_key_exists("unsupportedOSversionDeviceCount", $this->_propDict)) {
            return $this->_propDict["unsupportedOSversionDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the unsupportedOSversionDeviceCount
    * The count of Windows 10 devices that have unsupported OS versions.
    *
    * @param int $val The value of the unsupportedOSversionDeviceCount
    *
    * @return UserExperienceAnalyticsWindows10DevicesSummary
    */
    public function setUnsupportedOSversionDeviceCount($val)
    {
        $this->_propDict["unsupportedOSversionDeviceCount"] = $val;
        return $this;
    }
}
