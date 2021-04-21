<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsUpdateScheduledInstall File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* WindowsUpdateScheduledInstall class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsUpdateScheduledInstall extends WindowsUpdateInstallScheduleType
{
    /**
    * Set the @odata.type since this type is immediately descended from an abstract
    * type that is referenced as the type in an entity.
    */
    public function __construct()
    {
        $this->setODataType("#microsoft.graph.windowsUpdateScheduledInstall");
    }


    /**
    * Gets the scheduledInstallDay
    * Scheduled Install Day in week. Possible values are: userDefined, everyday, sunday, monday, tuesday, wednesday, thursday, friday, saturday, noScheduledScan.
    *
    * @return WeeklySchedule The scheduledInstallDay
    */
    public function getScheduledInstallDay()
    {
        if (array_key_exists("scheduledInstallDay", $this->_propDict)) {
            if (is_a($this->_propDict["scheduledInstallDay"], "\Microsoft\Graph\Model\WeeklySchedule")) {
                return $this->_propDict["scheduledInstallDay"];
            } else {
                $this->_propDict["scheduledInstallDay"] = new WeeklySchedule($this->_propDict["scheduledInstallDay"]);
                return $this->_propDict["scheduledInstallDay"];
            }
        }
        return null;
    }

    /**
    * Sets the scheduledInstallDay
    * Scheduled Install Day in week. Possible values are: userDefined, everyday, sunday, monday, tuesday, wednesday, thursday, friday, saturday, noScheduledScan.
    *
    * @param WeeklySchedule $val The value to assign to the scheduledInstallDay
    *
    * @return WindowsUpdateScheduledInstall The WindowsUpdateScheduledInstall
    */
    public function setScheduledInstallDay($val)
    {
        $this->_propDict["scheduledInstallDay"] = $val;
         return $this;
    }

    /**
    * Gets the scheduledInstallTime
    * Scheduled Install Time during day
    *
    * @return TimeOfDay The scheduledInstallTime
    */
    public function getScheduledInstallTime()
    {
        if (array_key_exists("scheduledInstallTime", $this->_propDict)) {
            if (is_a($this->_propDict["scheduledInstallTime"], "\Microsoft\Graph\Model\TimeOfDay")) {
                return $this->_propDict["scheduledInstallTime"];
            } else {
                $this->_propDict["scheduledInstallTime"] = new TimeOfDay($this->_propDict["scheduledInstallTime"]);
                return $this->_propDict["scheduledInstallTime"];
            }
        }
        return null;
    }

    /**
    * Sets the scheduledInstallTime
    * Scheduled Install Time during day
    *
    * @param TimeOfDay $val The value to assign to the scheduledInstallTime
    *
    * @return WindowsUpdateScheduledInstall The WindowsUpdateScheduledInstall
    */
    public function setScheduledInstallTime($val)
    {
        $this->_propDict["scheduledInstallTime"] = $val;
         return $this;
    }
}
