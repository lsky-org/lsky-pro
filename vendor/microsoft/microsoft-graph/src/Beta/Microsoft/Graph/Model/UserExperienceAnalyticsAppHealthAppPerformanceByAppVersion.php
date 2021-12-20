<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion File
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
* UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion extends Entity
{
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
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion
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
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion
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
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion
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
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion
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
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion
    */
    public function setAppUsageDuration($val)
    {
        $this->_propDict["appUsageDuration"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the appVersion
    * The version of the application.
    *
    * @return string The appVersion
    */
    public function getAppVersion()
    {
        if (array_key_exists("appVersion", $this->_propDict)) {
            return $this->_propDict["appVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appVersion
    * The version of the application.
    *
    * @param string $val The appVersion
    *
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion
    */
    public function setAppVersion($val)
    {
        $this->_propDict["appVersion"] = $val;
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
    * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersion
    */
    public function setMeanTimeToFailureInMinutes($val)
    {
        $this->_propDict["meanTimeToFailureInMinutes"] = intval($val);
        return $this;
    }
    
}
