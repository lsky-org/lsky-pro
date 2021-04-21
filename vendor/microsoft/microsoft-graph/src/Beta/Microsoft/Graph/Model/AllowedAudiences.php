<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AllowedAudiences File
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
* AllowedAudiences class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AllowedAudiences extends Enum
{
    /**
    * The Enum AllowedAudiences
    */
    const ME = "me";
    const FAMILY = "family";
    const CONTACTS = "contacts";
    const GROUP_MEMBERS = "groupMembers";
    const ORGANIZATION = "organization";
    const FEDERATED_ORGANIZATIONS = "federatedOrganizations";
    const EVERYONE = "everyone";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}