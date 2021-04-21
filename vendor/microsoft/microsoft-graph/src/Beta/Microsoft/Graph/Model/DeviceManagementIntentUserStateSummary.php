<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagementIntentUserStateSummary File
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
* DeviceManagementIntentUserStateSummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceManagementIntentUserStateSummary extends Entity
{
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
    * @return DeviceManagementIntentUserStateSummary
    */
    public function setConflictCount($val)
    {
        $this->_propDict["conflictCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the errorCount
    * Number of error users
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
    * Number of error users
    *
    * @param int $val The errorCount
    *
    * @return DeviceManagementIntentUserStateSummary
    */
    public function setErrorCount($val)
    {
        $this->_propDict["errorCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the failedCount
    * Number of failed users
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
    * Number of failed users
    *
    * @param int $val The failedCount
    *
    * @return DeviceManagementIntentUserStateSummary
    */
    public function setFailedCount($val)
    {
        $this->_propDict["failedCount"] = intval($val);
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
    * @return DeviceManagementIntentUserStateSummary
    */
    public function setNotApplicableCount($val)
    {
        $this->_propDict["notApplicableCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the successCount
    * Number of succeeded users
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
    * Number of succeeded users
    *
    * @param int $val The successCount
    *
    * @return DeviceManagementIntentUserStateSummary
    */
    public function setSuccessCount($val)
    {
        $this->_propDict["successCount"] = intval($val);
        return $this;
    }
    
}
