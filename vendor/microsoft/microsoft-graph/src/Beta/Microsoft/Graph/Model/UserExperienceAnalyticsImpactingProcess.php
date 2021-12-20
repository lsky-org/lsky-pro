<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsImpactingProcess File
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
* UserExperienceAnalyticsImpactingProcess class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsImpactingProcess extends Entity
{
    /**
    * Gets the category
    * The category of impacting process.
    *
    * @return string The category
    */
    public function getCategory()
    {
        if (array_key_exists("category", $this->_propDict)) {
            return $this->_propDict["category"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the category
    * The category of impacting process.
    *
    * @param string $val The category
    *
    * @return UserExperienceAnalyticsImpactingProcess
    */
    public function setCategory($val)
    {
        $this->_propDict["category"] = $val;
        return $this;
    }
    
    /**
    * Gets the description
    * The description of process.
    *
    * @return string The description
    */
    public function getDescription()
    {
        if (array_key_exists("description", $this->_propDict)) {
            return $this->_propDict["description"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the description
    * The description of process.
    *
    * @param string $val The description
    *
    * @return UserExperienceAnalyticsImpactingProcess
    */
    public function setDescription($val)
    {
        $this->_propDict["description"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceId
    * The unique identifier of the impacted device.
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
    * The unique identifier of the impacted device.
    *
    * @param string $val The deviceId
    *
    * @return UserExperienceAnalyticsImpactingProcess
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the impactValue
    * The impact value of the process. Valid values 0 to 1.79769313486232E+308
    *
    * @return float The impactValue
    */
    public function getImpactValue()
    {
        if (array_key_exists("impactValue", $this->_propDict)) {
            return $this->_propDict["impactValue"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the impactValue
    * The impact value of the process. Valid values 0 to 1.79769313486232E+308
    *
    * @param float $val The impactValue
    *
    * @return UserExperienceAnalyticsImpactingProcess
    */
    public function setImpactValue($val)
    {
        $this->_propDict["impactValue"] = $val;
        return $this;
    }
    
    /**
    * Gets the processName
    * The process name.
    *
    * @return string The processName
    */
    public function getProcessName()
    {
        if (array_key_exists("processName", $this->_propDict)) {
            return $this->_propDict["processName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the processName
    * The process name.
    *
    * @param string $val The processName
    *
    * @return UserExperienceAnalyticsImpactingProcess
    */
    public function setProcessName($val)
    {
        $this->_propDict["processName"] = $val;
        return $this;
    }
    
    /**
    * Gets the publisher
    * The publisher of the process.
    *
    * @return string The publisher
    */
    public function getPublisher()
    {
        if (array_key_exists("publisher", $this->_propDict)) {
            return $this->_propDict["publisher"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the publisher
    * The publisher of the process.
    *
    * @param string $val The publisher
    *
    * @return UserExperienceAnalyticsImpactingProcess
    */
    public function setPublisher($val)
    {
        $this->_propDict["publisher"] = $val;
        return $this;
    }
    
}
