<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceTypes File
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
* DeviceTypes class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DeviceTypes extends Enum
{
    /**
    * The Enum DeviceTypes
    */
    const DESKTOP = "desktop";
    const WINDOWS_RT = "windowsRT";
    const WIN_MO6 = "winMO6";
    const NOKIA = "nokia";
    const WINDOWS_PHONE = "windowsPhone";
    const MAC = "mac";
    const WIN_CE = "winCE";
    const WIN_EMBEDDED = "winEmbedded";
    const I_PHONE = "iPhone";
    const I_PAD = "iPad";
    const I_POD = "iPod";
    const ANDROID = "android";
    const I_SOC_CONSUMER = "iSocConsumer";
    const UNIX = "unix";
    const MAC_MDM = "macMDM";
    const HOLO_LENS = "holoLens";
    const SURFACE_HUB = "surfaceHub";
    const ANDROID_FOR_WORK = "androidForWork";
    const ANDROID_ENTERPRISE = "androidEnterprise";
    const BLACKBERRY = "blackberry";
    const PALM = "palm";
    const UNKNOWN = "unknown";
}