<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedAppFlaggedReason File
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
* ManagedAppFlaggedReason class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedAppFlaggedReason extends Enum
{
    /**
    * The Enum ManagedAppFlaggedReason
    */
    const NONE = "none";
    const ROOTED_DEVICE = "rootedDevice";
    const ANDROID_BOOTLOADER_UNLOCKED = "androidBootloaderUnlocked";
    const ANDROID_FACTORY_ROM_MODIFIED = "androidFactoryRomModified";
}