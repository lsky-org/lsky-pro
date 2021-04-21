<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* TeamsAppInstallationScopes File
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
* TeamsAppInstallationScopes class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class TeamsAppInstallationScopes extends Enum
{
    /**
    * The Enum TeamsAppInstallationScopes
    */
    const TEAM = "team";
    const GROUP_CHAT = "groupChat";
    const PERSONAL = "personal";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}