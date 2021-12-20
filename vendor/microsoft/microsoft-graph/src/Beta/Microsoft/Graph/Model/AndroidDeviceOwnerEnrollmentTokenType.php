<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AndroidDeviceOwnerEnrollmentTokenType File
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
* AndroidDeviceOwnerEnrollmentTokenType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AndroidDeviceOwnerEnrollmentTokenType extends Enum
{
    /**
    * The Enum AndroidDeviceOwnerEnrollmentTokenType
    */
    const GRAPHDEFAULT = "default";
    const CORPORATE_OWNED_DEDICATED_DEVICE_WITH_AZURE_AD_SHARED_MODE = "corporateOwnedDedicatedDeviceWithAzureADSharedMode";
}