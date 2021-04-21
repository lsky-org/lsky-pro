<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceInstallState File
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
* DeviceInstallState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceInstallState extends Entity
{
    /**
    * Gets the deviceId
    * Device Id.
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
    * Device Id.
    *
    * @param string $val The deviceId
    *
    * @return DeviceInstallState
    */
    public function setDeviceId($val)
    {
        $this->_propDict["deviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceName
    * Device name.
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
    * Device name.
    *
    * @param string $val The deviceName
    *
    * @return DeviceInstallState
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the errorCode
    * The error code for install failures.
    *
    * @return string The errorCode
    */
    public function getErrorCode()
    {
        if (array_key_exists("errorCode", $this->_propDict)) {
            return $this->_propDict["errorCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the errorCode
    * The error code for install failures.
    *
    * @param string $val The errorCode
    *
    * @return DeviceInstallState
    */
    public function setErrorCode($val)
    {
        $this->_propDict["errorCode"] = $val;
        return $this;
    }
    
    /**
    * Gets the installState
    * The install state of the eBook. Possible values are: notApplicable, installed, failed, notInstalled, uninstallFailed, unknown.
    *
    * @return InstallState The installState
    */
    public function getInstallState()
    {
        if (array_key_exists("installState", $this->_propDict)) {
            if (is_a($this->_propDict["installState"], "\Beta\Microsoft\Graph\Model\InstallState")) {
                return $this->_propDict["installState"];
            } else {
                $this->_propDict["installState"] = new InstallState($this->_propDict["installState"]);
                return $this->_propDict["installState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the installState
    * The install state of the eBook. Possible values are: notApplicable, installed, failed, notInstalled, uninstallFailed, unknown.
    *
    * @param InstallState $val The installState
    *
    * @return DeviceInstallState
    */
    public function setInstallState($val)
    {
        $this->_propDict["installState"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastSyncDateTime
    * Last sync date and time.
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
    * Last sync date and time.
    *
    * @param \DateTime $val The lastSyncDateTime
    *
    * @return DeviceInstallState
    */
    public function setLastSyncDateTime($val)
    {
        $this->_propDict["lastSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the osDescription
    * OS Description.
    *
    * @return string The osDescription
    */
    public function getOsDescription()
    {
        if (array_key_exists("osDescription", $this->_propDict)) {
            return $this->_propDict["osDescription"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the osDescription
    * OS Description.
    *
    * @param string $val The osDescription
    *
    * @return DeviceInstallState
    */
    public function setOsDescription($val)
    {
        $this->_propDict["osDescription"] = $val;
        return $this;
    }
    
    /**
    * Gets the osVersion
    * OS Version.
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
    * OS Version.
    *
    * @param string $val The osVersion
    *
    * @return DeviceInstallState
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the userName
    * Device User Name.
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
    * Device User Name.
    *
    * @param string $val The userName
    *
    * @return DeviceInstallState
    */
    public function setUserName($val)
    {
        $this->_propDict["userName"] = $val;
        return $this;
    }
    
}
