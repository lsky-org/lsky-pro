<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosUpdateDeviceStatus File
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
* IosUpdateDeviceStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IosUpdateDeviceStatus extends Entity
{
    /**
    * Gets the complianceGracePeriodExpirationDateTime
    * The DateTime when device compliance grace period expires
    *
    * @return \DateTime The complianceGracePeriodExpirationDateTime
    */
    public function getComplianceGracePeriodExpirationDateTime()
    {
        if (array_key_exists("complianceGracePeriodExpirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["complianceGracePeriodExpirationDateTime"], "\DateTime")) {
                return $this->_propDict["complianceGracePeriodExpirationDateTime"];
            } else {
                $this->_propDict["complianceGracePeriodExpirationDateTime"] = new \DateTime($this->_propDict["complianceGracePeriodExpirationDateTime"]);
                return $this->_propDict["complianceGracePeriodExpirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the complianceGracePeriodExpirationDateTime
    * The DateTime when device compliance grace period expires
    *
    * @param \DateTime $val The complianceGracePeriodExpirationDateTime
    *
    * @return IosUpdateDeviceStatus
    */
    public function setComplianceGracePeriodExpirationDateTime($val)
    {
        $this->_propDict["complianceGracePeriodExpirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceDisplayName
    * Device name of the DevicePolicyStatus.
    *
    * @return string The deviceDisplayName
    */
    public function getDeviceDisplayName()
    {
        if (array_key_exists("deviceDisplayName", $this->_propDict)) {
            return $this->_propDict["deviceDisplayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceDisplayName
    * Device name of the DevicePolicyStatus.
    *
    * @param string $val The deviceDisplayName
    *
    * @return IosUpdateDeviceStatus
    */
    public function setDeviceDisplayName($val)
    {
        $this->_propDict["deviceDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceId
    * The device id that is being reported.
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
    * The device id that is being reported.
    *
    * @param string $val The deviceId
    *
    * @return IosUpdateDeviceStatus
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceModel
    * The device model that is being reported
    *
    * @return string The deviceModel
    */
    public function getDeviceModel()
    {
        if (array_key_exists("deviceModel", $this->_propDict)) {
            return $this->_propDict["deviceModel"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceModel
    * The device model that is being reported
    *
    * @param string $val The deviceModel
    *
    * @return IosUpdateDeviceStatus
    */
    public function setDeviceModel($val)
    {
        $this->_propDict["deviceModel"] = $val;
        return $this;
    }
    
    /**
    * Gets the installStatus
    * The installation status of the policy report. Possible values are: success, available, idle, unknown, mdmClientCrashed, timeout, downloading, downloadFailed, downloadRequiresComputer, downloadInsufficientSpace, downloadInsufficientPower, downloadInsufficientNetwork, installing, installInsufficientSpace, installInsufficientPower, installPhoneCallInProgress, installFailed, notSupportedOperation, sharedDeviceUserLoggedInError, updateError, deviceOsHigherThanDesiredOsVersion, updateScanFailed.
    *
    * @return IosUpdatesInstallStatus The installStatus
    */
    public function getInstallStatus()
    {
        if (array_key_exists("installStatus", $this->_propDict)) {
            if (is_a($this->_propDict["installStatus"], "\Microsoft\Graph\Model\IosUpdatesInstallStatus")) {
                return $this->_propDict["installStatus"];
            } else {
                $this->_propDict["installStatus"] = new IosUpdatesInstallStatus($this->_propDict["installStatus"]);
                return $this->_propDict["installStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the installStatus
    * The installation status of the policy report. Possible values are: success, available, idle, unknown, mdmClientCrashed, timeout, downloading, downloadFailed, downloadRequiresComputer, downloadInsufficientSpace, downloadInsufficientPower, downloadInsufficientNetwork, installing, installInsufficientSpace, installInsufficientPower, installPhoneCallInProgress, installFailed, notSupportedOperation, sharedDeviceUserLoggedInError, updateError, deviceOsHigherThanDesiredOsVersion, updateScanFailed.
    *
    * @param IosUpdatesInstallStatus $val The installStatus
    *
    * @return IosUpdateDeviceStatus
    */
    public function setInstallStatus($val)
    {
        $this->_propDict["installStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastReportedDateTime
    * Last modified date time of the policy report.
    *
    * @return \DateTime The lastReportedDateTime
    */
    public function getLastReportedDateTime()
    {
        if (array_key_exists("lastReportedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastReportedDateTime"], "\DateTime")) {
                return $this->_propDict["lastReportedDateTime"];
            } else {
                $this->_propDict["lastReportedDateTime"] = new \DateTime($this->_propDict["lastReportedDateTime"]);
                return $this->_propDict["lastReportedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastReportedDateTime
    * Last modified date time of the policy report.
    *
    * @param \DateTime $val The lastReportedDateTime
    *
    * @return IosUpdateDeviceStatus
    */
    public function setLastReportedDateTime($val)
    {
        $this->_propDict["lastReportedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the osVersion
    * The device version that is being reported.
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
    * The device version that is being reported.
    *
    * @param string $val The osVersion
    *
    * @return IosUpdateDeviceStatus
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * Compliance status of the policy report. Possible values are: unknown, notApplicable, compliant, remediated, nonCompliant, error, conflict, notAssigned.
    *
    * @return ComplianceStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Microsoft\Graph\Model\ComplianceStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new ComplianceStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * Compliance status of the policy report. Possible values are: unknown, notApplicable, compliant, remediated, nonCompliant, error, conflict, notAssigned.
    *
    * @param ComplianceStatus $val The status
    *
    * @return IosUpdateDeviceStatus
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    * The User id that is being reported.
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
    * The User id that is being reported.
    *
    * @param string $val The userId
    *
    * @return IosUpdateDeviceStatus
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the userName
    * The User Name that is being reported
    *
    * @return string The userName
    */
    public function getUserName()
    {
        if (array_key_exists("userName", $this->_propDict)) {
            return $this->_propDict["userName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userName
    * The User Name that is being reported
    *
    * @param string $val The userName
    *
    * @return IosUpdateDeviceStatus
    */
    public function setUserName($val)
    {
        $this->_propDict["userName"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    * UserPrincipalName.
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
    * UserPrincipalName.
    *
    * @param string $val The userPrincipalName
    *
    * @return IosUpdateDeviceStatus
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
}
