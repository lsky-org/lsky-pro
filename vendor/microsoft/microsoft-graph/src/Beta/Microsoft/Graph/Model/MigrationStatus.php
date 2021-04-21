<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MigrationStatus File
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
* MigrationStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MigrationStatus extends Enum
{
    /**
    * The Enum MigrationStatus
    */
    const READY = "ready";
    const NEEDS_REVIEW = "needsReview";
    const ADDITIONAL_STEPS_REQUIRED = "additionalStepsRequired";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}