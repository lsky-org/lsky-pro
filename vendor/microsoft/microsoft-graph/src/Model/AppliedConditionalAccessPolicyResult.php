<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AppliedConditionalAccessPolicyResult File
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
* AppliedConditionalAccessPolicyResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AppliedConditionalAccessPolicyResult extends Enum
{
    /**
    * The Enum AppliedConditionalAccessPolicyResult
    */
    const SUCCESS = "success";
    const FAILURE = "failure";
    const NOT_APPLIED = "notApplied";
    const NOT_ENABLED = "notEnabled";
    const UNKNOWN = "unknown";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}