<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MicrosoftLauncherSearchBarPlacement File
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
* MicrosoftLauncherSearchBarPlacement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class MicrosoftLauncherSearchBarPlacement extends Enum
{
    /**
    * The Enum MicrosoftLauncherSearchBarPlacement
    */
    const NOT_CONFIGURED = "notConfigured";
    const TOP = "top";
    const BOTTOM = "bottom";
    const HIDE = "hide";
}