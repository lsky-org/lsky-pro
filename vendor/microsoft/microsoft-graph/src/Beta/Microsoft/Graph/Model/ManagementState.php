<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagementState File
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
* ManagementState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagementState extends Enum
{
    /**
    * The Enum ManagementState
    */
    const MANAGED = "managed";
    const RETIRE_PENDING = "retirePending";
    const RETIRE_FAILED = "retireFailed";
    const WIPE_PENDING = "wipePending";
    const WIPE_FAILED = "wipeFailed";
    const UNHEALTHY = "unhealthy";
    const DELETE_PENDING = "deletePending";
    const RETIRE_ISSUED = "retireIssued";
    const WIPE_ISSUED = "wipeIssued";
    const WIPE_CANCELED = "wipeCanceled";
    const RETIRE_CANCELED = "retireCanceled";
    const DISCOVERED = "discovered";
}