<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ConfigManagerPolicySummary File
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
* ConfigManagerPolicySummary class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ConfigManagerPolicySummary extends Entity
{
    /**
    * Gets the compliantDeviceCount
    * The number of devices evaluated to be compliant by the policy.
    *
    * @return int The compliantDeviceCount
    */
    public function getCompliantDeviceCount()
    {
        if (array_key_exists("compliantDeviceCount", $this->_propDict)) {
            return $this->_propDict["compliantDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the compliantDeviceCount
    * The number of devices evaluated to be compliant by the policy.
    *
    * @param int $val The value of the compliantDeviceCount
    *
    * @return ConfigManagerPolicySummary
    */
    public function setCompliantDeviceCount($val)
    {
        $this->_propDict["compliantDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the enforcedDeviceCount
    * The number of devices that have have been remediated by the policy.
    *
    * @return int The enforcedDeviceCount
    */
    public function getEnforcedDeviceCount()
    {
        if (array_key_exists("enforcedDeviceCount", $this->_propDict)) {
            return $this->_propDict["enforcedDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the enforcedDeviceCount
    * The number of devices that have have been remediated by the policy.
    *
    * @param int $val The value of the enforcedDeviceCount
    *
    * @return ConfigManagerPolicySummary
    */
    public function setEnforcedDeviceCount($val)
    {
        $this->_propDict["enforcedDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the failedDeviceCount
    * The number of devices that failed to be evaluated by the policy.
    *
    * @return int The failedDeviceCount
    */
    public function getFailedDeviceCount()
    {
        if (array_key_exists("failedDeviceCount", $this->_propDict)) {
            return $this->_propDict["failedDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the failedDeviceCount
    * The number of devices that failed to be evaluated by the policy.
    *
    * @param int $val The value of the failedDeviceCount
    *
    * @return ConfigManagerPolicySummary
    */
    public function setFailedDeviceCount($val)
    {
        $this->_propDict["failedDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the nonCompliantDeviceCount
    * The number of devices evaluated to be noncompliant by the policy.
    *
    * @return int The nonCompliantDeviceCount
    */
    public function getNonCompliantDeviceCount()
    {
        if (array_key_exists("nonCompliantDeviceCount", $this->_propDict)) {
            return $this->_propDict["nonCompliantDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the nonCompliantDeviceCount
    * The number of devices evaluated to be noncompliant by the policy.
    *
    * @param int $val The value of the nonCompliantDeviceCount
    *
    * @return ConfigManagerPolicySummary
    */
    public function setNonCompliantDeviceCount($val)
    {
        $this->_propDict["nonCompliantDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the pendingDeviceCount
    * The number of devices that have acknowledged the policy but are pending evaluation.
    *
    * @return int The pendingDeviceCount
    */
    public function getPendingDeviceCount()
    {
        if (array_key_exists("pendingDeviceCount", $this->_propDict)) {
            return $this->_propDict["pendingDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the pendingDeviceCount
    * The number of devices that have acknowledged the policy but are pending evaluation.
    *
    * @param int $val The value of the pendingDeviceCount
    *
    * @return ConfigManagerPolicySummary
    */
    public function setPendingDeviceCount($val)
    {
        $this->_propDict["pendingDeviceCount"] = $val;
        return $this;
    }
    /**
    * Gets the targetedDeviceCount
    * The number of devices targeted by the policy.
    *
    * @return int The targetedDeviceCount
    */
    public function getTargetedDeviceCount()
    {
        if (array_key_exists("targetedDeviceCount", $this->_propDict)) {
            return $this->_propDict["targetedDeviceCount"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targetedDeviceCount
    * The number of devices targeted by the policy.
    *
    * @param int $val The value of the targetedDeviceCount
    *
    * @return ConfigManagerPolicySummary
    */
    public function setTargetedDeviceCount($val)
    {
        $this->_propDict["targetedDeviceCount"] = $val;
        return $this;
    }
}
