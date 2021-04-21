<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrinterProcessingState File
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
* PrinterProcessingState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrinterProcessingState extends Enum
{
    /**
    * The Enum PrinterProcessingState
    */
    const UNKNOWN = "unknown";
    const IDLE = "idle";
    const PROCESSING = "processing";
    const STOPPED = "stopped";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}