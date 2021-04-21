<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosUpdateConfiguration File
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
* IosUpdateConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosUpdateConfiguration extends DeviceConfiguration
{
    /**
    * Gets the activeHoursEnd
    * Active Hours End (active hours mean the time window when updates install should not happen)
    *
    * @return TimeOfDay The activeHoursEnd
    */
    public function getActiveHoursEnd()
    {
        if (array_key_exists("activeHoursEnd", $this->_propDict)) {
            if (is_a($this->_propDict["activeHoursEnd"], "\Beta\Microsoft\Graph\Model\TimeOfDay")) {
                return $this->_propDict["activeHoursEnd"];
            } else {
                $this->_propDict["activeHoursEnd"] = new TimeOfDay($this->_propDict["activeHoursEnd"]);
                return $this->_propDict["activeHoursEnd"];
            }
        }
        return null;
    }
    
    /**
    * Sets the activeHoursEnd
    * Active Hours End (active hours mean the time window when updates install should not happen)
    *
    * @param TimeOfDay $val The activeHoursEnd
    *
    * @return IosUpdateConfiguration
    */
    public function setActiveHoursEnd($val)
    {
        $this->_propDict["activeHoursEnd"] = $val;
        return $this;
    }
    
    /**
    * Gets the activeHoursStart
    * Active Hours Start (active hours mean the time window when updates install should not happen)
    *
    * @return TimeOfDay The activeHoursStart
    */
    public function getActiveHoursStart()
    {
        if (array_key_exists("activeHoursStart", $this->_propDict)) {
            if (is_a($this->_propDict["activeHoursStart"], "\Beta\Microsoft\Graph\Model\TimeOfDay")) {
                return $this->_propDict["activeHoursStart"];
            } else {
                $this->_propDict["activeHoursStart"] = new TimeOfDay($this->_propDict["activeHoursStart"]);
                return $this->_propDict["activeHoursStart"];
            }
        }
        return null;
    }
    
    /**
    * Sets the activeHoursStart
    * Active Hours Start (active hours mean the time window when updates install should not happen)
    *
    * @param TimeOfDay $val The activeHoursStart
    *
    * @return IosUpdateConfiguration
    */
    public function setActiveHoursStart($val)
    {
        $this->_propDict["activeHoursStart"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customUpdateTimeWindows
    * If update schedule type is set to use time window scheduling, custom time windows when updates will be scheduled. This collection can contain a maximum of 20 elements.
     *
     * @return array The customUpdateTimeWindows
     */
    public function getCustomUpdateTimeWindows()
    {
        if (array_key_exists("customUpdateTimeWindows", $this->_propDict)) {
           return $this->_propDict["customUpdateTimeWindows"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the customUpdateTimeWindows
    * If update schedule type is set to use time window scheduling, custom time windows when updates will be scheduled. This collection can contain a maximum of 20 elements.
    *
    * @param CustomUpdateTimeWindow $val The customUpdateTimeWindows
    *
    * @return IosUpdateConfiguration
    */
    public function setCustomUpdateTimeWindows($val)
    {
		$this->_propDict["customUpdateTimeWindows"] = $val;
        return $this;
    }
    
    /**
    * Gets the desiredOsVersion
    * If left unspecified, devices will update to the latest version of the OS.
    *
    * @return string The desiredOsVersion
    */
    public function getDesiredOsVersion()
    {
        if (array_key_exists("desiredOsVersion", $this->_propDict)) {
            return $this->_propDict["desiredOsVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the desiredOsVersion
    * If left unspecified, devices will update to the latest version of the OS.
    *
    * @param string $val The desiredOsVersion
    *
    * @return IosUpdateConfiguration
    */
    public function setDesiredOsVersion($val)
    {
        $this->_propDict["desiredOsVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the enforcedSoftwareUpdateDelayInDays
    * Days before software updates are visible to iOS devices ranging from 0 to 90 inclusive
    *
    * @return int The enforcedSoftwareUpdateDelayInDays
    */
    public function getEnforcedSoftwareUpdateDelayInDays()
    {
        if (array_key_exists("enforcedSoftwareUpdateDelayInDays", $this->_propDict)) {
            return $this->_propDict["enforcedSoftwareUpdateDelayInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enforcedSoftwareUpdateDelayInDays
    * Days before software updates are visible to iOS devices ranging from 0 to 90 inclusive
    *
    * @param int $val The enforcedSoftwareUpdateDelayInDays
    *
    * @return IosUpdateConfiguration
    */
    public function setEnforcedSoftwareUpdateDelayInDays($val)
    {
        $this->_propDict["enforcedSoftwareUpdateDelayInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the isEnabled
    * Is setting enabled in UI
    *
    * @return bool The isEnabled
    */
    public function getIsEnabled()
    {
        if (array_key_exists("isEnabled", $this->_propDict)) {
            return $this->_propDict["isEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the isEnabled
    * Is setting enabled in UI
    *
    * @param bool $val The isEnabled
    *
    * @return IosUpdateConfiguration
    */
    public function setIsEnabled($val)
    {
        $this->_propDict["isEnabled"] = boolval($val);
        return $this;
    }
    

     /** 
     * Gets the scheduledInstallDays
    * Days in week for which active hours are configured. This collection can contain a maximum of 7 elements.
     *
     * @return array The scheduledInstallDays
     */
    public function getScheduledInstallDays()
    {
        if (array_key_exists("scheduledInstallDays", $this->_propDict)) {
           return $this->_propDict["scheduledInstallDays"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the scheduledInstallDays
    * Days in week for which active hours are configured. This collection can contain a maximum of 7 elements.
    *
    * @param DayOfWeek $val The scheduledInstallDays
    *
    * @return IosUpdateConfiguration
    */
    public function setScheduledInstallDays($val)
    {
		$this->_propDict["scheduledInstallDays"] = $val;
        return $this;
    }
    
    /**
    * Gets the updateScheduleType
    * Update schedule type. Possible values are: updateOutsideOfActiveHours, alwaysUpdate, updateDuringTimeWindows, updateOutsideOfTimeWindows.
    *
    * @return IosSoftwareUpdateScheduleType The updateScheduleType
    */
    public function getUpdateScheduleType()
    {
        if (array_key_exists("updateScheduleType", $this->_propDict)) {
            if (is_a($this->_propDict["updateScheduleType"], "\Beta\Microsoft\Graph\Model\IosSoftwareUpdateScheduleType")) {
                return $this->_propDict["updateScheduleType"];
            } else {
                $this->_propDict["updateScheduleType"] = new IosSoftwareUpdateScheduleType($this->_propDict["updateScheduleType"]);
                return $this->_propDict["updateScheduleType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the updateScheduleType
    * Update schedule type. Possible values are: updateOutsideOfActiveHours, alwaysUpdate, updateDuringTimeWindows, updateOutsideOfTimeWindows.
    *
    * @param IosSoftwareUpdateScheduleType $val The updateScheduleType
    *
    * @return IosUpdateConfiguration
    */
    public function setUpdateScheduleType($val)
    {
        $this->_propDict["updateScheduleType"] = $val;
        return $this;
    }
    
    /**
    * Gets the utcTimeOffsetInMinutes
    * UTC Time Offset indicated in minutes
    *
    * @return int The utcTimeOffsetInMinutes
    */
    public function getUtcTimeOffsetInMinutes()
    {
        if (array_key_exists("utcTimeOffsetInMinutes", $this->_propDict)) {
            return $this->_propDict["utcTimeOffsetInMinutes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the utcTimeOffsetInMinutes
    * UTC Time Offset indicated in minutes
    *
    * @param int $val The utcTimeOffsetInMinutes
    *
    * @return IosUpdateConfiguration
    */
    public function setUtcTimeOffsetInMinutes($val)
    {
        $this->_propDict["utcTimeOffsetInMinutes"] = intval($val);
        return $this;
    }
    
}
