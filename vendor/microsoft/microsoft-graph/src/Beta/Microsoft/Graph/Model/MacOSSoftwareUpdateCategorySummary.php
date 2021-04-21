<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSSoftwareUpdateCategorySummary File
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
* MacOSSoftwareUpdateCategorySummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSSoftwareUpdateCategorySummary extends Entity
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
    * @return MacOSSoftwareUpdateCategorySummary
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
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
    * @return MacOSSoftwareUpdateCategorySummary
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the failedUpdateCount
    * Number of failed updates on the device
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
    * Number of failed updates on the device
    *
    * @param int $val The failedUpdateCount
    *
    * @return MacOSSoftwareUpdateCategorySummary
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
    * @return MacOSSoftwareUpdateCategorySummary
    */
    public function setLastUpdatedDateTime($val)
    {
        $this->_propDict["lastUpdatedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the successfulUpdateCount
    * Number of successful updates on the device
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
    * Number of successful updates on the device
    *
    * @param int $val The successfulUpdateCount
    *
    * @return MacOSSoftwareUpdateCategorySummary
    */
    public function setSuccessfulUpdateCount($val)
    {
        $this->_propDict["successfulUpdateCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the totalUpdateCount
    * Number of total updates on the device
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
    * Number of total updates on the device
    *
    * @param int $val The totalUpdateCount
    *
    * @return MacOSSoftwareUpdateCategorySummary
    */
    public function setTotalUpdateCount($val)
    {
        $this->_propDict["totalUpdateCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the updateCategory
    * Software update type. Possible values are: critical, configurationDataFile, firmware, other.
    *
    * @return MacOSSoftwareUpdateCategory The updateCategory
    */
    public function getUpdateCategory()
    {
        if (array_key_exists("updateCategory", $this->_propDict)) {
            if (is_a($this->_propDict["updateCategory"], "\Beta\Microsoft\Graph\Model\MacOSSoftwareUpdateCategory")) {
                return $this->_propDict["updateCategory"];
            } else {
                $this->_propDict["updateCategory"] = new MacOSSoftwareUpdateCategory($this->_propDict["updateCategory"]);
                return $this->_propDict["updateCategory"];
            }
        }
        return null;
    }
    
    /**
    * Sets the updateCategory
    * Software update type. Possible values are: critical, configurationDataFile, firmware, other.
    *
    * @param MacOSSoftwareUpdateCategory $val The updateCategory
    *
    * @return MacOSSoftwareUpdateCategorySummary
    */
    public function setUpdateCategory($val)
    {
        $this->_propDict["updateCategory"] = $val;
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
    * @return MacOSSoftwareUpdateCategorySummary
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    

     /** 
     * Gets the updateStateSummaries
    * Summary of the update states.
     *
     * @return array The updateStateSummaries
     */
    public function getUpdateStateSummaries()
    {
        if (array_key_exists("updateStateSummaries", $this->_propDict)) {
           return $this->_propDict["updateStateSummaries"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the updateStateSummaries
    * Summary of the update states.
    *
    * @param MacOSSoftwareUpdateStateSummary $val The updateStateSummaries
    *
    * @return MacOSSoftwareUpdateCategorySummary
    */
    public function setUpdateStateSummaries($val)
    {
		$this->_propDict["updateStateSummaries"] = $val;
        return $this;
    }
    
}
