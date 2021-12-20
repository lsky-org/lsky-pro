<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PrintJobStateDetail File
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
* PrintJobStateDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PrintJobStateDetail extends Enum
{
    /**
    * The Enum PrintJobStateDetail
    */
    const UPLOAD_PENDING = "uploadPending";
    const TRANSFORMING = "transforming";
    const COMPLETED_SUCCESSFULLY = "completedSuccessfully";
    const COMPLETED_WITH_WARNINGS = "completedWithWarnings";
    const COMPLETED_WITH_ERRORS = "completedWithErrors";
    const RELEASE_WAIT = "releaseWait";
    const INTERPRETING = "interpreting";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}