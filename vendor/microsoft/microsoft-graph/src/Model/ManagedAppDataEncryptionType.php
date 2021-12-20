<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedAppDataEncryptionType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* ManagedAppDataEncryptionType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedAppDataEncryptionType extends Enum
{
    /**
    * The Enum ManagedAppDataEncryptionType
    */
    const USE_DEVICE_SETTINGS = "useDeviceSettings";
    const AFTER_DEVICE_RESTART = "afterDeviceRestart";
    const WHEN_DEVICE_LOCKED_EXCEPT_OPEN_FILES = "whenDeviceLockedExceptOpenFiles";
    const WHEN_DEVICE_LOCKED = "whenDeviceLocked";
}