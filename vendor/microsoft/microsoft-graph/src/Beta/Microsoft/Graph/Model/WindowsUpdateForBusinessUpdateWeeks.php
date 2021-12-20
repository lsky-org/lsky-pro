<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsUpdateForBusinessUpdateWeeks File
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
* WindowsUpdateForBusinessUpdateWeeks class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsUpdateForBusinessUpdateWeeks extends Enum
{
    /**
    * The Enum WindowsUpdateForBusinessUpdateWeeks
    */
    const USER_DEFINED = "userDefined";
    const FIRST_WEEK = "firstWeek";
    const SECOND_WEEK = "secondWeek";
    const THIRD_WEEK = "thirdWeek";
    const FOURTH_WEEK = "fourthWeek";
    const EVERY_WEEK = "everyWeek";
}