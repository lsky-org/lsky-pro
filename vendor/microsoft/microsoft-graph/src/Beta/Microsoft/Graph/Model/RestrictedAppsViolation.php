<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RestrictedAppsViolation File
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
* RestrictedAppsViolation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RestrictedAppsViolation extends Entity
{
    /**
    * Gets the deviceConfigurationId
    * Device configuration profile unique identifier, must be Guid
    *
    * @return string The deviceConfigurationId
    */
    public function getDeviceConfigurationId()
    {
        if (array_key_exists("deviceConfigurationId", $this->_propDict)) {
            return $this->_propDict["deviceConfigurationId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceConfigurationId
    * Device configuration profile unique identifier, must be Guid
    *
    * @param string $val The deviceConfigurationId
    *
    * @return RestrictedAppsViolation
    */
    public function setDeviceConfigurationId($val)
    {
        $this->_propDict["deviceConfigurationId"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceConfigurationName
    * Device configuration profile name
    *
    * @return string The deviceConfigurationName
    */
    public function getDeviceConfigurationName()
    {
        if (array_key_exists("deviceConfigurationName", $this->_propDict)) {
            return $this->_propDict["deviceConfigurationName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceConfigurationName
    * Device configuration profile name
    *
    * @param string $val The deviceConfigurationName
    *
    * @return RestrictedAppsViolation
    */
    public function setDeviceConfigurationName($val)
    {
        $this->_propDict["deviceConfigurationName"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceName
    * Device name
    *
    * @return string The deviceName
    */
    public function getDeviceName()
    {
        if (array_key_exists("deviceName", $this->_propDict)) {
            return $this->_propDict["deviceName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceName
    * Device name
    *
    * @param string $val The deviceName
    *
    * @return RestrictedAppsViolation
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedDeviceId
    * Managed device unique identifier, must be Guid
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
    * Managed device unique identifier, must be Guid
    *
    * @param string $val The managedDeviceId
    *
    * @return RestrictedAppsViolation
    */
    public function setManagedDeviceId($val)
    {
        $this->_propDict["managedDeviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the platformType
    * Platform type. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, windows10XProfile, all.
    *
    * @return PolicyPlatformType The platformType
    */
    public function getPlatformType()
    {
        if (array_key_exists("platformType", $this->_propDict)) {
            if (is_a($this->_propDict["platformType"], "\Beta\Microsoft\Graph\Model\PolicyPlatformType")) {
                return $this->_propDict["platformType"];
            } else {
                $this->_propDict["platformType"] = new PolicyPlatformType($this->_propDict["platformType"]);
                return $this->_propDict["platformType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the platformType
    * Platform type. Possible values are: android, androidForWork, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, windows10XProfile, all.
    *
    * @param PolicyPlatformType $val The platformType
    *
    * @return RestrictedAppsViolation
    */
    public function setPlatformType($val)
    {
        $this->_propDict["platformType"] = $val;
        return $this;
    }
    

     /** 
     * Gets the restrictedApps
    * List of violated restricted apps
     *
     * @return array The restrictedApps
     */
    public function getRestrictedApps()
    {
        if (array_key_exists("restrictedApps", $this->_propDict)) {
           return $this->_propDict["restrictedApps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the restrictedApps
    * List of violated restricted apps
    *
    * @param ManagedDeviceReportedApp $val The restrictedApps
    *
    * @return RestrictedAppsViolation
    */
    public function setRestrictedApps($val)
    {
		$this->_propDict["restrictedApps"] = $val;
        return $this;
    }
    
    /**
    * Gets the restrictedAppsState
    * Restricted apps state. Possible values are: prohibitedApps, notApprovedApps.
    *
    * @return RestrictedAppsState The restrictedAppsState
    */
    public function getRestrictedAppsState()
    {
        if (array_key_exists("restrictedAppsState", $this->_propDict)) {
            if (is_a($this->_propDict["restrictedAppsState"], "\Beta\Microsoft\Graph\Model\RestrictedAppsState")) {
                return $this->_propDict["restrictedAppsState"];
            } else {
                $this->_propDict["restrictedAppsState"] = new RestrictedAppsState($this->_propDict["restrictedAppsState"]);
                return $this->_propDict["restrictedAppsState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the restrictedAppsState
    * Restricted apps state. Possible values are: prohibitedApps, notApprovedApps.
    *
    * @param RestrictedAppsState $val The restrictedAppsState
    *
    * @return RestrictedAppsViolation
    */
    public function setRestrictedAppsState($val)
    {
        $this->_propDict["restrictedAppsState"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    * User unique identifier, must be Guid
    *
    * @return string The userId
    */
    public function getUserId()
    {
        if (array_key_exists("userId", $this->_propDict)) {
            return $this->_propDict["userId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userId
    * User unique identifier, must be Guid
    *
    * @param string $val The userId
    *
    * @return RestrictedAppsViolation
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the userName
    * User name
    *
    * @return string The userName
    */
    public function getUserName()
    {
        if (array_key_exists("userName", $this->_propDict)) {
            return $this->_propDict["userName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userName
    * User name
    *
    * @param string $val The userName
    *
    * @return RestrictedAppsViolation
    */
    public function setUserName($val)
    {
        $this->_propDict["userName"] = $val;
        return $this;
    }
    
}
