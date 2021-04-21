<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserIdentityType File
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
* UserIdentityType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserIdentityType extends Enum
{
    /**
    * The Enum UserIdentityType
    */
    const AAD_USER = "aadUser";
    const ON_PREMISE_AAD_USER = "onPremiseAadUser";
    const ANONYMOUS_GUEST = "anonymousGuest";
    const FEDERATED_USER = "federatedUser";
    const PERSONAL_MICROSOFT_ACCOUNT_USER = "personalMicrosoftAccountUser";
    const SKYPE_USER = "skypeUser";
}