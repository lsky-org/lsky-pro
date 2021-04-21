<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedDeviceEncryptionState File
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
* ManagedDeviceEncryptionState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedDeviceEncryptionState extends Entity
{
    /**
    * Gets the advancedBitLockerStates
    * Advanced BitLocker State. Possible values are: success, noUserConsent, osVolumeUnprotected, osVolumeTpmRequired, osVolumeTpmOnlyRequired, osVolumeTpmPinRequired, osVolumeTpmStartupKeyRequired, osVolumeTpmPinStartupKeyRequired, osVolumeEncryptionMethodMismatch, recoveryKeyBackupFailed, fixedDriveNotEncrypted, fixedDriveEncryptionMethodMismatch, loggedOnUserNonAdmin, windowsRecoveryEnvironmentNotConfigured, tpmNotAvailable, tpmNotReady, networkError.
    *
    * @return AdvancedBitLockerState The advancedBitLockerStates
    */
    public function getAdvancedBitLockerStates()
    {
        if (array_key_exists("advancedBitLockerStates", $this->_propDict)) {
            if (is_a($this->_propDict["advancedBitLockerStates"], "\Beta\Microsoft\Graph\Model\AdvancedBitLockerState")) {
                return $this->_propDict["advancedBitLockerStates"];
            } else {
                $this->_propDict["advancedBitLockerStates"] = new AdvancedBitLockerState($this->_propDict["advancedBitLockerStates"]);
                return $this->_propDict["advancedBitLockerStates"];
            }
        }
        return null;
    }
    
    /**
    * Sets the advancedBitLockerStates
    * Advanced BitLocker State. Possible values are: success, noUserConsent, osVolumeUnprotected, osVolumeTpmRequired, osVolumeTpmOnlyRequired, osVolumeTpmPinRequired, osVolumeTpmStartupKeyRequired, osVolumeTpmPinStartupKeyRequired, osVolumeEncryptionMethodMismatch, recoveryKeyBackupFailed, fixedDriveNotEncrypted, fixedDriveEncryptionMethodMismatch, loggedOnUserNonAdmin, windowsRecoveryEnvironmentNotConfigured, tpmNotAvailable, tpmNotReady, networkError.
    *
    * @param AdvancedBitLockerState $val The advancedBitLockerStates
    *
    * @return ManagedDeviceEncryptionState
    */
    public function setAdvancedBitLockerStates($val)
    {
        $this->_propDict["advancedBitLockerStates"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceName
    * Device name
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
    * Device name
    *
    * @param string $val The deviceName
    *
    * @return ManagedDeviceEncryptionState
    */
    public function setDeviceName($val)
    {
        $this->_propDict["deviceName"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceType
    * Platform of the device. Possible values are: desktop, windowsRT, winMO6, nokia, windowsPhone, mac, winCE, winEmbedded, iPhone, iPad, iPod, android, iSocConsumer, unix, macMDM, holoLens, surfaceHub, androidForWork, androidEnterprise, blackberry, palm, unknown.
    *
    * @return DeviceTypes The deviceType
    */
    public function getDeviceType()
    {
        if (array_key_exists("deviceType", $this->_propDict)) {
            if (is_a($this->_propDict["deviceType"], "\Beta\Microsoft\Graph\Model\DeviceTypes")) {
                return $this->_propDict["deviceType"];
            } else {
                $this->_propDict["deviceType"] = new DeviceTypes($this->_propDict["deviceType"]);
                return $this->_propDict["deviceType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceType
    * Platform of the device. Possible values are: desktop, windowsRT, winMO6, nokia, windowsPhone, mac, winCE, winEmbedded, iPhone, iPad, iPod, android, iSocConsumer, unix, macMDM, holoLens, surfaceHub, androidForWork, androidEnterprise, blackberry, palm, unknown.
    *
    * @param DeviceTypes $val The deviceType
    *
    * @return ManagedDeviceEncryptionState
    */
    public function setDeviceType($val)
    {
        $this->_propDict["deviceType"] = $val;
        return $this;
    }
    
    /**
    * Gets the encryptionPolicySettingState
    * Encryption policy setting state. Possible values are: unknown, notApplicable, compliant, remediated, nonCompliant, error, conflict, notAssigned.
    *
    * @return ComplianceStatus The encryptionPolicySettingState
    */
    public function getEncryptionPolicySettingState()
    {
        if (array_key_exists("encryptionPolicySettingState", $this->_propDict)) {
            if (is_a($this->_propDict["encryptionPolicySettingState"], "\Beta\Microsoft\Graph\Model\ComplianceStatus")) {
                return $this->_propDict["encryptionPolicySettingState"];
            } else {
                $this->_propDict["encryptionPolicySettingState"] = new ComplianceStatus($this->_propDict["encryptionPolicySettingState"]);
                return $this->_propDict["encryptionPolicySettingState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the encryptionPolicySettingState
    * Encryption policy setting state. Possible values are: unknown, notApplicable, compliant, remediated, nonCompliant, error, conflict, notAssigned.
    *
    * @param ComplianceStatus $val The encryptionPolicySettingState
    *
    * @return ManagedDeviceEncryptionState
    */
    public function setEncryptionPolicySettingState($val)
    {
        $this->_propDict["encryptionPolicySettingState"] = $val;
        return $this;
    }
    
    /**
    * Gets the encryptionReadinessState
    * Encryption readiness state. Possible values are: notReady, ready.
    *
    * @return EncryptionReadinessState The encryptionReadinessState
    */
    public function getEncryptionReadinessState()
    {
        if (array_key_exists("encryptionReadinessState", $this->_propDict)) {
            if (is_a($this->_propDict["encryptionReadinessState"], "\Beta\Microsoft\Graph\Model\EncryptionReadinessState")) {
                return $this->_propDict["encryptionReadinessState"];
            } else {
                $this->_propDict["encryptionReadinessState"] = new EncryptionReadinessState($this->_propDict["encryptionReadinessState"]);
                return $this->_propDict["encryptionReadinessState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the encryptionReadinessState
    * Encryption readiness state. Possible values are: notReady, ready.
    *
    * @param EncryptionReadinessState $val The encryptionReadinessState
    *
    * @return ManagedDeviceEncryptionState
    */
    public function setEncryptionReadinessState($val)
    {
        $this->_propDict["encryptionReadinessState"] = $val;
        return $this;
    }
    
    /**
    * Gets the encryptionState
    * Device encryption state. Possible values are: notEncrypted, encrypted.
    *
    * @return EncryptionState The encryptionState
    */
    public function getEncryptionState()
    {
        if (array_key_exists("encryptionState", $this->_propDict)) {
            if (is_a($this->_propDict["encryptionState"], "\Beta\Microsoft\Graph\Model\EncryptionState")) {
                return $this->_propDict["encryptionState"];
            } else {
                $this->_propDict["encryptionState"] = new EncryptionState($this->_propDict["encryptionState"]);
                return $this->_propDict["encryptionState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the encryptionState
    * Device encryption state. Possible values are: notEncrypted, encrypted.
    *
    * @param EncryptionState $val The encryptionState
    *
    * @return ManagedDeviceEncryptionState
    */
    public function setEncryptionState($val)
    {
        $this->_propDict["encryptionState"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileVaultStates
    * FileVault State. Possible values are: success, driveEncryptedByUser, userDeferredEncryption, escrowNotEnabled.
    *
    * @return FileVaultState The fileVaultStates
    */
    public function getFileVaultStates()
    {
        if (array_key_exists("fileVaultStates", $this->_propDict)) {
            if (is_a($this->_propDict["fileVaultStates"], "\Beta\Microsoft\Graph\Model\FileVaultState")) {
                return $this->_propDict["fileVaultStates"];
            } else {
                $this->_propDict["fileVaultStates"] = new FileVaultState($this->_propDict["fileVaultStates"]);
                return $this->_propDict["fileVaultStates"];
            }
        }
        return null;
    }
    
    /**
    * Sets the fileVaultStates
    * FileVault State. Possible values are: success, driveEncryptedByUser, userDeferredEncryption, escrowNotEnabled.
    *
    * @param FileVaultState $val The fileVaultStates
    *
    * @return ManagedDeviceEncryptionState
    */
    public function setFileVaultStates($val)
    {
        $this->_propDict["fileVaultStates"] = $val;
        return $this;
    }
    
    /**
    * Gets the osVersion
    * Operating system version of the device
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
    * Operating system version of the device
    *
    * @param string $val The osVersion
    *
    * @return ManagedDeviceEncryptionState
    */
    public function setOsVersion($val)
    {
        $this->_propDict["osVersion"] = $val;
        return $this;
    }
    

     /** 
     * Gets the policyDetails
    * Policy Details
     *
     * @return array The policyDetails
     */
    public function getPolicyDetails()
    {
        if (array_key_exists("policyDetails", $this->_propDict)) {
           return $this->_propDict["policyDetails"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the policyDetails
    * Policy Details
    *
    * @param EncryptionReportPolicyDetails $val The policyDetails
    *
    * @return ManagedDeviceEncryptionState
    */
    public function setPolicyDetails($val)
    {
		$this->_propDict["policyDetails"] = $val;
        return $this;
    }
    
    /**
    * Gets the tpmSpecificationVersion
    * Device TPM Version
    *
    * @return string The tpmSpecificationVersion
    */
    public function getTpmSpecificationVersion()
    {
        if (array_key_exists("tpmSpecificationVersion", $this->_propDict)) {
            return $this->_propDict["tpmSpecificationVersion"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tpmSpecificationVersion
    * Device TPM Version
    *
    * @param string $val The tpmSpecificationVersion
    *
    * @return ManagedDeviceEncryptionState
    */
    public function setTpmSpecificationVersion($val)
    {
        $this->_propDict["tpmSpecificationVersion"] = $val;
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    * User name
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
    * User name
    *
    * @param string $val The userPrincipalName
    *
    * @return ManagedDeviceEncryptionState
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
}
