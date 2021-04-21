<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AzureADLicenseType File
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
* AzureADLicenseType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AzureADLicenseType extends Enum
{
    /**
    * The Enum AzureADLicenseType
    */
    const NONE = "none";
    const FREE = "free";
    const BASIC = "basic";
    const PREMIUM_P1 = "premiumP1";
    const PREMIUM_P2 = "premiumP2";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}