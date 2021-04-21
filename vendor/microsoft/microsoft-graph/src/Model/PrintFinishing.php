<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintFinishing File
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
* PrintFinishing class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintFinishing extends Enum
{
    /**
    * The Enum PrintFinishing
    */
    const NONE = "none";
    const STAPLE = "staple";
    const PUNCH = "punch";
    const COVER = "cover";
    const BIND = "bind";
    const SADDLE_STITCH = "saddleStitch";
    const STITCH_EDGE = "stitchEdge";
    const STAPLE_TOP_LEFT = "stapleTopLeft";
    const STAPLE_BOTTOM_LEFT = "stapleBottomLeft";
    const STAPLE_TOP_RIGHT = "stapleTopRight";
    const STAPLE_BOTTOM_RIGHT = "stapleBottomRight";
    const STITCH_LEFT_EDGE = "stitchLeftEdge";
    const STITCH_TOP_EDGE = "stitchTopEdge";
    const STITCH_RIGHT_EDGE = "stitchRightEdge";
    const STITCH_BOTTOM_EDGE = "stitchBottomEdge";
    const STAPLE_DUAL_LEFT = "stapleDualLeft";
    const STAPLE_DUAL_TOP = "stapleDualTop";
    const STAPLE_DUAL_RIGHT = "stapleDualRight";
    const STAPLE_DUAL_BOTTOM = "stapleDualBottom";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}