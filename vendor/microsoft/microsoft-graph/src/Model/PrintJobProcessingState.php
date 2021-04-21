<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintJobProcessingState File
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
* PrintJobProcessingState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintJobProcessingState extends Enum
{
    /**
    * The Enum PrintJobProcessingState
    */
    const UNKNOWN = "unknown";
    const PENDING = "pending";
    const PROCESSING = "processing";
    const PAUSED = "paused";
    const STOPPED = "stopped";
    const COMPLETED = "completed";
    const CANCELED = "canceled";
    const ABORTED = "aborted";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}