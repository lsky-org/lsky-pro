<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccessPackageAssignmentRequestFilterByCurrentUserOptions File
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
* AccessPackageAssignmentRequestFilterByCurrentUserOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccessPackageAssignmentRequestFilterByCurrentUserOptions extends Enum
{
    /**
    * The Enum AccessPackageAssignmentRequestFilterByCurrentUserOptions
    */
    const TARGET = "target";
    const CREATED_BY = "createdBy";
    const APPROVER = "approver";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}