<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserAnalytics File
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
* UserAnalytics class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserAnalytics extends Entity
{
    /**
    * Gets the settings
    * The current settings for a user to use the analytics API.
    *
    * @return Settings The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "\Beta\Microsoft\Graph\Model\Settings")) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new Settings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settings
    * The current settings for a user to use the analytics API.
    *
    * @param Settings $val The settings
    *
    * @return UserAnalytics
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the activityStatistics
    * The collection of work activities that a user spent time on during and outside of working hours. Read-only. Nullable.
     *
     * @return array The activityStatistics
     */
    public function getActivityStatistics()
    {
        if (array_key_exists("activityStatistics", $this->_propDict)) {
           return $this->_propDict["activityStatistics"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the activityStatistics
    * The collection of work activities that a user spent time on during and outside of working hours. Read-only. Nullable.
    *
    * @param ActivityStatistics $val The activityStatistics
    *
    * @return UserAnalytics
    */
    public function setActivityStatistics($val)
    {
		$this->_propDict["activityStatistics"] = $val;
        return $this;
    }
    
}
