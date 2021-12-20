<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSSoftwareUpdateAccountSummary File
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
* MacOSSoftwareUpdateAccountSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSSoftwareUpdateAccountSummary extends Entity
{
    /**
    * Gets the deviceId
    * The device ID.
    *
    * @return string The deviceId
    */
    public function getDeviceId()
    {
        if (array_key_exists("deviceId", $this->_propDict)) {
            return $this->_propDict["deviceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceId
    * The device ID.
    *
    * @param string $val The deviceId
    *
    * @return MacOSSoftwareUpdateAccountSummary
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceName
    * The device name.
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
    * The device name.
    *
    * @param string $val The deviceName
    *
    * @return MacOSSoftwareUpdateAccountSummary
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the displayName
    * The name of the report
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    * The name of the report
    *
    * @param string $val The displayName
    *
    * @return MacOSSoftwareUpdateAccountSummary
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the failedUpdateCount
    * Number of failed updates on the device.
    *
    * @return int The failedUpdateCount
    */
    public function getFailedUpdateCount()
    {
        if (array_key_exists("failedUpdateCount", $this->_propDict)) {
            return $this->_propDict["failedUpdateCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the failedUpdateCount
    * Number of failed updates on the device.
    *
    * @param int $val The failedUpdateCount
    *
    * @return MacOSSoftwareUpdateAccountSummary
    */
    public function setFailedUpdateCount($val)
    {
        $this->_propDict["failedUpdateCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the lastUpdatedDateTime
    * Last date time the report for this device was updated.
    *
    * @return \DateTime The lastUpdatedDateTime
    */
    public function getLastUpdatedDateTime()
    {
        if (array_key_exists("lastUpdatedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdatedDateTime"], "\DateTime")) {
                return $this->_propDict["lastUpdatedDateTime"];
            } else {
                $this->_propDict["lastUpdatedDateTime"] = new \DateTime($this->_propDict["lastUpdatedDateTime"]);
                return $this->_propDict["lastUpdatedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastUpdatedDateTime
    * Last date time the report for this device was updated.
    *
    * @param \DateTime $val The lastUpdatedDateTime
    *
    * @return MacOSSoftwareUpdateAccountSummary
    */
    public function setLastUpdatedDateTime($val)
    {
        $this->_propDict["lastUpdatedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the osVersion
    * The OS version.
    *
    * @return string The osVersion
    */
    public function getOsVersion()
    {
        if (array_key_exists("osVersion", $this->_propDict)) {
            return $this->_propDict["osVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the osVersion
    * The OS version.
    *
    * @param string $val The osVersion
    *
    * @return MacOSSoftwareUpdateAccountSummary
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the successfulUpdateCount
    * Number of successful updates on the device.
    *
    * @return int The successfulUpdateCount
    */
    public function getSuccessfulUpdateCount()
    {
        if (array_key_exists("successfulUpdateCount", $this->_propDict)) {
            return $this->_propDict["successfulUpdateCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the successfulUpdateCount
    * Number of successful updates on the device.
    *
    * @param int $val The successfulUpdateCount
    *
    * @return MacOSSoftwareUpdateAccountSummary
    */
    public function setSuccessfulUpdateCount($val)
    {
        $this->_propDict["successfulUpdateCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the totalUpdateCount
    * Number of total updates on the device.
    *
    * @return int The totalUpdateCount
    */
    public function getTotalUpdateCount()
    {
        if (array_key_exists("totalUpdateCount", $this->_propDict)) {
            return $this->_propDict["totalUpdateCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the totalUpdateCount
    * Number of total updates on the device.
    *
    * @param int $val The totalUpdateCount
    *
    * @return MacOSSoftwareUpdateAccountSummary
    */
    public function setTotalUpdateCount($val)
    {
        $this->_propDict["totalUpdateCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the userId
    * The user ID.
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
    * The user ID.
    *
    * @param string $val The userId
    *
    * @return MacOSSoftwareUpdateAccountSummary
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    * The user principal name
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
    * The user principal name
    *
    * @param string $val The userPrincipalName
    *
    * @return MacOSSoftwareUpdateAccountSummary
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    

     /** 
     * Gets the categorySummaries
    * Summary of the updates by category.
     *
     * @return array The categorySummaries
     */
    public function getCategorySummaries()
    {
        if (array_key_exists("categorySummaries", $this->_propDict)) {
           return $this->_propDict["categorySummaries"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the categorySummaries
    * Summary of the updates by category.
    *
    * @param MacOSSoftwareUpdateCategorySummary $val The categorySummaries
    *
    * @return MacOSSoftwareUpdateAccountSummary
    */
    public function setCategorySummaries($val)
    {
		$this->_propDict["categorySummaries"] = $val;
        return $this;
    }
    
}
