<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsAppHealthDeviceModelPerformance File
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
* UserExperienceAnalyticsAppHealthDeviceModelPerformance class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsAppHealthDeviceModelPerformance extends Entity
{
    /**
    * Gets the activeDeviceCount
    * The number of active devices for the model. Valid values -2147483648 to 2147483647
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
    * The number of active devices for the model. Valid values -2147483648 to 2147483647
    *
    * @param int $val The activeDeviceCount
    *
    * @return UserExperienceAnalyticsAppHealthDeviceModelPerformance
    */
    public function setActiveDeviceCount($val)
    {
        $this->_propDict["activeDeviceCount"] = intval($val);
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
    * @return UserExperienceAnalyticsAppHealthDeviceModelPerformance
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
    * @return UserExperienceAnalyticsAppHealthDeviceModelPerformance
    */
    public function setDeviceModel($val)
    {
        $this->_propDict["deviceModel"] = $val;
        return $this;
    }
    
    /**
    * Gets the meanTimeToFailureInMinutes
    * The mean time to failure for the model device in minutes. Valid values -2147483648 to 2147483647
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
    * The mean time to failure for the model device in minutes. Valid values -2147483648 to 2147483647
    *
    * @param int $val The meanTimeToFailureInMinutes
    *
    * @return UserExperienceAnalyticsAppHealthDeviceModelPerformance
    */
    public function setMeanTimeToFailureInMinutes($val)
    {
        $this->_propDict["meanTimeToFailureInMinutes"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the modelAppHealthScore
    * The app health score of the device model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @return float The modelAppHealthScore
    */
    public function getModelAppHealthScore()
    {
        if (array_key_exists("modelAppHealthScore", $this->_propDict)) {
            return $this->_propDict["modelAppHealthScore"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the modelAppHealthScore
    * The app health score of the device model. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
    *
    * @param float $val The modelAppHealthScore
    *
    * @return UserExperienceAnalyticsAppHealthDeviceModelPerformance
    */
    public function setModelAppHealthScore($val)
    {
        $this->_propDict["modelAppHealthScore"] = $val;
        return $this;
    }
    
    /**
    * Gets the modelAppHealthStatus
    * The overall app health status of the device model.
    *
    * @return string The modelAppHealthStatus
    */
    public function getModelAppHealthStatus()
    {
        if (array_key_exists("modelAppHealthStatus", $this->_propDict)) {
            return $this->_propDict["modelAppHealthStatus"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the modelAppHealthStatus
    * The overall app health status of the device model.
    *
    * @param string $val The modelAppHealthStatus
    *
    * @return UserExperienceAnalyticsAppHealthDeviceModelPerformance
    */
    public function setModelAppHealthStatus($val)
    {
        $this->_propDict["modelAppHealthStatus"] = $val;
        return $this;
    }
    
}
