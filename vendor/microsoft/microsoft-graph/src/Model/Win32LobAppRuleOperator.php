<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Win32LobAppRuleOperator File
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
* Win32LobAppRuleOperator class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Win32LobAppRuleOperator extends Enum
{
    /**
    * The Enum Win32LobAppRuleOperator
    */
    const NOT_CONFIGURED = "notConfigured";
    const EQUAL = "equal";
    const NOT_EQUAL = "notEqual";
    const GREATER_THAN = "greaterThan";
    const GREATER_THAN_OR_EQUAL = "greaterThanOrEqual";
    const LESS_THAN = "lessThan";
    const LESS_THAN_OR_EQUAL = "lessThanOrEqual";
}