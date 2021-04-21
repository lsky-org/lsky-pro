<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AdvancedBitLockerState File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* AdvancedBitLockerState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AdvancedBitLockerState extends Enum
{
    /**
    * The Enum AdvancedBitLockerState
    */
    const SUCCESS = "success";
    const NO_USER_CONSENT = "noUserConsent";
    const OS_VOLUME_UNPROTECTED = "osVolumeUnprotected";
    const OS_VOLUME_TPM_REQUIRED = "osVolumeTpmRequired";
    const OS_VOLUME_TPM_ONLY_REQUIRED = "osVolumeTpmOnlyRequired";
    const OS_VOLUME_TPM_PIN_REQUIRED = "osVolumeTpmPinRequired";
    const OS_VOLUME_TPM_STARTUP_KEY_REQUIRED = "osVolumeTpmStartupKeyRequired";
    const OS_VOLUME_TPM_PIN_STARTUP_KEY_REQUIRED = "osVolumeTpmPinStartupKeyRequired";
    const OS_VOLUME_ENCRYPTION_METHOD_MISMATCH = "osVolumeEncryptionMethodMismatch";
    const RECOVERY_KEY_BACKUP_FAILED = "recoveryKeyBackupFailed";
    const FIXED_DRIVE_NOT_ENCRYPTED = "fixedDriveNotEncrypted";
    const FIXED_DRIVE_ENCRYPTION_METHOD_MISMATCH = "fixedDriveEncryptionMethodMismatch";
    const LOGGED_ON_USER_NON_ADMIN = "loggedOnUserNonAdmin";
    const WINDOWS_RECOVERY_ENVIRONMENT_NOT_CONFIGURED = "windowsRecoveryEnvironmentNotConfigured";
    const TPM_NOT_AVAILABLE = "tpmNotAvailable";
    const TPM_NOT_READY = "tpmNotReady";
    const NETWORK_ERROR = "networkError";
}