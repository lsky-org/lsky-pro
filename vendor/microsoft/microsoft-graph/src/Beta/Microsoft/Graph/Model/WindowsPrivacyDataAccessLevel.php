<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsPrivacyDataAccessLevel File
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
* WindowsPrivacyDataAccessLevel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsPrivacyDataAccessLevel extends Enum
{
    /**
    * The Enum WindowsPrivacyDataAccessLevel
    */
    const NOT_CONFIGURED = "notConfigured";
    const FORCE_ALLOW = "forceAllow";
    const FORCE_DENY = "forceDeny";
    const USER_IN_CONTROL = "userInControl";
}