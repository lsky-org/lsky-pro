<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CalendarColor File
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
* CalendarColor class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CalendarColor extends Enum
{
    /**
    * The Enum CalendarColor
    */
    const AUTO = "auto";
    const LIGHT_BLUE = "lightBlue";
    const LIGHT_GREEN = "lightGreen";
    const LIGHT_ORANGE = "lightOrange";
    const LIGHT_GRAY = "lightGray";
    const LIGHT_YELLOW = "lightYellow";
    const LIGHT_TEAL = "lightTeal";
    const LIGHT_PINK = "lightPink";
    const LIGHT_BROWN = "lightBrown";
    const LIGHT_RED = "lightRed";
    const MAX_COLOR = "maxColor";
}