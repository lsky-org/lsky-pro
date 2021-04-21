<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10VpnAuthenticationMethod File
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
* Windows10VpnAuthenticationMethod class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Windows10VpnAuthenticationMethod extends Enum
{
    /**
    * The Enum Windows10VpnAuthenticationMethod
    */
    const CERTIFICATE = "certificate";
    const USERNAME_AND_PASSWORD = "usernameAndPassword";
    const CUSTOM_EAP_XML = "customEapXml";
    const DERIVED_CREDENTIAL = "derivedCredential";
}