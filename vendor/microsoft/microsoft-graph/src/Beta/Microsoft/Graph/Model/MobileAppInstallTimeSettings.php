<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppInstallTimeSettings File
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
* MobileAppInstallTimeSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobileAppInstallTimeSettings extends Entity
{

    /**
    * Gets the deadlineDateTime
    * The time at which the app should be installed.
    *
    * @return \DateTime The deadlineDateTime
    */
    public function getDeadlineDateTime()
    {
        if (array_key_exists("deadlineDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["deadlineDateTime"], "\DateTime")) {
                return $this->_propDict["deadlineDateTime"];
            } else {
                $this->_propDict["deadlineDateTime"] = new \DateTime($this->_propDict["deadlineDateTime"]);
                return $this->_propDict["deadlineDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the deadlineDateTime
    * The time at which the app should be installed.
    *
    * @param \DateTime $val The value to assign to the deadlineDateTime
    *
    * @return MobileAppInstallTimeSettings The MobileAppInstallTimeSettings
    */
    public function setDeadlineDateTime($val)
    {
        $this->_propDict["deadlineDateTime"] = $val;
         return $this;
    }

    /**
    * Gets the startDateTime
    * The time at which the app should be available for installation.
    *
    * @return \DateTime The startDateTime
    */
    public function getStartDateTime()
    {
        if (array_key_exists("startDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["startDateTime"], "\DateTime")) {
                return $this->_propDict["startDateTime"];
            } else {
                $this->_propDict["startDateTime"] = new \DateTime($this->_propDict["startDateTime"]);
                return $this->_propDict["startDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the startDateTime
    * The time at which the app should be available for installation.
    *
    * @param \DateTime $val The value to assign to the startDateTime
    *
    * @return MobileAppInstallTimeSettings The MobileAppInstallTimeSettings
    */
    public function setStartDateTime($val)
    {
        $this->_propDict["startDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the useLocalTime
    * Whether the local device time or UTC time should be used when determining the available and deadline times.
    *
    * @return bool The useLocalTime
    */
    public function getUseLocalTime()
    {
        if (array_key_exists("useLocalTime", $this->_propDict)) {
            return $this->_propDict["useLocalTime"];
        } else {
            return null;
        }
    }

    /**
    * Sets the useLocalTime
    * Whether the local device time or UTC time should be used when determining the available and deadline times.
    *
    * @param bool $val The value of the useLocalTime
    *
    * @return MobileAppInstallTimeSettings
    */
    public function setUseLocalTime($val)
    {
        $this->_propDict["useLocalTime"] = $val;
        return $this;
    }
}
