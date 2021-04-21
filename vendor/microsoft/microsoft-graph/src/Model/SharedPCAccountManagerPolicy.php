<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SharedPCAccountManagerPolicy File
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
* SharedPCAccountManagerPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SharedPCAccountManagerPolicy extends Entity
{

    /**
    * Gets the accountDeletionPolicy
    * Configures when accounts are deleted. Possible values are: immediate, diskSpaceThreshold, diskSpaceThresholdOrInactiveThreshold.
    *
    * @return SharedPCAccountDeletionPolicyType The accountDeletionPolicy
    */
    public function getAccountDeletionPolicy()
    {
        if (array_key_exists("accountDeletionPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["accountDeletionPolicy"], "\Microsoft\Graph\Model\SharedPCAccountDeletionPolicyType")) {
                return $this->_propDict["accountDeletionPolicy"];
            } else {
                $this->_propDict["accountDeletionPolicy"] = new SharedPCAccountDeletionPolicyType($this->_propDict["accountDeletionPolicy"]);
                return $this->_propDict["accountDeletionPolicy"];
            }
        }
        return null;
    }

    /**
    * Sets the accountDeletionPolicy
    * Configures when accounts are deleted. Possible values are: immediate, diskSpaceThreshold, diskSpaceThresholdOrInactiveThreshold.
    *
    * @param SharedPCAccountDeletionPolicyType $val The value to assign to the accountDeletionPolicy
    *
    * @return SharedPCAccountManagerPolicy The SharedPCAccountManagerPolicy
    */
    public function setAccountDeletionPolicy($val)
    {
        $this->_propDict["accountDeletionPolicy"] = $val;
         return $this;
    }
    /**
    * Gets the cacheAccountsAboveDiskFreePercentage
    * Sets the percentage of available disk space a PC should have before it stops deleting cached shared PC accounts. Only applies when AccountDeletionPolicy is DiskSpaceThreshold or DiskSpaceThresholdOrInactiveThreshold. Valid values 0 to 100
    *
    * @return int The cacheAccountsAboveDiskFreePercentage
    */
    public function getCacheAccountsAboveDiskFreePercentage()
    {
        if (array_key_exists("cacheAccountsAboveDiskFreePercentage", $this->_propDict)) {
            return $this->_propDict["cacheAccountsAboveDiskFreePercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the cacheAccountsAboveDiskFreePercentage
    * Sets the percentage of available disk space a PC should have before it stops deleting cached shared PC accounts. Only applies when AccountDeletionPolicy is DiskSpaceThreshold or DiskSpaceThresholdOrInactiveThreshold. Valid values 0 to 100
    *
    * @param int $val The value of the cacheAccountsAboveDiskFreePercentage
    *
    * @return SharedPCAccountManagerPolicy
    */
    public function setCacheAccountsAboveDiskFreePercentage($val)
    {
        $this->_propDict["cacheAccountsAboveDiskFreePercentage"] = $val;
        return $this;
    }
    /**
    * Gets the inactiveThresholdDays
    * Specifies when the accounts will start being deleted when they have not been logged on during the specified period, given as number of days. Only applies when AccountDeletionPolicy is DiskSpaceThreshold or DiskSpaceThresholdOrInactiveThreshold.
    *
    * @return int The inactiveThresholdDays
    */
    public function getInactiveThresholdDays()
    {
        if (array_key_exists("inactiveThresholdDays", $this->_propDict)) {
            return $this->_propDict["inactiveThresholdDays"];
        } else {
            return null;
        }
    }

    /**
    * Sets the inactiveThresholdDays
    * Specifies when the accounts will start being deleted when they have not been logged on during the specified period, given as number of days. Only applies when AccountDeletionPolicy is DiskSpaceThreshold or DiskSpaceThresholdOrInactiveThreshold.
    *
    * @param int $val The value of the inactiveThresholdDays
    *
    * @return SharedPCAccountManagerPolicy
    */
    public function setInactiveThresholdDays($val)
    {
        $this->_propDict["inactiveThresholdDays"] = $val;
        return $this;
    }
    /**
    * Gets the removeAccountsBelowDiskFreePercentage
    * Sets the percentage of disk space remaining on a PC before cached accounts will be deleted to free disk space. Accounts that have been inactive the longest will be deleted first. Only applies when AccountDeletionPolicy is DiskSpaceThresholdOrInactiveThreshold. Valid values 0 to 100
    *
    * @return int The removeAccountsBelowDiskFreePercentage
    */
    public function getRemoveAccountsBelowDiskFreePercentage()
    {
        if (array_key_exists("removeAccountsBelowDiskFreePercentage", $this->_propDict)) {
            return $this->_propDict["removeAccountsBelowDiskFreePercentage"];
        } else {
            return null;
        }
    }

    /**
    * Sets the removeAccountsBelowDiskFreePercentage
    * Sets the percentage of disk space remaining on a PC before cached accounts will be deleted to free disk space. Accounts that have been inactive the longest will be deleted first. Only applies when AccountDeletionPolicy is DiskSpaceThresholdOrInactiveThreshold. Valid values 0 to 100
    *
    * @param int $val The value of the removeAccountsBelowDiskFreePercentage
    *
    * @return SharedPCAccountManagerPolicy
    */
    public function setRemoveAccountsBelowDiskFreePercentage($val)
    {
        $this->_propDict["removeAccountsBelowDiskFreePercentage"] = $val;
        return $this;
    }
}
