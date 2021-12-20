<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ColumnTypes File
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
* ColumnTypes class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ColumnTypes extends Enum
{
    /**
    * The Enum ColumnTypes
    */
    const NOTE = "note";
    const TEXT = "text";
    const CHOICE = "choice";
    const MULTICHOICE = "multichoice";
    const NUMBER = "number";
    const CURRENCY = "currency";
    const DATE_TIME = "dateTime";
    const LOOKUP = "lookup";
    const BOOLEAN = "boolean";
    const USER = "user";
    const URL = "url";
    const CALCULATED = "calculated";
    const LOCATION = "location";
    const GEOLOCATION = "geolocation";
    const TERM = "term";
    const MULTITERM = "multiterm";
    const THUMBNAIL = "thumbnail";
    const APPROVAL_STATUS = "approvalStatus";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}