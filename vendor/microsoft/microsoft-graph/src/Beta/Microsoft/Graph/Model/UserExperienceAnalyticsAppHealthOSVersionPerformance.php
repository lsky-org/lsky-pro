<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsAppHealthOSVersionPerformance File
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
* UserExperienceAnalyticsAppHealthOSVersionPerformance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsAppHealthOSVersionPerformance extends Entity
{
    /**
    * Gets the activeDeviceCount
    * The number of active devices for the OS version. Valid values -2147483648 to 2147483647
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
    * The number of active devices for the OS version. Valid values -2147483648 to 2147483647
    *
    * @param int $val The activeDeviceCount
    *
    * @return UserExperienceAnalyticsAppHealthOSVersionPerformance
    */
    public function setActiveDeviceCount($val)
    {
        $this->_propDict["activeDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the meanTimeToFailureInMinutes
    * The mean time to failure for the OS version in minutes. Valid values -2147483648 to 2147483647
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
    * The mean time to failure for the OS version in minutes. Valid values -2147483648 to 2147483647
    *
    * @param int $val The meanTimeToFailureInMinutes
    *
    * @return UserExperienceAnalyticsAppHealthOSVersionPerformance
    */
    public function setMeanTimeToFailureInMinutes($val)
    {
        $this->_propDict["meanTimeToFailureInMinutes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the osBuildNumber
    * The OS build number installed on the device.
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
    * The OS build number installed on the device.
    *
    * @param string $val The osBuildNumber
    *
    * @return UserExperienceAnalyticsAppHealthOSVersionPerformance
    */
    public function setOsBuildNumber($val)
    {
        $this->_propDict["osBuildNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the osVersion
    * The OS version installed on the device.
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
    * The OS version installed on the device.
    *
    * @param string $val The osVersion
    *
    * @return UserExperienceAnalyticsAppHealthOSVersionPerformance
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the osVersionAppHealthScore
    * The app health score of the OS version. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float The osVersionAppHealthScore
    */
    public function getOsVersionAppHealthScore()
    {
        if (array_key_exists("osVersionAppHealthScore", $this->_propDict)) {
            return $this->_propDict["osVersionAppHealthScore"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the osVersionAppHealthScore
    * The app health score of the OS version. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The osVersionAppHealthScore
    *
    * @return UserExperienceAnalyticsAppHealthOSVersionPerformance
    */
    public function setOsVersionAppHealthScore($val)
    {
        $this->_propDict["osVersionAppHealthScore"] = $val;
        return $this;
    }
    
    /**
    * Gets the osVersionAppHealthStatus
    * The overall app health status of the OS version.
    *
    * @return string The osVersionAppHealthStatus
    */
    public function getOsVersionAppHealthStatus()
    {
        if (array_key_exists("osVersionAppHealthStatus", $this->_propDict)) {
            return $this->_propDict["osVersionAppHealthStatus"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the osVersionAppHealthStatus
    * The overall app health status of the OS version.
    *
    * @param string $val The osVersionAppHealthStatus
    *
    * @return UserExperienceAnalyticsAppHealthOSVersionPerformance
    */
    public function setOsVersionAppHealthStatus($val)
    {
        $this->_propDict["osVersionAppHealthStatus"] = $val;
        return $this;
    }
    
}
