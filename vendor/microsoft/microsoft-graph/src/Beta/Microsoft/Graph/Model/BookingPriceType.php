<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* BookingPriceType File
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
* BookingPriceType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class BookingPriceType extends Enum
{
    /**
    * The Enum BookingPriceType
    */
    const UNDEFINED = "undefined";
    const FIXED_PRICE = "fixedPrice";
    const STARTING_AT = "startingAt";
    const HOURLY = "hourly";
    const FREE = "free";
    const PRICE_VARIES = "priceVaries";
    const CALL_US = "callUs";
    const NOT_SET = "notSet";
}