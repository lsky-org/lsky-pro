<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsUpdateState File
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
* WindowsUpdateState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsUpdateState extends Entity
{
    /**
    * Gets the deviceDisplayName
    * Device display name.
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
    * Device display name.
    *
    * @param string $val The deviceDisplayName
    *
    * @return WindowsUpdateState
    */
    public function setDeviceDisplayName($val)
    {
        $this->_propDict["deviceDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceId
    * The id of the device.
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
    * The id of the device.
    *
    * @param string $val The deviceId
    *
    * @return WindowsUpdateState
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the featureUpdateVersion
    * The current feature update version of the device.
    *
    * @return string The featureUpdateVersion
    */
    public function getFeatureUpdateVersion()
    {
        if (array_key_exists("featureUpdateVersion", $this->_propDict)) {
            return $this->_propDict["featureUpdateVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the featureUpdateVersion
    * The current feature update version of the device.
    *
    * @param string $val The featureUpdateVersion
    *
    * @return WindowsUpdateState
    */
    public function setFeatureUpdateVersion($val)
    {
        $this->_propDict["featureUpdateVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastScanDateTime
    * The date time that the Windows Update Agent did a successful scan.
    *
    * @return \DateTime The lastScanDateTime
    */
    public function getLastScanDateTime()
    {
        if (array_key_exists("lastScanDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastScanDateTime"], "\DateTime")) {
                return $this->_propDict["lastScanDateTime"];
            } else {
                $this->_propDict["lastScanDateTime"] = new \DateTime($this->_propDict["lastScanDateTime"]);
                return $this->_propDict["lastScanDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastScanDateTime
    * The date time that the Windows Update Agent did a successful scan.
    *
    * @param \DateTime $val The lastScanDateTime
    *
    * @return WindowsUpdateState
    */
    public function setLastScanDateTime($val)
    {
        $this->_propDict["lastScanDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastSyncDateTime
    * Last date time that the device sync with with Microsoft Intune.
    *
    * @return \DateTime The lastSyncDateTime
    */
    public function getLastSyncDateTime()
    {
        if (array_key_exists("lastSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSyncDateTime"], "\DateTime")) {
                return $this->_propDict["lastSyncDateTime"];
            } else {
                $this->_propDict["lastSyncDateTime"] = new \DateTime($this->_propDict["lastSyncDateTime"]);
                return $this->_propDict["lastSyncDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastSyncDateTime
    * Last date time that the device sync with with Microsoft Intune.
    *
    * @param \DateTime $val The lastSyncDateTime
    *
    * @return WindowsUpdateState
    */
    public function setLastSyncDateTime($val)
    {
        $this->_propDict["lastSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the qualityUpdateVersion
    * The Quality Update Version of the device.
    *
    * @return string The qualityUpdateVersion
    */
    public function getQualityUpdateVersion()
    {
        if (array_key_exists("qualityUpdateVersion", $this->_propDict)) {
            return $this->_propDict["qualityUpdateVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the qualityUpdateVersion
    * The Quality Update Version of the device.
    *
    * @param string $val The qualityUpdateVersion
    *
    * @return WindowsUpdateState
    */
    public function setQualityUpdateVersion($val)
    {
        $this->_propDict["qualityUpdateVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the status
    * Windows udpate status. Possible values are: upToDate, pendingInstallation, pendingReboot, failed.
    *
    * @return WindowsUpdateStatus The status
    */
    public function getStatus()
    {
        if (array_key_exists("status", $this->_propDict)) {
            if (is_a($this->_propDict["status"], "\Beta\Microsoft\Graph\Model\WindowsUpdateStatus")) {
                return $this->_propDict["status"];
            } else {
                $this->_propDict["status"] = new WindowsUpdateStatus($this->_propDict["status"]);
                return $this->_propDict["status"];
            }
        }
        return null;
    }
    
    /**
    * Sets the status
    * Windows udpate status. Possible values are: upToDate, pendingInstallation, pendingReboot, failed.
    *
    * @param WindowsUpdateStatus $val The status
    *
    * @return WindowsUpdateState
    */
    public function setStatus($val)
    {
        $this->_propDict["status"] = $val;
        return $this;
    }
    
    /**
    * Gets the userId
    * The id of the user.
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
    * The id of the user.
    *
    * @param string $val The userId
    *
    * @return WindowsUpdateState
    */
    public function setUserId($val)
    {
        $this->_propDict["userId"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    * User principal name.
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
    * User principal name.
    *
    * @param string $val The userPrincipalName
    *
    * @return WindowsUpdateState
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
}
