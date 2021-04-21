<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrinterFeedOrientation File
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
* PrinterFeedOrientation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrinterFeedOrientation extends Enum
{
    /**
    * The Enum PrinterFeedOrientation
    */
    const LONG_EDGE_FIRST = "longEdgeFirst";
    const SHORT_EDGE_FIRST = "shortEdgeFirst";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}