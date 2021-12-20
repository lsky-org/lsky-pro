<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceEnrollmentPlatformRestriction File
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
* DeviceEnrollmentPlatformRestriction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceEnrollmentPlatformRestriction extends Entity
{
    /**
    * Gets the osMaximumVersion
    * Max OS version supported
    *
    * @return string The osMaximumVersion
    */
    public function getOsMaximumVersion()
    {
        if (array_key_exists("osMaximumVersion", $this->_propDict)) {
            return $this->_propDict["osMaximumVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the osMaximumVersion
    * Max OS version supported
    *
    * @param string $val The value of the osMaximumVersion
    *
    * @return DeviceEnrollmentPlatformRestriction
    */
    public function setOsMaximumVersion($val)
    {
        $this->_propDict["osMaximumVersion"] = $val;
        return $this;
    }
    /**
    * Gets the osMinimumVersion
    * Min OS version supported
    *
    * @return string The osMinimumVersion
    */
    public function getOsMinimumVersion()
    {
        if (array_key_exists("osMinimumVersion", $this->_propDict)) {
            return $this->_propDict["osMinimumVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the osMinimumVersion
    * Min OS version supported
    *
    * @param string $val The value of the osMinimumVersion
    *
    * @return DeviceEnrollmentPlatformRestriction
    */
    public function setOsMinimumVersion($val)
    {
        $this->_propDict["osMinimumVersion"] = $val;
        return $this;
    }
    /**
    * Gets the personalDeviceEnrollmentBlocked
    * Block personally owned devices from enrolling
    *
    * @return bool The personalDeviceEnrollmentBlocked
    */
    public function getPersonalDeviceEnrollmentBlocked()
    {
        if (array_key_exists("personalDeviceEnrollmentBlocked", $this->_propDict)) {
            return $this->_propDict["personalDeviceEnrollmentBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the personalDeviceEnrollmentBlocked
    * Block personally owned devices from enrolling
    *
    * @param bool $val The value of the personalDeviceEnrollmentBlocked
    *
    * @return DeviceEnrollmentPlatformRestriction
    */
    public function setPersonalDeviceEnrollmentBlocked($val)
    {
        $this->_propDict["personalDeviceEnrollmentBlocked"] = $val;
        return $this;
    }
    /**
    * Gets the platformBlocked
    * Block the platform from enrolling
    *
    * @return bool The platformBlocked
    */
    public function getPlatformBlocked()
    {
        if (array_key_exists("platformBlocked", $this->_propDict)) {
            return $this->_propDict["platformBlocked"];
        } else {
            return null;
        }
    }

    /**
    * Sets the platformBlocked
    * Block the platform from enrolling
    *
    * @param bool $val The value of the platformBlocked
    *
    * @return DeviceEnrollmentPlatformRestriction
    */
    public function setPlatformBlocked($val)
    {
        $this->_propDict["platformBlocked"] = $val;
        return $this;
    }
}
