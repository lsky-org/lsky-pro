<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationMethodSignInState File
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
* AuthenticationMethodSignInState class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationMethodSignInState extends Enum
{
    /**
    * The Enum AuthenticationMethodSignInState
    */
    const NOT_SUPPORTED = "notSupported";
    const NOT_ALLOWED_BY_POLICY = "notAllowedByPolicy";
    const NOT_ENABLED = "notEnabled";
    const PHONE_NUMBER_NOT_UNIQUE = "phoneNumberNotUnique";
    const READY = "ready";
    const NOT_CONFIGURED = "notConfigured";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}