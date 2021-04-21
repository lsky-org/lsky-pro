<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DerivedCredentialProviderType File
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
* DerivedCredentialProviderType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DerivedCredentialProviderType extends Enum
{
    /**
    * The Enum DerivedCredentialProviderType
    */
    const NOT_CONFIGURED = "notConfigured";
    const ENTRUST_DATA_CARD = "entrustDataCard";
    const PUREBRED = "purebred";
    const X_TEC = "xTec";
    const INTERCEDE = "intercede";
}