<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsMetricHistory File
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
* UserExperienceAnalyticsMetricHistory class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsMetricHistory extends Entity
{
    /**
    * Gets the deviceId
    * The user experience analytics device id.
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
    * The user experience analytics device id.
    *
    * @param string $val The deviceId
    *
    * @return UserExperienceAnalyticsMetricHistory
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the metricDateTime
    * The user experience analytics metric date time.
    *
    * @return \DateTime The metricDateTime
    */
    public function getMetricDateTime()
    {
        if (array_key_exists("metricDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["metricDateTime"], "\DateTime")) {
                return $this->_propDict["metricDateTime"];
            } else {
                $this->_propDict["metricDateTime"] = new \DateTime($this->_propDict["metricDateTime"]);
                return $this->_propDict["metricDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the metricDateTime
    * The user experience analytics metric date time.
    *
    * @param \DateTime $val The metricDateTime
    *
    * @return UserExperienceAnalyticsMetricHistory
    */
    public function setMetricDateTime($val)
    {
        $this->_propDict["metricDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the metricType
    * The user experience analytics metric type.
    *
    * @return string The metricType
    */
    public function getMetricType()
    {
        if (array_key_exists("metricType", $this->_propDict)) {
            return $this->_propDict["metricType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the metricType
    * The user experience analytics metric type.
    *
    * @param string $val The metricType
    *
    * @return UserExperienceAnalyticsMetricHistory
    */
    public function setMetricType($val)
    {
        $this->_propDict["metricType"] = $val;
        return $this;
    }
    
    /**
    * Gets the userExperienceAnalyticsMetric
    * User experience analytics metric.
    *
    * @return UserExperienceAnalyticsMetric The userExperienceAnalyticsMetric
    */
    public function getUserExperienceAnalyticsMetric()
    {
        if (array_key_exists("userExperienceAnalyticsMetric", $this->_propDict)) {
            if (is_a($this->_propDict["userExperienceAnalyticsMetric"], "\Beta\Microsoft\Graph\Model\UserExperienceAnalyticsMetric")) {
                return $this->_propDict["userExperienceAnalyticsMetric"];
            } else {
                $this->_propDict["userExperienceAnalyticsMetric"] = new UserExperienceAnalyticsMetric($this->_propDict["userExperienceAnalyticsMetric"]);
                return $this->_propDict["userExperienceAnalyticsMetric"];
            }
        }
        return null;
    }
    
    /**
    * Sets the userExperienceAnalyticsMetric
    * User experience analytics metric.
    *
    * @param UserExperienceAnalyticsMetric $val The userExperienceAnalyticsMetric
    *
    * @return UserExperienceAnalyticsMetricHistory
    */
    public function setUserExperienceAnalyticsMetric($val)
    {
        $this->_propDict["userExperienceAnalyticsMetric"] = $val;
        return $this;
    }
    
}
