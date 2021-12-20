<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ClientPlatform File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\CallRecords\Model;

use Microsoft\Graph\Core\Enum;

/**
* ClientPlatform class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ClientPlatform extends Enum
{
    /**
    * The Enum ClientPlatform
    */
    const UNKNOWN = "unknown";
    const WINDOWS = "windows";
    const MAC_OS = "macOS";
    const I_OS = "iOS";
    const ANDROID = "android";
    const WEB = "web";
    const IP_PHONE = "ipPhone";
    const ROOM_SYSTEM = "roomSystem";
    const SURFACE_HUB = "surfaceHub";
    const HOLO_LENS = "holoLens";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}