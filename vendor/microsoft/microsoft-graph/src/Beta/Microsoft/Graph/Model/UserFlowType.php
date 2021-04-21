<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserFlowType File
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
* UserFlowType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserFlowType extends Enum
{
    /**
    * The Enum UserFlowType
    */
    const SIGN_UP = "signUp";
    const SIGN_IN = "signIn";
    const SIGN_UP_OR_SIGN_IN = "signUpOrSignIn";
    const PASSWORD_RESET = "passwordReset";
    const PROFILE_UPDATE = "profileUpdate";
    const RESOURCE_OWNER = "resourceOwner";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}