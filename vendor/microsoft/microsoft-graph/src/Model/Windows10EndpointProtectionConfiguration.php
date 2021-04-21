<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10EndpointProtectionConfiguration File
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
* Windows10EndpointProtectionConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Windows10EndpointProtectionConfiguration extends DeviceConfiguration
{
    /**
    * Gets the applicationGuardAllowPersistence
    * Allow persisting user generated data inside the App Guard Containter (favorites, cookies, web passwords, etc.)
    *
    * @return bool The applicationGuardAllowPersistence
    */
    public function getApplicationGuardAllowPersistence()
    {
        if (array_key_exists("applicationGuardAllowPersistence", $this->_propDict)) {
            return $this->_propDict["applicationGuardAllowPersistence"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardAllowPersistence
    * Allow persisting user generated data inside the App Guard Containter (favorites, cookies, web passwords, etc.)
    *
    * @param bool $val The applicationGuardAllowPersistence
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardAllowPersistence($val)
    {
        $this->_propDict["applicationGuardAllowPersistence"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardAllowPrintToLocalPrinters
    * Allow printing to Local Printers from Container
    *
    * @return bool The applicationGuardAllowPrintToLocalPrinters
    */
    public function getApplicationGuardAllowPrintToLocalPrinters()
    {
        if (array_key_exists("applicationGuardAllowPrintToLocalPrinters", $this->_propDict)) {
            return $this->_propDict["applicationGuardAllowPrintToLocalPrinters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardAllowPrintToLocalPrinters
    * Allow printing to Local Printers from Container
    *
    * @param bool $val The applicationGuardAllowPrintToLocalPrinters
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardAllowPrintToLocalPrinters($val)
    {
        $this->_propDict["applicationGuardAllowPrintToLocalPrinters"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardAllowPrintToNetworkPrinters
    * Allow printing to Network Printers from Container
    *
    * @return bool The applicationGuardAllowPrintToNetworkPrinters
    */
    public function getApplicationGuardAllowPrintToNetworkPrinters()
    {
        if (array_key_exists("applicationGuardAllowPrintToNetworkPrinters", $this->_propDict)) {
            return $this->_propDict["applicationGuardAllowPrintToNetworkPrinters"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardAllowPrintToNetworkPrinters
    * Allow printing to Network Printers from Container
    *
    * @param bool $val The applicationGuardAllowPrintToNetworkPrinters
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardAllowPrintToNetworkPrinters($val)
    {
        $this->_propDict["applicationGuardAllowPrintToNetworkPrinters"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardAllowPrintToPDF
    * Allow printing to PDF from Container
    *
    * @return bool The applicationGuardAllowPrintToPDF
    */
    public function getApplicationGuardAllowPrintToPDF()
    {
        if (array_key_exists("applicationGuardAllowPrintToPDF", $this->_propDict)) {
            return $this->_propDict["applicationGuardAllowPrintToPDF"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardAllowPrintToPDF
    * Allow printing to PDF from Container
    *
    * @param bool $val The applicationGuardAllowPrintToPDF
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardAllowPrintToPDF($val)
    {
        $this->_propDict["applicationGuardAllowPrintToPDF"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardAllowPrintToXPS
    * Allow printing to XPS from Container
    *
    * @return bool The applicationGuardAllowPrintToXPS
    */
    public function getApplicationGuardAllowPrintToXPS()
    {
        if (array_key_exists("applicationGuardAllowPrintToXPS", $this->_propDict)) {
            return $this->_propDict["applicationGuardAllowPrintToXPS"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardAllowPrintToXPS
    * Allow printing to XPS from Container
    *
    * @param bool $val The applicationGuardAllowPrintToXPS
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardAllowPrintToXPS($val)
    {
        $this->_propDict["applicationGuardAllowPrintToXPS"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardBlockClipboardSharing
    * Block clipboard to share data from Host to Container, or from Container to Host, or both ways, or neither ways. Possible values are: notConfigured, blockBoth, blockHostToContainer, blockContainerToHost, blockNone.
    *
    * @return ApplicationGuardBlockClipboardSharingType The applicationGuardBlockClipboardSharing
    */
    public function getApplicationGuardBlockClipboardSharing()
    {
        if (array_key_exists("applicationGuardBlockClipboardSharing", $this->_propDict)) {
            if (is_a($this->_propDict["applicationGuardBlockClipboardSharing"], "\Microsoft\Graph\Model\ApplicationGuardBlockClipboardSharingType")) {
                return $this->_propDict["applicationGuardBlockClipboardSharing"];
            } else {
                $this->_propDict["applicationGuardBlockClipboardSharing"] = new ApplicationGuardBlockClipboardSharingType($this->_propDict["applicationGuardBlockClipboardSharing"]);
                return $this->_propDict["applicationGuardBlockClipboardSharing"];
            }
        }
        return null;
    }
    
    /**
    * Sets the applicationGuardBlockClipboardSharing
    * Block clipboard to share data from Host to Container, or from Container to Host, or both ways, or neither ways. Possible values are: notConfigured, blockBoth, blockHostToContainer, blockContainerToHost, blockNone.
    *
    * @param ApplicationGuardBlockClipboardSharingType $val The applicationGuardBlockClipboardSharing
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardBlockClipboardSharing($val)
    {
        $this->_propDict["applicationGuardBlockClipboardSharing"] = $val;
        return $this;
    }
    
    /**
    * Gets the applicationGuardBlockFileTransfer
    * Block clipboard to transfer image file, text file or neither of them. Possible values are: notConfigured, blockImageAndTextFile, blockImageFile, blockNone, blockTextFile.
    *
    * @return ApplicationGuardBlockFileTransferType The applicationGuardBlockFileTransfer
    */
    public function getApplicationGuardBlockFileTransfer()
    {
        if (array_key_exists("applicationGuardBlockFileTransfer", $this->_propDict)) {
            if (is_a($this->_propDict["applicationGuardBlockFileTransfer"], "\Microsoft\Graph\Model\ApplicationGuardBlockFileTransferType")) {
                return $this->_propDict["applicationGuardBlockFileTransfer"];
            } else {
                $this->_propDict["applicationGuardBlockFileTransfer"] = new ApplicationGuardBlockFileTransferType($this->_propDict["applicationGuardBlockFileTransfer"]);
                return $this->_propDict["applicationGuardBlockFileTransfer"];
            }
        }
        return null;
    }
    
    /**
    * Sets the applicationGuardBlockFileTransfer
    * Block clipboard to transfer image file, text file or neither of them. Possible values are: notConfigured, blockImageAndTextFile, blockImageFile, blockNone, blockTextFile.
    *
    * @param ApplicationGuardBlockFileTransferType $val The applicationGuardBlockFileTransfer
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardBlockFileTransfer($val)
    {
        $this->_propDict["applicationGuardBlockFileTransfer"] = $val;
        return $this;
    }
    
    /**
    * Gets the applicationGuardBlockNonEnterpriseContent
    * Block enterprise sites to load non-enterprise content, such as third party plug-ins
    *
    * @return bool The applicationGuardBlockNonEnterpriseContent
    */
    public function getApplicationGuardBlockNonEnterpriseContent()
    {
        if (array_key_exists("applicationGuardBlockNonEnterpriseContent", $this->_propDict)) {
            return $this->_propDict["applicationGuardBlockNonEnterpriseContent"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardBlockNonEnterpriseContent
    * Block enterprise sites to load non-enterprise content, such as third party plug-ins
    *
    * @param bool $val The applicationGuardBlockNonEnterpriseContent
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardBlockNonEnterpriseContent($val)
    {
        $this->_propDict["applicationGuardBlockNonEnterpriseContent"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardEnabled
    * Enable Windows Defender Application Guard
    *
    * @return bool The applicationGuardEnabled
    */
    public function getApplicationGuardEnabled()
    {
        if (array_key_exists("applicationGuardEnabled", $this->_propDict)) {
            return $this->_propDict["applicationGuardEnabled"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardEnabled
    * Enable Windows Defender Application Guard
    *
    * @param bool $val The applicationGuardEnabled
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardEnabled($val)
    {
        $this->_propDict["applicationGuardEnabled"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the applicationGuardForceAuditing
    * Force auditing will persist Windows logs and events to meet security/compliance criteria (sample events are user login-logoff, use of privilege rights, software installation, system changes, etc.)
    *
    * @return bool The applicationGuardForceAuditing
    */
    public function getApplicationGuardForceAuditing()
    {
        if (array_key_exists("applicationGuardForceAuditing", $this->_propDict)) {
            return $this->_propDict["applicationGuardForceAuditing"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationGuardForceAuditing
    * Force auditing will persist Windows logs and events to meet security/compliance criteria (sample events are user login-logoff, use of privilege rights, software installation, system changes, etc.)
    *
    * @param bool $val The applicationGuardForceAuditing
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setApplicationGuardForceAuditing($val)
    {
        $this->_propDict["applicationGuardForceAuditing"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the appLockerApplicationControl
    * Enables the Admin to choose what types of app to allow on devices. Possible values are: notConfigured, enforceComponentsAndStoreApps, auditComponentsAndStoreApps, enforceComponentsStoreAppsAndSmartlocker, auditComponentsStoreAppsAndSmartlocker.
    *
    * @return AppLockerApplicationControlType The appLockerApplicationControl
    */
    public function getAppLockerApplicationControl()
    {
        if (array_key_exists("appLockerApplicationControl", $this->_propDict)) {
            if (is_a($this->_propDict["appLockerApplicationControl"], "\Microsoft\Graph\Model\AppLockerApplicationControlType")) {
                return $this->_propDict["appLockerApplicationControl"];
            } else {
                $this->_propDict["appLockerApplicationControl"] = new AppLockerApplicationControlType($this->_propDict["appLockerApplicationControl"]);
                return $this->_propDict["appLockerApplicationControl"];
            }
        }
        return null;
    }
    
    /**
    * Sets the appLockerApplicationControl
    * Enables the Admin to choose what types of app to allow on devices. Possible values are: notConfigured, enforceComponentsAndStoreApps, auditComponentsAndStoreApps, enforceComponentsStoreAppsAndSmartlocker, auditComponentsStoreAppsAndSmartlocker.
    *
    * @param AppLockerApplicationControlType $val The appLockerApplicationControl
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setAppLockerApplicationControl($val)
    {
        $this->_propDict["appLockerApplicationControl"] = $val;
        return $this;
    }
    
    /**
    * Gets the bitLockerDisableWarningForOtherDiskEncryption
    * Allows the Admin to disable the warning prompt for other disk encryption on the user machines.
    *
    * @return bool The bitLockerDisableWarningForOtherDiskEncryption
    */
    public function getBitLockerDisableWarningForOtherDiskEncryption()
    {
        if (array_key_exists("bitLockerDisableWarningForOtherDiskEncryption", $this->_propDict)) {
            return $this->_propDict["bitLockerDisableWarningForOtherDiskEncryption"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bitLockerDisableWarningForOtherDiskEncryption
    * Allows the Admin to disable the warning prompt for other disk encryption on the user machines.
    *
    * @param bool $val The bitLockerDisableWarningForOtherDiskEncryption
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setBitLockerDisableWarningForOtherDiskEncryption($val)
    {
        $this->_propDict["bitLockerDisableWarningForOtherDiskEncryption"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the bitLockerEnableStorageCardEncryptionOnMobile
    * Allows the admin to require encryption to be turned on using BitLocker. This policy is valid only for a mobile SKU.
    *
    * @return bool The bitLockerEnableStorageCardEncryptionOnMobile
    */
    public function getBitLockerEnableStorageCardEncryptionOnMobile()
    {
        if (array_key_exists("bitLockerEnableStorageCardEncryptionOnMobile", $this->_propDict)) {
            return $this->_propDict["bitLockerEnableStorageCardEncryptionOnMobile"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bitLockerEnableStorageCardEncryptionOnMobile
    * Allows the admin to require encryption to be turned on using BitLocker. This policy is valid only for a mobile SKU.
    *
    * @param bool $val The bitLockerEnableStorageCardEncryptionOnMobile
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setBitLockerEnableStorageCardEncryptionOnMobile($val)
    {
        $this->_propDict["bitLockerEnableStorageCardEncryptionOnMobile"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the bitLockerEncryptDevice
    * Allows the admin to require encryption to be turned on using BitLocker.
    *
    * @return bool The bitLockerEncryptDevice
    */
    public function getBitLockerEncryptDevice()
    {
        if (array_key_exists("bitLockerEncryptDevice", $this->_propDict)) {
            return $this->_propDict["bitLockerEncryptDevice"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the bitLockerEncryptDevice
    * Allows the admin to require encryption to be turned on using BitLocker.
    *
    * @param bool $val The bitLockerEncryptDevice
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setBitLockerEncryptDevice($val)
    {
        $this->_propDict["bitLockerEncryptDevice"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the bitLockerRemovableDrivePolicy
    * BitLocker Removable Drive Policy.
    *
    * @return BitLockerRemovableDrivePolicy The bitLockerRemovableDrivePolicy
    */
    public function getBitLockerRemovableDrivePolicy()
    {
        if (array_key_exists("bitLockerRemovableDrivePolicy", $this->_propDict)) {
            if (is_a($this->_propDict["bitLockerRemovableDrivePolicy"], "\Microsoft\Graph\Model\BitLockerRemovableDrivePolicy")) {
                return $this->_propDict["bitLockerRemovableDrivePolicy"];
            } else {
                $this->_propDict["bitLockerRemovableDrivePolicy"] = new BitLockerRemovableDrivePolicy($this->_propDict["bitLockerRemovableDrivePolicy"]);
                return $this->_propDict["bitLockerRemovableDrivePolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the bitLockerRemovableDrivePolicy
    * BitLocker Removable Drive Policy.
    *
    * @param BitLockerRemovableDrivePolicy $val The bitLockerRemovableDrivePolicy
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setBitLockerRemovableDrivePolicy($val)
    {
        $this->_propDict["bitLockerRemovableDrivePolicy"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderAdditionalGuardedFolders
    * List of folder paths to be added to the list of protected folders
    *
    * @return string The defenderAdditionalGuardedFolders
    */
    public function getDefenderAdditionalGuardedFolders()
    {
        if (array_key_exists("defenderAdditionalGuardedFolders", $this->_propDict)) {
            return $this->_propDict["defenderAdditionalGuardedFolders"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderAdditionalGuardedFolders
    * List of folder paths to be added to the list of protected folders
    *
    * @param string $val The defenderAdditionalGuardedFolders
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderAdditionalGuardedFolders($val)
    {
        $this->_propDict["defenderAdditionalGuardedFolders"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderAttackSurfaceReductionExcludedPaths
    * List of exe files and folders to be excluded from attack surface reduction rules
    *
    * @return string The defenderAttackSurfaceReductionExcludedPaths
    */
    public function getDefenderAttackSurfaceReductionExcludedPaths()
    {
        if (array_key_exists("defenderAttackSurfaceReductionExcludedPaths", $this->_propDict)) {
            return $this->_propDict["defenderAttackSurfaceReductionExcludedPaths"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderAttackSurfaceReductionExcludedPaths
    * List of exe files and folders to be excluded from attack surface reduction rules
    *
    * @param string $val The defenderAttackSurfaceReductionExcludedPaths
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderAttackSurfaceReductionExcludedPaths($val)
    {
        $this->_propDict["defenderAttackSurfaceReductionExcludedPaths"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderExploitProtectionXml
    * Xml content containing information regarding exploit protection details.
    *
    * @return \GuzzleHttp\Psr7\Stream The defenderExploitProtectionXml
    */
    public function getDefenderExploitProtectionXml()
    {
        if (array_key_exists("defenderExploitProtectionXml", $this->_propDict)) {
            if (is_a($this->_propDict["defenderExploitProtectionXml"], "\GuzzleHttp\Psr7\Stream")) {
                return $this->_propDict["defenderExploitProtectionXml"];
            } else {
                $this->_propDict["defenderExploitProtectionXml"] = \GuzzleHttp\Psr7\stream_for($this->_propDict["defenderExploitProtectionXml"]);
                return $this->_propDict["defenderExploitProtectionXml"];
            }
        }
        return null;
    }
    
    /**
    * Sets the defenderExploitProtectionXml
    * Xml content containing information regarding exploit protection details.
    *
    * @param \GuzzleHttp\Psr7\Stream $val The defenderExploitProtectionXml
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderExploitProtectionXml($val)
    {
        $this->_propDict["defenderExploitProtectionXml"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderExploitProtectionXmlFileName
    * Name of the file from which DefenderExploitProtectionXml was obtained.
    *
    * @return string The defenderExploitProtectionXmlFileName
    */
    public function getDefenderExploitProtectionXmlFileName()
    {
        if (array_key_exists("defenderExploitProtectionXmlFileName", $this->_propDict)) {
            return $this->_propDict["defenderExploitProtectionXmlFileName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderExploitProtectionXmlFileName
    * Name of the file from which DefenderExploitProtectionXml was obtained.
    *
    * @param string $val The defenderExploitProtectionXmlFileName
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderExploitProtectionXmlFileName($val)
    {
        $this->_propDict["defenderExploitProtectionXmlFileName"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderGuardedFoldersAllowedAppPaths
    * List of paths to exe that are allowed to access protected folders
    *
    * @return string The defenderGuardedFoldersAllowedAppPaths
    */
    public function getDefenderGuardedFoldersAllowedAppPaths()
    {
        if (array_key_exists("defenderGuardedFoldersAllowedAppPaths", $this->_propDict)) {
            return $this->_propDict["defenderGuardedFoldersAllowedAppPaths"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderGuardedFoldersAllowedAppPaths
    * List of paths to exe that are allowed to access protected folders
    *
    * @param string $val The defenderGuardedFoldersAllowedAppPaths
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderGuardedFoldersAllowedAppPaths($val)
    {
        $this->_propDict["defenderGuardedFoldersAllowedAppPaths"] = $val;
        return $this;
    }
    
    /**
    * Gets the defenderSecurityCenterBlockExploitProtectionOverride
    * Indicates whether or not to block user from overriding Exploit Protection settings.
    *
    * @return bool The defenderSecurityCenterBlockExploitProtectionOverride
    */
    public function getDefenderSecurityCenterBlockExploitProtectionOverride()
    {
        if (array_key_exists("defenderSecurityCenterBlockExploitProtectionOverride", $this->_propDict)) {
            return $this->_propDict["defenderSecurityCenterBlockExploitProtectionOverride"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the defenderSecurityCenterBlockExploitProtectionOverride
    * Indicates whether or not to block user from overriding Exploit Protection settings.
    *
    * @param bool $val The defenderSecurityCenterBlockExploitProtectionOverride
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setDefenderSecurityCenterBlockExploitProtectionOverride($val)
    {
        $this->_propDict["defenderSecurityCenterBlockExploitProtectionOverride"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallBlockStatefulFTP
    * Blocks stateful FTP connections to the device
    *
    * @return bool The firewallBlockStatefulFTP
    */
    public function getFirewallBlockStatefulFTP()
    {
        if (array_key_exists("firewallBlockStatefulFTP", $this->_propDict)) {
            return $this->_propDict["firewallBlockStatefulFTP"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallBlockStatefulFTP
    * Blocks stateful FTP connections to the device
    *
    * @param bool $val The firewallBlockStatefulFTP
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallBlockStatefulFTP($val)
    {
        $this->_propDict["firewallBlockStatefulFTP"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallCertificateRevocationListCheckMethod
    * Specify how the certificate revocation list is to be enforced. Possible values are: deviceDefault, none, attempt, require.
    *
    * @return FirewallCertificateRevocationListCheckMethodType The firewallCertificateRevocationListCheckMethod
    */
    public function getFirewallCertificateRevocationListCheckMethod()
    {
        if (array_key_exists("firewallCertificateRevocationListCheckMethod", $this->_propDict)) {
            if (is_a($this->_propDict["firewallCertificateRevocationListCheckMethod"], "\Microsoft\Graph\Model\FirewallCertificateRevocationListCheckMethodType")) {
                return $this->_propDict["firewallCertificateRevocationListCheckMethod"];
            } else {
                $this->_propDict["firewallCertificateRevocationListCheckMethod"] = new FirewallCertificateRevocationListCheckMethodType($this->_propDict["firewallCertificateRevocationListCheckMethod"]);
                return $this->_propDict["firewallCertificateRevocationListCheckMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the firewallCertificateRevocationListCheckMethod
    * Specify how the certificate revocation list is to be enforced. Possible values are: deviceDefault, none, attempt, require.
    *
    * @param FirewallCertificateRevocationListCheckMethodType $val The firewallCertificateRevocationListCheckMethod
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallCertificateRevocationListCheckMethod($val)
    {
        $this->_propDict["firewallCertificateRevocationListCheckMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the firewallIdleTimeoutForSecurityAssociationInSeconds
    * Configures the idle timeout for security associations, in seconds, from 300 to 3600 inclusive. This is the period after which security associations will expire and be deleted. Valid values 300 to 3600
    *
    * @return int The firewallIdleTimeoutForSecurityAssociationInSeconds
    */
    public function getFirewallIdleTimeoutForSecurityAssociationInSeconds()
    {
        if (array_key_exists("firewallIdleTimeoutForSecurityAssociationInSeconds", $this->_propDict)) {
            return $this->_propDict["firewallIdleTimeoutForSecurityAssociationInSeconds"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallIdleTimeoutForSecurityAssociationInSeconds
    * Configures the idle timeout for security associations, in seconds, from 300 to 3600 inclusive. This is the period after which security associations will expire and be deleted. Valid values 300 to 3600
    *
    * @param int $val The firewallIdleTimeoutForSecurityAssociationInSeconds
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallIdleTimeoutForSecurityAssociationInSeconds($val)
    {
        $this->_propDict["firewallIdleTimeoutForSecurityAssociationInSeconds"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the firewallIPSecExemptionsAllowDHCP
    * Configures IPSec exemptions to allow both IPv4 and IPv6 DHCP traffic
    *
    * @return bool The firewallIPSecExemptionsAllowDHCP
    */
    public function getFirewallIPSecExemptionsAllowDHCP()
    {
        if (array_key_exists("firewallIPSecExemptionsAllowDHCP", $this->_propDict)) {
            return $this->_propDict["firewallIPSecExemptionsAllowDHCP"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallIPSecExemptionsAllowDHCP
    * Configures IPSec exemptions to allow both IPv4 and IPv6 DHCP traffic
    *
    * @param bool $val The firewallIPSecExemptionsAllowDHCP
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallIPSecExemptionsAllowDHCP($val)
    {
        $this->_propDict["firewallIPSecExemptionsAllowDHCP"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallIPSecExemptionsAllowICMP
    * Configures IPSec exemptions to allow ICMP
    *
    * @return bool The firewallIPSecExemptionsAllowICMP
    */
    public function getFirewallIPSecExemptionsAllowICMP()
    {
        if (array_key_exists("firewallIPSecExemptionsAllowICMP", $this->_propDict)) {
            return $this->_propDict["firewallIPSecExemptionsAllowICMP"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallIPSecExemptionsAllowICMP
    * Configures IPSec exemptions to allow ICMP
    *
    * @param bool $val The firewallIPSecExemptionsAllowICMP
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallIPSecExemptionsAllowICMP($val)
    {
        $this->_propDict["firewallIPSecExemptionsAllowICMP"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallIPSecExemptionsAllowNeighborDiscovery
    * Configures IPSec exemptions to allow neighbor discovery IPv6 ICMP type-codes
    *
    * @return bool The firewallIPSecExemptionsAllowNeighborDiscovery
    */
    public function getFirewallIPSecExemptionsAllowNeighborDiscovery()
    {
        if (array_key_exists("firewallIPSecExemptionsAllowNeighborDiscovery", $this->_propDict)) {
            return $this->_propDict["firewallIPSecExemptionsAllowNeighborDiscovery"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallIPSecExemptionsAllowNeighborDiscovery
    * Configures IPSec exemptions to allow neighbor discovery IPv6 ICMP type-codes
    *
    * @param bool $val The firewallIPSecExemptionsAllowNeighborDiscovery
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallIPSecExemptionsAllowNeighborDiscovery($val)
    {
        $this->_propDict["firewallIPSecExemptionsAllowNeighborDiscovery"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallIPSecExemptionsAllowRouterDiscovery
    * Configures IPSec exemptions to allow router discovery IPv6 ICMP type-codes
    *
    * @return bool The firewallIPSecExemptionsAllowRouterDiscovery
    */
    public function getFirewallIPSecExemptionsAllowRouterDiscovery()
    {
        if (array_key_exists("firewallIPSecExemptionsAllowRouterDiscovery", $this->_propDict)) {
            return $this->_propDict["firewallIPSecExemptionsAllowRouterDiscovery"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallIPSecExemptionsAllowRouterDiscovery
    * Configures IPSec exemptions to allow router discovery IPv6 ICMP type-codes
    *
    * @param bool $val The firewallIPSecExemptionsAllowRouterDiscovery
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallIPSecExemptionsAllowRouterDiscovery($val)
    {
        $this->_propDict["firewallIPSecExemptionsAllowRouterDiscovery"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallMergeKeyingModuleSettings
    * If an authentication set is not fully supported by a keying module, direct the module to ignore only unsupported authentication suites rather than the entire set
    *
    * @return bool The firewallMergeKeyingModuleSettings
    */
    public function getFirewallMergeKeyingModuleSettings()
    {
        if (array_key_exists("firewallMergeKeyingModuleSettings", $this->_propDict)) {
            return $this->_propDict["firewallMergeKeyingModuleSettings"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the firewallMergeKeyingModuleSettings
    * If an authentication set is not fully supported by a keying module, direct the module to ignore only unsupported authentication suites rather than the entire set
    *
    * @param bool $val The firewallMergeKeyingModuleSettings
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallMergeKeyingModuleSettings($val)
    {
        $this->_propDict["firewallMergeKeyingModuleSettings"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the firewallPacketQueueingMethod
    * Configures how packet queueing should be applied in the tunnel gateway scenario. Possible values are: deviceDefault, disabled, queueInbound, queueOutbound, queueBoth.
    *
    * @return FirewallPacketQueueingMethodType The firewallPacketQueueingMethod
    */
    public function getFirewallPacketQueueingMethod()
    {
        if (array_key_exists("firewallPacketQueueingMethod", $this->_propDict)) {
            if (is_a($this->_propDict["firewallPacketQueueingMethod"], "\Microsoft\Graph\Model\FirewallPacketQueueingMethodType")) {
                return $this->_propDict["firewallPacketQueueingMethod"];
            } else {
                $this->_propDict["firewallPacketQueueingMethod"] = new FirewallPacketQueueingMethodType($this->_propDict["firewallPacketQueueingMethod"]);
                return $this->_propDict["firewallPacketQueueingMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the firewallPacketQueueingMethod
    * Configures how packet queueing should be applied in the tunnel gateway scenario. Possible values are: deviceDefault, disabled, queueInbound, queueOutbound, queueBoth.
    *
    * @param FirewallPacketQueueingMethodType $val The firewallPacketQueueingMethod
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallPacketQueueingMethod($val)
    {
        $this->_propDict["firewallPacketQueueingMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the firewallPreSharedKeyEncodingMethod
    * Select the preshared key encoding to be used. Possible values are: deviceDefault, none, utF8.
    *
    * @return FirewallPreSharedKeyEncodingMethodType The firewallPreSharedKeyEncodingMethod
    */
    public function getFirewallPreSharedKeyEncodingMethod()
    {
        if (array_key_exists("firewallPreSharedKeyEncodingMethod", $this->_propDict)) {
            if (is_a($this->_propDict["firewallPreSharedKeyEncodingMethod"], "\Microsoft\Graph\Model\FirewallPreSharedKeyEncodingMethodType")) {
                return $this->_propDict["firewallPreSharedKeyEncodingMethod"];
            } else {
                $this->_propDict["firewallPreSharedKeyEncodingMethod"] = new FirewallPreSharedKeyEncodingMethodType($this->_propDict["firewallPreSharedKeyEncodingMethod"]);
                return $this->_propDict["firewallPreSharedKeyEncodingMethod"];
            }
        }
        return null;
    }
    
    /**
    * Sets the firewallPreSharedKeyEncodingMethod
    * Select the preshared key encoding to be used. Possible values are: deviceDefault, none, utF8.
    *
    * @param FirewallPreSharedKeyEncodingMethodType $val The firewallPreSharedKeyEncodingMethod
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallPreSharedKeyEncodingMethod($val)
    {
        $this->_propDict["firewallPreSharedKeyEncodingMethod"] = $val;
        return $this;
    }
    
    /**
    * Gets the firewallProfileDomain
    * Configures the firewall profile settings for domain networks
    *
    * @return WindowsFirewallNetworkProfile The firewallProfileDomain
    */
    public function getFirewallProfileDomain()
    {
        if (array_key_exists("firewallProfileDomain", $this->_propDict)) {
            if (is_a($this->_propDict["firewallProfileDomain"], "\Microsoft\Graph\Model\WindowsFirewallNetworkProfile")) {
                return $this->_propDict["firewallProfileDomain"];
            } else {
                $this->_propDict["firewallProfileDomain"] = new WindowsFirewallNetworkProfile($this->_propDict["firewallProfileDomain"]);
                return $this->_propDict["firewallProfileDomain"];
            }
        }
        return null;
    }
    
    /**
    * Sets the firewallProfileDomain
    * Configures the firewall profile settings for domain networks
    *
    * @param WindowsFirewallNetworkProfile $val The firewallProfileDomain
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallProfileDomain($val)
    {
        $this->_propDict["firewallProfileDomain"] = $val;
        return $this;
    }
    
    /**
    * Gets the firewallProfilePrivate
    * Configures the firewall profile settings for private networks
    *
    * @return WindowsFirewallNetworkProfile The firewallProfilePrivate
    */
    public function getFirewallProfilePrivate()
    {
        if (array_key_exists("firewallProfilePrivate", $this->_propDict)) {
            if (is_a($this->_propDict["firewallProfilePrivate"], "\Microsoft\Graph\Model\WindowsFirewallNetworkProfile")) {
                return $this->_propDict["firewallProfilePrivate"];
            } else {
                $this->_propDict["firewallProfilePrivate"] = new WindowsFirewallNetworkProfile($this->_propDict["firewallProfilePrivate"]);
                return $this->_propDict["firewallProfilePrivate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the firewallProfilePrivate
    * Configures the firewall profile settings for private networks
    *
    * @param WindowsFirewallNetworkProfile $val The firewallProfilePrivate
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallProfilePrivate($val)
    {
        $this->_propDict["firewallProfilePrivate"] = $val;
        return $this;
    }
    
    /**
    * Gets the firewallProfilePublic
    * Configures the firewall profile settings for public networks
    *
    * @return WindowsFirewallNetworkProfile The firewallProfilePublic
    */
    public function getFirewallProfilePublic()
    {
        if (array_key_exists("firewallProfilePublic", $this->_propDict)) {
            if (is_a($this->_propDict["firewallProfilePublic"], "\Microsoft\Graph\Model\WindowsFirewallNetworkProfile")) {
                return $this->_propDict["firewallProfilePublic"];
            } else {
                $this->_propDict["firewallProfilePublic"] = new WindowsFirewallNetworkProfile($this->_propDict["firewallProfilePublic"]);
                return $this->_propDict["firewallProfilePublic"];
            }
        }
        return null;
    }
    
    /**
    * Sets the firewallProfilePublic
    * Configures the firewall profile settings for public networks
    *
    * @param WindowsFirewallNetworkProfile $val The firewallProfilePublic
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setFirewallProfilePublic($val)
    {
        $this->_propDict["firewallProfilePublic"] = $val;
        return $this;
    }
    
    /**
    * Gets the smartScreenBlockOverrideForFiles
    * Allows IT Admins to control whether users can can ignore SmartScreen warnings and run malicious files.
    *
    * @return bool The smartScreenBlockOverrideForFiles
    */
    public function getSmartScreenBlockOverrideForFiles()
    {
        if (array_key_exists("smartScreenBlockOverrideForFiles", $this->_propDict)) {
            return $this->_propDict["smartScreenBlockOverrideForFiles"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the smartScreenBlockOverrideForFiles
    * Allows IT Admins to control whether users can can ignore SmartScreen warnings and run malicious files.
    *
    * @param bool $val The smartScreenBlockOverrideForFiles
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setSmartScreenBlockOverrideForFiles($val)
    {
        $this->_propDict["smartScreenBlockOverrideForFiles"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the smartScreenEnableInShell
    * Allows IT Admins to configure SmartScreen for Windows.
    *
    * @return bool The smartScreenEnableInShell
    */
    public function getSmartScreenEnableInShell()
    {
        if (array_key_exists("smartScreenEnableInShell", $this->_propDict)) {
            return $this->_propDict["smartScreenEnableInShell"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the smartScreenEnableInShell
    * Allows IT Admins to configure SmartScreen for Windows.
    *
    * @param bool $val The smartScreenEnableInShell
    *
    * @return Windows10EndpointProtectionConfiguration
    */
    public function setSmartScreenEnableInShell($val)
    {
        $this->_propDict["smartScreenEnableInShell"] = boolval($val);
        return $this;
    }
    
}
