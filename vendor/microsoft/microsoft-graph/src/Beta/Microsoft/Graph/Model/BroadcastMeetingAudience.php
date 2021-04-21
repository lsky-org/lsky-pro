<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BroadcastMeetingAudience File
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
* BroadcastMeetingAudience class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BroadcastMeetingAudience extends Enum
{
    /**
    * The Enum BroadcastMeetingAudience
    */
    const ROLE_IS_ATTENDEE = "roleIsAttendee";
    const ORGANIZATION = "organization";
    const EVERYONE = "everyone";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}