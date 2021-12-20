<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EmailSyncDuration File
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
* EmailSyncDuration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EmailSyncDuration extends Enum
{
    /**
    * The Enum EmailSyncDuration
    */
    const USER_DEFINED = "userDefined";
    const ONE_DAY = "oneDay";
    const THREE_DAYS = "threeDays";
    const ONE_WEEK = "oneWeek";
    const TWO_WEEKS = "twoWeeks";
    const ONE_MONTH = "oneMonth";
    const UNLIMITED = "unlimited";
}