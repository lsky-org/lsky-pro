<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Schedule File
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
* Schedule class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Schedule extends Entity
{
    /**
    * Gets the enabled
    * Indicates whether the schedule is enabled for the team. Required.
    *
    * @return bool The enabled
    */
    public function getEnabled()
    {
        if (array_key_exists("enabled", $this->_propDict)) {
            return $this->_propDict["enabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the enabled
    * Indicates whether the schedule is enabled for the team. Required.
    *
    * @param bool $val The enabled
    *
    * @return Schedule
    */
    public function setEnabled($val)
    {
        $this->_propDict["enabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the offerShiftRequestsEnabled
    * Indicates whether offer shift requests are enabled for the schedule.
    *
    * @return bool The offerShiftRequestsEnabled
    */
    public function getOfferShiftRequestsEnabled()
    {
        if (array_key_exists("offerShiftRequestsEnabled", $this->_propDict)) {
            return $this->_propDict["offerShiftRequestsEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the offerShiftRequestsEnabled
    * Indicates whether offer shift requests are enabled for the schedule.
    *
    * @param bool $val The offerShiftRequestsEnabled
    *
    * @return Schedule
    */
    public function setOfferShiftRequestsEnabled($val)
    {
        $this->_propDict["offerShiftRequestsEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the openShiftsEnabled
    * Indicates whether open shifts are enabled for the schedule.
    *
    * @return bool The openShiftsEnabled
    */
    public function getOpenShiftsEnabled()
    {
        if (array_key_exists("openShiftsEnabled", $this->_propDict)) {
            return $this->_propDict["openShiftsEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the openShiftsEnabled
    * Indicates whether open shifts are enabled for the schedule.
    *
    * @param bool $val The openShiftsEnabled
    *
    * @return Schedule
    */
    public function setOpenShiftsEnabled($val)
    {
        $this->_propDict["openShiftsEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the provisionStatus
    * The status of the schedule provisioning. The possible values are notStarted, running, completed, failed.
    *
    * @return OperationStatus The provisionStatus
    */
    public function getProvisionStatus()
    {
        if (array_key_exists("provisionStatus", $this->_propDict)) {
            if (is_a($this->_propDict["provisionStatus"], "\Beta\Microsoft\Graph\Model\OperationStatus")) {
                return $this->_propDict["provisionStatus"];
            } else {
                $this->_propDict["provisionStatus"] = new OperationStatus($this->_propDict["provisionStatus"]);
                return $this->_propDict["provisionStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the provisionStatus
    * The status of the schedule provisioning. The possible values are notStarted, running, completed, failed.
    *
    * @param OperationStatus $val The provisionStatus
    *
    * @return Schedule
    */
    public function setProvisionStatus($val)
    {
        $this->_propDict["provisionStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the provisionStatusCode
    * Additional information about why schedule provisioning failed.
    *
    * @return string The provisionStatusCode
    */
    public function getProvisionStatusCode()
    {
        if (array_key_exists("provisionStatusCode", $this->_propDict)) {
            return $this->_propDict["provisionStatusCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the provisionStatusCode
    * Additional information about why schedule provisioning failed.
    *
    * @param string $val The provisionStatusCode
    *
    * @return Schedule
    */
    public function setProvisionStatusCode($val)
    {
        $this->_propDict["provisionStatusCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the swapShiftsRequestsEnabled
    * Indicates whether swap shifts requests are enabled for the schedule.
    *
    * @return bool The swapShiftsRequestsEnabled
    */
    public function getSwapShiftsRequestsEnabled()
    {
        if (array_key_exists("swapShiftsRequestsEnabled", $this->_propDict)) {
            return $this->_propDict["swapShiftsRequestsEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the swapShiftsRequestsEnabled
    * Indicates whether swap shifts requests are enabled for the schedule.
    *
    * @param bool $val The swapShiftsRequestsEnabled
    *
    * @return Schedule
    */
    public function setSwapShiftsRequestsEnabled($val)
    {
        $this->_propDict["swapShiftsRequestsEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the timeClockEnabled
    * Indicates whether time clock is enabled for the schedule.
    *
    * @return bool The timeClockEnabled
    */
    public function getTimeClockEnabled()
    {
        if (array_key_exists("timeClockEnabled", $this->_propDict)) {
            return $this->_propDict["timeClockEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the timeClockEnabled
    * Indicates whether time clock is enabled for the schedule.
    *
    * @param bool $val The timeClockEnabled
    *
    * @return Schedule
    */
    public function setTimeClockEnabled($val)
    {
        $this->_propDict["timeClockEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the timeClockSettings
    *
    * @return TimeClockSettings The timeClockSettings
    */
    public function getTimeClockSettings()
    {
        if (array_key_exists("timeClockSettings", $this->_propDict)) {
            if (is_a($this->_propDict["timeClockSettings"], "\Beta\Microsoft\Graph\Model\TimeClockSettings")) {
                return $this->_propDict["timeClockSettings"];
            } else {
                $this->_propDict["timeClockSettings"] = new TimeClockSettings($this->_propDict["timeClockSettings"]);
                return $this->_propDict["timeClockSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the timeClockSettings
    *
    * @param TimeClockSettings $val The timeClockSettings
    *
    * @return Schedule
    */
    public function setTimeClockSettings($val)
    {
        $this->_propDict["timeClockSettings"] = $val;
        return $this;
    }
    
    /**
    * Gets the timeOffRequestsEnabled
    * Indicates whether time off requests are enabled for the schedule.
    *
    * @return bool The timeOffRequestsEnabled
    */
    public function getTimeOffRequestsEnabled()
    {
        if (array_key_exists("timeOffRequestsEnabled", $this->_propDict)) {
            return $this->_propDict["timeOffRequestsEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the timeOffRequestsEnabled
    * Indicates whether time off requests are enabled for the schedule.
    *
    * @param bool $val The timeOffRequestsEnabled
    *
    * @return Schedule
    */
    public function setTimeOffRequestsEnabled($val)
    {
        $this->_propDict["timeOffRequestsEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the timeZone
    * Indicates the time zone of the schedule team using tz database format. Required.
    *
    * @return string The timeZone
    */
    public function getTimeZone()
    {
        if (array_key_exists("timeZone", $this->_propDict)) {
            return $this->_propDict["timeZone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the timeZone
    * Indicates the time zone of the schedule team using tz database format. Required.
    *
    * @param string $val The timeZone
    *
    * @return Schedule
    */
    public function setTimeZone($val)
    {
        $this->_propDict["timeZone"] = $val;
        return $this;
    }
    
    /**
    * Gets the workforceIntegrationIds
    *
    * @return string The workforceIntegrationIds
    */
    public function getWorkforceIntegrationIds()
    {
        if (array_key_exists("workforceIntegrationIds", $this->_propDict)) {
            return $this->_propDict["workforceIntegrationIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the workforceIntegrationIds
    *
    * @param string $val The workforceIntegrationIds
    *
    * @return Schedule
    */
    public function setWorkforceIntegrationIds($val)
    {
        $this->_propDict["workforceIntegrationIds"] = $val;
        return $this;
    }
    

     /** 
     * Gets the offerShiftRequests
     *
     * @return array The offerShiftRequests
     */
    public function getOfferShiftRequests()
    {
        if (array_key_exists("offerShiftRequests", $this->_propDict)) {
           return $this->_propDict["offerShiftRequests"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the offerShiftRequests
    *
    * @param OfferShiftRequest $val The offerShiftRequests
    *
    * @return Schedule
    */
    public function setOfferShiftRequests($val)
    {
		$this->_propDict["offerShiftRequests"] = $val;
        return $this;
    }
    

     /** 
     * Gets the openShiftChangeRequests
     *
     * @return array The openShiftChangeRequests
     */
    public function getOpenShiftChangeRequests()
    {
        if (array_key_exists("openShiftChangeRequests", $this->_propDict)) {
           return $this->_propDict["openShiftChangeRequests"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the openShiftChangeRequests
    *
    * @param OpenShiftChangeRequest $val The openShiftChangeRequests
    *
    * @return Schedule
    */
    public function setOpenShiftChangeRequests($val)
    {
		$this->_propDict["openShiftChangeRequests"] = $val;
        return $this;
    }
    

     /** 
     * Gets the openShifts
     *
     * @return array The openShifts
     */
    public function getOpenShifts()
    {
        if (array_key_exists("openShifts", $this->_propDict)) {
           return $this->_propDict["openShifts"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the openShifts
    *
    * @param OpenShift $val The openShifts
    *
    * @return Schedule
    */
    public function setOpenShifts($val)
    {
		$this->_propDict["openShifts"] = $val;
        return $this;
    }
    

     /** 
     * Gets the schedulingGroups
    * The logical grouping of users in the schedule (usually by role).
     *
     * @return array The schedulingGroups
     */
    public function getSchedulingGroups()
    {
        if (array_key_exists("schedulingGroups", $this->_propDict)) {
           return $this->_propDict["schedulingGroups"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the schedulingGroups
    * The logical grouping of users in the schedule (usually by role).
    *
    * @param SchedulingGroup $val The schedulingGroups
    *
    * @return Schedule
    */
    public function setSchedulingGroups($val)
    {
		$this->_propDict["schedulingGroups"] = $val;
        return $this;
    }
    

     /** 
     * Gets the shifts
    * The shifts in the schedule.
     *
     * @return array The shifts
     */
    public function getShifts()
    {
        if (array_key_exists("shifts", $this->_propDict)) {
           return $this->_propDict["shifts"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the shifts
    * The shifts in the schedule.
    *
    * @param Shift $val The shifts
    *
    * @return Schedule
    */
    public function setShifts($val)
    {
		$this->_propDict["shifts"] = $val;
        return $this;
    }
    

     /** 
     * Gets the swapShiftsChangeRequests
     *
     * @return array The swapShiftsChangeRequests
     */
    public function getSwapShiftsChangeRequests()
    {
        if (array_key_exists("swapShiftsChangeRequests", $this->_propDict)) {
           return $this->_propDict["swapShiftsChangeRequests"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the swapShiftsChangeRequests
    *
    * @param SwapShiftsChangeRequest $val The swapShiftsChangeRequests
    *
    * @return Schedule
    */
    public function setSwapShiftsChangeRequests($val)
    {
		$this->_propDict["swapShiftsChangeRequests"] = $val;
        return $this;
    }
    

     /** 
     * Gets the timeCards
     *
     * @return array The timeCards
     */
    public function getTimeCards()
    {
        if (array_key_exists("timeCards", $this->_propDict)) {
           return $this->_propDict["timeCards"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the timeCards
    *
    * @param TimeCard $val The timeCards
    *
    * @return Schedule
    */
    public function setTimeCards($val)
    {
		$this->_propDict["timeCards"] = $val;
        return $this;
    }
    

     /** 
     * Gets the timeOffReasons
    * The set of reasons for a time off in the schedule.
     *
     * @return array The timeOffReasons
     */
    public function getTimeOffReasons()
    {
        if (array_key_exists("timeOffReasons", $this->_propDict)) {
           return $this->_propDict["timeOffReasons"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the timeOffReasons
    * The set of reasons for a time off in the schedule.
    *
    * @param TimeOffReason $val The timeOffReasons
    *
    * @return Schedule
    */
    public function setTimeOffReasons($val)
    {
		$this->_propDict["timeOffReasons"] = $val;
        return $this;
    }
    

     /** 
     * Gets the timeOffRequests
     *
     * @return array The timeOffRequests
     */
    public function getTimeOffRequests()
    {
        if (array_key_exists("timeOffRequests", $this->_propDict)) {
           return $this->_propDict["timeOffRequests"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the timeOffRequests
    *
    * @param TimeOffRequest $val The timeOffRequests
    *
    * @return Schedule
    */
    public function setTimeOffRequests($val)
    {
		$this->_propDict["timeOffRequests"] = $val;
        return $this;
    }
    

     /** 
     * Gets the timesOff
    * The instances of times off in the schedule.
     *
     * @return array The timesOff
     */
    public function getTimesOff()
    {
        if (array_key_exists("timesOff", $this->_propDict)) {
           return $this->_propDict["timesOff"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the timesOff
    * The instances of times off in the schedule.
    *
    * @param TimeOff $val The timesOff
    *
    * @return Schedule
    */
    public function setTimesOff($val)
    {
		$this->_propDict["timesOff"] = $val;
        return $this;
    }
    
}
