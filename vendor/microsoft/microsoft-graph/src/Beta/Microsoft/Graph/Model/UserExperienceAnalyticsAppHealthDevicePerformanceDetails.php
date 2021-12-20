<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsAppHealthDevicePerformanceDetails File
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
* UserExperienceAnalyticsAppHealthDevicePerformanceDetails class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsAppHealthDevicePerformanceDetails extends Entity
{
    /**
    * Gets the appDisplayName
    * The friendly name of the application for which the event occurred.
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
    * The friendly name of the application for which the event occurred.
    *
    * @param string $val The appDisplayName
    *
    * @return UserExperienceAnalyticsAppHealthDevicePerformanceDetails
    */
    public function setAppDisplayName($val)
    {
        $this->_propDict["appDisplayName"] = $val;
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
    * @return UserExperienceAnalyticsAppHealthDevicePerformanceDetails
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
    * @return UserExperienceAnalyticsAppHealthDevicePerformanceDetails
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the eventDateTime
    * The time the event occurred.
    *
    * @return \DateTime The eventDateTime
    */
    public function getEventDateTime()
    {
        if (array_key_exists("eventDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["eventDateTime"], "\DateTime")) {
                return $this->_propDict["eventDateTime"];
            } else {
                $this->_propDict["eventDateTime"] = new \DateTime($this->_propDict["eventDateTime"]);
                return $this->_propDict["eventDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the eventDateTime
    * The time the event occurred.
    *
    * @param \DateTime $val The eventDateTime
    *
    * @return UserExperienceAnalyticsAppHealthDevicePerformanceDetails
    */
    public function setEventDateTime($val)
    {
        $this->_propDict["eventDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the eventType
    * The type of the event.
    *
    * @return string The eventType
    */
    public function getEventType()
    {
        if (array_key_exists("eventType", $this->_propDict)) {
            return $this->_propDict["eventType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the eventType
    * The type of the event.
    *
    * @param string $val The eventType
    *
    * @return UserExperienceAnalyticsAppHealthDevicePerformanceDetails
    */
    public function setEventType($val)
    {
        $this->_propDict["eventType"] = $val;
        return $this;
    }
    
}
