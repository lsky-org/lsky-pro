<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RemoteActionAudit File
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
* RemoteActionAudit class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RemoteActionAudit extends Entity
{
    /**
    * Gets the action
    * The action name. Possible values are: unknown, factoryReset, removeCompanyData, resetPasscode, remoteLock, enableLostMode, disableLostMode, locateDevice, rebootNow, recoverPasscode, cleanWindowsDevice, logoutSharedAppleDeviceActiveUser, quickScan, fullScan, windowsDefenderUpdateSignatures, factoryResetKeepEnrollmentData, updateDeviceAccount, automaticRedeployment, shutDown, rotateBitLockerKeys, rotateFileVaultKey, getFileVaultKey, setDeviceName.
    *
    * @return RemoteAction The action
    */
    public function getAction()
    {
        if (array_key_exists("action", $this->_propDict)) {
            if (is_a($this->_propDict["action"], "\Beta\Microsoft\Graph\Model\RemoteAction")) {
                return $this->_propDict["action"];
            } else {
                $this->_propDict["action"] = new RemoteAction($this->_propDict["action"]);
                return $this->_propDict["action"];
            }
        }
        return null;
    }
    
    /**
    * Sets the action
    * The action name. Possible values are: unknown, factoryReset, removeCompanyData, resetPasscode, remoteLock, enableLostMode, disableLostMode, locateDevice, rebootNow, recoverPasscode, cleanWindowsDevice, logoutSharedAppleDeviceActiveUser, quickScan, fullScan, windowsDefenderUpdateSignatures, factoryResetKeepEnrollmentData, updateDeviceAccount, automaticRedeployment, shutDown, rotateBitLockerKeys, rotateFileVaultKey, getFileVaultKey, setDeviceName.
    *
    * @param RemoteAction $val The action
    *
    * @return RemoteActionAudit
    */
    public function setAction($val)
    {
        $this->_propDict["action"] = $val;
        return $this;
    }
    
    /**
    * Gets the actionState
    * Action state. Possible values are: none, pending, canceled, active, done, failed, notSupported.
    *
    * @return ActionState The actionState
    */
    public function getActionState()
    {
        if (array_key_exists("actionState", $this->_propDict)) {
            if (is_a($this->_propDict["actionState"], "\Beta\Microsoft\Graph\Model\ActionState")) {
                return $this->_propDict["actionState"];
            } else {
                $this->_propDict["actionState"] = new ActionState($this->_propDict["actionState"]);
                return $this->_propDict["actionState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the actionState
    * Action state. Possible values are: none, pending, canceled, active, done, failed, notSupported.
    *
    * @param ActionState $val The actionState
    *
    * @return RemoteActionAudit
    */
    public function setActionState($val)
    {
        $this->_propDict["actionState"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceDisplayName
    * Intune device name.
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
    * Intune device name.
    *
    * @param string $val The deviceDisplayName
    *
    * @return RemoteActionAudit
    */
    public function setDeviceDisplayName($val)
    {
        $this->_propDict["deviceDisplayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceIMEI
    * IMEI of the device.
    *
    * @return string The deviceIMEI
    */
    public function getDeviceIMEI()
    {
        if (array_key_exists("deviceIMEI", $this->_propDict)) {
            return $this->_propDict["deviceIMEI"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceIMEI
    * IMEI of the device.
    *
    * @param string $val The deviceIMEI
    *
    * @return RemoteActionAudit
    */
    public function setDeviceIMEI($val)
    {
        $this->_propDict["deviceIMEI"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceOwnerUserPrincipalName
    * Upn of the device owner.
    *
    * @return string The deviceOwnerUserPrincipalName
    */
    public function getDeviceOwnerUserPrincipalName()
    {
        if (array_key_exists("deviceOwnerUserPrincipalName", $this->_propDict)) {
            return $this->_propDict["deviceOwnerUserPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the deviceOwnerUserPrincipalName
    * Upn of the device owner.
    *
    * @param string $val The deviceOwnerUserPrincipalName
    *
    * @return RemoteActionAudit
    */
    public function setDeviceOwnerUserPrincipalName($val)
    {
        $this->_propDict["deviceOwnerUserPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the initiatedByUserPrincipalName
    * User who initiated the device action, format is UPN.
    *
    * @return string The initiatedByUserPrincipalName
    */
    public function getInitiatedByUserPrincipalName()
    {
        if (array_key_exists("initiatedByUserPrincipalName", $this->_propDict)) {
            return $this->_propDict["initiatedByUserPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the initiatedByUserPrincipalName
    * User who initiated the device action, format is UPN.
    *
    * @param string $val The initiatedByUserPrincipalName
    *
    * @return RemoteActionAudit
    */
    public function setInitiatedByUserPrincipalName($val)
    {
        $this->_propDict["initiatedByUserPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedDeviceId
    * Action target.
    *
    * @return string The managedDeviceId
    */
    public function getManagedDeviceId()
    {
        if (array_key_exists("managedDeviceId", $this->_propDict)) {
            return $this->_propDict["managedDeviceId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the managedDeviceId
    * Action target.
    *
    * @param string $val The managedDeviceId
    *
    * @return RemoteActionAudit
    */
    public function setManagedDeviceId($val)
    {
        $this->_propDict["managedDeviceId"] = $val;
        return $this;
    }
    
    /**
    * Gets the requestDateTime
    * Time when the action was issued, given in UTC.
    *
    * @return \DateTime The requestDateTime
    */
    public function getRequestDateTime()
    {
        if (array_key_exists("requestDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["requestDateTime"], "\DateTime")) {
                return $this->_propDict["requestDateTime"];
            } else {
                $this->_propDict["requestDateTime"] = new \DateTime($this->_propDict["requestDateTime"]);
                return $this->_propDict["requestDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the requestDateTime
    * Time when the action was issued, given in UTC.
    *
    * @param \DateTime $val The requestDateTime
    *
    * @return RemoteActionAudit
    */
    public function setRequestDateTime($val)
    {
        $this->_propDict["requestDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the userName
    * [deprecated] Please use InitiatedByUserPrincipalName instead.
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
    * [deprecated] Please use InitiatedByUserPrincipalName instead.
    *
    * @param string $val The userName
    *
    * @return RemoteActionAudit
    */
    public function setUserName($val)
    {
        $this->_propDict["userName"] = $val;
        return $this;
    }
    
}
