<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsUserAccountControlSettings File
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
* WindowsUserAccountControlSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsUserAccountControlSettings extends Enum
{
    /**
    * The Enum WindowsUserAccountControlSettings
    */
    const USER_DEFINED = "userDefined";
    const ALWAYS_NOTIFY = "alwaysNotify";
    const NOTIFY_ON_APP_CHANGES = "notifyOnAppChanges";
    const NOTIFY_ON_APP_CHANGES_WITHOUT_DIMMING = "notifyOnAppChangesWithoutDimming";
    const NEVER_NOTIFY = "neverNotify";
}