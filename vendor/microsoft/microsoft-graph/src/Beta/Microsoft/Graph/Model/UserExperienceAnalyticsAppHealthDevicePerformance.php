<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsAppHealthDevicePerformance File
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
* UserExperienceAnalyticsAppHealthDevicePerformance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsAppHealthDevicePerformance extends Entity
{
    /**
    * Gets the appCrashCount
    * The number of app crashes for the device. Valid values -2147483648 to 2147483647
    *
    * @return int The appCrashCount
    */
    public function getAppCrashCount()
    {
        if (array_key_exists("appCrashCount", $this->_propDict)) {
            return $this->_propDict["appCrashCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appCrashCount
    * The number of app crashes for the device. Valid values -2147483648 to 2147483647
    *
    * @param int $val The appCrashCount
    *
    * @return UserExperienceAnalyticsAppHealthDevicePerformance
    */
    public function setAppCrashCount($val)
    {
        $this->_propDict["appCrashCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the appHangCount
    * The number of app hangs for the device. Valid values -2147483648 to 2147483647
    *
    * @return int The appHangCount
    */
    public function getAppHangCount()
    {
        if (array_key_exists("appHangCount", $this->_propDict)) {
            return $this->_propDict["appHangCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appHangCount
    * The number of app hangs for the device. Valid values -2147483648 to 2147483647
    *
    * @param int $val The appHangCount
    *
    * @return UserExperienceAnalyticsAppHealthDevicePerformance
    */
    public function setAppHangCount($val)
    {
        $this->_propDict["appHangCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the crashedAppCount
    * The number of distinct app crashes for the device. Valid values -2147483648 to 2147483647
    *
    * @return int The crashedAppCount
    */
    public function getCrashedAppCount()
    {
        if (array_key_exists("crashedAppCount", $this->_propDict)) {
            return $this->_propDict["crashedAppCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the crashedAppCount
    * The number of distinct app crashes for the device. Valid values -2147483648 to 2147483647
    *
    * @param int $val The crashedAppCount
    *
    * @return UserExperienceAnalyticsAppHealthDevicePerformance
    */
    public function setCrashedAppCount($val)
    {
        $this->_propDict["crashedAppCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the deviceAppHealthScore
    * The app health score of the device. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float The deviceAppHealthScore
    */
    public function getDeviceAppHealthScore()
    {
        if (array_key_exists("deviceAppHealthScore", $this->_propDict)) {
            return $this->_propDict["deviceAppHealthScore"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceAppHealthScore
    * The app health score of the device. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The deviceAppHealthScore
    *
    * @return UserExperienceAnalyticsAppHealthDevicePerformance
    */
    public function setDeviceAppHealthScore($val)
    {
        $this->_propDict["deviceAppHealthScore"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceAppHealthStatus
    * The overall app health status of the device.
    *
    * @return string The deviceAppHealthStatus
    */
    public function getDeviceAppHealthStatus()
    {
        if (array_key_exists("deviceAppHealthStatus", $this->_propDict)) {
            return $this->_propDict["deviceAppHealthStatus"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceAppHealthStatus
    * The overall app health status of the device.
    *
    * @param string $val The deviceAppHealthStatus
    *
    * @return UserExperienceAnalyticsAppHealthDevicePerformance
    */
    public function setDeviceAppHealthStatus($val)
    {
        $this->_propDict["deviceAppHealthStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceDisplayName
    * The name of the device.
    *
    * @return string The deviceDisplayName
    */
    public function getDeviceDisplayName()
    {
        if (array_key_exists("deviceDisplayName", $this->_propDict)) {
            return $this->_propDict["deviceDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceDisplayName
    * The name of the device.
    *
    * @param string $val The deviceDisplayName
    *
    * @return UserExperienceAnalyticsAppHealthDevicePerformance
    */
    public function setDeviceDisplayName($val)
    {
        $this->_propDict["deviceDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceId
    * The id of the device.
    *
    * @return string The deviceId
    */
    public function getDeviceId()
    {
        if (array_key_exists("deviceId", $this->_propDict)) {
            return $this->_propDict["deviceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceId
    * The id of the device.
    *
    * @param string $val The deviceId
    *
    * @return UserExperienceAnalyticsAppHealthDevicePerformance
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceManufacturer
    * The manufacturer name of the device.
    *
    * @return string The deviceManufacturer
    */
    public function getDeviceManufacturer()
    {
        if (array_key_exists("deviceManufacturer", $this->_propDict)) {
            return $this->_propDict["deviceManufacturer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceManufacturer
    * The manufacturer name of the device.
    *
    * @param string $val The deviceManufacturer
    *
    * @return UserExperienceAnalyticsAppHealthDevicePerformance
    */
    public function setDeviceManufacturer($val)
    {
        $this->_propDict["deviceManufacturer"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceModel
    * The model name of the device.
    *
    * @return string The deviceModel
    */
    public function getDeviceModel()
    {
        if (array_key_exists("deviceModel", $this->_propDict)) {
            return $this->_propDict["deviceModel"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceModel
    * The model name of the device.
    *
    * @param string $val The deviceModel
    *
    * @return UserExperienceAnalyticsAppHealthDevicePerformance
    */
    public function setDeviceModel($val)
    {
        $this->_propDict["deviceModel"] = $val;
        return $this;
    }
    
    /**
    * Gets the meanTimeToFailureInMinutes
    * The mean time to failure for the device in minutes. Valid values -2147483648 to 2147483647
    *
    * @return int The meanTimeToFailureInMinutes
    */
    public function getMeanTimeToFailureInMinutes()
    {
        if (array_key_exists("meanTimeToFailureInMinutes", $this->_propDict)) {
            return $this->_propDict["meanTimeToFailureInMinutes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the meanTimeToFailureInMinutes
    * The mean time to failure for the device in minutes. Valid values -2147483648 to 2147483647
    *
    * @param int $val The meanTimeToFailureInMinutes
    *
    * @return UserExperienceAnalyticsAppHealthDevicePerformance
    */
    public function setMeanTimeToFailureInMinutes($val)
    {
        $this->_propDict["meanTimeToFailureInMinutes"] = intval($val);
        return $this;
    }
    
}
