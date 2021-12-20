<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AccountStatus File
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
* AccountStatus class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AccountStatus extends Enum
{
    /**
    * The Enum AccountStatus
    */
    const UNKNOWN = "unknown";
    const STAGED = "staged";
    const ACTIVE = "active";
    const SUSPENDED = "suspended";
    const DELETED = "deleted";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}