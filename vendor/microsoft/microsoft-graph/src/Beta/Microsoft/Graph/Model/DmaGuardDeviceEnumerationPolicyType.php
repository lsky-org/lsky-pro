<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DmaGuardDeviceEnumerationPolicyType File
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
* DmaGuardDeviceEnumerationPolicyType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DmaGuardDeviceEnumerationPolicyType extends Enum
{
    /**
    * The Enum DmaGuardDeviceEnumerationPolicyType
    */
    const DEVICE_DEFAULT = "deviceDefault";
    const BLOCK_ALL = "blockAll";
    const ALLOW_ALL = "allowAll";
}