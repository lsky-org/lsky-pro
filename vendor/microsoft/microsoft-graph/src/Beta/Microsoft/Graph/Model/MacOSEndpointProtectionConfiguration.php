<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSEndpointProtectionConfiguration File
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
* MacOSEndpointProtectionConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSEndpointProtectionConfiguration extends DeviceConfiguration
{
    /**
    * Gets the advancedThreatProtectionAutomaticSampleSubmission
    * Determines whether or not to enable automatic file sample submission for Microsoft Defender Advanced Threat Protection on macOS. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The advancedThreatProtectionAutomaticSampleSubmission
    */
    public function getAdvancedThreatProtectionAutomaticSampleSubmission()
    {
        if (array_key_exists("advancedThreatProtectionAutomaticSampleSubmission", $this->_propDict)) {
            if (is_a($this->_propDict["advancedThreatProtectionAutomaticSampleSubmission"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["advancedThreatProtectionAutomaticSampleSubmission"];
            } else {
                $this->_propDict["advancedThreatProtectionAutomaticSampleSubmission"] = new Enablement($this->_propDict["advancedThreatProtectionAutomaticSampleSubmission"]);
                return $this->_propDict["advancedThreatProtectionAutomaticSampleSubmission"];
            }
        }
        return null;
    }
    
    /**
    * Sets the advancedThreatProtectionAutomaticSampleSubmission
    * Determines whether or not to enable automatic file sample submission for Microsoft Defender Advanced Threat Protection on macOS. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The advancedThreatProtectionAutomaticSampleSubmission
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setAdvancedThreatProtectionAutomaticSampleSubmission($val)
    {
        $this->_propDict["advancedThreatProtectionAutomaticSampleSubmission"] = $val;
        return $this;
    }
    
    /**
    * Gets the advancedThreatProtectionCloudDelivered
    * Determines whether or not to enable cloud-delivered protection for Microsoft Defender Advanced Threat Protection on macOS. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The advancedThreatProtectionCloudDelivered
    */
    public function getAdvancedThreatProtectionCloudDelivered()
    {
        if (array_key_exists("advancedThreatProtectionCloudDelivered", $this->_propDict)) {
            if (is_a($this->_propDict["advancedThreatProtectionCloudDelivered"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["advancedThreatProtectionCloudDelivered"];
            } else {
                $this->_propDict["advancedThreatProtectionCloudDelivered"] = new Enablement($this->_propDict["advancedThreatProtectionCloudDelivered"]);
                return $this->_propDict["advancedThreatProtectionCloudDelivered"];
            }
        }
        return null;
    }
    
    /**
    * Sets the advancedThreatProtectionCloudDelivered
    * Determines whether or not to enable cloud-delivered protection for Microsoft Defender Advanced Threat Protection on macOS. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The advancedThreatProtectionCloudDelivered
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setAdvancedThreatProtectionCloudDelivered($val)
    {
        $this->_propDict["advancedThreatProtectionCloudDelivered"] = $val;
        return $this;
    }
    
    /**
    * Gets the advancedThreatProtectionDiagnosticDataCollection
    * Determines whether or not to enable diagnostic and usage data collection for Microsoft Defender Advanced Threat Protection on macOS. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The advancedThreatProtectionDiagnosticDataCollection
    */
    public function getAdvancedThreatProtectionDiagnosticDataCollection()
    {
        if (array_key_exists("advancedThreatProtectionDiagnosticDataCollection", $this->_propDict)) {
            if (is_a($this->_propDict["advancedThreatProtectionDiagnosticDataCollection"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["advancedThreatProtectionDiagnosticDataCollection"];
            } else {
                $this->_propDict["advancedThreatProtectionDiagnosticDataCollection"] = new Enablement($this->_propDict["advancedThreatProtectionDiagnosticDataCollection"]);
                return $this->_propDict["advancedThreatProtectionDiagnosticDataCollection"];
            }
        }
        return null;
    }
    
    /**
    * Sets the advancedThreatProtectionDiagnosticDataCollection
    * Determines whether or not to enable diagnostic and usage data collection for Microsoft Defender Advanced Threat Protection on macOS. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The advancedThreatProtectionDiagnosticDataCollection
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setAdvancedThreatProtectionDiagnosticDataCollection($val)
    {
        $this->_propDict["advancedThreatProtectionDiagnosticDataCollection"] = $val;
        return $this;
    }
    
    /**
    * Gets the advancedThreatProtectionExcludedExtensions
    * A list of file extensions to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
    *
    * @return string The advancedThreatProtectionExcludedExtensions
    */
    public function getAdvancedThreatProtectionExcludedExtensions()
    {
        if (array_key_exists("advancedThreatProtectionExcludedExtensions", $this->_propDict)) {
            return $this->_propDict["advancedThreatProtectionExcludedExtensions"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the advancedThreatProtectionExcludedExtensions
    * A list of file extensions to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
    *
    * @param string $val The advancedThreatProtectionExcludedExtensions
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setAdvancedThreatProtectionExcludedExtensions($val)
    {
        $this->_propDict["advancedThreatProtectionExcludedExtensions"] = $val;
        return $this;
    }
    
    /**
    * Gets the advancedThreatProtectionExcludedFiles
    * A list of paths to files to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
    *
    * @return string The advancedThreatProtectionExcludedFiles
    */
    public function getAdvancedThreatProtectionExcludedFiles()
    {
        if (array_key_exists("advancedThreatProtectionExcludedFiles", $this->_propDict)) {
            return $this->_propDict["advancedThreatProtectionExcludedFiles"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the advancedThreatProtectionExcludedFiles
    * A list of paths to files to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
    *
    * @param string $val The advancedThreatProtectionExcludedFiles
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setAdvancedThreatProtectionExcludedFiles($val)
    {
        $this->_propDict["advancedThreatProtectionExcludedFiles"] = $val;
        return $this;
    }
    
    /**
    * Gets the advancedThreatProtectionExcludedFolders
    * A list of paths to folders to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
    *
    * @return string The advancedThreatProtectionExcludedFolders
    */
    public function getAdvancedThreatProtectionExcludedFolders()
    {
        if (array_key_exists("advancedThreatProtectionExcludedFolders", $this->_propDict)) {
            return $this->_propDict["advancedThreatProtectionExcludedFolders"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the advancedThreatProtectionExcludedFolders
    * A list of paths to folders to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
    *
    * @param string $val The advancedThreatProtectionExcludedFolders
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setAdvancedThreatProtectionExcludedFolders($val)
    {
        $this->_propDict["advancedThreatProtectionExcludedFolders"] = $val;
        return $this;
    }
    
    /**
    * Gets the advancedThreatProtectionExcludedProcesses
    * A list of process names to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
    *
    * @return string The advancedThreatProtectionExcludedProcesses
    */
    public function getAdvancedThreatProtectionExcludedProcesses()
    {
        if (array_key_exists("advancedThreatProtectionExcludedProcesses", $this->_propDict)) {
            return $this->_propDict["advancedThreatProtectionExcludedProcesses"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the advancedThreatProtectionExcludedProcesses
    * A list of process names to exclude from antivirus scanning for Microsoft Defender Advanced Threat Protection on macOS.
    *
    * @param string $val The advancedThreatProtectionExcludedProcesses
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setAdvancedThreatProtectionExcludedProcesses($val)
    {
        $this->_propDict["advancedThreatProtectionExcludedProcesses"] = $val;
        return $this;
    }
    
    /**
    * Gets the advancedThreatProtectionRealTime
    * Determines whether or not to enable real-time protection for Microsoft Defender Advanced Threat Protection on macOS. Possible values are: notConfigured, enabled, disabled.
    *
    * @return Enablement The advancedThreatProtectionRealTime
    */
    public function getAdvancedThreatProtectionRealTime()
    {
        if (array_key_exists("advancedThreatProtectionRealTime", $this->_propDict)) {
            if (is_a($this->_propDict["advancedThreatProtectionRealTime"], "\Beta\Microsoft\Graph\Model\Enablement")) {
                return $this->_propDict["advancedThreatProtectionRealTime"];
            } else {
                $this->_propDict["advancedThreatProtectionRealTime"] = new Enablement($this->_propDict["advancedThreatProtectionRealTime"]);
                return $this->_propDict["advancedThreatProtectionRealTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the advancedThreatProtectionRealTime
    * Determines whether or not to enable real-time protection for Microsoft Defender Advanced Threat Protection on macOS. Possible values are: notConfigured, enabled, disabled.
    *
    * @param Enablement $val The advancedThreatProtectionRealTime
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setAdvancedThreatProtectionRealTime($val)
    {
        $this->_propDict["advancedThreatProtectionRealTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileVaultAllowDeferralUntilSignOut
    * Optional. If set to true, the user can defer the enabling of FileVault until they sign out.
    *
    * @return bool The fileVaultAllowDeferralUntilSignOut
    */
    public function getFileVaultAllowDeferralUntilSignOut()
    {
        if (array_key_exists("fileVaultAllowDeferralUntilSignOut", $this->_propDict)) {
            return $this->_propDict["fileVaultAllowDeferralUntilSignOut"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileVaultAllowDeferralUntilSignOut
    * Optional. If set to true, the user can defer the enabling of FileVault until they sign out.
    *
    * @param bool $val The fileVaultAllowDeferralUntilSignOut
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFileVaultAllowDeferralUntilSignOut($val)
    {
        $this->_propDict["fileVaultAllowDeferralUntilSignOut"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the fileVaultDisablePromptAtSignOut
    * Optional. When using the Defer option, if set to true, the user is not prompted to enable FileVault at sign-out.
    *
    * @return bool The fileVaultDisablePromptAtSignOut
    */
    public function getFileVaultDisablePromptAtSignOut()
    {
        if (array_key_exists("fileVaultDisablePromptAtSignOut", $this->_propDict)) {
            return $this->_propDict["fileVaultDisablePromptAtSignOut"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileVaultDisablePromptAtSignOut
    * Optional. When using the Defer option, if set to true, the user is not prompted to enable FileVault at sign-out.
    *
    * @param bool $val The fileVaultDisablePromptAtSignOut
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFileVaultDisablePromptAtSignOut($val)
    {
        $this->_propDict["fileVaultDisablePromptAtSignOut"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the fileVaultEnabled
    * Whether FileVault should be enabled or not.
    *
    * @return bool The fileVaultEnabled
    */
    public function getFileVaultEnabled()
    {
        if (array_key_exists("fileVaultEnabled", $this->_propDict)) {
            return $this->_propDict["fileVaultEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileVaultEnabled
    * Whether FileVault should be enabled or not.
    *
    * @param bool $val The fileVaultEnabled
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFileVaultEnabled($val)
    {
        $this->_propDict["fileVaultEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the fileVaultHidePersonalRecoveryKey
    * Optional. A hidden personal recovery key does not appear on the user's screen during FileVault encryption, reducing the risk of it ending up in the wrong hands.
    *
    * @return bool The fileVaultHidePersonalRecoveryKey
    */
    public function getFileVaultHidePersonalRecoveryKey()
    {
        if (array_key_exists("fileVaultHidePersonalRecoveryKey", $this->_propDict)) {
            return $this->_propDict["fileVaultHidePersonalRecoveryKey"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileVaultHidePersonalRecoveryKey
    * Optional. A hidden personal recovery key does not appear on the user's screen during FileVault encryption, reducing the risk of it ending up in the wrong hands.
    *
    * @param bool $val The fileVaultHidePersonalRecoveryKey
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFileVaultHidePersonalRecoveryKey($val)
    {
        $this->_propDict["fileVaultHidePersonalRecoveryKey"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the fileVaultInstitutionalRecoveryKeyCertificate
    * Required if selected recovery key type(s) include InstitutionalRecoveryKey. The DER Encoded certificate file used to set an institutional recovery key.
    *
    * @return \GuzzleHttp\Psr7\Stream The fileVaultInstitutionalRecoveryKeyCertificate
    */
    public function getFileVaultInstitutionalRecoveryKeyCertificate()
    {
        if (array_key_exists("fileVaultInstitutionalRecoveryKeyCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["fileVaultInstitutionalRecoveryKeyCertificate"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["fileVaultInstitutionalRecoveryKeyCertificate"];
            } else {
                $this->_propDict["fileVaultInstitutionalRecoveryKeyCertificate"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["fileVaultInstitutionalRecoveryKeyCertificate"]);
                return $this->_propDict["fileVaultInstitutionalRecoveryKeyCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the fileVaultInstitutionalRecoveryKeyCertificate
    * Required if selected recovery key type(s) include InstitutionalRecoveryKey. The DER Encoded certificate file used to set an institutional recovery key.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The fileVaultInstitutionalRecoveryKeyCertificate
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFileVaultInstitutionalRecoveryKeyCertificate($val)
    {
        $this->_propDict["fileVaultInstitutionalRecoveryKeyCertificate"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileVaultInstitutionalRecoveryKeyCertificateFileName
    * File name of the institutional recovery key certificate to display in UI. (.der).
    *
    * @return string The fileVaultInstitutionalRecoveryKeyCertificateFileName
    */
    public function getFileVaultInstitutionalRecoveryKeyCertificateFileName()
    {
        if (array_key_exists("fileVaultInstitutionalRecoveryKeyCertificateFileName", $this->_propDict)) {
            return $this->_propDict["fileVaultInstitutionalRecoveryKeyCertificateFileName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileVaultInstitutionalRecoveryKeyCertificateFileName
    * File name of the institutional recovery key certificate to display in UI. (.der).
    *
    * @param string $val The fileVaultInstitutionalRecoveryKeyCertificateFileName
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFileVaultInstitutionalRecoveryKeyCertificateFileName($val)
    {
        $this->_propDict["fileVaultInstitutionalRecoveryKeyCertificateFileName"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileVaultNumberOfTimesUserCanIgnore
    * Optional. When using the Defer option, this is the maximum number of times the user can ignore prompts to enable FileVault before FileVault will be required for the user to sign in. If set to -1, it will always prompt to enable FileVault until FileVault is enabled, though it will allow the user to bypass enabling FileVault. Setting this to 0 will disable the feature.
    *
    * @return int The fileVaultNumberOfTimesUserCanIgnore
    */
    public function getFileVaultNumberOfTimesUserCanIgnore()
    {
        if (array_key_exists("fileVaultNumberOfTimesUserCanIgnore", $this->_propDict)) {
            return $this->_propDict["fileVaultNumberOfTimesUserCanIgnore"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileVaultNumberOfTimesUserCanIgnore
    * Optional. When using the Defer option, this is the maximum number of times the user can ignore prompts to enable FileVault before FileVault will be required for the user to sign in. If set to -1, it will always prompt to enable FileVault until FileVault is enabled, though it will allow the user to bypass enabling FileVault. Setting this to 0 will disable the feature.
    *
    * @param int $val The fileVaultNumberOfTimesUserCanIgnore
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFileVaultNumberOfTimesUserCanIgnore($val)
    {
        $this->_propDict["fileVaultNumberOfTimesUserCanIgnore"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the fileVaultPersonalRecoveryKeyHelpMessage
    * Required if selected recovery key type(s) include PersonalRecoveryKey. A short message displayed to the user that explains how they can retrieve their personal recovery key.
    *
    * @return string The fileVaultPersonalRecoveryKeyHelpMessage
    */
    public function getFileVaultPersonalRecoveryKeyHelpMessage()
    {
        if (array_key_exists("fileVaultPersonalRecoveryKeyHelpMessage", $this->_propDict)) {
            return $this->_propDict["fileVaultPersonalRecoveryKeyHelpMessage"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileVaultPersonalRecoveryKeyHelpMessage
    * Required if selected recovery key type(s) include PersonalRecoveryKey. A short message displayed to the user that explains how they can retrieve their personal recovery key.
    *
    * @param string $val The fileVaultPersonalRecoveryKeyHelpMessage
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFileVaultPersonalRecoveryKeyHelpMessage($val)
    {
        $this->_propDict["fileVaultPersonalRecoveryKeyHelpMessage"] = $val;
        return $this;
    }
    
    /**
    * Gets the fileVaultPersonalRecoveryKeyRotationInMonths
    * Optional. If selected recovery key type(s) include PersonalRecoveryKey, the frequency to rotate that key, in months.
    *
    * @return int The fileVaultPersonalRecoveryKeyRotationInMonths
    */
    public function getFileVaultPersonalRecoveryKeyRotationInMonths()
    {
        if (array_key_exists("fileVaultPersonalRecoveryKeyRotationInMonths", $this->_propDict)) {
            return $this->_propDict["fileVaultPersonalRecoveryKeyRotationInMonths"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the fileVaultPersonalRecoveryKeyRotationInMonths
    * Optional. If selected recovery key type(s) include PersonalRecoveryKey, the frequency to rotate that key, in months.
    *
    * @param int $val The fileVaultPersonalRecoveryKeyRotationInMonths
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFileVaultPersonalRecoveryKeyRotationInMonths($val)
    {
        $this->_propDict["fileVaultPersonalRecoveryKeyRotationInMonths"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the fileVaultSelectedRecoveryKeyTypes
    * Required if FileVault is enabled, determines the type(s) of recovery key to use. . Possible values are: notConfigured, institutionalRecoveryKey, personalRecoveryKey.
    *
    * @return MacOSFileVaultRecoveryKeyTypes The fileVaultSelectedRecoveryKeyTypes
    */
    public function getFileVaultSelectedRecoveryKeyTypes()
    {
        if (array_key_exists("fileVaultSelectedRecoveryKeyTypes", $this->_propDict)) {
            if (is_a($this->_propDict["fileVaultSelectedRecoveryKeyTypes"], "\Beta\Microsoft\Graph\Model\MacOSFileVaultRecoveryKeyTypes")) {
                return $this->_propDict["fileVaultSelectedRecoveryKeyTypes"];
            } else {
                $this->_propDict["fileVaultSelectedRecoveryKeyTypes"] = new MacOSFileVaultRecoveryKeyTypes($this->_propDict["fileVaultSelectedRecoveryKeyTypes"]);
                return $this->_propDict["fileVaultSelectedRecoveryKeyTypes"];
            }
        }
        return null;
    }
    
    /**
    * Sets the fileVaultSelectedRecoveryKeyTypes
    * Required if FileVault is enabled, determines the type(s) of recovery key to use. . Possible values are: notConfigured, institutionalRecoveryKey, personalRecoveryKey.
    *
    * @param MacOSFileVaultRecoveryKeyTypes $val The fileVaultSelectedRecoveryKeyTypes
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFileVaultSelectedRecoveryKeyTypes($val)
    {
        $this->_propDict["fileVaultSelectedRecoveryKeyTypes"] = $val;
        return $this;
    }
    

     /** 
     * Gets the firewallApplications
    * List of applications with firewall settings. Firewall settings for applications not on this list are determined by the user. This collection can contain a maximum of 500 elements.
     *
     * @return array The firewallApplications
     */
    public function getFirewallApplications()
    {
        if (array_key_exists("firewallApplications", $this->_propDict)) {
           return $this->_propDict["firewallApplications"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the firewallApplications
    * List of applications with firewall settings. Firewall settings for applications not on this list are determined by the user. This collection can contain a maximum of 500 elements.
    *
    * @param MacOSFirewallApplication $val The firewallApplications
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFirewallApplications($val)
    {
		$this->_propDict["firewallApplications"] = $val;
        return $this;
    }
    
    /**
    * Gets the firewallBlockAllIncoming
    * Corresponds to the 'Block all incoming connections' option.
    *
    * @return bool The firewallBlockAllIncoming
    */
    public function getFirewallBlockAllIncoming()
    {
        if (array_key_exists("firewallBlockAllIncoming", $this->_propDict)) {
            return $this->_propDict["firewallBlockAllIncoming"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallBlockAllIncoming
    * Corresponds to the 'Block all incoming connections' option.
    *
    * @param bool $val The firewallBlockAllIncoming
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFirewallBlockAllIncoming($val)
    {
        $this->_propDict["firewallBlockAllIncoming"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallEnabled
    * Whether the firewall should be enabled or not.
    *
    * @return bool The firewallEnabled
    */
    public function getFirewallEnabled()
    {
        if (array_key_exists("firewallEnabled", $this->_propDict)) {
            return $this->_propDict["firewallEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallEnabled
    * Whether the firewall should be enabled or not.
    *
    * @param bool $val The firewallEnabled
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFirewallEnabled($val)
    {
        $this->_propDict["firewallEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallEnableStealthMode
    * Corresponds to 'Enable stealth mode.'
    *
    * @return bool The firewallEnableStealthMode
    */
    public function getFirewallEnableStealthMode()
    {
        if (array_key_exists("firewallEnableStealthMode", $this->_propDict)) {
            return $this->_propDict["firewallEnableStealthMode"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallEnableStealthMode
    * Corresponds to 'Enable stealth mode.'
    *
    * @param bool $val The firewallEnableStealthMode
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setFirewallEnableStealthMode($val)
    {
        $this->_propDict["firewallEnableStealthMode"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the gatekeeperAllowedAppSource
    * System and Privacy setting that determines which download locations apps can be run from on a macOS device. Possible values are: notConfigured, macAppStore, macAppStoreAndIdentifiedDevelopers, anywhere.
    *
    * @return MacOSGatekeeperAppSources The gatekeeperAllowedAppSource
    */
    public function getGatekeeperAllowedAppSource()
    {
        if (array_key_exists("gatekeeperAllowedAppSource", $this->_propDict)) {
            if (is_a($this->_propDict["gatekeeperAllowedAppSource"], "\Beta\Microsoft\Graph\Model\MacOSGatekeeperAppSources")) {
                return $this->_propDict["gatekeeperAllowedAppSource"];
            } else {
                $this->_propDict["gatekeeperAllowedAppSource"] = new MacOSGatekeeperAppSources($this->_propDict["gatekeeperAllowedAppSource"]);
                return $this->_propDict["gatekeeperAllowedAppSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the gatekeeperAllowedAppSource
    * System and Privacy setting that determines which download locations apps can be run from on a macOS device. Possible values are: notConfigured, macAppStore, macAppStoreAndIdentifiedDevelopers, anywhere.
    *
    * @param MacOSGatekeeperAppSources $val The gatekeeperAllowedAppSource
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setGatekeeperAllowedAppSource($val)
    {
        $this->_propDict["gatekeeperAllowedAppSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the gatekeeperBlockOverride
    * If set to true, the user override for Gatekeeper will be disabled.
    *
    * @return bool The gatekeeperBlockOverride
    */
    public function getGatekeeperBlockOverride()
    {
        if (array_key_exists("gatekeeperBlockOverride", $this->_propDict)) {
            return $this->_propDict["gatekeeperBlockOverride"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the gatekeeperBlockOverride
    * If set to true, the user override for Gatekeeper will be disabled.
    *
    * @param bool $val The gatekeeperBlockOverride
    *
    * @return MacOSEndpointProtectionConfiguration
    */
    public function setGatekeeperBlockOverride($val)
    {
        $this->_propDict["gatekeeperBlockOverride"] = boolval($val);
        return $this;
    }
    
}
