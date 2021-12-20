<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MeetingMessageType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* MeetingMessageType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MeetingMessageType extends Enum
{
    /**
    * The Enum MeetingMessageType
    */
    const NONE = "none";
    const MEETING_REQUEST = "meetingRequest";
    const MEETING_CANCELLED = "meetingCancelled";
    const MEETING_ACCEPTED = "meetingAccepted";
    const MEETING_TENATIVELY_ACCEPTED = "meetingTenativelyAccepted";
    const MEETING_DECLINED = "meetingDeclined";
}