<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LocalSecurityOptionsInformationShownOnLockScreenType File
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
* LocalSecurityOptionsInformationShownOnLockScreenType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LocalSecurityOptionsInformationShownOnLockScreenType extends Enum
{
    /**
    * The Enum LocalSecurityOptionsInformationShownOnLockScreenType
    */
    const NOT_CONFIGURED = "notConfigured";
    const USER_DISPLAY_NAME_DOMAIN_USER = "userDisplayNameDomainUser";
    const USER_DISPLAY_NAME_ONLY = "userDisplayNameOnly";
    const DO_NOT_DISPLAY_USER = "doNotDisplayUser";
}