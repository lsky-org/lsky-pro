<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* CaseOperationStatus File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Ediscovery\Model;

use Microsoft\Graph\Core\Enum;

/**
* CaseOperationStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class CaseOperationStatus extends Enum
{
    /**
    * The Enum CaseOperationStatus
    */
    const NOT_STARTED = "notStarted";
    const SUBMISSION_FAILED = "submissionFailed";
    const RUNNING = "running";
    const SUCCEEDED = "succeeded";
    const PARTIALLY_SUCCEEDED = "partiallySucceeded";
    const FAILED = "failed";
}