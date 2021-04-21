<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsStartMenuAppListVisibilityType File
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
* WindowsStartMenuAppListVisibilityType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsStartMenuAppListVisibilityType extends Enum
{
    /**
    * The Enum WindowsStartMenuAppListVisibilityType
    */
    const USER_DEFINED = "userDefined";
    const COLLAPSE = "collapse";
    const REMOVE = "remove";
    const DISABLE_SETTINGS_APP = "disableSettingsApp";
}