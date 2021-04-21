<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintTaskProcessingState File
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
* PrintTaskProcessingState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintTaskProcessingState extends Enum
{
    /**
    * The Enum PrintTaskProcessingState
    */
    const PENDING = "pending";
    const PROCESSING = "processing";
    const COMPLETED = "completed";
    const ABORTED = "aborted";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}