<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DefenderSecurityCenterNotificationsFromAppType File
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
* DefenderSecurityCenterNotificationsFromAppType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DefenderSecurityCenterNotificationsFromAppType extends Enum
{
    /**
    * The Enum DefenderSecurityCenterNotificationsFromAppType
    */
    const NOT_CONFIGURED = "notConfigured";
    const BLOCK_NONCRITICAL_NOTIFICATIONS = "blockNoncriticalNotifications";
    const BLOCK_ALL_NOTIFICATIONS = "blockAllNotifications";
}