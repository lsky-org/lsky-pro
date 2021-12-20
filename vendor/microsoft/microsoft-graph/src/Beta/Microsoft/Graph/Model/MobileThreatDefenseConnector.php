<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileThreatDefenseConnector File
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
* MobileThreatDefenseConnector class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobileThreatDefenseConnector extends Entity
{
    /**
    * Gets the allowPartnerToCollectIOSApplicationMetadata
    * For IOS devices, allows the admin to configure whether the data sync partner may also collect metadata about installed applications from Intune
    *
    * @return bool The allowPartnerToCollectIOSApplicationMetadata
    */
    public function getAllowPartnerToCollectIOSApplicationMetadata()
    {
        if (array_key_exists("allowPartnerToCollectIOSApplicationMetadata", $this->_propDict)) {
            return $this->_propDict["allowPartnerToCollectIOSApplicationMetadata"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the allowPartnerToCollectIOSApplicationMetadata
    * For IOS devices, allows the admin to configure whether the data sync partner may also collect metadata about installed applications from Intune
    *
    * @param bool $val The allowPartnerToCollectIOSApplicationMetadata
    *
    * @return MobileThreatDefenseConnector
    */
    public function setAllowPartnerToCollectIOSApplicationMetadata($val)
    {
        $this->_propDict["allowPartnerToCollectIOSApplicationMetadata"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the androidDeviceBlockedOnMissingPartnerData
    * For Android, set whether Intune must receive data from the data sync partner prior to marking a device compliant
    *
    * @return bool The androidDeviceBlockedOnMissingPartnerData
    */
    public function getAndroidDeviceBlockedOnMissingPartnerData()
    {
        if (array_key_exists("androidDeviceBlockedOnMissingPartnerData", $this->_propDict)) {
            return $this->_propDict["androidDeviceBlockedOnMissingPartnerData"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the androidDeviceBlockedOnMissingPartnerData
    * For Android, set whether Intune must receive data from the data sync partner prior to marking a device compliant
    *
    * @param bool $val The androidDeviceBlockedOnMissingPartnerData
    *
    * @return MobileThreatDefenseConnector
    */
    public function setAndroidDeviceBlockedOnMissingPartnerData($val)
    {
        $this->_propDict["androidDeviceBlockedOnMissingPartnerData"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the androidEnabled
    * For Android, set whether data from the data sync partner should be used during compliance evaluations
    *
    * @return bool The androidEnabled
    */
    public function getAndroidEnabled()
    {
        if (array_key_exists("androidEnabled", $this->_propDict)) {
            return $this->_propDict["androidEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the androidEnabled
    * For Android, set whether data from the data sync partner should be used during compliance evaluations
    *
    * @param bool $val The androidEnabled
    *
    * @return MobileThreatDefenseConnector
    */
    public function setAndroidEnabled($val)
    {
        $this->_propDict["androidEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the androidMobileApplicationManagementEnabled
    * For Android, set whether data from the data sync partner should be used during Mobile Application Management (MAM) evaluations. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation.
    *
    * @return bool The androidMobileApplicationManagementEnabled
    */
    public function getAndroidMobileApplicationManagementEnabled()
    {
        if (array_key_exists("androidMobileApplicationManagementEnabled", $this->_propDict)) {
            return $this->_propDict["androidMobileApplicationManagementEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the androidMobileApplicationManagementEnabled
    * For Android, set whether data from the data sync partner should be used during Mobile Application Management (MAM) evaluations. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation.
    *
    * @param bool $val The androidMobileApplicationManagementEnabled
    *
    * @return MobileThreatDefenseConnector
    */
    public function setAndroidMobileApplicationManagementEnabled($val)
    {
        $this->_propDict["androidMobileApplicationManagementEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iosDeviceBlockedOnMissingPartnerData
    * For IOS, set whether Intune must receive data from the data sync partner prior to marking a device compliant
    *
    * @return bool The iosDeviceBlockedOnMissingPartnerData
    */
    public function getIosDeviceBlockedOnMissingPartnerData()
    {
        if (array_key_exists("iosDeviceBlockedOnMissingPartnerData", $this->_propDict)) {
            return $this->_propDict["iosDeviceBlockedOnMissingPartnerData"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iosDeviceBlockedOnMissingPartnerData
    * For IOS, set whether Intune must receive data from the data sync partner prior to marking a device compliant
    *
    * @param bool $val The iosDeviceBlockedOnMissingPartnerData
    *
    * @return MobileThreatDefenseConnector
    */
    public function setIosDeviceBlockedOnMissingPartnerData($val)
    {
        $this->_propDict["iosDeviceBlockedOnMissingPartnerData"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iosEnabled
    * For IOS, get or set whether data from the data sync partner should be used during compliance evaluations
    *
    * @return bool The iosEnabled
    */
    public function getIosEnabled()
    {
        if (array_key_exists("iosEnabled", $this->_propDict)) {
            return $this->_propDict["iosEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iosEnabled
    * For IOS, get or set whether data from the data sync partner should be used during compliance evaluations
    *
    * @param bool $val The iosEnabled
    *
    * @return MobileThreatDefenseConnector
    */
    public function setIosEnabled($val)
    {
        $this->_propDict["iosEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the iosMobileApplicationManagementEnabled
    * For IOS, get or set whether data from the data sync partner should be used during Mobile Application Management (MAM) evaluations. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation.
    *
    * @return bool The iosMobileApplicationManagementEnabled
    */
    public function getIosMobileApplicationManagementEnabled()
    {
        if (array_key_exists("iosMobileApplicationManagementEnabled", $this->_propDict)) {
            return $this->_propDict["iosMobileApplicationManagementEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the iosMobileApplicationManagementEnabled
    * For IOS, get or set whether data from the data sync partner should be used during Mobile Application Management (MAM) evaluations. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation.
    *
    * @param bool $val The iosMobileApplicationManagementEnabled
    *
    * @return MobileThreatDefenseConnector
    */
    public function setIosMobileApplicationManagementEnabled($val)
    {
        $this->_propDict["iosMobileApplicationManagementEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastHeartbeatDateTime
    * DateTime of last Heartbeat recieved from the Data Sync Partner
    *
    * @return \DateTime The lastHeartbeatDateTime
    */
    public function getLastHeartbeatDateTime()
    {
        if (array_key_exists("lastHeartbeatDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastHeartbeatDateTime"], "\DateTime")) {
                return $this->_propDict["lastHeartbeatDateTime"];
            } else {
                $this->_propDict["lastHeartbeatDateTime"] = new \DateTime($this->_propDict["lastHeartbeatDateTime"]);
                return $this->_propDict["lastHeartbeatDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastHeartbeatDateTime
    * DateTime of last Heartbeat recieved from the Data Sync Partner
    *
    * @param \DateTime $val The lastHeartbeatDateTime
    *
    * @return MobileThreatDefenseConnector
    */
    public function setLastHeartbeatDateTime($val)
    {
        $this->_propDict["lastHeartbeatDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the macDeviceBlockedOnMissingPartnerData
    * For Mac, get or set whether Intune must receive data from the data sync partner prior to marking a device compliant
    *
    * @return bool The macDeviceBlockedOnMissingPartnerData
    */
    public function getMacDeviceBlockedOnMissingPartnerData()
    {
        if (array_key_exists("macDeviceBlockedOnMissingPartnerData", $this->_propDict)) {
            return $this->_propDict["macDeviceBlockedOnMissingPartnerData"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the macDeviceBlockedOnMissingPartnerData
    * For Mac, get or set whether Intune must receive data from the data sync partner prior to marking a device compliant
    *
    * @param bool $val The macDeviceBlockedOnMissingPartnerData
    *
    * @return MobileThreatDefenseConnector
    */
    public function setMacDeviceBlockedOnMissingPartnerData($val)
    {
        $this->_propDict["macDeviceBlockedOnMissingPartnerData"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the macEnabled
    * For Mac, get or set whether data from the data sync partner should be used during compliance evaluations
    *
    * @return bool The macEnabled
    */
    public function getMacEnabled()
    {
        if (array_key_exists("macEnabled", $this->_propDict)) {
            return $this->_propDict["macEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the macEnabled
    * For Mac, get or set whether data from the data sync partner should be used during compliance evaluations
    *
    * @param bool $val The macEnabled
    *
    * @return MobileThreatDefenseConnector
    */
    public function setMacEnabled($val)
    {
        $this->_propDict["macEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the partnerState
    * Data Sync Partner state for this account. Possible values are: unavailable, available, enabled, unresponsive.
    *
    * @return MobileThreatPartnerTenantState The partnerState
    */
    public function getPartnerState()
    {
        if (array_key_exists("partnerState", $this->_propDict)) {
            if (is_a($this->_propDict["partnerState"], "\Beta\Microsoft\Graph\Model\MobileThreatPartnerTenantState")) {
                return $this->_propDict["partnerState"];
            } else {
                $this->_propDict["partnerState"] = new MobileThreatPartnerTenantState($this->_propDict["partnerState"]);
                return $this->_propDict["partnerState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the partnerState
    * Data Sync Partner state for this account. Possible values are: unavailable, available, enabled, unresponsive.
    *
    * @param MobileThreatPartnerTenantState $val The partnerState
    *
    * @return MobileThreatDefenseConnector
    */
    public function setPartnerState($val)
    {
        $this->_propDict["partnerState"] = $val;
        return $this;
    }
    
    /**
    * Gets the partnerUnresponsivenessThresholdInDays
    * Get or Set days the per tenant tolerance to unresponsiveness for this partner integration
    *
    * @return int The partnerUnresponsivenessThresholdInDays
    */
    public function getPartnerUnresponsivenessThresholdInDays()
    {
        if (array_key_exists("partnerUnresponsivenessThresholdInDays", $this->_propDict)) {
            return $this->_propDict["partnerUnresponsivenessThresholdInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the partnerUnresponsivenessThresholdInDays
    * Get or Set days the per tenant tolerance to unresponsiveness for this partner integration
    *
    * @param int $val The partnerUnresponsivenessThresholdInDays
    *
    * @return MobileThreatDefenseConnector
    */
    public function setPartnerUnresponsivenessThresholdInDays($val)
    {
        $this->_propDict["partnerUnresponsivenessThresholdInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the partnerUnsupportedOsVersionBlocked
    * Get or set whether to block devices on the enabled platforms that do not meet the minimum version requirements of the Data Sync Partner
    *
    * @return bool The partnerUnsupportedOsVersionBlocked
    */
    public function getPartnerUnsupportedOsVersionBlocked()
    {
        if (array_key_exists("partnerUnsupportedOsVersionBlocked", $this->_propDict)) {
            return $this->_propDict["partnerUnsupportedOsVersionBlocked"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the partnerUnsupportedOsVersionBlocked
    * Get or set whether to block devices on the enabled platforms that do not meet the minimum version requirements of the Data Sync Partner
    *
    * @param bool $val The partnerUnsupportedOsVersionBlocked
    *
    * @return MobileThreatDefenseConnector
    */
    public function setPartnerUnsupportedOsVersionBlocked($val)
    {
        $this->_propDict["partnerUnsupportedOsVersionBlocked"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the windowsDeviceBlockedOnMissingPartnerData
    * For Windows, set whether Intune must receive data from the data sync partner prior to marking a device compliant
    *
    * @return bool The windowsDeviceBlockedOnMissingPartnerData
    */
    public function getWindowsDeviceBlockedOnMissingPartnerData()
    {
        if (array_key_exists("windowsDeviceBlockedOnMissingPartnerData", $this->_propDict)) {
            return $this->_propDict["windowsDeviceBlockedOnMissingPartnerData"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the windowsDeviceBlockedOnMissingPartnerData
    * For Windows, set whether Intune must receive data from the data sync partner prior to marking a device compliant
    *
    * @param bool $val The windowsDeviceBlockedOnMissingPartnerData
    *
    * @return MobileThreatDefenseConnector
    */
    public function setWindowsDeviceBlockedOnMissingPartnerData($val)
    {
        $this->_propDict["windowsDeviceBlockedOnMissingPartnerData"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the windowsEnabled
    * For Windows, get or set whether data from the data sync partner should be used during compliance evaluations
    *
    * @return bool The windowsEnabled
    */
    public function getWindowsEnabled()
    {
        if (array_key_exists("windowsEnabled", $this->_propDict)) {
            return $this->_propDict["windowsEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the windowsEnabled
    * For Windows, get or set whether data from the data sync partner should be used during compliance evaluations
    *
    * @param bool $val The windowsEnabled
    *
    * @return MobileThreatDefenseConnector
    */
    public function setWindowsEnabled($val)
    {
        $this->_propDict["windowsEnabled"] = boolval($val);
        return $this;
    }
    
}
