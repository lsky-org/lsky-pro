<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RecurrencePatternType File
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
* RecurrencePatternType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class RecurrencePatternType extends Enum
{
    /**
    * The Enum RecurrencePatternType
    */
    const DAILY = "daily";
    const WEEKLY = "weekly";
    const ABSOLUTE_MONTHLY = "absoluteMonthly";
    const RELATIVE_MONTHLY = "relativeMonthly";
    const ABSOLUTE_YEARLY = "absoluteYearly";
    const RELATIVE_YEARLY = "relativeYearly";
}