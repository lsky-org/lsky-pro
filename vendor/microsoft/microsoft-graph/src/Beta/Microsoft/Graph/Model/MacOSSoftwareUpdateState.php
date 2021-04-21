<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSSoftwareUpdateState File
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
* MacOSSoftwareUpdateState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSSoftwareUpdateState extends Enum
{
    /**
    * The Enum MacOSSoftwareUpdateState
    */
    const SUCCESS = "success";
    const DOWNLOADING = "downloading";
    const DOWNLOADED = "downloaded";
    const INSTALLING = "installing";
    const IDLE = "idle";
    const AVAILABLE = "available";
    const SCHEDULED = "scheduled";
    const DOWNLOAD_FAILED = "downloadFailed";
    const DOWNLOAD_INSUFFICIENT_SPACE = "downloadInsufficientSpace";
    const DOWNLOAD_INSUFFICIENT_POWER = "downloadInsufficientPower";
    const DOWNLOAD_INSUFFICIENT_NETWORK = "downloadInsufficientNetwork";
    const INSTALL_INSUFFICIENT_SPACE = "installInsufficientSpace";
    const INSTALL_INSUFFICIENT_POWER = "installInsufficientPower";
    const INSTALL_FAILED = "installFailed";
    const COMMAND_FAILED = "commandFailed";
}