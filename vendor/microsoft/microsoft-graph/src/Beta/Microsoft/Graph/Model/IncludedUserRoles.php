<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IncludedUserRoles File
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
* IncludedUserRoles class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class IncludedUserRoles extends Enum
{
    /**
    * The Enum IncludedUserRoles
    */
    const ALL = "all";
    const PRIVILEGED_ADMIN = "privilegedAdmin";
    const ADMIN = "admin";
    const USER = "user";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}