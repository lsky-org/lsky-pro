<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion File
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
* UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion extends Entity
{
    /**
    * Gets the activeDeviceCount
    * The number of devices where the app has been active. Valid values -2147483648 to 2147483647
    *
    * @return int The activeDeviceCount
    */
    public function getActiveDeviceCount()
    {
        if (array_key_exists("activeDeviceCount", $this->_propDict)) {
            return $this->_propDict["activeDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the activeDeviceCount
    * The number of devices where the app has been active. Valid values -2147483648 to 2147483647
    *
    * @param int $val The activeDeviceCount
    *
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion
    */
    public function setActiveDeviceCount($val)
    {
        $this->_propDict["activeDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the appCrashCount
    * The number of crashes for the app. Valid values -2147483648 to 2147483647
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
    * The number of crashes for the app. Valid values -2147483648 to 2147483647
    *
    * @param int $val The appCrashCount
    *
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion
    */
    public function setAppCrashCount($val)
    {
        $this->_propDict["appCrashCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the appDisplayName
    * The friendly name of the application.
    *
    * @return string The appDisplayName
    */
    public function getAppDisplayName()
    {
        if (array_key_exists("appDisplayName", $this->_propDict)) {
            return $this->_propDict["appDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appDisplayName
    * The friendly name of the application.
    *
    * @param string $val The appDisplayName
    *
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion
    */
    public function setAppDisplayName($val)
    {
        $this->_propDict["appDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the appName
    * The name of the application.
    *
    * @return string The appName
    */
    public function getAppName()
    {
        if (array_key_exists("appName", $this->_propDict)) {
            return $this->_propDict["appName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appName
    * The name of the application.
    *
    * @param string $val The appName
    *
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion
    */
    public function setAppName($val)
    {
        $this->_propDict["appName"] = $val;
        return $this;
    }
    
    /**
    * Gets the appPublisher
    * The publisher of the application.
    *
    * @return string The appPublisher
    */
    public function getAppPublisher()
    {
        if (array_key_exists("appPublisher", $this->_propDict)) {
            return $this->_propDict["appPublisher"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appPublisher
    * The publisher of the application.
    *
    * @param string $val The appPublisher
    *
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion
    */
    public function setAppPublisher($val)
    {
        $this->_propDict["appPublisher"] = $val;
        return $this;
    }
    
    /**
    * Gets the appUsageDuration
    * The total usage time of the application in minutes. Valid values -2147483648 to 2147483647
    *
    * @return int The appUsageDuration
    */
    public function getAppUsageDuration()
    {
        if (array_key_exists("appUsageDuration", $this->_propDict)) {
            return $this->_propDict["appUsageDuration"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appUsageDuration
    * The total usage time of the application in minutes. Valid values -2147483648 to 2147483647
    *
    * @param int $val The appUsageDuration
    *
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion
    */
    public function setAppUsageDuration($val)
    {
        $this->_propDict["appUsageDuration"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the meanTimeToFailureInMinutes
    * The mean time to failure for the app in minutes. Valid values -2147483648 to 2147483647
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
    * The mean time to failure for the app in minutes. Valid values -2147483648 to 2147483647
    *
    * @param int $val The meanTimeToFailureInMinutes
    *
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion
    */
    public function setMeanTimeToFailureInMinutes($val)
    {
        $this->_propDict["meanTimeToFailureInMinutes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the osBuildNumber
    * The os build number of the application.
    *
    * @return string The osBuildNumber
    */
    public function getOsBuildNumber()
    {
        if (array_key_exists("osBuildNumber", $this->_propDict)) {
            return $this->_propDict["osBuildNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the osBuildNumber
    * The os build number of the application.
    *
    * @param string $val The osBuildNumber
    *
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion
    */
    public function setOsBuildNumber($val)
    {
        $this->_propDict["osBuildNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the osVersion
    * The os version of the application.
    *
    * @return string The osVersion
    */
    public function getOsVersion()
    {
        if (array_key_exists("osVersion", $this->_propDict)) {
            return $this->_propDict["osVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the osVersion
    * The os version of the application.
    *
    * @param string $val The osVersion
    *
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByOSVersion
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }
    
}
