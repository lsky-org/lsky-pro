<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DayOfWeek File
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
* DayOfWeek class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DayOfWeek extends Enum
{
    /**
    * The Enum DayOfWeek
    */
    const SUNDAY = "sunday";
    const MONDAY = "monday";
    const TUESDAY = "tuesday";
    const WEDNESDAY = "wednesday";
    const THURSDAY = "thursday";
    const FRIDAY = "friday";
    const SATURDAY = "saturday";
}