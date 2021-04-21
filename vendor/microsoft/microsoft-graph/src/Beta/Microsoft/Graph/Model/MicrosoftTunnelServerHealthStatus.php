<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftTunnelServerHealthStatus File
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
* MicrosoftTunnelServerHealthStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MicrosoftTunnelServerHealthStatus extends Enum
{
    /**
    * The Enum MicrosoftTunnelServerHealthStatus
    */
    const UNKNOWN = "unknown";
    const HEALTHY = "healthy";
    const UNHEALTHY = "unhealthy";
    const WARNING = "warning";
    const OFFLINE = "offline";
    const UPGRADE_IN_PROGRESS = "upgradeInProgress";
    const UPGRADE_FAILED = "upgradeFailed";
}