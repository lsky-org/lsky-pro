<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AlertFeedback File
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
* AlertFeedback class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AlertFeedback extends Enum
{
    /**
    * The Enum AlertFeedback
    */
    const UNKNOWN = "unknown";
    const TRUE_POSITIVE = "truePositive";
    const FALSE_POSITIVE = "falsePositive";
    const BENIGN_POSITIVE = "benignPositive";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}