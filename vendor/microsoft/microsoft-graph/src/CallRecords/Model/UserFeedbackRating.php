<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserFeedbackRating File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\CallRecords\Model;

use Microsoft\Graph\Core\Enum;

/**
* UserFeedbackRating class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserFeedbackRating extends Enum
{
    /**
    * The Enum UserFeedbackRating
    */
    const NOT_RATED = "notRated";
    const BAD = "bad";
    const POOR = "poor";
    const FAIR = "fair";
    const GOOD = "good";
    const EXCELLENT = "excellent";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}