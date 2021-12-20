<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CalendarSharingAction File
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
* CalendarSharingAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CalendarSharingAction extends Enum
{
    /**
    * The Enum CalendarSharingAction
    */
    const ACCEPT = "accept";
    const ACCEPT_AND_VIEW_CALENDAR = "acceptAndViewCalendar";
    const VIEW_CALENDAR = "viewCalendar";
    const ADD_THIS_CALENDAR = "addThisCalendar";
}