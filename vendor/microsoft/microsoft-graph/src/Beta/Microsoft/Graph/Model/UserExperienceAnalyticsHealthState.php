<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserExperienceAnalyticsHealthState File
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
* UserExperienceAnalyticsHealthState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserExperienceAnalyticsHealthState extends Enum
{
    /**
    * The Enum UserExperienceAnalyticsHealthState
    */
    const UNKNOWN = "unknown";
    const INSUFFICIENT_DATA = "insufficientData";
    const NEEDS_ATTENTION = "needsAttention";
    const MEETING_GOALS = "meetingGoals";
}