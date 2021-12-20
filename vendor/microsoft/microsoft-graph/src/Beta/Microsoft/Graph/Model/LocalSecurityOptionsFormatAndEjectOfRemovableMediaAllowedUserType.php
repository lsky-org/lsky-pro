<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType File
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
* LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType extends Enum
{
    /**
    * The Enum LocalSecurityOptionsFormatAndEjectOfRemovableMediaAllowedUserType
    */
    const NOT_CONFIGURED = "notConfigured";
    const ADMINISTRATORS = "administrators";
    const ADMINISTRATORS_AND_POWER_USERS = "administratorsAndPowerUsers";
    const ADMINISTRATORS_AND_INTERACTIVE_USERS = "administratorsAndInteractiveUsers";
}