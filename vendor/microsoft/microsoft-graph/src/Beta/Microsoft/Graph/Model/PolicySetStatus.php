<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* PolicySetStatus File
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
* PolicySetStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class PolicySetStatus extends Enum
{
    /**
    * The Enum PolicySetStatus
    */
    const UNKNOWN = "unknown";
    const VALIDATING = "validating";
    const PARTIAL_SUCCESS = "partialSuccess";
    const SUCCESS = "success";
    const ERROR = "error";
    const NOT_ASSIGNED = "notAssigned";
}