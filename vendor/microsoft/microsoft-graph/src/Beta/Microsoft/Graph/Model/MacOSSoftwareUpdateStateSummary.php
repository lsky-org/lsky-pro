<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSSoftwareUpdateStateSummary File
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
* MacOSSoftwareUpdateStateSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSSoftwareUpdateStateSummary extends Entity
{
    /**
    * Gets the displayName
    * Human readable name of the software update
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
    * Human readable name of the software update
    *
    * @param string $val The displayName
    *
    * @return MacOSSoftwareUpdateStateSummary
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastUpdatedDateTime
    * Last date time the report for this device and product key was updated.
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
    * Last date time the report for this device and product key was updated.
    *
    * @param \DateTime $val The lastUpdatedDateTime
    *
    * @return MacOSSoftwareUpdateStateSummary
    */
    public function setLastUpdatedDateTime($val)
    {
        $this->_propDict["lastUpdatedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the productKey
    * Product key of the software update.
    *
    * @return string The productKey
    */
    public function getProductKey()
    {
        if (array_key_exists("productKey", $this->_propDict)) {
            return $this->_propDict["productKey"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the productKey
    * Product key of the software update.
    *
    * @param string $val The productKey
    *
    * @return MacOSSoftwareUpdateStateSummary
    */
    public function setProductKey($val)
    {
        $this->_propDict["productKey"] = $val;
        return $this;
    }
    
    /**
    * Gets the state
    * State of the software update. Possible values are: success, downloading, downloaded, installing, idle, available, scheduled, downloadFailed, downloadInsufficientSpace, downloadInsufficientPower, downloadInsufficientNetwork, installInsufficientSpace, installInsufficientPower, installFailed, commandFailed.
    *
    * @return MacOSSoftwareUpdateState The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\MacOSSoftwareUpdateState")) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new MacOSSoftwareUpdateState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }
    
    /**
    * Sets the state
    * State of the software update. Possible values are: success, downloading, downloaded, installing, idle, available, scheduled, downloadFailed, downloadInsufficientSpace, downloadInsufficientPower, downloadInsufficientNetwork, installInsufficientSpace, installInsufficientPower, installFailed, commandFailed.
    *
    * @param MacOSSoftwareUpdateState $val The state
    *
    * @return MacOSSoftwareUpdateStateSummary
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }
    
    /**
    * Gets the updateCategory
    * Software update category. Possible values are: critical, configurationDataFile, firmware, other.
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
    * Software update category. Possible values are: critical, configurationDataFile, firmware, other.
    *
    * @param MacOSSoftwareUpdateCategory $val The updateCategory
    *
    * @return MacOSSoftwareUpdateStateSummary
    */
    public function setUpdateCategory($val)
    {
        $this->_propDict["updateCategory"] = $val;
        return $this;
    }
    
    /**
    * Gets the updateVersion
    * Version of the software update
    *
    * @return string The updateVersion
    */
    public function getUpdateVersion()
    {
        if (array_key_exists("updateVersion", $this->_propDict)) {
            return $this->_propDict["updateVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the updateVersion
    * Version of the software update
    *
    * @param string $val The updateVersion
    *
    * @return MacOSSoftwareUpdateStateSummary
    */
    public function setUpdateVersion($val)
    {
        $this->_propDict["updateVersion"] = $val;
        return $this;
    }
    
}
