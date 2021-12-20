<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* SignInIdentifierType File
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
* SignInIdentifierType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class SignInIdentifierType extends Enum
{
    /**
    * The Enum SignInIdentifierType
    */
    const USER_PRINCIPAL_NAME = "userPrincipalName";
    const PHONE_NUMBER = "phoneNumber";
    const PROXY_ADDRESS = "proxyAddress";
    const QR_CODE = "qrCode";
    const ON_PREMISES_USER_PRINCIPAL_NAME = "onPremisesUserPrincipalName";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}