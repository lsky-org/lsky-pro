<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PlayPromptCompletionReason File
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
* PlayPromptCompletionReason class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PlayPromptCompletionReason extends Enum
{
    /**
    * The Enum PlayPromptCompletionReason
    */
    const UNKNOWN = "unknown";
    const COMPLETED_SUCCESSFULLY = "completedSuccessfully";
    const MEDIA_OPERATION_CANCELED = "mediaOperationCanceled";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}