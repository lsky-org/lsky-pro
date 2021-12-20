<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* NonEapAuthenticationMethodForEapTtlsType File
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
* NonEapAuthenticationMethodForEapTtlsType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class NonEapAuthenticationMethodForEapTtlsType extends Enum
{
    /**
    * The Enum NonEapAuthenticationMethodForEapTtlsType
    */
    const UNENCRYPTED_PASSWORD = "unencryptedPassword";
    const CHALLENGE_HANDSHAKE_AUTHENTICATION_PROTOCOL = "challengeHandshakeAuthenticationProtocol";
    const MICROSOFT_CHAP = "microsoftChap";
    const MICROSOFT_CHAP_VERSION_TWO = "microsoftChapVersionTwo";
}