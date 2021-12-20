<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* OfficeClientCheckinStatus File
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
* OfficeClientCheckinStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class OfficeClientCheckinStatus extends Entity
{
    /**
    * Gets the appliedPolicies
    * List of policies delivered to the device as last checkin.
    *
    * @return string The appliedPolicies
    */
    public function getAppliedPolicies()
    {
        if (array_key_exists("appliedPolicies", $this->_propDict)) {
            return $this->_propDict["appliedPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the appliedPolicies
    * List of policies delivered to the device as last checkin.
    *
    * @param string $val The value of the appliedPolicies
    *
    * @return OfficeClientCheckinStatus
    */
    public function setAppliedPolicies($val)
    {
        $this->_propDict["appliedPolicies"] = $val;
        return $this;
    }

    /**
    * Gets the checkinDateTime
    * Last device check-in time in UTC.
    *
    * @return \DateTime The checkinDateTime
    */
    public function getCheckinDateTime()
    {
        if (array_key_exists("checkinDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["checkinDateTime"], "\DateTime")) {
                return $this->_propDict["checkinDateTime"];
            } else {
                $this->_propDict["checkinDateTime"] = new \DateTime($this->_propDict["checkinDateTime"]);
                return $this->_propDict["checkinDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the checkinDateTime
    * Last device check-in time in UTC.
    *
    * @param \DateTime $val The value to assign to the checkinDateTime
    *
    * @return OfficeClientCheckinStatus The OfficeClientCheckinStatus
    */
    public function setCheckinDateTime($val)
    {
        $this->_propDict["checkinDateTime"] = $val;
         return $this;
    }
    /**
    * Gets the deviceName
    * Device name trying to check-in.
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
    * Device name trying to check-in.
    *
    * @param string $val The value of the deviceName
    *
    * @return OfficeClientCheckinStatus
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }
    /**
    * Gets the devicePlatform
    * Device platform trying to check-in.
    *
    * @return string The devicePlatform
    */
    public function getDevicePlatform()
    {
        if (array_key_exists("devicePlatform", $this->_propDict)) {
            return $this->_propDict["devicePlatform"];
        } else {
            return null;
        }
    }

    /**
    * Sets the devicePlatform
    * Device platform trying to check-in.
    *
    * @param string $val The value of the devicePlatform
    *
    * @return OfficeClientCheckinStatus
    */
    public function setDevicePlatform($val)
    {
        $this->_propDict["devicePlatform"] = $val;
        return $this;
    }
    /**
    * Gets the devicePlatformVersion
    * Device platform version trying to check-in.
    *
    * @return string The devicePlatformVersion
    */
    public function getDevicePlatformVersion()
    {
        if (array_key_exists("devicePlatformVersion", $this->_propDict)) {
            return $this->_propDict["devicePlatformVersion"];
        } else {
            return null;
        }
    }

    /**
    * Sets the devicePlatformVersion
    * Device platform version trying to check-in.
    *
    * @param string $val The value of the devicePlatformVersion
    *
    * @return OfficeClientCheckinStatus
    */
    public function setDevicePlatformVersion($val)
    {
        $this->_propDict["devicePlatformVersion"] = $val;
        return $this;
    }
    /**
    * Gets the errorMessage
    * Error message if any associated for the last checkin.
    *
    * @return string The errorMessage
    */
    public function getErrorMessage()
    {
        if (array_key_exists("errorMessage", $this->_propDict)) {
            return $this->_propDict["errorMessage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the errorMessage
    * Error message if any associated for the last checkin.
    *
    * @param string $val The value of the errorMessage
    *
    * @return OfficeClientCheckinStatus
    */
    public function setErrorMessage($val)
    {
        $this->_propDict["errorMessage"] = $val;
        return $this;
    }
    /**
    * Gets the userId
    * User identifier using the device.
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
    * User identifier using the device.
    *
    * @param string $val The value of the userId
    *
    * @return OfficeClientCheckinStatus
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    /**
    * Gets the userPrincipalName
    * User principal name using the device.
    *
    * @return string The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userPrincipalName
    * User principal name using the device.
    *
    * @param string $val The value of the userPrincipalName
    *
    * @return OfficeClientCheckinStatus
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    /**
    * Gets the wasSuccessful
    * If the last checkin was successful.
    *
    * @return bool The wasSuccessful
    */
    public function getWasSuccessful()
    {
        if (array_key_exists("wasSuccessful", $this->_propDict)) {
            return $this->_propDict["wasSuccessful"];
        } else {
            return null;
        }
    }

    /**
    * Sets the wasSuccessful
    * If the last checkin was successful.
    *
    * @param bool $val The value of the wasSuccessful
    *
    * @return OfficeClientCheckinStatus
    */
    public function setWasSuccessful($val)
    {
        $this->_propDict["wasSuccessful"] = $val;
        return $this;
    }
}
