<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AllowInvitesFrom File
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
* AllowInvitesFrom class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AllowInvitesFrom extends Enum
{
    /**
    * The Enum AllowInvitesFrom
    */
    const NONE = "none";
    const ADMINS_AND_GUEST_INVITERS = "adminsAndGuestInviters";
    const ADMINS_GUEST_INVITERS_AND_ALL_MEMBERS = "adminsGuestInvitersAndAllMembers";
    const EVERYONE = "everyone";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}