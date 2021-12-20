<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsAsyncOperationType File
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
* TeamsAsyncOperationType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamsAsyncOperationType extends Enum
{
    /**
    * The Enum TeamsAsyncOperationType
    */
    const INVALID = "invalid";
    const CLONE_TEAM = "cloneTeam";
    const ARCHIVE_TEAM = "archiveTeam";
    const UNARCHIVE_TEAM = "unarchiveTeam";
    const CREATE_TEAM = "createTeam";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    const TEAMIFY_GROUP = "teamifyGroup";
    const CREATE_CHANNEL = "createChannel";
}