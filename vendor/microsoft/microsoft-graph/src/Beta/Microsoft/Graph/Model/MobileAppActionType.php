<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppActionType File
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
* MobileAppActionType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MobileAppActionType extends Enum
{
    /**
    * The Enum MobileAppActionType
    */
    const UNKNOWN = "unknown";
    const INSTALL_COMMAND_SENT = "installCommandSent";
    const INSTALLED = "installed";
    const UNINSTALLED = "uninstalled";
    const USER_REQUESTED_INSTALL = "userRequestedInstall";
}