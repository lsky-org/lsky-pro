<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintPresentationDirection File
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
* PrintPresentationDirection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintPresentationDirection extends Enum
{
    /**
    * The Enum PrintPresentationDirection
    */
    const CLOCKWISE_FROM_TOP_LEFT = "clockwiseFromTopLeft";
    const COUNTER_CLOCKWISE_FROM_TOP_LEFT = "counterClockwiseFromTopLeft";
    const COUNTER_CLOCKWISE_FROM_TOP_RIGHT = "counterClockwiseFromTopRight";
    const CLOCKWISE_FROM_TOP_RIGHT = "clockwiseFromTopRight";
    const COUNTER_CLOCKWISE_FROM_BOTTOM_LEFT = "counterClockwiseFromBottomLeft";
    const CLOCKWISE_FROM_BOTTOM_LEFT = "clockwiseFromBottomLeft";
    const COUNTER_CLOCKWISE_FROM_BOTTOM_RIGHT = "counterClockwiseFromBottomRight";
    const CLOCKWISE_FROM_BOTTOM_RIGHT = "clockwiseFromBottomRight";
}