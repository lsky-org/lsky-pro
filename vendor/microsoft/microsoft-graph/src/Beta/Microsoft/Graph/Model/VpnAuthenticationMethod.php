<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* VpnAuthenticationMethod File
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
* VpnAuthenticationMethod class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class VpnAuthenticationMethod extends Enum
{
    /**
    * The Enum VpnAuthenticationMethod
    */
    const CERTIFICATE = "certificate";
    const USERNAME_AND_PASSWORD = "usernameAndPassword";
    const SHARED_SECRET = "sharedSecret";
    const DERIVED_CREDENTIAL = "derivedCredential";
    const AZURE_AD = "azureAD";
}