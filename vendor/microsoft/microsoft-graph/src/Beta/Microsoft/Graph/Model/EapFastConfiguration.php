<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EapFastConfiguration File
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
* EapFastConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EapFastConfiguration extends Enum
{
    /**
    * The Enum EapFastConfiguration
    */
    const NO_PROTECTED_ACCESS_CREDENTIAL = "noProtectedAccessCredential";
    const USE_PROTECTED_ACCESS_CREDENTIAL = "useProtectedAccessCredential";
    const USE_PROTECTED_ACCESS_CREDENTIAL_AND_PROVISION = "useProtectedAccessCredentialAndProvision";
    const USE_PROTECTED_ACCESS_CREDENTIAL_AND_PROVISION_ANONYMOUSLY = "useProtectedAccessCredentialAndProvisionAnonymously";
}