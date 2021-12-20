<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* JoinType File
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
* JoinType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class JoinType extends Enum
{
    /**
    * The Enum JoinType
    */
    const UNKNOWN = "unknown";
    const AZURE_AD_JOINED = "azureADJoined";
    const AZURE_AD_REGISTERED = "azureADRegistered";
    const HYBRID_AZURE_AD_JOINED = "hybridAzureADJoined";
}