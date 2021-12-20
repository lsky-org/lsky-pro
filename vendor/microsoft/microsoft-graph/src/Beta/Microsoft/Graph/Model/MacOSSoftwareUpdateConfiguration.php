<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSSoftwareUpdateConfiguration File
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
* MacOSSoftwareUpdateConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSSoftwareUpdateConfiguration extends DeviceConfiguration
{
    /**
    * Gets the allOtherUpdateBehavior
    * Update behavior for all other updates. Possible values are: notConfigured, default.
    *
    * @return MacOSSoftwareUpdateBehavior The allOtherUpdateBehavior
    */
    public function getAllOtherUpdateBehavior()
    {
        if (array_key_exists("allOtherUpdateBehavior", $this->_propDict)) {
            if (is_a($this->_propDict["allOtherUpdateBehavior"], "\Beta\Microsoft\Graph\Model\MacOSSoftwareUpdateBehavior")) {
                return $this->_propDict["allOtherUpdateBehavior"];
            } else {
                $this->_propDict["allOtherUpdateBehavior"] = new MacOSSoftwareUpdateBehavior($this->_propDict["allOtherUpdateBehavior"]);
                return $this->_propDict["allOtherUpdateBehavior"];
            }
        }
        return null;
    }
    
    /**
    * Sets the allOtherUpdateBehavior
    * Update behavior for all other updates. Possible values are: notConfigured, default.
    *
    * @param MacOSSoftwareUpdateBehavior $val The allOtherUpdateBehavior
    *
    * @return MacOSSoftwareUpdateConfiguration
    */
    public function setAllOtherUpdateBehavior($val)
    {
        $this->_propDict["allOtherUpdateBehavior"] = $val;
        return $this;
    }
    
    /**
    * Gets the configDataUpdateBehavior
    * Update behavior for configuration data file updates. Possible values are: notConfigured, default.
    *
    * @return MacOSSoftwareUpdateBehavior The configDataUpdateBehavior
    */
    public function getConfigDataUpdateBehavior()
    {
        if (array_key_exists("configDataUpdateBehavior", $this->_propDict)) {
            if (is_a($this->_propDict["configDataUpdateBehavior"], "\Beta\Microsoft\Graph\Model\MacOSSoftwareUpdateBehavior")) {
                return $this->_propDict["configDataUpdateBehavior"];
            } else {
                $this->_propDict["configDataUpdateBehavior"] = new MacOSSoftwareUpdateBehavior($this->_propDict["configDataUpdateBehavior"]);
                return $this->_propDict["configDataUpdateBehavior"];
            }
        }
        return null;
    }
    
    /**
    * Sets the configDataUpdateBehavior
    * Update behavior for configuration data file updates. Possible values are: notConfigured, default.
    *
    * @param MacOSSoftwareUpdateBehavior $val The configDataUpdateBehavior
    *
    * @return MacOSSoftwareUpdateConfiguration
    */
    public function setConfigDataUpdateBehavior($val)
    {
        $this->_propDict["configDataUpdateBehavior"] = $val;
        return $this;
    }
    
    /**
    * Gets the criticalUpdateBehavior
    * Update behavior for critical updates. Possible values are: notConfigured, default.
    *
    * @return MacOSSoftwareUpdateBehavior The criticalUpdateBehavior
    */
    public function getCriticalUpdateBehavior()
    {
        if (array_key_exists("criticalUpdateBehavior", $this->_propDict)) {
            if (is_a($this->_propDict["criticalUpdateBehavior"], "\Beta\Microsoft\Graph\Model\MacOSSoftwareUpdateBehavior")) {
                return $this->_propDict["criticalUpdateBehavior"];
            } else {
                $this->_propDict["criticalUpdateBehavior"] = new MacOSSoftwareUpdateBehavior($this->_propDict["criticalUpdateBehavior"]);
                return $this->_propDict["criticalUpdateBehavior"];
            }
        }
        return null;
    }
    
    /**
    * Sets the criticalUpdateBehavior
    * Update behavior for critical updates. Possible values are: notConfigured, default.
    *
    * @param MacOSSoftwareUpdateBehavior $val The criticalUpdateBehavior
    *
    * @return MacOSSoftwareUpdateConfiguration
    */
    public function setCriticalUpdateBehavior($val)
    {
        $this->_propDict["criticalUpdateBehavior"] = $val;
        return $this;
    }
    

     /** 
     * Gets the customUpdateTimeWindows
    * Custom Time windows when updates will be allowed or blocked. This collection can contain a maximum of 20 elements.
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
    * Custom Time windows when updates will be allowed or blocked. This collection can contain a maximum of 20 elements.
    *
    * @param CustomUpdateTimeWindow $val The customUpdateTimeWindows
    *
    * @return MacOSSoftwareUpdateConfiguration
    */
    public function setCustomUpdateTimeWindows($val)
    {
		$this->_propDict["customUpdateTimeWindows"] = $val;
        return $this;
    }
    
    /**
    * Gets the firmwareUpdateBehavior
    * Update behavior for firmware updates. Possible values are: notConfigured, default.
    *
    * @return MacOSSoftwareUpdateBehavior The firmwareUpdateBehavior
    */
    public function getFirmwareUpdateBehavior()
    {
        if (array_key_exists("firmwareUpdateBehavior", $this->_propDict)) {
            if (is_a($this->_propDict["firmwareUpdateBehavior"], "\Beta\Microsoft\Graph\Model\MacOSSoftwareUpdateBehavior")) {
                return $this->_propDict["firmwareUpdateBehavior"];
            } else {
                $this->_propDict["firmwareUpdateBehavior"] = new MacOSSoftwareUpdateBehavior($this->_propDict["firmwareUpdateBehavior"]);
                return $this->_propDict["firmwareUpdateBehavior"];
            }
        }
        return null;
    }
    
    /**
    * Sets the firmwareUpdateBehavior
    * Update behavior for firmware updates. Possible values are: notConfigured, default.
    *
    * @param MacOSSoftwareUpdateBehavior $val The firmwareUpdateBehavior
    *
    * @return MacOSSoftwareUpdateConfiguration
    */
    public function setFirmwareUpdateBehavior($val)
    {
        $this->_propDict["firmwareUpdateBehavior"] = $val;
        return $this;
    }
    
    /**
    * Gets the updateScheduleType
    * Update schedule type. Possible values are: alwaysUpdate, updateDuringTimeWindows, updateOutsideOfTimeWindows.
    *
    * @return MacOSSoftwareUpdateScheduleType The updateScheduleType
    */
    public function getUpdateScheduleType()
    {
        if (array_key_exists("updateScheduleType", $this->_propDict)) {
            if (is_a($this->_propDict["updateScheduleType"], "\Beta\Microsoft\Graph\Model\MacOSSoftwareUpdateScheduleType")) {
                return $this->_propDict["updateScheduleType"];
            } else {
                $this->_propDict["updateScheduleType"] = new MacOSSoftwareUpdateScheduleType($this->_propDict["updateScheduleType"]);
                return $this->_propDict["updateScheduleType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the updateScheduleType
    * Update schedule type. Possible values are: alwaysUpdate, updateDuringTimeWindows, updateOutsideOfTimeWindows.
    *
    * @param MacOSSoftwareUpdateScheduleType $val The updateScheduleType
    *
    * @return MacOSSoftwareUpdateConfiguration
    */
    public function setUpdateScheduleType($val)
    {
        $this->_propDict["updateScheduleType"] = $val;
        return $this;
    }
    
    /**
    * Gets the updateTimeWindowUtcOffsetInMinutes
    * Minutes indicating UTC offset for each update time window
    *
    * @return int The updateTimeWindowUtcOffsetInMinutes
    */
    public function getUpdateTimeWindowUtcOffsetInMinutes()
    {
        if (array_key_exists("updateTimeWindowUtcOffsetInMinutes", $this->_propDict)) {
            return $this->_propDict["updateTimeWindowUtcOffsetInMinutes"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the updateTimeWindowUtcOffsetInMinutes
    * Minutes indicating UTC offset for each update time window
    *
    * @param int $val The updateTimeWindowUtcOffsetInMinutes
    *
    * @return MacOSSoftwareUpdateConfiguration
    */
    public function setUpdateTimeWindowUtcOffsetInMinutes($val)
    {
        $this->_propDict["updateTimeWindowUtcOffsetInMinutes"] = intval($val);
        return $this;
    }
    
}
