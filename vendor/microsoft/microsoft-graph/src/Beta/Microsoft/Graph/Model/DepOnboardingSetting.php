<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DepOnboardingSetting File
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
* DepOnboardingSetting class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DepOnboardingSetting extends Entity
{
    /**
    * Gets the appleIdentifier
    * The Apple ID used to obtain the current token.
    *
    * @return string The appleIdentifier
    */
    public function getAppleIdentifier()
    {
        if (array_key_exists("appleIdentifier", $this->_propDict)) {
            return $this->_propDict["appleIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the appleIdentifier
    * The Apple ID used to obtain the current token.
    *
    * @param string $val The appleIdentifier
    *
    * @return DepOnboardingSetting
    */
    public function setAppleIdentifier($val)
    {
        $this->_propDict["appleIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the dataSharingConsentGranted
    * Consent granted for data sharing with Apple Dep Service
    *
    * @return bool The dataSharingConsentGranted
    */
    public function getDataSharingConsentGranted()
    {
        if (array_key_exists("dataSharingConsentGranted", $this->_propDict)) {
            return $this->_propDict["dataSharingConsentGranted"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the dataSharingConsentGranted
    * Consent granted for data sharing with Apple Dep Service
    *
    * @param bool $val The dataSharingConsentGranted
    *
    * @return DepOnboardingSetting
    */
    public function setDataSharingConsentGranted($val)
    {
        $this->_propDict["dataSharingConsentGranted"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the lastModifiedDateTime
    * When the service was onboarded.
    *
    * @return \DateTime The lastModifiedDateTime
    */
    public function getLastModifiedDateTime()
    {
        if (array_key_exists("lastModifiedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastModifiedDateTime"], "\DateTime")) {
                return $this->_propDict["lastModifiedDateTime"];
            } else {
                $this->_propDict["lastModifiedDateTime"] = new \DateTime($this->_propDict["lastModifiedDateTime"]);
                return $this->_propDict["lastModifiedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastModifiedDateTime
    * When the service was onboarded.
    *
    * @param \DateTime $val The lastModifiedDateTime
    *
    * @return DepOnboardingSetting
    */
    public function setLastModifiedDateTime($val)
    {
        $this->_propDict["lastModifiedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastSuccessfulSyncDateTime
    * When the service last syned with Intune
    *
    * @return \DateTime The lastSuccessfulSyncDateTime
    */
    public function getLastSuccessfulSyncDateTime()
    {
        if (array_key_exists("lastSuccessfulSyncDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSuccessfulSyncDateTime"], "\DateTime")) {
                return $this->_propDict["lastSuccessfulSyncDateTime"];
            } else {
                $this->_propDict["lastSuccessfulSyncDateTime"] = new \DateTime($this->_propDict["lastSuccessfulSyncDateTime"]);
                return $this->_propDict["lastSuccessfulSyncDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastSuccessfulSyncDateTime
    * When the service last syned with Intune
    *
    * @param \DateTime $val The lastSuccessfulSyncDateTime
    *
    * @return DepOnboardingSetting
    */
    public function setLastSuccessfulSyncDateTime($val)
    {
        $this->_propDict["lastSuccessfulSyncDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastSyncErrorCode
    * Error code reported by Apple during last dep sync.
    *
    * @return int The lastSyncErrorCode
    */
    public function getLastSyncErrorCode()
    {
        if (array_key_exists("lastSyncErrorCode", $this->_propDict)) {
            return $this->_propDict["lastSyncErrorCode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the lastSyncErrorCode
    * Error code reported by Apple during last dep sync.
    *
    * @param int $val The lastSyncErrorCode
    *
    * @return DepOnboardingSetting
    */
    public function setLastSyncErrorCode($val)
    {
        $this->_propDict["lastSyncErrorCode"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the lastSyncTriggeredDateTime
    * When Intune last requested a sync.
    *
    * @return \DateTime The lastSyncTriggeredDateTime
    */
    public function getLastSyncTriggeredDateTime()
    {
        if (array_key_exists("lastSyncTriggeredDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastSyncTriggeredDateTime"], "\DateTime")) {
                return $this->_propDict["lastSyncTriggeredDateTime"];
            } else {
                $this->_propDict["lastSyncTriggeredDateTime"] = new \DateTime($this->_propDict["lastSyncTriggeredDateTime"]);
                return $this->_propDict["lastSyncTriggeredDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastSyncTriggeredDateTime
    * When Intune last requested a sync.
    *
    * @param \DateTime $val The lastSyncTriggeredDateTime
    *
    * @return DepOnboardingSetting
    */
    public function setLastSyncTriggeredDateTime($val)
    {
        $this->_propDict["lastSyncTriggeredDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the roleScopeTagIds
    * List of Scope Tags for this Entity instance.
    *
    * @return string The roleScopeTagIds
    */
    public function getRoleScopeTagIds()
    {
        if (array_key_exists("roleScopeTagIds", $this->_propDict)) {
            return $this->_propDict["roleScopeTagIds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the roleScopeTagIds
    * List of Scope Tags for this Entity instance.
    *
    * @param string $val The roleScopeTagIds
    *
    * @return DepOnboardingSetting
    */
    public function setRoleScopeTagIds($val)
    {
        $this->_propDict["roleScopeTagIds"] = $val;
        return $this;
    }
    
    /**
    * Gets the shareTokenWithSchoolDataSyncService
    * Whether or not the Dep token sharing is enabled with the School Data Sync service.
    *
    * @return bool The shareTokenWithSchoolDataSyncService
    */
    public function getShareTokenWithSchoolDataSyncService()
    {
        if (array_key_exists("shareTokenWithSchoolDataSyncService", $this->_propDict)) {
            return $this->_propDict["shareTokenWithSchoolDataSyncService"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the shareTokenWithSchoolDataSyncService
    * Whether or not the Dep token sharing is enabled with the School Data Sync service.
    *
    * @param bool $val The shareTokenWithSchoolDataSyncService
    *
    * @return DepOnboardingSetting
    */
    public function setShareTokenWithSchoolDataSyncService($val)
    {
        $this->_propDict["shareTokenWithSchoolDataSyncService"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the syncedDeviceCount
    * Gets synced device count
    *
    * @return int The syncedDeviceCount
    */
    public function getSyncedDeviceCount()
    {
        if (array_key_exists("syncedDeviceCount", $this->_propDict)) {
            return $this->_propDict["syncedDeviceCount"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the syncedDeviceCount
    * Gets synced device count
    *
    * @param int $val The syncedDeviceCount
    *
    * @return DepOnboardingSetting
    */
    public function setSyncedDeviceCount($val)
    {
        $this->_propDict["syncedDeviceCount"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the tokenExpirationDateTime
    * When the token will expire.
    *
    * @return \DateTime The tokenExpirationDateTime
    */
    public function getTokenExpirationDateTime()
    {
        if (array_key_exists("tokenExpirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["tokenExpirationDateTime"], "\DateTime")) {
                return $this->_propDict["tokenExpirationDateTime"];
            } else {
                $this->_propDict["tokenExpirationDateTime"] = new \DateTime($this->_propDict["tokenExpirationDateTime"]);
                return $this->_propDict["tokenExpirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the tokenExpirationDateTime
    * When the token will expire.
    *
    * @param \DateTime $val The tokenExpirationDateTime
    *
    * @return DepOnboardingSetting
    */
    public function setTokenExpirationDateTime($val)
    {
        $this->_propDict["tokenExpirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the tokenName
    * Friendly Name for Dep Token
    *
    * @return string The tokenName
    */
    public function getTokenName()
    {
        if (array_key_exists("tokenName", $this->_propDict)) {
            return $this->_propDict["tokenName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the tokenName
    * Friendly Name for Dep Token
    *
    * @param string $val The tokenName
    *
    * @return DepOnboardingSetting
    */
    public function setTokenName($val)
    {
        $this->_propDict["tokenName"] = $val;
        return $this;
    }
    
    /**
    * Gets the tokenType
    * Gets or sets the Dep Token Type. Possible values are: none, dep, appleSchoolManager.
    *
    * @return DepTokenType The tokenType
    */
    public function getTokenType()
    {
        if (array_key_exists("tokenType", $this->_propDict)) {
            if (is_a($this->_propDict["tokenType"], "\Beta\Microsoft\Graph\Model\DepTokenType")) {
                return $this->_propDict["tokenType"];
            } else {
                $this->_propDict["tokenType"] = new DepTokenType($this->_propDict["tokenType"]);
                return $this->_propDict["tokenType"];
            }
        }
        return null;
    }
    
    /**
    * Sets the tokenType
    * Gets or sets the Dep Token Type. Possible values are: none, dep, appleSchoolManager.
    *
    * @param DepTokenType $val The tokenType
    *
    * @return DepOnboardingSetting
    */
    public function setTokenType($val)
    {
        $this->_propDict["tokenType"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultIosEnrollmentProfile
    * Default iOS Enrollment Profile
    *
    * @return DepIOSEnrollmentProfile The defaultIosEnrollmentProfile
    */
    public function getDefaultIosEnrollmentProfile()
    {
        if (array_key_exists("defaultIosEnrollmentProfile", $this->_propDict)) {
            if (is_a($this->_propDict["defaultIosEnrollmentProfile"], "\Beta\Microsoft\Graph\Model\DepIOSEnrollmentProfile")) {
                return $this->_propDict["defaultIosEnrollmentProfile"];
            } else {
                $this->_propDict["defaultIosEnrollmentProfile"] = new DepIOSEnrollmentProfile($this->_propDict["defaultIosEnrollmentProfile"]);
                return $this->_propDict["defaultIosEnrollmentProfile"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultIosEnrollmentProfile
    * Default iOS Enrollment Profile
    *
    * @param DepIOSEnrollmentProfile $val The defaultIosEnrollmentProfile
    *
    * @return DepOnboardingSetting
    */
    public function setDefaultIosEnrollmentProfile($val)
    {
        $this->_propDict["defaultIosEnrollmentProfile"] = $val;
        return $this;
    }
    
    /**
    * Gets the defaultMacOsEnrollmentProfile
    * Default MacOs Enrollment Profile
    *
    * @return DepMacOSEnrollmentProfile The defaultMacOsEnrollmentProfile
    */
    public function getDefaultMacOsEnrollmentProfile()
    {
        if (array_key_exists("defaultMacOsEnrollmentProfile", $this->_propDict)) {
            if (is_a($this->_propDict["defaultMacOsEnrollmentProfile"], "\Beta\Microsoft\Graph\Model\DepMacOSEnrollmentProfile")) {
                return $this->_propDict["defaultMacOsEnrollmentProfile"];
            } else {
                $this->_propDict["defaultMacOsEnrollmentProfile"] = new DepMacOSEnrollmentProfile($this->_propDict["defaultMacOsEnrollmentProfile"]);
                return $this->_propDict["defaultMacOsEnrollmentProfile"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defaultMacOsEnrollmentProfile
    * Default MacOs Enrollment Profile
    *
    * @param DepMacOSEnrollmentProfile $val The defaultMacOsEnrollmentProfile
    *
    * @return DepOnboardingSetting
    */
    public function setDefaultMacOsEnrollmentProfile($val)
    {
        $this->_propDict["defaultMacOsEnrollmentProfile"] = $val;
        return $this;
    }
    

     /** 
     * Gets the enrollmentProfiles
    * The enrollment profiles.
     *
     * @return array The enrollmentProfiles
     */
    public function getEnrollmentProfiles()
    {
        if (array_key_exists("enrollmentProfiles", $this->_propDict)) {
           return $this->_propDict["enrollmentProfiles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the enrollmentProfiles
    * The enrollment profiles.
    *
    * @param EnrollmentProfile $val The enrollmentProfiles
    *
    * @return DepOnboardingSetting
    */
    public function setEnrollmentProfiles($val)
    {
		$this->_propDict["enrollmentProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the importedAppleDeviceIdentities
    * The imported Apple device identities.
     *
     * @return array The importedAppleDeviceIdentities
     */
    public function getImportedAppleDeviceIdentities()
    {
        if (array_key_exists("importedAppleDeviceIdentities", $this->_propDict)) {
           return $this->_propDict["importedAppleDeviceIdentities"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the importedAppleDeviceIdentities
    * The imported Apple device identities.
    *
    * @param ImportedAppleDeviceIdentity $val The importedAppleDeviceIdentities
    *
    * @return DepOnboardingSetting
    */
    public function setImportedAppleDeviceIdentities($val)
    {
		$this->_propDict["importedAppleDeviceIdentities"] = $val;
        return $this;
    }
    
}
