<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintMultipageLayout File
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
* PrintMultipageLayout class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintMultipageLayout extends Enum
{
    /**
    * The Enum PrintMultipageLayout
    */
    const CLOCKWISE_FROM_TOP_LEFT = "clockwiseFromTopLeft";
    const COUNTERCLOCKWISE_FROM_TOP_LEFT = "counterclockwiseFromTopLeft";
    const COUNTERCLOCKWISE_FROM_TOP_RIGHT = "counterclockwiseFromTopRight";
    const CLOCKWISE_FROM_TOP_RIGHT = "clockwiseFromTopRight";
    const COUNTERCLOCKWISE_FROM_BOTTOM_LEFT = "counterclockwiseFromBottomLeft";
    const CLOCKWISE_FROM_BOTTOM_LEFT = "clockwiseFromBottomLeft";
    const COUNTERCLOCKWISE_FROM_BOTTOM_RIGHT = "counterclockwiseFromBottomRight";
    const CLOCKWISE_FROM_BOTTOM_RIGHT = "clockwiseFromBottomRight";
}