<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationMethodFeature File
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
* AuthenticationMethodFeature class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationMethodFeature extends Enum
{
    /**
    * The Enum AuthenticationMethodFeature
    */
    const SSPR_REGISTERED = "ssprRegistered";
    const SSPR_ENABLED = "ssprEnabled";
    const SSPR_CAPABLE = "ssprCapable";
    const PASSWORDLESS_CAPABLE = "passwordlessCapable";
    const MFA_CAPABLE = "mfaCapable";
}