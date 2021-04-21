<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedDeviceMobileAppConfigurationUserSummary File
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
* ManagedDeviceMobileAppConfigurationUserSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedDeviceMobileAppConfigurationUserSummary extends Entity
{
    /**
    * Gets the configurationVersion
    * Version of the policy for that overview
    *
    * @return int The configurationVersion
    */
    public function getConfigurationVersion()
    {
        if (array_key_exists("configurationVersion", $this->_propDict)) {
            return $this->_propDict["configurationVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the configurationVersion
    * Version of the policy for that overview
    *
    * @param int $val The configurationVersion
    *
    * @return ManagedDeviceMobileAppConfigurationUserSummary
    */
    public function setConfigurationVersion($val)
    {
        $this->_propDict["configurationVersion"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the conflictCount
    * Number of users in conflict
    *
    * @return int The conflictCount
    */
    public function getConflictCount()
    {
        if (array_key_exists("conflictCount", $this->_propDict)) {
            return $this->_propDict["conflictCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the conflictCount
    * Number of users in conflict
    *
    * @param int $val The conflictCount
    *
    * @return ManagedDeviceMobileAppConfigurationUserSummary
    */
    public function setConflictCount($val)
    {
        $this->_propDict["conflictCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the errorCount
    * Number of error Users
    *
    * @return int The errorCount
    */
    public function getErrorCount()
    {
        if (array_key_exists("errorCount", $this->_propDict)) {
            return $this->_propDict["errorCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the errorCount
    * Number of error Users
    *
    * @param int $val The errorCount
    *
    * @return ManagedDeviceMobileAppConfigurationUserSummary
    */
    public function setErrorCount($val)
    {
        $this->_propDict["errorCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the failedCount
    * Number of failed Users
    *
    * @return int The failedCount
    */
    public function getFailedCount()
    {
        if (array_key_exists("failedCount", $this->_propDict)) {
            return $this->_propDict["failedCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the failedCount
    * Number of failed Users
    *
    * @param int $val The failedCount
    *
    * @return ManagedDeviceMobileAppConfigurationUserSummary
    */
    public function setFailedCount($val)
    {
        $this->_propDict["failedCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the lastUpdateDateTime
    * Last update time
    *
    * @return \DateTime The lastUpdateDateTime
    */
    public function getLastUpdateDateTime()
    {
        if (array_key_exists("lastUpdateDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastUpdateDateTime"], "\DateTime")) {
                return $this->_propDict["lastUpdateDateTime"];
            } else {
                $this->_propDict["lastUpdateDateTime"] = new \DateTime($this->_propDict["lastUpdateDateTime"]);
                return $this->_propDict["lastUpdateDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastUpdateDateTime
    * Last update time
    *
    * @param \DateTime $val The lastUpdateDateTime
    *
    * @return ManagedDeviceMobileAppConfigurationUserSummary
    */
    public function setLastUpdateDateTime($val)
    {
        $this->_propDict["lastUpdateDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the notApplicableCount
    * Number of not applicable users
    *
    * @return int The notApplicableCount
    */
    public function getNotApplicableCount()
    {
        if (array_key_exists("notApplicableCount", $this->_propDict)) {
            return $this->_propDict["notApplicableCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notApplicableCount
    * Number of not applicable users
    *
    * @param int $val The notApplicableCount
    *
    * @return ManagedDeviceMobileAppConfigurationUserSummary
    */
    public function setNotApplicableCount($val)
    {
        $this->_propDict["notApplicableCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the pendingCount
    * Number of pending Users
    *
    * @return int The pendingCount
    */
    public function getPendingCount()
    {
        if (array_key_exists("pendingCount", $this->_propDict)) {
            return $this->_propDict["pendingCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the pendingCount
    * Number of pending Users
    *
    * @param int $val The pendingCount
    *
    * @return ManagedDeviceMobileAppConfigurationUserSummary
    */
    public function setPendingCount($val)
    {
        $this->_propDict["pendingCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the successCount
    * Number of succeeded Users
    *
    * @return int The successCount
    */
    public function getSuccessCount()
    {
        if (array_key_exists("successCount", $this->_propDict)) {
            return $this->_propDict["successCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the successCount
    * Number of succeeded Users
    *
    * @param int $val The successCount
    *
    * @return ManagedDeviceMobileAppConfigurationUserSummary
    */
    public function setSuccessCount($val)
    {
        $this->_propDict["successCount"] = intval($val);
        return $this;
    }
    
}
