<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* KerberosSignOnMappingAttributeType File
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
* KerberosSignOnMappingAttributeType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class KerberosSignOnMappingAttributeType extends Enum
{
    /**
    * The Enum KerberosSignOnMappingAttributeType
    */
    const USER_PRINCIPAL_NAME = "userPrincipalName";
    const ON_PREMISES_USER_PRINCIPAL_NAME = "onPremisesUserPrincipalName";
    const USER_PRINCIPAL_USERNAME = "userPrincipalUsername";
    const ON_PREMISES_USER_PRINCIPAL_USERNAME = "onPremisesUserPrincipalUsername";
    const ON_PREMISES_SAM_ACCOUNT_NAME = "onPremisesSAMAccountName";
}