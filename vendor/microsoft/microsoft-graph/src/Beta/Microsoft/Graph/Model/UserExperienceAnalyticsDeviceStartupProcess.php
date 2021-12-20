<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsDeviceStartupProcess File
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
* UserExperienceAnalyticsDeviceStartupProcess class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsDeviceStartupProcess extends Entity
{
    /**
    * Gets the managedDeviceId
    * The user experience analytics device id.
    *
    * @return string The managedDeviceId
    */
    public function getManagedDeviceId()
    {
        if (array_key_exists("managedDeviceId", $this->_propDict)) {
            return $this->_propDict["managedDeviceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedDeviceId
    * The user experience analytics device id.
    *
    * @param string $val The managedDeviceId
    *
    * @return UserExperienceAnalyticsDeviceStartupProcess
    */
    public function setManagedDeviceId($val)
    {
        $this->_propDict["managedDeviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the processName
    * User experience analytics device startup process name.
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
    * User experience analytics device startup process name.
    *
    * @param string $val The processName
    *
    * @return UserExperienceAnalyticsDeviceStartupProcess
    */
    public function setProcessName($val)
    {
        $this->_propDict["processName"] = $val;
        return $this;
    }
    
    /**
    * Gets the productName
    * The user experience analytics device startup process product name.
    *
    * @return string The productName
    */
    public function getProductName()
    {
        if (array_key_exists("productName", $this->_propDict)) {
            return $this->_propDict["productName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the productName
    * The user experience analytics device startup process product name.
    *
    * @param string $val The productName
    *
    * @return UserExperienceAnalyticsDeviceStartupProcess
    */
    public function setProductName($val)
    {
        $this->_propDict["productName"] = $val;
        return $this;
    }
    
    /**
    * Gets the publisher
    * The User experience analytics device startup process publisher.
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
    * The User experience analytics device startup process publisher.
    *
    * @param string $val The publisher
    *
    * @return UserExperienceAnalyticsDeviceStartupProcess
    */
    public function setPublisher($val)
    {
        $this->_propDict["publisher"] = $val;
        return $this;
    }
    
    /**
    * Gets the startupImpactInMs
    * User experience analytics device startup process impact in milliseconds.
    *
    * @return int The startupImpactInMs
    */
    public function getStartupImpactInMs()
    {
        if (array_key_exists("startupImpactInMs", $this->_propDict)) {
            return $this->_propDict["startupImpactInMs"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the startupImpactInMs
    * User experience analytics device startup process impact in milliseconds.
    *
    * @param int $val The startupImpactInMs
    *
    * @return UserExperienceAnalyticsDeviceStartupProcess
    */
    public function setStartupImpactInMs($val)
    {
        $this->_propDict["startupImpactInMs"] = intval($val);
        return $this;
    }
    
}
