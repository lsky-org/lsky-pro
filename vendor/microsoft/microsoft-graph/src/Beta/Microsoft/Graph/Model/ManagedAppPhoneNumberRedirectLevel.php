<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* ManagedAppPhoneNumberRedirectLevel File
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
* ManagedAppPhoneNumberRedirectLevel class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class ManagedAppPhoneNumberRedirectLevel extends Enum
{
    /**
    * The Enum ManagedAppPhoneNumberRedirectLevel
    */
    const ALL_APPS = "allApps";
    const MANAGED_APPS = "managedApps";
    const CUSTOM_APP = "customApp";
    const BLOCKED = "blocked";
}