<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RemoteAction File
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
* RemoteAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RemoteAction extends Enum
{
    /**
    * The Enum RemoteAction
    */
    const UNKNOWN = "unknown";
    const FACTORY_RESET = "factoryReset";
    const REMOVE_COMPANY_DATA = "removeCompanyData";
    const RESET_PASSCODE = "resetPasscode";
    const REMOTE_LOCK = "remoteLock";
    const ENABLE_LOST_MODE = "enableLostMode";
    const DISABLE_LOST_MODE = "disableLostMode";
    const LOCATE_DEVICE = "locateDevice";
    const REBOOT_NOW = "rebootNow";
    const RECOVER_PASSCODE = "recoverPasscode";
    const CLEAN_WINDOWS_DEVICE = "cleanWindowsDevice";
    const LOGOUT_SHARED_APPLE_DEVICE_ACTIVE_USER = "logoutSharedAppleDeviceActiveUser";
    const QUICK_SCAN = "quickScan";
    const FULL_SCAN = "fullScan";
    const WINDOWS_DEFENDER_UPDATE_SIGNATURES = "windowsDefenderUpdateSignatures";
    const FACTORY_RESET_KEEP_ENROLLMENT_DATA = "factoryResetKeepEnrollmentData";
    const UPDATE_DEVICE_ACCOUNT = "updateDeviceAccount";
    const AUTOMATIC_REDEPLOYMENT = "automaticRedeployment";
    const SHUT_DOWN = "shutDown";
    const ROTATE_BIT_LOCKER_KEYS = "rotateBitLockerKeys";
    const ROTATE_FILE_VAULT_KEY = "rotateFileVaultKey";
    const GET_FILE_VAULT_KEY = "getFileVaultKey";
    const SET_DEVICE_NAME = "setDeviceName";
}