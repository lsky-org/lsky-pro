<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Win32LobAppRegistryRuleOperationType File
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
* Win32LobAppRegistryRuleOperationType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Win32LobAppRegistryRuleOperationType extends Enum
{
    /**
    * The Enum Win32LobAppRegistryRuleOperationType
    */
    const NOT_CONFIGURED = "notConfigured";
    const EXISTS = "exists";
    const DOES_NOT_EXIST = "doesNotExist";
    const GRAPHSTRING = "string";
    const INTEGER = "integer";
    const VERSION = "version";
}