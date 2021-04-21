<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AssignmentFilterEvaluationResult File
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
* AssignmentFilterEvaluationResult class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AssignmentFilterEvaluationResult extends Enum
{
    /**
    * The Enum AssignmentFilterEvaluationResult
    */
    const UNKNOWN = "unknown";
    const MATCH = "match";
    const NOT_MATCH = "notMatch";
    const INCONCLUSIVE = "inconclusive";
    const FAILURE = "failure";
    const NOT_EVALUATED = "notEvaluated";
}