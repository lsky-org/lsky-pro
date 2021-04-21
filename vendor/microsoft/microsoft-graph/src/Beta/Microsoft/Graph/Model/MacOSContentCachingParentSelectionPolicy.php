<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSContentCachingParentSelectionPolicy File
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
* MacOSContentCachingParentSelectionPolicy class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MacOSContentCachingParentSelectionPolicy extends Enum
{
    /**
    * The Enum MacOSContentCachingParentSelectionPolicy
    */
    const NOT_CONFIGURED = "notConfigured";
    const ROUND_ROBIN = "roundRobin";
    const FIRST_AVAILABLE = "firstAvailable";
    const URL_PATH_HASH = "urlPathHash";
    const RANDOM = "random";
    const STICKY_AVAILABLE = "stickyAvailable";
}