<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationSynchronizationStatus File
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
* EducationSynchronizationStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationSynchronizationStatus extends Enum
{
    /**
    * The Enum EducationSynchronizationStatus
    */
    const PAUSED = "paused";
    const IN_PROGRESS = "inProgress";
    const SUCCESS = "success";
    const ERROR = "error";
    const VALIDATION_ERROR = "validationError";
    const QUARANTINED = "quarantined";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}