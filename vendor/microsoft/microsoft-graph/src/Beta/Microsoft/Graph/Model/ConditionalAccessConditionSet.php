<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConditionalAccessConditionSet File
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
* ConditionalAccessConditionSet class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConditionalAccessConditionSet extends Entity
{

    /**
    * Gets the applications
    * Applications and user actions included in and excluded from the policy. Required.
    *
    * @return ConditionalAccessApplications The applications
    */
    public function getApplications()
    {
        if (array_key_exists("applications", $this->_propDict)) {
            if (is_a($this->_propDict["applications"], "\Beta\Microsoft\Graph\Model\ConditionalAccessApplications")) {
                return $this->_propDict["applications"];
            } else {
                $this->_propDict["applications"] = new ConditionalAccessApplications($this->_propDict["applications"]);
                return $this->_propDict["applications"];
            }
        }
        return null;
    }

    /**
    * Sets the applications
    * Applications and user actions included in and excluded from the policy. Required.
    *
    * @param ConditionalAccessApplications $val The value to assign to the applications
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setApplications($val)
    {
        $this->_propDict["applications"] = $val;
         return $this;
    }

    /**
    * Gets the clientApplications
    *
    * @return ConditionalAccessClientApplications The clientApplications
    */
    public function getClientApplications()
    {
        if (array_key_exists("clientApplications", $this->_propDict)) {
            if (is_a($this->_propDict["clientApplications"], "\Beta\Microsoft\Graph\Model\ConditionalAccessClientApplications")) {
                return $this->_propDict["clientApplications"];
            } else {
                $this->_propDict["clientApplications"] = new ConditionalAccessClientApplications($this->_propDict["clientApplications"]);
                return $this->_propDict["clientApplications"];
            }
        }
        return null;
    }

    /**
    * Sets the clientApplications
    *
    * @param ConditionalAccessClientApplications $val The value to assign to the clientApplications
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setClientApplications($val)
    {
        $this->_propDict["clientApplications"] = $val;
         return $this;
    }

    /**
    * Gets the clientAppTypes
    * Client application types included in the policy. Possible values are: all, browser, mobileAppsAndDesktopClients, exchangeActiveSync, easSupported, other. Required.
    *
    * @return ConditionalAccessClientApp The clientAppTypes
    */
    public function getClientAppTypes()
    {
        if (array_key_exists("clientAppTypes", $this->_propDict)) {
            if (is_a($this->_propDict["clientAppTypes"], "\Beta\Microsoft\Graph\Model\ConditionalAccessClientApp")) {
                return $this->_propDict["clientAppTypes"];
            } else {
                $this->_propDict["clientAppTypes"] = new ConditionalAccessClientApp($this->_propDict["clientAppTypes"]);
                return $this->_propDict["clientAppTypes"];
            }
        }
        return null;
    }

    /**
    * Sets the clientAppTypes
    * Client application types included in the policy. Possible values are: all, browser, mobileAppsAndDesktopClients, exchangeActiveSync, easSupported, other. Required.
    *
    * @param ConditionalAccessClientApp $val The value to assign to the clientAppTypes
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setClientAppTypes($val)
    {
        $this->_propDict["clientAppTypes"] = $val;
         return $this;
    }

    /**
    * Gets the devices
    * Devices in the policy.
    *
    * @return ConditionalAccessDevices The devices
    */
    public function getDevices()
    {
        if (array_key_exists("devices", $this->_propDict)) {
            if (is_a($this->_propDict["devices"], "\Beta\Microsoft\Graph\Model\ConditionalAccessDevices")) {
                return $this->_propDict["devices"];
            } else {
                $this->_propDict["devices"] = new ConditionalAccessDevices($this->_propDict["devices"]);
                return $this->_propDict["devices"];
            }
        }
        return null;
    }

    /**
    * Sets the devices
    * Devices in the policy.
    *
    * @param ConditionalAccessDevices $val The value to assign to the devices
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setDevices($val)
    {
        $this->_propDict["devices"] = $val;
         return $this;
    }

    /**
    * Gets the deviceStates
    * Device states in the policy.
    *
    * @return ConditionalAccessDeviceStates The deviceStates
    */
    public function getDeviceStates()
    {
        if (array_key_exists("deviceStates", $this->_propDict)) {
            if (is_a($this->_propDict["deviceStates"], "\Beta\Microsoft\Graph\Model\ConditionalAccessDeviceStates")) {
                return $this->_propDict["deviceStates"];
            } else {
                $this->_propDict["deviceStates"] = new ConditionalAccessDeviceStates($this->_propDict["deviceStates"]);
                return $this->_propDict["deviceStates"];
            }
        }
        return null;
    }

    /**
    * Sets the deviceStates
    * Device states in the policy.
    *
    * @param ConditionalAccessDeviceStates $val The value to assign to the deviceStates
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setDeviceStates($val)
    {
        $this->_propDict["deviceStates"] = $val;
         return $this;
    }

    /**
    * Gets the locations
    * Locations included in and excluded from the policy.
    *
    * @return ConditionalAccessLocations The locations
    */
    public function getLocations()
    {
        if (array_key_exists("locations", $this->_propDict)) {
            if (is_a($this->_propDict["locations"], "\Beta\Microsoft\Graph\Model\ConditionalAccessLocations")) {
                return $this->_propDict["locations"];
            } else {
                $this->_propDict["locations"] = new ConditionalAccessLocations($this->_propDict["locations"]);
                return $this->_propDict["locations"];
            }
        }
        return null;
    }

    /**
    * Sets the locations
    * Locations included in and excluded from the policy.
    *
    * @param ConditionalAccessLocations $val The value to assign to the locations
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setLocations($val)
    {
        $this->_propDict["locations"] = $val;
         return $this;
    }

    /**
    * Gets the platforms
    * Platforms included in and excluded from the policy.
    *
    * @return ConditionalAccessPlatforms The platforms
    */
    public function getPlatforms()
    {
        if (array_key_exists("platforms", $this->_propDict)) {
            if (is_a($this->_propDict["platforms"], "\Beta\Microsoft\Graph\Model\ConditionalAccessPlatforms")) {
                return $this->_propDict["platforms"];
            } else {
                $this->_propDict["platforms"] = new ConditionalAccessPlatforms($this->_propDict["platforms"]);
                return $this->_propDict["platforms"];
            }
        }
        return null;
    }

    /**
    * Sets the platforms
    * Platforms included in and excluded from the policy.
    *
    * @param ConditionalAccessPlatforms $val The value to assign to the platforms
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setPlatforms($val)
    {
        $this->_propDict["platforms"] = $val;
         return $this;
    }

    /**
    * Gets the signInRiskLevels
    * Sign-in risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
    *
    * @return RiskLevel The signInRiskLevels
    */
    public function getSignInRiskLevels()
    {
        if (array_key_exists("signInRiskLevels", $this->_propDict)) {
            if (is_a($this->_propDict["signInRiskLevels"], "\Beta\Microsoft\Graph\Model\RiskLevel")) {
                return $this->_propDict["signInRiskLevels"];
            } else {
                $this->_propDict["signInRiskLevels"] = new RiskLevel($this->_propDict["signInRiskLevels"]);
                return $this->_propDict["signInRiskLevels"];
            }
        }
        return null;
    }

    /**
    * Sets the signInRiskLevels
    * Sign-in risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
    *
    * @param RiskLevel $val The value to assign to the signInRiskLevels
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setSignInRiskLevels($val)
    {
        $this->_propDict["signInRiskLevels"] = $val;
         return $this;
    }

    /**
    * Gets the userRiskLevels
    * User risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
    *
    * @return RiskLevel The userRiskLevels
    */
    public function getUserRiskLevels()
    {
        if (array_key_exists("userRiskLevels", $this->_propDict)) {
            if (is_a($this->_propDict["userRiskLevels"], "\Beta\Microsoft\Graph\Model\RiskLevel")) {
                return $this->_propDict["userRiskLevels"];
            } else {
                $this->_propDict["userRiskLevels"] = new RiskLevel($this->_propDict["userRiskLevels"]);
                return $this->_propDict["userRiskLevels"];
            }
        }
        return null;
    }

    /**
    * Sets the userRiskLevels
    * User risk levels included in the policy. Possible values are: low, medium, high, hidden, none, unknownFutureValue. Required.
    *
    * @param RiskLevel $val The value to assign to the userRiskLevels
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setUserRiskLevels($val)
    {
        $this->_propDict["userRiskLevels"] = $val;
         return $this;
    }

    /**
    * Gets the users
    * Users, groups, and roles included in and excluded from the policy. Required.
    *
    * @return ConditionalAccessUsers The users
    */
    public function getUsers()
    {
        if (array_key_exists("users", $this->_propDict)) {
            if (is_a($this->_propDict["users"], "\Beta\Microsoft\Graph\Model\ConditionalAccessUsers")) {
                return $this->_propDict["users"];
            } else {
                $this->_propDict["users"] = new ConditionalAccessUsers($this->_propDict["users"]);
                return $this->_propDict["users"];
            }
        }
        return null;
    }

    /**
    * Sets the users
    * Users, groups, and roles included in and excluded from the policy. Required.
    *
    * @param ConditionalAccessUsers $val The value to assign to the users
    *
    * @return ConditionalAccessConditionSet The ConditionalAccessConditionSet
    */
    public function setUsers($val)
    {
        $this->_propDict["users"] = $val;
         return $this;
    }
}
